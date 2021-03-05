<?php


class Person
{
    public $id;
    public $name;
    public $surname;
    public $birth_day;
    public $birth_place;
    public $birth_country;
    public $death_day;
    public $death_place;
    public $death_country;

    public function __construct($id, $name, $surname, $birth_day, $birth_place, $birth_country, $death_day, $death_place, $death_country) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->birth_day = $birth_day;
        $this->birth_place = $birth_place;
        $this->birth_country = $birth_country;
        $this->death_day = $death_day;
        $this->death_place = $death_place;
        $this->death_country = $death_country;
    }

}