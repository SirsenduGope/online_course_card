<?php define('PAGE_TITLE', 'STAFF') ?>
<?php require_once("inc/template/header.php") ?>


<?php require_once("inc/template/sidebar.php") ?>

<section class="main-content">
	<?php 
		$pages = array(
			'student_register','faculty_register','faculty_subject','subject_register','course_register','profile','fees','settings','student_details','other_dept_softcore'
		);

		$page = "";

		if(isset($_GET['page']) && !empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		if($page != "" && in_array($page, $pages)) {
			require_once("inc/staff/".$page.".php");
		} else {
			require_once("inc/staff/profile.php");
		}
	?>
</section>

<?php require_once("inc/template/footer.php") ?>