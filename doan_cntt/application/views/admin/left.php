	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			
			<button class="btn btn-success">
				<a href="<?php echo base_url(); ?>">
					<i class="ace-icon fa fa-home"></i>	
				</a>
			</button>
		
			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo admin_url(''); ?>">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Thống kê - Báo cáo </span>
			</a>

			<b class="arrow"></b>
		</li>
		
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-book"></i>
				<span class="menu-text"> Bài viết </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo admin_url('post/add');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add bài viết
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('post'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách bài viết
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('category'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh mục
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa  fa-comment-o"></i>
				<span class="menu-text"> Comment </span>
				<?php if($total_comment>0){?>
				<span class="pull-right badge badge-important "> <?php echo $total_comment; ?></span>
				
				<?php

				} ?>

				<b class="arrow fa fa-angle-down"></b> 
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo admin_url('comment');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Comment
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text"> Doanh nghiệp </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo admin_url('employer/add');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm mới nhà tuyển dụng
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('employer/view'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách chi tiết nhà tuyển dụng
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('employer'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Quản lý nhà tuyển dụng
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text"> Người tìm việc </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo admin_url('job/add');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm người tìm việc
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo admin_url('job');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Quản lý người tìm việc
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-user-plus"></i>
				<span class="menu-text"> User </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo admin_url('job/add') ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add user
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo admin_url('admin');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách user
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Quản lý mục con </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo  admin_url('city')?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add city
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo admin_url('diploma'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add bằng cấp
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo admin_url('wege'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add tiền lương
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('experience'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add Kinh nghiệm
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('scale'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add quy mô
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo admin_url('naturework'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add tính chất công việc
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('formwork'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add hình thức làm việc
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('probationary'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add thời gian thử việc
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('career'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add ngành nghề
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo admin_url('rank'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Add cấp bậc mong muốn
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon glyphicon glyphicon-cog"></i>
				<span class="menu-text">Cài đặt </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo  admin_url('slider')?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Slider
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>