<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="assets/ckeditor/adapters/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
	var config =
	    {
		height: 300,
		width : '100%',
		resize_enabled : false,
		toolbar :

		[

		['Bold','Italic','Underline','Strike','-','Subscript','Superscript','-','SelectAll','RemoveFormat'],

		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],

		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],

	/*	['BidiLtr', 'BidiRtl'],

		['Link','Unlink','Anchor'],

		['Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe','-','Save','NewPage','Preview','-','Templates','-','Cut','Copy','Paste','PasteText','PasteFromWord'],

		'/',

		['Undo','Redo','-','Find','Replace','-','Styles','Format','Font','FontSize'],

		['TextColor','BGColor'],*/

		]

	};
        //Set for the CKEditor
		$('#Message_body').ckeditor(config);

    });
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
     <?php $this->renderPartial(Yii::app()->getModule('message')->viewPath . '/left_side');?>
    
    </td>
    <td valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" width="100%"><div style="padding-left:20px;">
<h1>Compose New Message</h1>
<div class="clear"></div>
  
  <div class="formCon" style="width:100%">

<div class="formConInner">
                            <?php $form = $this->beginWidget('CActiveForm', array(
                                'id'=>'message-form',
                                'enableAjaxValidation'=>false,
                            )); ?>
                        
                            <p class="note"><?php echo MessageModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
                        
                          <?php echo $form->errorSummary($model); ?>
                        
                            <div class="row">
                                <?php echo $form->labelEx($model,'receiver_id'); ?>
                                <?php echo CHtml::textField('receiver', $receiverName,array('size'=>60,'maxlength'=>255)) ?>
                                <?php echo $form->hiddenField($model,'receiver_id'); ?>
                                <?php echo $form->error($model,'receiver_id'); ?>
                            </div>
                        
                            <div class="row">
                                <?php echo $form->labelEx($model,'subject'); ?>
                                <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>255)); ?>
                                <?php echo $form->error($model,'subject'); ?>
                            </div>
                        
                            <div class="row">
                                <?php echo $form->labelEx($model,'Message'); ?>
                                <?php echo $form->textArea($model,'body',array('class'=>'txtarea')); ?>
                                <?php echo $form->error($model,'body'); ?>
                            </div>
                        
                            <div style="margin:10px 0 0 0px">
                                <?php echo CHtml::submitButton(MessageModule::t("Send"),array('class'=>'formbut')); ?>
                            </div>
                        
                            <?php $this->endWidget(); ?>
                        
                        </div>
                        
                        <?php $this->renderPartial(Yii::app()->getModule('message')->viewPath . '/_suggest'); ?>

              </div>
 	</div></td>
        <td valign="top" width="25%"><div class="dashSide">
        	<!--<ul>
            	<li><?php echo CHtml::link('New Employee',array('create'),array('class'=>'ico1')) ?></li>
                <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><?php echo CHtml::link('List Employees',array('manage'),array('class'=>'ico4')) ?></li>
                <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><a href="#" class="ico8">Leave</a></li>
                <li><a href="#" class="ico3">Attendance</a></li>
                <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><a href="#" class="ico6">Categories</a></li>
                 <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><a href="#" class="ico9">Positions</a></li>
                 <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><a href="#" class="ico10">Subjects</a></li>
                 
                 <li><a href="#" class="ico7">Settings</a></li>
            </ul>-->
         <div class="clear"></div>
        </div></td>
      </tr>
    </table>
    </td>
  </tr>
</table>