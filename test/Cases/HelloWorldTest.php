<?php


namespace HyperfTest\Cases;


use HyperfTest\HttpTestCase;

class HelloWorldTest extends HttpTestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
        $this->assertTrue(is_array($this->get('/hello')));
    }
}