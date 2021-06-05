<?php
include "includes/header.php";
include "includes/navbar.php";
include "includes/dbconfig.php";
?>
<div class="admin-container">
    <p class="admin-header"> Admin Login</p>
    <div class="loginbox">
        <form class="login" method="POST">
            <input type="text" placeholder="Username"name="uname" class="uname" />
            <input type="password" placeholder="Password"name="pass" class="upass"/>
            <input type="submit" value="Sign In" class="admin-button"name="submit" class="button" />
        </form>
    </div>
</div>    

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $pwd = $_POST['pass'];

    $sql = "SELECT * FROM $table WHERE name = '$name' AND pwd = '$pwd'";

    $result  = mysqli_query($mysqli, $sql) or die(mysqli_error());
    $numrows = mysqli_num_rows($result);

    if ($numrows == 0) {
        echo "<script>alert('Wrong username or password')</script>";
    } else {
        header("Location: depts.php");
    }
}
?>
<?php
include "includes/footer.php";
?>