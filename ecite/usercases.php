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

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Cases</h2>
            </div>
			<p>Currently, there are a number of projects on the platform. Please read the articles written by the developers if you have interest.<strong> Some EarthCube projects could be connected in the below figures (click to enlarge the images).</strong></p>
			<div class="col-xs-0 col-sm-4 col-md-6"><img src="images/bcube.png"
		class="img-responsive image_cases" style=""></div>
			<div class="list-group col-xs-12 col-sm-4 col-md-6">
			  <a href="cases/page-chords.php" class="list-group-item">CHORDS<span class="label label-success label-pill pull-right">Read</span></a>
			  <a href="cases/page-bcube.php" class="list-group-item">BCube<span class="label label-success label-pill pull-right">Read</span></a>
			  <a href="cases/page-cinergi.php" class="list-group-item">CINERGI<span class="label label-success label-pill pull-right">Read</span></a>
			</div>
        </div>  
        <hr>

        <!-- Footer -->
        <?php
		   include("parts/foot.php");
		?>

    </div>
</body>
<script>
$(".image_cases").on("click", function() {
   $('#imagepreview').attr('src', $('.image_cases').attr('src'));
   $('#imagemodal').modal('show');
   
});
</script>
</html>
