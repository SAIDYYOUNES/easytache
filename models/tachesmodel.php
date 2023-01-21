<?php


class tachesmodel
{

    static public function addtaches($data)
    {
        $db = Database::connect()->prepare("INSERT INTO taches( description	,status ,user_id ,deadline)
                                        VALUES(:description,'todo' , :user ,:deadline)");

        $db->bindParam(':description', $data['description']);
        $db->bindParam(':deadline', $data['deadline']);
        $db->bindParam(':user', $_SESSION['id']);

        $db->execute();
        $db = NULL;
        
    }
    static public function addtodotache($data)
    {
        $db = Database::connect()->prepare("INSERT INTO taches( description	,status ,user_id ,deadline)
                                        VALUES(:description,'todo' , :user ,:deadline)");

        $db->bindParam(':description', $data['description']);
        $db->bindParam(':deadline', $data['deadline']);
        $db->bindParam(':user', $_SESSION['id']);

        $db->execute();
        $db = NULL;
        header('Location: taches');
    }
    static public function adddoingtache($data)
    {
        $db = Database::connect()->prepare("INSERT INTO taches( description	,status ,user_id ,deadline)
        VALUES(:description, 'doing',  :user ,:deadline)");

        $db->bindParam(':description', $data['description']);
        $db->bindParam(':deadline', $data['deadline']);
        $db->bindParam(':user', $_SESSION['id']);

        $db->execute();
        header('Location: taches');
    }
    static public function adddonetache($data)
    {
        $db = Database::connect()->prepare("INSERT INTO taches( description	,status ,user_id ,deadline)
        VALUES(:description, 'done', :user ,:deadline)");

        $db->bindParam(':description', $data['description']);
        $db->bindParam(':deadline', $data['deadline']);
        $db->bindParam(':user', $_SESSION['id']);

        $db->execute();
        $db = NULL;
        header('Location: taches');
    }
    static public function todotaches()
    {
        $db = Database::connect()->prepare("SELECT * FROM taches where status='todo' and user_id=:user order by deadline asc");
        $db->bindParam(':user', $_SESSION['id']);
        $db->execute();
        $taches = $db->fetchAll();
        $db = NULL;



        return $taches;
    }
    static public function donetaches()
    {
        $db = Database::connect()->prepare("SELECT * FROM taches where status='done'and user_id=:user order by deadline asc");
        $db->bindParam(':user', $_SESSION['id']);
        $db->execute();
        $db->execute();
        $taches = $db->fetchAll();
        $db = NULL;



        return $taches;
    }
    static public function doingtaches()
    {
        $db = Database::connect()->prepare("SELECT * FROM taches where status='doing'and user_id=:user order by deadline asc");
        $db->bindParam(':user', $_SESSION['id']);
        $db->execute();
        $db->execute();
        $taches = $db->fetchAll();
        $db = NULL;



        return $taches;
    }
    // static public function getOnetache($id)
    // {
    //     $db = Database::connect()->prepare("SELECT * FROM taches WHERE id = :id");

    //     $db->bindParam(':id', $id['id']);
    //     $db->execute();
    //     $taches = $db->fetchAll();
    //     $db = NULL;



    //     return $taches;
    // }

    static public function update_tache($data_update)
    {
        // die(print_r($data_update));
        $db = Database::connect()->prepare("UPDATE taches SET description=:description ,  status=:status , deadline=:deadline
                                            WHERE id = :id");

        $db->bindParam(':id', $data_update['id']);
        $db->bindParam(':description', $data_update['description']);
        $db->bindParam(':status', $data_update['status']);
        $db->bindParam(':deadline', $data_update['deadline']);


        $db->execute();
        header('Location: taches');
    }


    static public function delete_tache($data)
    {
        $db = Database::connect()->prepare("DELETE FROM taches WHERE id = :id ");
        $db->bindParam(':id', $data['id']);
        $db->execute();
        header('Location: taches');
    }
}