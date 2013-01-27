declare 语法:

例子:

## 正则

### 匹配中文字符

preg_match_all("/@[A-Za-z0-9\x{4e00}-\x{9fa5}]+[\s]*/u", $arrtext[0], $matches); 


## 编译参数

```
./configure \
--prefix=/usr/local \
--with-config-file-path=/usr/local/etc \
--with-config-file-scan-dir=/usr/local/etc/php.d \
--mandir=/usr/local/man \
--enable-fpm \
--enable-calendar \
--with-mcrypt \
--enable-ftp \
--with-zlib \
--with-bz2 \
--with-curl \
--with-gd \
--enable-exif \
--with-jpeg-dir \
--with-png-dir \
--with-freetype-dir \
--enable-mbstring  \
--with-mysql \
--with-mysqli \
--with-pdo-mysql \
--enable-zip \
--enable-bcmath \
--with-bz2 \
```

## 手机归属地查询服务
http://webservice.webxml.com.cn/WebServices/MobileCodeWS.asmx/getMobileCodeInfo

## APC 配置
```[APC]
apc.enabled = 1
apc.ttl=604800
apc.user_ttl=3600
apc.shm_size=192M
apc.shm_segments=1
apc.include_once_override=0
auto_globals_jit=Off
apc.num_files_hint = 2048

apc.stat_ctime = 0
apc.file_update_protection = 2
apc.stat = 0
apc.canonicalize = 0
```
