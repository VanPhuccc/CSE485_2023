<?php
    function pdo(PDO $pdo, string $sql, array $arguments = null)
    {
        if (!$arguments) {                   // If no arguments
            return $pdo->query($sql);        // Run SQL and return PDOStatement object
        }
        $statement = $pdo->prepare($sql);    // If arguments prepare statement
        $statement->execute($arguments);     // Execute statement
        return $statement;                   // Return PDOStatement object
    }
    function deleteAttendance($id){
       try{
            $sql = "delete from attendee where id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
     }
?>
