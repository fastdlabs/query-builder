# Query Builder

数据库查询构建器.

**目前仅支持 MySQL 简单语句构建**

### Composer

```
composer require "fastd/query-builder" -vvv
```

### 使用

```php
$mysql = new MySqlBuilder();

$mysql->select()->from('test');
// SELECT * FROM `test`;
```

# License MIT
