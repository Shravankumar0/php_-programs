<html>

<body>
    <h3>get method example </h3>
    <form method="post" action="">
     Enter number 1:  <input type="number" name="num1">
     Enter number 2:<input type="number" name="num2">
    
    <input type="submit" name ="add" value ="addition">
    <input type="submit" name ="sub" value ="subtraction">
    <input type="submit" name ="div" value ="division">
    <input type="submit" name ="mult" value ="multiplicatrion">
    
    </form>

    <?php
    
       if(isset($_POST['add']))
       {
       
        echo"<br> number1  is : " . $_POST['num1'];
        echo"<br> number2  is : " . $_POST['num2'];
        
       $a= $_POST['num1'];
       $b= $_POST['num2'];
      
       $addition = $a+$b;
       echo "<br>".$addition;
       }


       if(isset($_POST['sub']))
       {
       
        echo"<br> number1  is : " . $_POST['num1'];
        echo"<br> number2  is : " . $_POST['num2'];
        
       $a= $_POST['num1'];
       $b= $_POST['num2'];
      
       $subtraction = $a - $b;
       echo "<br>".$subtraction;
   
  
       }


       if(isset($_POST['div']))
       {
       
        echo"<br> number1  is : " . $_POST['num1'];
        echo"<br> number2  is : " . $_POST['num2'];
        
       $a= $_POST['num1'];
       $b= $_POST['num2'];
      
       $division = $a / $b;
       echo "<br>".$division;
   
  
       }


       if(isset($_POST['mult']))
       {
       
        echo"<br> number1  is : " . $_POST['num1'];
        echo"<br> number2  is : " . $_POST['num2'];
        
       $a= $_POST['num1'];
       $b= $_POST['num2'];
      
       $multiplication = $a * $b;
       echo "<br>".$multiplication;
   
  
       }
    ?>

</body>
</html>