## Drupal性能调优建议

http://www.vmirgorod.name/blog/tuning-drupal-performance#performance_table

## Drupal优秀的主题

andromeda(href=http://drupal.org/project/andromeda)

## Drupal  多站点构造
```
多站点可实现功能

1. 多站点下用户数据分离，不同站点可以拥有不同的用户

2. 多站点配置分离,如主题配置，站点名称，站点logo等

3. 多站点内容共享（如文章，分类，产品）


实现方案：

1. 多数据库运行平台，每个站点一个单独的数据库，数据库之前可以互相检索数据(据此来实现数据共享和分离功能)

2. 域名配置动态管理，据此才能实现一个逻辑服务器支持多个站点

3. 使用Drupal平台来实现

4. 系统监控维护，需要一个单独的系统监控服务来实现各种服务器级别的功能（比如系统日志，创建数据库操作等）

5. 最好2个服务器（数据库和web服务器, 因为数据库需要动态创建，如果在一个服务器上会对web 服务器造成影响），需要可插拔式的服务器配置方案，来支持增长的用户
```

## 获取Field 配置的选项代码示
```
    $goal_field_instance = field_info_instance("taxonomy_term", "field_goal" ,"course_job_opportunity");
    $goal_field = field_info_field("field_goal");
    $goal = list_allowed_values($goal_field, $goal_field_instance, "taxonomy_term");
    // $goal 变量就是选项
```
Drupal 6
```
$options = content_allowed_values(content_fields("field_category", "news"));
```
