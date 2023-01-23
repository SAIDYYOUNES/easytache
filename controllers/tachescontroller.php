<?php




class tachescontroller
{


    public function add_todotache()
    {
        $data = array(

            'description' => htmlspecialchars($_POST['description']),
            'deadline' => $_POST['deadline']


        );

        $result = tachesmodel::addtodotache($data);
    }
    public function add_doingtache()
    {
        $data = array(

            'description' => htmlspecialchars($_POST['description1']),
            'deadline' => $_POST['deadline1']

        );

        $result = tachesmodel::adddoingtache($data);
    }
    public function add_donetache()
    {
        $data = array(

            'description' => htmlspecialchars($_POST['description2']),
            'deadline' => $_POST['deadline2']

        );

        $result = tachesmodel::adddonetache($data);
    }
    public function gettodotaches()
    {
        return tachesmodel::todotaches();

    }
    public function getdoingtaches()
    {
        return tachesmodel::doingtaches();

    }
    public function getdonetaches()
    {
        return tachesmodel::donetaches();

    }
    public function searchtaches()
    {
        $word[1] = htmlspecialchars($_POST['searchinp']) . '%';
        $word[2] = '%' . htmlspecialchars($_POST['searchinp']);
        $word[3] = '%' .htmlspecialchars( $_POST['searchinp']) . '%';




        return tachesmodel::gettaches($word);


    }
    public function addmultipletaches()
    {
        $nbr = $_POST['tachesnbr'];
        // die( print( $_POST['input4']) );
        for ($i = 1; $i <= $nbr; $i++) {
            // $d = array();

            ${'d' . $i} = array(
                "description" =>htmlspecialchars( $_POST['input' . $i]),
                "deadline" => htmlspecialchars($_POST['date' . $i])
            );
            tachesmodel::addtaches(${'d' . $i});

        }
        header('Location: taches');

    }


    public function deletetache($id)
    {

        tachesmodel::delete_tache($id);

    }

    public function update_tache($data_update)
    {

        $result = tachesmodel::update_tache($data_update);

    }
}






// if (isset($_POST['delete'])) {
//     $delete = new ADD_tache();
//     $delete->delete_tache();
//     header('location:Dashboard.php');

// }
