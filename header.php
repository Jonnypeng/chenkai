<!DOCTYPE html>
<html lang="zh-CN">
  <head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<meta name="renderer" content="webkit">
	<meta name="description" content="陈愷教授个人网站">
	<meta name="keywords" content="陈愷教授个人网站">
    <title>陈愷教授个人网站</title>
    <!-- Bootstrap 3-->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
	<link href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	  </head>
	  
<body>
  <div id="header">
	<div class="container">
		<div class="row" id="header-nav">
			<div class="col-md-12 col-xs-12 ">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div id="logo"><a href="<?php bloginfo('url'); ?>" ><img src="http://chenkai.aliapp.com/wp-content/themes/twentytwelve.1.8/twentytwelve/images/logo.png"></a></div>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="main-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php
						echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", 
						wp_nav_menu(array('theme_location' => 'primary', 'echo' => false)) ));
						?>
					</ul>
				</div>
			</div>
		</div>
			<div id="jiaoshoujianjie">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="http://chenkai.aliapp.com/wp-content/themes/twentytwelve.1.8/twentytwelve/images/header.png" alt="chenkai" class="img-responsive">
						</div>
						<div class="col-md-6">
							<h2>陈愷教授</h2>
							<h5>北京大汉九鼎研究院执行院长</h5>
							<h5>北京大学企业商学院研究中心研究员</h5>
							<hr />
							<p>多年来一直从事企业管理领域的理论与实践研究，有丰富的实战经验。长期担任北京大学、清华大学、西安交大、吉林大学、浙江大学等多家高校的学位班、总裁班、MBA课程班的主讲教授，全国财务总监资格认证、注册管理会计师培训体系的主讲专家。授课既有理论深度、又能紧密结合实际，深受学员好评。研究领域：财务管理、资本运营。 </p>
						</div>
					</div>
				</div>
			</div>
		
	</div>
	</div>