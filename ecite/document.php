<?php
   session_start();
   include("parts/top.php");
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <!--<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Documents
                    <small><a href="http://199.26.254.185/form.html">Apply</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>-->
        <!-- /.row -->

        <!-- Image Header -->
		<div class="row">
			<div class="col-lg-12">
                <h2 class="page-header">Youtube videos</h2>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <a href="//www.youtube.com/embed/yqS5rn2HmCg" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 nounderline">
						<div>
							<img src="images/movie1.png" class="img-responsive" >
							<p class="bg-primary caption" style="text-align: center">1.How a project user is approved</p>
							<span><label>Any newly created account must to be approved and activated before use. A project user can be approved by Account Coordinator and Cybersecurity Admins. To approve, select an account from the table, click Operate -> Approve User.</label></span>
						</div>
				   </a>
                    <a href="https://youtu.be/Dil5IFZa8UE" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 nounderline">
						<div>
                        <img src="images/movie2.png" class="img-responsive">
						<p class="bg-primary" style="text-align: center">2.End user dashboards</p>
						<span><label>Accessing End User dashboard is a fairly simple process. Just login, select Project Management -> User.</label></span>
						</div>						
                    </a>
					<a href="//www.youtube.com/embed/4r-_MWPStOk" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 nounderline">
						<div>
                        <img src="images/movie3.png" class="img-responsive">
						<p class="bg-primary" style="text-align: center">3.How to operate instances</p>
						<span><label>Operating instances is a two step process: Start and Access - To start an instance, select Virtual Resource -> Instance, and click on start instance. Then, once the instance is started, select the desired instance again, and click Access Instance.</label></span>
						</div>						
                    </a>
                </div>
                <div class="row">
                    <a href="//www.youtube.com/embed/Cpgn9yNX-8o" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 nounderline">
						<div>
                        <img src="images/movie4.png" class="img-responsive">
						<p class="bg-primary caption" style="text-align: center">4.Security policies</p>
						<span><label>Security policies, key pairs, and security groups can be found within the Network & Security menu. Click on the video to learn about its functionalities.</label></span>
						</div>						
                    </a>
					<a href="//www.youtube.com/embed/UPCr8o-2V10" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 nounderline">
						<div>
                        <img src="images/movie5.png" class="img-responsive">
						<p class="bg-primary" style="text-align: center">5.Security user monitoring</p>
						</div>
						<span><label>The DC2 dashboard makes user monitoring easy, by displaying all of the important user data in rows. Click on the video to learn more about security user monitoring.</label></span>
                    </a>
                    <a href="https://youtu.be/14WVMVDv2sk" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4 nounderline">
						<div>
                        <img src="images/movie6.png" class="img-responsive">
						<p class="bg-primary" style="text-align: center">6.Billing monitoring</p>
						</div>
						<span><label>Billing monitoring functionality allows assigned users to create, monitor, and oversee all AWS linked billing accounts. Users can monitor the usage of virtual resources, user operations, and billing information on a daily, monthly, and yearly basis.</label></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
		<div class="col-lg-12">
                <h2 class="page-header">Documentation</h2>
        </div>
		<!-- Service Tabs -->
        <div class="row">
            <!--<div class="col-lg-12">
                <h2 class="page-header">Service Tabs</h2>
            </div>-->
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-file-text"></i> User Manuals</a>
                    </li>
                    <!--<li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-file-image-o"></i> Common Scenarios</a>
                    </li>-->
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>User Manuals</h4>
                        <p>Three versions are available, including Amazon Web Services (AWS), Eucalyptus and OpenStack</p>
                        <div class="list-group">
						  <a href="usermanual/AWS-UserManual.pdf" TARGET="_blank" class="list-group-item">Amazon Web Services (AWS) User Manual<span class="label label-primary label-pill pull-right">Download</span></a>
						  <a href="#" class="list-group-item">Eucalyptus User Manual<span class="label label-primary label-pill pull-right">Download</span></a>
						  <a href="#" class="list-group-item">OpenStack User Manual<span class="label label-primary label-pill pull-right">Download</span></a>
						</div>
                    </div>
                    <!--<div class="tab-pane fade" id="service-two">
                        <h4>Common Scenarios</h4>
                        <p>Workflow figures and movies are available</p>
                        <div class="list-group">
						  <a href="scenarios/page-project-setup.html" class="list-group-item">Project & User Setup<span class="label label-success label-pill pull-right">View</span></a>
						  <a href="scenarios/page-instance-setup.html" class="list-group-item">Instance Setup<span class="label label-success label-pill pull-right">View</span></a>
						  <a href="scenarios/page-billing.html" class="list-group-item">Billing Management<span class="label label-success label-pill pull-right">View</span></a>
						  <a href="scenarios/page-security.html" class="list-group-item">Security Management<span class="label label-success label-pill pull-right">View</span></a>
						</div>
                    </div>-->                    
                </div>

            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php
		   include("parts/foot.php");
		?>

    </div>
		<!-- my model-->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">��</button>
				<h3 class="modal-title">Heading</h3>
		</div>
		<div class="modal-body">
			
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal">Close</button>
		</div>
	</div>
</body>

</html>
