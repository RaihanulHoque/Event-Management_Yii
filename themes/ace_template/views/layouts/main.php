<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.1/blank.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 08 Oct 2014 05:37:28 GMT -->
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<!-- Title and other stuffs -->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mohammad Raihanul Hoque Sabuj">
        <meta name="generator" content="R&and;D Informatics" />
        <!-- Stylesheets -->
        <?php /* Yii::app()->bootstrap->register(); */ ?>

		<!-- bootstrap & fontawesome ########## Using this css as the yiistrap package's bootstrap.css is lower version -->
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/bootstrap.min.css" />

		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/font-awesome/4.1.0/css/font-awesome.min.css" />
 
		<!-- text fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/style.css" id="main-style" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/fullcalendar.css" />

        
		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/ace.min.css" id="main-ace-style" />
		<!-- Form  styles -->
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/form.css" id="form-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/ace-rtl.min.css" />
 		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/ace-ie.min.css" />
		<![endif]-->
 		<!-- inline styles related to this page -->
 		<!-- ace settings handler -->
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ace-extra.min.js"></script>
 		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
 		<!--[if lte IE 8]>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">

		<?php echo $content; ?>

		<!-- basic scripts -->
		<!--[if !IE]> -->
		<!--<script src="<?php //echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script> -->
		<!-- <![endif]-->
		<!--[if IE]>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<![endif]-->
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js'>"+"<"+"/script>");
		</script><!---->
		<!-- <![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='<?php //echo Yii::app()->theme->baseUrl; ?>/js/jquery1x.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/date-time/moment.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/fullcalendar.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootbox.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ace-elements.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ace.min.js"></script>



		<!-- inline scripts related to this page -->
		

				<!-- inline scripts related to this page -->
	</body>

</html>
