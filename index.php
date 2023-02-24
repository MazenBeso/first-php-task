<?php
var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST ["name"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
    $number = $_POST ["age"];
}
?>


    <div>
        <h1><?php echo $name ?></h1>
        <h2><?php echo $email ?></h2>
        <h3><?php echo $password ?></h3>
        <h4><?php echo $number ?></h3>
    </div>


<html>
    <head>
        <body>
            <form action="" method="get">
                <input type="text" name="name" placeholder=" Enter your name" required>
                <input type="email" name="email" placeholder=" Enter your email" required>
                <input type="password" name="password" placeholder="Enter your password" required>
                <input type="number" name="age" placeholder="Enter your age" required>
                <label for="city">City</label>
                    <select id="city" name="city">
                        <option value="Alex">Alexandria</option>
                        <option value="cairo">Cairo</option>
                        <option value="damnhur">damnhur</option>
                        <option value="giza">giza</option>
                        <option value="sohag">sohag</option>
                        <option value="Matroh">Matroh</option>
                    </select>
                <input type="submit">
            </form>
        </body>
    </head>
</html>