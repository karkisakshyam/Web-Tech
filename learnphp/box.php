<style>
#box{
   height: 100px;
    width: 100px;
    background-color: red;
    margin: 2px;
    display: inline-flex;      
    justify-content: center;   
    align-items: center;       
    font-size: 30px;
    color: white;
    font-weight: bold;

}
</style>


<?php
$num = 1;
for ($row = 1; $row <= 5; $row++ ){
    for($col = 1; $col <= 7; $col++ ){
       echo "<div id = 'box'>{$num} </div>";
       if ($num<=30){
        $num++;
       }else{
        $num=0;
        $num++;
       }
    }
    echo "<br>";
}
?>