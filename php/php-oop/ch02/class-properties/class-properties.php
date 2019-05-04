<?php
declare(strict_types = 1);
namespace PhpOop\Ch02\ClassProperties;

require_once('Student.php');

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

// Get list class properties their properties
$class_vars = get_class_vars("Student");
echo "Class_vars: <br>";
echo "<pre>";
echo print_r($class_vars);
echo "</pre>";

// Get list object properties their properties
$obj_vars = get_object_vars($student2);
echo "Class_vars: <br>";
echo "<pre>";
echo print_r($obj_vars);
echo "</pre>";

//get_class_vars return the default values for the class
//get_object_vars return the current values for that instance

$field = "country";
// return whether property exist on the class or the object.
echo "Property {$field} exists ". (property_exists(Student::class, $field) == true ? 'true': 'false')."<br>"; 
echo "Property {$field} exists ". (property_exists($student2, $field) == true ? 'true': 'false')."<br>"; 

$field = "age";
echo "Property {$field} exists ". (property_exists('Student', $field) == true ? 'true': 'false')."<br>"; 
echo "Property {$field} exists ". (property_exists($student1, $field) == true ? 'true': 'false')."<br>"; 

