<?php
include('connect.php');

$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registered Children</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container-fluid {
            background-image: url('background.webp');
            background-size: cover; 
            background-position: center;
        }
        body{
            background-color: pink;
        }
        label {
        color: #333; 
        font-weight: bold;
        }
        .nav-item{
        color: #333; 
        font-weight: bold;
        }
        tr{
            background-color: white;
        }

    </style>
</head>
<body class="container my-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" >Nursery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Register</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="view.php">Registered Children</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about_us.php">About Us</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <h2 class="text-center">List of Registered Children</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Child's Name</th>
                <th>Date of Birth</th>
                <th>Day Nursery</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['child_full_name']; ?></td>
            <td><?php echo $row['date_of_birth']; ?></td>
            <td><?php echo $row['day_nursery']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Update</a> 
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>
