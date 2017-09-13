<?php

class seleniumTest extends PHPUnit_Extensions_Selenium2TestCase {
    protected function setUp()
    {
        $this->setHost("127.0.0.1");
        $this->setPort(4444);
    }

    public function testA()
    {
        $this->url("/");

        $this->byName('name')->value('name test');
        $this->byName('send')->click();

        $this->assertEquals('name test', $this->byId('name')->text());
    }
}