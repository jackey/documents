declare 语法:

例子:

## 正则

### 匹配中文字符

preg_match_all("/@[A-Za-z0-9\x{4e00}-\x{9fa5}]+[\s]*/u", $arrtext[0], $matches); 


## 编译参数

```
./configure
--prefix=/usr/local/php53
--with-config-file-path=/usr/local/etc
--with-config-file-scan-dir=/usr/local/etc/php.d
--mandir=/usr/local/man
--enable-fpm
--enable-calendar
--with-mcrypt
--enable-ftp
--with-zlib
--with-bz2
--with-curl
--with-gd
--enable-exif
--with-jpeg-dir
--with-png-dir
--with-freetype-dir
--enable-mbstring
--with-mysql
--with-mysqli
--with-pdo-mysql
--enable-zip
--enable-bcmath
--with-bz2
```