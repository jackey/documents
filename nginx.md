# HTTP 常见的Status
* 200	OK	Data successfully acquired
* 400	Bad Request	Corrupt request data on the client side
* 401	Unauthorized	Authorization error
* 403	Forbidden	The resource exists, but access is not possible due to a reason other than an authorization error.
* 500	Internal Server Error	An error on the API server side
* 503	Service Unavailable	The API cannot be used temporarily
* 
* 
# Nginx SSL proxy for node
```
    upstream nodejs { 
          server 127.0.0.1:4545 max_fails=0; 
    } 

   server { 
      listen 443; 
      ssl    on; 
      ssl_certificate    newlocalhost.crt; 
      ssl_certificate_key     newlocalhost.key; 
      server_name nodejs.newlocalhost.com; 

      add_header Strict-Transport-Security max-age=500; 

      location / { 
        proxy_pass  http://nodejs; 
        proxy_redirect off; 
        proxy_set_header Host $host ; 
        proxy_set_header X-Real-IP $remote_addr ; 
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for ; 
        proxy_set_header X-Forwarded-Proto https; 
      } 
   }
```

# Nginx 在Centos 编译选项

./configure \
--user=nginx \
--group=nginx \ 
--prefix=/usr/share/nginx \
--sbin-path=/usr/sbin/nginx\
--conf-path=/etc/nginx/nginx.conf\
--error-log-path=/var/log/nginx/error.log \
--http-log-path=/var/log/nginx/access.log \
--http-client-body-temp-path=/var/lib/nginx/tmp/client_body \
--http-proxy-temp-path=/var/lib/nginx/tmp/proxy\
--http-fastcgi-temp-path=/var/lib/nginx/tmp/fastcgi \
--pid-path=/var/run/nginx.pid \
--lock-path=/var/lock/subsys/nginx \
--with-http_ssl_module \
--with-http_realip_module \
--with-http_addition_module \
--with-http_sub_module\
--with-http_dav_module \
--with-http_flv_module \
--with-http_gzip_static_module\
--with-http_stub_status_module \
--with-http_perl_module \
--with-mail \
--with-mail_ssl_module\
--with-cc-opt='-m32 -march=i386'\
--with-openssl=/root/openssl-0.9.8o\
--with-pcre --with-pcre=/root/pcre-8.10 \
--with-zlib=/root/zlib-1.2.5\
--with-http_geoip_module