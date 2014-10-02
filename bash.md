## Find bash scripts in /usr/bin
```
  find /usr/bin/ -exec bash -c 'file "$1" | grep -qi bash' _ {} \; -print
```

## Markdown to pdf

  * Convert markdown to html

```
  perl markdown.pl --html4tags file.md >file.html
```
  * Convert html to pdf

```
  htmldoc --cont --headfootsize 8.0 --linkcolor blue --linkstyle plain --format pdf14 file.html > file.pdf
```

## 返回当前script 本身所在目录

```
BASE=$(dirname $(readlink -f ${BASH_SOURCE[0]}))
```

## CURL 模拟表单加文件上传
```
curl --form file=@/Users/jackeychen/Workspace/shangxia/html/views/admin/bin/hello.info --form name=jackey --form phone=15821121753 --form email=jziw@dmil.com  http://sxhtml.local/admin/api/content/contact
```
