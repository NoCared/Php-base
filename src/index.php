<?php



// ------------------------------- CLASS -------------------------------

// class Person {
//     //attributs (variables)
//     public $nom;
//     public $age;

//     //methodes (fonctions)
//     public function courir()
//     {
//         echo $this->nom . " court lentement !";
//     }
// }

// $person1 = new Person();
// $person1->nom = 'Jon doe';
// $person1->age = 30;
// $person1->courir();
// dd($person1);


require './database.php';

$db = new Database();
$articles = $db->query('SELECT * FROM post')->fetchAll(PDO::FETCH_ASSOC);


include './views/index.view.php';

?>



