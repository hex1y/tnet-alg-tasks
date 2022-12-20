<?php

class TaskSix
{

    private static function sort(array $array): array
    {
        $result = [];

        while (count($array) > 0) {
            $result = array_merge($result, array_shift($array));

            if (count($array) > 0) {
                for ($i = 0; $i < count($array); $i++) {
                    $result[] = array_pop($array[$i]);
                }
            }

            if (count($array) > 0) {
                $result = array_merge($result, (array)array_reverse(array_pop($array)));
            }

            if (count($array) > 0) {
                for ($i = count($array) - 1; $i >= 0; $i--) {
                    $result[] = array_shift($array[$i]);
                }
            }
        }

        return $result;
    }

    public static function execute(array $array): void
    {
        echo json_encode($array) . ' => ' . json_encode(self::sort($array)) . PHP_EOL;
    }

}
