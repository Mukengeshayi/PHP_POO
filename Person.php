<?php
class Person{
    var $firstName;
    var $lastName;
    var $age;

    public function __construct($firstName, $lastName, $age)
    {
        echo $this->firstName=$firstName;
        echo  $this->firstName=$lastName;
        echo $this->firstName=$age;
    }

}
$honore= new Person('Desire', 'muk', 10 );
$toto= new Person('Henock', 'nkoy',20);



