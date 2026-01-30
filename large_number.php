<html>

<body>
    <h3>get method example </h3>
    <form method="post" action="">
     number1:  <input type="number" name="num1">
     number2:<input type="number" name="num2">
     number3:<input type="number" name="num3">
    
    <input type="submit" name ="send">
    </form>

    <?php
    
       if(isset($_POST['send']))
       {
       
        echo"<br> subject1  is : " . $_POST['num1'];
        echo"<br> subject2  is : " . $_POST['num2'];
        echo"<br> subject3  is : " . $_POST['num3'];
       

     
       $a= $_POST['num1'];
       $b= $_POST['num2'];
       $c= $_POST['num3'];
      
       if($a>$b){
         echo "<br>".$a." a greater then b" .$b;

       }

       elseif($b>$c){
        echo "<br>".$b."b greater then c" .$c;
       }

       elseif($c>$a){
        echo "<br>".$c."c greater then a " .$a;
       }

       else{

        echo"<br>equale numbers ." .$a;
       }

       }
    ?>

</body>
</html>