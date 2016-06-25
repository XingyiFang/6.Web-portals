<?php
   session_start();
   include("parts/top.php");
?>
		
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Resource Allocation (Currently Free)
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Resource Allocation</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		<p>Note: The Resource in the cloud is allocated according to CPU, RAM, Storage consumption with the following schema (exclude EarthCube projects, all EarthCube projects are free to use the ECITE Cloud Resources). While the resource is limited using the schema, <em ><strong>current resource allocation is free.</strong></em></p>
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="https://aws.amazon.com/ec2/pricing/">Amazon Web Services</a></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"></span>
                        <span class="period">AWS Free Tier includes 750 hours of Linux and Windows t2.micro instances each month for one year. To stay within the Free Tier, use only EC2 Micro instances.</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="https://aws.amazon.com/ec2/pricing/" target="_blank"><strong>Amazon EC2 Pricing</strong> <span class="label label-success">Enter</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Eucalyptus</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">CPU:<strong> $0.005</strong> per CPU core per hour</li>
                        <li class="list-group-item">Memory:<strong> $0.01</strong> per GB per hour</li>
                        <!--<li class="list-group-item">Disk:<strong> $0.001</strong> per GB per hour</li>-->
                        <li class="list-group-item">Volume:<strong> $0.0017</strong> per 100GB per hour</li>
                        <li class="list-group-item">S3:<strong> $0.001</strong> per 100GB per hour</li>
                    </ul>
                </div>
		<strong>*Current resource: </strong><p>4800 CPU cores, 4800GB RAM, 4TB Block Storage (Volume), and 200GB Object Storage (S3)</p>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Openstack</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">CPU:<strong> $0.005</strong> per CPU core per hour</li>
                        <li class="list-group-item">Memory:<strong> $0.01</strong> per GB per hour</li>
                        <!--<li class="list-group-item">Disk:<strong> $0.001</strong> per GB per hour</li>-->
                        <li class="list-group-item">Volume:<strong> $0.0017</strong> per 100GB per hour</li>
                        <li class="list-group-item">Swift:<strong> $0.001</strong> per 100GB per hour</li>
                    </ul>
                </div>
		<strong>*Current resource: </strong><p>4272 CPU cores, 4272GB RAM, 20TB Block Storage (Volume), and 8TB Object Storage (Swift)</p>
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
