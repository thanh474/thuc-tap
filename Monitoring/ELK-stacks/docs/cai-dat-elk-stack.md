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
[elasticsearch-7.x]
name=Elasticsearch repository for 7.x packages
baseurl=https://artifacts.elastic.co/packages/7.x/yum
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
sửa file /etc/elasticsearch/jvm.options
```
-Xms256m
-Xmx512m
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
[logstash-7.x]
name=Elastic repository for 7.x packages
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
Chỉnh sửa file cấu hình
```
-Xms256m
-Xmx512m
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
[kibana-7.x]
name=Kibana repository for 7.x packages
baseurl=https://artifacts.elastic.co/packages/7.x/yum
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
server port :5601
server.host: "0.0.0.0"
elasticsearch.hosts: "http://localhost:9200"

```
Khởi động và cho phép dịch vụ khởi động cùng hệ thống:
```
systemctl daemon-reload
systemctl start kibana
systemctl enable kibana
```
Truy cập vào Kibana kiểm tra:

`http://ip-elk_server:5601`
