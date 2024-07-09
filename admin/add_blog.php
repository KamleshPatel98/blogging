<?php
    session_start();
    error_reporting(0);
    include 'header.php';
    include '../config.php';
    if(isset($_GET['edit_id'])){
        $id=$_GET['edit_id'];
        if(isset($_POST['submit'])){
            $title=mysqli_real_escape_string($conn,$_POST['title']);
            $purpose=mysqli_real_escape_string($conn,$_POST['purpose']);
            $short_description=mysqli_real_escape_string($conn,$_POST['short_description']);
            $long_description=mysqli_real_escape_string($conn,$_POST['long_description']);
            $updated_at=date('d-m-Y H:i:s');
            $sql="UPDATE blog SET `title`='$title',`purpose`='$purpose',`short_description`='$short_description',`long_description`='$long_description',`updated_at`='$updated_at' WHERE id='$id'";
            $res=mysqli_query($conn,$sql);
            if($res){
                $_SESSION['message']="Blog Updated Successfully!";
            }else{
                $_SESSION['message']="Blog Is  Not Updated!";
            }
        }
    } else if(isset($_POST['submit'])){
        $title=mysqli_real_escape_string($conn,$_POST['title']);
        $purpose=mysqli_real_escape_string($conn,$_POST['purpose']);
        $short_description=mysqli_real_escape_string($conn,$_POST['short_description']);
        $long_description=mysqli_real_escape_string($conn,$_POST['long_description']);
        $created_at=date('d-m-Y H:i:s');
        $sql="INSERT INTO blog (`title`,`purpose`,`short_description`,`long_description`,`created_at`) VALUE('$title','$purpose','$short_description','$long_description','$created_at')";
        $res=mysqli_query($conn,$sql);
        if($res){
            $_SESSION['message']="Blog Added Successfully!";
        }else{
            $_SESSION['message']="Blog Is  Not Added!";
        }
    }
    if(isset($_GET['edit_id'])){
        $id=$_GET['edit_id'];
        $sql="SELECT * FROM blog WHERE id='$id'";
        $res=mysqli_query($conn,$sql);
        $blog=mysqli_fetch_assoc($res);
    }
?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    Add Blog
                </div>
                <x-alert></x-alert>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" id="id" value="<?= $blog['id']; ?>">
                        <div class="mt-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" value="<?= $blog['title']; ?>">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Purpose <span class="text-danger">*</span></label>
                            <input type="text" name="purpose" class="form-control" value="<?= $blog['purpose']; ?>">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Short Description <span class="text-danger">*</span></label>
                            <input type="text" name="short_description" class="form-control" value="<?= $blog['short_description']; ?>">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Long Description<span class="text-danger">*</span></label>
                            <textarea name="long_description" class="form-control" cols="30" rows="5"><?= $blog['long_description']; ?></textarea>
                        </div>
                        <div class="mt-3 text-center">
                            <button class="btn btn-sm btn-danger"  type="reset">Reset</button>
                            <button class="btn btn-sm btn-primary" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>