<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pokus
 *
 * @author pavel.jorda
 */
class Pokus {

  private $log;
  // property declaration
  public $var = 'dlouhytestovacitext';
  
  function __construct(Monolog\Logger $log) {
    $this->log = $log;
  }

  // method declaration
  public function displayVar() {
    return $this->var;
    $this->log->addInfo('foo');
  }

}
