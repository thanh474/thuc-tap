## <a name="5"> 5. Tìm hiểu cách nén và giải nén file trong Linux </a>

### <a name="5.1"> Tar </a>

Tar giúp đóng gói các files/thư mục vào trong 1 file, giúp ích rất nhiều cho việc sao lưu dữ liệu. Thông thường, Tar file có đuôi .tar. Để giảm tối đa kích thước tập tin, chúng ta cần thêm các tùy chọn nén gzip hoặc bunzip2. Tổng hợp các tùy chọn bao gồm:

- c: Tạo file lưu trữ.
- x: Giải nén file lưu trữ.
- z: Nén với gzip – Luôn có khi làm việc với tập tin gzip (.gz).
- j: Nén với bunzip2 – Luôn có khi làm việc với tập tin bunzip2 (.bz2).
- lzma: Nén với lzma – Luôn có khi làm việc với tập tin LZMA (.lzma).
- f: Chỉ đến file lưu trữ sẽ tạo – Luôn có khi làm việc với file lưu trữ.
- v: Hiển thị những tập tin đang làm việc lên màn hình.
- r: Thêm tập tin vào file đã lưu trữ.
- u: Cập nhật file đã có trong file lưu trữ.
- t: Liệt kê những file đang có trong file lưu trữ.
- delete: Xóa file đã có trong file lưu trữ.
- totals: Hiện thỉ thông số file tar
- exclude: loại bỏ file theo yêu cầu trong quá trình nén

**Tạo fie nén .tar**

``` 
tar -cvf filename.tar file1 file2 folder1 folder2
```

Filename.tar là tên file tar bạn sẽ tạo ra. File1, folder1… là các file, thư mục bạn muốn đóng gói trong file tar (đóng gói theo đúng thứ tự liệt kê).

**Đóng gói và nén dữ liệu**

Tar thông thường chỉ giúp đóng gói dữ liệu. Để nén dữ liệu giảm thiểu dung lượng, bạn dùng cần các tùy chọn nén z cho gzip (định dạng .gz) hoặc j cho bunzip (định dạng .bz2)

``` 
tar -czvf filename.tar.gz file1 file2 folder1 folder2
hoặc
tar -cjvf filename.tar.bz2 file1 file2 folder1 folder2
```

**Hiển thị tổng dung lượng đã được lưu trữ**

Sử dụng tùy chọn `--totals` giúp hiển thị tổng dung lượng đã được lưu trữ

**Làm việc với file .tar**

Để xem nội dung bên trong 1 file tar, sử dụng tùy chọn v để cho ra các thông tin chi tiết trên màn hình bao gồm permission, owner, date/time…

`# tar -tvf filename.tar`

**Thêm mới, cập nhập nội dung vào file lưu trữ**

Sử dụng tùy chọn r để thêm nội dung vào file lưu trữ

`# tar -rvf filename.tar add_file1 add_file2`

Để cập nhập dữ liệu vào file lưu trữ đã có, sử dụng tùy chọn u (đặc biệt cần trong việc update các file backup)

`# tar -uf filename.tar`

Câu lệnh trên sẽ so sánh thời gian sửa đổi của nội dung bên ngoài và bên trong của file lưu trữ. File bên trong sẽ được cập nhật nếu tập tin bên ngoài mới hơn.

**Xóa dữ liệu trong file lưu trữ**

Sử dụng tùy chọn delete để xóa nội dung theo yêu cầu trong file lưu trữ

`# tar -f filename.tar --delete file1 file2`

**Giải nén file .tar**

`# tar -xvf filename.tar`

Câu lệnh trên sẽ không xóa file .tar mà sẽ chỉ giải nén dữ liệu bên trong file tar vào thư mục hiện tại. Trong trường hợp file được lưu có kèm đường dẫn, nếu đường dẫn đó không tồn tại, hệ thống sẽ tự tạo thư mục tương ứng để đặt file. Tùy theo cách bạn đóng gói dữ liệu mà khi bung ra vị trí file có thể thay đổi

**Bung file nén**

Đối với các file nén gzip .tar.gz bạn cần sử dụng thêm tùy chọn z (với file nén gzip) hay tùy chọn j (với file nén bunzip)

```
# tar -xzvf filename.tar.gz
# tar -xjvf filename.tar.bz2
```

**Bung một vài file/thư mục cụ thể**

`# tar -xvf filename.tar file1 file2`

**Bung vào 1 thư mục khác**

Để bung dữ liệu vào nơi khác thư mục hiện tại, bạn cần chỉ rõ đường dẫn của thư mục đích với tùy chọn -C

`# tar -xvf filename.tar -C /directory`

#### Gzip

Để tạo file nén gzip:

`# gzip filename`

**Thiết lập mức độ nén**

Mức độ nén được tùy chỉnh trong khoảng từ 1 đến 9. Trong đó, 1 ~ fast nén nhanh nhất nhưng mức độ nén thấp nhất còn 9 ~ best mức độ nén cao nhất nhưng nén chậm nhất

`# gzip --fast filename hoặc # gzip -1 filename`

**Kiểm tra thuộc tính file nén**

`# gzip -l filename.gz`

**Giải nén file Gzip**

`# gzip -d filename`

#### Zip

Đầu tiên, bạn cần kiểm tra cài đặt zip trong systems.

``` sh
# rpm -q zip
package zip is not installed
hoặc
Package zip-3.0-1.el6_7.1.x86_64 already installed and latest version
```

Tiến hành cài đặt Zip nếu chưa có

``` sh
# yum install zip -y
Installed:
zip.x86_64 0:3.0-1.el6_7.1
```

**Tạo file nén .zip**

`# zip filename.zip filename1 filename2`

Trong đó, filename.zip là file zip sẽ được tạo từ việc nén filename1 và filename2

**Nén folder thành 1 file zip**

Sử dụng tùy chọn -r để zip nén toàn bộ folder và các file bên trong.

`# zip -r test.zip folder1`

**Tạo file nén ở chế độ yên lặng**

Sử dụng tùy chọn -q để tạo file nén ở chế độ yên lặng – quiet, không hiển thị thông tin gì trong quá trình nén.

`# zip -rq test.zip folder`

**Giải nén file .zip**

`unzip filename.zip`

Khi đó, file trong filename.zip sẽ được giải nén vào thư mục hiện tại, file nén vẫn giữ nguyên
Nếu file đó còn tồn tại ở thư mục giải nén, chương trình sẽ hỏi bạn về các tùy chọn thay thế bao gồm:

`[y]es, [n]o, [A]ll, [N]one, [r]ename`

Sử dụng tùy chọn `-q` để giải nén ở chế độ yên lặng – quiet, không hiển thị thông tin gì trong quá trình giải nén.