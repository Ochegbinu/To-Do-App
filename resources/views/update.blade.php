<!DOCTYPE html>
<html>
    <head>
    <title></title>
    </head>
    <body>
   <div style="text-align:center">
        <h3>Update Your Task Here</h3>

        @if(session()->has('status'))
        <div class="alart alart-success">
        {{session()->get('status')}}
        </div>
        @endif
        
        <form action="{{route('change', ['id'=>$task->id])}}" method="post">
            @csrf
        <input type="text" name="task" value="{{$task->task}}" style="width:90%"><br>
        <input type="submit" value="Save Task">
        </form>
    </div>


    





    </body>
    </html>