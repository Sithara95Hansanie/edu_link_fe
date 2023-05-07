<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function main()
    {
        $jsonData = file_get_contents(public_path('courses.json'));
        $data = json_decode($jsonData, true);

        $interestData = file_get_contents(public_path('interests.json'));
        $area = json_decode($interestData, true);

        $courseData = file_get_contents(public_path('onlineCourses.json'));
        $courses = json_decode($courseData, true);

        return view('welcome', ['data' => $data, 'area'=>$area,'courses'=>$courses]);
    }

}
