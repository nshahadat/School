<?php
include "includes/header.php";
include "includes/navbar.php";
?>
<div class="control-notice-container">
    <p class="notice-header1"> Upload The Result Here-</p>
    <table class="notice-table1">
                       <tr>
                                <td class="uploaded_notices">
                                    <form method="post">
                                    <input type="file" value="Upload" class="notice-upload"name="upload" accept="application/pdf, application/vnd.ms-excel" />
                                </td>
                                <td><input type="submit" value="submit" class="submit-button"name="submit"/></td>
                                </form>
                        </tr>
                            <tr>  
                            </tr>
    </table>
</div>
<?php
include "includes/footer.php";
?>