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

    public function testNo41()
    {
        $file = "no41";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo42()
    {
        $file = "no42";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo43()
    {
        $file = "no43";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo44()
    {
        $file = "no44";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo45()
    {
        $file = "no45";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo46()
    {
        $file = "no46";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo47()
    {
        $file = "no47";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo48()
    {
        $file = "no48";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo49()
    {
        $file = "no49";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }

    public function testNo50()
    {
        $file = "no50";
        ob_start();
        include($this->srcDir . $file . ".php");
        $actual = trim(ob_get_clean());
        $expected = trim(file_get_contents($this->expectDir . $file . ".txt"));
        $this->assertEquals($expected, $actual);
    }


}