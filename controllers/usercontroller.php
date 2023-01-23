<?php
// session_start();

    class usercontroller{
        public function sign_up() {
        $psw = password_hash($_POST['password'],PASSWORD_DEFAULT);
        // if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        //     echo '<script>alert("invalid email email")</script>';
           
        //     die();
        //   }
          
        
        
                $data=array(
                    
                    'email'    => $_POST['email'],
                    'password' => $psw
                    
                    


                );
            
            $result=usermodel::add_user($data);
            
        }

        public function login(){
            
            $email = $_POST['email'];
            $psw = $_POST['password'];
            
            
                $result=usermodel::get_user($email);
                
                
                
                if($result->email===$email && password_verify($psw, $result->password)){
                    
                    $_SESSION["login"] = true;
                    
                    $_SESSION['id']=$result->id; 
                    
                    header('Location: taches');
                
                        
                }else{
                    
                    echo '<script>alert("wrong password or email")</script>';
                }
            
            }
            
        
        
    }
        // if(isset($_POST['login'])){
    
        //     $user= new usercontroller();
        //     $user->login();

            
            
            
        // }
        

        
        
    
        ?>