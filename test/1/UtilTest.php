<?php

use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase
{

        public function test_render()
        {

            require "Util.php";

            $slug = new Util("Pill de PHPUnit");


            $expected = "pill-de-phpunit";

            $this->assertEquals($slug->convertToSlug(), $expected);

        }
 
    
}