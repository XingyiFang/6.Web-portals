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
                <h2>Cloud-Hosted Real-time Data Services for the Geosciences (CHORDS) Implementation</h2>

                <!-- Author -->
                <p class="lead">
					<strong>Read detailed information via the official portal:</strong> <a href="http://earthcube.org/group/chords">http://earthcube.org/group/chords</a>
					<!--By Chaowei (Phil) Yang | Edward M Armstrong | Thomas Huang | David Moroni | Yongyao Jiang | Yun Li-->
                </p>
                <!-- Date/Time 
                <hr><p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>-->
                <!-- Preview Image -->
                <!--<hr><img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
                <hr>
                <!-- Post Content -->
                <img src="../images/chords-01.png" align ="left" style="margin-right:5px;height:280px; padding-right: 15px" alt="">
				<!--<p><strong>Figure 1. Current Architecture of CHORDS implementation</strong></p>-->
				<p>CHORDS consists of two main components: (1) The CHORDS Portal that interfaces with users, collects data stream information (metadata), and provides tools for users to interact with their data; and (2) the CHORDS Services that transforms ingested data streams and exposes the data through community accepted (standard) data access services, such as OGC Web Map Services, Web Feature Services, WaterML (TimeSeries), etc. </p>
				<p><strong>Both the Portal and Services components are currently being successfully hosted on AWS. CHORDS Portal:</strong> <a href="http://portal.chordsrt.com/">http://portal.chordsrt.com/</a></p>
				<p>The overall architecture of CHORDS is shown in Figure 1.  We have an instance of the implementation based on this architecture running on the CHORDS server.  That instance is currently supporting two different data sources as described below.</p>
				
				<h2>UM Hydrology Sensor Data</h2>
				<img align ="left" style="margin-right:5px;height:245px; padding-right: 15px" src="../images/chords-02.png" alt="">
				<!--<p><strong>Figure 2. UM Hydrology Sensor Data Publishing Workflow</strong></p>-->
				<p><strong>Extraction:</strong> The data generated by sensors located at different place are pushed to Xively Servers over the internet. Xively is Platform As A Service (PAAS) for Internet of Things (IOT). Our ingestor program written in Java makes REST request to Xively to pull the data from its server. Our program uses Apache HTTP Client for Java to make REST request.  Eventually, sensors will push the data to CHORDS server directly.</p>
				<p><strong>Processing:</strong> The pulled geolocated data is then processed, formatted and pushed to PostgresDB with PostGIS extensions on the CHORDS server. The json response received from Xively server is processed using Jackson JSON library for Java. </p>
				<p><strong>Publishing:</strong> GeoServer generates data store for geo-located data present in PostgresDB. This store is then published which can then be accessed through WFS client like GeoExplorer (We have an instance of GeoExplorer running on CHORDS server).  GeoServer allows us to access the published data in many OGC webservices including WMS, WFS, and KML.</p>	
				
				<h2>CSU CHILL Radar Data</h2>
				<img align ="left" style="margin-right:5px;height:245px; padding-right: 15px" src="../images/chords-03.png" alt="">
				<!--<p><strong>Figure 3. CSU CHILL Radar Data Publishing Workflow</strong></p>-->
				<p><strong>Extraction:</strong> The radar data generated by CSU-CHILL radar is served in real-time via its server (vchill.chill.colostate.edu) at port 2511. Our ingestor program written in Java establishes a data channel with the server and receives real-time data from the server.</p>
				<p><strong>Processing:</strong> This real-time data is then processed, formatted and saved as CF compliant NetCDF file in the CHORDS server. To generate the NetCDF file we are using ucar NetCDF library for Java.</p>
				<p><strong>Publishing:</strong> GeoServer generates data store from the saved NetCDF to provide OGC standard services.</p>
				
				<p><strong>***We are also working on an OpenLayer-based mapping interface to visualize CHORDS data.</strong></p>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php
				include("../parts/sidebar.php");
			?>

        </div>
        <!-- /.row -->

        <hr>

        <?php
		   include("../parts/foot.php");
		?>

    </div>
</body>

</html>
