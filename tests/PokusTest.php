<?php

/**
 * Test class for Pokus.
 * Generated by PHPUnit on 2013-03-05 at 16:07:48.
 */
class PokusTest extends PHPUnit_Framework_TestCase {

  /**
   * @var Pokus
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $this->object = new Pokus();
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
    
  }

  /**
   * @covers Servery::jeSub
   * @todo Implement testJeSub().
   */
  public function testDisplayVar() {
    $this->assertEquals($this->object->displayVar(), "dlouhytestovacitext");
    $this->assertEquals(19, strlen($this->object->displayVar()));
  }

}
