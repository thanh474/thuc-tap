# Tìm hiểu về biến và các kiêu dữ liệu trong JavaScrip

## 1. Biến trong JavaScrip
Biến là nơi lưu trữ, chứa đựng các giá trị. Và nó được lưu tại RAM hoặc thiết bị lưu trữ.

Trong js thì khởi tạo biến thì ta sử dụng **var**.
Vidu:
```
Var x = 5;
Var y = 6;
var z = x+y;
```
## 2. Comment trong js.
Comment 1 dòng sử dụng "//"
Comment nhiều dong sử dụng "/* */"

## 2. Biểu thức toán học trong JS.

Có cac toán tử chính như: cộng, trừ, nhân, chia, mũ, phần trăm, tăng dần 1 đơn vị, giảm dần 1 đơn vị.

Ta có thể cộng các chuỗi lại với nhau.
```
var txt3 = txt1 + " " + txt2;
var txt1 = "What a very ";
txt1 += "nice day"; 
```

Toán tử so sánh.
== : so sánh  trừu tượng nó sẽ giải quyết vấn đề kiêu dữ liệu trước, nó sẽ chuyển đổi kiêu dư liệu rối mới so sánh.

=== : So sánh cân bằng nghiêm ngặt sẽ trả về false khi có giá tị khác nhau.

!= : Không bằng hoặc khác.


Toán tử logic:
AND (&&), OR (||), not (!).

toán tử ternary: 
```
variablename = (condition) ? value1:value2
``` 
Nếu điều kiến đúng thì value1 còn điều kiên sai trả về value2.
## 3. Các Kiểu dữ liệu (Data types);

### Prinitive type.
Number: là kiểu số có thể sử dụng cả số âm và dương.
- Ví dụ : **Var x = 1999;**

String kiểu chuối ký tự.
- Ví dụ : **Var x = 'Bùi Công Thành';**

Boolean Là kiểu chỉ trả về 2 giá trị là **True** Hoặc **False**,**yes** hoặc **no**.

### Speccial types.
Undefined khai báo 1 biến mà không gián giá trị cho nó.
- Vi du: **Var a;**
Null: khai báo một biên mà biến đó có giá trị trống.
- Ví dụ : **Var a = NULL**

### Referene type.
**Object**: Sử dụng để mô tả một đối tượng nào đó hay một sự vật có nhiều tính chất.. Mô tả các thuộc tính, tính chất.

Cú pháp:
```
Var a= { Key: Value}
```
Key và Value là thuốc tính của object.
Ví dụ:
```
Var cho= {
    ten: 'meo',
    cannang: 7.2,
    cai: false
}
```

**Array**:(mảng) Sử dụng để lưu trữ một danh sách list các phần tử.

Cú phaps:
```
var name_array = [element1, element2, element3,..]
```
Trong mảng có các index được gọi là chi số của mảng bắt đầu từ số 0.

Chiều dài của mảng là tông số các thành phần của chuỗi.

Ví dụ:Sử dụng array.
```
var thuctap= [thanh, hung, niem, duc, hung]
```

