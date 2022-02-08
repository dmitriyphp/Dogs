<?php

require_once dirname(__FILE__) . '/../classes/Dog.php';
require_once dirname(__FILE__) . '/../classes/Dogs/RubberDachshundWithSqueaker.php';

use PHPUnit\Framework\TestCase;

class RubberDachshundWithSqueakerTest extends TestCase
{
    private $dog;

    public function __construct()
    {
        parent::__construct();
        $this->dog = new RubberDachshundWithSqueaker();
    }

    public function test_sound()
    {
        $this->assertSame('Pi pi pi', $this->dog->sound());
    }

    public function test_hunt()
    {
        $this->assertSame('Nothing happens...', $this->dog->hunt());
    }

    public function test_unknown_action()
    {
        $this->assertSame('There is no such action', $this->dog->sing());
    }
}