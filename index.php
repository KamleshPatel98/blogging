<?php include 'header.php'; ?> 
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
    <div class="container">



		<div class="row">
			<?php
				$sql="SELECT * FROM blog order by id desc limit 10";
				$res=mysqli_query($conn,$sql);
				if(mysqli_num_rows($res) > 0){
					foreach ($res as $row){
						?>
							<div class="col-lg-6 col-md-6 mb-5">
								<div class="blog-item-content bg-white p-5">
									<div class="blog-item-meta bg-gray py-1 px-2">
										<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i><?= $row['purpose']; ?></span>
									</div> 

									<h3 class="mt-3 mb-3"><a href="blog-single.php?id=1"><?= $row['title']; ?></a></h3>
									<p class="mb-4"><?= $row['short_description']; ?></p>

									<a href="blog-single.php?id=<?= $row['id']; ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
								</div>
							</div>
						<?php
					}
				}
			?>
		</div>
    </div>
</section>

<?php include 'footer.php'; ?>