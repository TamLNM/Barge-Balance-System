<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="<?=base_url('assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css');?>" rel="stylesheet" />
<style>
	@media (max-width: 767px) {
		.f-text-right    {
			text-align: right;
		}
	}
	.no-pointer{
		pointer-events: none;
	}
	/*
	#contenttable_wrapper #contenttable .dataTables_scrollBody .input-span{
		float: center;
	}
	*/
	#contenttable_wrapper .dataTables_scroll #cell-context .dropdown-menu  .dropdown-item .sub-text{
		margin-left: 7px;
		font-size: 12px;
		font-style: italic;
	}
</style>

<div class="row">
	<div class="col-xl-12">
		<div class="ibox collapsible-box">
			<i class="la la-angle-double-up dock-right"></i>
			<div class="ibox-head">
				<div class="ibox-title">ĐỊNH NGHĨA SÀ LAN</div>
				<div class="button-bar-group mr-3">					
					<a  class="btn mt-2" href="<?=site_url(md5('Common') . '/' . md5('createXLSFormForCustomerImport'));?>" >
						<i style="color: #365899;"><u>Tải file import mẫu...</u></i>
					</a>

					<label for="import" class="btn btn-outline-info btn-sm mt-2">
						<span class="btn-icon"><i class="ti-import"></i>Import</span>
					</label>
     				<input id="import" name="import" style="visibility: hidden; width: 1px" type="file">

					<a 	class="btn btn-outline-dark btn-sm mr-1"
						id="export" 
						title="Export"
						href="<?=site_url(md5('Common') . '/' . md5('createXLSForCustomerExport'));?>">
						<span class="btn-icon"><i class="ti-export"></i>Export</span>
					</a>					
					<button id="search" class="btn btn-outline-warning btn-sm btn-loading mr-1" 
											data-loading-text="<i class='la la-spinner spinner'></i>Nạp dữ liệu"
										 	title="Nạp dữ liệu">
						<span class="btn-icon"><i class="ti-search"></i>Nạp dữ liệu</span>
					</button>				

					<button id="addrow" class="btn btn-outline-success btn-sm mr-1" 
										title="Thêm dòng mới">
						<span class="btn-icon"><i class="fa fa-plus"></i>Thêm dòng</span>
					</button>

					<button id="save" class="btn btn-outline-primary btn-sm mr-1"
										data-loading-text="<i class='la la-spinner spinner'></i>Lưu dữ liệu"
										title="Lưu dữ liệu">
						<span class="btn-icon"><i class="fa fa-save"></i>Lưu</span>
					</button>

					<button id="delete" class="btn btn-outline-danger btn-sm mr-1" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="Xóa những dòng đang chọn">
						<span class="btn-icon"><i class="fa fa-trash"></i>Xóa dòng</span>
					</button>
				</div>
			</div>
			<div class="ibox-body pt-0 pb-0 bg-f9 border-e">
				<div class="row ibox mb-0 border-e pb-1 pt-2">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">					
								<div class="row form-group">
									<label class="col-form-label ml-2" style="text-align: right;">Mã sà</label>
									<div class="input-group input-group-sm ml-2 mr-2">
										<input id="" class="form-control form-control-sm" placeholder="Mã sà" type="text">			
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">					
								<div class="row form-group">
									<label class="col-form-label ml-2" style="text-align: right;">Sức chứa</label>
									<div class="input-group input-group-sm ml-2 mr-2">
										<input id="" class="form-control form-control-sm" placeholder="Sức chứa" type="text" readonly>	
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">					
								<div class="row form-group">
									<label class="col-form-label ml-2" style="text-align: right;">Tải trọng</label>
									<div class="input-group input-group-sm  ml-2 mr-2">
										<input id="" class="form-control form-control-sm" placeholder="Tải trọng" type="text">	
									</div>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">					
								<div class="row form-group">
									<label class="col-form-label ml-2" style="text-align: right;">Số Bay</label>
									<div class="input-group input-group-sm ml-2 mr-2">
										<input id="" class="form-control form-control-sm" placeholder="Số Bay" type="text">			
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">					
								<div class="row form-group">
									<label class="col-form-label ml-2" style="text-align: right;">Số Row</label>
									<div class="input-group input-group-sm ml-2 mr-2">
										<input id="" class="form-control form-control-sm" placeholder="Số Row" type="number" min="0">			
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">					
								<div class="row form-group">
									<label class="col-form-label ml-2" style="text-align: right;">Số Tier</label>
									<div class="input-group input-group-sm ml-2 mr-2">
										<input id="" class="form-control form-control-sm" placeholder="Số Tier" type="number" min="0">			
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">					
								<div class="row form-group">
									<label class="col-form-label ml-2" style="text-align: right;">Ngày đăng kiểm</label>
									<div class="input-group input-group-sm ml-2 mr-2">
										<input id="" class="form-control form-control-sm" placeholder="Ngày đăng kiểm" type="text">			
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">					
								<div class="row form-group">
									<label class="col-form-label ml-2" style="text-align: right;">Ngày hết hạn</label>
									<div class="input-group input-group-sm  ml-2 mr-2">
										<input id="" class="form-control form-control-sm" placeholder="Ngày hết hạn" type="text">			
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row form-group">
									<div style="border: #0b4660 solid 1px; border-radius: 5px; height: 4.5rem; width: 37rem; margin-left: 0.6rem;">
										<div style="margin: 0; background-color: #0b4660; text-align: center; height: 1.5rem;">
											<label style="color: #ffffff; margin-top: 0.1rem; font-size: 0.9rem;"><b>MAX SLOTS</b></label>
											<br>
										</div>
										<label style="margin-left: 0.5rem; width: 6rem;">Container 20</label>
										<input id="" placeholder="Container 20" type="text" style="border-radius: 5px; border: solid 1px #eee; padding-left: 8px;">		

										<label style="margin-left: 0.5rem; width: 6rem; margin-top: 0.5rem;">Container 40</label>
										<input id="" placeholder="Container 40" type="text" style="border-radius: 5px; border: solid 1px #eee; padding-left: 8px;">		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
					<table id="contenttable" class="table table-striped display nowrap" cellspacing="0" style="width: 100%; margin-top: 10px;">
						<thead>
						<tr>
							<th class="editor-cancel" col-name="STT">STT</th>
							<th col-name="">Mã sà</th>
							<th col-name="">Sức chứa</th>
							<th col-name="">Số Bay</th>
							<th col-name="">Sổ Row</th>
							<th col-name="">Số Tier</th>
							<th col-name="">Container 20</th>
							<th col-name="">Container 40</th>
							<th col-name="">Tải trọng</th>
							<th col-name="">Ngày đăng kiểm</th>
							<th col-name="">Ngày hết hạn</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function () {
		/* Set show current menu */
		var parentMenuList 	= {};

		<?php if(isset($parentMenuList) && count($parentMenuList) >= 0){?>
			parentMenuList = <?=json_encode($parentMenuList);?>;
		<?php } ?>

		for (i = 0; i < parentMenuList.length; i++){
			if (parentMenuList[i]['MenuID'] == 'SettingFile'){
				$('#' + parentMenuList[i]['MenuID']).addClass('active');
			}
			else{
				$('#' + parentMenuList[i]['MenuID']).removeClass();
			}
		}

		/* Initial for datatables */
		var tbl 	 = $("#contenttable"),
			_columns = ["STT", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];

		var x = tbl.newDataTable({
			scrollY: '45vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _columns.indexOf('STT')},		
				{ className: "text-center", targets: _columns.getIndexs(["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"])},
			],
			order: [[ _columns.indexOf('STT'), 'asc' ]],
			paging: false,
            keys:true,
            autoFill: {
                focus: 'focus'
            },
            select: true,
            rowReorder: false,
            arrayColumns: _columns
		});

		/* Initial datetimepicker */
		$("#StartDate, #FinishDate").datetimepicker({
			controlType: 'select',
			oneLine: true,
			dateFormat: 'dd/mm/yy',
			timeFormat: 'HH:mm:00',
			timeInput: true,
			onSelect: function () {
				/* Do nothing */
			}	
		});
	});
</script>
<script src="<?=base_url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>