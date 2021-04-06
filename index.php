<?php

$name = "";
$users= ["Mom" => "iamtheboss!", "Dad" => "ineedabEEr*", "Lana" => "hearmeout#", "Logan" => "wishIwasTaller^"];



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    if (isset($users[$name]) && $users[$name] ===  $password) {
            header("Location: chores.php");
            exit;
    } else {
       $message = "Something doesn't match. Try again.";
    };       
}


?>

<h1>Household Chores</h1>
<h2>Who's turn is it to clean the litter boxes?</h2>

<h3>Please sign in to this super confidential website</h3>
<form method="post" action="">
Family Member Name: <input type="text" name="name" value="<?php echo $name;?>">;
<br>
Password: <input type="password" name="password" value=""><br>
<button type="submit">Submit</button><br>
<?php 
echo $message;
?>