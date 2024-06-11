<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/main.css" rel="stylesheet">
    <title>Registration</title>
</head>
<body>
    <div class="welcom-page-container">
        <div class="registration-container">
            <div>
                <h3 class="registration-title">Registration</h3>
            </div>
            <form class="form-container" action="/addMember" method="POST">
                @csrf
                <div class="input-wrapper">
                    <label for="firstName">First Name</label>
                    <input name="firstName" placeholder="Enter First Name">
                </div>
                <div class="input-wrapper">
                    <label for="lastName">Last Name</label>
                    <input name="lastName" type="text" placeholder="Enter Last Name">
                </div>
                <div class="input-wrapper">
                    <label for="middleName">Middle Name</label>
                    <input name="middleName" type="text" placeholder="Enter Middle Name">
                </div>
                <div class="input-wrapper">
                    <label for="address">Address</label>
                    <input name="address" type="text" placeholder="Enter Address">
                </div>
                <div class="input-wrapper">
                    <label for="email">Email</label>
                    <input name="email" type="email" placeholder="Enter Email">
                </div>
                <div class="input-wrapper">
                    <label for="contactNum">Contact no.</label>
                    <input name="contactNum" type="number" placeholder="Enter Contact No.">
                </div>
                <button class="register-button">Register</button>
            </form>
        </div>
    </div>
</body>
</html>