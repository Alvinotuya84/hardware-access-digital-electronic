<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    
    public function index(){
        //return all the tasks
       $tasks= Task::all();
       $completeTasks=DB::table('tasks')->where('status','Completed')->get()->count();
       $pendingTasks=DB::table('tasks')->where('status','Pending')->get()->count();

       $noOfTasks=$tasks->count();
        return view('index',['tasks'=>$tasks,
        'noOfTasks'=>$noOfTasks,'completeTasks'=>$completeTasks,
        'pendingTasks'=>$pendingTasks
    ]);

    }
    public function createTaskForm(){
        return view('createTask');
    }
    public function createNewTask(Request $request){
        $title=$request->input('title');
        $description=$request->input('description');
        $progress=$request->input('progress');
        $status=$request->input('status');

        DB::table('tasks')->insert([
            'title'=>$title,
            'description'=>$description,
            'progress'=>$progress,
            'status'=>$status
        ]);
   return \redirect('/');
    }
    public function editTask($id){
        
       $task= DB::table('tasks')->where('id',$id)->get();
       return view('editTask',['task'=>$task]);


    }
    public function submitEdit(Request $request){

        $id=$request->input('id');
        $title=$request->input('title');
        $description=$request->input('description');
        $progress=$request->input('progress');
        $status=$request->input('status');
        DB::table('tasks')->where('id',$id)->update(['title'=>$title,
        'description'=>$description,
        'progress'=>$progress,
        'status'=>$status
    ]);

        return \redirect('/');

    }

    public function deleteTask(Request $request,$id){
        DB::table('tasks')->where('id',$id)->delete();
        return \redirect('/');


    }

    public function completedTasks(){
       $tasks= DB::table('tasks')->where('status','Completed')->get();
        return view('taskType',['tasks'=>$tasks]);
    }
    public function pendingTasks(){
        $tasks= DB::table('tasks')->where('status','Pending')->get();
         return view('taskType',['tasks'=>$tasks]);
     }
}
