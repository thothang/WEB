<?php
    include "database.php"
?>
<?php

    class product{
        private $db;

        public function __construct(){
            $this -> db = new Database();
        }

        public function show_cartegory(){
            $query = "select * from tbl_cartegory order by cartegory_id desc";
            $result = $this -> db ->select($query);
            return $result;
        }

        public function insert_product(){
            $product_name = $_POST['product_name'];
            $cartegory_id = $_POST['cartegory_id'];
            $product_price = $_POST['product_price'];
            $product_textarea = $_POST['product_textarea'];
            $product_img = $_FILES['product_img']['name'];
            move_uploaded_file($_FILES["product_img"]['tmp_name'],"uploads/".$_FILES['product_img']['name']);
            $query = "insert into tbl_product(product_name,cartegory_id,product_price,product_textarea,product_img) values ('$product_name','$cartegory_id','$product_price','$product_textarea','$product_img')";
            $result = $this -> db ->insert($query);
            // header("Location: productlist.php");
            // return $result;
        }






























        

        public function get_cartegory($cartegory_id){
            $query = "select * from tbl_cartegory where cartegory_id = '$cartegory_id'";
            $result = $this -> db ->select($query);
            return $result;
        }

        public function update_cartegory($cartegory_name,$cartegory_id){
            $query = "update tbl_cartegory set cartegory_name = '$cartegory_name' where cartegory_id = '$cartegory_id'";
            $result = $this -> db ->update($query);
            header("Location: cartegorylist.php");
            return $result;
        }

        public function delete_cartegory($cartegory_id){
            $query = "delete from tbl_cartegory where cartegory_id = '$cartegory_id'";
            $result = $this -> db ->delete($query);
            header("Location: cartegorylist.php");
            return $result;
        }
    }
?>