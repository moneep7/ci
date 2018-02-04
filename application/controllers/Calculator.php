<?php
    class Calculator extends CI_Controller
    {
        public function plus($num1 = 0, $num2 =0)
        {
        echo "ค่า 1 คือ :" . $num1 ."<br>";
        echo "ค่า 2 คือ :" . $num2 ."<br>";
        echo "ผลลัพธ์รวม" . $num1 ." +" . $num2 . "คือ" .( $num1 + $num2);
        }
    }

