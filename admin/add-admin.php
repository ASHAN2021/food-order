<?php
    include('partials/menu.php');
?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Add Admin</h1><br/><br/><br/>
            <form action="" method="post">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name:</td>
                        <td>
                            <input type="text" name="fullname" placeholder="Your Full name" />
                        </td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                            <td>
                                <input type="text" name="username" placeholder="Your username" />
                            </td>
                    </tr>
                    <tr>
                        <td>password:</td>
                            <td>
                                <input type="password" name="password" placeholder="Your password" />
                            </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                                <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>
                </table>

        </div>

    </div>
<?php
    include('partials/footer.php');
?>

<?php
    if(isset($_POST['submit'])){
        $full_name=$_POST['fullname'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $sql = "INSERT INTO tbl_admin SET 
                full_name='$full_name',
                username='$username',
                password='$password' 
                ";
          $res = mysqli_query($conn,$sql) or die(mysqli_error());
          
          if($res===TRUE){
            $_SESSION["add"] = "Admin added successfully!!";
            header("location:".SITEURL."admin/manage-admin.php");
          }else{
            $_SESSION["add"] = "Failed to Add Admin";
            header("location:".SITEURL."admin/add-admin.php");
          }
    }


?>