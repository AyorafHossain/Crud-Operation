<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">

            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>

            <tr>
                <td>Age</td>
                <td><input type="number" name="age"></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>

            <tr>
                <td>Height</td>
                <td><input type="text" name="height"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>

        </table>
    </form>

<?php

if(isset($_POST['Submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $height = $_POST['height'];

    include_once("config.php");

    $result = mysqli_query($mysqli,
    "INSERT INTO users(name,email,mobile,age,address,height)
    VALUES('$name','$email','$mobile','$age','$address','$height')");

    echo "User added successfully.";
}
?>

</body>
</html>