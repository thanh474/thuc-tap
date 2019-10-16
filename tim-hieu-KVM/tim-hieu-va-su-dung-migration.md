# Sử dụng migration 

## migration là gì 

## offlive migrate

##  live migrate.

Mô hình.

IP planning.

### Cài đặt.
#### Cài đặt trên VM1.

Cài đặt NFS-server cho  VM1.

cài đặt packet đẻ sử dụng nfs
 ```
yum install nfs-utils -y
 ```

 Tạo thư mục chia sẻ tài nguyên trên server.
```
mkdir /root/sharedisk
```
Sửa file /etc/exports để tạo mountpoint export.
```
echo "/root/sharedisk 192.122.40.0/24 (rw,no_root_squash)" >> /etc/exports
```
Khởi động NFS server.
```
sudo systemctl start rpcbind nfs-server
```

Khởi động NFS cùng server khi bật máy.
```
sudo  systemctl enable rpcbind nfs-server
```
`
Tiếp đến ta cấu hình firewall để NFS client được phép truy cập và live migrate thông qua.

```
sudo firewall-cmd --permanent --add-service=nfs
sudo firewall-cmd --permanent --add-service=mountd
sudo firewall-cmd --permanent --add-service=rpc-bind
sudo firewall-cmd --permanent --add-port=16509/tcp
sudo firewall-cmd --permanent --add-port=16509/udp
sudo firewall-cmd --permanent --add-port=2049/tcp
sudo firewall-cmd --permanent --add-port=2049/udp
sudo firewall-cmd --reload
```

Kiểm tra mountpoint trên server. 
```
showmount -e localhost
```

### Cài đặt KVM.
Cấu hình KVM đề 2 máy có thể migrate được với nhau.
