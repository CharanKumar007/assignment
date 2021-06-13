<form method="post">        
Enter previous reading: <input type="text" name="fnum"/><br>  
Enter current reading: <input type="text" name="snum"/><br>    
<button type="submit">Submit</button>
 
</form>  

<?php
if($_POST)  
    { 
    $p=$_POST['fnum'];
    $c=$_POST['snum'];
    if($c>$p)
    {  
       $units=$c-$p;
       if($units <= 100) 
       {
            $bill = $units * 3;
       }
       else if($units > 100 && $units <= 200) 
       {
            $temp = 100 * 3;
            $remaining_units = $units - 100;
            $bill = $temp + ($remaining_units * 4);
       }
       else if($units > 200 && $units <= 300) 
       {
            $temp = (100 * 3) + (100 * 4);
            $remaining_units = $units - 200;
            $bill = $temp + ($remaining_units * 5);
       }
       else 
       {
            $temp = (100 * 3) + (100 * 4) + (100 * 5);
            $remaining_units = $units - 300;
            $bill = $temp + ($remaining_units * 6);
       }
        echo "Unit consumed $units";
        echo "<br>";
        echo "Your bill is $bill";
     }
      else
         echo "Current reading must be greater than Previous reading";
}
?>

