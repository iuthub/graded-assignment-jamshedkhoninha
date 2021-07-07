@extends ('layouts.app')

@section('content')
 <form action="">
            <div id="myDIV" class="header">
              <h2>My To Do List</h2>
              <input type="text" name="newTask" placeholder="Title...">
              <button type="submit" class="addBtn">Add</button>
            </div>
        </form>
        @if(count($pages)>1)
          @foreach($tasks as $task)
              <div class="task">
                  <h3><a href="/tasks/{{$tasks->id}}">{{$task->title1}}</a></h3>
                  <small>Written on {{$post->created_at}}</small>
              </div>
          @endforeach
        @else
          <p>No tasks found</p>
        @endif
        <ul id="myUL">
          <li>
            <div class="task">
                Hit the gym
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               Make some food
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               Finish quiz
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
        </ul>
 <h1>{{$title}}</h1>
 <p></p>    
@endsection