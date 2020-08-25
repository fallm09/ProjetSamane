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
use src\model\ClientRepository;

class ClientController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method 
     * localhost/client/addClient/
     */
    public function index(){
       

        return $this->view->load("client/testClient");
    }

    /*public function add(){
        $data["client_moral"] ="Nom";

        return $this->view->load("client/testClient",$data);
    }*/
    /** 
     * url pattern for this method
     * localhost/client/get/123
     */

    public function get($id){
        $data["client"] = "l'id de client est "  .$id;

        return $this->view->load("client/get", $data);
    }
    /* 
    public function get($id){
        
        $data['test'] = $tdb->getTest($id);
        
        return $this->view->load("test/get", $data);
    }
    */
    /** 
     * url pattern for this method
     * localhost/projectName/Test/liste
     */
    /*public function liste(){
        $tdb = new TestRepository();
        
        $data['tests'] = $tdb->listeTest();
        return $this->view->load("test/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Test/add
     */
    public function add(){
        $tdb = new ClientRepository();
        if(isset($_POST['valider']))
        {
            extract($_POST);
            $data['ok'] = 0;
           // if(!empty($valeur1) && !empty($valeur2)) {
              var_dump($_POST);
                $ClientObject = new Client();
               // var_dump($_POST);
               // die;
                
                $ClientObject->setNom($nomclientphysique);
                $ClientObject->setPrenom($Prenomclientphysique);  
                $ClientObject->setAdresse($adresseclientphysique);  
                $ClientObject->setEmail($emailclientphysique);  
                $ClientObject->setTelephone($telephoneclientphysique);
                $ClientObject->setSalaire($salaireclientphysique);
                $ClientObject->setProfession($professionclientphysique);
                //var_dump($_POST);
               // die;

                $ok = $tdb->addClient($ClientObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("Client/testClient", $data);
        }/*else{
            return $this->view->load("test/add");
        }
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Test/update
     */
   /* public function update(){
        $tdb = new TestRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($valeur1) && !empty($valeur2)) {
                $testObject = new Test();
                $testObject->setId($id);
                $testObject->setValeur1($valeur1);
                $testObject->setValeur2($valeur2);
                $ok = $tdb->updateTest($testObject);
            }
        }
        
        return $this->liste();
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Test/delete/value
     */
  /*  public function delete($id){
        
        $tdb = new TestRepository();
        $tdb->deleteTest($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/edit/value
     */
   /* public function edit($id){
        
        $tdb = new TestRepository();
        
        $data['test'] = $tdb->getTest($id);
        var_dump($tdb->getTest($id));
        return $this->view->load("test/edit", $data);
    }*/
}

?>