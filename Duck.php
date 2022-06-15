<?php

namespace App\Http\Controllers\solid4;

class Duck implements  Flyable, Walkable, Speakable

{

    public function walk()
    {
        return 'Duck walks';
    }

    public function fly()
    {
        return 'Duck flies';
    }

    public function speak()
    {
        return 'Duck says quack';
    }
}
