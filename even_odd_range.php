<html>

<body>
    <h3>get method example</h3>
    <form method="get" action="">

   number1:  <input type="number" name="num1">
  
    <input type="submit" name ="send">
    </form>

    <?php
    
       if(isset($_GET['send']) ){
       
        echo"<br> number1  is : " . $_GET['num1'];    
        $a= $_GET['num1'];
        

        for ($i=1; $i<=$a; $i++ ){
        
            if($i %2==0){
           
                echo "<br>".$i . " even nnumber" ;
          
            }else{
              
                echo "<br>" .$i . " odd nnumber" ;
           }
         }
       }
    ?>

</body>
</html