<?php

namespace Tools;

class Calculator implements MathTool
{
    private $result;

    public function __construct(int $result)
    {
        $this->result = $result;
    }

    /**
     * @param  int|null  $var
     */
    public function add(?int $var)
    {
        if (! empty($this->result)) {
            $this->result = +$var;
        }
    }

    /**
     * @param  int|null  $var
     */
    public function minus(?int $var)
    {
        if (isset($this->result)) {
            $this->result = -$var;
        }
    }

    /**
     * @param  int|null  $var
     */
    public function divide(?int $var)
    {
        if (! empty($this->result)) {
            intdiv($this->result, $var);
        }
    }

    /**
     * @param  int|null  $var
     */
    public function multiply(?int $var)
    {
        if (! empty($this->result)) {
            $this->result = $this->result * $var;
        }
    }

    public function round()
    {
        round($this->result);
    }

    /**
     * @return int
     */
    public function result(): int
    {
        return $this->result;
    }
}