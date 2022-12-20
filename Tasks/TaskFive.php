<?php

class TaskFive
{

    private static function extractRange(array $array): string
    {
        $result = '';

        $start = $array[0];
        $end = $array[0];

        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] != $array[$i - 1] + 1) {
                $result .= self::getRangeString($start, $end) . ',';
                $start = $array[$i];
            }

            $end = $array[$i];
        }

        $result .= self::getRangeString($start, $end);

        return $result;
    }

    private static function getRangeString($start, $end): string
    {
        return $start == $end ? $start : "$start-$end";
    }

    public static function execute(array $array): void
    {
        echo json_encode($array) . ' => ' . self::extractRange($array) . PHP_EOL;
    }

}
