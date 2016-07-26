<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>页面模板</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php
                foreach($ChannelList as $key=>$value):
                ?>
                <li class="active"><a href="#">Home</a></li>
                <?php
                statement;
                ?>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container-fluid" style="padding-top: 50px;">


    <div class="row">

        <div class="col-md-12">
            <h1>执行示例</h1>
        </div>
        <div class="col-md-12">
            <?=$tpl;?>
        </div>

        <div class="col-md-12">
            <hr>
            <h1>源码</h1>
            <hr>
        </div>
        <div class="col-md-12">
<?=$md?>
        </div>
    </div>

</div>

<script src="/assets/jquery-1.11.1.min.js"></script>
<script src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/assets/Sham.js"></script>

</body>
</html>
