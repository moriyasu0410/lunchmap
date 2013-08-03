<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>LunchMap</title>
    <meta NAME="robots" content="none">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="{Yii::app()->request->baseUrl}/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="{Yii::app()->request->baseUrl}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="{Yii::app()->request->baseUrl}/">LunchMap</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="">
                  <a href="#">Regist</a>
                </li>
                <li class="">
                  <a href="#">Login</a>
                </li>
                </ul>
          </div>
        </div>
    </div>
</div>

<div class="container" id="page">

	{$content}

	<div id="footer">
		Copyright &copy; 2013 moriyasu.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->
<script src="{Yii::app()->request->baseUrl}/bootstrap/js/jquery-2.0.2.min.js"></script>
<script src="{Yii::app()->request->baseUrl}/bootstrap/js/bootstrap.min.js"></script></body>
<script src="{Yii::app()->request->baseUrl}/js/lunch.js"></script></body>
</html>
