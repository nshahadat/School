<?php
include "includes/header.php";
include "includes/navbar.php";
include "includes/dbconfig.php";
?>


    <div class="wrapper">
	<div class="image-slider">
		<div class="wrap">
			<div id="arrow-left" class="arrow"></div>
			<div id="slider">
				<div class="slide slide1">
					<div class="slide-content">
						<span></span>
					</div>
				</div>
				<div class="slide slide2">
					<div class="slide-content">
						<span></span>
					</div>
				</div>
				<div class="slide slide3">
					<div class="slide-content">
						<span></span>
					</div>
				</div>
				<div class="slide slide4">
					<div class="slide-content">
						<span></span>
					</div>
				</div>
			</div>
			<div id="arrow-right" class="arrow"></div>
		</div>
	</div>
	<div class="school-name-slogan">
		<marquee>Habiba International School</marquee>
	</div>
	<div class="notice-box">
		<table>
    <?php
        $fetch = "SELECT * FROM $notice";
        $insert = $mysqli->query($fetch);
    ?>
    <?php while ($data = $insert-> fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $data['pdf_file_name'];?></td>
        </tr>
        <tr>
        </tr><?php } ?> 
    </table>
	</div>
	<div class="youtube"></div>
</div>

<?php
include "includes/footer.php";
?>