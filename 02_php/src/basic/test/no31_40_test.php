<?php
use PHPUnit\Framework\TestCase;


class AllTest extends TestCase
{
    protected $srcDir;
    protected $expectDir;

    protected function setUp(): void
    {
        $this->srcDir = "../";
        $this->expectDir = "./expects/";
    }

    public function testNo31()
    {
        $file = "no31";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo32()
    {
        $file = "no32";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo33()
    {
        $file = "no33";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo34()
    {
        $file = "no34";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo35()
    {
        $file = "no35";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo36()
    {
        $file = "no36";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo37()
    {
        $file = "no37";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo38()
    {
        $file = "no38";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo39()
    {
        $file = "no39";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo40()
    {
        $file = "no40";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

}