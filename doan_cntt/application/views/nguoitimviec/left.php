	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<a href="<?php echo base_url(); ?>" class="btn btn-success">
				<i class="ace-icon fa fa-home"></i>
			</a>
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
			<a href="<?php echo nguoitimviec_url('home'); ?>">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon ace-icon glyphicon glyphicon-search"></i>
				<span class="menu-text"> Tìm kiếm </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_all'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm tất cả
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_city'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo thành phố
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_diploma'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo học vấn
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_wage'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo tiền lương
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_exp'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo kinh nghiệm
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_scale'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo quy mô
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_naturework'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo tính chất công việc
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_formwork'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo hình thức làm việc
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_probationary'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo thời gian thử việc
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('search/search_career'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tìm kiếm theo ngành nghề
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon glyphicon  glyphicon-file"></i>
				<span class="menu-text"> Hồ sơ </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo nguoitimviec_url('user_job/add'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Tạo hồ sơ trực tuyến
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('user_job/add_upload'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Upload hồ sơ 
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo nguoitimviec_url('user_job'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Quản lý hồ sơ
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text"> Tài khoản </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo nguoitimviec_url('user_jobseeker/edit'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Sửa tài khoản
					</a>
					<b class="arrow"></b>
				</li>
				
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon  fa fa-cog"></i>
				<span class="menu-text"> Cài đặt </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo nguoitimviec_url('user_jobseeker/logout'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Logout
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>