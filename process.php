<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['fruits']) && !empty($_POST['fruits'])) {
        $selectedFruits = $_POST['fruits']; 
        $favoriteFruitMessage = "";

        foreach ($selectedFruits as $fruit) {
            if ($fruit == "Mango") {
                $favoriteFruitMessage .= "You love Mango! It's sweet and delicious. ";
            } elseif ($fruit == "Apple") {
                $favoriteFruitMessage .= "You picked Apple! Crunchy and refreshing. ";
            }
        }
    } else {
        $favoriteFruitMessage = "No fruits selected."; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Selector</title>
</head>
<body>
    <h2>Select Your Favorite Fruits</h2>
    <form method="POST">
        <input type="checkbox" name="fruits[]" value="Apple"> App <br>
        <input type="checkbox" name="fruits[]" value="Watermelon"> Watermelon <br>
        <input type="checkbox" name="fruits[]" value="Mango"> Mango <br>
        <input type="checkbox" name="fruits[]" value="Orange"> Orange <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>