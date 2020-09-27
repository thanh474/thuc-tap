<div class="show_content_pc">Hà Nội, 05/20160
HỌC VIỆN KỸ THẬT MẬT MÃ0
KHOA AN TOÀN THÔNG TIN------

BÁO CÁO BÀI TẬP LỚN>
ĐỀ TÀI:
TÌM HIỂU HỆ THỐNG GIÁM SÁT MÃ NGUỒN MỞ0
TẬP TRUNG OSSIM


HỌC VIỆN KỸ THẬT MẬT MÃ0
KHOA AN TOÀN THÔNG TIN

------

MÔN: AN TOÀN CƠ SỞ DỮ LIỆU

ĐỀ TÀI:
TÌM HIỂU HỆ THỐNG GIÁM SÁT MÃ NGUỒN MỞ
<div style="text-align: center;margin-top: 10px"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2979760623205174" data-ad-slot="7919569241" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>
TẬP TRUNG OSSIM

Cán bộ hướng dẫn:

Vũ Thị Vân.

Nhóm sinh viên:
1.
2.
3.
4.

Ngô Văn Thỉnh.
Phạm Công Lý.
Nguyễn Văn Hoàng.
Lê Văn Minh.


Hà Nội, 05/2016


HỌC VIỆN KỸ THẬT MẬT MÃ0
KHOA AN TOÀN THÔNG TIN

-----MÔN: AN TOÀN CƠ SỞ DỮ LIỆU

ĐỀ TÀI:
TÌM HIỂU HỆ THỐNG GIÁM SÁT MÃ NGUỒN MỞ0
TẬP TRUNG OSSIM

Nhận xét: ...................................................................................................................
.....................................................................................................................................
.....................................................................................................................................
.....................................................................................................................................
.....................................................................................................................................
.....................................................................................................................................
.....................................................................................................................................
.....................................................................................................................................
Điểm chuyên cần:.......................................................................................................
Điểm báo cáo: ............................................................................................................
<div style="text-align: center;margin-top: 10px"><div id="abditvc"><p></p><p></p></div></div><div id="abditvc"><p></p><p></p></div>

Xác nhận của cán bộ hướng dẫn


MỤC LỤC

5


DANH MỤC HÌNH VẼ

6


LỜI NÓI ĐẦU0
Ngày nay, thế giới đang ngày một phát triển, công nghệ thông tin đóng một0
vai trò quan trọng và không thể thiếu trong mọi lĩnh vực của đời sống. Số lượng0
máy tính gia tăng, đòi hỏi hệ thống mạng phải phát triển theo để đáp ứng nhu cầu0
kết nối toàn cầu. Hệ thống mạng ngày một phát triển đòi hỏi khả năng quản trị để0
có thể duy trì hoạt động của mạng một cách tốt nhất. Vì vậy người quản trị mạng0
cần một công cụ hỗ trợ khả năng quản trị.
Đối với một hệ thống mạng, để có thể duy trì mạng hoạt động tốt thì có rất0
nhiều thứ phải quản trị như là hiệu năng mạng, lưu lượng mạng, các ứng dụng chạy0
trên mạng, người sử dụng mạng, an ninh mạng. Security Information Event0
Management (SIEM) là một giải pháp hoàn chỉnh, đầy đủ cho phép các tổ chức0
thực hiện việc giám sát các sự kiện an toàn thông tin cho một hệ thống. Đây là0
công nghệ được các chuyên gia bảo mật rấtquan tâm trong thời gian gần đây. Nó0
sử dụng các phương pháp phân tích chuẩn hóa và mối tương quan giữa các sự kiện0
để đưa ra cảnh báo cho người quản trị.
Để đáp ứng thực hiện một giải pháp SIEM chúng em xin nghiên cứu đề tài
“TÌM

HIỂU HỆ THỐNG GIÁM SÁT MÃ NGUỒN MỞ TẬP

TRUNG OSSIM”. Đề tài tập trung tìm hiểu mô hình SIEM, nghiên cứu mô0
hình thiết bị hệ thống riêng biệt và tùy chọn trong mã nguồn mở OSSIM, từ đó tích0
hợp các công cụ an ninh mạng vào thiết bị. Từ đó đề xuất một mô hình giám sát an0
ninh mạng cho Học Viện Kỹ Thuật Mật Mã.
Do kiến thức còn hạn chế nên không tránh khỏi những thiếu sót, rất mong0
nhận được sự đóng góp của thầy cô và các bạn.

7


CHƯƠNG 1: TÌM HIỂU VỀ CÔNG NGHỆ PHÁT HIỆN XÂM0
NHẬP MẠNG IDS (Intrusion Detection System)
1.1. Khái niệm về phát hiện xâm nhập và ngăn chặn xâm nhập0
Phát hiện xâm nhập là tiến trình theo dõi các sự kiện xảy ra trên một hệ thống0
máy tính hay hệ thống mạng, phân tích chúng để tìm ra các dấu hiệu xâm nhập bất0
hợp pháp. Xâm nhập bất hợp pháp được định nghĩa là sự cố gắng tìm mọi cách để xâm0
hại đến tính toàn vẹn, tính sẵn sàng, tính có thể tin cậy hay là sự cố gắng vượt qua các0
cơ chế bảo mật của hệ thống máy tính hay mạng đó.
Ngăn ngừa xâm nhập nhằm mục đích bảo vệ tài nguyên, dữ liệu và0
mạng. Chúng sẽ làm giảm bớt những mối đe doạ tấn công bằng việc loại bỏ những lưu0
lượng mạng có hại hay có ác ý trong khi vẫn cho phép các hoạt động hợp pháp tiếp0
tục. Mục đích ở đây là một hệ thống hoàn hảo – không có những báo động giả nào làm0
giảm năng suất người dùng cuối và không có những từ chối sai nào tạo ra rủi ro0
quá mức bên trong môi trường.
Một hệ thống chống xâm nhập (Intrusion Prevention System –IPS) được định0
nghĩa là một phần mềm hoặc một thiết bị chuyên dụng có khả năng phát hiện0
xâm nhập và có thể ngăn chặn các nguy cơ gây mất an ninh.
IDS và IPS có rất nhiều điểm chung, do đó hệ thống IDS và IPS có thể được0
gọi chung là IDP-Intrusion Detection and Prevention. Nội dung của chương sẽ được0
trình bày theo 2 phần chính: Intrusion Detection và Intrusion Prevention.
1.2. IDS (Intrusion Detection System- hệ thống phát hiện xâm nhập)

ID (Intrusion Detection ) là giám sát các sự kiện đang xảy ra trong một hệ0
thống máy tính hoặc hệ thống mạng và phân tích để tìm ra các dấu hiệu của các0
sự cố có thể xảy ra vi phạm chính sách bảo mật máy tính, chính sách sử dụng0
chấp nhận các tiêu chuẩn an toàn thông tin. Các sự cố xuất phát từ rất nhiều0
nguyên nhân như: các phần mềm độc hại malware (Ví dụ: worms, spyware,…),
các kẻ tấn công xâm nhập trái phép vào hệ thống từ Internet, người dùng cuối0
truy cập vào các tài nguyên không được phép truy cập,…
Hệ thống phát hiện xâm nhập trái phép là những ứng dụng phần mềm chuyên0
dụng để phát hiện xâm nhập vào hệ thống mạng cần bảo vệ. IDS được thiết kế không

8


phải với mục đích thay thế các phương pháp bảo mật truyền thống, mà để hoàn thiện0
nó.
1.2.1. Chức năng0
Chức năng quan trọng nhất là: giám sát – cảnh báo – bảo vệ.

- Giám sát: lưu lượng mạng và các hoạt động khả nghi.
- Cảnh báo: báo cáo về tình trạng mạng cho hệ thống và nhà quản trị.
- Bảo vệ: Dùng những thiết lập mặc định và sự cấu hình từ nhà quản trị0
mà có những hành động thiết thực chống lại kẻ xâm nhập và phá hoại.
Chức năng mở rộng:
Phân biệt: tấn công bên trong và tấn công bên ngoài.
Phát hiện: những dấu hiệu bất thường dựa trên những gì đã biết hoặc nhờ0
vào sự so sánh thông lượng mạng hiện tại với baseline.
1.2.2. Phân loại0
Có 2 loại IDS là Network Based IDS(NIDS) và Host Based IDS (HIDS):

a. Host Based IDS (HIDS)
Bằng cách cài đặt một phần mềm trên tất cả các máy tính chủ, HIDS dựa trên0
máy chủ quan sát tất cả những hoạt động hệ thống, như các file log và những0
lưu lượng mạng thu thập được. Hệ thống dựa trên máy chủ cũng theo dõi OS, những0
cuộc gọi hệ thống, lịch sử sổ sách (audit log) và những thông điệp báo lỗi trên hệ0
thống máy chủ.
Lợi thế của HIDS:

- Có khả năng xác đinh user liên quan tới một event.
- HIDS có khả năng phát hiện các cuộc tấn công diễn ra trên một
-

máy, NIDS không có khả năng này.
Có thể phân tích các dữ liệu mã hoá.
Cung cấp các thông tin về host trong lúc cuộc tấn công diễn ra trên host0
này.

Hạn chế của HIDS:

- Thông tin từ HIDS là không đáng tin cậy ngay khi sự tấn công vào0
host này thành công.

-

Khi OS bị "hạ" do tấn công, đồng thời HIDS cũng bị "hạ".
HIDS phải được thiết lập trên từng host cần giám sát.

9


- HIDS không có khả năng phát hiện các cuộc dò quét mạng (Nmap,
-

Netcat…).
HIDS cần tài nguyên trên host để hoạt động.
HIDS có thể không hiệu quả khi bị DOS.
Đa số chạy trên hệ điều hành Window. Tuy nhiên cũng đã có 1 số0
chạy được trên UNIX và những hệ điều hành khác.

b. Network Base IDS (NIDS)

Hình 1. NIDS

Hệ thống NIDS dựa trên mạng sử dụng bộ dò và bộ cảm biến cài đặt trên toàn0
mạng. Những bộ dò này theo dõi trên mạng nhằm tìm kiếm những lưu lượng trùng với0
những mô tả sơ lược được định nghĩa hay là những dấu hiệu. Những bộ cảm biến thu0
nhận và phân tích lưu lượng trong thời gian thực. Khi ghi nhận được một mẫu lưu0
lượng hay dấu hiệu, bộ cảm biến gửi tín hiệu cảnh báo đến trạm quản trị và có0
thể được cấu hình nhằm tìm ra biện pháp ngăn chặn những xâm nhập xa hơn. NIDS là0
tập nhiều sensor được đặt ở toàn mạng để theo dõi những gói tin trong mạng so sánh0
với với mẫu đã được định nghĩa để phát hiện đó là tấn công hay không.
Lợi thế của Network-Based IDS:

- Quản lý được cả một network segment (gồm nhiều host).
- "Trong suốt" với người sử dụng lẫn kẻ tấn công.
10


-

Cài đặt và bảo trì đơn giản, không ảnh hưởng tới mạng.
Tránh DOS ảnh hưởng tới một host nào đó.
Có khả năng xác định lỗi ở tầng Network (trong mô hình OSI).
Độc lập với OS.

Hạn chế của Network-Based IDS:

- Có thể xảy ra trường hợp báo động giả (false positive), tức không có
-

intrusion mà NIDS báo là có intrusion.
Không thể phân tích các traffic đã được encrypt (vd: SSL, SSH,

-

IPSec…).
NIDS đòi hỏi phải được cập nhật các signature mới nhất để thực sự an

-

toàn.
Có độ trễ giữa thời điểm bị attack với thời điểm phát báo động. Khi

-

báo động được phát ra, hệ thống có thể đã bị tổn hại.
Không cho biết việc attack có thành công hay không.Một trong những0
hạn chế là giới hạn băng thông. Những bộ dò mạng phải nhận tất cả0
các lưu lượng mạng, sắp xếp lại những lưu lượng đó cũng như phân tích0
chúng.

1.2.3. Kiến trúc và nguyên lý hoạt động0
IDS/IPS bao gồm các thành phần chính:

- Thành phân thu thập gói tin.
- Thành phần phát hiện gói tin.
- Thành phần xử lý gói tin.
a. Thành phần thu thập gói tin:
Thành phần này có nhiệm vụ lấy tất cả các gói tin đi đến mạng. Thông thường0
các gói tin có địa chỉ đích không phải là của một card mạng thì sẽ bị card mạng đó0
hủy bỏ nhưng card mạng của IDS được đặt ở chế độ thu nhận tất cả. Tất cả các gói0
tin qua chúng đều được sao chụp, xử lý, phân tích đến từng trường thông tin. Bộ thu0
thập gói tin sẽ đọc thông tin từng trường trong gói tin, xác định chúng thuốc kiểu0
gói tin nào, dịch vụ gì…Các thông tin này được chuyển đến thành phần phát hiện.

b. Thành phần phát hiện gói tin:
Bộ cảm biến đóng vai trò quyết định trong thành phần này. Bộ cảm biến được0
tích hợp với thành phần sưu tập dữ liệu – một bộ tạo sự kiện. Cách sưu tập này được0
xác định bởi chính sách tạo sự kiện để định nghĩa chế độ lọc thông tin sự kiện. Bộ

11


tạo sự kiện (hệ điều hành, mạng, ứng dụng) cung cấp một số chính sách thích hợp0
cho các sự kiện, có thể là một bản ghi các sự kiện của hệ thống hoặc các gói mạng. Số0
chính sách này cùng với thông tin chính sách có thể được lưu trong hệ thống được bảo0
vệ hoặc bên ngoài. Trong trường hợp nào đó, ví dụ khi luồng dữ liệu sự kiện được0
truyền tải trực tiếp đến bộ phân tích mà không có sự lưu dữ liệu nào được thực hiện.
1.3. IPS0
IPS có hai chức năng chính là phát hiện các cuộc tấn công và chống lại các0
cuộc tấn công đó. Phần lớn hệ thống IPS được đặt ở vành đai mạng, đủ khả năng bảo0
vệ tất cả các thiết bị trong mạng.
1.3.1. Kiến trúc chung của các hệ thống IPS

- Module phân tích luồng dữ liệu.
- Modul phát hiện tấn công.
- Modul phản ứng.
Khi có dấu hiệu của sự tấn công hoặc thâm nhập, modul phát hiện tấn công sẽ0
gửi tín hiệu báo hiệu có sự tấn công hoặc thâm nhập đến modul phản ứng. Lúc đó0
modul phản ứng sẽ kích hoạt tường lửa thực hiện chức nǎng ngǎn chặn cuộc tấn công0
hay cảnh báo tới người quản trị. Tại modul này, nếu chỉ đưa ra các cảnh báo tới các0
người quản trị và dừng lại ở đó thì hệ thống này được gọi là hệ thống phòng thủ bị0
động. Modul phản ứng này tùy theo hệ thống mà có các chức nǎng và phương pháp0
ngǎn chặn khác nhau. Dưới đây là một số kỹ thuật ngǎn chặn.

• Kết thúc tiến trình: Cơ chế của kỹ thuật này là hệ thống IPS gửi các0
gói tin nhằm phá huỷ tiến trình bị nghi ngờ. Tuy nhiên phương pháp này0
có một số nhược điểm. Thời gian gửi gói tin can thiệp chậm hơn so với0
thời điểm tin tặc bắt đầu tấn công, dẫn đến tình trạng tấn công xong rồi0
mới bắt đầu can thiệp.
• Huỷ bỏ tấn công: Kỹ thuật này dùng tường lửa để hủy bỏ gói tin0
hoặc chặn đường một gói tin đơn, một phiên làm việc hoặc một luồng0
thông tin tấn công. Kiểu phản ứng này là an toàn nhất nhưng lại có0
nhược điểm là dễ nhầm với các gói tin hợp lệ.
• Thay đổi các chính sách của tường lửa: Kỹ thuật này cho phép người0
quản trị cấu hình lại chính sách bảo mật khi cuộc tấn công xảy ra. Sự

12


cấu hình lại là tạm thời thay đổi các chính sách điều khiển truy nhập bởi0
người dùng đặc biệt trong khi cảnh báo tới người quản trị.
• Cảnh báo thời gian thực: Gửi các cảnh báo thời gian thực đến người0
quản trị để họ nắm được chi tiết các cuộc tấn công, các đặc điểm và0
thông tin về chúng.
• Ghi lại vào tệp tin: Các dữ liệu của các gói tin sẽ được lưu trữ trong0
hệ thống các tệp tin log. Mục đích để các người quản trị có thể theo dõi0
các luồng thông tin và là nguồn thông tin giúp cho modul phát hiện tấn0
công hoạt động.
1.3.2. Các kiểu hệ thống IPS0
Có hai kiểu kiến trúc IPS chính là IPS ngoài luồng và IPS trong luồng.

a. IPS ngoài luồng: Hệ thống IPS ngoài luồng không can thiệp trực tiếp vào luồng0
dữ liệu. Luồng dữ liệu vào hệ thống mạng sẽ cùng đi qua tường lửa và IPS. IPS0
có thể kiểm soát luồng dữ liệu vào, phân tích và phát hiện các dấu hiệu của sự0
xâm nhập, tấn công.

b. IPS trong luồng: Vị trí IPS nằm trước bức tường lửa, luồng dữ liệu phải đi qua0
IPS trước khi tới bức tường lửa.

13


CHƯƠNG 2: TÌM HIỂU VỀ HỆ THỐNG QUẢN LÝ SỰ KIỆN0
VÀ GIÁM SÁT AN NINH MẠNG (SIEM)
2.1. Tổng quan về hệ thống SIEM

Sercurity information event management (SIEM) là một giải pháp hoàn0
chỉnh cho phép các tổ chức thực hiện việc giám sát các sự kiện an toàn thông tin0
cho một hệ thống. SIEM là sự kết hợp một số tính năng của quản lí thông tin an0
ninh (SEM) và quản lí sự kiện an ninh (SIM). Trong đó hệ thống mã nguồn mở0
SIEM có thể được tách làm hai chức năng:
Sercurity event management (SEM): Thu thập các event log data do các0
thành phần (thiết bị, ứng dụng) trong hệ thống tạo ra. Sau đó tập trung hóa việc0
lưu trữ và xử lý, phân tích các sự kiện rồi lập báo cáo, đưa ra thông báo, cảnh0
báo liên quan đến an ninh của hệ thống.
Sercurity information management (SIM): Thông tin được lưu trữ từ0
SIM, được sử dụng để báo cáo dữ liệu đăng nhập cho bất kì thời gian nhất định.
SIM và SEM thường bị nhầm lẫn với nhau nhưng thực ra giữa chúng tồn0
tại những điểm giống và khác nhau cơ bản sau:
SEM giám sát hệ thống và phân tích các event gần như trong thời gian0
thực để giúp phát hiện các mối đe dọa an ninh, các dấu hiện bất thường nhanh0
nhất có thể nhưng cũng chính vì thế mà lượng dữ liệu sự kiện đổ về nó rất nhiều0
và nó không cung cấp khả năng lưu trữ lâu dài cho các dữ liệu log.
Ngược lại, SIM tuy không có khả năng thu thập và xử lý các sự kiện trong0
thơi gian thực nhưng lại mạnh về quản lý log và có thể lưu trữ một lượng lớn dữ0
liệu log trong một thời gian dài.
Security Information and Event Management (SIEM) là sự kết hợp của0
SEM và SIM lại với nhau nhằm khắc phục những hạn chế của chúng.
• Thu thập log: Thu thập dữ liệu từ nhiều nguồn, bao gồm cả mạng,
bảo mật, máy chủ, cơ sở dữ liệu, ứng dụng…cung cấp khả năng0
hợp nhất dữ liệu được giám sát tránh để mất các sự kiện quan0
trọng.
14


•

Tương quan giữa các sự kiện: Tìm kiếm các thuộc tính chung và0
liên kết các sự kiện

với nhau.
Nhóm các sự kiện giống nhau.

•
• Phân tích và luồng thông tin.

Ba yếu tố chính triển khai cho SIEM:
• Tầm nhìn trước mối đe dọa thời gian thực.
Vận hành hiệu quả.
•
• Tính tuân thủ và các yêu cầu riêng cho hệ thống quản lý log.
2.2. Hoạt động của hệ thống SIEM0
2.2.1. Thu thập thông tin

Mục đích của việc thu thập thông tin là để nắm bắt các thông tin từ các0
thiết bị an ninh khác nhau và cung cấp nó cho các máy chủ để chuẩn hoá và0
phân tích tiếp.
Chính sách thu thập thông tin có thể thiết lạp một chính sách ưu tiên và0
thu thập ở các bộ cảm biến để lọc và củng cố các thông tin sự kiện an ninh trước0
khi gửi chúng đến máy chủ. Kỹ thuật này cho phép người quản trị điều tiết sự0
kiện an ninh và quản lý những thông tin, nếu không sẽ có rất nhiều sự kiện an0
ninh trong hệ thống mạng làm cho chúng ta lúng túng không biết bắt đầu từ đâu.
SIEM thu thập các bản ghi Log từ rất nhiều các thiết bị khác nhau, việc0
truyền các bản ghi log từ các thiết bị nguồn tới SIEM cần được giữ bí mật, xác0
thực và tin cậy bằng việc sử dụng syslog hoặc các giao thức SNMP, OPSEC,
SFTP, IDXP.
Có 2 cách để SIEM thu thập bản ghi Log từ các thiết bị nguồn đó là: sử0
dụng phương thức push log hoặc sử dụng phương thức pull log.
2.2.2. Chuẩn hoá và tổng hợp sự kiện an ninh

Sau khi thu thập thông tin các bản ghi log sec được SIEM chuẩn hoá để0
đưa về cùng một định dạng. Nếu các thiết bị không hỗ trợ các giao thức này0
chúng ta phải sử dụng các Agent. Đó là một điều cần thực hiện lấy các bản ghi0
15


log có định dạng mà SIEM có thể hiểu được. Việc cài đặt các Agent có thể kéo0
dài quá trình triển khai SIEM nhưng chúng ta sẽ có nhứng bản ghi log theo dạng0
chuẩn mong muốn.
Sau quá trình chuẩn hoá các bản ghi log thì quá trình tổng hợp sự kiện an0
ninh sẽ diễn ra. Mục đích của quá trình này là tổng hợp các sự kiện an ninh0
thuộc cùng kiểu để thấy được sự tổng thể của hệ thống. Điều này gần giống với0
quá trình phân tích tương quan sự kiện.
2.2.3. Phân tích tương quan sự kiện an ninh

Quá trình phân tích tương quan sự kiện này là từ các bản ghi sự kiện an0
ninh khác nhau được liên kết lại với nhau nhằm đưa ra kết luận có hay không0
một tấn công vào hệ thống. Qúa trình này đồi hỏi việc sử lý tập trung và chuyên0
sâu vì chúng phải hiểu được một tấn công diễn ra như thế nào. Mà thông thường0
sẽ sử dụng các thông tin dữ liệu trong cơ sở dữ liệu có sẵn liên kết với các thông0
tin về bối cảnh trong môi trường mạng của hệ thống. Các thông tin này có thể0
như các thư mục người dùng, các thiết bị và các vị trí của chúng. Điều tuyệt vời0
là SIEM có thể cập nhật từ các sự kiện an ninh mới mà dữ liệu gửi về.
2.2.4. Cảnh báo và báo cáo

SIEM cung cấp 3 cách để thông báo tới quản trị viên về một cuộc tấn0
công hay một hành vi bất thường đang sảy ra. Thứ nhất SIEM có thể đưa ra một0
cảnh báo ngay khi chúng nhận ra rằng có điều gì bất thường. Thứ hai SIEM sẽ0
gửi một thông báo vào một thời điểm được xác định trước của cuộc tấn công.
Thứ 3 là các quản trị viên theo dõi giám sát SIEM theo thời gian thực thông qua0
giao diện web. Các IDS thông thường đưa ra các thông báo giả nhưng với SIEM0
nó tạo ra một tỷ lệ nhỏ các thông báo giả như vậy. Tuy nhiên tất cả những thông0
báo có thể là cần thiết để thực hiện một hành động hay đơn giản là bỏ qua nó0
còn tuỳ thuộc vào mức độ của sự kiện an ninh.
2.2.5. Lưu trữ

Khi phân tích thì các dữ liệu được lưu trữ trực tuyến và khi không còn cần0
thiết thì chúng sẽ được chuyển tới nơi khác lưu trữ dài hạn. Dữ liệu được lưu trữ0
16


dưới dạng đã chuẩn hoá nhằm đẩy nhanh tốc độ tìm kiếm sử dụng sau này.
Thông thường chúng được lưu trữ dưới dạng nén và có thẻ được mã hoá. SIEM0
cung cấp khả năng lưu trữ đến hàng trăm triệu sự kiện khác nhau.
2.3. OSSIM

Hiện tại vấn đề thu thập và quản lý các sự kiện từ tất cả các thiết bị CNTT0
như: FW, IPS/IDS, Servers, Switch, App, Router,.. đang là vấn đề quan trọng0
với doanh nghiệp, nếu không có việc thu thập và quản lý log tâp trung và lâu dài0
sẽ làm ảnh hưởng đến quá trình phân tich và tìm ra những sự cố trong qua trình0
vận hành, các thông tin bị rò rỉ môt cách tràn lan trong doanh nghiệp, gây ra0
những thiệt hại vê kinh tế cho doanh nghiệp, vì vây giải pháp SIEM của0
AlientVault đã ra đời và đáp ứng được các yêu cầu đang tồn đong trong cách0
quản lý thu thập tất các sự kiện, các truy cập trái phép vào hệ thống CNTT, giúp0
người quản trị dễ dàng phát hiện các vấn đề sau:
- Hệ thống giám sát an ninh tập trung của AlientVault sẽ thu thập log0
và giám sát, báo cáo về các hoạt động xảy ra trên các hệ thống0
Firewall, server, Antivirus system, IPS system, các truy cập từ xa,
các thiết bị VPN, thiết bị định tuyến….
- Ngoài việc thu thập thông tin về nguy cơ và sự cố an toàn mạng, hệ0
thống này còn giúp các doanh nghiệp chủ động và dễ dàng nhận0
dạng, sử lý nhanh các nguy cơ này.
- AlientVault đáp ứng nhu cầu về việc trang bị một hệ thống giám sát0
an ninh tập trung chủ động, dễ dàng cài đặt và sử dụng, tiết kiệm0
thời gian và nhân lực cho quá trình quản trị.
- Lưu trữ thông tin dài hạn để làm chứng cứ, phục vụ điều tra theo0
các tiêu chuẩn về bảo mật công nghệ thông tin.
Open Source Security Information Managerment (OSSIM): là một mã0
nguồn mở quản lý thông tin và sự kiện an ninh bao gồm tập hợp các công cụ0
được thiết kế để trợ giúp các nhân viên quản trị phát hiện và phòng chống xâm0
nhập.

17


OSSIM thu thập các thông tin từ các sensor như snort, ARPwatch, Ntop,
…..và đọc các thông tin cảnh báo từ các loại thông tin hiện nay như CheckPoint,
RealSecure, server Unix…….phân tích đánh giá mức độ an ninh và rủi ro của0
các sự kiện an toàn thông tin.
AlientVault OpenSource SIEM là một hệ thống an ninh toàn diện bao0
gồm từ mức độ phát hiện lên đến một mức độ điều hành tạo ra các số liệu và báo0
cáo. AlientVault được cung cấp như một sản phẩm bảo mật cho phép bạn tích0
hợp vào một giao diện điều khiển tất cả các thiết bị và các công cụ bảo mật có0
sẵn trên mạng của bạn, cũng như cài đặt các công cụ bảo mật có uy tín nguồn0
mở như snort, OpenVas, Ntop, OSSEC……
2.3.1. Các chức năng quan trọng của OSSIM

2.3.1.1. Bảo vệ thông tin và tài nguyên quan trọng0
Thực hiện theo dõi theo thời gian thực các tài nguyên quan trọng trong hệ0
thống như: File server, các hệ thống kiểm soát và các cơ sở dữ liệu giúp nhận ra0
những trạng thái bất ổn ngay cả khi các hệ thống đang hoạt động bình thường.
OSSIM phân tích từng mảnh nhỏ các thông tin mà nó thu thập để nhận ra những0
điểm yếu trong hệ thống từ đó đưa ra những hành động cảnh bảo sớm cho người0
quản trị.
2.3.1.2. Cải thiện khả năng điều tra và khắc phục sự cố0
Áp lực trong việc thu thập và lưu trữ dữ liệu có liên quan đến kiểm toán0
từ nhiều nguồn khác nhau. Việc quản lý nhật ký không hiệu quả, việc tìm kiếm0
thông tin từ hàng Terabytes dữ liệu là gần như không thể. Trong khi các sự kiện0
này thực sự cần thiết trong để hỗ trợ cho việc kiểm toán và điều tra. AlientVault0
có thể giúp hệ thống lưu trữ và quản lý một lượng lớn dữ liệu nhật ký đồng thời0
cho phép nhanh chóng xử lý, phân tích điều tra hoặc tự động báo cáo theo cấu0
hình của người quản trị hệ thống.

18


2.3.1.3. Theo dõi hành động bất thường của người dùng0
AlientVault cung cấp khả năng quan sát toàn diện hệ thống, cho biết ai0
đang kết nối và làm gì trên hệ thống mạng. AlientVault liên kết các thông tin0
người dùng như: tên, vai trò cùng với thông tin chính xác về các ứng dụng và vị0
trí trong mạng để cung cấp khả năng xác minh các kết nối giữa người dùng thực0
tế (không chỉ dựa vào IP Address) với những hành động có mức độ rủi ro cao.
2.3.1.4. Cung cấp sự tuân thủ với chi phí thấp0
Để vượt qua được các bước trong quá trình kiểm toán, hệ thống mạng của0
một tổ chức phải đủ khả năng tự động chống đỡ trước các tấn công và bảo vệ0
các thông tin bí mật. AlientVault xây dựng sẵn và cung cấp các gói cho phép đáp0
ứng các tuân thủ này theo các yêu cầu cụ thể. Kết quả là các báo cáo tuân thủ sẽ0
được tự động thực hiện và kiểm soát tuân thủ được giám sát liên tục, hiệu quả0
mang lại nhanh chóng trong khi chi phí thấp.
2.3.2. Kiến trúc hệ thống OSSIM

Công việc cốt lõi của OSSIM là có trách nhiệm thu thập sự kiện, quản lý0
và tương quan, cũng như đánh giá rủi ro và cảnh báo, các công cụ mày được viết0
bằng C. Các công cụ khác được cung cấp bởi OSSIM bao gồm agent sử dụng để0
thu thập thông tin hệ thống mạng, một giao diện dựa trên nền web PHP, và0
Python deamon, framework, chịu trách nhiệm quản lý và giám sát các bộ phận0
khác của OSSIM. Để lưu trữ dữ liệu, OSSIM dựa trên cơ sở dữ liệu SQL.
Để đơn giản quá trình quản lý thông tin trên mạng bao gồm các host hay0
firewall hay IDS, SERVER….., OSSIM là tập hợp các thành phần riêng lẻ được0
tích hợp lại, cho phép chúng ta điều khiển qua dao diện web.
Một hệ thống OSSIM điển hình được triển khai bao gồm bốn nhân tố:
Sensor, Server, Database, Framework. Tất cả các thành phần của OSSIM là các0
module độc lập và có thể cấu hình theo nhu cầu của người quản trị. Tất cả các0
thành phần này có thể đặt ở các phần cứng khác nhau. Tách riêng từng thành0
phần hoặc đặt chúng chung trên cùng một thiết bị.
19


Hình 2. Kiến trúc hệ thống OSSIM

Trong đó:
- Sensor: các thiết bị được triển t\khai trong mạng để giám sát các0
hoạt động mạng. Chúng thường là:
• Các detector và monitor, thu thập dữ liệu một cách thụ động0
qua các bản mẫu và được lưu trong các Agent của OSSIM.
• Gồm các Agent OSSIM : có vai trò nhận dữ liệu từ các host0
trong mạng như router hoặc firewall, giao tiếp và gửi dữ liệu0
các sự kiện tới server quản lý trung tâm và được cấu hình0
trong file Output.py trong ossim-agent.
• Một cấu hình senser OSSIM điển hình gồm các chức năng0
như: IDS (Snort), quét lỗ hổng (Nessus), phát hiện sự bất0
thường (Spade, p0f, pads,……), giám sát mạng (Ntop), thu0
thập thông tin từ router, firewall, IDS. Các công cụ này được0
tích hợp vào cấu hình của sensor.
- Server
• Công việc chính là chuẩn hoá, thu thập, ưu tiên hoá, đánh giá0
rủi ro và thiết lập mối tương quan các bộ máy bên trong. Các0
công việc duy trì hoạt động như sao lưu, lập lịch sao lưu, tạo0
các thư mục online hoặc tiến hành quét toàn bộ hệ thống.
• Việc thu thập thông tin, chuẩn hoá và đánh giá rủi ro cho hệ0
thống, phân loại các loại tập tin, các dấu hiệu bất thường cho0
hệ thống sẽ được gửi lên Framework để phân loại hành động0
20


và mức độ cảnh báo cho hệ thống và đưa đến database để lưu0
trữ các sự kiện, các thông tin cho hệ thống qua port 3306.
- Framework: quản lý các thành phần OSSIM và kết nối chúng lại0
với nhau. Cung cấp giao diện web, quản lý cấu hình thành phần0
OSSIM và truyền thông.
- Cơ sở dữ liệu: cơ sở dữ liệu lưu trữ các sự kiện, các thông tin hữu0
ích cho việc quản lý của hệ thống. Nó là cơ sở dữ liệu SQL.
2.3.3. Các công cụ được tích hợp trong OSSIM

2.3.3.1. Snort IDS
- Là một công cụ mã nguồn mở có khả năng phát hiệm xâm nhập , những0
dấu hiệu bất thường , phân tích lưu lượng và gói tin đăng nhập trên các0
mạng IP . Nó có thể thực hiện phân tích các giao thức , các nội dung tìm0
kiếm và có thể phát hiện hàng loạt các cuộc tấn công và thăm dò như tấn0
công tràn bộ đệm, quét cổng tàng hình , tần công CGI , thăm dò SMB …
- Snort bao gồm nhiều thành phần , với mỗi thành phần thực hiện một chức0
năng riêng:
• Module giải mã gói tin.
• Module tiền xử lý.
• Module phát hiện.
• Module log và cảnh báo.
• Module kết xuất thông tin.
- Nessus: Là công cụ quét lỗ hổng bảo mật dùng để kiểm tra tính an toàn0
cho một hệ thống, tính bảo mật của một trang web từ xa, máy tính cục bộ0
hay những thiết bị bảo vệ thông tin…
- Các thành phần chính:
• Nessus Engine: nhận, thực thi và trả lời lại các yêu cầu quét của0
người dùng. Việc quét các lỗ hổng được thực hiện theo các chỉ dẫn0
của các plugin (một tập các câu lệnh script của ngôn ngữ kịch bản0
NASL).
• Nessus Plugin: hệ thống file của ngôn ngữ kịch bản NASL, gồm0
các file định nghĩa .inc và file kịch bản .nasl.
• Nessus Sever(Nessusd): thực hiện nhân các yêu cầu quét của người0
dùng sau đó phân tích, tổng hợp , trả lại lại kết quả cho Nessus0
Client.
21


• Nessus client: hiện thị kết quả quét lại cho người dùng thông qua0
trình duyệt web.
• Nessus Knowledge Base: “Cơ sở dữ liệu đã biết” của Nessus cho0
phép các Plugin sau tận dụng dữ liệu kết quả của Plugin trước đó.
Điều này giúp Nessus dễ dàng mở rộng và tăng tốc độ thực thi.
2.3.3.2. Ntop: Giám sát mạng
- Là công cụ được dùng để giám sát và đo lường lưu lượng mạng. Ntop0
cung cấp các biểu đồ và các số liệu thống kê từ phân tích các lưu lượng0
mạng được giám sát. Ntop đồng thời cũng chứa rất nhiều thông tin và các0
loại dữ liệu chạy trong mạng , tạo một hồ sơ cho phép theo dõi từng0
người dùng trong mạng.
- Công việc chính của Ntop:
• Đo lưu lượng
• Giám sát lưu lượng.
• Lập kế hoạch và tối ưu hóa mạng.
• Phát hiện các vi phạm an ninh mạng.
2.3.3.3. Nagios: Giám sát hiệu năng
- Là công cụ giám sát các ứng dụng , dịch vụ điều hành hệ thống , giao thức0
mạng, hệ thống số liệu và các thành phần cơ sở hạ tầng.
- Nagios có các chức năng sau:
• Giam sát trạng thái hoạt động của các dịch vụ mạng (SMTP,HTTP,
ICMP, FPT , SSH, DNS, web proxy, name server, TCP port, UDP0
port, cơ sở dữ liệu, my SQL….).
• Giam sát các tài nguyên các máy phục vụ và các thiết bị đầu cuối :
Tình trạng sử dụng CPU, tình trạng sử dụng ổ đĩa cứng, tình trạng0
sử dụng bộ nhớ trong và swap, số tiến trình đang chạy, các tệp log0
hệ thống…
• Giam sát các thông số an toàn các thiết bị phần cứng trên host như:
nhiệt độ CPU , tốc độ quạt, pin, giờ hệ thống…
• Giám sát các thiết bị mạng có IP như swich, router và máy in ,
Nagios có thể theo dõi tình trạng hoạt động của từng trạng thái bật0
tắt của từng cổng, lưu lượng băng thông qua mỗi cổng.
22


• Cảnh báo cho người quản trị bằng nhiều hình thức như email, tin0
nhắn bằng âm thanh nếu có thiết bị, dịch vụ gặp trục trặc.
• Tổng hợp lưu trữ và báo cáo định kỳ về tình trạng hoạt động của0
mạng.
2.3.3.4. Ngoài ra còn có
-

Oiris , Snare: host IDS.
Spade, HW Aberant Behaviuor: phát hiện bất thường.
Arpwatch, P0f,Pads, Fprobe: giám sát thụ động.
Nmap: quét mạng.
Acid/Base: phân tích pháp lý.
OSVDB: cơ sở dữ liệu lỗ hổng.

2.3.4. OCCEC

Là một công cụ mã nguồn mở phát hiện xâm nhập trên host. Công cụ này0
cung cấp nền tảng phân tích log, kiểm tra tính toàn vẹn của tập tin, phát hiện0
rootkit, giám sát chính sách, thời gian thực và đưa ra cảnh báo.
2.3.4.1. Kiến trúc của OSSEC

23


Hình 2. Kiến trúc tích hợp OCCEC

Trong đó:
- OSSEC Agent:
• Logcollectord : đọc các bản ghi.
• Syscheckd : kiểm tra tính toàn vẹn file.
• Rootcheckd: Phát hiên các malware/rootkit.
• Agentd: chuyển tiếp dữ liệu đến máy chủ.
- OSSEC Server:
• Remoted: Nhận dữ liệu từ các bộ cảm biến (Agent).
• Analysisd: Sử lý dữ liệu.
• Monitord: Giám sát các bộ cảm biến (Agent).
2.3.4.2. Giao diện đồ hoạ của OSSEC
-

Trạng thái giám sát.
Xem các sự kiện.
Quản lý điều khiển các bộ cảm biến (Agent).
Quản lý cấu hình.
Tạo và xem các luật.

Hình 2. Giao diện đồ họa của OSSEC

-

Xem các bản ghi (log).
Quản lý điều khiển các server.
Quản lý các triển khai.
Tạo các báo cáo PDF/HTML

24


Hình 2. Xem các bản ghi (log)

25


</div>