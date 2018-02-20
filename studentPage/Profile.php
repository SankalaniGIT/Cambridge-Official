<?php

SessionManager::init();
//$student = new Student();
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

//$student = new Student();

$student_id = $student->getId();
$admission_no = $student->getAdmission_no();
$admission_date = $student->getAdmission_date();
$class_roll_no = $student->getClass_roll_no();
$batch_id = $student->getBatch_id();



$batch_list = $batchDao->getBatchById_Is_deleted($batch_id);
if($batch_list != NULL){
	$batch_name = $batch_list->getName();
	$course_id = $batch_list->getCourse_id();

	$course_list = $courseDao->getCourseById_Is_deleted($course_id);
	if($course_list != NULL){
		$course_name = $course_list->getCourse_name();
	}
}


$first_name = $student->getFirst_name();
$middle_name = $student->getMiddle_name();
$last_name = $student->getLast_name();
$date_of_birth = $student->getDate_of_birth();
$gender = $student->getGender();
$blood_group = $student->getBlood_group();
$birth_place = $student->getBirth_place();
$nationality_id = $student->getNationality_id(); //

$nationality_list = $countriesDao->getOneCountriesById($nationality_id);
if($nationality_list != NULL){
	$nationality = $nationality_list->getName();
}

$language = $student->getLanguage();
$religion = $student->getReligion();
$student_category_id = $student->getStudent_category_id(); //

$student_category_list = $student_categoryDao->getStudent_CategoryById_Is_deleted($student_category_id);
if($student_category_list != NULL){
	$student_category_name = $student_category_list->getName();
}

$address_line1 = $student->getAddress_line1();
$address_line2 = $student->getAddress_line2();
$city = $student->getCity();
$state = $student->getState();
$pin_code = $student->getPin_code();
$country_id = $student->getCountry_id(); //

$country_list = $countriesDao->getOneCountriesById($country_id);
if($country_list != NULL){
	$country = $country_list->getName();
}

$phone1 = $student->getPhone1();
$phone2 = $student->getPhone2();

$email = $student->getEmail();
$immediate_contact_id = $student->getImmediate_contact_id();


$guardian_list = $guardianDao->getOneGuardianById($student_id);
if($guardian_list != NULL){
	$guardian_first_name = $guardian_list->getFirst_name();
	$guardian_last_name = $guardian_list->getLast_name();
	$guardian_relation = $guardian_list->getRelation();
	$guardian_email = $guardian_list->getEmail();
	$guardian_office_phone1 = $guardian_list->getOffice_phone1();
	$guardian_office_phone2 = $guardian_list->getOffice_phone2();
	$guardian_mobile_phone = $guardian_list->getMobile_phone();
	$guardian_office_address1 = $guardian_list->getOffice_address_line1();
	$guardian_office_address2 = $guardian_list->getOffice_address_line2();
	$guardian_city = $guardian_list->getCity();
	$guardian_state = $guardian_list->getState();
	$guardian_country_id = $guardian_list->getCountry_id();
	$guardian_dob = $guardian_list->getDob();
	$guardian_occupation = $guardian_list->getOccupation();
	$guardian_income = $guardian_list->getIncome();
	$guardian_eduction = $guardian_list->getEducation();

	$guardian_country_list = $countriesDao->getOneCountriesById($guardian_country_id);
	if($guardian_country_list != NULL){
		$guardian_country = $guardian_country_list->getName();
	}

	$guardian_full_name = $guardian_first_name.($guardian_last_name!=""?" ".$guardian_last_name:"");

}

//echo '<script>alert('.$.')</script>';

$is_sms_enabled = $student->getIs_sms_enabled();
$photo_file_name = $student->getPhoto_file_name();
$photo_content_type = $student->getPhoto_content_type();
$photo_data = $student->getPhoto_data();
$status_description = $student->getStatus_description();
$is_active = $student->getIs_active();
$is_deleted = $student->getIs_deleted();
$created_at = $student->getCreated_at();
$updated_at = $student->getUpdated_at();
$has_paid_fees = $student->getHas_paid_fees();
$photo_file_size = $student->getPhoto_file_size();
$user_id = $student->getUser_id();


//echo "<script>alert('$student_id');</script>";

$full_name = $first_name.($middle_name!=""?" ".$middle_name:"").($last_name!=""?" ".$last_name:"");

if($gender == "M") $gender = "Male";
else if($gender == "F") $gender = "Female";
?>
<html>
<head>
<link href="css/st_admin_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="" method="post" name="rng_system_form"
	id="rng_system_form" enctype="multipart/form-data"><input type="hidden"
	name="<?=$form->getId()?>" value="<?=$view->getId()?>" />
<table width="100%" border="0" cellpadding="0" cellspacing="0"
	class="form_tab">
	<tr>
		<th colspan="4">Student Profile</th>
	</tr>
	<tr>
		<td colspan="4" style="padding: 0px; height: 15px;"></td>
	</tr>
	<tr>
		<td colspan="4">
		<fieldset><legend>General Details</legend>
		<table width="100%" border="0" cellpadding="0" cellspacing="0"
			class="field_tab">

			<tr>
				<td valign="top"><label>Course</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$course_name ?></td>
				<td valign="top"><label>Batch</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$batch_name ?></td>
			</tr>
			<tr>
				<td width="12%" valign="top"><label>Admission No.</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td width="36%" valign="top"><?=$admission_no ?></td>
				<td width="15%" valign="top"><label>Admission Date</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td width="31%" valign="top"><?=date("d-F-Y",strtotime($admission_date)) ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Class Roll No.</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$class_roll_no ?></td>
				<td valign="top"><label>Student Category</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=$student_category_name ?></td>
			</tr>
		</table>
		</fieldset>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="padding: 0px; height: 15px;"></td>
	</tr>
	<tr>
		<td colspan="4">
		<fieldset><legend>Personal Details</legend>
		<table width="100%" border="0" cellpadding="0" cellspacing="0"
			class="field_tab">
			<tr>
				<td valign="top"><label>Name</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$full_name ?></td>
				<td valign="top"><label>Gender</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$gender ?></td>
			</tr>
			<tr>
				<td width="12%" valign="top"><label>Date of Birth</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td width="36%" valign="top"><?=($date_of_birth != "" ? date("d-F-Y",strtotime($date_of_birth)) : "") ?></td>
				<td width="15%" valign="top"><label>Birth Place</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td width="31%" valign="top"><?=$birth_place ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Blood group</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$blood_group ?></td>
				<td valign="top"><label>Nationality</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=$nationality ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Language</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$language ?></td>
				<td valign="top"><label>Religion</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=$religion ?></td>
			</tr>
		</table>
		</fieldset>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="padding: 0px; height: 15px;"></td>
	</tr>
	<tr>
		<td colspan="4">
		<fieldset><legend>Contact Details</legend>
		<table width="100%" border="0" cellpadding="0" cellspacing="0"
			class="field_tab">
			<tr>
				<td valign="top"><label>Address line 1</label></td>
				<td align="center" valign="top">:</td>
				<td colspan="4" valign="top"><?=$address_line1 ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Address line 2</label></td>
				<td align="center" valign="top">:</td>
				<td colspan="4" valign="top"><?=$address_line2 ?></td>
			</tr>
			<tr>
				<td width="12%" valign="top"><label>City</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td width="36%" valign="top"><?=$city ?></td>
				<td width="15%" valign="top"><label>State</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td width="31%" valign="top"><?=$state ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Pin Code</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$pin_code ?></td>
				<td valign="top"><label>Country</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=$country ?></td>
			</tr>
			<tr>
				<td colspan="6" class="nohover" style="padding: 0px; height: 10px;"></td>
			</tr>
			<tr>
				<td valign="top"><label>Phone 1</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$phone1 ?></td>
				<td valign="top"><label>Phone 2</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$phone2 ?></td>
			</tr>
			<tr>
				<td valign="top"><label>E-mail</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$email ?></td>
				<td valign="top">&nbsp;</td>
				<td width="3%" align="center" valign="top">&nbsp;</td>
				<td valign="top">&nbsp;</td>
			</tr>
		</table>
		</fieldset>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="padding: 0px; height: 15px;"></td>
	</tr>
	<?
	if($immediate_contact_id != ""){
		?>
	<tr>
		<td colspan="4">
		<fieldset><legend>Guardian Details</legend>
		<table width="100%" border="0" cellpadding="0" cellspacing="0"
			class="field_tab">
			<tr>
				<td valign="top"><label>Name</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_full_name ?></td>
				<td valign="top"><label>Date of Birth</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=($guardian_dob != "" ? date("d-F-Y",strtotime($guardian_dob)) : "") ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Relation</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_relation ?></td>
				<td valign="top"><label>Education</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_eduction ?></td>
			</tr>
			<tr>
				<td width="15%" valign="top"><label>Occupation</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td width="33%" valign="top"><?=$guardian_occupation ?></td>
				<td width="15%" valign="top"><label>Income</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td width="31%" valign="top"><?=$guardian_income ?></td>
			</tr>
			<tr>
				<td colspan="6" class="nohover" style="padding: 0px; height: 10px;"></td>
			</tr>
			<tr>
				<td valign="top"><label>Office Address Line 1</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td colspan="4" valign="top"><?=$guardian_office_address1 ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Office Address Line 2</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td colspan="4" valign="top"><?=$guardian_office_address2 ?></td>
			</tr>
			<tr>
				<td valign="top"><label>City</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_city ?></td>
				<td valign="top"><label>State</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_state ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Country</label></td>
				<td width="3%" align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_country ?></td>
				<td valign="top">&nbsp;</td>
				<td align="center" valign="top">&nbsp;</td>
				<td valign="top">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="6" class="nohover" style="padding: 0px; height: 10px;"></td>
			</tr>
			<tr>
				<td valign="top"><label>Office Phone 1</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_office_phone1 ?></td>
				<td valign="top"><label>Office Phone 2</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_office_phone2; ?></td>
			</tr>
			<tr>
				<td valign="top"><label>Mobile No.</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_mobile_phone;?></td>
				<td valign="top"><label>E-mail</label></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><?=$guardian_email;?></td>
			</tr>
		</table>
		</fieldset>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="padding: 0px; height: 15px;"></td>
	</tr>
	<? } ?>
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

