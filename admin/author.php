<?php
    include 'header.php';
    include '../config.php';
    if(isset($_GET['block_id'])){
        $id=$_GET['block_id'];
        $sql="UPDATE customer SET `status`='1' WHERE id='$id'"; 
        $res=mysqli_query($conn,$sql);
        if($res){
            $_SESSION['message']="Author Block Successfully!";
        }else{
            $_SESSION['message']="Author Is  Not Block Successfully!";
        }
    }
?>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-10">Author Details</div>
        </div>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>SN.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Block</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * FROM customer WHERE role='customer'";
                        $res=mysqli_query($conn,$sql);
                        $no=1;
                        if(mysqli_num_rows($res) > 0){
                            foreach ($res as $row){
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['username']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?php echo $row['status'] == '1' ? 'Block' : 'Unblock' ; ?></td>
                                        <td>
                                            <div class="row justify-content-center">
                                                <a href="author.php?block_id=<?=$row['id'];?>" class="btn btn-sm btn-warning mr-2"><i class="zmdi zmdi-edit"></i></a>
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