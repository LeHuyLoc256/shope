<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');

?>


<?php 
    class product 
    {

        private $db;
        private $fm;

        public function __construct() {
            $this -> db = new Database();
            $this -> fm = new Format();
        }

        public function insert_product($data, $files) {

            
            $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
            $category = mysqli_real_escape_string($this->db->link, $data['category']); 
            $brand = mysqli_real_escape_string($this->db->link, $data['brand']); 
            $product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']); 
            $price = mysqli_real_escape_string($this->db->link, $data['price']); 
            $type = mysqli_real_escape_string($this->db->link, $data['type']); 

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image; 

            if($productName == "" || $category == "" || $brand == "" || $product_desc == "" || $price == "" || $type == "" || $file_name = "") {
                $alert = "Fields must not be empty";
                return $alert;
            } else {
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "INSERT INTO tbl_product(productName,catId,brandId,product_desc,price,type,image) 
                VALUES ('$productName','$category','$brand','$product_desc','$price','$type','$unique_image')";
                $result = $this->db->insert($query);   
                
                if ($result) {
                    $alert = "<span class='success'>Insert succesfully</span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'>Insert not succesfully</span>";
                    return $alert;
                }
            }
        }

        public function show_product() {

            $query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName 

            FROM tbl_product INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId

            INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId

            ORDER BY tbl_product.productId desc";

            $result = $this->db->select($query);
            return $result;
        }

        public function update_product($data, $files, $id) {
            $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
            $category = mysqli_real_escape_string($this->db->link, $data['category']); 
            $brand = mysqli_real_escape_string($this->db->link, $data['brand']); 
            $product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']); 
            $price = mysqli_real_escape_string($this->db->link, $data['price']); 
            $type = mysqli_real_escape_string($this->db->link, $data['type']); 

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;

            if($productName == "" || $category == "" || $brand == "" || $product_desc == "" || $price == "" || $type == "") {
                $alert = "Fields must not be empty";
                return $alert;
            } else {
                if(!empty($file_name)) {
                    move_uploaded_file($file_temp,$uploaded_image);
                    $query = "UPDATE tbl_product SET 
                    
                    productName = '$productName',
                    catId = '$category',
                    brandId = '$brand',
                    product_desc = '$product_desc',
                    price = '$price',
                    image = '$unique_image',
                    type = '$type'
                    WHERE productId = '$id'";

                    $result = $this->db->update($query);   
                                    
                    if ($result) {
                        $alert = "<span class='success'>Update succesfully</span>";
                        return $alert;
                    } else {
                        $alert = "<span class='error'>Update not succesfully</span>";
                        return $alert;
                    }

                } else {
                    // nếu user không chọn ảnh
                    $query = "UPDATE tbl_product SET 
                    productName = '$productName',
                    catId = '$category',
                    brandId = '$brand',
                    product_desc = '$product_desc',
                    type = '$type',
                    price = '$price'
                    WHERE productId = '$id'";

                    $result = $this->db->update($query);   
                                                        
                    if ($result) {
                        $alert = "<span class='success'>Update succesfully</span>";
                        return $alert;
                    } else {
                        $alert = "<span class='error'>Update not succesfully</span>";
                        return $alert;
                    }
                }
                
            }
            
                
            
        }

        public function del_product($id) {
            $query = "DELETE FROM tbl_product WHERE productId = '$id'";
            $result = $this->db->delete($query);

            if ($result) {
                $alert = "<span class='success'>Delete succesfully</span>";
                return $alert;
            } else {
                $alert = "<span class='error'>Delete not succesfully</span>";
                return $alert;
            }
        }

        public function getproductbyId($id) {
            $query = "SELECT * FROM tbl_product WHERE productId = '$id'";
            $result = $this->db->select($query);
            return $result;
        }
        //END BackENd
        // START FONTEND
        public function getproduct_feathered(){
            $query = "SELECT * FROM tbl_product WHERE type = '0'";
            $result = $this->db->select($query);
            return $result;
        }

        public function get_details($id){
            $query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName 

            FROM tbl_product INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId

            INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId

            WHERE tbl_product.productId = '$id'
            ";

           
            $result = $this->db->select($query);
            return $result;
        }
        
    }
?>