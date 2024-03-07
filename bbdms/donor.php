<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Donor Form</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
            session_start();
            include "db_conn.php"; // Assuming this file contains your database connection

            if (isset($_POST['submit'])) {
                $gender = $_POST['gender'];
                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $lastname = $_POST['lastname'];
                $birthday = date('Y-m-d', strtotime($_POST['birthday']));
                $age = $_POST['age'];
                $weight = $_POST['weight'];
                $height = $_POST['height'];
                $lot = $_POST['lot'];
                $blk = $_POST['blk'];
                $street = $_POST['street'];
                $subdivision = $_POST['subdivision'];
                $barangay = $_POST['barangay'];
                $city = $_POST['city'];
                $province = $_POST['province'];
                $zip = $_POST['zip'];
                $mobilenumber = $_POST['mobilenumber'];
                $email = $_POST['email'];
                $occupation = $_POST['occupation'];
                $blood_type = $_POST['blood_type'];
                $bank_location = $_POST['bank_location'];
                $e_name = $_POST['e_name'];
                $e_relationship = $_POST['e_relationship'];
                $e_mobile = $_POST['e_mobile'];
                $e_email = $_POST['e_email'];
                $blood_donation = $_POST['blood_donation'];
                $medical_conditions = $_POST['medical_conditions'];
                $surgery = $_POST['surgery'];
                $allergies = $_POST['allergies'];
                $positive = $_POST['positive'];
                $symptoms = $_POST['symptoms'];
                $breastfeeding = $_POST['breastfeeding'];
                $medication = $_POST['medication'];

                // Insert data into the database
                $sql = "INSERT INTO donors (gender, firstname, middlename, lastname, birthday, age, weight, height, lot, blk, street, subdivision, barangay, city, province, zip, mobilenumber, email, occupation, blood_type, bank_location, e_name, e_relationship, e_mobile, e_email, blood_donation, medical_conditions, surgery, allergies, positive, symptoms, breastfeeding, medication) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);

                if ($preparestmt) {
                    mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssssss", $gender, $firstname, $middlename, $lastname, $birthday, $age, $weight, $height, $lot, $block, $street, $subdivision, $barangay, $city, $province, $zip, $mobilenumber, $email, $occupation, $blood_type, $bank_location, $e_name, $e_relationship, $e_mobile, $e_email, $blood_donation, $medical_conditions, $surgery, $allergies, $positive, $symptoms, $breastfeeding, $medication);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'> Congratulations! You are now one of our hero! Please show the details to the specified blood bank location. </div>";
                } else {
                    echo "Not Inserted. Error: " . mysqli_stmt_error($stmt);
                }
            }
        ?>
        <form action="donor.php" method="post">
            <h1>Blood Donation Form</h1>

            <div class="row">
                <h5>Blood Donor Information</h5>
                <div class="col">
                    <label><input class="form-check-input" type="radio" name="gender" value="Female"> Female</label>
                    <label><input class="form-check-input" type="radio" name="gender" value="Male"> Male</label>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>First Name</label><input type="text" name="firstname" class="form-control">
                </div>
                <div class="col">
                    <label>Middle Name</label><input type="text" name="middlename" class="form-control">
                </div>
                <div class="col">
                    <label>Last Name</label><input type="text" name="lastname" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Date of Birth</label>
                    <input type="date" name="birthday" class="form-control">
                </div>
    
                <div class="col-1">
                    <label>Age</label>
                    <input type="text" name="age" class="form-control">
                </div>

                <div class="col">
                    <label>Weight</label>
                    <input type="text" name="weight" class="form-control" placeholder="KG">
                </div>

                <div class="col">
                    <label>Height</label>
                    <input type="text" name="height" class="form-control" placeholder="CM">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Address</label>
                    <input type="text" name="lot" class="form-control" placeholder="Lot">
                </div>
                <div class="col">
                    <label></label>
                    <input type="text" name="blk" class="form-control" placeholder="Blk">
                </div>
                <div class="col">
                    <label></label>
                    <input type="text" name="street" class="form-control" placeholder="Street">
                </div>
                <div class="col">
                    <label></label>
                    <input type="text" name="subdivision" class="form-control" placeholder="Subdivision/Village">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" name="barangay" class="form-control" placeholder="Barangay">
                </div>
                <div class="col">
                    <input type="text" name="city" class="form-control" placeholder="City">
                </div>
                <div class="col">
                    <input type="text" name="province" class="form-control" placeholder="Province">
                </div>
                <div class="col">
                    <input type="text" name="zip" class="form-control" placeholder="Postal/ZIP Code">
                </div>
            </div>
                
            <div class="row">
                <div class="col">
                    <label>Mobile Number</label>
                    <input type="text" name="mobilenumber" class="form-control" placeholder="+63">
                </div>
                <div class="col">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col">
                    <label>Occupation</label>
                    <input type="text" name="occupation" class="form-control">
                </div>
            </div>

                
            <div class="row">
                <div class="col-2">
                    <label>Blood Type:</label>
                    <select name="blood_type" class="form-select">
                        <option></option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="col-4">
                    <label>Blood Bank Location</label>
                    <select name="bank_location" class="form-select">
                        <option></option>
                        <option value="Quezon City">Quezon City</option>
                        <option value="Batangas">Batangas</option>
                    </select>
                </div>
            </div>

        <h4>Emergency Information</h4>
        <div class="row">
            <div class="col">
                <label>Name</label>
                <input type="text" name="e_name" class="form-control" placeholder="(Last, First, Middle)">
            </div>
            <div class="col">
                <label>Relationship</label>
                <input type="text" name="e_relationship" class="form-control" placeholder="">
            </div>
            <div class="col">         
                <label>Mobile Number</label>
                <input type="text" name="e_mobile" class="form-control" placeholder="+63">
            </div>
            <div class="col">
                <label>Email</label>
                <input type="email" name="e_email" class="form-control" placeholder="">
            </div>
        </div>

        <h4>Health Security Check</h4>
            <div class="form-check">
                <label>Yes
                <input class="form-check-input" type="radio" name="blood_donation" value="Yes">&emsp;&emsp;
                </label>
                <label>No
                <input class="form-check-input" type="radio" name="blood_donation" value="No">&emsp;&emsp;
                </label>
                <label>Have you ever donate blood before?</label>
            </div>

            <div class="form-check">
                <label>Yes
                <input class="form-check-input" type="radio" name="medical_conditions" value="Yes">&emsp;&emsp;
                </label>
                <label>No
                <input class="form-check-input" type="radio" name="medical_conditions" value="No">&emsp;&emsp;
                </label>
                <label>Have you ever been diagnosed with any chronic medical conditions, such as diabetes, hypertension, or heart disease?</label>
            </div>
            
            <div class="form-check">
                <label>Yes
                <input class="form-check-input" type="radio" name="surgery" value="Yes">&emsp;&emsp;
                </label>
                <label>No
                <input class="form-check-input" type="radio" name="surgery" value="No">&emsp;&emsp;
                </label>
                <label>Have you ever undergone surgery or had any major medical procedures in the past?</label>
            </div>

            <div class="form-check">
                <label>Yes
                <input class="form-check-input" type="radio" name="allergies" value="Yes">&emsp;&emsp;
                </label>
                <label>No
                <input class="form-check-input" type="radio" name="allergies" value="No">&emsp;&emsp;
                </label>
                <label>Do you have allergies?</label>
            </div>

            <div class="form-check">
                <label>Yes
                <input class="form-check-input" type="radio" name="positive" value="Yes">&emsp;&emsp;
                </label>
                <label>No
                <input class="form-check-input" type="radio" name="positive" value="No">&emsp;&emsp;
                </label>
                <label>Have you ever had positive test for HbsAg, Hcv, HIV?</label>
            </div>

            <div class="form-check">
                <label>Yes
                <input class="form-check-input" type="radio" name="symptoms" value="Yes">&emsp;&emsp;
                </label>
                <label>No
                <input class="form-check-input" type="radio" name="symptoms" value="No">&emsp;&emsp;
                </label>
                <label>Are you currently experiencing any symptoms such as fever, chills, nausea, or shortness of breath?</label>
            </div>

            <div class="form-check">
                <label>Yes
                <input class="form-check-input" type="radio" name="breastfeeding" value="Yes">&emsp;&emsp;
                </label>
                <label>No
                <input class="form-check-input" type="radio" name="breastfeeding" value="No">&emsp;&emsp;
                </label>
                <label>Are you currently pregnant or breastfeeding?</label>
            </div>

            <div class="form-check">
                <label>Yes
                <input class="form-check-input" type="radio" name="medication" value="Yes">&emsp;&emsp;
                </label>
                <label>No
                <input class="form-check-input" type="radio" name="medication" value="No">&emsp;&emsp;
                </label>
                <label>Do you take any medication?</label>
            </div>

        <h4>Consent and Signature</h4>
            <div class="form-group">
                <p> I want to donate blood voluntarily and will not be entitled to claim any exchange for my donation. I guarantee that all the provided information is true. <br>
                    I understand the questions, which are for my protection as well as to protect the recipient of my blood. <br><br>
                    
                    Blood Bank Management System Requirements for males that want to donate blood: <br>

                    - Be healthy and feeling well <br>
                    - Be at least 17 years old in most states <br>
                    - Be at least 5'1" <br>
                    - Weigh at least 130 lbs. <br><br> 

                    Blood Bank Management System Requirements for females that want to donate blood:<br>

                    - Be healthy and feeling well <br>
                    - Be at least 17 years old in most states <br>
                    - Be at least 5'5" <br>
                    - Weight at least 150 lbs. <br>
                </p>
            </div>

            <div class="row">
                <div class="form-check">
                    <p><input class="form-check-input" type="checkbox" name="consent"/>
                    I have read the requirements. I am eligible to donate blood.</p>
                </div>
            </div><br>

            <div class="row">
                <div class="col">
                    <a href="dd.html" class="btn btn-secondary">Cancel</a>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        
</body>
</html>