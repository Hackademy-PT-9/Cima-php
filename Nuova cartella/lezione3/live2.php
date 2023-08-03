<?php
$password = readline('Inserisci password: ');

// if (checkPassword($password)) {
//   echo "Password Corretta";
// } else {
//   echo "Reinserisci password";
// }

if(maiuscola($password))
{
  echo "maiuscola si";
}else
{
  echo "no";
}


function maiuscola($string)
{
  for($i=0;$i<strlen($string);$i++)
  {
    if(ctype_upper($string[$i]))
    {
      return true;
    }
  }
return false;
}

function minuscola($string)
{
  for($i=0;$i<strlen($string);$i++)
  {
    if(ctype_lower($string[$i]))
    {
      return true;
    }
  }
return false;
}

function checkPassword($string)
{
  if (checkLenght($string, 0) && checkLenght($string, 8) && checkNumeric($string)) {
    return true;
  }
  return false;
}
// function checkLenght($string)
// {
//   if ($string) {
//     return true;
//   }
//   return false;
// }

function checkLenght($string, $int)
{
  if (strlen($string) >= $int) {
    return true;
  }
  return false;
}

function checkNumeric($string)
{
  for ($i = 0; $i < strlen($string); $i++) {
    if (is_numeric($string[$i])) {
      return true;
    }
  }
  return false;
}
