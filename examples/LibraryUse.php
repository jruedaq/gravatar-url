<?php
require '../vendor/autoload.php';

use jruedaq\GravatarUrl\GetGravatar;

$name = $_POST["user"] ?? "Example User";
$email = $_POST["email"] ?? "example@example.com";

$imageUrl = GetGravatar::getUrl($name, $email, 230);

var_dump($imageUrl);
?>
<img src="<?php echo $imageUrl; ?>" alt="profile image">

<form method="POST">
    <br>
    <label>Input your name
        <input type="text" name="user" value="<?php echo $name; ?>">
    </label>
    <br>
    <label>Input your email
        <input type="email" name="email" value="<?php echo $email; ?>">
    </label>
    <br>
    <input type="submit" value="Test">
</form>