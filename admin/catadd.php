<?php 
    include '../admin/inc/header.php';
    include '../admin/inc/sidebar.php';
?>
<?php 
    include '../classes/category.php';
?>
<?php 
    $cat = new category();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $catName = $_POST['catName'];

        $insertCat = $cat->insert_category($catName);
   }
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Basic Forms</h1>
                        <h1 class="page-subhead-line">
                        <?php 
                            if(isset($insertCat)) {
                                echo $insertCat;
                            }
                        ?> </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        
                        <div class="panel-body">
                            <form role="form" action = "catadd.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="text" name="catName">
                                        </div>
                                 
                                        <button type="submit" class="btn btn-info" name="submit">Add New</button>

                                    </form>
                                    
                            </div>
                        </div>
                            </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
