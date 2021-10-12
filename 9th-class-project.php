<!DOCTYPE html>
<head>
    <title>
       calculator
    </title>
</head>
<?php
    $result1="";
    $result2="";
    $result3="";
    $result4="";
    $arr33=array(
        array([0][0]=>"",[0][1]=>""),
        array([1][0]=>"",[1][1]=>"")
    );

   if(isset($_POST['operator'])){
     $num11 = $_POST['num11'];           //to receive value from input box or user interface
     $num12 = $_POST['num12'];  
     $num13 = $_POST['num13'];           
     $num14 = $_POST['num14'];
     $num21 = $_POST['num21'];
     $num22 = $_POST['num22'];
     $num23 = $_POST['num23'];
     $num24 = $_POST['num24'];
     $operator = $_POST['operator'];

     $arr11=array(
        array($num11,$num12),
        array($num13,$num14));

     $arr22=array(
         array($num21,$num22),
         array($num23,$num24));

if($operator == "add"){
    for($i=0; $i<2; $i++){
        for($j=0; $j<2; $j++){
                  $arr33[$i][$j] = $arr11[$i][$j] + $arr22[$i][$j];
             }
            }
        }
 else if($operator == "sub"){
    for($i=0; $i<2; $i++){
        for($j=0; $j<2; $j++){
            $arr33[$i][$j] = $arr11[$i][$j] - $arr22[$i][$j];
        }
    }
 }
else if($operator == "multiply"){
    for($i=0; $i<2; $i++){
        for($j=0; $j<2; $j++){
            $arr33[$i][$j] = $arr11[$i][$j] * $arr22[$i][$j];
        }
    }   
}
  
}

                          

?>

   <body>
    <form method="POST">
        <label>
            first matrix
        </label><br>
        <input type="number" name="num11" value="<?php echo $num11?>">
        <input type="number" name="num12" value="<?php echo $num12?>"><br>
        <input type="number" name="num13" value="<?php echo $num13?>">
        <input type="number" name="num14" value="<?php echo $num14?>"><br>
        <label>
            second matrix
        </label><br>
        <input type="number" name="num21" value="<?php echo $num21?>">
        <input type="number" name="num22" value="<?php echo $num22?>"><br>
        <input type="number" name="num23" value="<?php echo $num23?>">
        <input type="number" name="num24" value="<?php echo $num24?>"><br>

        <label>
            result
        </label><br>
        <input name="result" value="<?php echo $arr33[0][0]?>">
        <input name="result" value="<?php echo $arr33[0][1]?>"><br>
        <input name="result" value="<?php echo $arr33[1][0]?>">
        <input name="result" value="<?php echo $arr33[1][1]?>"><br>
        <input type="submit" value="add" name="operator">
        <input type="submit" value="sub" name="operator">
        <input type="submit" value="multiply" name="operator"><br>

    </form>   
   </body>
    </html>