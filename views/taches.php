<?php

if(!isset($_SESSION['id'])){
  header('Location:login');}
  
$tache = new tachescontroller();
$todotaches = $tache->gettodotaches();

$tache = new tachescontroller();
$doingtaches = $tache->getdoingtaches();

$tache = new tachescontroller();
$donetaches = $tache->getdonetaches();
if (isset($_POST['addtodotache']) && $_POST['description'] != null) {

    $a = new tachescontroller();
    $a->add_todotache();



}
if (isset($_POST['adddoingtache']) && $_POST['description1'] != null) {

    $a = new tachescontroller();
    $a->add_doingtache();



}
if (isset($_POST['adddonetache']) && $_POST['description2'] != null) {

    $a = new tachescontroller();
    $a->add_donetache();



}
if (isset($_POST['edit']) ) {
    $data_update = array(
        'id' => $_POST['editid'],
        'description' => $_POST['descredit'],
        'status' => $_POST['status'],
        'deadline' => $_POST['deadline'],
    );

    $a = new tachescontroller();
    $a->update_tache($data_update);



}
if (isset($_POST['delete']) ) {
    $id = array(
        'id' => $_POST['deleteid']
        
    );
    // die(print_r($id));

    $a = new tachescontroller();
    $a->deletetache($id);



}
if (isset($_POST['addtaches']) and isset($_POST['tachesnbr'])) {
    $a = new tachescontroller();
    $a->addmultipletaches();
    
}


?>
 <!-- add many taches -->
 <div class=" bg-black bg-opacity-50 absolute inset-0 hidden  flex justify-center items-center"
                                id="taches">
                                <div class="bg-gray-200 max-w-sm py-2 px-3 w-80 rounded shadow-xl text-gray-800">
                                    <div class="flex justify-between items-center">
                                        <h4 class="text-lg font-bold">add many taches(backlog)</h4>
                                        <div onclick="taches()">
                                            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full close-modal"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <form  method="post">
                                    <input type="number"  class="block border border-grey-light w-full p-3 rounded mb-4" min="0" max="5" onchange="tachesnumber(value)"  name="tachesnbr">
                                        <div id="tachesdiv">

                                        </div>

                                        
                                    <div class="flex justify-between">
                                    <button name="addtaches">add taches</button>
                                    <button type="button" onclick="taches()">cancel</button>
                                    </div>
                                    </form>
                                </div>
</div>


<section class=" top back">
    <div class="px-3 pt-3 flex-col sm:flex  justify-between">
        <button id="tachesbtn" onclick="taches()" class="mx-auto  hover:underline bg-white text-gray-800 font-bold rounded-full  lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            add taches
        </button>
        
        <form class="mt-2" method="post" action="search" autocomplete="off">
            <div class="flex justify-end">
                <input class="rounded-full bg-gray-200 pl-3 text-black " name="searchinp" type="text" placeholder="        search">
                <button name="search"  class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full  lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    search a tache
                </button>
            </div>
        </form>
        

    </div>
    <div class=" w10/12  pt-8 flex justify-center py-6">
        <div class=" w-full  flex flex-wrap justify-around pt-4 pb-12">
            <div class="h-fit py-3 flex flex-col w-80  min-h-min border-2 rounded bg-white">

                <H2 class="text-black text-center font-bold "> to do(<?php echo count($todotaches) ?>)</H2>
                <div id="todo" class=" bg-gray-300 flex flex-col overflow-y-auto max-h-80 px-6 rounded">
                    <?php
                    foreach ($todotaches as $todo):
                        ?>
                        <div class="my-2 bg-white rounded p3 px-4 text-black ">
                            <p class=" resize-none  bg-white font-bold" >
                                                        <?php echo $todo['description'] ?>
                                                        <p class=" resize-none  bg-white font-bold" >todo before:
                                                        <?php echo $todo['deadline'] ?>

                    </p>
                            
                            <div class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center"
                                id="overlay<?php echo $todo['id'] ?>">
                                <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
                                    <div class="flex justify-between items-center">
                                        <h4 class="text-lg font-bold">update</h4>
                                        <div onclick="closegg(<?php echo $todo['id'] ?>)">
                                            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full close-modal"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <form method="post">
                                    <label class="text-black font-bold " for="">previous deadline [<?php echo $todo['deadline'] ?>]</label>
                                    <input type="date" name="deadline" value="<?php echo $todo['deadline'] ?>">
                                    <label class="text-black font-bold" for="">previous status [<?php echo $todo['status'] ?>]</label>
                                        <div class="mt-2 text-sm ">
                                            
                                            <select name="status" id="" required>
                                                <option value=""></option>
                                                <option value="todo">todo</option>
                                                <option value="doing">doing</option>
                                                <option value="done">done</option>
                                            </select>
                                            
                                            
                                            <textarea class="text-black resize-none" column="40" name="descredit" ><?php echo $todo['description'] ?></textarea>
                                            <input type="hidden" name="editid" value="<?php echo $todo['id'] ?>">
                                        </div>
                                        <div class="mt-3 flex justify-end space-x-3">
                                            <button type="button" onclick="closegg(<?php echo $todo['id'] ?>)"
                                                class="close-modal px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">Cancel</button>
                                            <button type="submit" class="px-3 py-1 bg-blue-800 text-gray-200 hover:bg-blue-600 rounded"
                                                name="edit">edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <button class="font-bold   text-blue-300"
                                    onclick="testgg(<?php echo $todo['id'] ?>)">
                                    edit
                                </button>
                                <form method="post">
                                <input type="hidden" name="deleteid" value="<?php echo $todo['id'] ?>">
                                <button class="font-bold text-red-900" name="delete">delete</button>
                                </form>
                            </div>
                            


                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
                <div id="todoarea" class="gb-white hidden  ">
                    <form method="post">
                        
                        <textarea class="textarea" name="description"></textarea>
                        <label class="text-black font-bold" for="">select your deadline:</label>
                        <input class="border" type="date" name="deadline">
                        <div class="flex">
                            <button name="addtodotache" type="submit"
                                class="mx-auto w-5/12 bg-blue-400 rounded hover:bg-blue-800 p-1 text-white h focus:outline-none focus:shadow-outline duration-300 ease-in-out">add
                                tache</button>
                            <button onclick="todoarea()" type="button"
                                class="mx-auto w-5/12 font-bold   p-1 text-black h focus:outline-none focus:shadow-outline duration-300 ease-in-out">X</button>
                            
                        </div>


                    </form>

                </div>
                <button id="todobutton" onclick="todoarea()"
                    class=" mx-auto w-11/12 bg-gray-100 p-1 text-gray-700 hover:bg-gray-300 focus:outline-none focus:shadow-outline duration-300 ease-in-out">
                    + add a tache
                </button>


            </div>
            <div id="doing" class=" py-3 flex flex-col w-80 h-fit  border-2 rounded bg-white">
                <H2 class="text-black text-center font-bold "> doing(<?php echo count($doingtaches) ?>)</H2>
                <div id="doing" class="bg-gray-300 flex flex-col overflow-y-auto max-h-80 px-6 rounded">
                <?php
                    foreach ($doingtaches as $doing):
                        ?>
                        <div class="my-2 bg-white rounded p3 px-4 text-black ">
                            <p class=" resize-none  bg-white font-bold" >
                                                        <?php echo $doing['description'] ?>
                            <p class=" resize-none  bg-white font-bold" >todo before: 
                                                        <?php echo $doing['deadline'] ?>

                    </p>
                            
                            <div class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center"
                                id="overlay<?php echo $doing['id'] ?>">
                                <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
                                    <div class="flex justify-between items-center">
                                        <h4 class="text-lg font-bold">update</h4>
                                        <div onclick="closegg(<?php echo $doing['id'] ?>)">
                                            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full close-modal"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <form method="post">
                                    <label class="text-black font-bold" for="">previous deadline [<?php echo $doing['deadline'] ?>]</label>
                                    <input type="date" name="deadline" value="<?php echo $doing['deadline'] ?>">
                                    <label class="text-black font-bold" for="">previous status [<?php echo $doing['status'] ?>]</label>
                                        <div class="mt-2 text-sm">
                                            <select name="status" id="" required>
                                                <option value=""></option>
                                                <option value="todo">todo</option>
                                                <option value="doing">doing</option>
                                                <option value="done">done</option>
                                            </select>
                                            
                                            
                                            <textarea class="text-black resize-none" column="40" name="descredit" ><?php echo $doing['description'] ?></textarea>
                                            <input type="hidden" name="editid" value="<?php echo $doing['id'] ?>">
                                        </div>
                                        <div class="mt-3 flex justify-end space-x-3">
                                            <button type="button" onclick="closegg(<?php echo $doing['id'] ?>)"
                                                class="close-modal px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">Cancel</button>
                                            <button type="submit" class="px-3 py-1 bg-blue-800 text-gray-200 hover:bg-blue-600 rounded"
                                                name="edit">edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <button class="font-bold delete-btn  text-blue-300"
                                    onclick="testgg(<?php echo $doing['id'] ?>)">
                                    edit
                                </button>
                                <form method="post">
                                <input type="hidden" name="deleteid" value="<?php echo $doing['id'] ?>">
                                <button class="font-bold text-red-900" name="delete">delete</button>
                                </form>
                            </div>
                            


                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
                <div id="doingarea" class="gb-white hidden  ">
                    <form method="post">
                        
                        <textarea class="textarea" name="description1"></textarea>
                        <label class="text-black font-bold" for="">select your deadline:</label>
                        <input class="border" type="date" name="deadline1">
                        <div class="flex">
                        <button name="adddoingtache" type="submit"
                            class="mx-auto w-5/12 bg-blue-400 rounded hover:bg-blue-800 p-1 text-white h focus:outline-none focus:shadow-outline duration-300 ease-in-out">add
                            tache</button>
                        <button onclick="doingarea()" type="button"
                            class="mx-auto w-5/12 font-bold   p-1 text-black h focus:outline-none focus:shadow-outline duration-300 ease-in-out">X</button>

                        </div>
                    </form>

                </div>
                <button id="doingbutton" onclick="doingarea()"
                    class=" mx-auto w-11/12 bg-gray-100 p-1 text-gray-700 hover:bg-gray-300 focus:outline-none focus:shadow-outline duration-300 ease-in-out">
                    + add a tache
                </button>


            </div>
            <div id="done" class=" py-4 flex flex-col w-80 h-fit  border-2 rounded bg-white">
                <H2 class="text-black text-center font-bold "> done(<?php echo count($donetaches) ?>)</H2>
                <div id="done" class="bg-gray-300 flex flex-col overflow-y-auto max-h-80 px-6 rounded">
                     <?php
                    foreach ($donetaches as $done):
                        ?>
                        <div class="my-2 bg-white rounded p3 px-4 text-black ">
                            <p class=" resize-none  bg-white font-bold" readonly>
                                                        <?php echo $done['description'] ?>
                                                        <p class=" resize-none  bg-white font-bold" >todo before:
                                                        <?php echo $done['deadline'] ?>
                                                        

                    </p>
                            
                            <div class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center"
                                id="overlay<?php echo $done['id'] ?>">
                                <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
                                    <div class="flex justify-between items-center">
                                        <h4 class="text-lg font-bold">update</h4>
                                        <div onclick="closegg(<?php echo $done['id'] ?>)">
                                            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full close-modal"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <form method="post">
                                        <label class="text-black font-bold" for="">previous deadline [<?php echo $done['deadline'] ?>]</label>
                                        <input type="date" name="deadline" value="<?php echo $doing['deadline'] ?>">
                                        <label class="text-black font-bold" for="">previous status [<?php echo $done['status'] ?>]</label>
                                        <div class="mt-2 text-sm">
                                       
                                            <select name="status" id="" required>
                                                <option value=""></option>
                                                <option value="todo">todo</option>
                                                <option value="doing">doing</option>
                                                <option value="done">done</option>
                                            </select>
                                            
                                            
                                            <textarea class="text-black resize-none" column="40" name="descredit" ><?php echo $done['description'] ?></textarea>
                                            <input type="hidden" name="editid" value="<?php echo $done['id'] ?>">
                                        </div>
                                        <div class="mt-3 flex justify-end space-x-3">
                                            <button type="button" onclick="closegg(<?php echo $done['id'] ?>)"
                                                class="close-modal px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">Cancel</button>
                                            <button type="button" class="px-3 py-1 bg-blue-800 text-gray-200 hover:bg-blue-600 rounded"
                                                name="edit">edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <button class="font-bold delete-btn  text-blue-300"
                                    onclick="testgg(<?php echo $done['id'] ?>)">
                                    edit
                                </button>
                                <form method="post">
                                <input type="hidden" name="deleteid" value="<?php echo $done['id'] ?>">
                                <button class="font-bold text-red-900" name="delete">delete</button>
                                </form>
                            </div>
                            


                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
                <div id="donearea" class="gb-white hidden  ">
                    <form method="post">
                   
                        <textarea class="textarea" name="description2"></textarea>
                        <label class="text-black font-bold" for="">select your deadline:</label>

                        <input class="border" type="date" name="deadline2">
                        <div class="flex">
                        <button name="adddonetache" type="submit"
                            class="mx-auto w-5/12 bg-blue-400 rounded hover:bg-blue-800 p-1 text-white h focus:outline-none focus:shadow-outline duration-300 ease-in-out">add
                            tache</button>
                        <button onclick="donearea()" type="button"
                            class="mx-auto w-5/12 font-bold   p-1 text-black h focus:outline-none focus:shadow-outline duration-300 ease-in-out">X</button>

                        </div>
                    </form>

                </div>
                <button id="donebutton" onclick="donearea()"
                    class=" mx-auto w-11/12 bg-gray-100 p-1 text-gray-700 hover:bg-gray-300 focus:outline-none focus:shadow-outline duration-300 ease-in-out">
                    + add a tache
                </button>


            </div>
        </div>
    </div>



</section>