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
<link href="__PUBLIC__/css/style.css" rel="stylesheet">

<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>材料编号</th>
                  <th>材料内容</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>这是一个测试材料的材料内容内容内容内容</td>
                  <td>
                  	<a href="#">修改</a> || <a href="#">删除</a>
                  </td>
                </tr>
                <tr>
                  <td>1,001</td>
                  <td>这是一个测试材料的材料内容内容内容内容</td>
                  <td>
                    <a href="#">修改</a> || <a href="#">删除</a>
                  </td>
                </tr>
                <tr>
                  <td>1,001</td>
                  <td>这是一个测试材料的材料内容内容内容内容</td>
                  <td>
                    <a href="#">修改</a> || <a href="#">删除</a>
                  </td>
                </tr>
                <tr>
                  <td>1,001</td>
                  <td>这是一个测试材料的材料内容内容内容内容</td>
                  <td>
                    <a href="#">修改</a> || <a href="#">删除</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


	
  </body>
</html>