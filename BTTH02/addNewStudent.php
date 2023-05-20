<form method="POST">
<label for="id">ID:</label>
<input type="number" id="id" name="id" required>
<br>
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<br>
<label for="email">Email:</label>
<input type="text" id="age" name="age" required>
<br>
<label for="bdate">Date of birth:</label>
<input type="text" id="bdate" name="bdate" required>
<br>
<label for="phone">Phone number:</label>
<input type="number" id="phone" name="phone" required>
<br>
<input type="submit" value="Create">
</form>

<?php
    if ($success = true){
        echo "Add sucessfully";
    }
    else
        echo "Add failed";
?>
