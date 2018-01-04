<?php
  class Building {
      private $id;
      private $name;
      private $stage;
      private $lumber;
      private $gold;

      function __construct($params) {
          $this->id = $params['id'];
          $this->name = $params['name'];
          $this->stage = $params['stage'];
          $this->lumber = $params['lumber'];
          $this->gold = $params['gold'];
      }

      function getName () {
          return $this->name;
      }

      function getStage () {
          return $this->stage;
      }

      function getLumberCost () {
          return $this->lumber;
      }

      function getGoldCost () {
          return $this->gold;
      }


  }

?>
