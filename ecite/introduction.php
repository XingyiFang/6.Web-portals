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
                <h2>Introduction to EarthCube Integration and Test Environment</h2>

                <!-- Author -->
                <p class="lead">
                </p>
                <!--<hr><img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
                <hr>
                <!-- Post Content -->
                <p><Strong>Overview</strong>: EarthCube is supporting the creation of interoperable tools and services for Earth science research, but no environment currently exists for integration and testing of these components. The proposed EarthCube Integration and Test Environment (ECITE), an outgrowth of activities of the EarthCube Testbed Working Group, will provide an integrat on test-bed for technology and science projects for both EarthCube funded projects and community technology demonstrations. The ECITE team will actively engage EarthCube and the wider geosciences community in definition of requirements, design, and testing of the system. ECITE will consist of a seamless federated system of scalable and location independent distributed computational resources (nodes) across the US. The hybrid federated system will provide a robust set of distributed resources utilizing including both public and private cloud capabilities. The nodes will provide compute and storage resources requiring minimal system administration.</p>
				
				<!--<p class=""><strong> Data Center Infrastructure</strong></p>-->
				<img align ="left" style="margin-right:5px;height:280px; padding-right: 15px" src="images/intro01.png" alt="">
				<p>ECITE is a hybrid cloud computing environment, built up by multiple cloud system software, such as OpenStack and Eucalyptus and also compatible with commercial cloud services (such as, Amazon Web Services). Powered by Dynamic Computing Cloud (DC2®), a hybrid cloud platform management software, ECITE is capable to deliver researchers with limited computer knowledge and IT operators easy access and control over the cloud computing resources through a single entry point and simple manipulations without considering the heterogeneity of different cloud environment.</p>
				<!--<p class=""><strong>Platform Architecture</strong></p><br/>-->
				<p>The platform provides resources from multiple private cloud environments, OpenStack and Eucalyptus, and also manages public cloud allowing resource synchronizing and bursting between private and public cloud. All resources are managed by Dynamic Computing Cloud (DC2).</p>
				<img align ="right" style="margin-right:5px;height:240px; padding-right: 15px" src="images/intro03.png" alt=" ">
				<p>DC2 is a unique software that allows interoperable management, simplification, and optimization of secure hybrid clouds:  <strong>Amazon AWS, Eucalyptus Cloud and Openstack Cloud</strong>. Here are five features and capabilities of DC2 provided to users.</p>
				<ul>
					<li>Consolidated resource Management: Manage the resources provisioned from different cloud platforms as a whole, fully manipulate cloud resources, such as VM, image, stack, VPC, S3; and allow applications running in private cloud burst into public cloud as needed.</li>
					<li>Customized User Account Management: Manage users, user groups and projects, etc., according to customer's business model, and create hierarchical role control and user permissions.</li>
					<li>Scalable and Dynamic Resource Provision: Provision the right level of computing resources according to applications and dynamically adjust capacity levels as needs change.</li>
					<li>Real-time Usage Visibility: Monitor both the physical usage of the infrastructure and the virtual resource usage on the cloud, and track the billing details when a user or project is associated to the commercial cloud accounts.</li>
					<li>Cloud-based High Performance Computing: Build Hadoop, Spark, GPU computing on virtual resources to facilitate computing intensive applications.</li>
				</ul>
				<img align ="left" style="margin-right:5px;height:340px; padding-right: 15px" src="images/intro02.png" alt="">
				<p>Therefore, without caring about the heterogeneity in structure and operations among different cloud platforms, users can access and use the cloud resource for their research application very easily and efficiently without considering the heterogeneity of multiple cloud environment.</p>
				<!--<p class=""><strong> Network Architecuture</strong></p>-->
				<p><strong>The ECITE computing platform</strong> is supported by the NSF Spatiotemporal Hybrid Cloud Service, which is built by the NSF spatiotemporal innovation center with 504-node computer cluster donated by NASA and co-sponsored by the center members. The service is hosted by George Mason University (GMU) data center for the three center sites of GMU, University of California, Santa Barbara, and Harvard University. The NSF Spatiotemporal Hybrid Cloud Service is to strengthen the mission of the center to foster a national and international spatiotemporal innovation base for a variety of domains including geosciences, geo-intelligence, engineering, public health, social dynamics, neural sciences, and others.</p>	
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
