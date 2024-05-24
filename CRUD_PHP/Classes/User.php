<?php
    
    class User {
        public $id;
        public $name;
        public $email;
        public $password;

        // insert data 
        public static function insert($conn , $name  , $email , $password){
            $sql = "INSERT INTO users (name , email , password) VALUES (? ,?, ?)";
            $stmt = mysqli_prepare($conn , $sql);
            mysqli_stmt_bind_param($stmt , 'sss' , $name , $email , $password);
            if(mysqli_stmt_execute($stmt)){
                return true;
            }
            else{
                return false;
            }


        }

        //showALl Data in Admin page
        public static function showAll($conn)
        {
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn , $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        // ShowOne Data 

        public static function showOne($conn , $id)
        {
            $sql = "SELECT * FROM users where id = $id";
            $result = mysqli_query($conn , $sql);
            return mysqli_fetch_assoc($result);
        }

        //update data
        public static function update($conn, $id , $name , $email , $password){
            $sql = "UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?";

            $stmt = mysqli_prepare($conn, $sql);
            
            mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $password , $id);
            
            if(mysqli_stmt_execute($stmt)){
                return true;
            } else {
                return false;
            }
    }


    //delete data 
    public static function delete ($conn , $id){
        $sql =  "DELETE FROM users WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
            
        mysqli_stmt_bind_param($stmt, 'i', $id);
        
        if(mysqli_stmt_execute($stmt)){
            return true;
        } else {
            return false;
        }
    }
}