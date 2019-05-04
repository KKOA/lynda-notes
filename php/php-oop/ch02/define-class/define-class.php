<?php
declare(strict_types = 1);

namespace PhpOop\Ch02\DefineClass;
require_once('Student.php');

// use PhpOop\Ch02\DefineClass\Student as Student;

// Get array of declares classes include built in classes
$classes = get_declared_classes();
echo "Classes: ".implode(', ', $classes)."<br/>";

$class_names = ['Product','Student','student'];
foreach ($class_names as $key => $class_name) {
    //class_exists is case insensitive
    $class_name = "PhpOop\Ch02\DefineClass\\".$class_name;
    if(class_exists($class_name))
    {
        echo "{$class_name} is a declared class. <br>";
    }
    else
    {
        echo "{$class_name} is a not declared class. <br>";
    }
}