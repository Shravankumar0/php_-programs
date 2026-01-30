<html>

<body>
    <h3>get method example

    </h3>

    <form method="get" action="">

   number1:  <input type="text" name="num1">
    <input type="submit" name ="send">
    </form>

    <?php
    
       if(isset($_GET['send']) ){
       
        echo"<br> number1  is : " . $_GET['num1'];
        
       $a= $_GET['num1'];
      if($a %2==0){
         echo "<br>".$a . " even nnumber" ;

      }else{

      echo "<br>" .$a . " odd nnumber" ;
    }

       }
    ?>

</body>
</html>