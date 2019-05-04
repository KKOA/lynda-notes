<?php
declare(strict_types = 1);

namespace PhpOop\Ch02\Instances;
require_once('Student.php');

$student1 = new Student();
$student2 = new Student();

echo get_class($student2)."<br>";

$class_names = ['Product','Student','student'];
foreach ($class_names as $key => $class_name) {
    //return true or false if the object has same class name as the string(second argument)
    // function is case insensitive
    $class_name = "PhpOop\Ch02\Instances\\{$class_name}";
    if(is_a($student1, $class_name))
    {
        echo "student1 is a instance of {$class_name}. <br>";
    }
    else
    {
        echo "student1 is not a instance of {$class_name}. <br>";
    }
}