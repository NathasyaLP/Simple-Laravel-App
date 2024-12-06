<?php

if (!function_exists('showFirstFiveSentences')) {
    function showFirstFiveSentences($text) {
        $sentences = preg_split('/(?<!\w\.\w.)(?<![A-Z][a-z]\.)(?<=\.|\?)\s/', $text);
        $firstFiveSentences = array_slice($sentences, 0, 5);
        $result = implode(' ', $firstFiveSentences);

        if (count($sentences) > 5) {
            $result .= ' ...';
        }

        return $result;
    }
}
