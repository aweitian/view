<?php
class ViewTest extends PHPUnit_Framework_TestCase
{

    public function testUsedef()
    {
    	$test = new Aw\View(__DIR__.'/tpl');
    	$ret = $test->render('use-def');
        $this->assertEquals("<html><head></head><body>def</body></html>",trim($ret));
    }


    public function testSection()
    {
        $test = new Aw\View(__DIR__.'/tpl/');
        $ret = $test->render('section.php');
        $this->assertEquals("<html><head></head><body>balbalbal</body></html>",trim($ret));
    }

    public function testOverride()
    {
        $test = new Aw\View(__DIR__.'/tpl');
        $ret = $test->render('override');
        $this->assertEquals("<html><head></head><body>defbalbalbal</body></html>",trim($ret));
    }


    public function testMutiSection()
    {
        $test = new Aw\View(__DIR__.'/tpl');
        $ret = $test->render(__DIR__.'/tpl/muti-section.php',true);
        $this->assertTrue(1 === preg_match("/^\s*<body>sec1\-sec2<\/body>\s*abc\s*$/",$ret));
    }

    public function testNestSection()
    {
        $test = new Aw\View(__DIR__.'/tpl');
        $ret = $test->render('nest-section');
        $this->assertTrue(1 === preg_match("/^\s*<html><head><\/head><body>balbalbal\s*<\/body><\/html>\s*foo\s*$/",$ret));
    }

    public function testVarScope()
    {
        $test = new Aw\View(__DIR__.'/tpl');
        $ret = $test->render('lu_ren_jia_tama');
//        print $ret;
        $this->assertTrue('110ac' === $ret);
    }
}

