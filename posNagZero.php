<!DOCTYPE html>
<?php
$ans = $res = '';
if (isset($_POST['check'])) {
    $num = $_POST['num'];
    if (is_numeric($num)) {
        if($num==0){
            $res = 'zero';
        }
        else if($num>0){
            $res = 'positive';
        }else{
            $res = 'negitive';
        }
    }else{
        $res = 'not a numeric value';
    }
    $ans = 'The number ' . $num . ' is ' . $res;
}
?>

<body>
    <div class="cont">
        <h1>Check a number is positive, negitive or zero</h1>

        <form action="" method="post" id="quiz-form">
            <input type="text" name="num" id="num" placeholder="Enter the number:" />
            <input type="submit" name="check" id="check" value="Check" />
        </form>

        <?php echo '<h1><br />' . $ans."</h1>"; ?>
    </div>

</body>
<style>
    .cont {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        background-color: aqua;
    }

    h1 {
        font-size: 3rem;
    }

    input {
        font-size: 20px;
        width: 200px;
        height: 50px;
    }

    #quiz-form {
        display: flex;
        flex-direction: column;
    }
</style>

</html>