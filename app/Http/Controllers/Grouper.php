<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function getGroups($classID) {
        $classRoster = App\Classes::where('class_id', $classID)->select('students')->get();
        $classList = App\Classes::select('alias', 'class_id')->get();
        $totalGroupArray = array();
        $totalStudentGroup = array();
        foreach ($classList as $class) {
            $totalGroupArray[$class['class_id']] = alias_test($class);
        }
        foreach($students as $student) {
            $tempArr = array();
            foreach($student['schedule1'] as $item) {
                array_push($tempArr, $totalGroupArray[$item]);
            }
            array_push($totalStudentGroup, $tempArr);
        }
        $finalGroups = student_battle_royale($totalStudentGroup);
        $realFinalGroups = array();
        foreach($finalGroups as $group) {
            array_push($realFinalGroups, serialize($group));
        }
        return $realFinalGroups;
    }

    public function assignTest($classID) {

    }

    public function fetchTests($classID) {

    }

    public function deleteTest($testID) {

    }

    public function array_equal($array1, $array2) {
        array_multisort($array1);
        array_multisort($array2);
        return ( serialize($array1) === serialize($array2));
    }

    public function alias_test($classGroup) {
        if ($classGroup['alias']) {
            return($classGroup['aliasPointer']);
        } else {
            return($classGroup['class_id']);
        }
    }

    public function student_battle_royale($bigArray) {
        $i = 0;
        $smallArray = array();
        for ($i = 0; sizeof($bigArray) > 0; $i++) {
            if (!array_equal($bigArray[$z], $bigArray[$i])) {
                array_push($smallArray, $bigArray[$z]);
                unset($bigArray[$z]);
                $i = 0;
                $z = 0;
                array_values($bigArray);
            } else {
                unset($bigArray[$i]);
            }
        }

        return $smallArray;
    }
}
