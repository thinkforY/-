<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 6px; }
.message{width: 400px;height: 150px;margin:auto;border:1px solid #1B8F24;margin-top: 30px;}
.head{width: 100%;height: 30px;background: rgb(222,245,194);text-align: center;padding-top: 5px;}
.content{height: 120px;width: 100%;}
.success ,.error{text-align: center;margin-top: 30px;}
.jump{text-align: center;margin-top: 20px;}
</style>
</head>
<body>
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <!-- <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li class="active">跳转提示</li>
            </ul>
        </div> -->
        <!-- /Page Breadcrumb -->
        <!-- Page Body -->
        <div class="page-body">
            <div class="message">
                <div class="head"><span>XF Admin提示信息:</span></div>
                <div class="content">
                    <?php if(isset($message)) {?>
                    <p class="success">:) <?php echo($message); ?></p>
                    <?php }else{?>
                    <p class="error">:( <?php echo($error); ?></p>
                    <?php }?>
                    <p class="detail"></p>
                    <p class="jump">
                    <a id="href" href="<?php echo($jumpUrl); ?>">如果你的浏览器没有自动跳转，请点击这里...</a>
                    <br />
                    等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
                    </p>
                </div>
            </div>             
        </div>
        <!-- /Page Body -->
    </div>

<script type="text/javascript">
(function(){
    var wait = document.getElementById('wait'),href = document.getElementById('href').href;
    var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
})();
</script>