<?php

class TaskThree
{

    private static function getProcessedString(string $word): string
    {
        $processed = '';

        $words = str_split(strtolower($word));

        foreach ($words as $char) {
            $count = substr_count($word, $char);

            if ($count == 1) {
                $processed .= '(';
            } else if ($count > 1) {
                $processed .= ')';
            }
        }

        return $processed;
    }


    public static function execute(string $word): void
    {
        echo $word . ' => ' . self::getProcessedString($word) . PHP_EOL;
    }

}
