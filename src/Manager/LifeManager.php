<?php
namespace RobotWar\Manager;

use RobotWar\Robot;

class LifeManager{
  
  private $spawnPosition;
  private $lives;

  public function __construct(){
      $this->spawnPosition = "A";
      $this->lives = [];
  }

  public function addRobot(Robot $robot){

      $this->lives[$this->spawnPosition] = 10;

      if($this->spawnPosition == "A"){
        $this->spawnPosition = "B";
      }
  }


  public function getLifeFor($letter){
    return $this-> lives[$letter];
  }

  

  public function getSurvivors(){
    // @todo
    $tab_survivor = [];
    $survivor = $this->_lives($letters);

    if($survivor >= 1){
      return $tab_survivor[$survivor];
    }
    else{
      return $tab_survivor[];
    }
    
  }
} 
