<?php

include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $height = $_POST['height'];

    $result = mysqli_query($mysqli,
    "UPDATE users SET
    name='$name',
    email='$email',
    mobile='$mobile',
    age='$age',
    address='$address',
    height='$height'
    WHERE id=$id");

    header("Location: index.php");
}

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
    $age = $user_data['age'];
    $address = $user_data['address'];
    $height = $user_data['height'];
}
?>

<html>
<head>
    <title>Edit User</title>
</head>

<body>

<a href="index.php">Home</a>
<br/><br/>

<form name="update_user" method="post" action="edit.php">

<table border="0">

<tr>
    <td>Name</td>
    <td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?php echo $email;?>"></td>
</tr>

<tr>
    <td>Mobile</td>
    <td><input type="text" name="mobile" value="<?php echo $mobile;?>"></td>
</tr>

<tr>
    <td>Age</td>
    <td><input type="number" name="age" value="<?php echo $age;?>"></td>
</tr>

<tr>
    <td>Address</td>
    <td><input type="text" name="address" value="<?php echo $address;?>"></td>
</tr>

<tr>
    <td>Height</td>
    <td><input type="text" name="height" value="<?php echo $height;?>"></td>
</tr>

<tr>
    <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
    <td><input type="submit" name="update" value="Update"></td>
</tr>

</table>
</form>

</body>
</html>