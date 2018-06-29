<?php
//print session_id(); exit();

/* @var $this EventController */
/* @var $model Event */
if(isset($_GET['st']) && !empty($_GET['st'])){
$event_status=$_GET['st'];

?>
  
	<div id="shop">
		<!-- PAGE TITLE -->
		<header id="page-title">
			<div class="container">
				<h1>Events</h1>
				<?php 
					echo'
					<ul class="breadcrumb">
						<li>'.CHtml::link('Home', array('/site/index'), array("class"=>"")).'</li>';
							if($event_status==1){
								echo '<li class="active">On Sale Events</li>';
							}elseif($event_status==2){
								echo '<li class="active">Upcoming Events</li>';
							}elseif($event_status==3){
								echo '<li class="active">Past Events</li>';
							}else{
								echo  '<li class="active">No Events</li>';
							}
							
							
					echo'</ul>';

				?>
			</div>
		</header>


		<section class="container">
			<div class="row">
				<?php
					if($event_status==1){
						echo Event::getOngoingEvents();
					}elseif($event_status==2){
						echo Event::getUpcomingEvents();
					}elseif($event_status==3){
						echo Event::getPastEvents();
					}else{
						echo  'Thank You for Browsing this page! But You have to come here by selecting a Event Menu.';
					}
				?>			
				

				
			</div>
		</section>
	</div>

<?php  

} else {
    $this->redirect(array('site/error'));
}
 
 ?>					