<?php

/*
 * This file is part of the PHP-CLI package.
 *
 * (c) Kyle Luke <luke.kylew@gmail.com>
 *     <https://github.com/lukekyl>
 *
 * Licensed under MIT license.
 */

 namespace FizzBuzz;

 class App3
 {

    public function stepThree($num) {

    
        if(is_int ($num)) {

        // Create array with report key value pairs and set each to zero. These individually update after each corresponding answer is hit.
        $report = array('fizz' => 0, 'buzz' => 0, 'fizzbuzz' => 0, 'lucky' => 0, 'integer' => 0);

        for($i=1;$i<=$num;$i++) {
            $answer = '';
            $splitnum = str_split(strval($i));

            if (in_array(3, $splitnum)) {
                $answer = 'lucky';
                ++$report['lucky'];
            }
            elseif ($i % 15 == 0) {
                $answer = 'FizzBuzz';
                ++$report['fizzbuzz'];
            }
            elseif ($i % 3 == 0) {
                $answer = 'Fizz';
                ++$report['fizz'];
            }
            elseif ($i % 5 == 0) {
                $answer = 'Buzz';
                ++$report['buzz'];
            }
            elseif (!$answer) {
                $answer = $i;
                ++$report['integer'];
            }
            
        echo $answer . "\n";
        }

        // Print report array
        print_r ($report);

        } else {
            echo "Please use integer as input." . "\n";
        }
    }

 }