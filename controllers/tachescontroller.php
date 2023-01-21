<?php




        class tachescontroller{
        
        
        public function add_todotache(){
                $data = array(
                
                'description'=>$_POST['description'],
                'deadline'=>$_POST['deadline']
                
                
            );
            
            $result=tachesmodel::addtodotache($data);
        }
        public function add_doingtache(){
                $data = array(
                
                'description'=>$_POST['description1'],
                'deadline'=>$_POST['deadline1']
                
            );
            
            $result=tachesmodel::adddoingtache($data);
        }
        public function add_donetache(){
                $data = array(
                
                'description'=>$_POST['description2'],
                'deadline'=>$_POST['deadline2']
                
            );
            
            $result=tachesmodel::adddonetache($data);
        }
        public function gettodotaches(){
            return tachesmodel::todotaches();
            
        }
        public function getdoingtaches(){
            return tachesmodel::doingtaches();
            
        }
        public function getdonetaches(){
            return tachesmodel::donetaches();
            
        }
        // public function gettache($id){
            
            
            
            
        //     return tachesmodel::getOnetache($id);
            
            
        // }
        public function addmultipletaches(){
            $nbr=$_POST['tachesnbr'];
            // die( print( $_POST['input4']) );
    for($i=1;$i<=$nbr;$i++){
            // $d = array();
           
            ${'d'.$i} = array(
            "description"=>$_POST['input'.$i],
            "deadline"=>$_POST['date'.$i]
        );
        tachesmodel::addtaches( ${'d'.$i});

    }
    header('Location: taches');

        }
        
        
        public function deletetache($id){
           
            tachesmodel::delete_tache($id);
            
        }
       
        public function update_tache($data_update){
           
            $result=tachesmodel::update_tache($data_update);
        
        }
    }
    





// if (isset($_POST['delete'])) {
//     $delete = new ADD_tache();
//     $delete->delete_tache();
//     header('location:Dashboard.php');

// }



        
   
    



