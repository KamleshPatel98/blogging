<?php 
	include 'header.php';
	include 'config.php';
?> 
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog Single</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
	$id=$_GET['id'];
	$sql="SELECT * FROM blog WHERE id='$id'";
	$res=mysqli_query($conn,$sql);
	$blog=mysqli_fetch_assoc($res);
	// if(mysqli_num_rows($res) > 0){
	// 	foreach ($res as $row){
			?>
			<?php
	// 	}
	// }
?>

<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
					<div class="col-lg-12 mb-5">
						<div class="single-blog-item">
							

							<div class="blog-item-content bg-white p-5">
								<div class="blog-item-meta bg-gray py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i><?= $blog['purpose']; ?></span>
								</div> 

								<h2 class="mt-3 mb-4"><?= $blog['title']; ?></h2>
								<p class="justify-content"><?= $blog['short_description']; ?></p>
								<p class="justify-content"><?= $blog['long_description']; ?></p>
								
							</div>
						</div>
					</div>
				</div>
            </div>   
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>