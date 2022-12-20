<?php

class TaskFour
{

    private static function solve(string $equation): string
    {
        $calculated = '';

        for ($i = 0; $i < strlen($equation); $i++) {
            if (ctype_alpha($equation[$i])) {
                $calculated .= $equation[$i];
            } else if (ctype_digit($equation[$i])) {
                $num = $equation[$i];
                $repeatString = '';
                $j = $i + 2;
                $count = 1;

                while ($count > 0) {
                    if ($equation[$j] == '(') {
                        $count++;
                    } else if ($equation[$j] == ')') {
                        $count--;
                    }

                    if ($count > 0) {
                        $repeatString .= $equation[$j];
                    }

                    $j++;
                }

                $repeatString = self::solve($repeatString);
                $calculated .= str_repeat($repeatString, $num);

                $i = $j - 1;
            }
        }


        return $calculated;
    }

    public static function execute(string $equation): void
    {
        echo $equation . ' => ' . self::solve($equation) . PHP_EOL;
    }

}
