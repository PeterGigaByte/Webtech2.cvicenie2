<?php


class Placing
{
    public $id;
    public $person_id;
    public $oh_id;
    public $placing;
    public $discipline;

    public function __construct($id,$person_id,$oh_id,$placing,$discipline) {
        $this->id = $id;
        $this->person_id = $person_id;
        $this->oh_id = $oh_id;
        $this->placing = $placing;
        $this->discipline = $discipline;
    }
}