<?php

class seleniumTest extends PHPUnit_Extensions_Selenium2TestCase {
    protected function setUp()
    {
        $this->setHost("127.0.0.1");
        $this->setPort(4444);
        $this->setBrowserUrl('http://127.0.0.1/');
    }

    public function testA()
    {
        $this->url("/src/");

        $this->byName('name')->value('name test');
        $this->byName('send')->click();

        $this->assertEquals('name test', $this->byId('name')->text());
    }
}