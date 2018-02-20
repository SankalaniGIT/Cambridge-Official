<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
     <?php $this->renderPartial(Yii::app()->getModule('message')->viewPath . '/left_side');?>
    
    </td>
    <td valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" width="75%">
        
        <div style="padding-left:20px;">
<h1>Inbox</h1>

	<?php if($messagesAdapter->data!=NULL){?>
<div class="inbox_con" style="width:97%; padding-top:10px">
                        <?php 
						
						if ($messagesAdapter->data): ?>
                            <?php $form = $this->beginWidget('CActiveForm', array(
                                'id'=>'message-delete-form',
                                'enableAjaxValidation'=>false,
                                'action' => $this->createUrl('delete/')
                            )); 
						?>
                       
                            <table  width="100%" cellpadding="0" cellspacing="0">
                                <?php foreach ($messagesAdapter->data as $index => $message): ?>
                                    <tr class="<?php echo $message->is_read ? 'read' : 'unread' ?>">
                                        <td  width="5%" valign="top">
                                           
                                            <?php echo CHtml::checkBox("Message[$index][selected]"); ?>
                                            <?php echo $form->hiddenField($message,"[$index]id"); ?> 
                                        </td>
                                        <td align="left" width="85%">
                                        
                                        <a href="<?php echo $this->createUrl('view/', array('message_id' => $message->id)) ?>"><?php echo $message->subject ?></a>
                                        <br />
                                        <strong>From:</strong> <?php echo $message->getSenderName(); ?></td>
                                        <td align="left" class="date"><span class="date"><?php echo date(Yii::app()->getModule('message')->dateFormat, strtotime($message->created_at)) ?></span></td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                         <div style="margin:10px 0 0px 0px" >
                                <?php echo CHtml::submitButton('',array('class'=>'m-del-but')); ?>
            </div>
                            
                        
                        <?php $this->endWidget(); ?>
                            <?php $this->widget('CLinkPager', array('pages' => $messagesAdapter->getPagination())) ?>
                        <?php endif; ?>
                        <?php }?>
              </div>
 	</div>
    <?php if($messagesAdapter->data==NULL){?>
		<div style="padding:0px 20px">
<div class="yellow_bx" style="background-image:none;width:680px;padding-bottom:45px;">
                
                	<div class="y_bx_head" style="width:650px;">
                    	No Messages To Display.
                    </div>
                    <div class="y_bx_list" style="width:650px;">
                    	<h1><?php echo CHtml::link('Compose New Message',array('/message/compose'),array('class'=>'ico4')) ?></h1>
                    </div>
                    
                </div>

                </div>
		
	<?php }?>
    </td>
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
        </div>        
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>



