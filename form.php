<h3>Form </h3>
<form action="form.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="submit">
</form>

<?php
    if (isset($_POST['name'])) {
        echo "Name:  " , $_POST['name'];
    }
?>