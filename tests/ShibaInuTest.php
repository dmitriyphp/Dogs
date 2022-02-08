<?php

require_once dirname(__FILE__) . '/../autoload.php';

use PHPUnit\Framework\TestCase;

class ShibaInuTest extends TestCase
{
    private $dog;

    public function __construct()
    {
        parent::__construct();
        $this->dog = new ShibaInu();
    }

    public function test_sound()
    {
        $this->assertSame('woof! woof!', $this->dog->sound());
    }

    public function test_hunt()
    {
        $this->assertSame('growl!', $this->dog->hunt());
    }

    public function test_unknown_action()
    {
        $this->assertSame('There is no such action', $this->dog->sing());
    }
}