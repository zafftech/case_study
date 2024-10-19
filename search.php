<?php
include('connect.php');

if (isset($_POST['search'])) {
    $search_term = $_POST['search_term'];
    $sql = "SELECT * FROM registration WHERE child_full_name LIKE '%$search_term%'";
    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Children</title>
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
        tr
        {
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
            <a class="nav-link" href="view.php">Registered Children</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="search.php">Search</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about_us.php">About Us</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>   
     
    <h2 class="text-center">Search for a Child</h2>
    <form method="POST" action="search.php" class="d-flex">
        <input type="text" name="search_term" class="form-control me-2" placeholder="Enter Child's Name">
        <button type="submit" name="search" class="btn btn-primary">Search</button>
    </form>

    <?php if (isset($result)) { ?>
    <h2 class="mt-5">Search Results</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Child's Name</th>
                <th>Date of Birth</th>
                <th>Day Nursery</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['child_full_name']; ?></td>
            <td><?php echo $row['date_of_birth']; ?></td>
            <td><?php echo $row['day_nursery']; ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</body>
</html>
