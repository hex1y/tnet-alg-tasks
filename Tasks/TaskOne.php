<?php

class TaskOne
{

    private static function getShortestWords(string $sentence): int
    {
        $wordList = explode(' ', $sentence);

        if (sizeof($wordList) == 0) {
            die('Empty array');
        }

        $shortestWordLength = strlen($wordList[0]);

        foreach ($wordList as $word) {
            $word = preg_replace('/[^a-zA-Z0-9]+/', '', $word);

            $wordLength = strlen($word);

            if ($shortestWordLength >= $wordLength) {
                $shortestWordLength = $wordLength;
            }
        }

        return $shortestWordLength;
    }

    public static function execute(string $sentence): void
    {
        echo $sentence . ' => ' . self::getShortestWords($sentence) . PHP_EOL;
    }

}


