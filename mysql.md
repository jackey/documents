#tools
* http_load
  request a web server. more usefull and complex than ab.
  here you go : https://github.com/timbunce/http_load
* JMetter
  Load another application and analyze profile.

# MYSQL DB Test Tools
* mysqlslap

#MYSQL Functions
* BENCHMARK()

    *** Example :***
Test MD5() porformance. 
```
mysql> SET @INPUT := "HELLO WORLD";
mysql> SELECT BENCHMARK(10000, MD5(@INPUT));
```

* Questions when analyz MYSQL.

    1. Which data MYSQL access most ?
    2. What kand of quries MYSQL execut ?
    3. What status MYSQL threads spend most time in ? 
    4. What subsystem MYSQL uses most to execute query ?
    5. What kinds of data when MSYQL query ?
    6. How much kinds of activities, such as index scan, MYSQL does.

* MYSQL Query Log

* Buildin MYSQL Tool

    * show status / show session status LIKE "string%" / show profiles

    