<?php


//Eserczio 5

for ($i = 1; $i <= 100; $i++) {
  if ($i % 5 == 0 && $i % 3 == 0) {
    echo "HACKADEMY,";
  } elseif ($i % 5 == 0) {
    echo "Javascript,";
  } elseif ($i % 3 == 0) {
    echo "PHP,";
  } else {
    echo "$i,";
  }
}
