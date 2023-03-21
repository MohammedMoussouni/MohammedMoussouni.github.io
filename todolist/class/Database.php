<?php

class Database //on appelle notre objet Database pour créer notre class
{

    private $db;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
   
    

    public function __construct($db_name, $db_user , $db_pass, $db_host) // le constructeur va servir à décrire les actions à effectuer dès l'initialisation avec en paramètre le nom du fichier de la BDD
    { 
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;

        $this->db = new PDO('mysql:host=localhost;dbname=id20283704_task', 'id20283704_root', 'Molikujy/123');
    
        

    }
    

   public function initialize(): void
   {
    
    try{
                //$sqlinit = "CREATE DATABASE IF NOT EXISTS id20283704_data";
                //$this->db->exec($sqlinit)or die(print_r($this->db->errorInfo(), true));
                


                $sql = "CREATE TABLE IF NOT EXISTS task
                (
                    id INT NOT NULL AUTO_INCREMENT, 
                    done BOOLEAN NOT NULL, 
                    name VARCHAR(255) NOT NULL,
                    deletebtn BOOLEAN NOT NULL, 
                    PRIMARY KEY (id)
                    );";
                
                $this->db->exec($sql);
                //echo 'Table bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
    //Create table
    
       /*  if ($this->db->query($sql) === TRUE) {
        echo "Table created successfully";
        } else {
        echo "Error creating table: " . $this->db->errorInfo();
        } */
   
    }




   public function getTasks(): array
   {
        $tasks= [];
        $row= [];
        $query = "SELECT * FROM task";
        
        //$result = mysqli_query($mysqli, $query);
        //$row = mysqli_fetch_array($result, MYSQLI_NUM);
        
        $data= $this->db->query($query);

        //$result = $data -> fetchAll();
         
        foreach($data as $row ) {
            $tasks[] = $row;
        }
       
  /*
        while($row = $data->fetchAll())
        { // tant qu'on a une ligne de données
           // # code ... on va ajouter des tâches
            $tasks[] = $row;
        }
*/
        return $tasks;
   }

   public function addTask(string $name): void
   {
        $query = "INSERT INTO task (`done`, `name`, `deletebtn`) VALUES (false, '$name', false)";//littéraux de gabarit (`` ALT Gr + 7)pour les noms de colonnes
        $this->exec($query);
    }

    public function updateTask(int $id, int $done)
    {
        //$sql = "UPDATE task SET done =$done WHERE id =$id";
        $sql = "UPDATE `task` SET `done` = $done WHERE `task`.`id` = $id";
        $this-> exec($sql);
        if($sql){
           echo 'élément n°'.$id.' mis à jour';
       }
       else{
           echo 'élément non mis à jour';
       }
    }

    public function deleteTask($item)
   {
   
       $sql = "DELETE FROM task WHERE id=$item";
       $this-> exec($sql);
       if($sql){
           echo 'élément n°'.$item.' supprimé';
       }
       else{
           echo 'élément non supprimé';
       }
       
   }

    public function getDatabase(): PDO
    {
        return $this->db;
    }

   
   public function exec(string $query): void
   {
    $this->db->prepare($query);
    $this->db->exec($query);
   }


   
    

   
}


?>

