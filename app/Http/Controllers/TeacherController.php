<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $teacherArray=[
[
    'id'=>1,
    'name'=>'Michele',
    'gametype'=>'Deduzione',
    'game'=>'Avalon'
    ,'img'=>'https://picsum.photos/200'
],

[
    'id'=>2,
    'name'=>'Caterina',
    'gametype'=>'Puzzle',
    'game'=>'6 nimmt',
    'img'=>'https://picsum.photos/200'
],

[
    'id'=>3,
    'name'=>'Ivan',
    'gametype'=>'German',
    'game'=>'Puerto Rico'
        ,'img'=>'https://picsum.photos/200'
],

[
    'id'=>4,
    'name'=>'Giuseppe',
    'gametype'=>'Astratti',
    'game'=>'Hive'
        ,'img'=>'https://picsum.photos/200'
],

];
    public function teacherList()
    {
        return view('teacher.index', ['teachers'=>$this->teacherArray]);
    }
    //

    public function detail($id){
        // dd($id);
        foreach($this->teacherArray as $teacher){
        if($id == $teacher['id']){
            return view('teacher.detail', ['teacher' => $teacher]);
        }


        }

    }
}
