
<?php
function contatore($numero)
{
     for($i=0;$i<$numero+1;$i++)
    {
        if($i%15==0)
        {
            echo "HACKADEMY \n";
        }elseif($i%5==0)
        {
            echo "JAVASCRIPT \n";
        }elseif($i%5==0)
        {
            echo "JAVASCRIPT \n";
        }else{
            echo "$i \n";
        }
    }
}
$numeri=100;
contatore($numeri);
   