<?php
declare(strict_types = 1);

namespace PhpOop\Ch02\Challenge;


/**
 * Bicycle class
 * @package PhpOop\Ch02\Challenge
 */
class Bicycle{

    /**
     * @var string $brand
     */
    public $brand;

    /**
     * @var string $model
     */
    public $model;

    /**
     * @var string $year
     */
    public $year;

    /**
     * @var string $description
     */
    public $description;

    /**
     * @var float $weight_kg
     */
    public $weight_kg = 0;

    const KG_POUNDS = 2.20462;

    /**
     * Get bike name
     *
     * @return string
     */
    public function name() : string{
        return "{$this->brand} {$this->model} ({$this->year})";
    }

    /**
     * Get bike weight in pounds
     *
     * @return float
     */
    public function get_weight_Ibs() :float {
        return floatval($this->weight_kg * self::KG_POUNDS);
    }

    /**
     * Set weight of the bike by convert the given weight in pounds to kilograms
     *
     * @param float $pounds
     * @return void
     */
    public function set_weight_Ibs(float $pounds) :void {
        $this->weight_kg = floatval($pounds / self::KG_POUNDS);
    }


}