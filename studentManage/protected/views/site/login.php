<?php
/**
-------------------------
GNU GPL COPYRIGHT NOTICES
-------------------------
This file is part of Open-School.

Open-School is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Open-School is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Open-School.  If not, see <http://www.gnu.org/licenses/>.*/

/**
 * $Id$
 *
 * @author Open-School team <contact@Open-School.org>
 * @link http://www.Open-School.org/
 * @copyright Copyright &copy; 2009-2012 wiwo inc.
 * @Matthew George,@Rajith Ramachandran,@Arun Kumar,
 * @Anupama,@Laijesh V Kumar.
 * @license http://www.Open-School.org/
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" />
    <script type="text/javascript">
  function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
 }
</script>
</head>
<body>
<div class="loginimg"></div>
<div class="loginboxWrapper">
<div class="loginbox">
<!--<div class="sample_logo"></div>-->
<div class="sample_logo">
<?php

$img=Logo::model()->findAll();
if(count($img)!=0)
{
	foreach($img as $img_1)
	{
//echo '<img class="imgbrder" src="'.$this->createUrl('Configurations/DisplaySavedImage&id='.$img_1->primaryKey).'" alt="'.$img_1->photo_file_name.'" width="200" />'; 
	}
}
?>
</div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-content',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" height="15"><p>
        <?php echo $form->textField($model,'username',array('class'=>'text-input','onblur'=>'clearText(this)','onfocus'=>'clearText(this)','value'=>'Username')); ?></p></td>
    <td><i><?php echo $form->error($model,'username'); ?></i></td>
  </tr>
  <tr>
    <td><p><?php echo $form->passwordField($model,'password',array('class'=>'text-input','onblur'=>'clearText(this)','onfocus'=>'clearText(this)','value'=>'Password')); ?></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="2">
    <p ><i><?php echo $form->error($model,'password'); ?></i></p>
    </td>
  </tr>
  <tr>
    <td><?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
        <?php echo $form->error($model,'rememberMe'); ?></td>
    <td>&nbsp;</td>
  </tr>
  
</table>
<br /> 
	<div class="row buttons">
		 <?php echo CHtml::submitButton('Login',array('id'=>'login-content-button','class'=>'loginbut')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div>
</body>
</html>