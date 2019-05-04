<?php
declare(strict_types = 1);

namespace PhpOop\Ch02\ReferToAnInstance;

require_once ('Student.php');

$student1 = new Student();
//Assign value to object property
$student1->first_name = 'Lucy';
$student1->last_name = 'Giles';

echo $student1->first_name ." ".$student1->last_name." <br>";

//Second instance of Student Class
$student2 = new Student();
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';

// Get value of object property
echo $student2->first_name ." ".$student2->last_name." <br>";

//Call method
echo $student1->sayHello() . " <br>";
echo $student2->sayHello() . " <br>";

echo $student1->fullName() . " <br>";

// Get list class properties their properties
$className = "Student";
$className = "PhpOop\Ch02\ReferToAnInstance\\".$className;
$class_methods = get_class_methods($className);
echo "Class_methods: ". implode(', ',$class_methods)." <br>";



$method = "sayHello";
// return whether property exist on the class or the object.
echo "Method {$method} exists ". (method_exists(Student::class, $method) == true ? 'true': 'false')."<br>"; 
echo "Method {$method} exists ". (method_exists($student2, $method) == true ? 'true': 'false')."<br>"; 

$method = "age";
echo "Method {$method} exists ". (method_exists('Student', $method) == true ? 'true': 'false')."<br>"; 
echo "Method {$method} exists ". (method_exists($student1, $method) == true ? 'true': 'false')."<br>"; 

