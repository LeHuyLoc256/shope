<?php 
    include '../admin/inc/header.php';
    include '../admin/inc/sidebar.php';
?>
<?php 
    include '../classes/category.php';
?>
<?php 
    include '../classes/brand.php';
?>
<?php 
    include '../classes/product.php';
?>
<?php 
    $pro = new product();
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        
        $insertProduct = $pro->insert_product($_POST,$_FILES);

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
                            if(isset($insertProduct)) {
                                echo $insertProduct;
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
                           Add New Product
                        </div>
                        <div class="panel-body">
                            <form role="form" action = "productadd.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="productName">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select id = "" name = "category">
                                                <option>-------Select Category------</option>
                                                <?php 
                                                    $cat = new category();
                                                    $catlist = $cat->show_category();
                                                    if ($catlist) {
                                                        while ($result = $catlist->fetch_assoc()) {

                                                        
                                                ?>

                                                <option value = "<?php echo $result['catId'] ?>"><?php echo $result['catName'] ?></option>
                                                <?php 
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select id = "" name ="brand">
                                                <option>------Select Brand------</option>
                                                <?php 
                                                    $brand = new brand();
                                                    $brandlist = $brand->show_brand();
                                                    if ($brandlist) {
                                                        while ($result = $brandlist->fetch_assoc()) {

                                                        
                                                ?>

                                                <option value = "<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>
                                                <?php 
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="2" name="product_desc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price"></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Image</label>
                                            <input type="file" name="image"></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Type</label>
                                            <select id = "" name = "type">
                                                <option>Select Type</option>
                                                <option value = "1">Còn Hàng</option>
                                                <option value = "0">Hết Hàng</option>
                                            </select>
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