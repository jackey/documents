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

## 查看系统发布的信息 (linux transition)
centos: cat /etc/redhat-release
ubuntu: lsb_release -a

## 在Ubuntu 安装Erlang
apt-get -y install build-essential m4 libncurses5-dev libssh-dev unixodbc-dev libgmp3-dev libwxgtk2.8-dev libglu1-mesa-dev fop xsltproc default-jdk
mkdir -p /src/erlang
cd /src/erlang
wget http://www.erlang.org/download/otp_src_R14B03.tar.gz # 选择合适的版本
tar -xvzf otp_src_R14B03.tar.gz
chmod -R 777 otp_src_R14B03
cd otp_src_R14B03
./configure
make
make install

## Clean cached on ubuntu
sudo sync && sudo echo 3 | sudo tee /proc/sys/vm/drop_caches

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


## Clean cached on ubuntu
sudo sync && sudo echo 3 | sudo tee /proc/sys/vm/drop_caches

## Bash loop example
```
#!/bin/bash
# Purpose: Display various options to operator using menus
# Author: Vivek Gite < vivek @ nixcraft . com > under GPL v2.0+
# ---------------------------------------------------------------------------
# capture CTRL+C, CTRL+Z and quit singles using the trap
trap '' SIGINT
trap ''  SIGQUIT
trap '' SIGTSTP
 
# display message and pause 
pause(){
    local m="$@"
	echo "$m"
	read -p "Press [Enter] key to continue..." key
}
 
# set an 
while :
do
	# show menu
	clear
	echo "---------------------------------"
	echo "	     M A I N - M E N U"
	echo "---------------------------------"
	echo "1. Show current date/time"
	echo "2. Show what users are doing"
	echo "3. Show top memory & cpu eating process"
	echo "4. Show network stats"
	echo "5. Exit"
	echo "---------------------------------"
	read -r -p "Enter your choice [1-5] : " c
	# take action
	case $c in
		1) pause "$(date)";;
		2) w| less;;
		3) echo '*** Top 10 Memory eating process:'; ps -auxf | sort -nr -k 4 | head -10;
		   echo; echo '*** Top 10 CPU eating process:';ps -auxf | sort -nr -k 3 | head -10;
		   echo;  pause;;
		4) netstat -s | less;;
		5) break;;
		*) Pause "Select between 1 to 5 only"
	esac
done
```

## Linux 系统挂载实例

  准备: 
    1. 创建loop 设备.
      ```
        dd if=/dev/zero of=./file_img block=1k count=10000
        losetup /dev/loop0 ./file_img
      ```
      
    2. 格式化ext2文件系统
      ```mke2fs -c /dev/loop0 10000```
      
  挂载:
    ``` 
        mkdir /mnt/file_img
    	mount -t ext2 /dev/loop0 /mnt/file_img
    ```
  已经可以开始访问了:
    ```
      cd /mnt/file_img 
      ls -al
    ```
## Linux 创建Patch
### 插件Patch 
```
diff -crB Tb01 Tb02 > Tb02.patch
```
### 测试Patch
```
patch --dry-run -p1 -i Tb02.patch
```
### 使用Patch
```
patch -p1 -i Tb02.patch
```
### 修改临时bind 记录
```
vi /etc/mtab
```
### 修改持久bind记录
```
vi /etc/fstab
```

### 进入smb 共享目录
```
smb://192.168.159.14/
```

### Install pptp on centos 5.x
[Install guid ](http://docs.cslabs.clarkson.edu/wiki/Install_PPTP_on_CentOS_5)

### Centos 安装包网站索引
[安装包索引](http://pkgs.org/)

### epel repo Settings
```
[epel]
name=Extra Packages for Enterprise Linux 5 - $basearch
#baseurl=http://download.fedoraproject.org/pub/epel/5/$basearch
mirrorlist=http://mirrors.fedoraproject.org/mirrorlist?repo=epel-5&arch=$basearch
failovermethod=priority
enabled=1
gpgcheck=1
gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL

[epel-debuginfo]
name=Extra Packages for Enterprise Linux 5 - $basearch - Debug
#baseurl=http://download.fedoraproject.org/pub/epel/5/$basearch/debug
mirrorlist=http://mirrors.fedoraproject.org/mirrorlist?repo=epel-debug-5&arch=$basearch
failovermethod=priority
enabled=0
gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL
gpgcheck=1

[epel-source]
name=Extra Packages for Enterprise Linux 5 - $basearch - Source
#baseurl=http://download.fedoraproject.org/pub/epel/5/SRPMS
mirrorlist=http://mirrors.fedoraproject.org/mirrorlist?repo=epel-source-5&arch=$basearch
failovermethod=priority
enabled=0
gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL
gpgcheck=1
```
