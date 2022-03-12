<!DOCTYPE html>
<?php
$ans = $res =$ANS ='';
if (isset($_POST['unit'])) {
    $str = $_POST['units'];
    $str = str_replace(' ',' ',$str);
    // $str = preg_replace('/\s+/', '', $str);
    $Arr = explode(" ",$str);
    foreach($Arr as $val){
        $ans .=  $val.",";
    }

    $ans = substr($ans,0,strlen($ans)-1);

    $ANS = "Array is:".$ans;
}
?>

<body>
    <div class="cont">
        
		<h1>String to Array</h1>

<form action="" method="post" id="quiz-form">
        <input type="text" name="units" id="units" placeholder="Enter the string:" /><br>
        <input type="submit" name="unit" id="unit" value="Submit" />
</form>

    <?php echo "<h3><br /> $ANS </h3>"; 
    ?>

</div>
</body>
<style>
    
.cont{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        background-color:aqua;
    }
    h1{
        font-size:3rem;
    }
    input{
        font-size:20px;
        width:300px;
        height:50px;
    }
       #quiz-form {
        display: flex;
        flex-direction: column;
    }
</style>
</html>