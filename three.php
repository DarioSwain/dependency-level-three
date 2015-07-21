<?php

namespace DS\Three;

class Test
{
    /** @var string */
    private $test;

    /**
     * @param $test string
     * @return $this
     */
    public function setTest($test) {
        $this->test = $test;

        return $this;
    }
}