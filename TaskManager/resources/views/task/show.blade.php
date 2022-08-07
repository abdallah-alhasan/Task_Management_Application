@include('layouts.navbar')


<div class="card text-start">
  <img class="card-img-top" src={{'/storage/' . $task->image}} alt="Title" height='300' width='300'>
  <div class="card-body">
    <h4 class="card-title">{{$task->title}}</h4>
    <p class="card-text">{{$task->description}}</p>
    <a name="" id="" class="btn btn-outline-success" href="{{route('task.edit', $task->id)}}" role="button">Edit</a>
    <a name="" id="" class="btn btn-outline-primary" href="{{route('task.index')}}" role="button">Back</a>
  </div>
</div>


@include('layouts.footer')