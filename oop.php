<?php


class Book {


 private $title;
private $availableCopies;

 
 public function __construct($title, $availableCopies=0) {


     $this->title = $title;
    $this->availableCopies = $availableCopies;

     }


public function getTitle() {
   return $this->title;
}


 
public function getAvailableCopies() {
   return $this->availableCopies;
}


 

public function borrowBook () {
    if ($this->availableCopies > 0) {
        $this->availableCopies--;
    } else {
        echo "No copies available for " . $this->getTitle() . "\n";
    }
}


 

 public function returnBook () {
    $this->availableCopies++;
}

}

class Member {


private $name;



 public function __construct($name) {


      $this->name = $name;


     }



 public function getName() {
   return $this->name;
 }


 
public function borrowBook($book) {
    $book->borrowBook();
}


 

public function returnBook($book) {
    $book->returnBook();
}


 
}





$Book1= new Book("The Great Gatsby", 5);
$Book2= new Book("To Kill a Mockingbird", 3);

 

$member1= new Member("John Doe");
$member2= new Member("Jane Smith");

 


$member1->borrowBook($Book1);
$member2->borrowBook($Book2);

echo "Available Copies of '" . $Book1->getTitle()."': " .$Book1->getAvailableCopies() . " \n";
echo "Available Copies of '" . $Book2->getTitle()."': ". $Book2->getAvailableCopies() . " \n";

?>