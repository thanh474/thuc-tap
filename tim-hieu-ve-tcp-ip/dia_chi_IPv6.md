# Tìm hiểu về địa chỉ IPv6

## Mục lục
[1.IPv6 là gì?](#1)

[2. Ưu điểm so với IPv4](#2)

[3. Cấu trúc, phân chia bộ phận](#3)

[4. Các loại địa chỉ IPv6.](#4)
- [4.1 UNICAST](#4.1)
- [4.2 MULTICAST](#4.2)
- [4.3 ANYCAST](#4.3)

---
## 1. IPv6 là gì?
IPv6 (internet protocol version 6) sử dụng 128 bit  là giao thức truyền thông cung cấp hệ thống đánh giá vị trí và định tuyến luu lượng các trên internet.

## 2. Ưu điểm so với IPv4
- Không gian địac chỉ lớn 2^128 địa chỉ.
- Header được cải  thiện.
- Tự động cấu hình không trạng thái.
- Multicast tăng cường truyền thông hiệu quả.
- Jumbograms: hỗ trọ packet payload cực lớn hiệu quả.
- Bảo mật lớp mạng, mã hóa và xac thực truyền thông.
- Khả năng QoS ( quality of service) đánh dấu cho các gói tin và dán nhãn để xác định đường đi ưu tiên.
- Anycast. dịch vụ dự phòng có cấu truc đặc biệt.
- Tính di dộng dễ dàng xử lý vói thiết bị di đông hay chuyển vùng.

## 3. Cấu trúc, phân chia bộ phận

Địa chỉ IPv6 bao gồm 8 octet có dang: xxxx.xxxx.xxxx.xxxx.xxxx.xxxx.xxxx.xxxx

Ví dụ: 2001:0j68:0000:0000:0000:0000:1986:69af

Quy ước viết tắt địa chỉ IPv6:
- Dãy 4 chữ số 0 liên tục sẽ viết tắt với nhau bằng ": :".
- Các sô 0 trong nhóm, được bỏ qua nếu khối đó bắt đầu bằng 4 sô 0 thì bỏ 1 số 0 mỗi khối, nếu khối có 3 sô 0 thì bỏ 1 số 0 mỗi khối, nếu khối có 2 sô 0 thì bỏ 1 số ko mỗi khối nếu khối có 1 số 0 thì bỏ số 0 viết lại là ": :".

Theo quy ước trên ta sẽ viết lại địa chỉ IPV6 như sau
2001:0j68: :1986:69af

- Truy cấp địa chỉ IPv6 qua web port 80 ta nhập sau 
http://[ địa chỉ IPv6 ] :  "port" /

- Địa chỉ IPv6 có 3 phần:
    - 3 octet đầu: 2001:0j68:0000 : là phần site prefix:  nó được gán đến trang của bạn bằng môi ISP , các máy tính trong một vị trí sẽ được chia sẻ cùng một site  prefix. Site prefix hướng tới dùng chung khi nó nhạn ra mạng của bạn và nó sẽ cho phép mạng có khả năng truy cập.

    - 1 octet tiếp theo :0000 : là phần subnet ID miêu tả cấu trúc của trang mạng, các mạng con làm việc với nhau, có độ dài 16 bytes.

    - 4 octet cuối :0000:0000:1986:69af : là phần interface ID nhận dạng  host riêng duy nhất trong mạng, được cấu hình dựa vào địa chỉ MAC của giao diện mạng  có thể cấu hình định dạng EUI-64

# 4. Các loại địa chỉ IPv6
MULTICAST, UNICAST VÀ ANYCAST.

## 4.1 UNICAST
- Có 2 loại là unicast toàn cục và unicast liên kêt cục bộ.
- unicast toàn cục là có thể truy cập rộng rãi 
    - site prexit chiếm 48 bit
    - subnet ID chiếm 16 bit
- unicast liên kết cục bộ chỉ có thể truy cập tói các máy tính khác mà đã chia sẻ liên kết.
    - có 128 byte chiều dài
        - site prexit chiếm 10 bit       
        - subnet ID chiếm 64 bit
        - interface  ID dài 54 bit, bắt nguồn từ 48 bit địa chỉ MAC đã gán vào card mạng để giao thức phân rang giới

## 4.2 MULTICAST.
- dùng nhận dạng một nhóm giao diện mạng. các giao diện mạng điển hình dc định vị trên các máy tính phức hợp nhưng ko phải là thiết bị thuần túy
- sử dụng gửi thông tin đến bất kỳ các mang giao diện nào

## 4.3 ANYCAST.
- là sự kết hợp các địa chỉ UNICAST và MULTICAST
- anycast gửi dũ liệu đến 1 người nhân cụ thể ở ngoài  nhóm người nhận
