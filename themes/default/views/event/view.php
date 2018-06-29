<?php
//print session_id(); exit();

/* @var $this EventController */
/* @var $model Event */

//print $model->title; exit();
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->title,
);

?>
  
	<div id="shop">
		<!-- PAGE TITLE -->
		<header id="page-title">
			<div class="container">
				<h1><?php echo $model->title; ?></h1>
				<?php 
					/*
					$this->pageTitle = Yii::t('Events', 'Event Details');
					$this->breadcrumbs = array(
					    Yii::t('Events', 'All Events') => array('site/index'),
					    $model->title,
					);
					*/ 
					echo'
					<ul class="breadcrumb">
						<li>'.CHtml::link('Home', array('/site/index'), array("class"=>"")).'</li>
						<li>'.CHtml::link('Events', array('/event/index'), array("class"=>"")).'</li>
						<li class="active">'.$model->title.'</li>
					</ul>';

				?>
			</div>
		</header>


		<section class="container">
			<div class="row">

				<div class="col-md-12">

					<div class="row">
						<div class="col-md-6 col-sm-4 ">
								<div>
									<img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl;?>/uploads/event_photo/event_cover/C3.jpg" width="100%" alt="">

									<!-- read more button -->
									<a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#myModal" style="margin:20px 0;"><i class="fa fa-sign-out"></i> Want notification about this event?</a>

									<!-- modal dialog -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header"><!-- modal header -->
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title" id="myModalLabel">Event Subscription Form</h4>

												</div><!-- /modal header -->

												<!-- modal body -->
												<div class="modal-body">
 											
	<div class="row">
			<?php $formSub=$this->beginWidget('CActiveForm', array(
				'id'=>'event-subscribe-form',
				'action'=>Yii::app()->createUrl('event/subscribe'),
				'enableAjaxValidation'=>false,
			)); ?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<?php echo $formSub->errorSummary($modelSub); ?>

			<div class="row" style="display:none;">
				<?php echo $formSub->textField($modelSub,'event_id', array('value'=>$model->id)); ?>; ?>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<?php echo $formSub->textField($modelSub,'name',array('placeholder'=>'Full Name','size'=>60,'maxlength'=>200, 'class'=>'form-control')); ?> *
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<?php echo $formSub->textField($modelSub,'email',array('placeholder'=>'Email', 'class'=>'form-control')); ?> *
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<?php echo $formSub->textField($modelSub,'phone',array('placeholder'=>'Phone Number', 'class'=>'form-control')); ?>
				</div>
			</div>
	 		<div class="col-md-12">
				<div class="form-group">
					<label class="block"><?php //echo $formSub->checkBox($model,'agree', array('value'=>1, 'uncheckValue'=>0, 'class'=>'form-control')); ?>I accecpt Terms &amp; Conditions.</label>
				</div>
			</div>
		 
			 
	</div>
				

		<div class="row">
			<div class="col-md-12">
				<div class="form-actions">
				<?php echo CHtml::submitButton($modelSub->isNewRecord ? 'Subscribe' : 'Save', array('class' => 'btn btn-primary btn-mini iframe', 'style' => 'margin-left: 12px; margin-top: 20px; padding: 6px 35px;')); ?>
			</div> 
			</div>
		</div>
	<?php $this->endWidget(); ?>
			</div>
			<!-- /modal body -->

								<div class="modal-footer"><!-- modal footer -->
									<button class="btn btn-default" data-dismiss="modal">Close</button> 
								</div><!-- /modal footer -->

							</div>
						</div>
					</div>
					<?php /* echo '<img alt=""  width="100%" class="img-responsive" src="<?php echo Yii::app()->request->baseUrl;?>/uploads/event_photo/banner/'.$model->event_cover.'">' */ ?>
				</div>
			</div>

						<div class="col-md-3 col-sm-2 ">
							<h2 class="eventTitle"><?php echo $model->title; ?></h2>
							<h4 class="eventOrgTitle">Organized by 
							<?php echo CHtml::link((User::getData($model->client_id, 'first_name')), array('/client/view', 'id'=>$model->client_id), array("class"=>"", "style"=>"font-weight:bold;")) ?>
							 </h4>
								<div>
									<i class="fas fa-map-marker-alt"></i>
									<p><i class="menu-icon fa fa-tachometer"> </i> <?php echo CHtml::link((Gallery::getData($model->venue, 'title')), array('/gallery/view', 'id'=>$model->venue), array("class"=>"")) ?></p>

									<?php 
										$address= Gallery::getData($model->venue, 'address');
										if (!empty($address)){ ?>
											<p><?php echo Gallery::getData($model->venue, 'address'); ?></p>
											<a href="#" data-container="body" data-toggle="popover" data-placement="bottom" 
										data-content="Map Location of Gallery." 
										data-original-title="Location Map" title="A Title">
										  see on map
											</a> 
									<?php } ?>

									<?php /* echo '<img alt=""  width="100%" class="img-responsive" src="<?php echo Yii::app()->request->baseUrl;?>/uploads/event_photo/banner/'.$model->event_cover.'">' */ ?>

									<div class="divider" style="margin:5px;"><!-- divider --></div>
									
									<p style="font-weight:bold; "><i class="fa fa-calendar-o"></i> <?php echo Event::get_date($model->date) .' @ '. $model->time; ?></p>
								</div>
						</div>
						<div class="col-md-3 col-sm-2 ">
							<article class="timeline-item pull-left">

							<div class="item">
								<!-- article title -->
								<div class="item-title">
									<h2><i class="fa fa-info-circle"></i> <a href="">Information</a></h2>
								</div>
								<p>
									<?php echo $model->special_info; ?>

									Praesent augue arcu, ornare ut tincidunt eu, mattis a libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In elit purus, 
									 
								</p>

								<!-- read more button -->
								<a href="#" class="btn btn-xs"  data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-out"></i> READ MORE</a>

								<!-- modal dialog -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header"><!-- modal header -->
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title" id="myModalLabel">Detail information about this event.</h4>

											</div><!-- /modal header -->

											<!-- modal body -->
											<div class="modal-body">
												<p><?php echo $model->details; ?>
												Praesent augue arcu, ornare ut tincidunt eu, mattis a libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In elit purus, ullamcorper vel luctus vitae, venenatis eu odio. Vivamus tincidunt, urna quis consectetur venenatis, quam urna tincidunt mi, quis convallis enim dolor sed elit. Pellentesque ultricies congue lacus, eget elementum erat lobortis et. Sed non velit neque. 
												</p>
											</div>
											<!-- /modal body -->

											<div class="modal-footer"><!-- modal footer -->
												<button class="btn btn-default" data-dismiss="modal">Close</button> <button class="btn btn-primary">Save changes</button>
											</div><!-- /modal footer -->

										</div>
									</div>
								</div>
							</div>

						</article>
						</div>
				</div>
				<div class="divider" style="margin:10px 0;"><!-- divider --></div>
				<div class="row">
				<div class="col-md-6 col-sm-4 ">
							<h2  class="eventTitle" style="text-align:center; text-transform:uppercase">Ticket Categories</h2> 
							<h4 class="eventOrgTitle" style="text-align:center; ">Choose your desire categories tickets</a> </h4>

							<?php include "pricing.php"; ?>
				        	 
						</div>

						<div class="col-md-6 col-sm-4 ">
							<h2>Shop Cart</h2>
					<form class="white-row" method="post" action="#">

						<!-- cart content -->
						<div id="cartContent">

	<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ticket-reservation-parent-grid',
	'dataProvider'=>$model_ticResrv->search_cart($model->id),
	'itemsCssClass' => 'table table-bordered table-striped table-hover',
	//'template' => '{items}{pager}{summary}',
	'template' => '{items}',
	//'filter'=>$model_ticResrv,
	'columns'=>array(

		array(
			'name' => 'ticket_category',
			'type' => 'raw',
			'value' => 'TicketCategory::getData($data->ticket_category, "title")',
			'htmlOptions' => array('style' => "text-align:left; width:150px; padding-left:10px; "),
		),
		array(
			'name' => 'unit_price',
			'type' => 'raw',
			'value' => '$data->unit_price',
			'htmlOptions' => array('style' => "text-align:center; width:150px;"),
		),
		array(
			'name' => 'num_of_ticket',
			'header'=>'Qty.',
			'type' => 'raw',
			'value' => '$data->num_of_ticket',
            //'value' => 'CHTML::textField("num_of_ticket_".$data->id,$data->num_of_ticket,array("class"=>"form-control", "min"=>"1", "max"=>"10", "onchange"=>"updateQty($data->id, this.value, \'qty\')"))',
			'htmlOptions' => array('style' => "text-align:center; width:70px;"),
		),
		array(
			'name' => 'total_price',
			'type' => 'raw',
			'value' => '$data->total_price',
			'htmlOptions' => array('style' => "text-align:center; width:100px;"),
		),

		array(
			'header' => '',
			'class' => 'CButtonColumn',
			'htmlOptions' => array('style' => "text-align:center;width:100px;", 'class' => ''),
			'template' => '{delete}',
			'buttons' => array(
			  'delete' => array(
			  'label' => '',
			  'imageUrl' => '',
			  'url' => 'Yii::app()->createUrl("/event/cartDelete", array("id"=>$data["id"]))',
			  'options' => array('class' => 'btn btn-xs btn-danger fa fa-trash-o' ,'style'=>' '),
			 ),
			),
		)
	),
)); ?>

							<!-- cart total -->
							<div class="total pull-right">
								<span class="totalToPay styleSecondColor">

									TOTAL: $<?php echo TicketReservationParent::getCartTotalPrice(); ?>
								</span>

							</div>
							<!-- /cart total -->


							<!-- update cart -->
							 <?php echo CHtml::link('<span class="btn-label"><i class="fa fa-plus"></i></span>' . Yii::t('Common', 'Checkout'), array('event/checkout', 'uid'=>Yii::app()->user->id, 'sn'=>session_id()), array('class' => 'btn btn-labeled btn-primary')); ?>

							<!-- /update cart -->

							<div class="clearfix"></div>
						</div>
						<!-- /cart content -->

					</form>
						</div>
				</div>
				<div class="col-md-12 col-sm-6 ">
				</div>
				<hr />
					<!-- RELATED -->
					<h2><strong>Related</strong> Events</h2>
					<div class="row">
						<?php
							echo Event::getOngoingEvents();
						?>				

					</div>
					<!-- /RELATED -->

				</div>

				

			</div>

		</section>

	</div>

 <script type="text/javascript">
    function updateQty(id, qty) {
        alert(id+"-"+qty);
        if (id != "" && qty != "")
        {
            $.ajax({
                type: "GET",
                url: "<?php print $this->createUrl('event/updateCart'); ?>",
                data: "id=" + id + "&qty=" + qty,
                cache: false,
                async: false,
                success: function (result) {
                    alert(result);
                    //$('#sample-storage-grid').yiiGridView('update');
                    $("#cartContent").load('<?php echo Yii::app()->getRequest()->getUrl(); ?> #cartContent');
                },
                error: function (result) {
                    alert(result);
                    alert("some error occured. Please try again.");
                }
            });
        }
    }
</script>
