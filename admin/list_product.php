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
    if (isset($_GET['productId'])) {

        $id = $_GET['productId'];
        $delPro = $pro->del_product($id);  
    }
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">
                        <?php 
                            if(isset($delPro)) {
                                echo $delPro;
                            }
                        ?></h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Product
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name Product</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Product Description</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th>Image</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $pro = new product();
                                            $prolist = $pro->show_product();
                                            if($prolist) {
                                                $i = 0;
                                                while($result = $prolist->fetch_assoc()) {
                                                    $i++;
                                                
                                        ?>
                                         <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $result['productName'] ?></td>
                                            <td><?php echo $result['catName'] ?></td>
                                            <td><?php echo $result['brandName'] ?></td>
                                            <td><?php echo $result['product_desc'] ?></td>
                                            <td><?php echo $result['price'] ?></td>
                                            <td><?php 
                                                if($result['type'] == 0) {
                                                    echo 'Còn Hàng';
                                                } else {
                                                    echo 'Hết Hàng';
                                                }
                                            ?></td>
                                            <td><img src = "uploads/<?php echo $result['image'] ?>" width = "80"></td>
                                            <td><a href = "productedit.php?productId=<?php echo $result['productId'] ?>">Edit</a> || 
                                            <a onclick = "return confirm('Are you sure want to delete')" href = "?productId=<?php echo $result['productId'] ?>">Delete</a></td>
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
                     <!-- End  Kitchen Sink -->
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
