<?php
class Animal {
    const MAMMAL;
    const FISH;
    const BIRD;
    protected function __contruct($const) {
        $this->MAMMAL = 0;
        $this->FISH = 1;
        $this->BIRD = 2;
    }
}
?>