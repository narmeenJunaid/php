<?php
include('connection.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="form.php" method="post" >
            <label for="id">Employee Id</label> 
            <input type="number" name="id">
            <br>
            <label for="name">Employee Name</label>
            <input type="text" name="name" >
            <br>    
            <label for="designation">Designation</label>
            <input type="text" name="designation" >
            <br>
            <label for="gender">Gender</label>
            <input type="text" name="gender" >
            <br>
            <label for="salary">Salary</label >
            <input type="number" name="salary" >
            <br>
            <label for="year">Joining Year</label>
            <input type="number" name="year" >
            <input type="submit" name="save">
        </form>
    </div>

    <?php
   if(isset($_POST['save'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $year = $_POST['year'];

    $query = "INSERT INTO `employees` (`id`, `name`, `designation`, `gender`, `salary`, `year`) VALUES ('$id', '$name', '$designation', '$gender', '$salary', '$year')";
    $result = mysqli_query($connect,$query);
    if(!$result){
        echo("failed");
    }
   }
        ?>
</body>
</html>