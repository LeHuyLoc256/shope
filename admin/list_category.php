<?php 
    include '../admin/inc/header.php';
    include '../admin/inc/sidebar.php';
?>
<?php 
    include '../classes/category.php';
?>
<?php 
    $cat = new category();
    if (isset($_GET['delId'])) {

        $id = $_GET['delId'];
        $delCat = $cat->del_category($id);  
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
                            if(isset($delCat)) {
                                echo $delCat;
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
                            ListProduct
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name Category</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $show_cate = $cat->show_category();
                                            if ($show_cate) {
                                                $i = 0;
                                                while ($result = $show_cate->fetch_assoc()){
                                                    $i++;
                                            
                                        ?>
                                         <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $result['catName'] ?></td>
                                            <td><a href = "catedit.php?catId=<?php echo $result['catId'] ?>">Edit</a> || 
                                            <a onclick = "return confirm('Are you sure want to delete')" href = "?delId=<?php echo $result['catId'] ?>">Delete</a></td>
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
