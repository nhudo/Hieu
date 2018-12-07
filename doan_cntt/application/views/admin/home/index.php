<div class="main-content-inner">
	<div class="page-content">
		<div class="ace-settings-container" id="ace-settings-container">
			<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
				<i class="ace-icon fa fa-cog bigger-130"></i>
			</div>

			<div class="ace-settings-box clearfix" id="ace-settings-box">
				<div class="pull-left width-50">
					<div class="ace-settings-item">
						<div class="pull-left">
							<select id="skin-colorpicker" class="hide">
								<option data-skin="no-skin" value="#438EB9">#438EB9</option>
								<option data-skin="skin-1" value="#222A2D">#222A2D</option>
								<option data-skin="skin-2" value="#C6487E">#C6487E</option>
								<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
							</select>
						</div>
						<span>&nbsp; Choose Skin</span>
					</div>

					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
						<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
					</div>

					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
						<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
					</div>

					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
						<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
					</div>

					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
						<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
					</div>

					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
						<label class="lbl" for="ace-settings-add-container">
							Inside
							<b>.container</b>
						</label>
					</div>
				</div><!-- /.pull-left -->

				<div class="pull-left width-50">
					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
						<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
					</div>

					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
						<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
					</div>

					<div class="ace-settings-item">
						<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
						<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
					</div>
				</div><!-- /.pull-left -->
			</div><!-- /.ace-settings-box -->
		</div><!-- /.ace-settings-container -->

		<div class="page-header">
			<h1>
				Dashboard
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					 Home
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>

					<i class="ace-icon fa fa-check green"></i>

					Xin chào
					<strong class="green">
						<?php echo $admin_info->sUserName; ?>
						<!-- <small>(v1.4)</small> -->
					</strong>
				</div>

				<div class="row">
					<div class="space-6"></div>

					<div class="col-sm-12 infobox-container">
						<div class="infobox infobox-green">
							<div class="infobox-icon">
								<i class="ace-icon fa fa-comments" title="Comment"></i>
							</div>
							<div class="infobox-data">
								<span class="infobox-data-number"><?php echo $total_comment; ?></span>
							</div>
							<div class="stat stat-success">Comment</div>
						</div>
						<div class="infobox infobox-orange2">
							<div class="infobox-chart">
								<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224" title="Lượt xem"></span>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number"><?php echo $total_view; ?></span>
								<div class="infobox-content">Lượt xem</div>
							</div>

							
						</div>
						

						<div class="infobox infobox-pink">
							<div class="infobox-icon">
								<i class="ace-icon fa fa-user" title="Nhà tuyển dụng"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number"><?php echo $total_employer; ?></span>
								<div class="infobox-content">Nhà tuyển dụng</div>
							</div>
							
						</div>

						<div class="infobox infobox-red">
							<div class="infobox-icon">
								<i class="ace-icon fa fa-users" title="Người tìm việc"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number"><?php echo $total_jobseeker; ?></span>
								<div class="infobox-content">người tìm việc</div>
							</div>
						</div>

						<div class="space-6"></div>

					</div>

					<div class="vspace-12-sm"></div>

					
				</div><!-- /.row -->
				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div>