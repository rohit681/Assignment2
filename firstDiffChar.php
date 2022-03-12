<!DOCTYPE html>
<?php
$ans = $res = '';
if (isset($_POST['check'])) {
    $S1 = $_POST["str1"];
    $S2 = $_POST["str2"];
    $index =0;
    $c=0;
    $ans="First different are:<br>";
    while($index<strlen($S1) && $index<strlen($S2)){
        if($S1[$index]!=$S2[$index]){
            $c=1;
            $ans=$S1[$index].":".$S2[$index];
            break;
        }
        $index++;
    }
    if($index<strlen($S1) && $c==0){
        $ans .= $S1[$index];
    }else if($index<strlen($S2) && $c==0){
        $ans .=$S2[$index];
    }
    if($c==0){
        $ans = "Both are Equal";
    }
}
?>

<body>
    <div class="cont">
        
		<h1>First Diffent Character</h1>

<form action="" method="post" id="quiz-form">
    <div class="box">   
        <label for="str1"><h4>String 1:</h2></label><br>
        <input type="text" id="str1" name="str1" placeholder="Enter String 1:"><br>
    </div>
    <div class="box">
        <label for="str2"><h4>String 2:</h2></label><br>
        <input type="text" id="str2" name="str2" placeholder="Enter String 2:"><br>
    </div>
        <input type="submit" name="check" id="check" value="Check" />
</form>

    <?php echo '<h1><br />' . $ans."</h1>"; ?>
    </div>
		
</body>
<style>
    #check{
        margin-top:20px;
    }
    .box h4{
        margin-bottom:-10px;
    }
    .cont{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        background-color: aqua;
    }
    h1{
        font-size:3rem;
    }
    input{
        font-size:20px;
        width:250px;
        height:50px;
    }
</style>
</html>