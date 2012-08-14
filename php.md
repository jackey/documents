declare 语法:

例子:

## 正则

### 匹配中文字符

preg_match_all("/@[A-Za-z0-9\x{4e00}-\x{9fa5}]+[\s]*/u", $arrtext[0], $matches); 