
<div id="navbar" class="navbar navbar-default          ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header pull-left">
			<a href="index.html" class="navbar-brand">
				<small>
					<i class="fa fa-leaf"></i>
					Ace nhatuyendung
				</small>
			</a>
		</div>

		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<!-- <li class="grey dropdown-modal">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-tasks"></i>
						<span class="badge badge-grey">4</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-check"></i>
							4 Tasks to complete
						</li>

						<li class="dropdown-content">
							<ul class="dropdown-menu dropdown-navbar">
								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:65%" class="progress-bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Unit Testing</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>
							</ul>
						</li>

						<li class="dropdown-footer">
							<a href="#">
								See tasks with details
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li> -->

				<li class="purple dropdown-modal">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-bell icon-animated-bell"></i>
						 <span class="badge badge-important"><?php if(!empty($total_head)){echo $total_head;}  ?></span> 
					</a>

					<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-exclamation-triangle"></i>
							Thông báo
						</li>

						<li class="dropdown-content">
							<ul class="dropdown-menu dropdown-navbar navbar-pink">
								
								<?php $i=0; foreach ($list_ll as  $value) {$i++;?>
									<li>

									<a href="<?php echo nhatuyendung_url('notification/view/'.$value->id); ?>">
										<div class="clearfix">
										<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
												<?php if(!empty($info_job[$i-1])){echo $info_job[$i-1]->sJobTitle;} ?>
											</span>
											<span class="pull-right badge badge-info"><?php if(!empty($info_jobsee[$i-1])){ echo $info_jobsee[$i-1]->sUserName;}  ?> </span>
										</div>
									</a>
								</li>
								<?php
									
								} ?>
							
							</ul>
						</li>

						<li class="dropdown-footer">
							<a href="<?php echo nhatuyendung_url('notification'); ?>">
								See all notifications
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

			<!-- 	<li class="green dropdown-modal">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
						<span class="badge badge-success">5</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-envelope-o"></i>
							5 Messages
						</li>

						<li class="dropdown-content">
							<ul class="dropdown-menu dropdown-navbar">
								<li>
									<a href="#" class="clearfix">
										<img src="<?php echo public_url() ?>/backend/assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="ace-icon fa fa-clock-o"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="clearfix">
										<img src="<?php echo public_url() ?>/backend/assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="ace-icon fa fa-clock-o"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="clearfix">
										<img src="<?php echo public_url() ?>/backend/assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="ace-icon fa fa-clock-o"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="clearfix">
										<img src="<?php echo public_url() ?>/backend/assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Kate:</span>
												Ciao sociis natoque eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="ace-icon fa fa-clock-o"></i>
												<span>1:33 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="clearfix">
										<img src="<?php echo public_url() ?>/backend/assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Fred:</span>
												Vestibulum id penatibus et auctor  ...
											</span>

											<span class="msg-time">
												<i class="ace-icon fa fa-clock-o"></i>
												<span>10:09 am</span>
											</span>
										</span>
									</a>
								</li>
							</ul>
						</li>

						<li class="dropdown-footer">
							<a href="inbox.html">
								See all messages
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li> -->

				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					<?php if($employer_info){?>
						<img class="nav-user-photo" src="<?php if($employer_info->sLogo==''){ echo base_url('template/backend/assets/images/avatars/profile-pic.jpg');} else{ echo base_url('uploads/employer/'.$employer_info->sLogo);}   ?>" alt="Jason's Photo" />
					<?php
					} ?>
						
						<span class="user-info">
						<?php if($employer_info){?>
								<small>Xin chào,</small>
						<?php echo $employer_info->sComName; ?>
						</span>
						<?php
						} ?>
						

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


						<li>
							<a href="<?php echo nhatuyendung_url('user_employer/edit'); ?>">
								<i class="ace-icon fa fa-user"></i>
								Profile
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="<?php echo nhatuyendung_url('user_employer/logout'); ?>">
								<i class="ace-icon fa fa-power-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->
</div>