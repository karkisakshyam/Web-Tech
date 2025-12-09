<style>
#box{
    height:100px;
    width: 100px;
    background-color: red;
    margin-bottom: 5px;
    display:inline-block;
    
}
</style>


<?php
for ($row = 1; $row <= 4; $row++ ){
    for($col = 1; $col <= 4; $col++ ){
       echo "<div id = 'box'> </div>";
    }
    echo "<br>";
}
?>