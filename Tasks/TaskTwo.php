<?php

class TaskTwo
{

    private static function getArrayLength(array $array): int
    {
        $length = 0;

        foreach ($array as $item) {
            $length += 1;

            if (is_array($item)) {
                $length += self::getArrayLength($item);
            }
        }

        return $length;
    }

    public static function execute(array $array): void
    {
        echo json_encode($array) . ' => ' . self::getArrayLength($array) . PHP_EOL;
    }

}
