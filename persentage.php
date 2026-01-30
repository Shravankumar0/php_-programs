<html>

<body>
    <h3>get method example </h3>
    <form method="post" action="">
     Subject1:  <input type="number" name="num1">
     Subject2:<input type="number" name="num2">
     Subject3:<input type="number" name="num3">
     Subject4:<input type="number" name="num4">
     Subject5:<input type="number" name="num5">
    <input type="submit" name ="send">
    </form>

    <?php
    
       if(isset($_POST['send']))
       {
       
        echo"<br> subject1  is : " . $_POST['num1'];
        echo"<br> subject2  is : " . $_POST['num2'];
        echo"<br> subject3  is : " . $_POST['num3'];
        echo"<br> subject4  is : " . $_POST['num4'];
        echo"<br> subject5  is : " . $_POST['num5'];

     
       $a= $_POST['num1'];
       $b= $_POST['num2'];
       $c= $_POST['num3'];
       $d= $_POST['num4'];
       $e= $_POST['num5'];

       $total = ($a+$b+$c+$d+$e);
       echo "<br>".$total;
       $percentage= ($total/500)*100;
       echo "<br> Percentage is : " .$percentage ."%";
       }
    ?>

</body>
</html>