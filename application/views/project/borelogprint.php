<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('btable/style.css'); ?>"/>
</head>

<body>
<button id="printPageButton" onClick="window.print();">Print</button>
<table width="100%" class="titles">
	<tr>
		<td width="40%"><p class="pname">PROJECT NAME</p>
	      	<p class="title"><?php echo $bore->project_name; ?></p>
			<p class="barcode"><img src="<?php echo site_url();?>/projects/generate/<?php echo $bore->project_CODE.''.$bore->borelog_no;?>"></p>
		  </td>
		  <td width="20%" align="center" valign="top"><strong style="font-family: 'SF UI Display Semibold';font-weight: bold; font-size: 36px;">BORELOG</strong></td>
		  <td width="40%" align="right" valign="top"><img src="<?php echo base_url('btable/LOGO-02.png'); ?>" class="logo" alt=""/></td>
	</tr>
</table>
<table width="100%" height="1171" border="1" style="font-family: 'SF UI Display Light'">
  <tbody>
    <tr>
      <td width="229" height="22">RIG NO :</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_rigno; ?></td>
      <td width="124">PILE GROUP</td>
      <td width="109" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_pilegroup; ?></td>
      <td width="90">No:</td>
      <td colspan="2" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_no; ?></td>
    </tr>
    <tr>
      <td height="22">PILE NO :</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_pileno; ?></td>
      <td>OPERATOR NAME </td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_operator_name;?></td>
      <td>DATE:</td>
      <td colspan="2" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date('d-m-Y',strtotime($bore->created_at)); ?></td>
    </tr>
    <tr>
      <td height="22">PILE DIAMETER (mm)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_diameters; ?></td>
      <td colspan="1">FORMAN </td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->firstname.'  '.$bore->lastname; ?></td>
      <td>WEATHER</td>
      <td colspan="2" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_weather; ?></td>
    </tr>
    <tr>
      <td height="22" align="center" style="font-family: 'SF UI Display Medium'">INSTALLING</td>
      <td width="112" align="center">DATE</td>
      <td width="90" align="center">START TIME</td>
      <td width="87" align="center">FINISH TIME</td>
      <td colspan="5" rowspan="23" valign="top">
		<table width="100%" border="1">
        <tbody>
          <tr>
            <td width="15%" align="center">Meters</td>
            <td width="85%" align="center">Soil Layers / Rock</td>
          </tr>
          <?php
          foreach($soils as $soil) { ?>
          <tr class="soil_description">
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $soil->soil_meters; ?></td>
            <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $soil->soil_remark; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      	</table></td>
    </tr>
    <tr>
      <td height="22">1-Casing</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date('d-m-Y', strtotime($bore->borelog_casing_date)); ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($bore->borelog_casing_start)); ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($bore->borelog_casing_finish)); ?></td>
    </tr>
    <tr>
      <td height="22">2-Boring</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("d-m-Y",strtotime($bore->borelog_boring_date)); ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($bore->borelog_boring_start)); ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($bore->borelog_boring_finish)); ?></td>
    </tr>
    <tr>
      <td height="22">3-Steel cage &amp; sonic pipes</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("d-m-Y",strtotime($bore->borelog_steel_sonic_pipes_date)); ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($bore->borelog_steel_sonic_pipes_start)); ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($bore->borelog_steel_sonic_pipes_finish)); ?></td>
    </tr>
    <tr>
      <td height="22">4-Concreting</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("d-m-Y",strtotime($bore->borelog_concrete_date)); ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($bore->borelog_concrete_start)); ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($bore->borelog_concrete_finish)); ?></td>
    </tr>
    <tr>
      <td height="22">5-Existing Ground Level (GL) (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_e_ground_level; ?></td>
    </tr>
    <tr>
      <td height="22">6-Top of Casing Level (TOC) (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_toc_casing_level; ?></td>
    </tr>
    <tr>
      <td height="22">7-Length of Casing (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_leng_casing; ?></td>
    </tr>
    <tr>
      <td height="22">8-Cut-off Level_Design (COL) (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_cut_off_level_design; ?></td>
    </tr>
    <tr>
      <td height="22">9-Design_Depth (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_design_depth ?></td>
    </tr>
    <tr>
      <td height="22">10-Depth from Casing Level (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_depth_casing_level; ?></td>
    </tr>
    <tr>
      <td height="22">11-Depth from Existing Ground Level (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_depth_egl; ?></td>
    </tr>
    <tr>
      <td height="22">12-Depth Soil Boring Actual from ±0.00  (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_depth_soil_ba; ?></td>
    </tr>
    <tr>
      <td height="22">13-Rock Socking Length (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_rock_length; ?></td>
    </tr>
    <tr>
      <td height="22">14-Concreting Method</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_concrete_method; ?></td>
    </tr>
    <tr>
      <td height="22">15-Concrete Vol._Theoretical (m³)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_concrete_vt; ?></td>
    </tr>
    <tr>
      <td height="22">16-Concrete Vol._Actual (m³)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_concrete_va; ?></td>
    </tr>
    <tr>
      <td height="22">17-Concrete Grade (MPa)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_concrete_grade_text.' '.$bore->borelog_concrete_grade ; ?> </td>
    </tr>
    <tr>
      <td height="22">18-Concrete Slump (m)</td>
      <td colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_concrete_slump; ?></td>
    </tr>
    <tr>
      <td rowspan="2">19-Main Bar</td>
      <td height="22" colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_main_bar_a ;?></td>
    </tr>
    <tr>
      <td height="22" colspan="3" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_main_bar_b ;?></td>
    </tr>
    <tr>
      <td height="22">20-Stiffiners </td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_stiffener; ?></td>
      <td align="right">Top Lapping</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_Top_Lapping ;?></td>
    </tr>
    <tr>
      <td height="22">21-Links</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_spiral_link; ?></td>
      <td align="right">Lower Lapping</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_Below_Lapping ;?></td>
    </tr>
    <tr>
      <td height="25" colspan="3" align="center" style="font-family: 'SF UI Display Medium'">Bentonie</td>
      <td colspan="3" align="center" style="font-family: 'SF UI Display Medium'">Survey</td>
      <td colspan="3" align="center" style="font-family: 'SF UI Display Medium'">Sonic Logging Tubes</td>
    </tr>
    <tr>
      <td height="22">&nbsp;</td>
      <td align="center">Fresh</td>
      <td align="center">After</td>
      <td>Data of Setting out</td>
      <td>Co-ordinate X (m)</td>
      <td>Co-ordinate Y (m)</td>
      <td>Top Level (m)</td>
      <td width="84" align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_sonic_top_level; ?></td>
      <td width="81">Remark</td>
    </tr>
    <tr>
      <td height="22">Density(g/cm³)</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_b_density_fresh; ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_b_density_after; ?></td>
      <td>Before Install</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_s_co_x_before; ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_s_co_x_after; ?></td>
      <td>Length (m)</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_sonic_length; ?></td>
      <td rowspan="4" valign="top" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_sonic_remark; ?></td>
    </tr>
    <tr>
      <td height="22">Vicosity: (s)</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_b_viscosity_fresh; ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_b_viscosity_after; ?></td>
      <td>After install</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_s_co_y_before; ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_s_co_y_after; ?></td>
      <td>Diameter (mm)</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_sonic_diameter; ?></td>
    </tr>
    <tr>
      <td height="22">pH</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_b_ph_fresh; ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_b_ph_after; ?></td>
      <td>Error X (m)</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_s_co_x_errors; ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_s_co_y_errors; ?></td>
      <td rowspan="2" valign="top">Type</td>
      <td rowspan="2" align="right" valign="top" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_sonic_type; ?></td>
    </tr>
    <tr>
      <td height="22">Sand (%)</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_b_san_fresh; ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_b_san_after; ?></td>
      <td>Error Y (m)</td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_s_co_y_err_xy_x; ?></td>
      <td align="right" style="font-family: 'SF UI Display Semibold'"><?php echo $bore->borelog_s_co_y_err_xy_y; ?></td>
    </tr>
    <tr>
      <td height="22" colspan="9" valign="top">
	   <table width="100%" border="1">
        <tbody>
          <tr>
            <td rowspan="2" align="center">No
            <td rowspan="2" align="center">TRUCK No</td>
            <td width="8%" rowspan="2" align="center">DELIVERY No</td>
            <td width="9%" rowspan="2" align="center">DEPARTURE TIME FROM BATCHING PLANT</td>
            <td width="7%" rowspan="2" align="center">ARRIVAL TIME ON SITE</td>
            <td width="7%" rowspan="2" align="center">START POURING TIME</td>
            <td width="7%" rowspan="2" align="center">FINISH POURING TIME </td>
            <td width="6%" rowspan="2" align="center">SLUMP/ FLOW (mm)</td>
            <td width="7%" rowspan="2" align="center">TRUCK VOLUME (m3)</td>
            <td width="11%" rowspan="2" align="center">ACCUMULATE   QUANTITY    (m3)</td>
            <td height="55" colspan="5" align="center">LENGTH FROM TOP OF CASING</td>
            </tr>
          <tr>
            <td width="6%" align="center">Height of Concrete/ Truck (m)</td>
            <td width="6%" align="center">Top Level Concrete   (m)</td>
            <td width="5%" align="center">To Bottom of  Tremie  (m)</td>
            <td width="6%" align="center">Tremie Length in Concrete (m)</td>
            <td width="5%" align="center">Remark</td>
            </tr>
          <?php 
          $x = 1;
            foreach ($trucks as $truck)  {
          ?>
          <tr>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $x++; ?></td>          
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_no; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_delivery_no; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($truck->truck_time_bp)); ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($truck->truck_time_on_site)); ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($truck->truck_start_pt)); ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo date("h:i a",strtotime($truck->truck_finish_pt)); ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_slump; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_volume; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_aq; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_hct; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_tlc; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_tbt; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_tlic; ?></td>
            <td align="center" style="font-family: 'SF UI Display Semibold'"><?php echo $truck->truck_remark; ?></td>
          </tr>
            <?php } ?>
        </tbody>
      </table></td>
    </tr>
  </tbody>
  <table width="100%" height="53"  class="titles">
	<tr>
		<td width="35%" height="35" valign="top"><p class="signature">Recorded By:</p>
      <p class="engineer">Engineer:</p>
	    <p class="dates">Date: ____/_______/_______</p></td>
		<td width="35%" valign="top"><p class="signature">Recieved By:</p>
      <p class="engineer">Engineer:</p>      
	    <p class="dates">Date: ____/_______/_______</p></td>
		<td width="35%" valign="top"><p class="signature">Approved By:</p>
      <p class="engineer">Consultant:</p>      
	    <p class="dates">Date: ____/_______/_______</p></td>
	</tr>
	</table>
</table>
</body>
</html>