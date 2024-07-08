<?php

namespace ARShahin;

class Analyzer{
    private array $data;

    public function setData($data)  {
        $this->data = $data;
    }

    function analyze($key) {
        $max = [];

        foreach ($this->data as $mainIndex => $text) {
            $max[$mainIndex] = max(array_map(function ($word) use ($key) {
                similar_text($word, $key, $percent);
                return $percent;
            }, $text));
        }

        return array_keys($max, max($max))[0];
    }
}