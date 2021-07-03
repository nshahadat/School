<?php
include "includes/header.php";
include "includes/navbar.php";
?><div class="control-notice-container">
    <p class="notice-header1"> Upload Your Notices Here-</p>
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
    <p class="notice-header2"> Your Uploaded Notices</p>
    <form method="post">
    <table class="notice-table2">
                       <tr>
                                <td class="uploaded_notices">First notice uploaded here</td>
                                <td><input type="submit" value="Delete" class="delete-button"name="delete"/></td>
                            </tr>
                            <tr> 
                            <td class="uploaded_notices">First notice uploaded here</td>
                                <td><input type="submit" value="Delete" class="delete-button"name="delete"/></td> 
                            </tr>
                            
    </table>
    </form>
</div>
<?php
include "includes/footer.php";
?>