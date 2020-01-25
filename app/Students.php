<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    
    protected $attributes = [
        'schedule' => '{"day1":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"},"day2":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"},"day3":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"},"day4":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"},"day5":{"class1":"math","class2":"science","class3":"english","class4":"language","class5":"worldHistory","class6":"doctrine","class7":"art"}}',
    ];

    protected $table = 'students';
}
