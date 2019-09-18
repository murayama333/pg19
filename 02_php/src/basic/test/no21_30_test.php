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

    public function testNo21()
    {
        $file = "no21";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo22()
    {
        $file = "no22";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo23()
    {
        $file = "no23";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo24()
    {
        $file = "no24";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo25()
    {
        $file = "no25";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo26()
    {
        $file = "no26";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo27()
    {
        $file = "no27";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo28()
    {
        $file = "no28";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo29()
    {
        $file = "no29";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo30()
    {
        $file = "no30";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

}