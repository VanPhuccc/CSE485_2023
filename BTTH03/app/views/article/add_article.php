<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add a new Article</title>
</head>
<body>
<div class = "container">
    <h3 class="text-center text-sucess my-5">Thêm mới bài viết</h3>
  </div>
<form action="../app/views/article/add_article.php" method ="POST">
  <div class="form-item">
    <input type="text" name = "Title" required placeholder="Tên tiêu đề..."> 
  </div>
  <div class="form-item">
    <input type="text" name = "Summary" required placeholder="Tóm tắt..."> 
  </div>
  <div class="form-item">
    <input type="text" name = "Content" required placeholder="Nội dung bài viết..."> 
  </div>
  <button class="btn green " name="submit" type="submit">Thêm mới</button>
</form>
</body>
</html>
