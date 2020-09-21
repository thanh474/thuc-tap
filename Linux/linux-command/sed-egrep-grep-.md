# Các lệnh linux hay sử dụng( Phần 1)

# Mục lục

[1. Lệnh sed](#1)

[2. Lệnh egrep](#2)

[3. Lệnh grep](#3)

---

## <a name="1"> 1. Lệnh sed trong Linux </a>

Sed, như cái tên của nó Stream Editor, dùng để thao tác trực tiếp với văn bản như thay thế, xóa dòng, in ra một số dòng v.v.. Để bắt đầu ta sẽ xem qua một ví dụ:

```
$ echo day | sed s/day/night/ # Thay thế day bằng night
night
$ echo "day Thursday" | sed 's/day/night/g' # thêm "g" để thay thế tất cả day bằng night
night Thursnight​
```

Cú pháp của lệnh:

`sed [tùy chọn]... {script-only-if-no-other-script} [input-file]...`

Các toán tử cơ bản của sed:

- [địa_chỉ_vùng]/p : In ra [vùng đã chỉ ra]. "p" là viết tắt của print.

- [địa_chỉ_vùng]/d : Xóa [vùng đã chỉ ra]. "d" là viết tắt của delete.

- s/mẫu1/mẫu2/ : Thay thế mẫu2 bằng mẫu1 đầu tiên của một dòng. "s" là viết tắt của substitute.

- [địa_chỉ_vùng]/s/mẫu1/mẫu2/ : Giống như trên nhưng chỉ áp dụng cho vùng đã chọn

- [địa_chỉ_vùng]/y/mẫu1/mẫu2/ : thay thế các ký tự trong mẫu1 với từng ký tự tương ứng tron mẫu2, áp dụng cho vùng đã chọn (tương đương với lệnh tr).

- g : Thao tác trên toàn bộ dòng. "g" ở đây là viết tắt của global.​

Một số ví dụ về thao tác với sed

- 10d Xóa dòng thứ mười.

- /^$/d Xóa các dòng trống.

- 1,/^$/d Xóa từ dòng đầu tiên cho đến khi gặp dòng trống đầu tiên.

- /NAM/p Chỉ in ra dòng chứa "NAM" (phải dùng cùng với tùy chọn -n).

- s/ * $// Xóa tất cả các khoảng trắng ở cuối mỗi dòng.

- /NAM/d Xóa tất cả cáchd òng chưa "NAM".

- s/NAM//g Chỉ thay thế chữ "NAM", các phần còn lại giữ nguyên.​

Thông thường lệnh sed sử dụng / để ngăn cách nhưng bạn có thể sử dụng các ký hiệu khác để thay thế như các ví dụ dưới đây:

- sed 's/\/usr\/local\/bin/\/common\/bin/' # theo mặc định

- sed -i 's_/usr/local/bin_/common/bin_' # dấu _ (cần tùy chọn -i )

- sed -i 's:/usr/local/bin:/common/bin:' # dấu :

- sed -i 's|/usr/local/bin|/common/bin|' # dấu |

Và đây là một số lệnh nâng cao của sed:

- $ echo "123 abc" | sed 's/[0-9]* /& &/'​

Việc thay thế dấu xuống dòng trực tiếp bằng toán tử s/ là không khả thi. Để thay thế dấu xuống dòng bạn hãy làm theo cách dưới đây sử dung `\n`:
- $ tr -d '\n' < file # use tr to delete newlines

- $ sed ':a;N;$!ba;s/\n//g' file # GNU sed to delete newlines

- $ sed 's/$/ foo/' file # add "foo" to end of each line​

Xem thêm về 1 số câu lệnh thao tác văn bản khác tại [đây](https://github.com/thaonguyenvan/meditech-ghichep-linux/blob/master/content/text_commands.md)

## <a name="2"> Lệnh egrep </a>

Egrep được dùng để tìm kiếm với regular expressions. Nó  giống với grep đi kèm tùy chọn -E

Xem thêm về các tùy chọn [tại đây](https://www.computerhope.com/unix/uegrep.htm).

Để thuận tiện cho việc xem cấu hình, tiến hành chạy câu lệnh sau

`cat /tên_file | egrep -v '^#|^$'`

nó sẽ loại bỏ những dòng bắt đầu bằng `#` và `$`

## <a name="3"> 3. Lệnh grep </a>

GREP (Global regular expression print) là lệnh tìm kiếm các dòng có chứa một chuỗi hoặc từ khóa trong file.

Cú pháp lệnh :

``` sh
# grep ‘word’ filename
# grep ‘string1 string2’ filename
# cat otherfile | grep ‘something’
# command | grep ‘something’
```

Tìm kiếm từ trong file:

``` sh
# grep Port /etc/ssh/sshd_config
# grep -i port  /etc/ssh/sshd_config  ( sử dụng -i nếu bạn không nhớ chính xác là từ viết hoa hay không viết hoa )
```

Đếm số lần xuất hiện của từ tìm kiếm trong file:

```
grep -c Port /etc/ssh/sshd_config
```

Hiển thị số dòng của từ tìm kiếm trong file:

```
grep -n Port /etc/ssh/sshd_config
```

Hiện thị tất cả các dòng không chứa từ tìm kiếm trong file:

```
grep -v 22 /etc/ssh/sshd_config
```

`-v` là tùy chọn tìm kiếm ngược, loại bỏ tất cả dòng không chưa từ hoặc kí hiệu đó.

Kết hợp sử dụng với các lệnh khác :
```
cat /proc/cpuinfo |grep cpu
```
