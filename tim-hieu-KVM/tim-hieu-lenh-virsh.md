# Hướng dẫn sử dụng vish.

## Virsh là gì.
Libvirt là một bộ các phần mềm mà cung cấp các cách thuận tiện để quản lý máy ảo và các chức năng của ảo hóa. Những phần mềm này bao gồm một thư viện API daemon (libvirtd) và các gói tiện tích giao diện dòng lệnh (virsh).

Virsh là một tools kiểm soát và thực hiện hành động với các máy ảo.
### 1. Tất cả lệnh virsh được sử dụng.
virsh --help

### 2. Hiện tất cả máy ảo đã được cài đặt.
virsh list --all

```
root@iou:/etc/libvirt/qemu# virsh --all
error: unsupported option '--all'. See --help.
root@iou:/etc/libvirt/qemu# virsh list --all
 Id   Name          State
------------------------------
 3    thanhbc       running
 -    centos7.0     shut off
 -    centos7.0-3   shut off
```
### 3. Khởi động máy ảo.
virsh start <ten may ao>

```
root@iou:/etc/libvirt/qemu# virsh start thanhbc
Domain thanhbc started
```

### 4. Hiện thị các máy ảo đang hoạt động.
virsh list 
```
root@iou:/etc/libvirt/qemu# virsh list
 Id   Name      State
-------------------------
 3    thanhbc   running
```
### 5. Tắt 1 máy ảo.
virsh shutdown <ten may ao>
```
root@iou:/etc/libvirt/qemu# virsh shutdown thanhbc
Domain thanhbc is being shutdown
```
### 6. Xem thông tin 1 máy ảo
virsh dominfo <ten may ao>
```
root@iou:/etc/libvirt/qemu# virsh dominfo thanhbc
Id:             4
Name:           thanhbc
UUID:           072ebbd2-85c9-40ac-92a2-41d8251e033b
OS Type:        hvm
State:          running
CPU(s):         1
CPU time:       18,2s
Max memory:     2097152 KiB
Used memory:    2097152 KiB
Persistent:     yes
Autostart:      disable
Managed save:   no
Security model: apparmor
Security DOI:   0
Security label: libvirt-072ebbd2-85c9-40ac-92a2-41d8251e033b (enforcing)
```
### 7. CHỉnh sưả thông số  của máy ảo

```
virsh edit <ten may ao>
```

![](anhkvm/anh47.png)

Ta co thể chỉnh sưar thông số cpu, ram, network.

### 8. Clone 1 máy ảo mới
```
virt-clone \
> --original=thanhbc \
> --name=thanhbc-clone \
> --file=/var/kvm/images/thanhbc-clone.img
```
![](anhkvm/anh49.png)

### 9. xóa một máy ảo.
```
virsh destroy <tên máy ảo>
virsh undefine <tên may ao>
```
sau đó xóa file khởi tạo của máy ảo. Trên đây t lưu file ở 1 chỗ khác mặc định .
```
rm -rf /var/kvm/images/thanhbc-clone.img
```

![](anhkvm/anh48.png)

### 10. Các câu lệnh Snapshot
Ta sử dụng câu lệnh để xem các option.
```
virsh --help | grep snapshot
```
![](anhkvm/anh54.png)

Tạo mới một snapshot
```
virsh snapshot-create-as --domain centos7.0 --name snp-centos7.0 --decription "ban snapshot"
```
```
root@iou:/var/lib/libvirt/images# virsh snapshot-create-as --domain centos7.0  --name snp-centost7.0  --description "bản snapshot"
Domain snapshot snp-centost7.0 created
```
Kiểm tra xem đã taoj thành công chưa.
```
virsh snapshot-list centos7.0
```
![](anhkvm/anh55.png)

### 11. Khởi tạo một máy ảo mới 

Ta sử dụng câu lệnh có các option cơ bản.
```
root@iou:/home/buithanh/Documents/he_dieu_hanh# virt-install --name=Centos7-test --vcpus=1 --memory=1024 --cdrom=centos7-64.iso --disk=/var/lib/libvirt/images/centos7-test.qcow2,size=10 --os-variant=rhel7 --network bridge=virbr1
```
Trong đó:

- --name đặt tên cho máy ảo 
- --vcpus là tổng số CPU tạo cho máy ảo
- --memory chỉ ra dung lượng RAM cho máy ảo (tính bằng MB)
- --cdrom chỉ ra đường dẫn đến file ISO. Nếu muốn boot bằng cách khác ta dùng option --locaion sau đó chỉ ra đường dẫn đến file (có thể là đường dẫn trên internet).
- --disk chỉ ra vị trí lưu disk của máy ảo. size chỉ ra dung lượng disk của máy ảo(tính bằng GB)
- --os-variant chỉ ra kiểu của HĐH của máy ảo đang tạo. Option này có thể chỉ ra hoặc không nhưng nên sử dụng nó vì nó sẽ cải thiện hiệu năng của máy ảo. Nếu bạn không biết HĐH hành của mình thuộc loại nào bạn có thể tìm kiếm thông tin bằng cách dùng lệnh osinfo-query os
- --network chỉ ra cách kết nối mạng của máy ảo. Trên đây là một số option cơ bản để tạo máy ảo. Bạn có thể tìm hiểu thêm bằng cách sử dụng lệnh virt-install --help

### 12. Một số lệnh xem các thông số của VM.
Câu lệnh xem thông tin về file disk của VM.
```
qemu-img info /var/lib/libvirt/images/centos7-test.qcow2
```

![](anhkvm/anh57.png)

Câu lệnh cem thông tin cơ bản của VM.
```
virsh dominfo centos7-test
```

![](anhkvm/anh58.png)

Câu lệnh kiểm tra các cổng của 1 VM.
```
virsh domiflist Centos7-test
```

![](anhkvm/anh59.png)

