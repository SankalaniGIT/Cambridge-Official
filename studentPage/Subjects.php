<?php

SessionManager::init();
$student = new Student();
$student = SessionManager::getSessionAttribute(SessionConstants::SYSTEM_STUDENT);

if($student == NULL){
	echo "<script>window.location.href='index.php'</script>";
}

$dates = date("Y-m-d G:i:s", time());

$form = FormBuilder::buildFormElements(new StudentForm());
$view = new StudentForm();

$studentDao = new StudentDaoImpl();

$batch = new Batch();
$batchDao = new BatchDaoImpl();

$course = new Course();
$courseDao = new CourseDaoImpl();

$student_category = new Student_Category();
$student_categoryDao = new Student_CategoryDaoImpl();

$countries = new Countries();
$countriesDao = new CountriesDaoImpl();

$guardian = new Guardian();
$guardianDao = new GuardianDaoImpl();

$exams = new Exams();
$examsDao = new ExamsDaoImpl();

$exam_scores = new Exam_Scores();
$exam_scoresDao = new Exam_ScoresDaoImpl();

$exam_groups = new Exam_Groups();
$exam_groupsDao = new Exam_GroupsDaoImpl();

$subject = new Subject();
$subjectDao = new SubjectDaoImpl();


$student_id = $student->getId();
$batch_id = $student->getBatch_id();

?>
<html>
<head>
<link href="css/st_admin_style.css" rel="stylesheet" type="text/css">

<link type="text/css" href="js/ui/themes/base/ui.all.css"
	rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/ui/ui.core.js"></script>
<script type="text/javascript" src="js/ui/ui.sortable.js"></script>
<script type="text/javascript" src="js/ui/ui.tabs.js"></script>


</head>
<body>
<form action="" method="post" name="rng_system_form"
	id="rng_system_form" enctype="multipart/form-data"><input type="hidden"
	name="<?=$form->getId()?>" value="<?=$view->getId()?>" />
<table width="100%" border="0" cellpadding="0" cellspacing="0"
	class="form_tab">
	<tr>
		<th colspan="4">Subjects</th>
	</tr>
	<tr>
		<td colspan="4" style="padding: 0px; height: 15px;"></td>
	</tr>
	<tr>
		<td colspan="4"><?php
		$subject_list = $subjectDao->getUnique_SubjectName_By_Batch_id($batch_id);
		if($subject_list != NULL){

			?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0"
			class="exam_tab">
			<tr>
				<th width="5%" valign="top">#</th>
				<th width="79%" valign="top" style="text-align: left;">Subject Name</th>
				<th width="16%" valign="top" style="text-align: left;">Code</th>
			</tr>
			<?php

			for($x=0;$x<count($subject_list);$x++){
				$subject_Arr = $subject_list[$x];
				$subject_id = $subject_Arr->getId();
				$subject_name = $subject_Arr->getName();
				$subject_code = $subject_Arr->getCode();

				//	echo "<script>alert('$exam_id');</script>";

				?>
			<tr>
				<td valign="top"><?=$x+1 ?>.</td>
				<td valign="top"><?=$subject_name ?></td>
				<td valign="top"><?=$subject_code ?></td>
			</tr>
			<?php
}
?>
		</table>
		<?php
}
?></td>
	</tr>
	<tr>
		<td colspan="4" style="padding: 0px; height: 15px;"></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td align="center">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
</form>
</body>
</html>

<script type="text/javascript">
<!--
function GetDate(){
	var dd = document.getElementById('dd').value;
	var mm = document.getElementById('mm').value;
	var yyyy = document.getElementById('yyyy').value;
		
	document.getElementById('dob').value = yyyy+'-'+mm+'-'+dd;
}
//-->
</script>

