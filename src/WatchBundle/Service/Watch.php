<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Watch
 *
 * @author Lukasz
 */

namespace WatchBundle\Service;

class Watch {
    
    
    protected $time_start;
    protected $time_end;

    public function __construct($time_start = null, $time_end = null) {

        $this->time_start = $time_start;
        $this->time_end = $time_end;
    }

    public function watch() {

        $start = $this->time_start = microtime(true);
        sleep(5);
        $stop = $this->time_stop = microtime(true);
        $time = $stop - $start;
        echo "<div>" . $time . "</div>";
        sleep(5);
        $partOne = microtime(true);
        $part1 = $partOne - $start;
        echo "<div>" . $part1 . "</div>";
        sleep(5);
        $partTwo = microtime(true);
        $part2 = $partTwo - $start;
        echo "<div>" . $part2 . "</div>";
    }

}
