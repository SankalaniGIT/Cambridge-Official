<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td width="247" valign="top">
     <?php $this->renderPartial('/batches/left_side');?>
    </td>
    <td valign="top">
<div class="emp_right" style="padding-bottom:250px;">
    <!--<div class="searchbx_area">
    <div class="searchbx_cntnt">
    	<ul>
        <li><a href="#"><img src="images/search_icon.png" width="46" height="43" /></a></li>
        <li><input class="textfieldcntnt"  name="" type="text" /></li>
        </ul>
    </div>
    
    </div>-->
    
    
        
    <!--<div class="edit_bttns">
    <ul>
    <li>
    <a href="#" class=" edit last">Edit</a>    </li>
    </ul>
    </div>-->
    
    
    <div class="clear"></div>
    <div class="emp_right_contner">
    <div class="emp_tabwrapper">
    <?php $this->renderPartial('/batches/tab');?>
    
    <div class="clear"></div>
    <div class="emp_cntntbx" style="padding-top:10px;">
    
    <div class="setbx_con">
    	<div class="setbx">
    	<div class="setbx_top">
    	<h1>General Settings</h1>
    	</div>
    	<div class="setbx_bot">
    		<ul>
    			<?php /*?><li><a class="icon1" href="#">Add Batch Admins<span>Admins &amp; Class Teachers</span></a></li>
    			<li><a class="icon2" href="#">Add New Event<span>Admins &amp; Class Teachers</span></a></li><?php */?>
    			<li>
                <?php echo CHtml::link('Promote Batch<span>Admins &amp; Class Teachers</span>', array('batches/promote','id'=>$_REQUEST['id']),array('id'=>'add_exam-groups','class'=>'icon3')) ?></li>
                <?php /*?><li><a class="icon4" href="#">Copy Batch Settings<span>Admins &amp; Class Teachers</span></a></li><?php */?>
    		</ul>
    	</div>
    	<div class="clear"></div>
    	</div>
    <div class="clear"></div>
    	<div class="setbx">
    	<div class="setbx_top">
    	<h1>Subject Settings</h1>
    	</div>
    	<div class="setbx_bot">
   			<ul>
    			<li><?php echo CHtml::link('Add a Default Subject<span>Admins &amp; Class Teachers</span>', array('/courses/defaultsubjects','id'=>$_REQUEST['id']),array('id'=>'add_exam-groups','class'=>'icon5')) ?></li>
    			<li><?php echo CHtml::link('Add Subject to Batch<span>Admins &amp; Class Teachers</span>', array('/courses/subject','id'=>$_REQUEST['id']),array('id'=>'add_exam-groups','class'=>'icon6')) ?></li>
    			<?php /*?><li><a class="icon7" href="#">Associate Subject to Employee<span>Admins &amp; Class Teachers</span></a></li><?php */?>
    		</ul>
    	</div>
    	<div class="clear"></div>
    	</div>
        <div class="clear"></div>
        <div class="setbx">
    	<div class="setbx_top">
    	<h1>Assessments Settings</h1>
    	</div>
    	<div class="setbx_bot">
    		<ul>
    			<li>
                <?php echo CHtml::link('New Examination<span>Admins &amp; Class Teachers</span>', array('/courses/exam','id'=>$_REQUEST['id']),array('id'=>'add_exam-groups','class'=>'icon40')) ?>
                
                </li>
    			<li><?php echo CHtml::link('New Grading Level<span>Timetable &amp; Attendance</span>', array('/courses/gradingLevels','id'=>$_REQUEST['id']),array('class'=>'icon9'));?></li>
    			<li><?php echo CHtml::link('Set Default Grading Levels<span>Admins &amp; Class Teachers</span>', array('/courses/gradingLevels/default','id'=>$_REQUEST['id']),array('class'=>'icon10','confirm'=>'Are You Sure? All custom settings will be deleted.'));?></li>
                <li><?php echo CHtml::link('Manage Exam Score<span>Admins &amp; Class Teachers</span>', array('/courses/exam','id'=>$_REQUEST['id']),array('id'=>'add_exam-groups','class'=>'icon11')) ?></li>
               <?php /*?> <li><a class="icon12" href="#">Generate Report Cards<span>Admins &amp; Class Teachers</span></a></li><?php */?>
    		</ul>
    	</div>
    	<div class="clear"></div>
    	</div>
        <div class="clear"></div>
        <div class="setbx">
    	<div class="setbx_top">
    	<h1>Time Table or Attendance Settings</h1>
    	</div>
    	<div class="setbx_bot">
    		<ul>
    			<li>
                <?php echo CHtml::link('Set Week Days<span>Timetable &amp; Attendance</span>', array('/courses/weekdays','id'=>$_REQUEST['id']),array('class'=>'icon13'));?>
                </li>
    			<li>
                <?php echo CHtml::link('Set Class Timings<span>ClassTimings &amp; TimeTable</span>', array('/courses/classTiming','id'=>$_REQUEST['id']),array('class'=>'icon14'));?>
    			<li>
                <?php echo CHtml::link('View Timetable<span>View/Publish Timetable</span>', array('/courses/weekdays/timetable','id'=>$_REQUEST['id']),array('class'=>'icon15'));?>
                </li>
                <li>
				<?php echo CHtml::link('Attendance Register<span>Mark Attendance</span>', array('/courses/studentAttentance','id'=>$_REQUEST['id']),array('class'=>'icon16'));?>
                </li>
                <li>
                <?php echo CHtml::link('Attendance Report<span>Mark Attendance</span>', array('/courses/studentAttentance','id'=>$_REQUEST['id']),array('class'=>'icon17'));?>
                </li>
                <li>
                <?php echo CHtml::link('Mark Attendance<span>Mark Attendance</span>', array('/courses/studentAttentance','id'=>$_REQUEST['id']),array('class'=>'icon18'));?>
                </li>
    		</ul>
    	</div>
    	<div class="clear"></div>
    	</div>
    <div class="clear"></div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
</td>
</tr>
</tbody
></table>
<script>
//CREATE EXAM

    $('#add_exam-groups').bind('click', function() {
        $.ajax({
            type: "POST",
            url: "<?php echo Yii::app()->request->baseUrl;?>/index.php?r=courses/exam/returnForm",
            data:{"batch_id":<?php echo $_GET['id'];?>,"YII_CSRF_TOKEN":"<?php echo Yii::app()->request->csrfToken;?>"},
                beforeSend : function() {
                    $("#exam-groups-grid").addClass("ajax-sending");
                },
                complete : function() {
                    $("#exam-groups-grid").removeClass("ajax-sending");
                },
            success: function(data) {
                $.fancybox(data,
                        {    "transitionIn"      : "elastic",
                            "transitionOut"   : "elastic",
                            "speedIn"                : 600,
                            "speedOut"            : 200,
                            "overlayShow"     : false,
                            "hideOnContentClick": false,
                            "afterClose":    function() {
                                   var page=$("li.selected  > a").text();
                                $.fn.yiiGridView.update('exam-groups-grid', {url:'<?php echo Yii::app()->request->getUrl()?>',data:{"ExamGroups_page":page}});
                            } //onclosed function
                        });//fancybox
            } //success
        });//ajax
        return false;
    });//bind


})//document ready
    
</script>

