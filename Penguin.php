<?php

namespace App\Http\Controllers\solid4;

class Penguin implements Speakable, Walkable
{
    public function walk()
    {
        return 'Penguin walks';
    }
    public function speak()
    {

        return 'Penguin says ping';
    }
}
