# Tìm hiểu cấu trúc x86, Virtualization và hypervisor.


## 1. Kiến trúc X86.

Intel đưa ra kiến trúc x86 đây là kiến trúc tập lệnh sử dụng vi sử lý 8086. thế hệ này chỉ hỗ trợ 2^32 = 4G RAM. Sau này được phát triển lên X86-64 sử dụng 64 bit.
 
trong kiến trúc X86 có 1 có chế hoạt động là **Ring**. Đây là cơ chế bảo vệ dữ liệu và chức năng 1 một chương trình tránh khả năng nguy có bị lỗi hoặc truy cập trái phép bởi các chương trình khác.

Số lượng Ring đươc tùy thuộc vào kiên trúc của CPU và hệ điều hành chạy trên nên kiến trúc đó thông thường là từ 4- 6 ring.

![](anhkvm/anh2.png)

Các chương trình tại Ring 0 có đặc quyền cao nhất, có thể tương tác với CPU, bộ nhớ và các thiết bị phần cứng. Ring có số càng cao thì đặc quyền càng thấp. Có thể coi từ Ring 0 đến Ring 3 tương ứng như sau:
Ring 0 : Tài nguyên vật lý
Ring 1 : Các phần mềm ảo hóa
Ring 2 : Máy ảo
Ring 3 : Hệ điều hành

Hầu hết các hệ điều hành chỉ chạy 2 Ring. VD : Window chỉ sử dụng 2 mức là Ring 0 và Ring 3.

Trong kiến trúc x86 và cơ chê hoạt động của Ring có 2 chế độ làm việc chính là:
- User mode.

    Đây là chế đọ của người dùng. Thường chạy từ các ring 3 đên các ring có số lớn hơn.

- kernel mode.
    Đây là chế độ kernel. Được chạy trên ring 0 và có đặc quyền cao nhất có thể truy cập trực tiếp đên phần cứng.

## 2. Virtualization là gì?

Ảo hóa là một khái niệm vô cùng rộng lớn trong thức tế nó là một cái gì đó không có thật. Trong ngành khoa học máy tính thì ảo hóa là sử dụng một môi trường phần cứng không có thật. Công nghệ ảo hóa trên phần cứng được chạy trên 1 phần mềm ảo hóa gọi là hypervisor.

Nói một cách đơn giản, ảo hóa là quá trình ảo hóa một cái gì đó như phần cứng,
network, storage, application, ....

Một số ưu điểm của ảo hóa:
- Hợp nhất máy chủ.
- Cách ly dịch vụ.
- Cung cấp máy chủ nhanh hơn.
- Phục hồi thảm họa.
- Cân bằng tải động.
- Môi trường thử nghiệm và phát triển nhanh hơn.
- Cải thiện độ tin cậy và bảo mật hệ thống.
- Độc lập hệ điều hành hoặc nhà cung cấp phần cứng.

Sau đây là sơ đồ cây thể hiện rõ các thành phần trong ảo hóa.

![](anhkvm/anh1.png)

Hiện nay có rất nhiều kiểu ảo hóa như KVM, Xen, QEMU, Virtualbox,..
Nhưng trong bài nay tôi đề cập đến KVM vì tính mở, linh hoạt và có hiệu suất tốt nhất.
KVM được phát triển, sử dụng trên kiến trúc xủ lý x86. Vậy cấu trúc x86 là gì.


### 2.1 Full virtualization.

![](anhkvm/anh4.jpg)

là một kỹ thuật ảo hóa được sử dụng để cung cấp VME (Virtual Machine Environment) mô phỏng hoàn toàn phần cứng bên dưới. Trong môi trường này, mọi phần mềm có khả năng thực thi trên phần cứng vật lý đều có thể chạy trong VM và mọi hệ điều hành được hỗ trợ bởi phần cứng đều có thể chạy trong từng VM riêng lẻ. Người dùng có thể chạy nhiều hệ điều hành khách khác nhau cùng một lúc. VM mô phỏng phần cứng để cho phép một hệ điều hành khách chưa sửa đổi được chạy độc lập. VM Sử dụng trực tiếp phần cứng.

Full virtualization là cách kết hợp sử dụng dịch nhị phân( binary translation) và thực thi trực tiếp (direct execution).

Ảo hóa hoàn toàn cung cấp sự cô lập và bảo mật tốt nhất cho máy ảo và đơn giản hóa việc di chuyển và tính di động vì cùng một phiên bản HĐH khách có thể chạy trên phần cứng ảo hoặc phần cứng gốc

VMware.
#### 2.2. Para virtualization.

![](anhkvm/anh5-1.png)

Paravirtualization sư dụng bằng việc sửa đổi nhân hệ điều hành. Nhân hệ điều hành đóng vai trò là cầu nối giữa các ứng dụng và xử lý được thực hiện ở cấp phần cứng.

Paravirtualization cho phép một số hệ điều hành khác nhau chạy trên một bộ phần cứng bằng cách sử dụng hiệu quả các tài nguyên như bộ xử lý và bộ nhớ.

Paravirtualization sư dụng các lời gọi hypercalls  giao tiếp trực tiếp với các lớp ảo hóa hypervisor . Một hypercall hiểu tương tự như một cuộc gọi hệ thống. Các cuộc gọi hệ thống được một ứng dụng sử dụng để yêu cầu các dịch vụ từ HĐH và cung cấp giao diện giữa ứng dụng hoặc quy trình và HĐH. Hypervisor cũng cung cấp các giao diện cho các hoạt động khác bao gồm quản lý bộ nhớ và xử lý ngắt.

Trong paravirtualization, sau khi hệ điều hành máy chủ khởi động, trình giả lập VM được khởi chạy. Tại thời điểm đó, có hai HĐH. Máy chủ ở chế độ treo, trong khi khách chạy ở trạng thái hoạt động.

Paravirtualization có nhiều lợi thế đáng kể về hiệu suất và hiệu quả của nó mang lại khả năng mở rộng tốt hơn. Kết

Xen

## 3.Hypervisor là gì.
Hypervisor được sử dụng để cung cấp một lớp trừu tượng để tách các máy ảo khỏi phần cứng hệ thống. Điều này cho phép cài đặt một máy ảo với bất kỳ hệ điều hành nào mà không phải lo lắng về việc có trình điều khiển thiết bị phù hợp cho nền tảng phần cứng . Trình ảo hóa cũng phân tách các máy ảo với nhau. Vì vậy, nếu một máy ảo gặp sự cố, nó không ảnh hưởng đến hoạt động của các máy ảo khác. Có hai loại hypervisor: Loại 1 và Loại 2.

### 3.1 Hypervisor loại 1.
Hypervisor loại 1
![](anhkvm/anh2.jpg)
Hypervisorloại 1 là hypervisor cấp độ phần cứng hoặc bare-metal. Các shypervisor loại 1 được cài đặt trực tiếp trên nền tảng phần cứng. Bởi vì các trình siêu giám sát loại 1 ngồi trực tiếp trên phần cứng, thường có ít chi phí hoạt động hơn so với các trình siêu giám sát loại 2. Điều này có thể tăng công suất và hiệu suất tổng thể của hệ thống.

### 3.2 Hypervisor loại 2.
Hypervisor loại 2
![](anhkvm/anh3.jpg))
Hypervisor loại 2 là các hypervisor giám sát phần mềm. Loại siêu giám sát loại 2 được cài đặt trên hệ điều hành hiện có . Bởi vì các trình ảo hóa Loại 2 có thể cài đặt trên hệ điều hành hiện có, chúng thuận tiện hơn các trình ảo hóa Loại 1. Ví dụ: khi bạn muốn kiểm tra một trình ảo hóa, bạn không phải dành một máy cụ thể cho nó. Bạn có thể sử dụng một máy hiện có với một hệ điều hành hiện có.

### 3.3 Hyper-V

Hyper-V
HYpervisor của Microsoft được gọi là Hyper-V. Nó là một trình ảo hóa Loại 1 thường bị nhầm lẫn với một trình ảo hóa Loại 2. Điều này là do có một hệ điều hành phục vụ khách hàng đang chạy trên một máy chủ. Nhưng hệ điều hành đó thực sự được ảo hóa và đang chạy trên đỉnh của trình ảo hóa