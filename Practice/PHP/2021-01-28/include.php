<?php

//echo '<h1>Welcome to include.php file</h1>'; //for third file.
$script = $_SERVER['SCRIPT_NAME'];

?>
<form action ="<?php echo $script?>" method="POST">
    <input type ="submit" name="submit" value="submit">
</form>