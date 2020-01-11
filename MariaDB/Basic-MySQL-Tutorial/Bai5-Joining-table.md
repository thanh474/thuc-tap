## Joining tables.
 Mục lục.

[1. Table & Column Aliase](#1)

[2. Joins ](#2)

[3. INNER JOIN](#3)

[4. LEFT JOIN](#4)

[5. RIGHT JOIN](#5)

[6. CROSS JOIN](#6)
---

<a name ="1"></a>
## 1. Table & Column Aliase
Đôi khi khi gọi tên cột nó rất dài nên có 1 cách là đặt bí danh cho cột đó.
 
Cấu trúc.
```
SELECT 
   [column_1 | expression] AS descriptive_name
FROM table_name;
```
**Ví dụ 1:** Sự khác biết giữa sử dụng alias và không sử dụng Alias.

Khi không sử dụng alias.
trong ví dụ này tôi sử dung thêm function CONCAT_WP để hiện thị cùng lúc 2 cốt trong 1 cột.

```
SELECT 
    CONCAT_WS(', ', lastName, firstname)
FROM
    employees;
```
Như ta thấy thì tên cột có rất là dài và phức tạp.
![](sql/anh33.png)

Khi sử dụng Alias.

```
SELECT
   CONCAT_WS(', ', lastName, firstname) AS `Full name`
FROM
   employees;
```
Như ta thấy khi sử dụng alias thì tên cột sẽ ngắn và dễ hiểu hơn.
![](sql/anh34.png)


**Ví dụ 2:** Sử dụng alias với group by và having.
```
SELECT
    orderNumber `Order no.`,
    SUM(priceEach * quantityOrdered) total
FROM
    orderDetails
GROUP BY
    `Order no.`
HAVING
    total > 60000;
```
Chọn cột orderNumber và tổng các kết quả (priceEach * quantityOrdered) từ bảng orderDetails  lấy từ nhóm orderNumber  có tổng của nhóm là lớn hơn 60000.
![](sql/anh35.png)


<a name ="2"></a>
## 2. Joins
Kết hợp và sử dụng giá trị từ nhiều bảng khác nhau.

Có các kiểu của joins như sau:
- Inner join
- Left join
- Right join
- Cross join




<a name ="3"></a>
## 3. INNER JOIN



<a name ="4"></a>
## 4. LEFT JOIN



<a name ="5"></a>
## 5. RIGHT JOIN




<a name ="6"></a>
## 6. CROSS JOIN
