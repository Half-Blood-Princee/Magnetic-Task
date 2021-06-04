<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
        if (!preg_match("/^[a-z]+[._a-z0-9-]*@*[a-z.]+(com|ua|net)$/i", $email )) {
            $emailErr = "Invalid email format";
        }else{
            $emailErr="Success";
        }
    }
}

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    E-mail: <input type="text" name="email">
    <span class="error"><?php echo $emailErr; ?></span>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $email,$emailErr?>