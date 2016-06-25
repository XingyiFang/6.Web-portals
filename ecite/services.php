<?php
   session_start();
   include("parts/top.php");
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Services
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <!--<div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="images/services.jpg" alt="">
            </div>
        </div>-->
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <!--<div class="col-lg-12">
                <h2 class="page-header">Services Panels</h2>
            </div>-->
            <!--<div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Data management</h4>
                        <p><br/>Rasdaman | PostGIS | HBase</p>
                        <a href="services/page-data-management.html" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Analytics</h4>
                        <p><br/>Real-time | Smart | Visualization</p>
                        <a href="services/page-analytics.html" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>-->
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-share fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Application Deployment</h4>
                        <p>via SSH, Remote Desktop Collection or Virtual Network Computing</p>
                        <a href="services/page-deployment.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-share-alt fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Integration & Collaboration</h4>
                        <p>A bundled set of software install in the virtual machine | VMs Clustering</p>
                        <a href="services/page-integration-collaboration.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
       <hr>

        <!-- Footer -->
        <?php
		   include("parts/foot.php");
		?>

    </div>
</body>

</html>
