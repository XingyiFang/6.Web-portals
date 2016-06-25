<?php
   session_start();
   include("../parts/top.php");
?>	
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h2>Connecting the	science	user with science data and services via the BCube broker and crawler</h2>

                <!-- Author -->
                <p class="lead">
					<strong>Read detailed information via the official portal: </strong><a href="http://earthcube.org/group/bcube">http://earthcube.org/group/bcube</a>
					<!--By Chaowei (Phil) Yang | Edward M Armstrong | Thomas Huang | David Moroni | Yongyao Jiang | Yun Li-->
                </p>
                <!-- Date/Time 
                <hr><p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>-->
                <!-- Preview Image -->
                <!--<hr><img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
                <hr>
                <!-- Post Content -->
				<img align ="left" style="margin-right:5px;height:320px; padding-right: 15px" src="../images/bcube-01.png" alt="">
                <p><strong>BCube:</strong> The BCube project aims to improve efficiency and productivity of geoscientists who work across disciplinary boundaries by 1) Facilitating discovery and access of geoscience data 2) Linking data facilities having heterogeneous catalogs and
access mechanisms, and 3) Creating a new paradigm for advertising and discovering
data on the Web. </p>
<p>
BCube is the "Brokering Building Block" project, one of several
pilots funded by NSF's EarthCube Program to explore
innovative technologies for connecting and sharing existing
data and information resources in the geosciences.</p>
				<p><strong>Objectives:</strong> Demonstrate the utility and viability of brokering and crawling technologies as core elements of a cyberinfrastructure supporting all of geoscience, with close attention paid to the social aspects of cyberinfrastructure development and adoption, as well as to the educational benefits of brokering</p>
				<p><strong>Approach:</strong> BCube is advancing a cloud-based brokering framework initially
targeting the hydrological, atmospheric, ocean and polar
sciences. Included is an advanced web crawler that finds what
might otherwise be hidden geoscience data. The key driver is
getting usable data easily into the hands of scientists.</p>
				
            </div>

			<!-- Blog Sidebar Widgets Column -->
			<?php
				include("../parts/sidebar.php");
			?>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <?php
		   include("../parts/foot.php");
		?>
    </div>
    <!-- /.container -->
</body>

</html>
