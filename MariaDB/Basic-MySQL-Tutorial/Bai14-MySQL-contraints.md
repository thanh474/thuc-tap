#   MySQL constraints



[1.NOT NULL constraint ](#1)

[2.Primary key constraint](#2)

[3.Foreign key constraint](#3)

[4.Disable foreign key checks](#4)

[5.UNIQUE constraint](#5)

[6.CHECK constraint ](#6)

[7.CHECK constraint emulation](#7)

------
<a name ="1"></a>
## 1.NOT NULL constraint
Ràng buộc NOT NULL là ràng buộc cột đảm bảo các giá trị được lưu trữ trong một cột không phải là NULL .
Cú pháp:
```
column_name data_type  NOT NULL ;
```
Một cột chỉ có thể chứa một ràng buộc NOT NULL chỉ định quy tắc rằng cột không được chứa bất kỳ giá trị NULL nào. Nói cách khác, nếu bạn cập nhật hoặc chèn NULL vào cột NOT NULL , MySQL sẽ báo lỗi.
 giá trị NULL làm cho các truy vấn của bạn phức tạp hơn vì bạn phải sử dụng các hàm như ISNULL() , IFNULL() và NULLIF() để xử lý NULL
Ví dụ: tạo môt bảng trong đó có cột NOT NULL.
```
 CREATE   TABLE  tasks (
    id  INT   AUTO_INCREMENT   PRIMARY KEY ,
    title  VARCHAR (255)  NOT NULL ,
    start_date  DATE   NOT NULL ,
    end_date  DATE 
);
```
![](sql/anh106.png)
Ví dụ: Thêm một ràng buộc NOT NULL vào một cột hiện có
Các bước thực hiện:

- Kiểm tra các giá trị hiện tại của cột nếu có bất kỳ NULL nào.
- Cập nhật NULL thành non- NULL nếu NULLs tồn tại.
- Sửa đổi cột với ràng buộc NOT NULL

Thêm một số dữ liệu vào database đêt thao tác trong đó có một côt chứa giá trị NULL.
```
 INSERT   INTO  tasks(title ,start_date, end_date)
 VALUES ( 'Learn MySQL NOT NULL constraint' ,  '2017-02-01' , '2017-02-02' ),
      ( 'Check and update NOT NULL constraint to your database' ,  '2017-02-01' , NULL );
```
![](sql/anh107.png)
Cập  nhật các giá trị NULL các giá trị khác null
```
 UPDATE  tasks 
 SET  
    end_date = start_date + 7
 WHERE 
    end_date  IS   NULL ;
```
![](sql/anh108.png)
Ví dụ: Bỏ một ràng buộc NOT NULL

Sử dụng ALTER TABLE..MODIFY
Cú pháp:
```
 ALTER   TABLE  table_name
 MODIFY  column_name column_definition;
```

Ví dụ: câu lệnh sau sẽ loại bỏ ràng buộc NOT NULL khỏi cột end_date trong bảng tasks
```
 ALTER   TABLE  tasks 
 MODIFY  
    end_date  DATE   NOT NULL ;
```
![](sql/anh109.png)
<a name ="2"></a>
## 2.Primary key constraint
Khóa chính là một cột hoặc một tập hợp các cột xác định duy nhất mỗi hàng trong bảng. Khóa chính tuân theo các quy tắc sau:

- Khóa chính phải chứa các giá trị duy nhất. Nếu khóa chính bao gồm nhiều cột, sự kết hợp các giá trị trong các cột này phải là duy nhất.
- Một cột khóa chính không thể có giá trị NULL . Mọi nỗ lực chèn hoặc cập nhật NULL vào các cột khóa chính sẽ dẫn đến lỗi. Lưu ý rằng MySQL ngầm thêm một ràng buộc NOT NULL vào các cột khóa chính.
- Một bảng có thể chỉ có một khóa chính. 

Vì MySQL hoạt động nhanh hơn với số nguyên, nên kiểu dữ liệu của cột khóa chính phải là số nguyên, ví dụ: INT , BIGINT.
Ví dụ 1: Xác định ràng buộc PRIMARY KEY trong CREATE TABLE
Cú pháp:
```
 CREATE   TABLE  table_name(
    primary_key_column datatype  PRIMARY KEY ,
    ...
);
```
Tạo bảng kèm theo khóa chính.
```
 CREATE   TABLE  users(
   user_id  INT   AUTO_INCREMENT   PRIMARY KEY ,
   username  VARCHAR (40),
    password   VARCHAR (255),
   email  VARCHAR (255)
);
```
![](sql/anh110.png)

Câu lệnh này tạo ra bảng roles có ràng buộc PRIMARY KEY như ràng buộc bảng:
```
 CREATE   TABLE  roles(
   role_id  INT   AUTO_INCREMENT ,
   role_name  VARCHAR (50),
    PRIMARY KEY (role_id)
);
```
![](sql/anh111.png)

Khi bạn tạo bảng mà chưa có khóa chính thì có thêm khóa chính bằng cách sử dụng câu lênh AFTER TABLE.
Cú pháp:
```
 ALTER   TABLE  table_name
 ADD   PRIMARY KEY (column_list);
```
<a name ="3"></a>
## 3.Foreign key constraint
Khóa ngoại là một cột hoặc nhóm cột trong bảng liên kết với một cột hoặc nhóm cột trong bảng khác. Khóa ngoại đặt các ràng buộc về dữ liệu trong các bảng liên quan, cho phép MySQL duy trì tính toàn vẹn tham chiếu.
xem các bảng customers và orders sau từ Classicmodels.

 Mối quan hệ giữa bảng customers và bảng orders là một-nhiều. Và mối quan hệ này được thiết lập bởi khóa ngoại trong bảng orders được chỉ định bởi cột customerNumber .

 Bảng customers được gọi là bảng cha hoặc bảng tham chiếu và bảng orders được gọi là bảng con hoặc bảng tham chiếu .



Thông thường, các cột khóa ngoại của bảng con thường đề cập đến các cột khóa chính của bảng cha.

Một bảng có thể có nhiều khóa ngoại trong đó mỗi khóa ngoại tham chiếu đến khóa chính của các bảng cha khác nhau.

Cú pháp khóa ngoại;
```
[ CONSTRAINT  constraint_name]
 FOREIGN KEY  [foreign_key_name] (column_name, ...)
 REFERENCES  parent_table(colunm_name,...)
[ ON DELETE  reference_option]
[ ON UPDATE  reference_option]
```
Trong cú pháp này:

- Đầu tiên, chỉ định tên của ràng buộc khóa ngoài mà bạn muốn tạo sau từ khóa CONSTRAINT . Nếu bạn bỏ qua tên ràng buộc, MySQL sẽ tự động tạo tên cho ràng buộc khóa ngoài.

- Tiếp đến, chỉ định danh sách các cột khóa ngoài được phân tách bằng dấu phẩy sau các từ khóa FOREIGN KEY . Tên khóa ngoại cũng là tùy chọn và được tạo tự động nếu bạn bỏ qua nó.

- Tiêp đến, chỉ định bảng cha theo sau là danh sách các cột được phân tách bằng dấu phẩy mà tham chiếu các cột khóa ngoài.

- Cuối cùng, xác định cách khóa ngoại duy trì tính toàn vẹn tham chiếu giữa các bảng con và bảng cha bằng cách sử dụng các mệnh đề ON DELETE và ON UPDATE . reference_option xác định hành động mà MySQL sẽ thực hiện khi các giá trị trong các cột khóa cha bị xóa ( ON DELETE ) hoặc được cập nhật ( ON UPDATE ).

MySQL có năm tùy chọn tham chiếu: CASCADE , SET NULL , NO ACTION , RESTRICT và SET DEFAULT .

- CASCADE : nếu một hàng từ bảng cha bị xóa hoặc cập nhật, các giá trị của các hàng khớp trong bảng con sẽ tự động bị xóa hoặc cập nhật.
- SET NULL : nếu một hàng từ bảng cha bị xóa hoặc cập nhật, các giá trị của cột khóa ngoài (hoặc cột) trong bảng con được đặt thành NULL .
- RESTRICT : nếu một hàng từ bảng cha có một hàng khớp trong bảng con, MySQL sẽ từ chối xóa hoặc cập nhật các hàng trong bảng cha.
- NO ACTION : giống như RESTRICT .
- SET DEFAULT : được công nhận bởi trình phân tích cú pháp MySQL. Tuy nhiên, hành động này bị từ chối bởi cả hai bảng InnoDB và NDB. 
<a name ="4"></a>
## 4.Disable foreign key checks

<a name ="5"></a>
## 5.UNIQUE constraint

<a name ="6"></a>
## 6.CHECK constraint

<a name ="7"></a>
## 7.CHECK constraint emulation