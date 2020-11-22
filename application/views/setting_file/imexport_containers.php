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
				<div class="ibox-title">NHẬP/ XUẤT CONTAINER</div>
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
			<div class="row ibox-footer border-top-0">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
					<div class="row">
						<div class="col-lg-3 col-md-3"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border: solid 1px #eee;">
							<div class="row form-group mt-1 mb-1">
								<label class="col-4 col-form-label text-center" >Cont20: 0(0Re)</label>
								<label class="col-4 col-form-label text-center">Cont40: 0(0Re)</label>
								<label class="col-4 col-form-label text-center">Cont20: 0(0Re)</label>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>						
					</div>
				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
					<table id="contenttable" class="table table-striped display nowrap" cellspacing="0" style="width: 100%">
						<thead>
						<tr>
							<th col-name="STT">No.</th>
							<th col-name="LocationReference">Location Reference</th>
							<th col-name="CurrentLocation">Current Location</th>
							<th col-name="CtnrNo ">Ctnr No </th>
							<th col-name="ISO">ISO</th>
							<th col-name="OrgISO">Org ISO</th>
							<th col-name="BkgNo">Bkg No.</th>
							<th col-name="Liner">Liner</th>
							<th col-name="Owner">Owner</th>
							<th col-name="Len">Len</th>
							<th col-name="Ht">Ht</th>
							<th col-name="MaxGross">MaxGross</th>
							<th col-name="VGM">VGM</th>
							<th col-name="VGMAuthorized">VGM Authorized</th>
							<th col-name="Gross">Gross</th>
							<th col-name="Cargo">Cargo</th>
							<th col-name="ArrivalTime">Arrival Time</th>
							<th col-name="ArrBy">Arr By</th>
							<th col-name="DepTime">Dep Time</th>
							<th col-name="DepBy">Dep By</th>
							<th col-name="POD">POD</th>
							<th col-name="ArrCar">ArrCar</th>
							<th col-name="FE">F/E</th>
							<th col-name="Haz">Haz</th>
							<th col-name="OS">OS</th>
							<th col-name="RFR">RFR</th>
							<th col-name="Type">Type</th>
							<th col-name="Source">Source</th>
							<th col-name="FPOD">FPOD</th>
							<th col-name="Restow">Restow</th>
							<th col-name="Confirmed">Confirmed</th>
							<th col-name="Category">Category</th>
							<th col-name="DeliveryPlace">Delivery Place</th>
							<th col-name="ReceivalPlace">Receival Place</th>
							<th col-name="IMO">IMO</th>
							<th col-name="UNNO">UNNO</th>
							<th col-name="OverSize">Over Size</th>
							<th col-name="MinTemp">Min Temp</th>
							<th col-name="SealNoCurrent">Seal No Current</th>
							<th col-name="Location">Location</th>
							<th col-name="Remarks">Remarks</th>
							<th col-name="SealNo">Seal No</th>
							<th col-name="BillNo">Bill No</th>
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
			_columns = ["STT", "LocationReference", "CurrentLocation", "CtnrNo ", "ISO", "OrgISO", "BkgNo", "Liner", "Owner", "Len", "Ht", "MaxGross", "VGM", "VGMAuthorized", "Gross", "Cargo", "ArrivalTime", "ArrBy", "DepTime", "DepBy", "POD", "ArrCar", "FE", "Haz", "OS", "RFR", "Type", "Source", "FPOD", "Restow", "Confirmed", "Category", "DeliveryPlace", "ReceivalPlace", "IMO", "UNNO", "OverSize", "MinTemp", "SealNoCurrent", "Location", "Remarks", "SealNo", "BillNo"];

		var x = tbl.newDataTable({
			scrollY: '45vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _columns.indexOf('STT')},		
				{ className: "text-center", targets: _columns.getIndexs(["LocationReference", "CurrentLocation", "CtnrNo ", "ISO", "OrgISO", "BkgNo", "Liner", "Owner", "Len", "Ht", "MaxGross", "VGM", "VGMAuthorized", "Gross", "Cargo", "ArrivalTime", "ArrBy", "DepTime", "DepBy", "POD", "ArrCar", "FE", "Haz", "OS", "RFR", "Type", "Source", "FPOD", "Restow", "Confirmed", "Category", "DeliveryPlace", "ReceivalPlace", "IMO", "UNNO", "OverSize", "MinTemp", "SealNoCurrent", "Location", "Remarks", "SealNo", "BillNo"])},
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
	});
</script>
<script src="<?=base_url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>