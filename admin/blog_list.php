<?php
    include 'header.php';
    include '../config.php';
    if(isset($_GET['delete_id'])){
        $id=$_GET['delete_id'];
        $sql="DELETE FROM blog WHERE id='$id'"; 
        $res=mysqli_query($conn,$sql);
        if($res){
            $_SESSION['message']="Blog Deleted Successfully!";
        }else{
            $_SESSION['message']="Blog Is  Not Deleted Successfully!";
        }
    }
?>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-10">Blog Details</div>
            <div class="col-2"><a href="add_blog.php" class="btn btn-sm btn-primary">+Add</a></div>
        </div>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>SN.</th>
                        <th>Title</th>
                        <th>Purpose</th>
                        <th>Short Description</th>
                        <th>Long Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * FROM blog";
                        $res=mysqli_query($conn,$sql);
                        $no=1;
                        if(mysqli_num_rows($res) > 0){
                            foreach ($res as $row){
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['title']; ?></td>
                                        <td><?= $row['purpose']; ?></td>
                                        <td><?= $row['short_description']; ?></td>
                                        <td><?= $row['long_description']; ?></td>
                                        <td>
                                            <div class="row justify-content-center">
                                                <a href="add_blog.php?edit_id=<?=$row['id'];?>" class="btn btn-sm btn-warning mr-2"><i class="zmdi zmdi-edit"></i></a>
                                                <a href="blog_list.php?delete_id=<?=$row['id'];?>" class="btn btn-sm btn-danger mr-2"><i class="zmdi zmdi-delete"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>