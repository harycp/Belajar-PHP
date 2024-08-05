<?php

class Person{
    var $name;
    var $age;
    var $birthday = false;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;

        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old";
    }

    public function getName():void{
        echo $this->name;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function getAge():void{
        echo $this->age;
    }

    public function setBirthday($today){
        $this->birthday = $today;
        $this->update_age();
    }

    private function update_age(){
        $this->age = ($this->birthday) ? ++$this->age : $this->age;
    }
}

$person1 = new Person("Harry", 19);

echo "\n";
$person1->getName();
$person1->setName("Mikky");
echo "\n";
$person1->getName();
echo "\n";
$person1->getAge();

echo "\n";
$person1->setBirthday(true);
$person1->getAge();

?>