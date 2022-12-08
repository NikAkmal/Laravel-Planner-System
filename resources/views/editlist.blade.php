@extends('master')
@extends('layouts.app')

@section('container')
<!-- Date -->
<center>
    <p><b>Edit</b></p>
</center>

<!-- Schedule -->
<center>
<div class="w3-one w3-container w3-margin-bottom">
    <div class="w3-container w3-white">
        <center><p><b>TO DO LIST</b></p></center>
        <p>
            <!-- Loop -->
            @foreach($data as $i)  
            <form action="/data/{{$i->list_id}}/updateList" method="POST">
                <div class="modal-body">            
                {{csrf_field()}}
                    <!-- date -->
                    <input type="hidden" id="id" name="id" value = {{$i->id}}>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Date</label>
                        <input class="form-control mr-sm-2" type="date" id="date" name="date" value={{$i->date}}>
                    </div>
                    <!-- to do list -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Schedule</label>
                        <input name="list" type="text" class="form-control" id="list" value={{$i->list}}>
                    </div>       
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            @endforeach
        </p>
    </div>
</div>
</center>
@endsection