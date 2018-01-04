<?php
  include_once '../modules/building-module.php';
  class BLL {
      function getAllBuildings () {
          // Demo data
          $DbBuildingsArray = [
              [
                  'id' => 0,
                  'name' => 'Iron Mine',
                  'stage' => 8,
                  'gold' => 400,
                  'lumber' => 400
              ],
              [
                  'id' => 0,
                  'name' => 'Gold Mine',
                  'stage' => 8,
                  'gold' => 300,
                  'lumber' => 300
              ],
              [
                  'id' => 0,
                  'name' => 'Lumber Mill',
                  'stage' => 8,
                  'gold' => 200,
                  'lumber' => 200
              ],
              [
                  'id' => 0,
                  'name' => 'Farm',
                  'stage' => 8,
                  'gold' => 100,
                  'lumber' => 100
              ],
          ]; // End of demo data

          $ObjBuildingsArray = [];
          foreach ($DbBuildingsArray as $building) {
              array_push($ObjBuildingsArray, new Building($building));
          }

          return $ObjBuildingsArray;
      }
  }


?>
