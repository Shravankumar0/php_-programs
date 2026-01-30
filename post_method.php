<html>

<body>
    <h3>get method example

    </h3>

    <form method="post" action="">

   number1:  <input type="text" name="num1">
    number2:<input type="text" name="num2">
    number3:<input type="text" name="num3">
    <input type="submit" name ="send">
    </form>

    <?php
    
       if(isset($_POST['send']) &&isset($_POST['num1']) && isset($_POST['num2']) &&isset($_POST['num3'])){
       
        echo"<br> number1  is : " . $_POST['num1'];
        echo"<br> number2  is : " . $_POST['num2'];
        echo"<br> number3  is : " . $_POST['num3'];

       //$addition = $num1+$num2+$num3;
       $a= $_POST['num1'];
       $b= $_POST['num2'];
       $c= $_POST['num3'];

       $addition = $a+$b+$c;
       echo"<br> addition  is : " .$addition ;
       }
    ?>

</body>
</html>