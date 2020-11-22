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
	.input-center{
		margin-left: auto;
		margin-right: auto;
	}
	label.col-4, label.col-2{
		text-align: right;
	}
</style>

<div class="row">
	<div class="col-xl-12">
		<div class="ibox collapsible-box">
			<i class="la la-angle-double-up dock-right"></i>
			<div class="ibox-head">
				<div class="ibox-title">THÔNG TIN CHUYẾN</div>
				<div class="button-bar-group mr-3">
					<!-- <button id="addrow" class="btn btn-outline-success btn-sm mr-1" 
										title="Thêm dòng mới">
						<span class="btn-icon"><i class="fa fa-plus"></i>Thêm dòng</span>
					</button> -->

					<!-- <button id="btsave" class="btn btn-outline-primary btn-sm mr-1"
										data-loading-text="<i class='la la-spinner spinner'></i>Lưu dữ liệu"
										title="Lưu dữ liệu">
						<span class="btn-icon"><i class="fa fa-save"></i>Lưu</span>
					</button>

					<button id="btdelete" class="btn btn-outline-danger btn-sm mr-1" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="Xóa chuyến">
						<span class="btn-icon"><i class="fa fa-trash"></i>Xóa dòng</span>
					</button> -->
				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
					<h5>TÂN CẢNG 28/29 - THÔNG TIN CHUYẾN</h5>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
					<div class="row">
						<div class="col-lg-3 col-md-3"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="row form-group">
								<label class="col-4 col-form-label">Tên/Mã</label>
								<div class="col-8">
									<!-- <input id="cusID" class="form-control form-control-sm" placeholder="" type="text"> -->
									<select id="tbBargeID">
										<option></option>
										<?php foreach ($BargeList as $value) { ?>
											<option id="<?= $value['BargeID'] ?>"><?= $value['BargeID']?></option>
										<?php	} ?>
									</select>
								</div>
								<label class="col-4 col-form-label">Năm</label>	
								<div class="col-8">
									<select id="cbNam" name='cbNgay'>
											<?php for ($i=2018;$i<=2100;$i++) { ?>
													<option><?= $i?></option>
												<?php	} ?>
									</select>			
								</div> 
								<label class="col-4 col-form-label">Tên xà lan</label>	
								<div class="col-8">
									<input id="tbBargeName" class="col-7 form-control form-control-sm" placeholder="" type="text" readonly>	
								</div>
								<label class="col-4 col-form-label">Chuyến</label>	
								<div class="col-8">
									<input id="tbChuyen" class="col-7 form-control form-control-sm" placeholder="" type="text">	
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>						
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="row form-group">
								<label class="col-4 col-form-label">Ngày cập</label>
								<div class="col-8">
									<input id="dtpATB" class="col-7 form-control form-control-sm" placeholder="" type="text">
								</div>
								<label class="col-4 col-form-label">Ngày rời</label>
								<div class="col-8">
									<input id="dtpATD" class="col-7 form-control form-control-sm" placeholder="" type="text">
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>							
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="row form-group">
								<label class="col-4 col-form-label">Cảng đi</label>
								<div class="col-8">
									<!-- <input id="cusID" class="form-control form-control-sm" placeholder="" type="text"> -->
									<select id="cbLastPort">
										<option></option>
										<?php foreach ($PortList as $value) { ?>
											<option class="<?= $value['Port_CD'] ?>"><?= $value['port']?></option>
										<?php	} ?>
									</select>
								</div>
							</div>
						</div> 
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>							
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="row form-group">
								<label class="col-4 col-form-label">Cảng đến</label>
								<div class="col-8">
									<!-- <input id="cusID" class="form-control form-control-sm" placeholder="" type="text"> -->
									<select id="cbNextPort">
										<option></option>
										<?php foreach ($PortList as $value) { ?>
											<option class="<?= $value['Port_CD'] ?>"><?= $value['port']?></option>
										<?php	} ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>							
					</div>
				</div> 
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
					<button id='btSave' class="btn btn-dark btn-block" style="max-width: 10rem; margin-left: auto; margin-right: auto;">NHẬP</button>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
					<button id='btdelete' class="btn btn-dark btn-block" style="max-width: 10rem; margin-left: auto; margin-right: auto;">XÓA</button>
				</div>
				<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="row form-group">
								<label class="col-2 col-form-label">Lat</label>
								<div class="col-4">
									<input id="cusID" class="form-control form-control-sm" placeholder="" type="text">
								</div>
								<label class="col-2 col-form-label">Long</label>
								<div class="col-4">
									<input id="cusID" class="form-control form-control-sm" placeholder="" type="text">
								</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>	
					</div>
				</div> -->
				<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="row form-group">
								<label class="col-2 col-form-label">Lúc</label>
								<div class="col-10">
									<input id="cusID" class="form-control form-control-sm" placeholder="" type="text">
								</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"></div>	
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>

<!-- /$('#chooseYard option:selected').attr('id') -->
<script type="text/javascript">
	$(document).ready(function () {
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
	});

	$("#dtpATB, #dtpATD").datetimepicker({
			controlType: 'select',
			oneLine: true,
			dateFormat: 'yy-mm-dd',
			timeFormat: 'HH:mm:00',
			timeInput: true,
			onSelect: function () {
				/* Do nothing */
			}	
	});
//tbBargeName cbNam tbChuyen dtpATB dtpATD cbLastPort cbNextPort
// BargeKey
// BargeID
// BargeYear
// BargeVoy
// ATB
// ATD
// LastPort
// NextPort
	$('#btdelete').click(function(){
            	var dataSend = {
            	    BargeID: $('#tbBargeID').val(),
            	    BargeYear: $('#cbNam').val(),
            	    BargeVoy: $('#tbChuyen').val(),
            	};
            	$.ajax({
            	    type: 'POST',
            	    dataType: 'json',
            	    data: dataSend,
            	    url: '<?= site_url(md5('CVoyage_Info').'/'.md5('cDeleteBarge_Schedule'));?>',
            	    success: function(dataGet){
            	        if (dataGet['iStatus'] == 'Success'){
            	            toastr['success']('Xóa thành công chuyến.');
            	            cleaForm();
            	        }
            	        else {
            	            toastr['error'](dataGet['iMess']);
            	        };
						
            	    },
            	    error: function(dataGet){
            	        toastr['error']('Phát sinh lỗi! Xem Log');
            	        console.log(dataGet);
            	        return;
            	    }
            	});
		});
	$('#btSave').click(function(){
			console.log('save');
			if (!validateData())
			{
				return;
			} 
            	// var iChzG = $('.cboCHZ_GROUP > option:selected').attr('class');
            	// var iContC = $('.cboContCondition > option:selected').attr('class');
				//console.log($('#dtpRegistryDate').val());
            	var dataSend = {
            	    BargeID: $('#tbBargeID').val(),
            	    BargeYear: $('#cbNam').val(),
            	    BargeVoy: $('#tbChuyen').val(),
            	    ATB: $('#dtpATB').val(),
            	    ATD: $('#dtpATD').val(),
            	    LastPort: $('#cbLastPort').val().split(':')[0],
					NextPort: $('#cbNextPort').val().split(':')[0]
            	};
            	$.ajax({
            	    type: 'POST',
            	    dataType: 'json',
            	    data: dataSend,
            	    url: '<?= site_url(md5('CVoyage_Info').'/'.md5('cSaveBarge_Schedule'));?>',
            	    success: function(dataGet){
            	        if (dataGet['iStatus'] == 'Success'){
            	            toastr['success'](dataGet['iMess']);
            	            cleaForm();
            	        }
            	        else {
            	            toastr['error'](dataGet['iMess']);
            	        };
						rSalan='';
            	    },
            	    error: function(dataGet){
            	        toastr['error']('Phát sinh lỗi! Xem Log');
            	        console.log(dataGet);
						rSalan='';
            	        return;
            	    }
            	});
		});
		$('#tbBargeID').on('change', function(){
			
			var dataSend = {
				BargeID: $('#tbBargeID').val()
			};
			$.ajax({ 
				data: dataSend,
                dataType: 'json',
                type: 'POST',
                url: '<?= site_url(md5('CVoyage_Info').'/'.md5('cLoadDataBarge'));?>',
                success: function(dataGet){
                	if (dataGet.iStatus == 'Success') { 
                		// $('#cbo_Tier_New').html('<option disabled selected>-TIER-</option>')
                		// var fillCBO = '';
                		// for(var i=0;i < dataGet.TIER.length; i++){
                		// 	fillCBO += '<option>' + dataGet.TIER[i].cTier + '</option>';
                		// };
                		// $('#cbo_Tier_New').append(fillCBO);
						//console.log(dataGet);
						$('#tbBargeName').val(dataGet.BargeName.BargeName);
                	}
                	else {
                		toastr['error'](dataGet.iMess);
                	};
                },
                error: function(dataError){
					console.log(dataError);
				}	
			})
		});
		$('#tbChuyen').on('keypress', function(e){
            //console.log(e.keyCode);
			if(e.keyCode!=13) return;
             var dataSend = {
				BargeID: $('#tbBargeID').val(),
				BargeYear:$('#cbNam').val(),
				BargeVoy:$('#tbChuyen').val()
			};
			$.ajax({ 
				data: dataSend,
                dataType: 'json',
                type: 'POST',
                url: '<?= site_url(md5('CVoyage_Info').'/'.md5('cLoadDataBarge_Schedule'));?>',
                success: function(dataGet){
					// console.log(dataGet);
					// return;
                	if (dataGet.iStatus == 'Success') { 
						if(!dataGet.Barge_Schedule)
						{
							toastr['success']('Không tìm thấy dữ liệu');
							return;
						}
						// ATB,ATD,LastPort,NextPort
						console.log(dataGet.Barge_Schedule.LastPort);
						$('#dtpATB').val(dataGet.Barge_Schedule.ATB);
						$('#dtpATD').val(dataGet.Barge_Schedule.ATD);
						// $('#cbLastPort').val(dataGet.Barge_Schedule.LastPort);
						$('#cbLastPort .'+dataGet.Barge_Schedule.LastPort).prop('selected',true);
						// $('#cbNextPort').val(dataGet.Barge_Schedule.NextPort);
						$('#cbNextPort .'+dataGet.Barge_Schedule.NextPort).prop('selected',true);
						toastr['success']('Done.');
                	}
                	else {
                		toastr['error'](dataGet.iMess);
                	};
                },
                error: function(dataError){
					console.log(dataError);
					}	
				})
            });
		
//#region  function
		function validateData(){
			if(!$('#tbBargeID').val()) {
                toastr['error']("Vui lòng chọn mã sà lan!");
                $('#tbBargeID').focus();
            	return false;
			}
			if(!$('#cbNam').val()) {
                toastr['error']("Vui lòng chọn năm!");
                $('#tbTonnage').focus();
            	return false;
			}
			if(!$('#tbChuyen').val()) {
                toastr['error']("Vui lòng nhập chuyến!");
                $('#tbMaxBay').focus();
            	return false;
			}
			console.log('vv');
			return true;
		};
		////cbBargeID cbNam tbChuyen dtpATB dtpATD cbLastPort cbNextPort
		function cleaForm(){
				$('#tbBargeID').val('');
				//$('#cbLastPort').val(dataGet.Barge_Schedule.LastPort);
				$('#tbBargeName').val('');
				//$('#cbNam').val('');
				$('#tbChuyen').val('');
				$('#dtpATB').val('');
				$('#dtpATD').val('');
				$('#cbLastPort').val('');
				$('#cbNextPort').val('');
		};
//#endregion


</script>
<script src="<?=base_url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>