<div id="othleft-sidebar">
                    
                    <?php
			function t($message, $category = 'cms', $params = array(), $source = null, $language = null) 
{
    return $message;
}

			$this->widget('zii.widgets.CMenu',array(
			'encodeLabel'=>false,
			'activateItems'=>true,
			'activeCssClass'=>'list_active',
			'items'=>array(
					array('label'=>''.t('Students List<span>Manage your Dashboard</span>'), 'url'=>array('students/manage') ,'linkOptions'=>array('class'=>'menu_0'),
                                   'active'=> ((Yii::app()->controller->id=='students') && (in_array(Yii::app()->controller->action->id,array('manage')))) ? true : false
					    ),                               
					array('label'=>''.t('Create New Student<span>Manage your Dashboard</span>'),  'url'=>array('students/create') ,'linkOptions'=>array('class'=>'menu_1' ), 'itemOptions'=>array('id'=>'menu_1') 
					       ),
					array('label'=>''.t('Manage Guardians<span>Manage your Dashboard</span>'), 'url'=>'javascript:void(0);','linkOptions'=>array('id'=>'menu_2','class'=>'menu_2'),  'itemOptions'=>array('id'=>'menu_2'),
					       'items'=>array(
						array('label'=>t('List Guardians'), 'url'=>array('guardians/admin'),'active'=> ((Yii::app()->controller->id=='guardians') && (in_array(Yii::app()->controller->action->id,array('update','view','admin','index'))) ? true : false)              ),
						
						/*array('label'=>t('Create New Guardian'), 'url'=>'#',
							'active'=> ((Yii::app()->controller->id=='guardians') && (in_array(Yii::app()->controller->action->id,array('update','view','admin','index'))) ? true : false)                                                                                           
						      ),
							  array('label'=>t('Associate Guardian'), 'url'=>'#',
							'active'=> ((Yii::app()->controller->id=='guardians') && (in_array(Yii::app()->controller->action->id,array('update','view','admin','index'))) ? true : false)                                                                                           
						      ),*/
						                                                                                    
					    
					    ),
					       
					    ),
					/*array('label'=>''.t('Attendance Management<span>Manage your Dashboard</span>'), 'url'=>'javascript:void(0);','linkOptions'=>array('id'=>'menu_3','class'=>'menu_3'), 'itemOptions'=>array('id'=>'menu_3'),
					       'items'=>array(
						array('label'=>t('Attendance Register'), 'url'=>'#'),
						array('label'=>t('Attendance Report'), 'url'=>'#',
								'active'=> ((Yii::app()->controller->id=='bemenu') && (in_array(Yii::app()->controller->action->id,array('update','view','admin','index'))) ? true : false)),
						
						
					    )),*/
						
						array('label'=>''.t('Students Settings<span>Manage your Dashboard</span>'), 'url'=>'javascript:void(0);','linkOptions'=>array('id'=>'menu_5','class'=>'menu_5'), 'itemOptions'=>array('id'=>'menu_5'), 
					       'items'=>array(
						array('label'=>t('Manage Student Category'), 'url'=>array('/students/studentCategory'),'active'=>Yii::app()->controller->id=='studentCategory' ? true : false),
						//array('label'=>t('Manage Additional Fields'), 'url'=>'#','active'=>Yii::app()->controller->id=='studentCategories' ? true : false),
						
						
						//array('label'=>'Like/Rating', 'url'=>array('/like/admin')),
						//array('label'=>'Survey', 'url'=>array('/survey/admin')),
						     
						
					    )),
					
					
				),
			)); ?>
		
		</div>
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

