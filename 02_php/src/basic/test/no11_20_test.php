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

    public function testNo11()
    {
        $file = "no11";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo12()
    {
        $file = "no12";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo13()
    {
        $file = "no13";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo14()
    {
        $file = "no14";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo15()
    {
        $file = "no15";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo16()
    {
        $file = "no16";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo17()
    {
        $file = "no17";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo18()
    {
        $file = "no18";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo19()
    {
        $file = "no19";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo20()
    {
        $file = "no20";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

}