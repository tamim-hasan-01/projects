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
        array(),
        array()
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
     
     
     if (is_numeric($num11)) { echo $num11 . " is numeric"."<br>";}
     else { echo $num11 . " is not numeric"."<br>";}
     
     if (is_numeric($num12)) { echo $num12 . " is numeric"."<br>";}
     else { echo $num12 . " is not numeric"."<br>";}
     
     if (is_numeric($num13)) { echo $num13 . " is numeric"."<br>";}
     else { echo $num13 . " is not numeric"."<br>"; }
     
     if (is_numeric($num14)) { echo $num14 . " is numeric"."<br>";}
     else { echo $num14 . " is not numeric"."<br>";}
     
     if (is_numeric($num21)) { echo $num21 . " is numeric"."<br>";}
     else { echo $num21 . " is not numeric"."<br>";}
     
     if (is_numeric($num22)) { echo $num22 . " is numeric"."<br>";}
     else { echo $num22 . " is not numeric"."<br>";}
     
     if (is_numeric($num23)) { echo $num23 . " is numeric"."<br>";}
     else { echo $num23 . " is not numeric"."<br>";}    
     
     if (is_numeric($num24)) {echo $num24 . " is numeric"."<br>";}
     else {echo $num24 . " is not numeric"."<br>";}
     
    /*  if(!empty($num21)){
        echo "Given Array is empty";} */
        
        
        echo"<br>";
        echo"<br>";
        
        $arr11=array(
            array($num11,$num12),
            array($num13,$num14));
            
            $arr22=array(
                array($num21,$num22),
                array($num23,$num24));
                
                foreach ($arr11 as $key => $value) {
                    if (empty($value)) {
                       unset($arr11[$key]);
                    }
                }if (empty($arr11)) {
                    echo "empty array";
                 }
            foreach ($arr22 as $key => $value) {
               if (empty($value)) {
                   unset($arr22[$key]);
                    }
                }if (empty($arr22)) {
                    echo "empty array";
                 }
                function addition($arr11,$arr22){
                    for($i=0; $i<2; $i++){
            for($j=0; $j<2; $j++){
                $arr33[$i][$j] = $arr11[$i][$j] + $arr22[$i][$j];
            }
        }    
    }
             
             
  /*  if($operator == "add"){
       for($i=0; $i<2; $i++){
             for($j=0; $j<2; $j++){
                $arr33[$i][$j] = $arr11[$i][$j] + $arr22[$i][$j];
             }
            } 
        } */
        if($operator == "add"){
            addition($arr11,$arr22);
        }

 else if($operator == "sub"){
    for($i=0; $i<2; $i++){
        for($j=0; $j<2; $j++){
            $arr33[$i][$j] = $arr11[$i][$j] - $arr22[$i][$j];
            
        }
    }
 }
else if($operator == "multiply"){
    /* for($i=0; $i<2; $i++){
        for($j=0; $j<2; $j++){
            $arr33[$i][$j] = $arr11[$i][$j] * $arr22[$i][$j];
        }
    } */ 
    $arr33[0][0]= ($arr11[0][0] * $arr22[0][0]) + ($arr11[0][1] *$arr22[1][0]);
    $arr33[0][1]= ($arr11[0][0] * $arr22[0][1]) + ($arr11[0][1] *$arr22[1][1]);
    $arr33[1][0]= ($arr11[1][0] * $arr22[0][0]) + ($arr11[1][1] *$arr22[1][0]);
    $arr33[1][1]= ($arr11[1][0] * $arr22[0][1]) + ($arr11[1][1] *$arr22[1][1]);
    
}
if(empty($arr11)){
    echo "Given Array is empty";}

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
        <input name="result" value="<?php if(isset($_POST['operator'])){echo $arr33[0][0];}?>">
        <input name="result" value="<?php if(isset($_POST['operator'])){echo $arr33[0][1];}?>"><br>
        <input name="result" value="<?php if(isset($_POST['operator'])){echo $arr33[1][0];}?>">
        <input name="result" value="<?php if(isset($_POST['operator'])){echo $arr33[1][1];}?>"><br>
        <input type="submit" value="add" name="operator">
        <input type="submit" value="sub" name="operator">
        <input type="submit" value="multiply" name="operator"><br>

    </form>   
   </body>
    </html>