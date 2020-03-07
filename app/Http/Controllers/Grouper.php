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
        $students = App\Students::where('class_id', $classRoster)->get();
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
        $realFinalGroups = serialize($realFinalGroups);
        //return $realFinalGroups;
        $updateClass = App\Classes::where('class_id', $classID);
        $updateClass->groups = $realFinalGroups;
        $updateClass->add_groups();
    }

    public function assignTest($classID, $testData) {
        $classSchedual = App\Classes::where('class_id', $classID)->select('schedual')->get();
        $oldSched = unserialize($classSchedual);
        array_push($oldSched, $testData);
        $newSched = serialize($oldSched);
        $classSchedual->schedual = $newSched;
        $classSchedual->add_test();

    }

    public function fetchTests($classID) {
        $classSchedual = App\Classes::where('class_id', $classID)->select('schedual')->get();
        $oldSched = unserialize($classSchedual);
        return $oldSched;
    }

    public function deleteTest($classID, $testID) {
        $classSchedual = App\Classes::where('class_id', $classID)->select('schedual')->get();
        $oldSched = unserialize($classSchedual);
        foreach($oldSched as $key => $test) {
            if(!isset($test['test_id'])) {
                return 'Error: Test ID '.$testID.' doesn\'t exist';
            }
            if($test['test_id'] == $testID) {
                unset($oldSched[$key]);
            }
        }
        array_push($oldSched, $testData);
        $newSched = serialize($oldSched);
        $classSchedual->schedual = $newSched;
        $classSchedual->add_test();
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
