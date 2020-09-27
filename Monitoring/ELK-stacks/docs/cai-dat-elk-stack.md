# Cài đặt ELK mô hình All-in-one


## Mục lục

[1. Yêu cầu hệ thống](#1)

[2. Mô hình](#2)

[3. Phân hoặc địa chỉ IP](#3)

[4. Cài đặt trên máy chủ ELK](#4)

---
## <a name="1">1. Yêu cầu hệ thống.</a>



1 máy CentOS 7 làm ELK (aio) server : RAM 6GB, 100GB HDD.

Các máy client có OS là windows, ubuntu hoặc CentOS.
## <a name="2">2. Mô hình</a>



## <a name="3">3. Phân hoặc địa chỉ IP</a>


## <a name="4">4. Cài đặt trên máy chủ ELK.</a>

### Cài đặt Elasticsearch.

Import key elastic:
```
rpm --import http://packages.elastic.co/GPG-KEY-elasticsearch
```
Thêm repo elastic :
```
cat <<EOF > /etc/yum.repos.d/elasticsearch.repo
[elasticsearch-6.x]
name=Elasticsearch repository for 6.x packages
baseurl=https://artifacts.elastic.co/packages/6.x/yum
gpgcheck=1
gpgkey=https://artifacts.elastic.co/GPG-KEY-elasticsearch
enabled=1
autorefresh=1
type=rpm-md
EOF
```
Cài đặt Elasticsearch :
```
yum install elasticsearch -y
```
Mở file `/etc/elasticsearch/elasticsearch.yml`:
```
vi /etc/elasticsearch/elasticsearch.yml
```
Tìm đến dòng `network.host` và sửa lại như sau :

```
network.host: localhost
```

Khởi động lại Elasticsearch và cho phép dịch vụ khởi động cùng hệ thống :
```
systemctl restart elasticsearch
systemctl enable elasticsearch
```
Kiểm tra dịch vụ Elasticseach :

```
curl -X GET http://localhost:9200
```

Kết quả trả về như sau :
```
[root@ELK-stack ~]# curl -X GET http://localhost:9200
{
"name" : "w5M4X9m",
"cluster_name" : "elasticsearch",
"cluster_uuid" : "3a8frDXuRUaxZnKi1Y_tFQ",
"version" : {
    "number" : "6.3.1",
    "build_flavor" : "default",
    "build_type" : "rpm",
    "build_hash" : "eb782d0",
    "build_date" : "2019-01-30T10:21:26.107521Z",
    "build_snapshot" : false,
    "lucene_version" : "7.3.1",
    "minimum_wire_compatibility_version" : "5.6.0",
    "minimum_index_compatibility_version" : "5.0.0"
},
"tagline" : "You Know, for Search"
}
```

### Cài đặt Logstash.

Thêm repo logstash:
```
cat << EOF > /etc/yum.repos.d/logstash.repo
[logstash-6.x]
name=Elastic repository for 6.x packages
baseurl=https://artifacts.elastic.co/packages/6.x/yum
gpgcheck=1
gpgkey=https://artifacts.elastic.co/GPG-KEY-elasticsearch
enabled=1
autorefresh=1
type=rpm-md
EOF
```
Cài đặt logstash:
```
yum install logstash -y
```
Khởi động và cho phép dịch vụ khởi động cùng hệ thống.
```
systemctl daemon-reload
systemctl start logstash
systemctl enable logstash
```
### Cài đặt Kibana.

Tạo repo cài đặt Kibana:
```
cat <<EOF > /etc/yum.repos.d/kibana.repo
[kibana-6.x]
name=Kibana repository for 6.x packages
baseurl=https://artifacts.elastic.co/packages/6.x/yum
gpgcheck=1
gpgkey=https://artifacts.elastic.co/GPG-KEY-elasticsearch
enabled=1
autorefresh=1
type=rpm-md
EOF
```
Cài đặt Kibana:
```
yum install kibana -y
```
Sửa đổi cấu hình kibana
```
sed -i 's/#server.host: "localhost"/server.host: "0.0.0.0"/'g /etc/kibana/kibana.yml
```
Khởi động và cho phép dịch vụ khởi động cùng hệ thống:
```
systemctl daemon-reload
systemctl start kibana
systemctl enable kibana
```
Truy cập vào Kibana kiểm tra:

`http://ip-elk_server:5601`
