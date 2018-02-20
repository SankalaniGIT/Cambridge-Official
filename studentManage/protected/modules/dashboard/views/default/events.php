<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <div id="othleft-sidebar">
                    
                    <?php
					function t($message, $category = 'cms', $params = array(), $source = null, $language = null) 
{
    return Yii::t($category, $message, $params, $source, $language);
}
			$this->widget('zii.widgets.CMenu',array(
			'encodeLabel'=>false,
			'activateItems'=>true,
			'activeCssClass'=>'list_active',
			'items'=>array(
			// The MailBox Link
			array('label'=>''.t('MailBox (' . Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) . ')<span>Send / Receive Messages</span>'), 'url'=>'javascript:void(0);','linkOptions'=>array('id'=>'menu_3','class'=>'menu_3'), 'itemOptions'=>array('id'=>'menu_1'),
					       'items'=>array(
						array('label'=>t('Inbox ('.Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()).')'), 'url'=>array('/message/inbox'),
								'active'=> ((Yii::app()->controller->module->id=='message') ? true : false)),
								array('label'=>t('New Message'), 'url'=>array('/message/compose'),
								'active'=> ((Yii::app()->controller->module->id=='message') ? true : false)),
								array('label'=>t('Sent Items'), 'url'=>array('/message/sent/sent'),
								'active'=> ((Yii::app()->controller->module->id=='message') ? true : false)),
					    )),
			//The Events Link
			array('label'=>''.t('Events<span>Your Calendar and Schedules</span>'), 'url'=>'javascript:void(0);','linkOptions'=>array('id'=>'menu_3','class'=>'menu_3'), 'itemOptions'=>array('id'=>'menu_2'),
					       'items'=>array(
						array('label'=>t('Calander'), 'url'=>array('/cal/'),
								'active'=> ((Yii::app()->controller->module->id=='cal') ? true : false)),
								array('label'=>t('Events List'), 'url'=>array('/dashboard/default/events'),
								'active'=> ((Yii::app()->controller->module->id=='dashboard') ? true : false)),
					    )),
				),
			)); ?>
		
		</div>
    
    </td>
    <td valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" width="75%">
          
          <div style="padding-left:20px;">
  <h1>Events list</h1>
  <div class="events_con" style="width:97%; padding-top:10px">
  <table width="100%" cellspacing="0" cellpadding="0">
  <tbody>
  <?php $events = Events::model()->findAll();
if(!$events){?>
    <div style="padding:10px 0px 30px 20px">
  <div class="yellow_bx" style="background-image:none;width:680px;padding-bottom:45px;">
    
    <div class="y_bx_head" style="width:650px;">
      No Upcoming Events
      </div>                    
    </div>
      
      </div>
  <?php } ?><?php 		
foreach($events as $event)
{
?>	
  <tr class="read">
  <td width="5%" valign="top">
  <?php
if($event->type == 1)
echo '<div class="stripbx yellowstrip">'.date("d", $event->start).'<span>'.date("M", $event->start).'</span></div>';
if($event->type == 2)
echo '<div class="stripbx redstrip">'.date("d", $event->start).'<span>'.date("M", $event->start).'</span></div>';
if($event->type == 3)
echo '<div class="stripbx bluestrip">'.date("d", $event->start).'<span>'.date("M", $event->start).'</span></div>';
if($event->type == 4)
echo '<div class="stripbx greenstrip">'.date("d", $event->start).'<span>'.date("M", $event->start).'</span></div>';
?>
  <!--<div class="stripbx yellowstrip">28<span>sep</span></div>
<div class="stripbx redstrip">28<span>sep</span></div>
<div class="stripbx bluestrip">28<span>sep</span></div>
<div class="stripbx greenstrip">28<span>sep</span></div>  -->
  </td>
  <td align="left">
  <div class="hdng_events"><?php echo $event->title; ?></div>
  <div style="width:580px;"><a href="#"><?php echo $event->desc; ?></a></div>
  <td align="left" class="date"><span class="date"><?php echo date("Y-M-d H:i:s", $event->start);?></span></td>
  </tr>
  <?php
} ?>
  </tbody></table></div>
</div></td>
        </tr>
    </table>
    </td>
  </tr>
</table>

        <script type="text/javascript">

	$(document).ready(function () {
            //Hide the second level menu
            $('#othleft-sidebar ul li ul').hide();            
            //Show the second level menu if an item inside it active
            $('li.list_active').parent("ul").show();
            
            $('#othleft-sidebar').children('ul').children('li').children('a').click(function () {                    
                
                 if($(this).parent().children('ul').length>0){                  
                    $(this).parent().children('ul').toggle();    
                 }
                 
            });
          
            
        });
    </script>
    <br />
<br />
<br />


