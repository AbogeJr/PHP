<?php require_once('conn.php'); ?>

<?php
// ADDING RECORDS
    if(isset($_POST['add'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        if($name != "") {
        $query = "INSERT INTO employee VALUES" . "('$id', '$name');";
        $result = $conn->query($query);
            if(!$result) echo "INSERT Failed! <br><br>";
        }
        else {
        echo "Please fill all Fields!";
        }
    }
    // var_dump($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="id" id="id" placeholder="Enter ID here"><br>
        <input type="text" name="name" id="name" placeholder="Enter Name here"><br>
        <input type="submit" name="add" value="Add">
    </form>
    <div class="container">
        <?php 
            $show = "SELECT * FROM employee";
            $emp_data = mysqli_query($conn, $show);
            $data_array = mysqli_fetch_all($emp_data, MYSQLI_ASSOC);
            foreach($data_array as $emp_data) : ?>
                <div class="container">
                    ID: <?php echo $emp_data['ID'] ?> <br>
                    Name: <?php echo $emp_data['Name']?>    
                </div>
            <?php endforeach ?>
    </div>
</body>
</html>

<!-- <?php
                                // DELETING RECORDS
 if(isset($_POST['delete'])) {
        $qry = "DELETE FROM employee WHERE employee.ID = {$emp_data['ID']};";
        $res = $conn->query($qry);
        if(!$res) echo "Deletion Failed! <br><br>";
 }
?>   -->