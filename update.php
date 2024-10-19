<?php
include('connect.php');

// Retrieve the existing record based on the ID
$id = $_GET['id'];
$sql = "SELECT * FROM registration WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    // Capture form data with isset() check
    $day_nursery = isset($_POST['day_nursery']) ? $_POST['day_nursery'] : '';
    $child_full_name = isset($_POST['child_full_name']) ? $_POST['child_full_name'] : '';
    $date_of_birth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '';
    $age_of_child = isset($_POST['age_of_child']) ? $_POST['age_of_child'] : '';
    $sex_of_child = isset($_POST['sex_of_child']) ? $_POST['sex_of_child'] : '';
    $religion_faith = isset($_POST['religion_faith']) ? $_POST['religion_faith'] : '';
    $home_address = isset($_POST['home_address']) ? $_POST['home_address'] : '';
    $postcode = isset($_POST['postcode']) ? $_POST['postcode'] : '';
    $parent1_name = isset($_POST['parent1_name']) ? $_POST['parent1_name'] : '';
    $parent1_relationship = isset($_POST['parent1_relationship']) ? $_POST['parent1_relationship'] : '';
    $parent1_mobile = isset($_POST['parent1_mobile']) ? $_POST['parent1_mobile'] : '';
    $parent1_tel = isset($_POST['parent1_tel']) ? $_POST['parent1_tel'] : '';
    $parent1_email = isset($_POST['parent1_email']) ? $_POST['parent1_email'] : '';
    $parent2_name = isset($_POST['parent2_name']) ? $_POST['parent2_name'] : '';
    $parent2_relationship = isset($_POST['parent2_relationship']) ? $_POST['parent2_relationship'] : '';
    $parent2_mobile = isset($_POST['parent2_mobile']) ? $_POST['parent2_mobile'] : '';
    $parent2_tel = isset($_POST['parent2_tel']) ? $_POST['parent2_tel'] : '';
    $parent2_email = isset($_POST['parent2_email']) ? $_POST['parent2_email'] : '';
    $legal_guardian = isset($_POST['legal_guardian']) ? $_POST['legal_guardian'] : '';
    $guardian_relationship = isset($_POST['guardian_relationship']) ? $_POST['guardian_relationship'] : '';
    $guardian_mobile = isset($_POST['guardian_mobile']) ? $_POST['guardian_mobile'] : '';
    $home_tel = isset($_POST['home_tel']) ? $_POST['home_tel'] : '';
    $email_address = isset($_POST['email_address']) ? $_POST['email_address'] : '';

    // Prepare the update query
    $update_sql = "UPDATE registration SET 
        day_nursery='$day_nursery', 
        child_full_name='$child_full_name', 
        date_of_birth='$date_of_birth', 
        age_of_child='$age_of_child', 
        sex_of_child='$sex_of_child', 
        religion_faith='$religion_faith',
        home_address='$home_address',
        postcode='$postcode',
        parent1_name='$parent1_name',
        parent1_relationship='$parent1_relationship',
        parent1_mobile='$parent1_mobile',
        parent1_tel='$parent1_tel',
        parent1_email='$parent1_email',
        parent2_name='$parent2_name',
        parent2_relationship='$parent2_relationship',
        parent2_mobile='$parent2_mobile',
        parent2_tel='$parent2_tel',
        parent2_email='$parent2_email',
        legal_guardian='$legal_guardian',
        guardian_relationship='$guardian_relationship',
        guardian_mobile='$guardian_mobile',
        home_tel='$home_tel',
        email_address='$email_address' 
        WHERE id=$id";

    // Execute the update query
    if (mysqli_query($conn, $update_sql)) {
        echo "Update successful!";
    } else {
        echo "Error: " . $update_sql . "<br>" . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: pink;
        }

    </style>
</head>
<body class="container my-5">
    <h2>Update Registration Form</h2>
    <form method="POST" action="update.php?id=<?php echo $id; ?>" class="row g-3">

        <div class="col-md-6">
            <label>Day Nursery:</label><br>
            <input type="radio" name="day_nursery" value="Newnham Court" <?php echo ($row['day_nursery'] == 'Newnham Court') ? 'checked' : ''; ?> required> Newnham Court
            <input type="radio" name="day_nursery" value="Hockers Lane" <?php echo ($row['day_nursery'] == 'Hockers Lane') ? 'checked' : ''; ?> required> Hockers Lane
        </div>

        <div class="col-md-6">
            <label>Child's Full Name:</label>
            <input type="text" class="form-control" name="child_full_name" value="<?php echo $row['child_full_name']; ?>" required>
        </div>

        <div class="col-md-6">
            <label>Date of Birth:</label>
            <input type="date" class="form-control" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" required>
        </div>

        <div class="col-md-6">
            <label>Age of Child:</label>
            <input type="number" class="form-control" name="age_of_child" value="<?php echo $row['age_of_child']; ?>" required>
        </div>

        <div class="col-md-6">
            <label>Sex of Child:</label>
            <select name="sex_of_child" class="form-select" required>
                <option value="Boy" <?php echo ($row['sex_of_child'] == 'Boy') ? 'selected' : ''; ?>>Boy</option>
                <option value="Girl" <?php echo ($row['sex_of_child'] == 'Girl') ? 'selected' : ''; ?>>Girl</option>
            </select>
        </div>

        <div class="col-md-6">
            <label>Religion/Faith of Child:</label>
            <input type="text" class="form-control" name="religion_faith" value="<?php echo $row['religion_faith']; ?>">
        </div>

        <div class="col-12">
            <label>Home Address:</label>
            <textarea name="home_address" class="form-control" required><?php echo $row['home_address']; ?></textarea>
        </div>

        <div class="col-md-6">
            <label>Postcode:</label>
            <input type="text" class="form-control" name="postcode" value="<?php echo $row['postcode']; ?>" required>
        </div>
        
        <!-- Parent 1 Information -->
        <h4 class="col-12 mt-5">Parent/Carer 1</h4>
        <div class="col-md-6">
            <label>Name:</label>
            <input type="text" class="form-control" name="parent1_name" value="<?php echo $row['parent1_name']; ?>">
        </div>

        <div class="col-md-6">
            <label>Relationship to Child:</label>
            <input type="text" class="form-control" name="parent1_relationship" value="<?php echo $row['parent1_relationship']; ?>">
        </div>

        <div class="col-md-6">
            <label>Mobile No:</label>
            <input type="text" class="form-control" name="parent1_mobile" value="<?php echo $row['parent1_mobile']; ?>">
        </div>

        <div class="col-md-6">
            <label>Tel No:</label>
            <input type="text" class="form-control" name="parent1_tel" value="<?php echo $row['parent1_tel']; ?>">
        </div>

        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" class="form-control" name="parent1_email" value="<?php echo $row['parent1_email']; ?>">
        </div>

        <!-- Parent 2 Information -->
        <h4 class="col-12 mt-5">Parent/Carer 2</h4>
        <div class="col-md-6">
            <label>Name:</label>
            <input type="text" class="form-control" name="parent2_name" value="<?php echo $row['parent2_name']; ?>">
        </div>

        <div class="col-md-6">
            <label>Relationship to Child:</label>
            <input type="text" class="form-control" name="parent2_relationship" value="<?php echo $row['parent2_relationship']; ?>">
        </div>

        <div class="col-md-6">
            <label>Mobile No:</label>
            <input type="text" class="form-control" name="parent2_mobile" value="<?php echo $row['parent2_mobile']; ?>">
        </div>

        <div class="col-md-6">
            <label>Tel No:</label>
            <input type="text" class="form-control" name="parent2_tel" value="<?php echo $row['parent2_tel']; ?>">
        </div>

        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" class="form-control" name="parent2_email" value="<?php echo $row['parent2_email']; ?>">
        </div>

        <!-- Legal Guardian Information -->
        <h4 class="col-12 mt-5">Legal Guardian</h4>
        <div class="col-md-6">
            <label>Name:</label>
            <input type="text" class="form-control" name="legal_guardian" value="<?php echo $row['legal_guardian']; ?>">
        </div>

        <div class="col-md-6">
            <label>Relationship to Child:</label>
            <input type="text" class="form-control" name="guardian_relationship" value="<?php echo $row['guardian_relationship']; ?>">
        </div>

        <div class="col-md-6">
            <label>Mobile No:</label>
            <input type="text" class="form-control" name="guardian_mobile" value="<?php echo $row['guardian_mobile']; ?>">
        </div>

        <div class="col-md-6">
            <label>Home Tel No:</label>
            <input type="text" class="form-control" name="home_tel" value="<?php echo $row['home_tel']; ?>">
        </div>

        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" class="form-control" name="email_address" value="<?php echo $row['email_address']; ?>">
        </div>

        <div class="col-12 mt-4">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="view.php" class="btn btn-primary">View Page</a>
        </div>
        
    </form>
</body>
</html>

