<?php
include "includes/header.php";
include "includes/navbar.php";
?><div class="admin-container">
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
include "includes/footer.php";
?>