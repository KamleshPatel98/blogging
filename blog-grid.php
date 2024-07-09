<?php 
	include 'header.php';
	include 'config.php';

  if(isset($_GET['title'])){
    $title=mysqli_real_escape_string($conn,$_GET['title']);
  }
?> 
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
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

    <form action="" method="GET">
    <div class="row justifu-content-center">
          <div class="col-md-4">
            <label class="form-label">Title</label>
          </div>
          <div class="col-md-4">
            <input type="text" name="title" class="form-control">
          </div>
          <div class="col-md-4 text-center">
            <button type="search" class="btn btn-sm btn-primary">Search</button>
          </div>
            </div>
          
        </div>

    </form>

        <div class="row">
          <?php
            if(!empty($title)){
              $sql="SELECT * FROM blog WHERE title='$title'";
            }else{
               $sql="SELECT * FROM blog";
            }
            
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