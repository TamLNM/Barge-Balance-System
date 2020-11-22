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
	.button-center{
		margin-left: auto;
		margin-right: auto;
	}
	.contenttable_format{
        border-collapse: separate;
        border-spacing: 3px!important;
        table-layout: fixed; 
    }
    .child-cell{
        border: 1.25px solid #207b99;
        /*border-radius: 10px;*/
        height: 3rem;
        min-width: 2.75rem;
        width: 5rem;
        background-color: #ffffff;
    }
    .table-number{
       	height: 3rem;
        min-width: 2.75rem;
        width: 5rem;
    	text-align: center;
    	font-weight: bold
    }
    div.scroll
	{
		width:50%;
		overflow: scroll;
		float: left;
	}
</style>

<div class="row">
	<div class="col-xl-12">
		<div class="ibox collapsible-box">
			<i class="la la-angle-double-up dock-right"></i>
			<div class="ibox-head">
				<div class="ibox-title">SƠ ĐỒ TỔNG THỂ</div>
				<div class="button-bar-group mr-3">
					<button id="addrow" class="btn btn-outline-success btn-sm mr-1" 
										title="Tìm ID">
						<span class="btn-icon"><i class="fa fa-search"></i>Tìm ID</span>
					</button>

					<button id="delete" class="btn btn-outline-dark btn-sm mr-1" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="dM 0.79">dM 0.79
					</button>

					<button id="delete" class="btn btn-outline-dark btn-sm mr-1" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="dM 0.79">dA 1.04
					</button>

					<button id="delete" class="btn btn-outline-dark btn-sm mr-1" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="Chúi 0.5">Chúi 0.5
					</button>

					<button id="delete" class="btn btn-outline-dark btn-sm mr-1" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="Nghiêng 0.0">Nghiêng 0.0
					</button>

					<button id="delete" class="btn btn-outline-dark btn-sm mr-1" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">GM 16.57
					</button>
				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div class="col-10 table-responsive scroll">
					<?php $list = array(13, 9, 5, 1, 15, 11, 7, 3, 14, 10, 6, 2, 12, 8, 4); ?>
					<?php $index = 0; ?>
					<?php $bayIdx = 0; ?>
					<?php for ($i = 0; $i < 3; $i++){?>
					<div class="row">
						<?php for ($j = 0; $j < 4; $j++){ ?>
						<?php $rIdx = 4; ?>
						<div class="col-3 mb-3">
							<table class="contenttable_format">
								<tr>
									<td class="table-number"></td>
									<td class="table-number" colspan="4" style="text-align: left!important;">
										Bay
										<?php echo(" "); ?><?php if (2*$bayIdx+1 < 10) echo ('0') ?><?=2*$bayIdx+1;?>(<?php if (2*$bayIdx+2 < 10) echo ('0') ?><?=2*($bayIdx++)+2;?>)
									</td>
								</tr>
								<tr>
									<td class="table-number"><?=$rIdx--;?></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
								</tr>
								<tr>
									<td class="table-number"><?=$rIdx--;?></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
								</tr>
								<tr>
									<td class="table-number"><?=$rIdx--;?></td>									
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
								</tr>
								<tr>
									<td class="table-number"><?=$rIdx--;?></td>									
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
								</tr>
								<tr>
									<?php $cIdx = 1; ?>
									<td class="table-number"></td>					
									<td class="table-number"><?php if ($cIdx < 10) echo('0'); ?><?=$cIdx++;?></td>	
									<td class="table-number"><?php if ($cIdx < 10) echo('0'); ?><?=$cIdx++;?></td>				
									<td class="table-number"><?php if ($cIdx < 10) echo('0'); ?><?=$cIdx++;?></td>				
									<td class="table-number"><?php if ($cIdx < 10) echo('0'); ?><?=$cIdx++;?></td>			
								</tr>
							</table>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
					<div class="row">
						<?php for ($i = 0; $i < 3; $i++){ ?>
						<?php $rIdx = 4; ?>							
						<div class="col-4">
							<table class="contenttable_format">
								<tr>
									<td class="table-number"></td>
									<td class="table-number" colspan="4" style="text-align: left!important;">Bay<?php echo(" "); ?><?=2*$bayIdx+1;?>(<?=2*($bayIdx++)+2;?>)</td>
								</tr>
								<tr>
									<td class="table-number"><?=$rIdx--;?></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
								</tr>
								<tr>
									<td class="table-number"><?=$rIdx--;?></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
								</tr>
								<tr>
									<td class="table-number"><?=$rIdx--;?></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
								</tr>
								<tr>
									<td class="table-number"><?=$rIdx--;?></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
									<td class="child-cell"></td>
								</tr>
								<tr>
									<?php $cIdx = 1; ?>
									<td class="table-number"></td>					
									<td class="table-number"><?php if ($cIdx < 10) echo('0'); ?><?=$cIdx++;?></td>	
									<td class="table-number"><?php if ($cIdx < 10) echo('0'); ?><?=$cIdx++;?></td>				
									<td class="table-number"><?php if ($cIdx < 10) echo('0'); ?><?=$cIdx++;?></td>				
									<td class="table-number"><?php if ($cIdx < 10) echo('0'); ?><?=$cIdx++;?></td>								
								</tr>
							</table>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-2">
					<div class="row">
 						<button id="delete" class="btn btn-dark btn-sm mr-1 button-center col-12" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">DỠ BỎ CONTAINER
						</button>
					</div>
					<div class="row">
						<label class="col-6 col-form-label text-center" style="color: red; font-weight: bold; font-size: 1rem; padding-top: 0.75rem;">Container</label>

						<button id="delete" class="btn btn-dark btn-sm button-center col-lg-6 col-md-6 mt-2" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">THÊM CONT
						</button>
					</div>
					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-2" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">CAIU22516031/6.89/GP/
						</button>
					</div>
					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-2" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">FCIU51106588/8.33/GP/ 
						</button>
					</div>
					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-2" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">NYKU99101035/5.44/GP/
						</button>
					</div>
					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-2" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">OOLU01146522/15.39/GP/
						</button>
					</div>
					<!--------------------------------------------------------------------------------->
					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-3" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">APHU66475621/18.55/HC/
						</button>
					</div>

					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-3" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">CAIU40975911/25.32/GP/
						</button>
					</div>

					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-3" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">CCLU48456301/21.39/GP/
						</button>
					</div>

					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-3" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">CSNU62916391/7.88/HC
						</button>
					</div>

					<div class="row">
						<button id="delete" class="btn btn-info btn-sm mr-1 button-center col-12 mt-3" 
										data-loading-text="<i class='la la-spinner spinner'></i>Xóa dòng"
										title="GM 16.57">DRYU41196532/18.95/GP/
						</button>
					</div>
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
			if (parentMenuList[i]['MenuID'] == 'Results'){
				$('#' + parentMenuList[i]['MenuID']).addClass('active');
			}
			else{
				$('#' + parentMenuList[i]['MenuID']).removeClass();
			}
		}

		/* Initial for datatables */
		var tbl 	 = $("#contenttable"),
			_columns = ["STT", "rowguid", "B", "R", "T", "Id", "KL", "ISO", "IMO", "Type", "Seal0", "Seal1", "Bill", "Seg"];

		var x = tbl.newDataTable({
			scrollY: '45vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _columns.indexOf('STT')},		
				{ className: "text-center", targets: _columns.getIndexs(["B", "R", "T", "Id", "KL", "ISO", "IMO", "Type", "Seal0", "Seal1", "Bill", "Seg"])},
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
	});
</script>
<script src="<?=base_url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>