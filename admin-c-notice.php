<?php
include "includes/header.php";
include "includes/navbar.php";
include "includes/dbconfig.php";
?><div class="control-notice-container">
    <p class="notice-header1"> Upload Your Notices Here-</p>
    <table class="notice-table1">
        <tr>
            <td class="uploaded_notices">
                <form method="POST" enctype="multipart/form-data">
                <input type="file" class="notice-upload" name="file" accept="application/pdf, application/vnd.ms-excel" />
                <input type="submit" value="submit" class="submit-button" name="submit"/>
                </form>
            </td>
            <td></td>
        </tr>
        <tr>
        </tr>
    </table>
    <p class="notice-header2"> Your Uploaded Notices</p>
    <form method="post">
    <table class="notice-table2">
        <tr>
            <td class="uploaded_notices">First notice uploaded here</td>
            <td><input type="submit" value="Delete" class="delete-button"name="delete"/></td>
        </tr>
        <tr>
        </tr>
    </table>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $name = $_FILES['file']['name'];
    $file_tmp  = $_FILES['file']['tmp_name'];
    $file_dir = 'uploads/' . $name;

    move_uploaded_file($file_tmp, "uploads/" . $name);

    $sql = "INSERT INTO $notice (file_name, file_dir) VALUES ('$name','$file_dir' )";

    $mysqli->query($sql) or die($mysqli->error);
    echo "<script>alert('Notice uploaded succesfully')</script>";
}
?>
<?php
include "includes/footer.php";
?>