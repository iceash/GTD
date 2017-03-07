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

<style>
.row-fluid  .zAccountPlanRinner { position:relative;}
.waveBox{ position:absolute; left:0; bottom:0; width:100%; height:61px;overflow:hidden;}
.waveInner{position:absolute; left:0; bottom:0; width:1200px; height:61px; }
.waveInner img{ float:left; display:block;}
.zAccountPlanR .detail {
	color: #fb653b;
	position: relative;
	z-index: 3;
}
.row-fluid .zAccountPlanR { background-image:none;}
.sidebar{background-color: #f5f5f5;}
.row-outer{margin-right: 0;}
</style>
<div class="row row-outer">
	<div class="col-sm-3 col-md-2 sidebar">
			年计划，月计划
	          
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main">
		<div class="zAccountInner zAccount2 clearfix">
			<div class="colorsBox clearfix">
				<div><span class="yellow box"></span>预期到期</div>
				<div><span class="blue box"></span>已到期</div>
			</div>
			<div class="zAccountPlanL span5 no-margin-left" style="position:absolute;left:0px;top:50px;width:900px;">
				<div id="div1"></div> <input type="hidden" id="index_clander" />
				<input type="hidden" id="d523_y">
			</div>
			
		</div>
	</div>
	<div class="col-md-2">
		<div class="span7" style="height: 320px;position:absolute;right:0;text-align:center;top:50px;width:290px;background-color:#f5f5f5;">
				<div class="zAccount5 boxSize no-margin-left">
					<div class="zAccountPlanRinner zAccountPlanR">
						<div class="today">今天日程</div>
						<div class="week" id="d523_w">星期三</div>
						<div class="day" id="d523_d">27</div>
						
						 <p class="date">今天要去做XXXXX</p>
						 <p class="date">XXXXX项目完工</p>
						<a href="" class="detail">查看明细</a>
						<!-- <div class="waveBox">
						  <div class="line_water waveInner">
							   <img src="__PUBLIC__/images/zz111.png">
							   <img src="__PUBLIC__/images/zz111.png">
							</div>
							<div class="line_water2 waveInner">
							   <img src="__PUBLIC__/images/zz222.png">
							   <img src="__PUBLIC__/images/zz222.png">
							</div>
						</div> -->
					</div>
				</div>
			</div>
	</div>
</div>
	
	



<script type="text/javascript" src="__PUBLIC__/js/DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/DatePicker/extraDate.js"></script>
<script>
//运动的水波纹
	function rollTwo(){
	  $(".line_water").animate({marginLeft:"-297px"},5000,"linear",function(){
		$(this).css({marginLeft:"0px"});
		$(this).find("img:first").remove().clone(true).appendTo($(this));	
	  })	
	}
	rollTwo()
	var startRollTwo=setInterval(rollTwo,40);
	
	function rollOne(){
	  $(".line_water2").animate({marginLeft:"-297px"},5000,"linear",function(){
		$(this).css({marginLeft:"0px"});
		$(this).find("img:first").remove().clone(true).appendTo($(this));	
	  })	
	}
	rollOne()
	var startRollTwo=setInterval(rollOne,20);
</script>

	
  </body>
</html>