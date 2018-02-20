<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <?php $this->renderPartial('//courses/left_side');?>
    
    </td>
    <td valign="top">
    <div class="cont_right">
			<?php
            if(isset($_REQUEST['id']))
            {
            $posts=Batches::model()->findAll("course_id=:x", array(':x'=>$_REQUEST['id']));
            ?>
                <table>
                    <?php
                        foreach($posts as $posts_1)
                        {
                            echo '<tr>';
                            echo '<td>'.CHtml::link($posts_1->name, array('#')).'</td>';
                            echo '<td>'.CHtml::link('Edit', array('#')).'</td>';
                            echo '<td>'.CHtml::link('Delete', array('#')).'</td>';
                            echo '</tr>';
                        }
                        ?>
                </table>
            <?php    	
            }
            ?>

 	</div>
    </td>
  </tr>
</table>