@extends('master')
@extends('layouts.app')

@section('container')
<!-- Date -->
<center>
    <p><b>RESULTS</b></p>
</center>

<!-- Schedule -->
<div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white">
        <center><p><b>SCHEDULE</b></p></center>
        <p>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Time</th>
                <th scope="col">Schedule</th>
                </tr>
            </thead>
            <tbody>
            <!-- Loop -->
            @foreach($data['schedules'] as $i)  
                <tr>
                <th scope="row">{{$i->time}}</th>
                <td>{{$i->schedule}}</td>
                <td><a href="data/{{$i->schedules_id}}/editSchedule">EDIT</a></td>
                <td><a href="data/{{$i->schedules_id}}/deleteSchedule" onClick = "return confirm('Are You Sure?')">DELETE</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </p>
    </div>
</div>

<!-- To do list -->
<div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white">
        <center><p><b>TO DO LIST</b></p></center>
        <p>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">To do list</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop -->
                @foreach($data['lists'] as $i)  
                    <tr>
                    <td>{{$i->list}}</td>
                    <td><a href="data/{{$i->list_id}}/editList">EDIT</a></td>
                    <td><a href="data/{{$i->list_id}}/deleteLists" onClick = "return confirm('Are You Sure?')">DELETE</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </p>
    </div>
</div>

<!-- Notes -->
<div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white">
        <center><p><b>NOTES</b></p></center>
        <p>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Notes</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop -->
                @foreach($data['notes'] as $i)  
                    <tr>
                    <td>{{$i->notes}}</td>
                    <td><a href="data/{{$i->notes_id}}/editNote">EDIT</a></td>
                    <td><a href="data/{{$i->notes_id}}/deleteNotes" onClick = "return confirm('Are You Sure?')">DELETE</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </p>
    </div>
</div>
@endsection