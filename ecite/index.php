<?php
   session_start();
   include("parts/top.php");
?>
<!-- Header Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <a href="cases/page-bcube.php">
			<img src="images/bcube-01.png" alt="data" height="345" style="margin:auto">
		  </a>
		  <h4 class="intro-text text-center">
            <strong>BCube Project</strong>
          </h4>
		  <span style="margin:auto"><strong></strong></span>
		</div>
		
		<div class="item">
			<a href="cases/page-chords.php">
				<img src="images/chords.png" alt="data" height="345" style="margin:auto">
			</a>
		  <h4 class="intro-text text-center">
            <strong>CHORDS Project</strong>
          </h4>
		</div>

		<div class="item">
			<a href="cases/page-cinergi.php">
			<img src="images/cinergi-01.png" alt="data" height="345" style="margin:auto">
			</a>		  
		  <h4 class="intro-text text-center">
            <strong>CINERGI Project</strong>
          </h4>
		</div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
			<div class="clo-lg-12">
				<h4></h4>
			</div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-home"></i> Introduction</h4>
                    </div>
                    <div class="panel-body">
						<p>ECITE, an effect of the activities structured by EarthCube Technology Architecture Committee (TAC)'s Testbed Working Group (TWG), will provide an integration test-bed for technology and science projects for both EarthCube funded projects and community technology demonstrations. The ECITE team will actively engage EarthCube and the vast geosciences community in the definition of requirements, design, and testing of the system. ECITE will consist of a seamless federated system of scalable and location independent, distributed computational resources (nodes) across the US. The hybrid federated system will provide a robust set of distributed resources utilizing including both public and private cloud capabilities. </p>
						<p>The ECITE Team includes</p>
						<ul><li>Sara Graves (PI) - University of Alabama in Huntsville (UAH)</li><li>Emily Law - NASA Jet Propulsion Laboratory (JPL)</li><li>Chaowei (Phil) Yang - George Mason University (GMU)</li>
						<li>George Djorgovski - Caltech</li><li>Ken Keiser - University of Alabama in Huntsville (UAH)</li></ul><a href="introduction.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-calendar"></i> Event</h4>
                    </div>
                    <div class="panel-body">
<p><div class="event-box"><span class="event-month">April</span><span class="event-day">10th</span><span class="event-year">2016</span></div><div class="event-details"><span class="event-title"><a href="instruction.php">User instruction: Openstack & AWS</a></span></div></p>
                        <p><div class="event-box"><span class="event-month">Feb</span><span class="event-day">20th</span><span class="event-year">2016</span></div><div class="event-details"><span class="event-title"><a href="form.php">Apply today to take our hybrid cloud platform on a testdrive.</a></span></div></p>
						
						<p><div class="event-box"><span class="event-month">Mar</span><span class="event-day">1</span><span class="event-year">2016</span></div><div class="event-details"><span class="event-title">NSF EarthCube Integration and Testing Environment Prototype will launch on March 1th, 2016.</span></div></p>
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
