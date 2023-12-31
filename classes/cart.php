<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
?>
<?php 
    class cart
    {
        private $db;
        private $fm;

        public function __construct() {
            $this -> db = new Database();
            $this -> fm = new Format();
        }

        public function add_to_cart($quantity, $id){
            $quantity = $this->fm->validation($quantity);
            $quantity = mysqli_real_escape_string($this->db->link, $quantity);
            $id = mysqli_real_escape_string($this->db->link, $id);
            $sId = session_id();

            $query = "SELECT * FROM tbl_product WHERE productId = '$id'  ";
            $result = $this->db->select($query)->fetch_assoc();

            $image = $result["image"];
            $price = $result["price"];
            $productName = $result["productName"];

            $check_cart = "SELECT * FROM tbl_cart WHERE productId = '$id' AND sId = '$sId' ";
            $check_cart = $this->db->select($check_cart);
            if(mysqli_num_rows($check_cart)>0){
                $alert = '<span>Đã thêm vào giỏ hàng</span>';
                return $alert;
            } else{

                $query_insert = "INSERT INTO tbl_cart(quantity,sId, image, price, productName, productId) 
                    VALUES ('$quantity','$sId', '$image', '$price', '$productName', '$id')";
                $insert_cart =  $this->db->insert($query_insert);

                if ($result) {
                    header('Location: cart.php');
                } else {
                header('Location: 404.php');
                }
            }
        }

        public function get_product_cart(){
            $sId = session_id();
            $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'  ";
            $result = $this->db->select($query);
            return $result;
        }

        public function update_quantity_cart($quantity, $cartId){
            $quantity = mysqli_real_escape_string($this->db->link, $quantity);
            $cartId = mysqli_real_escape_string($this->db->link, $cartId);
            $query = "UPDATE tbl_cart SET 
            quantity = '$quantity'
            WHERE cartId = '$cartId'";

            $result = $this->db->update($query);
            if($result){
                $msg = "<span class='success'>Product Quantity | Updated Successfully</span>";
                return $msg;
            }else{
                $msg = "<span class='error '>Product Quantity | Updated  Not Successfully</span>";
                return $msg;
            }
           
        }

        public function del_product_cart($cartid){
            $cartid = mysqli_real_escape_string($this->db->link, $cartid);
            $query = "DELETE FROM tbl_cart WHERE cartId = '$cartid' ";
            $result = $this->db->delete($query);
            // if($result){
            //     header('Location:cart.php');
            // }else{
            //     $msg = "<span class='error '>Deleted Not Successfully</span>";
            //     return $msg;
            // }
            if ($result) {
                $alert = "<span class='success'>Delete succesfully</span>";
                return $alert;
            } else {
                $alert = "<span class='error'>Delete not succesfully</span>";
                return $alert;
            }
        }
    }
?>