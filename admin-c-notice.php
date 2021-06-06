<?php
include "includes/header.php";
include "includes/navbar.php";
?><div class="control-notice-container">
    <p class="notice-header1"> Upload Your Notices Here-</p>
    <form action="post">
    <input type="file" value="Upload" class="notice-upload"name="upload" accept="application/pdf, application/vnd.ms-excel" />
    </form>
    <p class="notice-header2"> Your Uploaded Notices</p>
    <form action="post">
    <table class="notice-table">
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
include "includes/footer.php";
?>