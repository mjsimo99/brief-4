


<?php
//for  delete student
include("cnx.php");

if(isset($_POST['delete_student']))
{
    $student_id = $_POST['delete_student'];
    try {
        $query = "DELETE FROM apprenant WHERE id=:student_id";
        $statment = $db->prepare($query);
        $data = [':student_id' => $student_id];
        $query_delete =  $statment->execute($data);
        if($query_delete)
        {
            header('Location: ../recherch.php');
            exit(0);
        }
        else
        {
            header('Location: ../recherch.php');
            exit(0);
        }
    }catch (PDOexeption $e) {
        echo "Deleted failed" .$e->getMessage();
    }


}


