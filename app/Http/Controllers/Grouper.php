<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function getGroup($studentID) {
        $students = App\Students::where('student_id', $studentID)->get();
        $schedule = json_decode($students->schedule);
        $groups = array(
            'day1'  => null,
            'day2'  => null,
            'day3'  => null,
            'day4'  => null,
            'day5'  => null
        );
        foreach($schedule as $day) {
            $deAssoc;
            foreach($day as $class) {
                $deAssoc = array_push($deAssoc, $class);
            }
        }
    }
}
