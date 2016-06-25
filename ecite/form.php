<?php
   session_start();
   include("parts/top.php");
?>
<script>
        $(document).ready(function(){
                window.onbeforeunload = function(e) {
                      return 'If you leave before submitting, your content will be lost!';
              };
        });
</script>

<div class="container">
  <form class="form-horizontal" role="form" id="applicationform" action="process.php" method="post" enctype="multipart/form-data">
  <p><strong>Note:</strong> Please fill out <strong>all</strong> the sections/fields. If you have any question or additional requirements, please contact us: <strong>ecite@earthcube.org</strong></p>
  <p>* You will receive a confirmation email while we are processing your application</p>
  <!--overview-->
  <div class="panel-group" id="accordion">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#overview" id="overview-title"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Overview</a>
        </h4>
      </div>
      <div id="overview" class="panel-collapse collapse in">
			<br/>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="pro_name">Project name:</label>
			  <div class="col-sm-10">
				<input type="text" class="form-control" id="pro_name" name="pro_name" required placeholder="Enter project name">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="role">Project participant role(s):</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" id="role" name="role" required placeholder="Enter role(s) (e.g. Sarah - project manager; Peterson - priviledge user...)">
				<span class="help-block" id="hint_role">
					Please list your names and relevant roles (project manager*, priviledge user or end user). Your account(s) will be created based on the role(s) 
				</span>
			  </div>
			</div>
			 <div class="form-group">
                          <label class="control-label col-sm-2" for="contact_name">Contact name:</label>
                          <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact_name" name="contact_name" required placeholder="Enter name">
                          </div>
                        </div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="email">Contact email:</label>
			  <div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" required placeholder="Enter email">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="organizations">Organization(s):</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" id="organizations" name="organizations" required placeholder="Enter applicants' organization(s) (e.g. Sarah - gmu stc center; Peterson - nasa...)">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="pro_description">Project description and purpose:</label>
			  <div class="col-sm-10">
				<textarea rows="4" class="form-control" name="pro_description" required id="pro_description"></textarea>
				<span class="help-block" id="hint_role">
					Please brifely introduce your project and purpose of using this cloud platform.
				</span>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="platform">Platform:</label>
			  <div class="col-sm-10">
				<select class="form-control" name="platform">
					<option>Amazon Web Service</option>
					<option>Eucalyptus</option>
					<option>OpenStack</option>
				</select>
			   </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="usage">System usage:</label>
			  <div class="col-sm-10">
				<select class="form-control" name="usage">
					<option>Web services</option>
					<option>Data analytics</option>
					<option>Modelling</option>
					<option>Others</option>
				</select>
			   </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="ram">RAM size (GB):</label>
			  <div class="col-sm-10">
				<input type="number" class="form-control" name= "ram" name="ram" min="0" data-bind="value:replyNumber" value="0" placeholder="Enter a number. Input 0 if you don't know.">
				<span class="help-block" name="hint_ram">
					The minimum size of RAM you need to depoly your project in a virtual machine (VM). 
				</span>
			  </div>
			</div>
			<!--<div class="form-group">
			  <label class="control-label col-sm-2" for="disk">Disk size (GB):</label>
			  <div class="col-sm-10">
				<input type="number" class="form-control" name="disk" min="0" data-bind="value:replyNumber" value="0" placeholder="Enter a number. Input 0 if you don't know.">
				<span class="help-block" name="hint_disk">
					The minimum size of Disk you need to depoly your project in a virtual machine (VM). 
				</span>
			  </div>
			</div>-->
			<div class="form-group">
			  <label class="control-label col-sm-2" for="dataset">Dataset Size (GB):</label>
			  <div class="col-sm-10">
				<input type="number" class="form-control" name="dataset" min="0" data-bind="value:replyNumber" value="0" placeholder="Enter a number. Input 0 if you don't know.">
				<span class="help-block" name="hint_dataset">
					The total data size in your project. 
				</span>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="nodes"># of nodes/VMs:</label>
			  <div class="col-sm-10">
				<input type="number" class="form-control" name="nodes" min="0" data-bind="value:replyNumber" value="0" placeholder="Enter a number. Input 0 if you don't know.">
				<span class="help-block" name="hint_role">
					The minimum virtual computing requirements you need. 
				</span>
			  </div>
			</div>
			<!--<div class="form-group">
			  <label class="control-label col-sm-2" for="pm"># of physical machines:</label>
			  <div class="col-sm-10">
				<input type="number" class="form-control" name="pm" min="0" data-bind="value:replyNumber" value="0" placeholder="Enter a number. Input 0 if you don't know.">
				<span class="help-block" name="hint_pm">
					The minimum physical machines you may need. 
				</span>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="pm_description">Description for Physical machines:</label>
			  <div class="col-sm-10">
				<textarea rows="4" class="form-control" required  name="pm_description"></textarea>
				<span class="help-block" name="hint_pm">
					If more than one physical machine is needed, please describe the needs for each machine. 
				</span>
			  </div>
			</div>-->
			<div class="form-group">
			  <label class="control-label col-sm-2" for="cpu"># of CPU cores:</label>
			  <div class="col-sm-10">
				<input type="number" class="form-control" name="cpu" min="0" data-bind="value:replyNumber" value="0" placeholder="Enter a number. Input 0 if you don't know.">
				<span class="help-block" name="hint_disk">
					The minimum number of CPU cores for a virtual machine (VM). 
				</span>
			  </div>
			</div>
			<!--<div class="form-group">
			  <label class="control-label col-sm-2" for="subnet">Physical Subnet:</label>
			  <div class="col-sm-10">
				<label class="radio-inline">
				  <input type="radio" name="subnet" value="true" checked="">Yes</input>
				</label>
				<label class="radio-inline">
				  <input type="radio" name="subnet" value="false">No</input>
				</label>
				<span class="help-block" name="hint_subnet">
					Computers that belong to a subnet are addressed with a common, identical, most-significant bit-group in their IP address
				</span>
			   </div>
			</div>-->
			<div class="form-group">
			  <label class="control-label col-sm-2" for="data_type">Data type:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" name="data_type" required placeholder="e.g. weather data, transportation data, population data...">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="data_format">Data format:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" name="data_format" required placeholder="e.g. JSON, XML, HDF4, HDF5...">
			  </div>
			</div>
      </div>
    </div>
	<!--security -->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#security" id="security-title"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Security</a>
        </h4>
      </div>
      <div id="security" class="panel-collapse collapse"><br/>
        <div class="form-group">
			  <label class="control-label col-sm-2" for="access">Access:</label>
			  <div class="col-sm-10">
				<select class="form-control" name="access">
					<option>SSH</option>
					<option>Windows Remote desktop connection</option>
				</select>
				<span class="help-block" name="hint_access">
					How would you and your users like to access your machine?
				</span>
			   </div>
		</div>
		<div class="form-group">
			  <label class="control-label col-sm-2" for="ip">Public IP:</label>
			  <div class="col-sm-10">
				<label class="radio-inline">
				  <input type="radio" name="ip" value="true" checked="">Yes</input>
				</label>
				<label class="radio-inline">
				  <input type="radio" name="ip" value="false">No</input>
				</label>
				<!--<select class="form-control" name="ip">
					<option value="true">Yes</option>
					<option value="false">No</option>
				</select>-->
				<span class="help-block" name="hint_ip">
					Do you need a public IP?
				</span>
			   </div>
		</div>
		<div class="form-group">
			  <label class="control-label col-sm-2" for="cluster">Cluster:</label>
			  <div class="col-sm-10">
				<label class="radio-inline">
				  <input type="radio" name="cluster" value="true" checked="">Yes</input>
				</label>
				<label class="radio-inline">
				  <input type="radio" name="cluster" value="false">No</input>
				</label>
				
				<!--<select class="form-control" name="cluster">
					<option value="true">Yes</option>
					<option value="false">No</option>
				</select>-->
				<span class="help-block" name="hint_cluster">
					Do your virtual machines (VMs) need to be clustered?
				</span>
			   </div>
		</div>
		<div class="form-group">
			  <label class="control-label col-sm-2" for="ports">Ports:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" name="ports" required placeholder="e.g. 80, 8080, 5432 ... or null if you do not need">
				<span class="help-block" name="hint_ports">
					What ports do you want your machine to be open, e.g., for Web service?
				</span>
			  </div>
		</div>
      </div>
    </div>
	<!--Software Stack-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#software" id="software-title"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Software Stack</a>
        </h4>
      </div>
      <div id="software" class="panel-collapse collapse"><br/>
        <div class="form-group">
			<label class="control-label col-sm-2" for="os">Operation system:</label>
			<div class="col-sm-10">
				<select class="form-control" name="os">
					<option>CentOS</option>
					<option>Ubuntu</option>
					<option>Windows</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			  <label class="control-label col-sm-2" for="aws">AWS images:</label>
			  <div class="col-sm-10">
				<label class="radio-inline">
				  <input type="radio" name="aws" value="true" checked="">Yes</input>
				</label>
				<label class="radio-inline">
				  <input type="radio" name="aws" value="false">No</input>
				</label>
				<!--<select class="form-control" name="aws">
					<option value="true">Yes</option>
					<option value="false">No</option>
				</select>-->
				<span class="help-block" name="hint_cluster">
					Do you have AWS Images?
				</span>
			   </div>
		</div>
		<div class="form-group">
			  <label class="control-label col-sm-2" for="software_list">Required software:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" name="software_list" required placeholder="e.g. postgresql, apache...">
				<span class="help-block" name="hint_softwarelist">
					list the software that you need in the image, using ',' to separate names.
				</span>
			  </div>
		</div>
		<div class="form-group">
			  <label class="control-label col-sm-2" for="modules_list">Runtime library list:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" name="modules_list" required placeholder="e.g. JAVA 7, Python...">
				<span class="help-block" name="hint_moduleslist">
					using ',' to separate names in the list
				</span>
			  </div>
		</div>
      </div>
    </div>
	<!--Operations-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#operations" id="operations-title"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Operations</a>
        </h4>
      </div>
      <div id="operations" class="panel-collapse collapse"><br/>
	    <div class="form-group">
			  <label class="control-label col-sm-2" for="startdate">Start time:</label>
			  <div class="col-sm-10">
				<div class="hero-unit">
					<input type="text" placeholder="dd/mm/yyyy" required id="startdate" name="startdate">
				</div>
				<span class="help-block" name="hint_moduleslist">
				When do you want to start using earthCube integration and test environment?
				</span>
			  </div>
			  
		</div>
	    <div class="form-group">
			  <label class="control-label col-sm-2" for="enddate">End time:</label>
			  <div class="col-sm-10">
				<div class="hero-unit">
					<input type="text" placeholder="dd/mm/yyyy" required id="enddate" name="enddate">
				</div>
				<span class="help-block" name="hint_moduleslist">
				When will you finish using earthCube integration and test environment?
				</span>
			  </div>
			  
		</div>
        <!--<div class="form-group">
			  <label class="control-label col-sm-2" for="period">Overall operational period:</label>
			  <div class="col-sm-10">
				<select class="form-control" name="period">
					<option>less than 3 months</option>
					<option>3-6 months</option>
					<option>6-12 months</option>
					<option>over one year</option>
				</select>
			   </div>
		</div>-->
		<div class="form-group">
			  <label class="control-label col-sm-2" for="allday">24 hours per day:</label>
			  <div class="col-sm-10">
				<label class="radio-inline">
				  <input type="radio" name="allday" value="true" checked="">Yes</input>
				</label>
				<label class="radio-inline">
				  <input type="radio" name="allday" value="false">No</input>
				</label>
				<span class="help-block" name="hint_moduleslist">
					Will you use the cloud sources 24 hours a day?
				</span>
			   </div>
		</div>
		<div class="form-group">
			  <label class="control-label col-sm-2" for="data_feed">Data upload:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" name="data_feed" required placeholder="brief description">
				<span class="help-block" name="hint_moduleslist">
					How do you upload data into your VM? e.g. copy from desktop with linux shell script, ...
				</span>
			  </div>
		</div>
		<div class="form-group">
			  <label class="control-label col-sm-2" for="data_read">Data service:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" name="data_read" required placeholder="brief description">
				<span class="help-block" name="hint_moduleslist">
					How do you serve data from your VM? e.g. FTP, ...
				</span>
			  </div>
		</div>
      </div>
    </div>
	<!--upload file-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          Upload file (as a <strong>supplementary material</strong>, it can help us better understand your specific requirements)
        </h4>
      </div>
        <div class="panel-body">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="upload">Upload file:</label>
			<div class="col-sm-10">
				<input type="file" size="60" name="myfile1" accept='application/pdf'>
				<div id="progress" style="display:none">
					<div id="bar"></div>
					<div id="percent">0%</div >
				</div>	
				<div id="message"></div>					
				<span class="help-block" id="hint_upload">
					Please upload <strong>one page pdf file (use your project name as file name)</strong> to describe project objectives (spatiotemporal relevance, scientific significance, possibility of success, etc.)
				</span>
			</div>
		  </div>
		</div>
    </div>
	<!--Policy Agreement-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          Terms and Conditions
        </h4>
      </div>
        <div class="panel-body">
		1. The user claims that the data are NOT sensitive or provided by any unauthorized organizations <br/>
		2. The cloud source can only be used for approved projects <br/>
		3. User needs to follow the University Policy: <a href="http://universitypolicy.gmu.edu/policies/responsible-use-of-computing/" target="_blank">http://universitypolicy.gmu.edu/policies/responsible-use-of-computing/</a>
			<div class="checkbox">
			<label><input type="checkbox" name="agreement" required>Click here to indicate that you have read and agree to the Terms and Conditions agreement</label>
			</div>
		</div>
    </div>
  </div>
  
  	<div class="form-group">
        <div class="col-sm-5 col-sm-offset-0">
			Enter Code <img src="captcha.php"> <input type="text" name="vercode" /><br/>
			<input id="submitbutton" type="submit" value="Apply" class="btn btn-primary">
			<!--<div id="message0"></div>-->
            <!--<input type="button" value="Apply" name="submit" class="btn btn-primary">-->
			<p class="help-block" name="help" style="color:red"></p>
        </div>
    </div>

  </form>
  
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	   <div class="modal-dialog">
		  <div class="modal-content">
			 <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				   aria-hidden="true">×
				</button>
			 </div>
			 <div class="modal-body" id="tipcontent"></div>
			 <div class="modal-footer">
				<button type="button" class="btn btn-default" 
				   data-dismiss="modal">close
				</button>
			 </div>
		  </div><!-- /.modal-content -->
	   </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!-- Footer -->
	<?php
		include("parts/foot.php");
	?>
</div>
</body>
</html>
