# Query Builder

数据库查询构建器.

**目前仅支持 MySQL 简单语句构建**

### Composer

```
composer require "fastd/query-builder" -vvv
```

### 使用

```php
$queryBuilder = new MySQL('test');

echo $queryBuilder; // SELECT * FROM `test`

$queryBuilder->select(['id']); // SELECT `id` FROM `test`
$queryBuilder->select(['id' => 'aliasId']); // SELECT `id` as `aliasId` FROM `test`
```

##### where 查询

```php
$queryBuilder->where(['id' => 1]); // SELECT * FROM `test` WHERE `id` = '1';
$queryBuilder->where(['AND' => [
    'id' => 1,
    'name' => 'jan'
]]); // SELECT * FROM `test` WHERE `id` = '1' AND `name` = 'jan'';
```

具体可看: [QueryBuilder](src/QueryBuilder/QueryBuilder.php)

# License MIT
