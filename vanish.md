## Install Vanish on Unbuntu
 * curl http://repo.varnish-cache.org/debian/GPG-key.txt | sudo apt-key add -

 * echo "deb http://repo.varnish-cache.org/ubuntu/ lucid varnish-3.0" | sudo tee -a /etc/apt/sources.list

 * sudo apt-get update

 * sudo apt-get install varnish
