<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
            <h5 class="my-0 mr-md-auto font-weight-normal" id="logo"><?php echo CHtml::image('/images/logo.jpg'); ?></h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#">Home</a>

            </nav>
        </div>
	</div><!-- header -->
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <?php echo CHtml::image('/images/logo.jpg'); ?>
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            </div>
<!--            <div class="col-6 col-md">-->
<!--                <h5>Features</h5>-->
<!--                <ul class="list-unstyled text-small">-->
<!--                    <li><a class="text-muted" href="#">Cool stuff</a></li>-->
<!--                    <li><a class="text-muted" href="#">Random feature</a></li>-->
<!--                    <li><a class="text-muted" href="#">Team feature</a></li>-->
<!--                    <li><a class="text-muted" href="#">Stuff for developers</a></li>-->
<!--                    <li><a class="text-muted" href="#">Another one</a></li>-->
<!--                    <li><a class="text-muted" href="#">Last time</a></li>-->
<!--                </ul>-->
<!--            </div>-->

        </div>
    </footer>
	<!-- footer -->

</div><!-- page -->

</body>
</html>
