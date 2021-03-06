<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"C:\wamp64\www\tp1\public/../ems/mangeuser\view\shop\editart.html";i:1539418140;s:54:"C:\wamp64\www\tp1\ems\mangeuser\view\public\_head.html";i:1539438831;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>博客后台管理系统</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="/static/css/layer.css">
    <link rel="stylesheet" href="/static/css/script.css">
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/js/layer.js"></script>
</head>

<body>
    <!-- 顶部导航 -->
    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa d-inline fa-lg fa-cloud"></i>
                <b>博客后台管理系统</b>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('mangeuser/shop/person'); ?>">
                            <i class="fa d-inline fa-lg fa-address-card-o"></i> <?php echo session('nickname'); ?></a>
                    </li>

                </ul>
                <a class="btn navbar-btn ml-2 text-dark btn-light " id="outlogin">
                    <i class="fa d-inline fa-lg fa-user-circle-o"></i>退出</a>
            </div>
        </div>
    </nav>
    <!-- 顶部导航 -->
    <!-- 左侧导航栏 -->
    <div class="leftBar">
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link text-dark home" data-toggle="collapse" href="#home">
                        <i class="fa fa-lg fa-home"></i> 后台管理
                    </a>
                </div>
                <div id="home" class="collapse" data-parent="#accordion">
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('index'); ?>"><i class="fa fa-circle"></i> 后台管理</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseFour">
                        <i class="fa fa-user"></i> 会员管理
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/memberadd'); ?>"><i class="fa fa-circle"></i>
                            会员添加</a>
                    </div>
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/memberlist'); ?>"><i class="fa fa-circle"></i>
                            会员列表</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseSix">
                        <i class="fa fa-user-circle"></i> 管理员管理
                    </a>
                </div>
                <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/userlist'); ?>"><i class="fa fa-circle"></i>
                            管理员列表</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseTwo">
                        <i class="fa fa-barcode"></i> 栏目管理
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('addcate'); ?>"><i class="fa fa-circle"></i> 栏目添加</a>
                    </div>
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('editcate'); ?>"><i class="fa fa-circle"></i> 栏目编辑</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseThree">
                        <i class="fa fa-book"></i> 文章管理
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('addartical'); ?>"><i class="fa fa-circle"></i> 文章添加</a>
                    </div>
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('listartical'); ?>"><i class="fa fa-circle"></i> 文章列表</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseFive">
                        <i class="fa fa-mouse-pointer"></i> 评论管理
                    </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">

                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/comment'); ?>"><i class="fa fa-circle"></i>
                            评论列表</a>
                        &nbsp;
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link text-dark" data-toggle="collapse" href="#system">
                        <i class="fa fa-cog"></i> 系统管理
                    </a>
                </div>
                <div id="system" class="collapse" data-parent="#accordion">
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/userlist'); ?>"><i class="fa fa-circle"></i>
                            管理员列表</a>
                    </div>
                    <div>
                        <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/person'); ?>"><i class="fa fa-circle"></i>
                            个人信息列表</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('#outlogin').click(function () {
                $.ajax({
                    type: "post",
                    url: "<?php echo url('mangeuser/index/outlogin'); ?>",
                    data: "",
                    dataType: "",
                    success: function (data) {
                        if (data.code == 1) {
                            layer.msg(data.msg, {
                                icon: 6,
                                time: 2000,
                            }, function () {
                                location.href = data.url;
                            });
                        } else {
                            layer.open({
                                title: '退出失败',
                                icon: 2,
                                content: data.msg,
                            });
                        }

                    }
                });
            });
        })
    </script>
    <!-- 左侧导航栏 -->
    <!-- 右侧显示区域 -->
    <div class="rightArtical">
        <div class="rightTitel">
            <nav class="breadcrumb">
                <span><i class="fa fa-book"></i> 文章管理&nbsp;<b>/</b>&nbsp;添加文章</span>
            </nav>
        </div>
        <div class="content my-3 mx-3">
            <div class="title">
                <span>&nbsp;添加文章</span>
            </div>
            <div class="cate my-3">
                <form class="artical mx-5">
                    <div>
                        <input type="hidden" name="id" id="id" value="<?php if($id): ?><?php echo $id; endif; ?>">
                    </div>
                    <div class="form-group row px-4">
                        <label for="catename" class="col-sm-2">栏目标题</label>
                        <div class="col-sm-4">
                            <input type="text" name="title" id="title" class="form-control" value="<?php echo $datas['title']; ?>">
                            <span class="help-block text-danger">长度小于20</span>
                        </div>
                    </div>
                    <div class="form-group row px-4">
                        <label for="catename" class="col-sm-2">标签</label>
                        <div class="col-sm-4">
                            <input type="text" name="tags" id="tags" class="form-control" value="<?php echo $datas['tags']; ?>">
                            <span class="help-block text-danger">标题|别名</span>
                        </div>
                    </div>
                    <div class="form-group row px-5">
                        <div class="form-check form-check-inline col-sm-4 offset-sm-2">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="is_top" id="is_top" <?php if($datas['is_top'] == 1): ?>checked<?php endif; ?> value="1">置顶
                            </label>
                        </div>
                    </div>
                    <div class="form-group row px-4">
                        <label for="cate_id" class="col-sm-2">文章类别</label>
                        <div class="col-sm-4">
                            <select name="cate_id" class="form-control " id="cate_id">
                                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>" <?php if($datas['id'] == $vo['id']): ?> selected<?php endif; ?>><?php echo $vo['catename']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row px-4">
                        <label for="cate_id" class="col-sm-2">文章概述</label>
                        <div class="col-sm-4">
                            <textarea name="desc" id="desc" class="form-control" cols="30" rows="5"><?php echo $datas['desc']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row px-4">
                        <label for="cate_id" class="col-sm-2">文章内容</label>
                        <div class="col-sm-10">
                            <textarea name="content" id="content"  cols="30" rows="10"><?php echo $datas['content']; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3 offset-sm-4">
                            <button class="btn btn-success" id="addArtical">编辑</button>
                            <button type="reset" class="btn btn-warning mx-4">取消</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- 右侧显示区域 -->
    <script src="/static/Uedit/ueditor.config.js"></script>
    <script src="/static/Uedit/ueditor.all.js"></script>
    <script>
        $(function(){
            UE.getEditor('content');
            $("#addArtical").click(function (e) { 
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "<?php echo url('mangeuser/shop/editart'); ?>",
                    data: $(".artical").serialize(),
                    dataType: "json",
                    success: function (data) {
                        if (data.code == 1) {
                        layer.msg(data.msg, {
                            icon: 6,
                            time: 2000,
                        }, function () {
                            location.href = data.url;
                        });
                    } else {
                        layer.open({
                            title: '编辑失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                    }
                });
            });
        });
    </script>
</body>

</html>