<?php
use Whackashoe\DomainBase\DomainBase;

class BasenameTest extends PHPUnit_Framework_TestCase
{
    protected $dbase;

    public function __construct()
    {
        $this->dbase = new DomainBase();
        parent::__construct();
    }

    public function testHttp()
    {
        $this->assertEquals($this->dbase->basename("http://google.com"), "google");
    }

    public function testNohttp()
    {
        $this->assertEquals($this->dbase->basename("google.com"), "google");
    }

    public function testHttps()
    {
        $this->assertEquals($this->dbase->basename("https://google.com"), "google");
    }

    public function testWww()
    {
        $this->assertEquals($this->dbase->basename("http://www.google.com"), "google");
    }

    public function testQuery()
    {
        $this->assertEquals($this->dbase->basename("http://google.com?q=some+query"), "google");
    }

    public function testMultisub()
    {
        $this->assertEquals($this->dbase->basename("http://www.qqq.mmm.ddd.google.com"), "google");
    }

    public function testBadDomain()
    {
        $this->assertNotEquals($this->dbase->basename("http://www.google.commom"), "google");
    }
}
?>