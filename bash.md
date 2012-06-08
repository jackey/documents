1. Find bash scripts in /usr/bin

find /usr/bin/ -exec bash -c 'file "$1" | grep -qi bash' _ {} \; -print