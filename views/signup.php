<?php
if(isset($_SESSION['id'])){
    header('Location:home');}
if(isset($_POST['user_add'])){
            if($_POST['password']===$_POST['confirm_password']){
                $user= new usercontroller();
                $user->sign_up();
                header('Location:login');
                
            }else{
                echo '<script>alert(" the 2 password dont match")</script>';

            }
            

        }
        ?>
    <section class="top ">
        <div class="gradient ">
            <div class="bg-grey-lighter min-h-screen flex flex-col">
                <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                    <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                        <form action="" method="post">
                            <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                        
    
                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="email"
                            placeholder="Email" />
                            
                        
                        
    
                        <input 
                            type="password"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="password"
                            placeholder="Password" />
                        <input 
                            type="password"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="confirm_password"
                            placeholder="Confirm Password" />
    
                        <button
                            type="submit"
                            name="user_add"
                            class="w-full text-center py-3 rounded bg-gray-800 text-white hover:bg-green-dark focus:outline-none my-1"
                        >Create Account</button>
    
                        <div class="text-center text-sm text-grey-dark mt-4">
                            By signing up, you agree to the 
                            <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                                Terms of Service
                            </a> and 
                            <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                                Privacy Policy
                            </a>
                        </div>
    
                        </form>
                        
                    </div>
    
                    <div class="text-grey-dark mt-6 pb-8">
                        Already have an account? 
                        <a class="no-underline border-b border-blue text-blue " href="login">
                            Log in
                        </a>.
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
