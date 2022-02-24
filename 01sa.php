 
  <?php
###### :space_invader: Practice 4-02
  $data = [
    ['id', 'species', 'type1', 'type2', 'ability', 'hp', 'attack', 'defense'],
    ['----', '----------', '-----', '------', '-----------', '---- ', '------', '-------'],
    ['1', 'Bulbasaur', 'Grass', 'Poison', 'Overgrow', '45', '49', '49'],
    ['2', 'Ivysaur', 'Grass', 'Poison', 'Overgrow', '60', '62', '63'],
    ['3', 'Venusaur', 'Grass', 'Poison', 'Overgrow ', '80', '82', '83'],
    ['4', 'Charmander', 'Fire', 'N/A', 'Blaze', '39', '52', '43'],
    ['5', 'Charmeleon', 'Fire', 'N/A', 'Blaze', '58', '64', '58'],
    ['6', 'Charizard', 'Fire', 'Flying', 'Blaze', '78', '84', '78'],
    ['7', 'Squirtle', 'Water', 'N/A', 'Torrent', '44', '48', '65'],
    ['8', 'Wartortle', 'Water', 'N/A', 'Torrent', '59', '63', '80'],
    ['9', 'Blastoise', 'Water', 'N/A', 'Torrent', '79', '83', '100'],
    ['10', 'Caterpie', 'Bug', 'N/A', 'Shield Dust', '50', '20', '55'],
  ];
  function make_tbl($data)
  {
    $tbl_array = [];  // initialize array
    $tbl_array[] = "<table>"; //table tags need to be the outside loops
    foreach ($data as $row ) { // outer loop makes the rows
      $tbl_array[] = "<tr>"; // tr tags need to be outside inner loop
      foreach ($row as $cell ) { // inner loop makes the row cells
        $tbl_array[] = "<td>$cell</td>";
      }
      $tbl_array[] = "</tr>";
     } 
     $tbl_array[] = "</table>";



     return implode('', $tbl_array); // return table as a string
  }

  //source:https://www.youtube.com/watch?v=AKKkS4EYSDo&t=3s

  $people = array('Trinidad', 'Rodriguez', 'Kiram');
  print_r($people);
  echo'<br>';
  echo'<br>';

  $element = array(0,2);
  echo count($element);
  echo'<br>';
  echo'<br>';

  $favorite = array('Bulbasaur', 'Ivysaur', 'Venusaur', 'Charmander', 'Charmeleon', 'Charizard', 'Squirtle', 'Wartortle',  'Blastoise', 'Caterpie');
  //echo $favorite[6];


    ###### :space_invader: Practice 4-03
   foreach($favorite as $species){
    echo $species;
    echo'<br>';
}
  ?>

   
<!DOCTYPE html>
 <html>
 <head>
  <style>
    table{
      border-collapse: collapse;
    }
    td{
      border: 1px solid #800;
      padding:  5px;
    }
  </style>
 </head>
 <body>
<?= make_tbl($data) ?>
</body>
</html>


