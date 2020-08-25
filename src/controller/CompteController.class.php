<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller; 
use src\model\CompteRepository;

class CompteController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method 
     * localhost/compte/addCompte/
     */
    public function index(){
       

        return $this->view->load("Compte/testCompte");
    }

    public function addCompte(){
        $data[""] ="Nom";

        return $this->view->load("client/testClient",$data);
    }
    /** 
     * url pattern for this method
     * localhost/compte/get/123
     */

    public function get($id){
        $data["client"] = "l'id de client est "  .$id;

        return $this->view->load("client/get", $data);
    }
    
   /* public function get($id){
        
        $data['test'] = $tdb->getTest($id);
        
        return $this->view->load("test/get", $data);
    }*/
    
    /** 
     * url pattern for this method
     * localhost/projectName/Test/liste
     */
   /* public function Compte(){
        $tdb = new CompteRepository();
        
        $data['Compte'] = $tdb->CompteTest();
        return $this->view->load("test/Compte", $data);
    }*/
     /** 
     * url pattern for this method
     * localhost/projectName/Compte/add
     */
    public function add(){
        $tdb = new CompteRepository();

        // var_dump($_POST['valider']);
        // die;
        if(isset($_POST['valider']))
        {
            // var_dump($_POST);
            // die;
            extract($_POST);
            $data['ok'] = 0;
          // if(!empty($valeur1) && !empty($valeur2)) {
                
            //var_dump($_POST);
        
                $CompteObject = new Compte();
               // var_dump($CompteObject);
               // die;
                $CompteObject->setFrais($frais1);
                $CompteObject->setAgence($agence_epargne);
                $CompteObject->setRib($rib_epargne);
                $CompteObject->setNum_compte($numero_epargne);
               // var_dump($_POST);
                //die;
                $ok = $tdb->addCompte($CompteObject);

                $data['ok'] = $ok;

            
            return $this->view->load("Compte/testCompte", $data);
        }/*else{
          return $this->view->load("test/testCompte");
        }*/
    }

     /** 
     * url pattern for this method
     * localhost/projectName/Test/update
     */
    /* public function update(){
        $tdb = new CompteRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
           // if(!empty($id) && !empty($valeur1) && !empty($valeur2)) {
                $compteObject = new Compte();
                $compteObject->setId($id);
                $compteObject->setFrais($Frais);
                $compteObject->setAgence($setAgence);
                $compteObject->setRib($Rib);
                $compteObject->setNum_compte($Num_compte);
                $compteObject->setClient($Client);
                
                $ok = $tdb->updateTest($CompteObject);
            }
        }*/
        
        /*return $this->liste();
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Test/delete/value
     */
  /*  public function delete($id){
        
        $tdb = new CompteRepository();
        $tdb->deleteTest($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/edit/value
     */
   /* public function edit($id){
        
        $tdb = new CompteRepository();
        
        $data['compte'] = $tdb->getCompte($id);
        var_dump($tdb->getCompte($id));
        return $this->view->load("compte/edit", $data);
    }*/
}

?>