@extends('master')
@extends('layouts.app')
<?php 
    use Illuminate\Support\Facades\Auth;
    $id = Auth::user()->id;
?>

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@section('container')
<!-- Date -->
<center>
    <p><b>Insert Data</b></p>
</center>

<!-- Schedule -->
<div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white">
        <center><p><b>SCHEDULE</b></p></center>
        <p>
            <!-- Button trigger modal -->
            <center>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertSchedule">
                Insert
                </button>
            </center>

            <!-- Modal -->
            <div class="modal fade" id="insertSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Insert New Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/add/insertSchedules" method="POST">
                <div class="modal-body">
                    
                    {{csrf_field()}}
                        <!-- date -->
                        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date</label>
                            <input class="form-control mr-sm-2" type="date" id="date" name="date">
                        </div>
                        <!-- time -->
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Time</label>
                            <input class="form-control mr-sm-2" type="time" id="appt" name="time">
                        </div>
                        <!-- schedule -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Schedule</label>
                            <textarea class="form-control" id="schedule" name="schedule" rows="3"></textarea>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Insert</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </p>
    </div>
</div>

<!-- To do list -->
<div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white">
        <center><p><b>TO DO LIST</b></p></center>
        <p>
            <!-- Button trigger modal -->
            <center>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertToDoList">
                Insert
                </button>
            </center>

            <!-- Modal -->
            <div class="modal fade" id="insertToDoList" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Insert To Do List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/add/insertLists" method="POST">
                <div class="modal-body">
                    
                    {{csrf_field()}}
                        <!-- date -->
                        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date</label>
                            <input class="form-control mr-sm-2" type="date" id="date" name="date">
                        </div>
                        <!-- To Do -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">To Do</label>
                            <textarea class="form-control" id="list" name="list" rows="3"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Insert</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </p>
    </div>
</div>

<!-- Notes -->
<div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white">
        <center><p><b>NOTES</b></p></center>
        <p>
            <!-- Button trigger modal -->
            <center>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertNotes">
                Insert
                </button>
            </center>

            <!-- Modal -->
            <div class="modal fade" id="insertNotes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Insert Notes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/add/insertNotes" method="POST">
                <div class="modal-body">
                    
                    {{csrf_field()}}
                        <!-- date -->
                        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date</label>
                            <input class="form-control mr-sm-2" type="date" id="date" name="date">
                        </div>
                        <!-- Notes -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Insert</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </p>
    </div>
</div>
@endsection