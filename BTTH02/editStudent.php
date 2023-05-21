<form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendance['id'] ?>" />
        <div class="form-group">
            <label for="id">Id</label>
            <input type="number" class="form-control" value="<?php echo $attendance['id'] ?>" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="<?php echo $attendance['name'] ?>" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="bdate">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $attendance['dateofbirth'] ?>" id="dbate" name="dbate">
        </div>
</form>
