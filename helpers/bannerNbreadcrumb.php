<!-- banner -->
	
<?php

function bannerNbreadCrumb($bread='')
	{


$bg = new DBConnection();

$connection = $bg->connect();

$background = [];

$result_background = mysqli_query($connection, 'SELECT * FROM background WHERE TRUE');

while ($row_bg = mysqli_fetch_assoc($result_background)) {
    $background[] = $row_bg['picture'];
}

$bg->close($connection);
?>

<div class="banner-silder">
	<div 
	class="bannerTop" 
	style='background-size: cover;
	background: url("http://localhost/cmb/<?php echo $background[0]; ?>")'></div>
</div>
 <div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="http://localhost/cmb">Home</a><i>|</i></li>
				<li><?php echo $bread;; ?></li>
			</ul>
		</div>
</div>

<?php
		
	}

?>
