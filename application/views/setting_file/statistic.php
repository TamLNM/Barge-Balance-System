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
	h5{
		text-align: center;
		font-weight: bold;
		font-size: 1rem;
	}
	.text-center{
		text-align: center;
	}
</style>

<div class="row">
	<div class="col-xl-12">
		<div class="ibox collapsible-box">
			<i class="la la-angle-double-up dock-right"></i>
			<div class="ibox-head">
				<div class="ibox-title">THỐNG KÊ</div>
				<div class="button-bar-group mr-3">					
					<button id="search" class="btn btn-outline-warning btn-sm btn-loading mr-1" 
											data-loading-text="<i class='la la-spinner spinner'></i>Nạp dữ liệu"
										 	title="Nạp dữ liệu">
						<span class="btn-icon"><i class="ti-search"></i>Lọc ngày</span>
					</button>				
					
					<button id="addrow" class="btn btn-outline-success btn-sm mr-1" 
										title="Thêm dòng mới">
						<span class="btn-icon"><i class="la la-file-archive-o"></i>Mở file</span>
					</button>

					<button id="save" class="btn btn-outline-primary btn-sm mr-1"
										data-loading-text="<i class='la la-spinner spinner'></i>Lưu dữ liệu"
										title="Lưu dữ liệu">
						<span class="btn-icon"><i class="fa fa-save"></i>Lưu</span>
					</button>
				</div>
			</div>
			<div class="ibox-body pt-0 pb-0 bg-f9 border-e">
				<div class="row ibox mb-0 border-e pb-1 pt-3">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<div class="row form-group">
									<label class="col-md-2 col-sm-2 col-xs-2 col-form-label" style="text-align: right;">Từ</label>
									<div class="col-md-8 col-sm-8 col-xs-8 input-group input-group-sm">
										<input id="StartDate" class="form-control form-control-sm" placeholder="Từ ngày" type="text">
										
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<div class="row form-group">
									<label class="col-md-2 col-sm-2 col-xs-2 col-form-label">Đến</label>
									<div class="col-md-8 col-sm-8 col-xs-8">
										<input id="FinishDate" class="form-control form-control-sm" placeholder="Đến ngày" type="text">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
					<div class="row">
						<div class="col-lg-2 col-md-2"></div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="border: solid 1px #eee;">
							<div class="row form-group mt-1 mb-1">
								<label class="col-6 col-form-label text-center"><span style="font-weight: bold">Thông tin:</span> 001/2018/12/5_cm_cl</label>
								<label class="col-6 col-form-label text-center"><span style="font-weight: bold">Vận chuyển:</span> Teu(Re): 0(0) Feu(Re): 0(0)</label>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>						
					</div>
				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
					<table id="contenttable" class="table table-striped display nowrap" cellspacing="0" style="width: 100%">
						<thead>
						<tr>
							<th class="editor-cancel" col-name="STT">No</th>
							<th col-name="rowguid"></th>
							<th col-name="">Ngày</th>
							<th col-name="">Chuyến</th>
							<th col-name="">Teu (re)</th>
							<th col-name="">Feu (re)</th>
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
			_columns = ["STT", "rowguid", "1", "2", "3", "4"];

		var x = tbl.newDataTable({
			scrollY: '45vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _columns.indexOf('STT')},		
				{ className: "text-center", targets: _columns.getIndexs(["1", "2", "3", "4"])},
				{ className: "hiden-input", targets: _columns.getIndexs(["rowguid"])},
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