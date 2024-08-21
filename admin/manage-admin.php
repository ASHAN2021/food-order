<?php
    include('partials/menu.php');
?>

        <!------menu section start------>
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1><br/><br/><br/>
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br/><br/><br/>

                <?php
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Full name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                        $sql = "SELECT * FROM tbl_admin";
                        $res = mysqli_query($conn,$sql);

                        if($res==TRUE){
                            $count = mysqli_num_rows($res);
                            if($count>0){
                                while($rows = mysqli_fetch_assoc($res)){
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];


                                  ?>
                                            <tr>
                                                <td><?php echo $id ?></td>
                                                <td><?php echo $full_name ?></td>
                                                 <td><?php echo $username ?></td>
                                                 <td>
                                                    <a href="#" class="btn-secondary">update Admin </a> 
                                                    <a href="#" class="btn-danger">delete Admin </a> 
                                                </td>
                                            </tr>
                                  
                                  <?php
                                }
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
        <!------main-content section end-------->

<?php
    include('partials/footer.php');
?>