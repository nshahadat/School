<?php
include "includes/header.php";
include "includes/navbar.php";
include "includes/dbconfig.php";
?>
<div class="control-notice-container">
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
    <?php
        $fetch = "SELECT * FROM $notice";
        $insert = $mysqli->query($fetch);
    ?>
    <?php while ($data = $insert-> fetch_assoc()){
    ?>
        <tr>
            <td class="uploaded_notices"><?php echo $data['pdf_file_name'];?></td>
            <td>
                <form method="POST">
                <input type="submit" value="Delete" class="delete-button" name="delete"/>
                <input type="hidden" name="d_value" value="<?php echo $data['pdf_file_name'] ?>">
                </form>
            </td>
        </tr>
        <tr>
        </tr><?php } ?> 
    </table>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $name = $_FILES['file']['name'];
    $file_tmp  = $_FILES['file']['tmp_name'];
    $file_dir = 'uploads/' . $name;

    move_uploaded_file($file_tmp, "uploads/" . $name);

    $sql = "INSERT INTO $notice (pdf_file_name, file_dir) VALUES ('$name','$file_dir' )";

    $mysqli->query($sql) or die($mysqli->error);
    echo "<script>alert('Notice uploaded succesfully')</script>";

    // header("Location: admin-c-notice.php");
}
if (isset($_POST['delete'])) {
    $info = $_POST['d_value'];
    $sqlDelete = "DELETE FROM $notice WHERE pdf_file_name = '$info'";

    if ($mysqli->query($sqlDelete)) {
        echo "<script>alert('Notice deleted succesfully')</script>";
    }
    else {
        echo "Failed";
    }
}
?>
<?php
include "includes/footer.php";
?>