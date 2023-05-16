<form method="POST">
<label for="id">ID:</label>
<input type="number" id="id" name="id" required>
<br>
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<br>
<label for="age">Age:</label>
<input type="number" id="age" name="age" required>
<br>
<label for="grade">Grade:</label>
<input type="number" id="grade" name="grade" required>
<br>
<input type="submit" value="Create">
</form>
<p><?php echo $message; ?></p>
