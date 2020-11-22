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
				<div class="ibox-title">THÀNH PHẦN CỐ ĐỊNH</div>
				<div class="button-bar-group mr-3">					
					<button id="accept" class="btn btn-outline-success btn-sm mr-1"
										data-loading-text="<i class='la la-spinner spinner'></i>Chấp nhận"
										title="Lưu dữ liệu">
						<span class="btn-icon"><i class="la la-check"></i>Chấp nhận</span>
					</button>
				</div>
			</div>	
			<div class="row ibox-footer border-top-0">
				<div class="col-md-8 col-sm-12 col-xs-12 table-responsive">
					<table id="contenttable" class="table table-striped display nowrap" cellspacing="0" style="width: 100%; margin-top: 10px;">
						<thead>
						<tr>
							<th class="editor-cancel" col-name="STT">STT</th>
							<th col-name="">Thành phần</th>
							<th col-name="">Khối lượng</th>
							<th col-name="">Xi</th>
							<th col-name="">Yi</th>
							<th col-name="">Zi</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 table-responsive">
					<table id="contenttable2" class="table table-striped display nowrap" cellspacing="0" style="width: 100%; margin-top: 10px;">
						<thead>
						<tr>
							<th class="editor-cancel" col-name="STT">STT</th>
							<th col-name="">Loại</th>
							<th col-name="">Tỷ trọng</th>
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
		var tbl 	  = $("#contenttable"),
			tbl2 	  = $("#contenttable2"),
			_columns  = ["STT", "1", "2", "3", "4", "5"],
			_columns2 = ["STT", "1", "2"];

		var x = tbl.newDataTable({
			scrollY: '45vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _columns.indexOf('STT')},		
				{ className: "text-center", targets: _columns.getIndexs(["1", "2", "3", "4", "5"])},
			],
			order: [[ _columns.indexOf('STT'), 'asc' ]],
			paging: false,
            keys:true,
            autoFill: {
                focus: 'focus'
            },
            select: true,
            rowReorder: false,
            arrayColumns: _columns,
            searching: false,
            buttons: [],
			info: false,
		});

		var y = tbl2.newDataTable({
			scrollY: '45vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _columns2.indexOf('STT')},		
				{ className: "text-center", targets: _columns2.getIndexs(["1", "2"])},
			],
			order: [[ _columns2.indexOf('STT'), 'asc' ]],
			paging: false,
            keys:true,
            autoFill: {
                focus: 'focus'
            },
            select: true,
            rowReorder: false,
            arrayColumns: _columns2,
            searching: false,
			buttons: [],
			info: false,
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

		/* Add default data */
		var rows = [[1, "Const", "", "0.00", "0.00", "0.00"], [2, "Dự trữ", "0.5", "-34.035", "0.0", "5.7"], [3, "Thuyền viên", "0.5", "-34.035", "0.0", "5.5"]];
		tbl.dataTable().fnAddData(rows);

		var index = 1,
			rows = [
				[index++, "BW", "1.0"],
				[index++, "FW", "1.0"],
				[index++, "DO", "0.88"],
				[index++, "FO", "0.96"],
				[index++, "LO", "0.9"],
				[index++, "SLDG", "1.0"],
				[index++, "Water", "1.025"],
			];
		tbl2.dataTable().fnAddData(rows);
	});
</script>
<script src="<?=base_url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>