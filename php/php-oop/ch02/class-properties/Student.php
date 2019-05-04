<?php
declare(strict_types = 1);
namespace PhpOop\Ch02\ClassProperties;

/**
 * Class Student
 * @package PhpOop\Ch02\ClassProperties
 */
class Student{

    /**
     * Store student's first name
     *
     * @var string $first_name
     */
    public $first_name;

    /**
     * Store student's last name
     *
     * @var string $last_name;
     */
    public $last_name;

    /**
     * Store student's country of birth
     *
     * @var string $country;
     */
    public $country = 'None';
}