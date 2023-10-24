
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo Session::get('adminName') ?>
                            <br />

                                <?php 
                                    if(isset($_GET['action']) && $_GET['action'] == 'logout') {
                                        Session::destroy();
                                    }
                                ?>
                                <small><a href="?action=logout">Logout</a></small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a  href="indexad.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-desktop "></i>Category</a>
                        <ul>
                            <li>
                                <a  href="catadd.php"><i class="fa fa-desktop "></i>Add Category</a>
                            </li>
                            <li>
                                <a  href="list_category.php"><i class="fa fa-desktop "></i>List Category</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-desktop "></i>Brand</a>
                        <ul>
                            <li>
                                <a  href="brandadd.php"><i class="fa fa-desktop "></i>Add Brand</a>
                            </li>
                            <li>
                                <a  href="list_brand.php"><i class="fa fa-desktop "></i>List Brand</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-desktop "></i>Product</a>
                        <ul>
                            <li>
                                <a  href="productadd.php"><i class="fa fa-desktop "></i>Add Product</a>
                            </li>
                            <li>
                                <a  href="list_product.php"><i class="fa fa-desktop "></i>List Product</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
            </div>

        </nav>