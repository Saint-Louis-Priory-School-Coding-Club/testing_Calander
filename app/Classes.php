<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    public function add_groups(Request $request)
    {
        // Validate the request...

        $flight = new Classes;

        $flight->groups = $request->groups;

        $flight->save();
    }
    public function add_test(Request $request)
    {
        // Validate the request...

        $flight = new Classes;

        $flight->schedual = $request->schedual;

        $flight->save();
    }
}
