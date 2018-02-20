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
					array('label'=>''.t('List Employees<span>Manage your Employees</span>'), 'url'=>array('employees/manage') ,'linkOptions'=>array('class'=>'menu_0'),
                                   'active'=> ((Yii::app()->controller->id=='besite') && (in_array(Yii::app()->controller->action->id,array('index')))) ? true : false
					    ),                               
					array('label'=>''.t('Create Employee<span>Manage your Dashboard</span>'),  'url'=>array('employees/create'),'linkOptions'=>array('class'=>'menu_1' ), 'itemOptions'=>array('id'=>'menu_1') 
					       ),
					array('label'=>''.t('Employee Leave Management<span>Manage your Dashboard</span>'), 'url'=>'javascript:void(0);','linkOptions'=>array('id'=>'menu_2','class'=>'menu_2'),  'itemOptions'=>array('id'=>'menu_2'),
					       'items'=>array(
						array('label'=>t('Add Leave Type'), 'url'=>array('/employees/employeeLeaveTypes')),
						
					                                                                         
					    
					    ),
					       
					    ),
					array('label'=>''.t('Attendance Management<span>Manage your Dashboard</span>'), 'url'=>'javascript:void(0);','linkOptions'=>array('id'=>'menu_3','class'=>'menu_3'), 'itemOptions'=>array('id'=>'menu_3'),
					       'items'=>array(
						array('label'=>t('Attendance Register'), 'url'=>array('/employees/employeeAttendances'),'active'=>Yii::app()->controller->id=='employeeAttendances' ? true : false),
						
						
					    )),
						array('label'=>''.t('Employee Settings<span>Manage your Dashboard</span>'), 'url'=>'javascript:void(0);','linkOptions'=>array('id'=>'menu_5','class'=>'menu_5'), 'itemOptions'=>array('id'=>'menu_5'), 
					       'items'=>array(
						array('label'=>t('Subject Association'), 'url'=>array('employeesSubjects/create'),'active'=>Yii::app()->controller->id=='employeesSubjects' ? true : false),
						array('label'=>t('Manage Category'), 'url'=>array('employeeCategories/admin'),'active'=>Yii::app()->controller->id=='employeeCategories' ? true : false),
						array('label'=>t('Manage Department'), 'url'=>array('employeeDepartments/admin'),'active'=>Yii::app()->controller->id=='employeeDepartments' ? true : false),
						
						array('label'=>t('Manage Positions'), 'url'=>array('employeePositions/admin'),'active'=>Yii::app()->controller->id=='employeePositions' ? true : false),  
						array('label'=>t('Manage Grades'), 'url'=>array('employeeGrades/admin'),'active'=>Yii::app()->controller->id=='employeeGrades' ? true : false),  
						
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