# Managing MySQL databases and tables

[1.Selecting a MySQL database](#1)

[2.Managing databases](#2)

[3.CREATE DATABASE ](#3)

[4.DROP DATABASE](#4)

[5.MySQL storage engines](#5)

[6.CREATE TABLE](#6)

[7.MySQL sequence](#7)

-----

<a name ="1"></a>
## 1.Selecting a MySQL database

Sử dụng cơ sở dữ liệu MySQL bằng USE Statement.

Cú pháp:
```
USE  database_name;
```

<a name ="2"></a>
## 2.Managing databases
### Tạo cơ sở dữ liệu

Cú pháp:
```
CREATE   DATABASE  [ IF NOT EXISTS ] database_name;
```
Trong đó:
- DATABASE là tên cơ sở dữ liệu mà bạn muốn tạo. Tên cơ sở dữ liệu nên có ý nghĩa và mô tả càng tốt.
- IF NOT EXISTS là một mệnh đề tùy chọn của câu lệnh. Mệnh đề IF NOT EXISTS ngăn bạn khỏi lỗi tạo cơ sở dữ liệu mới đã tồn tại trong máy chủ cơ sở dữ liệu. Bạn không thể có 2 cơ sở dữ liệu có cùng tên trong máy chủ cơ sở dữ liệu MySQL. 


### Hiển thị cơ sở dữ liệu
Cú pháp:
```
SHOW DATABASE_NAME;
```

### Xóa cơ sở dữ liệu

Cú pháp:
```
DROP   DATABASE  [ IF EXISTS ] database_name;
```
Trong đó:
- DATABASE là tên cơ sở dữ liệu mà bạn muốn xóa.
- IF EXISTS là một phần tùy chọn của câu lệnh để ngăn bạn xóa cơ sở dữ liệu không tồn tại trong máy chủ cơ sở dữ liệu.
<a name ="3"></a>
## 3.CREATE DATABASE


<a name ="4"></a>
## 4.DROP DATABASE


<a name ="5"></a>
## 5.MySQL storage engines
MySQL cung cấp các công cụ lưu trữ khác nhau cho các bảng của nó như sau:

- MyISAM
- InnoDB
- MERGE
- CSV

### MyISAM

MyISAM mở rộng công cụ lưu trữ ISAM trước đây. Các bảng MyISAM được tối ưu hóa cho nén và tốc độ. Các bảng MyISAM cũng có thể di động giữa các nền tảng và hệ điều hành.

Kích thước của bảng MyISAM có thể lên tới 256TB, rất lớn. Ngoài ra, các bảng MyISAM có thể được nén thành các bảng chỉ đọc để tiết kiệm không gian. Khi khởi động, MySQL kiểm tra các bảng MyISAM xem có bị hỏng không và thậm chí sửa chữa chúng trong trường hợp có lỗi. Các bảng MyISAM không an toàn giao dịch.

Trước MySQL phiên bản 5.5, MyISAM là công cụ lưu trữ mặc định khi bạn tạo bảng mà không chỉ định rõ ràng công cụ lưu trữ. Từ phiên bản 5.5, MySQL sử dụng InnoDB làm công cụ lưu trữ mặc định. 

### InnoDB

Các bảng InnoDB hỗ trợ đầy đủ các giao dịch và tuân thủ ACID. Họ cũng là tối ưu cho hiệu suất. Bảng InnoDB hỗ trợ các khóa ngoại , cam kết, khôi phục, thao tác cuộn tiến. Kích thước của bảng InnoDB có thể lên tới 64TB.

Giống như MyISAM, các bảng InnoDB có thể di động giữa các nền tảng và hệ điều hành khác nhau. MySQL cũng kiểm tra và sửa chữa các bảng InnoDB, nếu cần, khi khởi động. 
### MERGE

Bảng MERGE là một bảng ảo kết hợp nhiều bảng MyISAM có cấu trúc tương tự như một bảng. Công cụ lưu trữ MERGE còn được gọi là công cụ MRG_MyISAM . Bảng MERGE không có các chỉ mục riêng; thay vào đó, nó sử dụng các chỉ mục của các bảng thành phần.

Sử dụng bảng MERGE, bạn có thể tăng tốc hiệu suất khi tham gia nhiều bảng . MySQL chỉ cho phép bạn thực hiện các hoạt động CHỌN , XÓA , CẬP NHẬT và CHERTN trên các bảng MERGE . Nếu bạn sử dụng câu lệnh DROP TABLE trên bảng MERGE , chỉ có thông số MERGE được xóa. Các bảng bên dưới sẽ không bị ảnh hưởng. 

### CSV

Công cụ lưu trữ CSV lưu trữ dữ liệu ở định dạng tệp giá trị được phân tách bằng dấu phẩy (CSV). Bảng CSV mang đến một cách thuận tiện để di chuyển dữ liệu vào các ứng dụng không phải là SQL như phần mềm bảng tính.

Bảng CSV không hỗ trợ kiểu dữ liệu NULL. Ngoài ra, thao tác đọc yêu cầu quét toàn bộ bảng. 

<a name ="6"></a>
## 6.CREATE TABLE
Cú pháp:
```
 CREATE   TABLE  [ IF NOT EXISTS ] table_name(
   column_1_definition,
   column_2_definition,
   ...,
   table_constraints
)  ENGINE = storage_engine;
```
Trong đó:

- Chỉ định tên của bảng mà bạn muốn tạo sau các từ khóa CREATE TABLE . Tên bảng phải là duy nhất trong cơ sở dữ liệu. IF NOT EXISTS là tùy chọn. Nó cho phép bạn kiểm tra xem bảng mà bạn tạo đã tồn tại trong cơ sở dữ liệu chưa. Nếu đây là trường hợp, MySQL sẽ bỏ qua toàn bộ câu lệnh và sẽ không tạo bất kỳ bảng mới nào.

- Chỉ định danh sách các cột của bảng trong phần column_list , các cột được phân tách bằng dấu phẩy.

- Tùy ý chỉ định công cụ lưu trữ cho bảng trong mệnh đề ENGINE . MySQL sẽ sử dụng InnoDB theo mặc định. 

<a name ="7"></a>
## 7.MySQL sequence

Để tự động tạo một sequence trong MySQL, bạn đặt thuộc tính AUTO_INCREMENT thành một cột, thường là cột khóa chính .

Quy tắc áp dụng cho cột AUTO_INCREMENT:

- Mỗi bảng chỉ có một cột AUTO_INCREMENT có kiểu dữ liệu thường là số nguyên .
- Cột AUTO_INCREMENT phải được lập chỉ mục, có nghĩa là nó có thể là chỉ số PRIMARY KEY hoặc chỉ số UNIQUE .
- Cột AUTO_INCREMENT phải có ràng buộc NOT NULL . Khi bạn đặt thuộc tính AUTO_INCREMENT thành một cột, MySQL sẽ tự động thêm ràng buộc NOT NULL vào cột. 
