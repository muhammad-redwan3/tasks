<?php

namespace App\Controllers;


       
use App\Core\Request;
use App\Database\qureyBulider;

class TaskController
{
    public function index(){

        $completed=Request::get("completed");

        if ($completed != null){
            $tasks=qureyBulider::get("tasks",['completed', '=',$completed]);
        }else{
            $tasks=qureyBulider::get("tasks");
        }
        
        view('index' ,[

            'tasks'=>$tasks
        ]);

    }

    public function create()
    {
        $description =Request::get('description');
        qureyBulider::insert('tasks', [

            'description' => $description
        ]);
        back();
    }

    public function delete()
    {
        if ($id=Request::get('id'))
      
        qureyBulider::delete('tasks', $id);
        back();
    }

    public function updata()
    {
        $id=Request::get('id');

        $completed=Request::get('completed');

        if ($id && $completed !=null){
            qureyBulider::updata('tasks', $id , [

                'completed' => $completed
            ]);
        }
      
        back();
    }
}