<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GTD管理系统</title>
	<!-- jQuery -->
	<script type="text/javascript" src="__PUBLIC__/js/jquery-3.1.1.min.js" ></script>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="__PUBLIC__/css/dashboard.css" >

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="__PUBLIC__/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
    	<div class="container">

      <!-- Static navbar -->
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">GTD系统</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            	<li class="dropdown <?php echo ($active["0"]); ?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">看板 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="__URL__/index">首页看板</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="__URL__/calendar">日历看板</a></li>
                  <!-- <li><a href="#">树形看板</a></li> -->
                </ul>
              </li>
              <li class="<?php echo ($active["1"]); ?>"><a href="__URL__/basket">工作篮</a></li>
              <li class="<?php echo ($active["2"]); ?>"><a href="__URL__/project">项目</a></li>
              <li class="<?php echo ($active["3"]); ?>"><a href="__URL__/memo">备忘录</a></li>
              <li class="<?php echo ($active["4"]); ?>"><a href="__URL__/reference">参考资料</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->

     

    	</div> <!-- /container -->
    </nav>
<style type="text/css">
	.col-md-3{min-height: 50px;border-right: 2px solid gray}
	.row-outer{
		margin-left: 10px;margin-right: 10px;
		border:2px solid #baeaa7;
	}
	.label-default{
		width: 120px;margin: 10px auto;height: 50px;display: block;line-height: 40px;
		text-align: center;font-size: 20px;
	}
	.list-group{margin-left: auto;margin-right: auto;}
	.material{
		border: 2px solid #baeaa7;
		padding: 10px;text-align: center;
		border-radius: 20px 0 0 0;
		position: relative;
	}
	.list-group-item{
		border: initial;padding: 10px;
	}
	/* .material:after{
		content: "";
		display: block;
		width: 15px;height: 15px;
		background-color: white;
		transform: rotate(45deg);
		border-bottom: 2px solid #baeaa7;
		position: absolute;top: -7px;right: -7px;
	} */
</style>
	<div class="row row-outer">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-3">
					<span class="label label-default label-primary">工作篮</span>
					  <div class="list-group">
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			          </div>
				</div>
				<div class="col-md-3">
					<span class="label label-default label-primary">项目</span>
					  <div class="list-group">
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			          </div>
				</div>
				<div class="col-md-3">
					<span class="label label-default label-primary">年计划</span>
					  <div class="list-group">
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			          </div>
				</div>
				<div class="col-md-3">
					<span class="label label-default label-primary">月计划</span>
					  <div class="list-group">
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			          </div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-3">
					<span class="label label-default label-primary">周计划</span>
					  <div class="list-group">
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			          </div>
				</div>
				<div class="col-md-3">
					<span class="label label-default label-primary">日程</span>
					  <div class="list-group">
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			          </div>
				</div>
				<div class="col-md-3">
					<span class="label label-default label-primary">备忘录</span>
					  <div class="list-group">
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			          </div>
				</div>
				<div class="col-md-3" style="border:initial">
					<span class="label label-default label-primary">参考资料</span>
					  <div class="list-group">
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			            <a href="#" class="list-group-item">
			              <div class="material">
			              	材料
			              </div>
			            </a>
			          </div>
				</div>
			</div>
		</div>
	</div>