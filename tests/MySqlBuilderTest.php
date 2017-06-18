<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2017
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

use FastD\QueryBuilder\MySqlBuilder;

class MySqlBuilderTest extends PHPUnit_Framework_TestCase
{
    public function testSelectFrom()
    {
        $mysql = new MySqlBuilder();

        echo $mysql->select()->from('test');

        $this->expectOutputString('SELECT * FROM `test`;');
    }
}
