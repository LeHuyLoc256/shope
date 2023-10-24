<?php 
    include '../admin/inc/header.php';
    include '../admin/inc/sidebar.php';
?>
<?php 
    include '../classes/brand.php';
?>
<?php 
    $brand = new brand();
    if (!isset($_GET['brandId']) || $_GET['brandId'] == NULL) {
        echo "<script>window.location = 'list_brand.php'</script>";
    } else {
        $id = $_GET['brandId'];
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $brandName = $_POST['brandName'];
        $updateBrand = $brand->update_brand($brandName, $id);
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
                            if(isset($updateBrand)) {
                                echo $updateBrand;
                            }
                        ?>
                         </h1>

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
                            $get_brand_name = $brand->getbrandbyId($id);
                            if($get_brand_name) {
                                while($result = $get_brand_name->fetch_assoc()) {
                                
                        ?>
                        <div class="panel-body">
                            <form role="form" action = "" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <input class="form-control" type="text" name="brandName" placeholder="Sửa thương hiệu" 
                                            value = "<?php echo $result['brandName'] ?>">
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
