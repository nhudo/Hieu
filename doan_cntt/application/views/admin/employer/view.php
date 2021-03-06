<!-- head -->

<div class="page-content">
	<?php $this->load->view('admin/admin/caidat.php'); ?>

	<div class="page-header">
		<h1>
			Quản trị viên
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				 Danh sách

			</small>
			
		</h1>

	</div><!-- /.page-header -->
 	<?php $this->load->view('admin/message'); ?>
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			
				<div class="row">
				<div class="col-xs-12">
					<table id="simple-table" class="table  table-bordered table-hover">
						<thead>
							<tr>
								<th class="center">
									<label class="pos-rel">
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</th>
								<th class="detail-col">Details</th>
								<th>Người liên hệ</th>
								<th>Email</th>
								<th class="hidden-480">Số diện thoại</th>

								<th>
									<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
									Update
								</th>
								<th class="hidden-480">Status</th>

								<th>Tổng số: <?php echo $total; ?></th>
							</tr>
						</thead>
						<!-- <form action="" method="post" enctype="multipart/form-data"> -->
						<?php if(!empty($list)){
							foreach ($list as  $value):?>
						
						<tbody>
							<tr>
							<form action="" method="post" enctype="multipart/form-data">
								<td class="center">
									<label class="pos-rel">
										<input type="checkbox"  name="xoa[]" id="xoa[]" value="<?php echo $value->id; ?>" class="ace" />
										<span class="lbl"></span>
									</label>
								</td>
							</form>
								<td class="center">
									<div class="action-buttons">
										<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
											<i class="ace-icon fa fa-angle-double-down"></i>
											<span class="sr-only">Details</span>
										</a>
									</div>
								</td>

								<td>
									<?php echo $value->sContactName; ?>
								</td>
								<td><?php echo $value->sContactEmail; ?></td>
								<td class="hidden-480"><?php echo $value->sMobile; ?></td>
								<td><?php echo $value->sUpdate; ?></td>

								<td class="hidden-480">
									<?php if($value->iStatus==1){ echo '<span class="label label-sm label-warning">Bình thường</span>';} else if($value->iStatus==2){ echo '<span class=" label label-sm label-inverse arrowed-in">Vip</span>';} else{echo '<span class="label label-sm label-success">Block</span>';}; ?>
								</td>

								<td>
									<div class="hidden-sm hidden-xs btn-group">
										<a href="<?php echo admin_url('employer/edit/'.$value->id); ?>"  onclick=" return confirmedit()">	
											<button id="id-btn-dialog2" class="btn btn-xs btn-info" >
												<i class="ace-icon fa fa-pencil bigger-120"></i>
											</button>
										</a>
										<a href="<?php echo admin_url('employer/delete/'.$value->id); ?>" onclick=" return confirmAction()" >
											<button class="btn btn-xs btn-danger"  >
												<i class="ace-icon fa fa-trash-o bigger-120"></i> 
											</button>
										</a>
									</div>

									<div class="hidden-md hidden-lg">
										<div class="inline pos-rel">
											<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
												<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
											</button>

											<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											
												<li>
													<a href="<?php echo admin_url('admin/edit/'.$value->id); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
														</span>
													</a>
												</li>

												<li>
													<a href="<?php echo admin_url('employer/delete/'.$value->id); ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
														<span class="red">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</td>
							</tr>

							<tr class="detail-row">
								<td colspan="8">
									<div class="table-detail">
										<div class="row">
											<div class="col-xs-12 col-sm-2">
												<div class="text-center">
													<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="<?php if($value->sLogo==''){echo public_url(); ?>/backend/assets/images/avatars/profile-pic.jpg<?php }else{echo base_url('uploads/employer/'.$value->sLogo);}?>" />
													<br />
													<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
														<div class="inline position-relative">
															<a class="user-title-label" href="#">
																<i class="ace-icon fa fa-circle light-green"></i>
																&nbsp;
																
															</a>

														</div>
													</div>
												</div>
											</div>

											<div class="col-xs-12 col-sm-7">
												<div class="space visible-xs"></div>

												<div class="profile-user-info profile-user-info-striped">
													<div class="profile-info-row">
														<div class="profile-info-name">Tên công ty </div>

														<div class="profile-info-value">
															<span><?php echo $value->sComName; ?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name"> Số điện thoại</div>

														<div class="profile-info-value">
															<span><?php echo $value->sTel; ?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name">Địa chỉ </div>

														<div class="profile-info-value">
															<i class="fa fa-map-marker light-orange bigger-110"></i>
															<span><?php echo $value->sAddress; ?></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name">Email </div>

														<div class="profile-info-value">
															<span><?php echo $value->sEmail; ?></span>
														</div>
													</div>
													
													<div class="profile-info-row">
														<div class="profile-info-name">Giấy phép</div>

														<div class="profile-info-value">
															<span><a class="btn btn-primary btn-xs" href="<?php echo admin_url('employer/download/'.$value->sLink_Upload);?>">Download</a></span>
															<a href="<?php echo admin_url('employer/detail/'.$value->id); ?>"><button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">Chi tiết</button></a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-3">
												<div class="space visible-xs"></div>
												<h4 class="header blue lighter less-margin">Gửi tin cho nhà tuyển dụng</h4>

												<div class="space-6"></div>
<!-- 
												<form >
													<fieldset>
														<textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
													</fieldset>

													<div class="hr hr-dotted"></div>

													<div class="clearfix">
														
														<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
															Gửi tin
															<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
														</button>
													</div>
												</form> -->
												<br>
												
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
						<?php		
						endforeach;
						} ?>
						<thead>
							<tr>
								<th class="center">
									<label class="pos-rel">
									<a href=" <?php echo admin_url('employer/delete_check'); ?>"  onclick="return confirmAction();">	
										<button class="btn btn-xs btn-danger">
												<i class="ace-icon fa fa-trash-o bigger-120"></i>
										</button>
									</a>	
									</label>
								</th>
								<th class="detail-col">
								<a href="<?php echo admin_url('employer/add'); ?>">
								<input type="submit" class="btn btn-primary btn-sm pull-right" value="Thêm" ></a>

								</th>
								<th></th>
								<th></th>
								
								<th colspan="4"><?php echo $this->pagination->create_links(); ?></th>
							</tr>
						</thead>
					<!-- 	</form> -->
					</table>
				</div><!-- /.span -->
			</div><!-- /.row -->
			
			<div class="row" style="display: none;">

				<table id="dynamic-table">
				</table>
			</div>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->

<SCRIPT LANGUAGE="JavaScript">
      function confirmAction() {
        return confirm("Bạn có chắc muốn xóa không?")
      }
      function confirmedit(){
      	 return confirm("Bạn có chắc muốn sửa không?")
      }
 
</SCRIPT>
<script src="<?php echo public_url() ?>/backend/assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo public_url() ?>/backend/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo public_url() ?>/backend/assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="<?php echo public_url() ?>/backend/assets/js/dataTables.buttons.min.js"></script>
<script src="<?php echo public_url() ?>/backend/assets/js/buttons.flash.min.js"></script>
<script src="<?php echo public_url() ?>/backend/assets/js/buttons.html5.min.js"></script>
<script src="<?php echo public_url() ?>/backend/assets/js/buttons.print.min.js"></script>
<script src="<?php echo public_url() ?>/backend/assets/js/buttons.colVis.min.js"></script>
<script src="<?php echo public_url() ?>/backend/assets/js/dataTables.select.min.js"></script>
<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 

				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null,null,null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					

			
					select: {
						style: 'multi'
					}
			    } );
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					 
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					

					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
			
			})
		</script>