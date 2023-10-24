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
    if (!isset($_GET['productId']) || $_GET['productId'] == NULL) {
        echo "<script>window.location = 'list_product.php'</script>";
    } else {
        $id = $_GET['productId'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $updateProduct = $pro->update_product($_POST,$_FILES,$id);

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
                            if(isset($updateProduct)) {
                                echo $updateProduct;
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
                           Update Product
                        </div>
                        <div class="panel-body">
                            <?php 
                                $get_product_by_id = $pro->getproductbyId($id);
                                    if($get_product_by_id) {
                                        while($result_product = $get_product_by_id->fetch_assoc()) {
                            ?>
                            <form role="form" action = "" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="productName" 
                                            value = "<?php echo $result_product['productName'] ?>"> 
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

                                                <option 
                                                <?php 
                                                    if($result['catId'] == $result_product['catId']) {echo "selected";}

                                                ?>
                                                
                                                value = "<?php echo $result['catId'] ?>"><?php echo $result['catName'] ?></option>


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

                                                <option 
                                                <?php 

                                                    if($result['brandId'] == $result_product['brandId']) {echo "selected";}

                                                ?>
                                                
                                                value = "<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>

                                                <?php 
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="2" name="product_desc">
                                            <?php echo $result_product['product_desc'] ?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price"
                                            value = "<?php echo $result_product['price'] ?>"></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Image</label>
                                            <img src = "uploads/<?php echo $result_product['image'] ?>" width = "90"></br>
                                            <input type="file" name="image"></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Type</label>
                                          
                                            <select name="type" id = "">
                                                <option value="0" <?php echo ($result_product['type'] == 0) ? 'selected' : ''; ?>>Còn Hàng</option>
                                                <option value="1" <?php echo ($result_product['type'] == 1) ? 'selected' : ''; ?>>Hết Hàng</option>
                                            </select>

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