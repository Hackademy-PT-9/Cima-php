<?php


//Esercizio3

$users = [
  [
    'name' => 'Marco',
    'gender' => 'M',
  ],
  [
    'name' => 'Vanessa',
    'gender' => 'F',
  ],
  [
    'name' => 'Jack',
    'gender' => 'M',
  ],
  [
    'name' => 'Mari*',
    'gender' => '',
  ],
];

foreach ($users as $user) {
  if ($user['gender'] == "M") {
    echo "Buongiorno Singor " .  $user['name'] . "\n";
  } elseif ($user['gender'] == "F") {
    echo "Buongiorno Singora " . $user['name'] . "\n";
  } else {
    echo  $user['name'] . " non ha specificato il genere\n";
  }
}
