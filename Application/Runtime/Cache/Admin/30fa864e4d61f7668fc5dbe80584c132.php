<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>云报名CMS --最简洁的轻量级报名系统</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="<?php echo SOURCE_PATH;?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo SOURCE_PATH;?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo SOURCE_PATH;?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?php echo SOURCE_PATH;?>assets/css/jquery.gritter.css" />

		<!-- fonts -->
		<link rel="stylesheet" href="<?php echo SOURCE_PATH;?>assets/css/css.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo SOURCE_PATH;?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo SOURCE_PATH;?>assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo SOURCE_PATH;?>assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo SOURCE_PATH;?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?php echo SOURCE_PATH;?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?php echo SOURCE_PATH;?>assets/js/html5shiv.js"></script>
		<script src="<?php echo SOURCE_PATH;?>assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand"><small><i class="icon-leaf"></i>易报名CMS</small></a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo SOURCE_PATH;?>assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎使用,</small>
									管理员
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li><a href="/" target='_blank'><i class="icon-cog"></i>前台首页</a></li>
								<li><a href="#"><i class="icon-user"></i>系统设置</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo U('member/logout');?>"><i class="icon-off"></i>安全退出</a></li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#"><span class="menu-text"></span></a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success"><i class="icon-signal"></i></button>
							<button class="btn btn-info"><i class="icon-pencil"></i></button>
							<button class="btn btn-warning"><i class="icon-group"></i></button>
							<button class="btn btn-danger"><i class="icon-cogs"></i></button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>
							<span class="btn btn-info"></span>
							<span class="btn btn-warning"></span>
							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="<?php if(ACTION_NAME =='index' || ACTION_NAME ==''){ ?>active<?php } ?>">
                        	<a href="<?php echo U('index');?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 后台首页 </span>
							</a>
						</li>
                        <li class="<?php if(in_array(ACTION_NAME,array('project','creatpro','editpro','bmlist'))){ ?>active open<?php } ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-tasks"></i>
								<span class="menu-text"> 项目管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li class="<?php if(in_array(ACTION_NAME,array('project','bmlist'))){ ?>active<?php } ?>">
									<a href="<?php echo U('index/project');?>">
										<i class="icon-double-angle-right"></i>
										项目列表
									</a>
								</li>

								<li class="<?php if(in_array(ACTION_NAME,array('creatpro','editpro'))){ ?>active<?php } ?>">
									<a href="<?php echo U('index/creatpro');?>">
										<i class="icon-double-angle-right"></i>
										新建项目
									</a>
								</li>
							</ul>
						</li>
                        
                        <li class="<?php if(in_array(ACTION_NAME,array('model','creatmodel','fieldslist','editmodel'))){ ?>active open<?php } ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 模型管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li class="<?php if(in_array(ACTION_NAME,array('model','fieldslist'))){ ?>active<?php } ?>">
									<a href="<?php echo U('index/model');?>">
										<i class="icon-double-angle-right"></i>
										模型列表
									</a>
								</li>

								<li class="<?php if(in_array(ACTION_NAME,array('creatmodel','editmodel'))){ ?>active<?php } ?>">
									<a href="<?php echo U('index/creatmodel');?>">
										<i class="icon-double-angle-right"></i>
										创建模型
									</a>
								</li>
							</ul>
						</li>
						
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo U('index');?>">首页</a>
							</li>
							<li>
								<a href="#">模型管理</a>
							</li>
							<li>
								<a href="#"><?php echo ($model_name); ?></a>
							</li>
							<li class="active">字段列表</li>
						</ul><!-- .breadcrumb -->
					</div>

					<div class="page-content">
						<div class="row">
                            <div class="col-xs-12">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="active">
                                            <a data-toggle="tab" href="#home">
                                                <i class="green icon-list-alt bigger-110"></i>
                                                字段列表
                                                <span class="badge badge-warning"><?php echo ($fields_num); ?></span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a data-toggle="tab" href="#profile">
                                                <i class="purple icon-link bigger-110"></i>
                                                添加字段
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane active">
                                            <div class="table-responsive">
                                                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="center">排序</th>
                                                            <th>字段名称</th>
                                                            <th>字段别名</th>
                                                            <th>字段类型</th>
                                                            <th>必填</th>
                                                            <th>状态</th>
                                                            <th>操作</th>
                                                        </tr>
                                                    </thead>
    
                                                    <tbody>
                                                    <?php if(is_array($fields)): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                                                            <td class="center"><?php echo ($data['listorder']); ?></td>
                                                            <td><?php echo ($data['name']); ?></td>
                                                            <td><?php echo ($data['cname']); ?></td>
                                                            <td><?php echo ($field_types[$data['type']]['name']); ?></php></td>
                                                            <td>
                                                            <?php if($data['required']){ ?>是
                                                            <?php }else{ ?>否<?php } ?>	
                                                            </td>
                                                            <td>
                                                            <?php if($data['state']){ ?>正常
                                                            <?php }else{ ?>禁用<?php } ?>	
                                                            </td>
                                                            <td>
                                                                <div class="action-buttons">
                                                                    <a class="green" href="<?php echo U('index/editfield',array('id'=>$data['id']));?>" title="编辑">
                                                                        <i class="icon-pencil bigger-130"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div id="profile" class="tab-pane">
                                            <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" id="validation-form" action="<?php echo U('index/addfield');?>" method="post">
                                	<input type="hidden" name="mid" id="mid" value="<?php echo ($mid); ?>">
                                	<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="name"> 字段名称* </label>

										<div class="col-sm-9">
											<input type="text" id="name" name="name" placeholder="字段名称，例如：姓名" class="col-xs-10 col-sm-5 limited" maxlength="25" />
										</div>
									</div>

									<div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="cname"> 字段别名* </label>

										<div class="col-sm-9">
											<input type="text" id="cname" name="cname" placeholder="只能填写字母、数字、下划线,不能以下划线开头或结尾，例如：name" class="col-xs-12" />
										</div>
									</div>

									<div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="type"> 字段类型* </label>

										<div class="col-sm-9">
											<select class="form-control" id="type" name="type" onChange="javascript:getSettingEg()">
                                                <option value="">请选择类型</option>
                                                <?php if(is_array($field_types)): $i = 0; $__LIST__ = $field_types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ft): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" eg="<?php echo ($ft['eg']); ?>"><?php echo ($ft['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="setting"> 字段配置 </label>

										<div class="col-sm-9">
											<textarea class="form-control" name="setting" id="setting"></textarea>
                                            <div class="space-4"></div>
                                            <label class="btn btn-danger btn-sm" id="gritter-center">配置规则 <i class="icon icon-info-sign"></i></label>
										</div>
									</div>
									<div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="pattern"> 校验规则 </label>
                                        
                                       	<div class="col-sm-6">
                                        	<input type="text" name="pattern" id="pattern" placeholder="正则表达式" class="col-xs-12">
                                        </div>
										<div class="col-sm-3">
											<select class="form-control" onChange="javascript:$('#pattern').val(this.value)">
                                                <option value="">常用规则</option>
                                                <?php if(is_array($field_patterns)): $i = 0; $__LIST__ = $field_patterns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fp): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fp); ?>"><?php echo ($key); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="errormsg"> 错误提示 </label>

										<div class="col-sm-9">
											<input type="text" id="errormsg" name="errormsg" placeholder="输入信息不符合设定规则时的提示信息，例如：邮箱格式错误" class="col-xs-12 limited" maxlength="25" />
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="default"> 默认信息 </label>

										<div class="col-sm-9">
											<input type="text" id="default" name="default" placeholder="字段的默认数据、预设数据" class="col-xs-12 limited" maxlength="120" />
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="placeholder"> 提示信息 </label>

										<div class="col-sm-9">
											<input type="text" id="placeholder" name="placeholder" placeholder="用来对用户起到提示作用，指引用户如何填写" class="col-xs-12 limited" maxlength="100" />
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="listorder"> 排序 </label>

										<div class="col-sm-9">
											<input type="number" id="listorder" name="listorder" class="col-xs-1" value="0"/>
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right"> 状态 </label>

										<div class="col-sm-9">
											<div class="radio">
                                                <label>
                                                    <input type="radio" name="state" value="1" checked class="ace" />
                                                    <span class="lbl"> 启用</span>
                                                </label>&emsp;&emsp;
                                                <label>
                                                    <input type="radio" name="state" value="0" class="ace" />
                                                    <span class="lbl"> 禁用</span>
                                                </label>
                                            </div>
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right"> 是否为必填项 </label>

										<div class="col-sm-9">
											<div class="radio">
                                                <label>
                                                    <input type="radio" name="required" value="1" checked class="ace" />
                                                    <span class="lbl"> 是</span>
                                                </label>&emsp;&emsp;
                                                <label>
                                                    <input type="radio" name="required" value="0" class="ace" />
                                                    <span class="lbl"> 否</span>
                                                </label>
                                            </div>
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="clearfix form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-info" id="submit" type="submit">
                                            <i class="icon-ok bigger-110"></i>
                                            立即提交
                                        </button>

                                        &nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="icon-undo bigger-110"></i>
                                            重置
                                        </button>
                                    </div>
                                </div>
                                </form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="<?php echo SOURCE_PATH;?>assets/js/jquery-2.0.3.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo SOURCE_PATH;?>assets/js/jquery-1.10.2.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo SOURCE_PATH;?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo SOURCE_PATH;?>assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo SOURCE_PATH;?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo SOURCE_PATH;?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo SOURCE_PATH;?>assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->
        
        <!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
        <script src="<?php echo SOURCE_PATH;?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo SOURCE_PATH;?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo SOURCE_PATH;?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo SOURCE_PATH;?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<?php echo SOURCE_PATH;?>assets/js/jquery.gritter.min.js"></script>
		<!-- ace scripts -->
        
		<script src="<?php echo SOURCE_PATH;?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo SOURCE_PATH;?>assets/js/jquery.dataTables.bootstrap.js"></script>
        
		<script src="<?php echo SOURCE_PATH;?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo SOURCE_PATH;?>assets/js/ace.min.js"></script>

		<script type="text/javascript">
			jQuery(function($) {
				$('textarea.limited,input.limited').inputlimiter({
					remText: '还可以输入%n 个字符',
					limitText: '最多允许: %n个字符.'
				});
				
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					rules: {
						name:{
							required: true,
							remote:{
								 type:"POST",
								 url:"<?php echo U('index/checkunique');?>",
								 data:{
									 value:function(){return $("#name").val();},
									 field:"name",
									 id:"mid",
									 idvalue:function(){return $('#mid').val()}
								 }
							}
						},
						cname:{
							required: true,
							remote:{
								 type:"POST",
								 url:"<?php echo U('index/checkunique');?>",
								 data:{
									 value:function(){return $("#cname").val();},
									 field:"cname",
									 id:"mid",
									 idvalue:function(){return $('#mid').val()},
									 filter:1
								 }
							}
						},
						type:{required: true},
						
					},
			
					messages: {
						name:{
							required:"字段名称不能为空",
							remote:"名称已存在！"
						},
						cname:{
							required:"字段别名不能为空",
							remote:"别名已存在或者含有非法字符！"
						},
						type: "*字段类型必须选择！",
					},
			
					invalidHandler: function (event, validator) { //display error alert on form submit   
						$('.alert-danger', $('.login-form')).show();
					},
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('.select2')) {
							error.insertAfter(element);
						}else error.insertAfter(element);
					},
			
					submitHandler: function (form) {
						form.submit();
					}
				});
				
				$('#gritter-center').on(ace.click_event, function(){
					$.gritter.add({
						title: '字段配置信息设置规则',
						text: '单行文本、多行文本：可以设置限制最多输入的字符数，字符数超过设置值后，无法输入。例如：120<br/>下拉列表：需要设置备选下拉信息值，例如：苹果|香蕉|橘子，多个信息请用 | 隔开<br/><br/>单选按钮：需要设置供选信息，例如让用户选择性别，在这里设置：男|女，多个信息请用 | 隔开。<br/><br/>复选框：设置规则和单选按钮相同，不过和单选按钮不同的是，单选按钮同时只能选择并提交一个，复选框可以同时选择并提交多个。<br/><br/>附件上传：需要设置限制的上传格式(用 - 隔开)和大小(单位为Kb)，两个值之间用 | 隔开，例如jpg-png-jpeg-gif-rar-zip-doc|3000<br/></br>其他类型无需设置规则。如有疑问请到论坛提交问题咨询。',
						class_name: 'gritter-center gritter-info col-md-5'
					});
			
					return false;
				});
				
			
			});
			function getSettingEg(){
				eg = $('#type option:selected').attr('eg');
				$("#setting").val(eg);
			}
			
		</script>
        <script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },{ "bSortable": false },{ "bSortable": false },{ "bSortable": false }, { "bSortable": false }, { "bSortable": false },{ "bSortable": false }
				] } );
				
			})
		</script>
		<!-- inline scripts related to this page -->
</body>
</html>