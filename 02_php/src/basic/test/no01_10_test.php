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

    public function testNo01()
    {
        $file = "no01";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
        # $this->expectOutputString($expected);
    }

    public function testNo02()
    {
        $file = "no02";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo03()
    {
        $file = "no03";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo04()
    {
        $file = "no04";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo05()
    {
        $file = "no05";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo06()
    {
        $file = "no06";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo07()
    {
        $file = "no07";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo08()
    {
        $file = "no08";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo09()
    {
        $file = "no09";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo10()
    {
        $file = "no10";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

}