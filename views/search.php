<?php
if(!isset($_SESSION['id'])){
    header('Location:login');}
    
$a = new tachescontroller();
$taches = $a->searchtaches();
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
?>
<section class="  top  back mt-8">
    <div class="flex justify-start">
        <a href="taches">
            <button
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full  lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                back home
            </button>
        </a>
    </div>
    <div class="flex justify-center pb-28 items-center">
    <div class="h-fit py-3 mt-8 flex flex-col w-8/12  min-h-min border-2 rounded bg-white">

<H2 class="text-black text-center font-bold "> found taches(
    <?php echo count($taches) ?>)
</H2>
<div id="todo" class=" bg-gray-300 flex flex-col overflow-y-auto max-h-80 px-6 rounded">
    <?php
    if (count($taches) === 0) { ?>
        <h2 class="text-red-800 font-bold">no found taches</h2>
        <?php

    }
    ?>
    <?php
    foreach ($taches as $tache) {
        ?>
        <div class="my-2 bg-white rounded p3 px-4 text-black ">
            <div class="flex justify-between">
                <p class=" resize-none  bg-white font-bold"> In
                    <?php echo $tache['status'] ?> list
                <p class=" resize-none  py-3  bg-white font-bold">to do before:
                    <?php echo $tache['deadline'] ?>

                </p>

            </div>
            <p class=" resize-none  bg-white font-bold">
                <?php echo $tache['description'] ?>


            <div class=" bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center"
                id="overlay<?php echo $tache['id'] ?>">
                <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-bold">update</h4>
                        <div onclick="closegg(<?php echo $tache['id'] ?>)">
                            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full close-modal"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <form method="post">
                        <label class="text-red-400" for="">previous deadline [
                            <?php echo $tache['deadline'] ?>]
                        </label>
                        <input type="date" name="deadline" id="">
                        <label class="text-red-400" for="">previous status [
                            <?php echo $tache['status'] ?>]
                        </label>
                        <div class="mt-2 text-sm ">

                            <select name="status" id="" required>
                                <option value=""></option>
                                <option value="todo">todo</option>
                                <option value="doing">doing</option>
                                <option value="done">done</option>
                            </select>


                            <textarea class="text-black resize-none" column="40"
                                name="descredit"><?php echo $tache['description'] ?></textarea>
                            <input type="hidden" name="editid" value="<?php echo $tache['id'] ?>">
                        </div>
                        <div class="mt-3 flex justify-end space-x-3">
                            <button type="button" onclick="closegg(<?php echo $tache['id'] ?>)"
                                class="close-modal px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">Cancel</button>
                            <button type="submit"
                                class="px-3 py-1 bg-blue-800 text-gray-200 hover:bg-blue-600 rounded"
                                name="edit">edit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex justify-between">
                <button class="font-bold   text-blue-300" onclick="testgg(<?php echo $tache['id'] ?>)">
                    edit
                </button>
                <form method="post">
                    <input type="hidden" name="deleteid" value="<?php echo $tache['id'] ?>">
                    <button class="font-bold text-red-900" name="delete">delete</button>
                </form>
            </div>



        </div>
        <?php
    }
    ?>
</div>
    </div>




    </div>



</section>