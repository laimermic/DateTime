<?php
class Time
{
    public int $hours;
    public int $minutes;
    public int $seconds;

    public function __construct(int $hours = 0, int $minutes = 0, int $seconds = 0) {
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }

    public function __add($first, $second) {

    }
}

?>