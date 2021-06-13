<form method="post">        
Enter a Number: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST)  
    {  
        $num = $_POST['num'];  
        $match=$num;
	$sum=0;
        
        while($num > 0) 
        {  
           $rem = $num % 10;  
           $sum = $sum + $rem*$rem*$rem;  
           $num = floor($num/10);  
        }
        if($match == $sum)
        {  
            echo "The number $match is Armstrong number";     
        }
        else
        {  
            echo "The number $match is not a Armstrong number";   
        } 
       
    }     
?>  