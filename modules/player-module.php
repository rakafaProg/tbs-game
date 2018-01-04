<?php
  class Player {
      private $id;
      private $name;
      private $money;
      private $materials;
      private $buildings;

      function __construct($params) {
          $this->id = $params['id'];
          $this->name = $params['name'];
          $this->money = 0;
          $this->materials = $this->initMaterials();
          $this->buildings = $this->initBuildings();
      }

      function initMaterials () {
          $this->materials = [];
      }

      function initBuildings () {
          $this->buildings = [];
      }

      function getName () {
          return $this->name;
      }

      function getMaterials () {
          return $this->materials;
      }

      function getBuildings () {
          return $this->buildings;
      }
  }

?>
