<?php
require_once('lib/Core/Application.obj.php');
require_once('lib/Core/Request.obj.php');
require_once('lib/Core/exceptions/UnsupportedMethodException.obj.php');
class CoreRequestTest extends PHPUnit_Framework_TestCase
{
    private $_request;
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function providerUrlFormat()
    {
        return array(
            array(array('home' => ''), 'home'),
            array(array('home/' => ''), 'home'),
            array(array('home%2Fread' => ''), 'home/read'),
            array(array('home/read/some%252Fthing' => ''), 'home/read/some%2Fthing'),
            array(array('home%2Fread/some%252Fthing' => ''), 'home/read/some%2Fthing'),
        );
    }

    /**
     * @dataProvider providerUrlFormat
     */
    public function testURLFormats($query, $result)
    {
        $request = new \Core\Request($query, 'GET');
        $this->assertEquals($result, $request->getQuery());
    }

    /**
     * @expectedException \Core\UnsupportedMethodException
     */
    public function testRequestMethod()
    {
        $request = new \Core\Request(array(), 'UPDATE');
    }

    public function providerRequestExtension()
    {
        return array(
            array(array('home.json' => ''), 'json'),
            array(array('home_json' => ''), 'json'),
            array(array('home_camp.json' => ''), 'json'),
            array(array('home_camp_json' => ''), 'json'),
            array(array('home_camp/read.json' => ''), 'json'),
            array(array('home_camp/read_json' => ''), 'json'),

            array(array('home_camp' => ''), 'cli'),
        );
    }

    /**
     * @dataProvider providerRequestExtension
     */
    public function testRequestExtension($query, $result)
    {
        $request = new \Core\Request($query, 'POST');
        $this->assertEquals($result, $request->getExtension());

    }

    public function provideRequestFormat()
    {
        return array(
            array(array('home' => '', 'format' => 'xml'), 'xml'),
        );
    }

    /**
     * @dataProvider provideRequestFormat
     */
    public function testSpecifiedFormat($query, $result)
    {
        $request = new \Core\Request($query, 'GET');
        $this->assertEquals($result, $request->getSpecifiedFormat());
    }
}
