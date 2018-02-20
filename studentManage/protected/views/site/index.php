<link rel="stylesheet" type="text/css" href="/openschool/css/style.css" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <!--left-col starts Here-->

						 <?php $this->renderPartial('/..//modules/messages/views'.Yii::app()->getModule('message')->viewPath . '/left_side');?>
                            <!--left-col ends Here-->
    
    </td>
    <td valign="top" >
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" width="75%"><div style="padding-left:20px;">
<h1>Website Dashboard</h1>
<div class="overview">
	<div class="overviewbox ovbox1">
    	<h1><strong>Unique Visitors</strong></h1>
        <div class="ovrBtm">1249</div>
    </div>
    <div class="overviewbox ovbox2">
    	<h1><strong>Returning Visitors</strong></h1>
        <div class="ovrBtm">278</div>
    </div>
    <div class="overviewbox ovbox3">
    	<h1><strong>Bounces</strong></h1>
        <div class="ovrBtm">356</div>
    </div>
    <div class="clear"></div>
    
</div>
<div class="clear"></div>
 <div style="margin-top:20px; width:80%;" id="container"></div>
  <div class="pdtab_Con" style="width:97%">
                <div style="font-size:13px; padding:5px 0px"><strong>Recent Employee Admissions</strong></div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr class="pdtab-h">
                      <td align="center" height="18">Date</td>
                      <td align="center"> Browser </td>
                      <td align="center">Visits:</td>
                      <td align="center">Country/Territory</td>
                      <td align="center">New Visits</td>
                      
                    </tr>
                  </tbody>
                    <tbody>
                    <tr>
                    <td align="center">2012-02-13&nbsp;</td>
                    <td align="center">Mozilla</td>
                    <td align="center">2345</td>
                    <td align="center">United States</td>
                    <td align="center">12</td>
                    
                  </tr>
                     
               </tbody>
                <tbody>
                    <tr>
                    <td align="center">2012-04-13&nbsp;</td>
                    <td align="center">Chrome</td>
                    <td align="center">275</td>
                    <td align="center">United States</td>
                    <td align="center">132</td>
                    
                  </tr>
                     
               </tbody>
                <tbody>
                    <tr>
                    <td align="center">2012-04-18&nbsp;</td>
                    <td align="center">Chrome</td>
                    <td align="center">275</td>
                    <td align="center">India</td>
                    <td align="center">132</td>
                    
                  </tr>
                     
               </tbody>
                <tbody>
                    <tr>
                    <td align="center">2012-04-18&nbsp;</td>
                    <td align="center">Chrome</td>
                    <td align="center">275</td>
                    <td align="center">India</td>
                    <td align="center">132</td>
                    
                  </tr>
                     
               </tbody>
                <tbody>
                    <tr>
                    <td align="center">2012-04-18&nbsp;</td>
                    <td align="center">Chrome</td>
                    <td align="center">275</td>
                    <td align="center">India</td>
                    <td align="center">132</td>
                    
                  </tr>
                     
               </tbody>               
                </table>
              </div>
 	</div></td>
        <td valign="top" width="25%"><div class="dashSide">
        	<ul>
            	<li><a href="#" class="ico11">Create Article</a></li>
                <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><a href="#" class="ico3">Create Events</a></li>
                <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><a href="#" class="ico12">Create Newpage</a></li>
                <li><a href="#" class="ico13">Upload File</a></li>
                <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><a href="#" class="ico4">Create Menu</a></li>
                <li class="sptr"><img src="images/line_side.png" width="1" height="130" /></li>
                <li><a href="#" class="ico14">Create Block</a></li>
                 <li><a href="#" class="ico7">Settings</a></li>
            </ul>
         <div class="clear"></div>
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