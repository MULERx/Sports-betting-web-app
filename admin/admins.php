<?php include "includes/admin_header.php" ?>
        
        <?php 

            // if(!is_admin($_SESSION['username'])){

            //     header("Location: index.php");
            // }


         ?>







    <div id="wrapper">



        <!-- Navigation -->
 
        <?php include "includes/admin_navigation.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            
            
<?php include "includes/view_all_admins.php"; ?>

 
            
    
            

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

     
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>
