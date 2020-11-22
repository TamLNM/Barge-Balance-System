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
	.child-td{
        border: 1.25px solid #707070;
        min-width: 5.5rem;
        height: 2rem;
        text-align: center;
    }
    table{
    	margin-left: auto;
    	margin-right: auto;
    }
</style>

<div class="row">
	<div class="col-xl-12">
		<div class="ibox collapsible-box">
			<i class="la la-angle-double-up dock-right"></i>
			<div class="ibox-head">
				<div class="ibox-title">CÁC KÉT</div>
				<div class="button-bar-group mr-3">
				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 table-responsive">
					<table style="float: left;">
						<tr>
							<td class="child-td" style="background-color: #489620; color: white;">BW 0.0</td>
						</tr>
						<tr>
							<td class="child-td" style="background-color: #009298; color: white;">FW 0.0</td>
						</tr>
						<tr>
							<td class="child-td" style="background-color: #EC870E; color: white">DO 0.0</td>
						</tr>
						<tr>
							<td class="child-td" style="background-color: #F9F400; color: black">FO 0.0</td>
						</tr>
						<tr>
							<td class="child-td" style="background-color: #E54646; color: white">LO 0.0</td>
						</tr>
						<tr>
							<td class="child-td" style="background-color: #707070; color: white">Sldg 0.0</td>
						</tr>
					</table>

					<table style="border: solid 2px #707070; float: left; margin-left: 2rem;">
						<tr><td class="child-td">BW 0.0</td></tr>
						<tr><td class="child-td">FW 0.0</td></tr>
						<tr><td class="child-td">DO 0.0</td></tr>
						<tr><td class="child-td">FO 0.0</td></tr>
						<tr><td class="child-td">LO 0.0</td></tr>
						<tr><td class="child-td">Sldg 0.0</td></tr>
					</table>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<svg width="100%" height="100%">
					  <path d="M10 30 L10 125 Z L30 20 M10 125 L30 135 M30 135 L30 20 L65 10 L65 150 L30 135 M65 150 L115 150 L115 10 L65 10 M115 10 L165 10 L165 150 L115 150 M165 10 L215 10 L215 150 L165 150 M215 10 L265 10 L265 150 L215 150 M265 10 L315 10 L315 150 L265 150 M315 10 L365 10 L365 150 L315 150 M365 10 L415 10 L415 150 L365 150 M415 10 L465 10 L465 150 L415 150 M465 10 L495 20 L495 135 L465 150 
					  	M495 20 L530 80 L495 135
					   M65 30 L465 30 M65 130 L465 130 M35 18 L35 35 L60 35 L60 11 M35 138 L35 121 L60 121 L60 148" fill="transparent" style="stroke: #848484; stroke-width:2"/>

					  <text x="87" y="25" fill="red" font-weight="bold">1</text>
					  <text x="135" y="25" fill="red" font-weight="bold">4</text>
					  <text x="183" y="25" fill="red" font-weight="bold">7</text>
					  <text x="231" y="25" fill="red" font-weight="bold">10</text>
					  <text x="279" y="25" fill="red" font-weight="bold">13</text>
					  <text x="330" y="25" fill="red" font-weight="bold">16</text>
					  <text x="380" y="25" fill="red" font-weight="bold">19</text>
					  <text x="430" y="25" fill="red" font-weight="bold">22</text>

					  <text x="87" y="85" fill="red" font-weight="bold">2</text>
					  <text x="135" y="85" fill="red" font-weight="bold">5</text>
					  <text x="183" y="85" fill="red" font-weight="bold">8</text>
					  <text x="231" y="85" fill="red" font-weight="bold">11</text>
					  <text x="279" y="85" fill="red" font-weight="bold">14</text>
					  <text x="330" y="85" fill="red" font-weight="bold">17</text>
					  <text x="380" y="85" fill="red" font-weight="bold" font-weight="bold">20</text>
					  <text x="430" y="85" fill="red" font-weight="bold">23</text>

					  <text x="87" y="145" fill="red" font-weight="bold">0</text>
					  <text x="135" y="145" fill="red" font-weight="bold">3</text>
					  <text x="183" y="145" fill="red" font-weight="bold">6</text>
					  <text x="231" y="145" fill="red" font-weight="bold">9</text>
					  <text x="279" y="145" fill="red" font-weight="bold">12</text>
					  <text x="330" y="145" fill="red" font-weight="bold">15</text>
					  <text x="380" y="145" fill="red" font-weight="bold">18</text>
					  <text x="430" y="145" fill="red" font-weight="bold">21</text>

					  <text x="12" y="85" fill="red" font-weight="bold">25</text>
					  <text x="502" y="85" fill="red" font-weight="bold">24</text>

					  <text x="40" y="32" fill="red" font-weight="bold">27</text>
					  <text x="40" y="136" fill="red" font-weight="bold">28</text>
					</svg>

				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
					<table id="contenttable" class="table table-striped display nowrap" cellspacing="0" style="width: 100%">
						<thead>
						<tr>
							<th class="editor-cancel" col-name="">No</th>
							<th col-name="">TankName</th>
							<th col-name="">DTH</th>
							<th col-name="">VOL</th>
							<th col-name="">SG</th>
							<th col-name="">Vol%</th>
							<th col-name="">WEI.</th>
							<th col-name="">XG</th>
							<th col-name="">YG</th>
							<th col-name="">ZG</th>
							<th col-name="">IT</th>
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
			if (parentMenuList[i]['MenuID'] == 'TankContainer'){
				$('#' + parentMenuList[i]['MenuID']).addClass('active');
			}
			else{
				$('#' + parentMenuList[i]['MenuID']).removeClass();
			}
		}

		/* Initial for datatables */
		var tbl 	 = $("#contenttable"),
			_columns = ["No", "TankName", "DTH", "VOL", "SG", "x", "WEI", "XG", "YG", "ZG", "IT"];

		var x = tbl.newDataTable({
			scrollY: '45vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _columns.indexOf('No')},		
				{ className: "text-center", targets: _columns.getIndexs(["TankName", "DTH", "VOL", "SG", "x", "WEI", "XG", "YG", "ZG", "IT"])},
			],
			order: [[ _columns.indexOf('No'), 'asc' ]],
			paging: false,
            keys:true,
            autoFill: {
                focus: 'focus'
            },
            select: true,
            rowReorder: false,
            arrayColumns: _columns,
		});
	});
</script>
<script src="<?=base_url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>