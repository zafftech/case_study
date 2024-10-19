<?php
include('connect.php');

if (isset($_POST['submit'])) {
    $day_nursery = $_POST['day_nursery'];
    $child_full_name = $_POST['child_full_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $age_of_child = $_POST['age_of_child'];
    $sex_of_child = $_POST['sex_of_child'];
    $religion_faith = $_POST['religion_faith'];
    $home_address = $_POST['home_address'];
    $postcode = $_POST['postcode'];
    $parent1_name = $_POST['parent1_name'];
    $parent1_relationship = $_POST['parent1_relationship'];
    $parent1_mobile = $_POST['parent1_mobile'];
    $parent1_tel = $_POST['parent1_tel'];
    $parent1_email = $_POST['parent1_email'];
    $parent2_name = $_POST['parent2_name'];
    $parent2_relationship = $_POST['parent2_relationship'];
    $parent2_mobile = $_POST['parent2_mobile'];
    $parent2_tel = $_POST['parent2_tel'];
    $parent2_email = $_POST['parent2_email'];
    $legal_guardian = $_POST['legal_guardian'];
    $guardian_relationship = $_POST['guardian_relationship'];
    $guardian_mobile = $_POST['guardian_mobile'];
    $home_tel = $_POST['home_tel'];
    $email_address = $_POST['email_address'];

    $sql = "INSERT INTO registration (day_nursery, child_full_name, date_of_birth, age_of_child, sex_of_child, religion_faith, home_address, postcode, parent1_name, parent1_relationship, parent1_mobile, parent1_tel, parent1_email, parent2_name, parent2_relationship, parent2_mobile, parent2_tel, parent2_email, legal_guardian, guardian_relationship, guardian_mobile, home_tel, email_address) 
            VALUES ('$day_nursery', '$child_full_name', '$date_of_birth', '$age_of_child', '$sex_of_child', '$religion_faith', '$home_address', '$postcode', '$parent1_name', '$parent1_relationship', '$parent1_mobile', '$parent1_tel', '$parent1_email', '$parent2_name', '$parent2_relationship', '$parent2_mobile', '$parent2_tel', '$parent2_email', '$legal_guardian', '$guardian_relationship', '$guardian_mobile', '$home_tel', '$email_address')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursery Registration Form</title>
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
        h4{
        background-color:white;
        border-radius:10px;
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
            <a class="nav-link active" aria-current="page" href="index.php">Register</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="view.php">Registered Children</a>
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

    <h2 class="text-center">Nursery Registration Form</h2>
    <form method="POST" action="register.php" class="row g-3">

        <div class="col-md-6">
            <label>Day Nursery:</label><br>
            <input type="radio" name="day_nursery" value="Newnham Court" required> Newnham Court
            <input type="radio" name="day_nursery" value="Hockers Lane" required> Hockers Lane
        </div>

        <div class="col-md-6">

        </div>

        <div class="col-md-6">
            <label>Child's Full Name:</label>
            <input type="text" class="form-control" name="child_full_name" required>
        </div>

        <div class="col-md-6">
            <label>Date of Birth:</label>
            <input type="date" class="form-control" name="date_of_birth" required>
        </div>

        <div class="col-md-6">
            <label>Age of Child:</label>
            <input type="number" class="form-control" name="age_of_child" required>
        </div>

        <div class="col-md-6">
            <label>Sex of Child:</label>
            <select name="sex_of_child" class="form-select" required>
                <option value="Boy">Boy</option>
                <option value="Girl">Girl</option>
            </select>
        </div>

        <div class="col-md-6">
            <label>Religion/Faith of Child:</label>
            <input type="text" class="form-control" name="religion_faith">
        </div>

        <div class="col-12">
            <label>Home Address:</label>
            <textarea name="home_address" class="form-control" required></textarea>
        </div>

        <div class="col-md-6">
            <label>Postcode:</label>
            <input type="text" class="form-control" name="postcode" required>
        </div>
        
        <h4 class="col-12 mt-5">Parent/Carer 1/Mrs/Ms/Miss/Mr</h4>
        <div class="col-md-6">
            <label>Name:</label>
            <input type="text" class="form-control" name="parent1_name">
        </div>

        <div class="col-md-6">
            <label>Relationship to Child:</label>
            <input type="text" class="form-control" name="parent1_relationship">
        </div>

        <div class="col-md-6">
            <label>Mobile No:</label>
            <input type="text" class="form-control" name="parent1_mobile">
        </div>

        <div class="col-md-6">
            <label>Tel No:</label>
            <input type="text" class="form-control" name="parent1_tel">
        </div>

        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" class="form-control" name="parent1_email">
        </div>

        <h4 class="col-12 mt-5">Parent/Carer 2/Mrs/Ms/Miss/Mr</h4>
        <div class="col-md-6">
            <label>Name:</label>
            <input type="text" class="form-control" name="parent2_name">
        </div>

        <div class="col-md-6">
            <label>Relationship to Child:</label>
            <input type="text" class="form-control" name="parent2_relationship">
        </div>

        <div class="col-md-6">
            <label>Mobile No:</label>
            <input type="text" class="form-control" name="parent2_mobile">
        </div>

        <div class="col-md-6">
            <label>Tel No:</label>
            <input type="text" class="form-control" name="parent2_tel">
        </div>

        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" class="form-control" name="parent2_email">
        </div>

        <h4 class="col-12 mt-5">Legal Guardian :Mrs/Ms/Miss/Mr</h4>
        <div class="col-md-6">
            <label>Name:</label>
            <input type="text" class="form-control" name="legal_guardian">
        </div>

        <div class="col-md-6">
            <label>Relationship to Child:</label>
            <input type="text" class="form-control" name="guardian_relationship">
        </div>

        <div class="col-md-6">
            <label>Mobile No:</label>
            <input type="text" class="form-control" name="guardian_mobile">
        </div>

        <div class="col-md-6">
            <label>Home Tel No:</label>
            <input type="text" class="form-control" name="home_tel">
        </div>

        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" class="form-control" name="email_address">
        </div>

        <div class="col-12 mt-4">
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</body>
</html>
