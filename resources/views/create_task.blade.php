<!DOCTYPE html>
<html>
    <head>
    <title></title>
    </head>
    <body>
   <div style="text-align:center">
        <h3>Enter Your Task Here</h3>

        @if(session()->has('status'))
        <div class="alart alart-success">
        {{session()->get('status')}}
        </div>
        @endif
        
        <form action="{{route('saveTask')}}" method="post">
            @csrf
        <textarea name="task" row="5" disable="disable" cols="50" style="width:100%; height:25px"></textarea>
        <input type="submit" value="Save Task">
        </form>
    </div>


    





    </body>
    </html>