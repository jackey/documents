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
