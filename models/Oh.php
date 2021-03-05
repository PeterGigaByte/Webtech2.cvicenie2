<?php


class Oh
{
    public $id;
    public $type;
    public $year;
    public $ord;
    public $city;
    public $country;

    public function __construct($id,$type, $year, $ord, $city, $country) {
        $this->id = $id;
        $this->type = $type;
        $this->year = $year;
        $this->ord = $ord;
        $this->city = $city;
        $this->country = $country;
    }
}