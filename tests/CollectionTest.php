<?php

namespace CollectionTest;

use Collection\Collection;

/**
 * Class CollectionTest
 * @package CollectionTest
 */
class CollectionTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function 配列の要素を10以上のものに絞り込んで2倍した配列を返す()
    {
        $data       = [1, 2, 4, 60, 8, 10, 11];
        $expected   = [120, 20, 22];
        $collection = new Collection($data);
        $actual     = $collection->select(function ($item) {
            return $item >= 10;
        })->map(function ($item) {
            return $item * 2;
        })->all();
        $this->assertEquals($expected, $actual);
    }
}