<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <title>
        Easy tache
    </title>
	<link rel="stylesheet" href="./views/style.css?=<?php time()?>">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
  
    
    <script src="https://cdn.tailwindcss.com"></script>  
      
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    
  </head>
  <body class="leading-normal tracking-normal text-white " style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white gradient">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class=" flex toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="home">
           
           
             <img class="w-14 h-14" src="./views/img/66276.png"  alt="easytache"> Easytache
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden  lg:mt-0  lg:bg-transparent text-black lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
                <a class="toggleColour text-white  inline-block py-2 px-4  font-bold no-underline hover:text-gray-800" href="home">Home</a>
              </li>
            <li class="mr-3">
              <a class="toggleColour inline-block text-white font-bold   no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="login">Get started</a>
            </li>
            <li class="mr-3">

              </a>
            </li>
          </ul>
          
          <?php
if(!isset($_SESSION['id'])){
 
?>
          <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full  lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"          >
          <a href="login">Log in</a>
          </button>
        <?php  }else{ ?>
            <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full  lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"          >
          <a href="logout">Log out</a>
          </button>
         <?php  } ?>
                 </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>