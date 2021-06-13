<form method="post">        
Enter first Number: <input type="text" name="fnum"/><br>  
Enter second Number: <input type="text" name="snum"/><br>
Enter operator(+,-,*,/): <input type="text" name="op"/><br>   
<button type="submit">Submit</button>
 
</form>  
<?php   
    if($_POST)  
    {  
        $a = $_POST['fnum']; 
        $b = $_POST['snum']; 
	$r=0;
        $ch=$_POST['op']; 
        

       switch($ch)
       {
            case '+':$r=$a+$b;
                       echo "Result=$r";
			break;
            case '-':$r=$a-$b;
                       echo "Result=$r";
			break;
            case '*':$r=$a*$b;
                       echo "Result=$r";
			break;
            case '/':if($a > $b)
                     {
			$r=$a/$b;
                       echo "Result=$r";
		     }
                     else
                       echo "First Number should be greater than second for divide";
		    break;
            default:echo"Invalid operater";
       }
       
    }     
?>  