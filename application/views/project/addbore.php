<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add Bore logs</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Card</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                
                <div class="card card-primary">

                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Project Name : <?php print $result->project_name;?></strong><br>
                          Project CODE : <?php print $result->project_CODE;?><br>
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Borelog Date:</strong><br>
                          <?php print date('Y-m-d',now()); ?><br><br>
                        </address>
                      </div>
                    </div>
<form action="<?php print site_url('ProjectBorelogSave'); ?>" method="post">                    
 <table width="100%" height="1018" border="1">
  <tbody>
    <tr>
      <td width="172" height="22">RIG NO</td>
      <input type="hidden" name="borelog_ref_pid" value="<?php print $result->id;?>">
      
      <td colspan="3"><input type="text" class="form-control" name="borelog_rigno" required></td>
      <td width="146">PILE GROUP</td>
      <td width="121"><input type="text" class="form-control" name="borelog_pilegroup" required></td>
      <td width="129">No:</td>
      <td colspan="2"><input type="text" class="form-control" name="borelog_no" required></td>
    </tr>
    <tr>
      <td height="22">PILE NO</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_pileno" required></td>
      <td>OPERATOR NAME </td>
      <td>
      <input type="text" class="form-control" name="operator_name" required></td>
      <td>DATE:</td>
      <td colspan="2"><input type="text" name="borelog_date" class="form-control" value="<?php print date('d-m-Y',now()); ?>"></td>
    </tr>
    <tr>
      <td height="22">PILE DIAMETER (mm)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_pile_diameter" required></td>
      <td colspan="1">FORMAN </td>
      <td>
        <select class="form-control" name="borelog_ref_fid">
          <?php
            foreach($forman as $f)
            echo '<option value="'.$f->id.'">'.$f->firstname.' '.$f->lastname.'</option>';
          ?>
        </select>
      </td>
    
      <td>WEATHER</td>
      <td colspan="2">
        <select class="form-control" id="sel1" name="borelog_weather">
          <option value="SUNNY">SUNNY</option>
          <option value="CLOUDY">CLOUDY</option>
          <option value="RAINING">RAINING</option>
        </select>
      </td>
    </tr>
    <tr>
      <td height="22">INSTALLING</td>
      <td width="119" align="center">DATE</td>
      <td width="105" align="center">START TIME</td>
      <td width="112" align="center">FINISH TIME</td>
      <td colspan="5" rowspan="23" valign="top">
		<table width="100%" border="1" id="SodiTable">
        <tbody>
          <tr>
            <td width="26%">Meters</td>
            <td width="74%">Remark</td>
            <td>
              <button type="button" onclick="tableSoi()">+</button>
              <button type="button" onclick="delTableSoi()">-</button>
            </td>
          </tr>
        </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td height="22">1-Casing</td>
      <td><input type="date" class="form-control" name="borelog_casing_date"></td>
      <td><input type="time" class="form-control" name="borelog_casing_start"></td>
      <td><input type="time" class="form-control" name="borelog_casing_finish"></td>
    </tr>
    <tr>
      <td height="22">2-Boring</td>
      <td><input type="date" class="form-control" name="borelog_boring_date"></td>
      <td><input type="time" class="form-control" name="borelog_boring_start"></td>
      <td><input type="time" class="form-control" name="borelog_boring_finish"></td>
    </tr>
    <tr>
      <td height="22">3-Steel cage &amp; sonic pipes</td>
      <td><input type="date" class="form-control" name="borelog_steel_sonic_pipes_date"></td>
      <td><input type="time" class="form-control" name="borelog_steel_sonic_pipes_start"></td>
      <td><input type="time" class="form-control" name="borelog_steel_sonic_pipes_finish"></td>
    </tr>
    <tr>
      <td height="22">4-Concreting</td>
      <td><input type="date" class="form-control" name="borelog_concrete_date"></td>
      <td><input type="time" class="form-control" name="borelog_concrete_start"></td>
      <td><input type="time" class="form-control" name="borelog_concrete_finish"></td>
    </tr>
    <tr>
      <td height="22">5-Existing Ground Level (GL) (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_e_ground_level" required></td>
    </tr>
    <tr>
      <td height="22">6-Top of Casing Level (TOC) (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_toc_casing_level" required></td>
    </tr>
    <tr>
      <td height="22">7-Length of Casing (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_leng_casing" required></td>
    </tr>
    <tr>
      <td height="22">8-Cut-off Level_Design (COL) (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_cut_off_level_design" required></td>
    </tr>
    <tr>
      <td height="22">9-Design_Depth (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_design_depth" required></td>
    </tr>
    <tr>
      <td height="22">10-Depth from Casing Level (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_depth_casing_level" required></td>
    </tr>
    <tr>
      <td height="22">11-Depth from Existing Ground Level (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_depth_egl" required></td>
    </tr>
    <tr>
      <td height="22">12-Depth Soil Boring Actual from ±0.00  (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_depth_soil_ba" required></td>
    </tr>
    <tr>
      <td height="22">13-Rock Socking Length (m)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_rock_length" required></td>
    </tr>
    <tr>
      <td height="22">14-Concreting Method</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_concrete_method" required></td>
    </tr>
    <tr>
      <td height="22">15-Concrete Vol._Theoretical (m³)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_concrete_vt" required></td>
    </tr>
    <tr>
      <td height="22">16-Concrete Vol._Actual (m³)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_concrete_va" required></td>
    </tr>
    <tr>
      <td height="22">17-Concrete Grade (MPa)</td>
      <td colspan="3">
        <select class="form-control" id="sel1" name="borelog_concrete_grade_text">
          <option value="Cylinder">Cylinder</option>
          <option value="Cube">Cube</option>
        </select>
        <input type="text" class="form-control" name="borelog_concrete_grade" required>
      </td>
    </tr>
    <tr>
      <td height="22">18-Concrete Slump (cm)</td>
      <td colspan="3"><input type="text" class="form-control" name="borelog_concrete_slump" required> </td>
    </tr>
    <tr>
      <td rowspan="2">19-Main Bar</td>
      <td height="22" colspan="3"><input type="text" class="form-control" name="borelog_main_bar_a" required></td>
    </tr>
    <tr>
      <td height="22" colspan="3"><input type="text" class="form-control" name="borelog_main_bar_b" required></td>
    </tr>
    <tr>
      <td height="22">20-Stiffiners </td>
      <td><input type="text" class="form-control" name="borelog_stiffener" required></td>
      <td>Top Lapping</td>
      <td><input type="text" class="form-control" name="borelog_top_lapping" required></td>
    </tr>
    <tr>
      <td height="22">21-Links</td>
      <td><input type="text" class="form-control" name="borelog_spiral_link" required></td>
      <td>Lower Lapping</td>
      <td><input type="text" class="form-control" name="borelog_below_lapping" required></td>
    </tr>
    <tr>
      <td height="46" colspan="3" align="center">Bentonie</td>
      <td colspan="3" align="center">Survey</td>
      <td colspan="3" align="center">Sonic Logging Tubes</td>
    </tr>
    <tr>
      <td height="22"></td>
      <td>Fresh</td>
      <td>After</td>
      <td>Data of Setting out</td>
      <td>Co-ordinate X (m)</td>
      <td>Co-ordinate Y (m)</td>
      <td>Top Level (m)</td>
      <td width="79"><input type="text" class="form-control" name="borelog_sonic_top_level"></td>
      <td width="85">Remark</td>
    </tr>
    <tr>
      <td height="22">Density(g/cm³)</td>
      <td><input type="text" class="form-control" name="borelog_b_density_fresh"></td>
      <td><input type="text" class="form-control" name="borelog_b_density_after"></td>
      <td>Before Install</td>
      <td><input type="text" class="form-control" name="borelog_s_co_x_before"></td>
      <td><input type="text" class="form-control" name="borelog_s_co_y_before"></td>
      <td>Length (m)</td>
      <td><input type="text" class="form-control" name="borelog_sonic_length"></td>
      <td rowspan="4">
        <textarea name="borelog_sonic_remark" id="" cols="10%" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td height="22">Vicosity: (s)</td>
      <td><input type="text" class="form-control" name="borelog_b_viscosity_fresh"></td>
      <td><input type="text" class="form-control" name="borelog_b_viscosity_after"></td>
      <td>After install</td>
      <td><input type="text" class="form-control" name="borelog_s_co_x_after"></td>
      <td><input type="text" class="form-control" name="borelog_s_co_y_after"></td>
      <td>Diameter (mm)</td>
      <td><input type="text" class="form-control" name="borelog_sonic_diameter"></td>
    </tr>
    <tr>
      <td height="22">PH</td>
      <td><input type="text" class="form-control" name="borelog_b_ph_fresh"></td>
      <td><input type="text" class="form-control" name="borelog_b_ph_after"></td>
      <td>Error X (m)</td>
      <td><input type="text" class="form-control" name="borelog_s_co_x_errors"></td>
      <td><input type="text" class="form-control" name="borelog_s_co_y_errors"></td>
      <td>Type</td>
      <td>
        <select class="form-control" name="borelog_sonic_type">
          <option value="Steel">Steel</option>
          <option value="PVC">PVC</option>
        </select>
      </td>
    </tr>
    <tr>
      <td height="22">sand (%)</td>
      <td><input type="text" class="form-control" name="borelog_b_san_fresh"></td>
      <td><input type="text" class="form-control" name="borelog_b_san_after"></td>
      <td>Error Y (m)</td>
      <td><input type="text" class="form-control" name="borelog_s_co_y_err_xy_x"></td>
      <td><input type="text" class="form-control" name="borelog_s_co_y_err_xy_y"></td>
      <td></td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td height="22" colspan="9" valign="top">
	   <table width="100%" border="1" id="myTable">
        <tbody>
          <tr>
            <td rowspan="2" align="center">
				<button type="button" class="btn btn-success" onclick="myCreateFunction()">+</button>
				<button type="button" class="btn btn-danger" onclick="myDeleteFunction()">-</button>
			</td>
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
          
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
<button class="btn btn-success">Save</button>
</form>
                  </div>
                </div>
                
            
              </div>
            </div>
          </div>
        </section>
      </div>

      <script>
        function myCreateFunction() {
              var table = document.getElementById("myTable");
              var row = table.insertRow(2);
              var cell15 = row.insertCell(0);
              var cell2 = row.insertCell(1);
              var cell3 = row.insertCell(2);
              var cell4 = row.insertCell(3);
              var cell5 = row.insertCell(4);
              var cell6 = row.insertCell(5);
              var cell7 = row.insertCell(6);
              var cell8 = row.insertCell(7);
              var cell9 = row.insertCell(8);
              var cell10 = row.insertCell(9);
              var cell11 = row.insertCell(10);
              var cell12 = row.insertCell(11);
              var cell13 = row.insertCell(12);
              var cell14 = row.insertCell(13);
              var cell1 = row.insertCell(14);
          
              cell1.innerHTML = "<input type='text' name='truck_remark[]' style=\"width:100%;\">";
              cell2.innerHTML = "<input type='text' name='truck_no[]' style=\"width:100%;\">";
              cell3.innerHTML = "<input type='text' name='truck_delivery_no[]' style=\"width:100%;\">";
              cell4.innerHTML = "<input type='time' name='truck_time_bp[]' style=\"width:100%;\">";
              cell5.innerHTML = "<input type='time' name='truck_time_on_site[]' style=\"width:100%;\">";
              cell6.innerHTML = "<input type='time' name='truck_start_pt[]' style=\"width:100%;\">";
              cell7.innerHTML = "<input type='time' name='truck_finish_pt[]' style=\"width:100%;\">";
              cell8.innerHTML = "<input type='text' name='truck_slump[]' style=\"width:100%;\">";
              cell9.innerHTML = "<input type='text' name='truck_volume[]' style=\"width:100%;\">";
              cell10.innerHTML = "<input type='text' name='truck_aq[]' style=\"width:100%;\">";
              cell11.innerHTML = "<input tyep='text' name='truck_hct[]' style=\"width:100%;\">";
              cell12.innerHTML = "<input tyep='text' name='truck_tlc[]' style=\"width:100%;\">";
              cell13.innerHTML = "<input type='text' name='truck_tbt[]' style=\"width:100%;\">";
              cell14.innerHTML = "<input type='text' name='truck_tlic[]' style=\"width:100%;\">";
              cell15.innerHTML = "";
            }

            function myDeleteFunction() {
              document.getElementById("myTable").deleteRow(2);
            }

            function tableSoi() {
              var table = document.getElementById("SodiTable")
              var row = table.insertRow(1);
              var cell1 = row.insertCell(0);
              var cell2 = row.insertCell(1);

              cell1.innerHTML = "<input type='text' name='soil_meters[]' style=\"width:100%;\">";
              cell2.innerHTML = "<input type='text' name='soil_remark[]' style=\"width:100%;\">";
            }
            function delTableSoi() {
              document.getElementById("SodiTable").deleteRow(1)
            }
    </script>
<?php $this->load->view('_partials/footer'); ?>