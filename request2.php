
<?php



class request {




  private $type;
  private $dbname;
  private $host;
  private $username;
  private $password;
  private $bdd;




  public function __construct($type,$host,$dbname,$username,$password){

    $this->type = $type;
    $this->dbname = $dbname;
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;

  }

  public function getmybdd(){
    try {

      $this->bdd = new PDO($this->type.':host='.$this->host.';dbname='.$this->dbname.'',$this->username, $this->password);
    } catch (PDOException $e) {
      print "Erreur ! Connection à la base de donné impossible <br/>";
      die();
    }
    return $this->bdd;
  }

  public function getAllRow($myTable){
    foreach($this->bdd->query('SELECT * FROM '. $myTable) as $row) {
      print_r($row);
    }
  }

  public function setInsert($nom, $prenom, $adress, $age){
      //query('INSERT INTO intervenants (, nom, prenom, adresses, age) VALUES (NULL,$nom , $prenom , $adress, $age);
      $query='INSERT INTO intervenants (nom, prenom, adresse, age) VALUES ($nom, $prenom, $adress, $age)';

      echo $query;

      $req = $bdd->prepare($query);
      $bdd->execute($req);
  }












}












?>
