<?php
/**
 * Created by PhpStorm.
 * User: kamo
 * Date: 9/13/17
 * Time: 10:37
 */

class seleniumTest extends PHPUnit_Extensions_Selenium2TestCase {
    public static $seleneseDirectory = "html/";

    protected function setUp()
    {
        $this->setHost("127.0.0.1");
        $this->setPort(4444);
    }
}