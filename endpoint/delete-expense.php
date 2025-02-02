
<?php
include ('../conn/conn.php');

if (isset($_GET['expense'])) {
    $expense = $_GET['expense'];

    try {

        $query = "DELETE FROM tbl_expense WHERE tbl_expense_id = '$expense'";

        $stmt = $conn->prepare($query);

        $query_execute = $stmt->execute();

        if ($query_execute) {
            header("Location: ../index.php");
        } else {
            header("Location: ../index.php");
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
