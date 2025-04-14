<?php
include 'petShop.php';

$petShop= new PetShop();
 if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=ucwords(strtolower(trim($_POST['name'])));
    $age=$_POST['age'];
    $type=$_POST['type'];
    $petShop->addPet($name,$age,$type);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pet shop manager</title>
</head>
<body>
    <header>
        <h2>Pet Shop Manager</h2>
        
    </header>
    <main>
        <div class="container">
            <form method="post" >
                <h3>Add new pet to the shop</h3>
                <br>
                <input name="name" class="inputName" type="text"  placeholder="Name" required>
                <input name="age" class="inputAge" type="number"  placeholder="Age" required>
                <select name="type" required>
                    <option value="">Type</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="bird">Bird</option>
                </select>
                <button type="submit">Add</button>
            </form>
            <h3>Pet list</h3>
            <ul>
                <?php $petShop->listPet();?>
            </ul>
            <img src="paw-print.avif" alt="paw" class="paw">
        </div>
    </main>
    <footer>
        <span style="display:none">footer</span>
    </footer>
</body>
</html>