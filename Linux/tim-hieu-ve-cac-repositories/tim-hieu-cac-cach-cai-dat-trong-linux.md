# Tìm hiểu về các cách cài đặt package trong Linux

# Mục lục
[1. Sử dụng yum và apt-get](#1)

[2. Sử dụng rpm và dpkg](#2)

[3. Sử dụng git clone](#3)

[4. Sử dụng compiler](#4)

----
---

# <a name="1"> 1. Sử dụng yum và apt-get </a>

- Đối với Debian based distributions (Ubuntu, Linux Mint,...), ta có thể dử dụng câu lệnh apt-get để có thể cài đặt package, câu lệnh này sẽ cài đặt phiên bản mới nhất của package đó.

- Tương tự với những RPM based Linux distributions (Fedora, Red Hat...), t có thể sử dụng câu lệnh yum.

- Hai câu lệnh này sẽ xử lí luôn những gói phụ thuộc trong quá trình cài đặt (gói phụ thuộc là những gói phải cài trước khi có thể cài gói bạn mong muốn).

- Đây là 2 câu lệnh cài package từ repository, có 2 loại repo chính đó là repo của distro và repo của ứng dụng. Nếu bạn chạy câu lệnh `apt-get update` hoặc `yum update` thì nó sẽ tự động update trên repo của distro. Nếu ứng dụng đó đã ra một phiên bản mới hơn mà distro chưa cập nhật thì bạn phải tự add một repo riêng rồi mới có thể tải nó về.

# <a name="2"> 2. Sử dụng rpm và dpkg </a>


- Đây được coi là công cụ "cấp thấp" để cài đặt package. Để có thể dùng rpm và dpkg để cài, người dùng cần tải các file cài đặt (đuôi .deb đối với Debian based distributions và đuôi rpm đối với RPM based Linux distributions). Ưu điểm của phương pháp này đó là có thể tùy chỉnh được các phiên bản của gói cần cài đặt. Tuy nhiên nó sẽ không tự động điều chỉnh cài đặt cho người dùng những gói phụ thuộc.

# <a name="3"> 3. Sử dụng git clone </a>

- Người dùng cần clone repo về trước khi tiến hành cài đặt. Ví dụ để có thể cài Python từ github. Đầu tiên dùng câu lệnh sau để clone repository:

```
   git clone https://github.com/jkbr/httpie.git
```

   Chạy file `setup.py`

```
   sudo python setup.py install
```

# <a name="4"> 4. Sử dụng compile </a>


- Đây là cách khó nhất để cài một package. Cách này thường được sử dụng bởi những người lập trình viên. Người dùng sẽ phải dùng câu lệnh để compile chương trình, khai báo database... Nó thường được sử dụng đối với những phần mềm chưa được phép cài đặt hoặc không có sẵn trên repository.

- Xem thêm về cách compile và install packages tại [đây](https://www.digitalocean.com/community/tutorials/how-to-compile-and-install-packages-from-source-using-make-on-a-vps)