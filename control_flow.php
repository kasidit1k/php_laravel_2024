

<h1>If Else</h1>
<!-- if else มีเงื่อนไขได้เยอะ  -->
<?php 
    $x = 10;
    if($x > 0){
        echo "Positive";
    }else{
        echo "Negative";
    }
?>

<hr>

<h1>Switch Case</h1>
<!-- มีเงื่อนไขเดียว มันจะชี้ index เลย -->
<?php 
switch($x){
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    case 3:
        echo "Three";
        break;
    default:
        echo "Unknown";
        break;
}
?>

<hr>