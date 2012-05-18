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

#Build test performance environment

* Build Schema

* Generate content

* Query them

* Analyze
* 
* IRC Chat History

threnody 09时40分10秒
!t deeprogram about joins  

ubiquity_bot 09时40分10秒
deeprogram: Very basic join information: http://hashmysql.org/index.php?title=Introduction_to_Joins - For more indepth info: http://dev.mysql.com/tech-resources/articles/mysql-db-design-ch5.pdf	

threnody 09时40分20秒
!m deeprogram join	

ubiquity_bot 09时40分21秒
deeprogram: See http://dev.mysql.com/doc/refman/5.5/en/join.html	

threnody 09时40分25秒
!t deeprogram about venn	

ubiquity_bot 09时40分26秒
deeprogram: Joins are like Venn diagrams! http://www.codeproject.com/KB/database/Visual_SQL_Joins.aspx	
threnody - TheAvatar - thorie - thumbs - 09:40	

deeprogram 09时40分38秒
threnody: WOW!!
threnody: thanks, man! 09时40分49秒
 
threnody 09时40分51秒
!t deeprogram about common queries	

ubiquity_bot 09时40分52秒
deeprogram: common mysql queries can be found at http://www.artfulsoftware.com/infotree/queries.php?&bw=1345

    