<?php 
if(isset($_SESSION['id'])){
  header('Location:taches');}
	if(isset($_POST['login'])){
		$login = new usercontroller();
		$login->login();
        
        
	}
?>
    <section class=" top ">
        <div class="gradient pt-14 pb-14 flex justify-around  flex-wrap">
            <div class=" h-fit bg-white  shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <form  method="post">
                        <div class="mb-4">
                        <label class="block text-black text-sm font-bold mb-2" >
                            Email
                        </label>
                        <input class="shadow appearance-none border rounded w-9/12 py-2 px-3 text-black" name="email" type="text" placeholder="Email"/>
                        </div>
                        <div class="mb-6">
                        <label class="block text-black text-sm font-bold mb-2" >
                            Password
                        </label>
                        <input class="shadow appearance-none border border-red rounded w-9/12 py-2 px-3 text-black mb-3" name="password" type="password" placeholder="******************">
                        
                        </div>
                        <div class="flex items-center justify-center">
                        <button  name="login" type="submit" class="bg-gray-800 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" >
                            Log In
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-gray-800 hover:text-blue-darker" href="#">
                            Forgot Password?
                        </a>
                        <a class="inline-block align-baseline font-bold text-sm text-gray-800 hover:text-blue-darker" href="signup">
                            ||creat your account
                        </a>
                        </div>
                    </form>
                </div>
                <img class="w-2/5 h-2/5" src="./views/img/d0f3eb36c8104239b0e0b5613c9be6e5.png"alt="">
            
        </div>
        
    </section>
