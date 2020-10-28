<?php


class MyIterator implements Iterator
{
    protected $position = 0;
    protected $elements = ['First', 'second', 'third', 'last'];


    public function current()
    {
        return $this->elements[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->elements[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}