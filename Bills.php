<!DOCTYPE html>
<?php
$ans = $res = '';
if (isset($_POST['unit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $first = 3.50;
        $second = 4.00;
        $third = 5.20;
        $forth = 6.50;

        if($units <= 50) {  
            $bill = $units * $first;
        }
        else if($units > 50 && $units <= 100) {
            $remaining_units = $units - 50;
            $bill = 50 * $first + ($remaining_units * $second);
        }
        else if($units > 100 && $units <= 200) {
            $remaining_units = $units - 150;
            $bill = (50 * 3.5) + (100 * $second) + ($remaining_units * $third);
        }
        else {
            $remaining_units = $units - 250;
            $bill =  (50 * 3.5) + (100 * $second) + (100 * $third) + ($remaining_units * $forth);
        }
        
        $res = number_format((float)$bill, 2, '.', '');
        $ans = 'Total amount of ' . $units . ' units:' . $res." Rs";
    }
}
?>

<body>
    <div class="cont">

        <h1>Electricity Bill</h1>

        <form action="" method="post" id="quiz-form">
            <input type="number" name="units" id="units" placeholder="Enter no. of Units" />
            <input type="submit" name="unit" id="unit" value="Submit" />
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
        width: 250px;
        height: 50px;
    }

    #quiz-form {
        display: flex;
        flex-direction: column;
    }
</style>

</html>