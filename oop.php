<?php


class Book {


 // TODO: Add properties as Private
 private $title;
 private $availableCopies;


 
 public function __construct($title, $availableCopies) {


     // TODO: Initialize properties
     $this->title = $title;
     $this->availableCopies = $availableCopies;


     }


// TODO: Add getTitle method
public function getTitle(){
    return $this->title;
}


 
 // TODO: Add getAvailableCopies method
 public function getAvailableCopies(){  
    return "Available Copies of '$this->title': $this->availableCopies";
 }


 

 // TODO: Add borrowBook method
 public function borrowBook(){
     if($this->availableCopies>0){
         $this->availableCopies--;
         return true;
     }
     else{
         echo "This book is not available \n";
         return false;
     }
 }


 

 // TODO: Add returnBook method
 public function returnBook(){
     $this->availableCopies++;
 }


 
}


class Member {


 // TODO: Add properties as Private
 private $name;


 public function __construct($name) {


      // TODO: Initialize properties
      $this->name = $name;


     }



 // TODO: Add getName method
 public function getName(){
    return $this->name;
}


 
 // TODO: Add borrowBook method
function borrowBook($book){
    $book->borrowBook();
}

 

 // TODO: Add returnBook method
function returnBook($book){
        $book->returnBook();
}

 
}



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

$book1=new Book("The Great Gatsby", 5);
$book2=new Book("To Kill a Mockingbird", 3);
$member1=new Member("John Doe");
$member2=new Member("Jane Smith");


$member1->borrowBook($book1);
$member2->borrowBook($book2);

echo $book1->getAvailableCopies();
echo PHP_EOL;
echo $book2->getAvailableCopies();


 
// TODO: Apply Borrow book method to each member


 
// TODO: Print Available Copies with their names:


 
?>