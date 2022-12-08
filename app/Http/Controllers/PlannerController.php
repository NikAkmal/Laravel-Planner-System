<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlannerController extends Controller
{   
    //Insert Schedules
    public function insertSchedules(Request $request){
        \App\Models\schedules::create($request->all());
        return redirect('/insert')->with('success','New Data Insert!');
    }

    //Insert To Do Lists
    public function insertLists(Request $request){
        \App\Models\todolists::create($request->all());
        return redirect('/insert')->with('success','New Data Insert!');
    }

    //Insert Notes
    public function insertNotes(Request $request){
        \App\Models\notes::create($request->all());
        return redirect('/insert')->with('success','New Data Insert!');
    }

    //Retrive Planner Data
    public function plannerView()
    {   
        $id = Auth::user()->id;

        //Date
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $date = date('Y-m-d');

        //Schedule Data
        $data['schedules'] = \App\Models\schedules::where('id', '=', $id)
        ->where('date',$date)
        ->orderBy('time', 'ASC')
        ->get();

        //To Do List Data
        $data['lists'] = \App\Models\todolists::where('id', '=', $id)
        ->where('date',$date)
        ->get();

        //Notes Data
        $data['notes'] = \App\Models\notes::where('id', '=', $id)
        ->where('date',$date)
        ->get();

        //Go to Planner
        return view('planner',['data'=>$data]);
    }

    //Retrive Planner Search Data
    public function resultView(Request $request)
    {   
        $id = Auth::user()->id;
        $date = $request->date;
        //Schedule Data
        $data['schedules'] = \App\Models\schedules::where('id', '=', $id)
        ->where('date',$date)
        ->orderBy('time', 'ASC')
        ->get();

        //To Do List Data
        $data['lists'] = \App\Models\todolists::where('id', '=', $id)
        ->where('date',$date)
        ->get();

        //Notes Data
        $data['notes'] = \App\Models\notes::where('id', '=', $id)
        ->where('date',$date)
        ->get();

        //Go to Result
        return view('result',['data'=>$data]);
    }

    //Delete
    public function deleteSchedule($schedules_id){
        $data = \App\Models\schedules::where('schedules_id', '=', $schedules_id);
        $data->delete($data);
        return redirect('planner')->with('success','Data Delete!.');
    }

    public function deleteLists($list_id){
        $data = \App\Models\todolists::where('list_id', '=', $list_id);
        $data->delete($data);
        return redirect('planner')->with('success','Data Delete!.');
    }

    public function deleteNotes($notes_id){
        $data = \App\Models\notes::where('notes_id', '=', $notes_id);
        $data->delete($data);
        return redirect('planner')->with('success','Data Delete!.');
    }

    //Retrive Schedule Data
    public function editSchedule($schedules_id){   
        //Schedule Data
        $data = \App\Models\schedules::where('schedules_id', '=', $schedules_id)
        ->get();
        //Go to editing
        return view('editschedule',['data'=>$data]);
    }

    //Retrive Schedule Data
    public function editList($list_id){   
        //Schedule Data
        $data = \App\Models\todolists::where('list_id', '=', $list_id)
        ->get();
        //Go to editing
        return view('editlist',['data'=>$data]);
    }

    //Retrive Schedule Data
    public function editNote($notes_id){   
        //Schedule Data
        $data = \App\Models\notes::where('notes_id', '=', $notes_id)
        ->get();
        //Go to editing
        return view('editnote',['data'=>$data]);
    }

    //Update Schedule Data
    public function updateSchedule(Request $request, $schedules_id){
        $data = \App\Models\schedules::where('schedules_id', '=', $schedules_id);
        $data->update($request->except(['_token']));
        return redirect('planner')->with('success','Data Update!');
    }

    //Update List Data
    public function updateList(Request $request, $list_id){
        $data = \App\Models\todolists::where('list_id', '=', $list_id);
        $data->update($request->except(['_token']));
        return redirect('planner')->with('success','Data Update!');
    }

    //Update Note Data
    public function updateNote(Request $request, $notes_id){
        $data = \App\Models\notes::where('notes_id', '=', $notes_id);
        $data->update($request->except(['_token']));
        return redirect('planner')->with('success','Data Update!');
    }
}
