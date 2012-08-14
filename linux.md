#Porformance tools

* http_load

* ab

* webbench

#System Monitor Tool

## top

## vmstat

## w

## uptime

## ps

## free

## iostat

## mpstat

## pmap 

## netstat

## iptraf

## tcpdump

## strace

## /proc/ file system.
    这个目录下包含了系统，硬件信息.

## 安装Memecache
    apt-get install memecached

    启动:  memecached -d -m 128 -p 2000 -u root
    启动参数:
-p 监听的端口
-l 连接的IP地址, 默认是本机
-d start 启动memcached服务
-d restart 重起memcached服务
-d stop|shutdown 关闭正在运行的memcached服务
-d install 安装memcached服务
-d uninstall 卸载memcached服务
-u 以的身份运行 (仅在以root运行的时候有效)
-m 最大内存使用，单位MB。默认64MB
-M 内存耗尽时返回错误，而不是删除项
-c 最大同时连接数，默认是1024
-f 块大小增长因子，默认是1.25-n 最小分配空间，key+value+flags默认是48
-h 显示帮助

## Ubuntu 下 Redis
1. 下载安装Redis：
cd /tmp
wget http://redis.googlecode.com/files/redis-2.4.6.tar.gz
tar -zxf redis-2.4.6.tar.gz
cd redis-2.4.6
make
sudo make install

2. 配置init脚本：
wget https://github.com/ijonas/dotfiles/raw/master/etc/init.d/redis-server
wget https://github.com/ijonas/dotfiles/raw/master/etc/redis.conf
sudo mv redis-server /etc/init.d/redis-server
sudo chmod +x /etc/init.d/redis-server
sudo mv redis.conf /etc/redis.conf

3. 初始化用户和日志路径
第一次启动Redis前，建议为Redis单独建立一个用户，并新建data和日志文件夹
sudo useradd redis
sudo mkdir -p /var/lib/redis
sudo mkdir -p /var/log/redis
sudo chown redis.redis /var/lib/redis
sudo chown redis.redis /var/log/redis

4. 设置开机自动启动，关机自动关闭
update-rc.d redis-server defaults

5. 启动Redis：
/etc/init.d/redis-server start 




