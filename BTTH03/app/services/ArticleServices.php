<?php
include('../app/libs/DBConnection.php');
include('../app/models/Article.php');
class ArticleService{
    public function getallArticle()
    {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();
        if($conn != null)
        {
            $sql = "SELECT*from article order by id desc";
            $stmt= $conn->query($sql);
            $articles = [];
            while($rows = $stmt->fetch())
                {
                    $article = new Article($rows['id'],$rows['title'],$rows['summary'],$rows['content']);
                    $articles[] = $article;
                }
            return $articles;
        }
    }

    public function addArticle($title,$summary,$content)
    {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();
        if($conn !=null)
        {
            $sql = "INSERT into article (title,summary,categories) values ('$title','$summary','$content')";
            $stmt = $conn->query($sql);
            if($stmt){
                return true;
            }else{
                return false;
            }
        }
    }

    public function findArticlebyID($id){
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();
        if($conn !=null)
        {
            $sql = "SELECT *from article where id = '$id'";
            $stmt = $conn->query($sql);
            $articles = [];
            while($rows = $stmt->fetch())
                {
                    $article = new Article($rows['id'],$rows['title'],$rows['summary'],$rows['content']);
                    $articles[] = $article;
                }
            return $articles;
        }
    }
    
    public function updateArticle($id,$title,$summary,$content){
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();
        if($conn !=null)
        {
            $sql = "UPDATE article set title ='$title',
                                       summary = '$summary',
                                       content = '$content'
                            where id = '$id' ";
            $stmt = $conn->query($sql);
            if($stmt){
                return true;
            }else{
                return false;
            }
        }
    }
}


?>

