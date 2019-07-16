# Tìm hiểu file fstab
fstab là một tập tin cấu hình chứa các thông các phân vùng trên ổ cứng như các thiết bị lưu trữ trong máy tính.
Cấu trúc sơ lược của file fstab
![](anhfstab.png)

Côt 1st là ổ đĩa hoặc thiết bị cần mount

Cột 2nd là nơi mount mặc định

Cột 3rd là loại file system

- Các định dạng file hay được dùng cho hệ thống.
    - ext2, ext3 dùng cho các hệ thống linux. Ext3 hộ trợ tính năng *journaling*
    - ReiserFS: hỗ trợ tính năng *journaling* và có nhiều tính năng nổi trội hơn so với ext3 và cũng dc sử dụng trên linux
    - Swap: phân vùng  làm không gian bộ nhớ ảo, dùng để bổ sung thêm bộ nhớ cho hệ thống khi hệ điều hành thấy thiếu hụt bộ nhớ RAM
    - Vfat( FAT16, FAT32) và NTFS: đây là file systems được windows hỗ trợ
    - Nfs: chia sẻ tài nguyên qua mạng khi các máy ở xa, tìm hiểu chi tiết [tại đây](http://)
    - auto: đây không là một filesystem. khi có thông số này nó sẽ tự nhận diện loại filesystem khi thiết bị đó được mount.

Cột 4th là các tùy chọn khi mount.
- auto và noauto: auto là tự động mount lúc khởi động hệ thống còn noauto là ngược lại 
- user: cho phép người dùng thông thường được quyền mount
- nouser: chỉ cho phép người dùng root mới có quyền mount
- exec và noexec: cho phép chạy các file nhị phân trên thiết bị và noexec là ngược lại
- ro ( read-only): chỉ cho phép quyền đọc ghi trên thiết bị.
- rw (read- write): cho phép quyền đọc và ghi trên thiết bị
- sync: thao tác nhập xuất (I/O) trên file system được đồng bộ hóa.
- async: thao tác nhập xuất (I/O) trên filesystem không được đồng bộ
- defaults: chọn các tùy chọn như *rw, suid, dev, exec, auto, nouser, ansync*

Cột 5th là tùy chọn cho chương trình  dump, công cụ sao luu filesystem
- Nếu là số 0 : bỏ qua việc sao lưu
- Nếu là số 1 : thực hiện sao lưu

Cột 6th là tùy chọn cho chương trình fdisk, một công cụ dò lỗi trên filesystem
- Nếu là sô 0 : bỏ qua việc kiểm tra
- Nếu là sô 1 : thực hiệ kiểm tra


