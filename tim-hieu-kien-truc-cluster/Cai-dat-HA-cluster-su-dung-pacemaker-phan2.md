# Cài đăt HA cluster sư dụng pacemaker phần 2

## Mục lục

Sau khi các ban đã cài đặt thành công iSCSI storage trên các node và máy storage. Kiểm tra xem các node cài web server có sử dụng chung vùng nhớ để lưu không. Nếu có thì chúng ta tiếp tục với phần cài đặt pacemaker để làm  High Availability cho hề thống.

Đây là phần chính của 2 bài này.


## 1: Cài đặt Pacemaker và corosync


### Bước 8: Cài đăt và cấu hình pacemaker 

### Các bước tiếp theo cài đặt trên 3 node `C8-Node1`, `C8-Node2`, `C8-Node3`

Cài đặt pacemaker

     dnf --enablerepo=HighAvailability -y install pacemaker pcs 

Đặt service khởi động cùng hệ thống.

    systemctl enable --now pcsd
Mở port cho firewall
    
    firewall-cmd --permanent --add-service=high-availability
    firewall-cmd --add-service=high-availability
    firewall-cmd --reload

Setup administrator account. Ta phải set password trên tất cả các node.

    passwd hacluster 

Sau khi setup password trên tất cả các node, cluster đã có thể kết nối đến tất cả các node. Chạy lệnh sau trên node 1

    [root@node1 ~]#  pcs host auth node1 node2 node3

Trong đo node1, node2, node3 à các nde trong cluster.

Tạo cluster trên node1.

    [root@node1 ~]# pcs cluster setup apache_ha node1 node2 node3

![](img/anh8-2.png)

Enable và Verify Cluster Service

    [root@node1 ~]# pcs cluster start --all
    [root@node1 ~]# pcs cluster enable --all

Tiếp tục verifying bằng lệnh sau:

    [root@node1 ~]# pcs cluster status

Kiểm tra lại kêt quả.

![](img/anh8-3.png)

### Bước 9: Cấu hình cài đặt fencing.

Fencing là khái niệm để cách ly node khi một node nào đó bị lỗi. Cơ chế này nhằm để bảo vệ dữ liệu và ngăn chặn phá hỏng cluster. Nếu không có Fencing, dữ liệu có thể bị lỗi khi một node có vấn đề.

Trong pacemaker, fencing được gọi là STONISH. Ta sẽ add STONISH này vào các node:

Cài đặt gói Fencing Agent Package

    dnf --enablerepo=HighAvailability -y install fence-agents-scsi

Ta sẽ add và sử dụng phân vùng /dev/sdc disk và tạo LVM fence_lv 

    fdisk /dev/sdb

![](img/anh9-1.png)
Tiếp đên tạo các logical volume 
    
    pvcreate /dev/sdb1

    vgcreate fence_vg /dev/sdb1

    lvcreate -l 100%FREE -n fence_lv fence_vg

Tạo Fencing Device

    pcs stonith create Fence_Dev fence_scsi pcmk_host_list="node1 node2 node3" devices=/dev/mapper/fence_vg-fence_lv meta provides=unfencing
    
Kiểm tra cấu hình stonith

    pcs stonith config Fence_Dev

Sau đó reboot lại các node.

Kiểm tra lại hoạt động của cluster và fencing

    pcs status.

![](img/anh9-2.png)

Như vậy là ta đã cấu hình thành công Ha_cluster trên web server apache.

Tiếp theo ta sẽ thêm một số resource cho cluster phòng cho trường hợp 1 trong các node bị hỏng ta có thể khôi phục lại.

## 2. Tạo và quản lý các node trong cluster

### 2.1 Dừng dịch vụ cluster trong 1 node

    pcs cluster stop [node_name]

Ví dụ tôi muốn dừng dịch vụ cluster trên node1 thì ta gõ lệnh.
    
    pcs cluster stop node1


