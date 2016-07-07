<?php
/**
 *
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace FastD\QueryBuilder\Tests;

use FastD\QueryBuilder\MySQL;

class DBTest extends \PHPUnit_Framework_TestCase
{
    public function testSelect()
    {
        $queryBuilder = new MySQL('test');

        $this->assertEquals('SELECT * FROM `test`;', $queryBuilder);
    }
}
