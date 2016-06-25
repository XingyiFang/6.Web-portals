<?php
   session_start();
   include("parts/top.php");
?>	
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-10 col-lg-offset-1">

                <!-- Blog Post -->

                <!-- Title -->
                <h1 class="page-header">User Instruction: Amazon Web Service (AWS)</h1>

                <!-- Author -->
                <p class="lead">
					After the application is approved, our cloud admin will send you a user account through email. A project will be created for your account and the default role of your account in this project is Project Manager/PI. <strong>As a project manager, you can manipulate the virtual resources with the allocated funding to your project, and create new user accounts and assign roles (privilege user and end user) to the accounts within this project.</strong>
                </p>
                <!--<hr><img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
                
				<div class="bs-callout bs-callout-warning" id="jquery-required"> <h4>Terms and Conditions</h4> <p>1. The user claims that the data are NOT sensitive or provided by any unauthorized organizations <br>
		2. The cloud source can only be used for approved projects <br>
		3. User needs to follow the University Policy: <a href="http://universitypolicy.gmu.edu/policies/responsible-use-of-computing/" target="_blank">http://universitypolicy.gmu.edu/policies/responsible-use-of-computing/</a>
			</p> </div>
			<font color="blue">In this instruction, user will practice how to manipulate virtual resources: create an instance for the project, and access the instance on the AWS platform through DC2.</font>
                <!-- Post Content -->
				<div class="bs-docs-section">
				<h2>Create and access instance (Virtual Machine)</h2>
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
					<li>Create <strong>Key Pair</strong> for your project<br/><font color="red">*Please don't share your key pair with others who aren't invovled in your project!</font><ol type="a"><li>Select <strong>Network Security</strong> > Key Pair</li><li>Click <strong>Create Key</strong> button</li><li>Input your key pair name, description and select Project Name</li><li>Click OK</li><li>A new key pair name will appear in the table, and a <strong>.pem</strong> file will be downloaded automatically.</li></ol></li>
					<li>Create instance (Virtual Machine) for your project<ol type="a"><li>Select <strong>Virtual Resource </strong>-> Public-Image (there are two images: windows server 2012 and centos7)<div><img src="images/aws-images.png" style="width: 650px" alt=""></div></li><li>Select one image and click <strong>Create from Public Image</strong> button</li><li>In the <strong>Instance Configuration</strong> tab<ol type="i"><li>Input VM name</li><li>Select VM type (please select nano or small size for testing)</li><li>Input instance number: <strong>1</strong></li></ol></li><li>In the <strong>Network & Key Pair Access</strong> tab<ol type="i"><li>Select Key name and Security Group</li><li>Select VPC to <strong>"undefined(vpc-4d6af929)"</strong></li></ol></li><li>In the <strong>Project & User</strong> tab<ol type="i"><li>Select user and project</li></ol></li><li>Click OK</li></ol></li>
					<li>Select <strong>Virtual Resource </strong>-> Instance</li>
					<li>Wait until the instance/VM <strong>Status</strong> turns to be <strong>"Running"</strong>. Click Refresh button if the status did not change for a while.</li>
					<li>Access the instance: select your instance and click <strong>operate</strong> -> Access instance<ol type="a"><li><font color="red">If an error is displayed, please wait for <strong>several minutes</strong>. Because the instance is not really ready yet.</font></li><li>Finally, you should see following pop-up window, and follow the steps to access your instance.<ol type="i"><li>If you create <strong><font color="red">Windows</font></strong> instance, please use Remote Desktop Connection<div><img src="images/aws-windows.png" style="width: 650px" alt=""></div></li><li>If you create <strong><font color="red">Linux</font></strong> instance, please use Remote Desktop Connection<div><img src="images/aws-linux.png" style="width: 650px" alt=""></div></li></ol></li></ol></li>
					<li>If you copy user name and password in the pop-up window, please check there is <strong><font color="red">no space at the end</font></strong>.</li>
				</ol>
				</div>			
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
