<form method="post">        
Enter a Number: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST)  
    {  
        $num = $_POST['num'];  
        $match=$num;
	$reve=0;
        
        while($num > 0) 
        {  
           $rem = $num % 10;  
           $reve = $reve * 10 + $rem;  
           $num = floor($num/10);  
        }  
          
        

        if($match == $reve)
        {  
            echo "The number $match is Palindrome";     
        }
        else
        {  
            echo "The number $match is not a Palindrome";   
        }  
    }     
?>  