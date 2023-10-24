<?php 
    include '../admin/inc/header.php';
    include '../admin/inc/sidebar.php';
?>

<?php 
    include '../classes/category.php';
?>
<?php 
    $cat = new category();
    if (!isset($_GET['catId']) || $_GET['catId'] == NULL) {
        echo "<script>window.location = 'list_category.php'</script>";
    } else {
        $id = $_GET['catId'];
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $catName = $_POST['catName'];
        $updateCat = $cat->update_category($catName, $id);
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
                            if(isset($updateCat)) {
                                echo $updateCat;
                            }
                        ?></h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        
                        
                        <?php 
                            $get_cate_name = $cat->getcatbyId($id);
                            if($get_cate_name) {
                                while($result = $get_cate_name->fetch_assoc()) {
                                
                        ?>
                        <div class="panel-body">
                            <form role="form" action = "" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="text" name="catName" placeholder="Sửa danh mục" 
                                            value = "<?php echo $result['catName'] ?>">
                                        </div>
                                 
                                        <button type="submit" class="btn btn-info" name="submit">Update</button>

                            </form>
                        <?php 
                            }
                        }
                        ?>  
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
