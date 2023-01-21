<?php

class usermodel {

static public function add_user($data){
    $db=Database::connect()->prepare('INSERT INTO user(  `email`, `password`)
                                    VALUES( :email, :password )');
        
        $db->bindParam( ':email',$data['email']);
        $db->bindParam( ':password',$data['password']);
       

        
            $db->execute();
            
        
}

static public function get_user($email){
        
    $db=Database::connect()->prepare("SELECT * FROM user WHERE email = :email");
    $db->bindParam(':email',$email);
    $db->execute();
    return $db->fetch(PDO::FETCH_OBJ);



}
}