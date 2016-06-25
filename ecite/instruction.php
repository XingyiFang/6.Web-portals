<?php
   session_start();
   include("parts/top.php");
?>	
    <!-- Page Content -->
     
    <div class="container">
        <div class="row" style="position:relative">
			<!--Docs nav -->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bs-docs-sidebar floatdiv" style="top:0px">
				<ul class="nav nav-list bs-docs-sidenav">
					<li><a href="#notes"><i class="icon-chevron-right"></i> Announcement</a></li>
					<li><a href="#workflow"><i class="icon-chevron-right"></i> Workflows</a>
						<ol style="list-style:none" class="">
							<li class=""><a href="#create_instance"><i class="icon-chevron-right"></i>Create new instance</a></li>
							<li class=""><a href="#access_instance"><i class="icon-chevron-right"></i>Access instance</a></li>
						</ol>					
					</li>
					<li><a href="#aws"><i class="icon-chevron-right"></i> User Instruction: Amazon Web Service (AWS)</a>
						<ol style="list-style:none" class="">
							<li class=""><a href="#create_aws_instance"><i class="icon-chevron-right"></i>Create AWS instance</a></li>
							<li class=""><a href="#access_aws_instance"><i class="icon-chevron-right"></i>Access AWS instance</a></li>
						</ol>
					</li>
					<li><a href="#openstack"><i class="icon-chevron-right"></i> User Instruction: Openstack</a>
						<ol style="list-style:none">
							<li><a href="#create_opentack_instance"><i class="icon-chevron-right"></i>Create Openstack Instance</a></li>
							<li><a href="#access_opentack_instance"><i class="icon-chevron-right"></i>Access Openstack Instance</a>
								<ol style="list-style:none; line-height:100%">
									<li><a href="#openstack_windows"><i class="icon-chevron-right"></i>Windows</a></li>
									<li><a href="#openstack_mac"><i class="icon-chevron-right"></i>MAC</a></li>
								</ol>
							</li>							
							<li><a href="#deploy_website"><i class="icon-chevron-right"></i>Deploy Web Page</a>
								<ol style="list-style:none; line-height:100%">
									<li><a href="#openstack_centos"><i class="icon-chevron-right"></i>CentOS</a></li>
									<li><a href="#openstack_ubuntu"><i class="icon-chevron-right"></i>Ubuntu</a></li>
								</ol>
							</li>
						</ol>					
					</li>
				</ul>
			</div>
		  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 pull-right">
			<section id="notes">
				<div class="page-header">
					<h1>Announcement</h1>
				</div>
				<p class="lead">
					After the application is approved, our cloud admin will send you a user account through email. A project will be created for your account and the default role of your account in this project is Project Manager/PI. <strong>As a project manager, you can manipulate the virtual resources with the allocated funding to your project, and create new user accounts and assign roles (privilege user and end user) to the accounts within this project.</strong>
                </p>
				<div class="bs-callout bs-callout-warning" id="jquery-required"> <h4>Terms and Conditions</h4> <p>1. The user claims that the data are NOT sensitive or provided by any unauthorized organizations <br>
		2. The cloud source can only be used for approved projects <br>
		3. User needs to follow the University Policy: <a href="http://universitypolicy.gmu.edu/policies/responsible-use-of-computing/" target="_blank">http://universitypolicy.gmu.edu/policies/responsible-use-of-computing/</a>
			</p> </div>
			</section>
			<section id="workflow">
				<div class="page-header">
					<h1>Workflows</h1>
				</div>
				<section id="create_instance">
				<h2>Create new instance (Virtual Machine)</h2>
				<div><img src="images/create-instance.png" alt=""></div><hr>
				</section>
				<section id="access_instance"> 
				<h2>Access instance (Virtual Machine)</h2>
				<div><img src="images/access-instance.png" alt=""></div>
				</section>	
			</section>
			<!--aws-->
			<section id="aws">
				<div class="page-header">
					<h1>User Instruction: Amazon Web Service (AWS)</h1>
				</div>
				<font color="#337AB7">In this instruction, user will practice how to manipulate virtual resources: create an instance for the project, and access the instance on the AWS platform through DC2.</font>
                <section id="create_aws_instance" class="bs-docs-section">
				<h2>Create new instance (Virtual Machine)</h2>
				<ol>
					<li>Log in and change your password
						<ol type="a">
							<li>Select <strong>Project Management</strong> -> User -> your account name</li>
							<li>Select <strong>Operate</strong> -> Change User Password</li>
						</ol>
					</li>
					<li>At the top bar, select <strong>Amazon</strong> as a platform and <strong>your project as the project, leave the region as default.</strong>
					<div><img src="images/top-aws.png" alt=""></div>
					</li>
					<li>View your allocated project resource<ol type="a"><li>Select <strong>Project Management</strong> -> Project</li></ol></li>
					<li><strong>Check</strong> if the default image(s) and network security group(s) are already designated to your project<ol type="a"><li>Select <strong>Virtual Resource</strong> -> Image, if <strong>NO</strong> image in your table list, please contact with Admin</li><li>Select <strong>Network Security</strong> -> Security Group, if <strong>NO</strong> security group in your table list, please contact with Admin</li></ol></li>
					<li>Create <strong>Key Pair</strong> for your project<br/><font color="#de2d26">*Please don't share your key pair with others who aren't involved in your project!</font><ol type="a"><li>Select <strong>Network Security</strong> > Key Pair</li><li>Click <strong>Create Key</strong> button</li><li>Input your key pair name, description and select Project Name</li><li>Click OK</li><li>A new key pair name will appear in the table, and a <strong>.pem</strong> file will be downloaded automatically.</li></ol></li>
					<li>Create instance (Virtual Machine) for your project<ol type="a"><li>Select <strong>Virtual Resource </strong>-> Public-Image (there are two images: windows server 2012 and centos7)<div><img src="images/aws-images.png" style="width: 650px" alt=""></div></li><li>Select one image and click <strong>Create from Public Image</strong> button</li><li>In the <strong>Instance Configuration</strong> tab<ol type="i"><li>Input VM name</li><li>Select VM type to <strong>"m1.small"</strong></li><li>Input instance number: <strong>1</strong></li></ol></li><li>In the <strong>Network & Key Pair Access</strong> tab<ol type="i"><li>Select Key name and Security Group</li><li>Select VPC to <strong>"undefined(vpc-4d6af929)"</strong></li></ol></li><li>In the <strong>Project & User</strong> tab<ol type="i"><li>Select user and project</li></ol></li><li>Click OK</li></ol></li>
					<li>Select <strong>Virtual Resource </strong>-> Instance</li>
					<li>Wait until the instance/VM <strong>Status</strong> turns to be <strong>"Running"</strong>. Click Refresh button if the status did not change for a while.</li>
				</ol>
				</section>
				<section id="access_aws_instance" class="bs-docs-section">
				<h2>Access AWS instance (Virtual Machine)</h2>
				<ol>
					<li>Access the instance: select your instance and click <strong>operate</strong> -> Access instance<ol type="a"><li><font color="#de2d26">If an error is displayed, please wait for <strong>several minutes</strong>. Because the instance is not really ready yet.</font></li><li>Finally, you should see following pop-up window, and follow the steps to access your instance.<ol type="i"><li>If you create <strong><font color="#de2d26">Windows</font></strong> instance, please use Remote Desktop Connection<div><img src="images/aws-windows.png" style="width: 650px" alt=""></div></li><li>If you create <strong><font color="#de2d26">Linux</font></strong> instance, please use SSH<div><img src="images/aws-linux.png" style="width: 650px" alt=""></div></li></ol></li></ol></li>
					<li>If you copy user name and password in the pop-up window, please check there is <strong><font color="#de2d26">no space at the end</font></strong>.</li>
				</ol>
				</section>			
			</section>
			<!--openstack-->
			<section id="openstack">
				<div class="page-header">
					<h1>User Instruction: Openstack</h1>
				</div>
				<font color="#337AB7">In this instruction, user will practice how to manipulate virtual resources: create an instance for the project, and access the instance on the Openstack cloud.</font>
				<section id="create_opentack_instance">
				  <div class="bs-docs-section">
				<h2>Create new instance (Virtual Machine)</h2>
				<ol>
					<li>Log in and change your password
						<ol type="a">
							<li>Select <strong>Project Management</strong> -> User -> your account name</li>
							<li>Select <strong>Operate</strong> -> Change User Password</li>
						</ol>
					</li>
					<li>At the top bar, select <strong>Openstack</strong> as a platform and <strong>your project as the project, leave the region as default.</strong>
					<div><img src="images/top-openstack.png" alt=""></div>
					</li>
					<li>View your allocated project resource<ol type="a"><li>Select <strong>Project Management</strong> -> Project</li></ol></li>
					<li><strong>Check</strong> if the default image(s) and network security group(s) are already designated to your project<ol type="a"><li>Select <strong>Virtual Resource</strong> -> Image, if <strong>NO</strong> image in your table list, please contact with Admin</li><li>Select <strong>Network Security</strong> -> Security Group, if <strong>NO</strong> security group in your table list, please contact with Admin</li></ol></li>
					<li>Create <strong>Key Pair</strong> for your project<br/><font color="#de2d26">*Please don't share your key pair with others who aren't invovled in your project!</font><ol type="a"><li>Select <strong>Network Security</strong> > Key Pair</li><li>Click <strong>Create Key</strong> button</li><li>Input your key pair name, description and select Project Name</li><li>Click OK</li><li>A new key pair name will appear in the table, and a <strong>.pem</strong> file will be downloaded automatically.</li></ol></li>
					<li>Create instance (Virtual Machine) for your project<ol type="a"><li>Select <strong>Virtual Resource </strong>-> Instance</li><li>Click <strong>Create VM</strong> button</li><li>In the <strong>Instance Configuration</strong> tab<ol type="i"><li>Input VM name</li><li>Select image ID</li><li>Select VM type to <strong>"m1.small"</strong></li><li>Input instance number: <strong>1</strong></li></ol></li><li>In the <strong>Network & Key Pair Access</strong> tab<ol type="i"><li>Select Key name and Security Group</li><li>Select Network to <strong>"hscp-net"</strong></li></ol></li><li>In the <strong>Project & User</strong> tab<ol type="i"><li>Select user and project</li></ol></li><li>Click OK</li></ol></li>
					<li>Wait until the instance/VM <strong>Status</strong> turns to be <strong>"Running"</strong>. Click Refresh button if the status did not change for a while.</li>
					<li>Associate a <strong>public IP</strong> to instance<ol type="a"><li>Select <strong>IP Management</strong> -> IP</li><li>Click Allocate Elastic IP<ol type="i"><li>Input Allocate Number: <strong>1</strong></li><li>Select project and user</li><li>Select <strong>Network</strong> <strong>"ext-net"</strong> (only this network has public IP)</li></ol></li><li>Click OK, a public IP will appear in the table</li><li>Select an IP from the table list<ol type="i"><li>Click <strong>Operate</strong> -> Associate IP to Instance</li><li>Select your instance and click OK</li></ol></li><li>Go back to Instance table<ol type="i"><li>select <strong>Virtual Resource</strong> -> Instance, a public IP should be shown in the field of <strong>IP</strong></li></ol></li></ol></li>
					<li>Access the instance, install packages for a web service, and deploy a web page on your Virtual Machine (please check following sections)</li>
				</ol>
				</div>
				</section>
				<section id="access_opentack_instance">
				<div class="bs-docs-section">
				<h2>Access Openstack instance</h2>
				<p>*If you are operating <strong>Windows system</strong> now, please follow the first part; if you are operating <strong>Mac system</strong>, you can follow the second part.</p>
				<section id="openstack_windows">
				<h3>Part 1, for Windows System:</h3>
				<ol>
					<li>Download <strong>putty.exe</strong> and <strong>puttygen.exe</strong>, and get <strong>KeyName.pem (the one automatically downloaded when you create your key pair)</strong> <br/>
						Link: <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html">http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html</a>
					</li>
					<li>Open <strong>puttygen.exe</strong> and click load
					<div><img src="images/access1.png" alt=""></div>
					</li>
					<li>Choose All Files (*.*) and Open <strong>KeyName.pem</strong><div><img src="images/access2.png" alt=""></div></li>
					<li>Click OK and Click Save private key<div><img src="images/access3.png" alt=""></div><div><img src="images/access4.png" alt=""></div></li>
					<li>Click Yes and save the file as <strong>KeyName.ppk</strong><div><img src="images/access5.png" alt=""></div><div><img src="images/access6.png" alt=""></div></li>
					<li>Open <strong>putty.exe</strong> and fill in your public IP address (199.XX.XXX.XXX) and port number (5000)<div><img src="images/access7.png" alt=""></div></li>
					<li>In Category section, browse to Connection >> SSH >> Auth, and click <strong>Browse</strong> on the right side <div><img src="images/access8.png" alt=""></div></li>
					<li>Select <strong>KeyName.ppk</strong> file that we generated in Step 5<div><img src="images/access9.png" alt=""></div></li>
					<li>Click open and Yes to access the VM<div><img src="images/access10.png" alt=""></div><div><img src="images/access11.png" alt=""></div></li>
					<li>You will see the login screen when connect successfully <div><img src="images/access12.png" alt=""></div></li>
					<li>Login as centos/ubuntu, there is no password required<ol type="a"><li>If you use the <strong>centos image</strong>, please Input <strong>"centos"</strong> and then press Enter button</li><li>If you use the <strong>ubuntu image</strong>, please Input <strong>"ubuntu"</strong> and then press Enter button</li></ol></li>
				</ol>
				</section>
				<section id="openstack_mac">
				<h3>Part 2, for MAC System:</h3>
				<ol>
					<li>Open the <strong>shell terminal</strong> <div><img src="images/access13.png" style="width: 450px" alt=""></div>
					</li>
					<li>Go to the fold where the <strong>downloaded key (.pem file)</strong> exists, such as:
					<div><img src="images/access14.png" alt=""></div>
					<pre><code>cd /Users/YourKeyFolder/</code></pre>
					</li>
					<li>Change the access permission of the key as following:<div><img src="images/access15.png" alt=""></div><pre><code>chmod 400 YourKeyName</code></pre></li>
					<li>Access the virtual machine by SSH as following:<br/><strong>For Ubuntu</strong>:<div><img src="images/access16.png" alt=""></div><pre><code>ssh -i KeyName.pem -p 5000 ubuntu@YourIP</code></pre>
					<strong>For CentOS</strong>:    
					<div><img src="images/access17.png" alt=""></div><pre><code>ssh -i KeyName.pem -p 5000 centos@YourIP</code></pre></li>
					<li>Login as centos/ubuntu, there is no password required<ol type="a"><li>If you use the <strong>centos image</strong>, please Input <strong>"centos"</strong> and then press Enter button</li><li>If you use the <strong>ubuntu image</strong>, please Input <strong>"ubuntu"</strong> and then press Enter button</li></ol></li>
				</ol>
				</section>
				</div>
				</section>
				<section id="deploy_website">
				  <div class="bs-docs-section">
				<h2>Deploy web page</h2>
				<section id="openstack_centos"><h3>For CentOS:</h3>
				<ol>
					<li>After access the VM and login as <strong>centos</strong>, you can deploy apache with following command lines.<pre><code>sudo -i</code></pre><pre><code>yum install httpd</code></pre><pre><code>service httpd start</code></pre></li>
					<li>Open a new browser, and visit your website: YourPublicIP/</li>
					<li>Your page should be like this: <div><img src="images/access18.png" alt=""></div></li>
				</ol></section>
				<section id="openstack_ubuntu"><h3>For Ubuntu:</h3>
				<ol>
					<li>After access the VM and login as <strong>ubuntu</strong>, you can deploy apache with following command lines.<pre><code>sudo -i</code></pre><pre><code>apt-get update</code></pre><pre><code>apt-get install apache2</code></pre><pre><code>service apache2 start</code></pre></li>					
					<li>Open a new browser, and visit your website: YourPublicIP/</li>
					<li>Your page should be like this: <div><img src="images/access19.png" alt=""></div></li>
				</ol></section>				
				</div>
				</section>
			</section>
		  </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php
		   include("parts/foot.php");
		?>
		
    </div>

</body>

</html>
