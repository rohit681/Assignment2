<!DOCTYPE html>
<?php
    $ans='----------------------<br>';
    if (isset($_POST['check'])) {
        $Q1 = $_POST['quantity1'];
        $P1 = $_POST['price1'];
        $Q2 = $_POST['quantity2'];
        $P2 = $_POST['price2'];
    
        if($P1/$Q1<$P2/$Q2){
            $ans .= "First deal is best"; 
        }else{
            $ans .= "Second deal is best";
        }
        $ans .="<br>----------------------"; 
    }
?>

<body>
    <div class="cont">
        
		<h1>Which deal is better?</h1>
<form action="" method="post" id="quiz-form">
        <h2>Quantity 1</h2>
        
        <input type="number" name="quantity1" id="quantity1" placeholder="Enter Quantity 1:" />
        <input type="number" name="price1" id="price1" placeholder="Enter Price 1:" />

        <h2>Quantity 2</h2>
        <input type="number" name="quantity2" id="quantity2" placeholder="Enter Quantity 2:" />
        <input type="number" name="price2" id="price2" placeholder="Enter Price 2:" />
        <br>
        <input type="submit" name="check" id="check" value="Check" />
</form>
        <?php echo "<h1><br /> $ans </h1>"; 
    ?>

</div>
</body>
<style>
    
.cont{
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: aqua;
        
    }
    #check{
        width:200px;
        margin: 30px 220px;
        /* margin-top:30px; */
    }
    h1{
        font-size:3rem;
    }
    input{
        font-size:20px;
        width:300px;
        height: 40px;
        margin:5px;
    }

</style>
</html>