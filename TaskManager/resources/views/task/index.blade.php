@include('layouts.navbar')

<div class="container">

    @if (Session::has('message'))
        <div class="col-12" style="margin-bottom:40px;">
            <h3 class="section__title section__message" style="color: #29b474">{{Session('message')}}</h3>
        </div>
    @endif
    <div class="row d-flex justify-content-center mt-5 ">

    <div class="col-md-8">
        

        <div class="card">

          <div class="d-flex justify-content-between align-items-center">

              <span class="font-weight-bold">Weekly Tasks</span>

              <div class="d-flex flex-row">

                <a href={{route('task.create')}} class="btn btn-primary mr-2 active">New Task</a>

                
              </div>
          
          </div>

          <div class="mt-3 inputs">
              <i class="fa fa-search"></i>
              <form action="">
              <input type="text" name="search" placeholder="Search..." class="form-control " placeholder="Search Tasks...">
            </form>
            
          </div>

        @foreach ($tasks as $task)
            
          <div class="mt-3">

            <div class="d-flex justify-content-between align-items-center">

              <div class="d-flex flex-row align-items-center">

                <a class="star" href="{{'task/' . $task->id}}"><img src="{{'/storage/' . $task->image}}" alt="" width="50" height="50" class="rounded"></a>

                <div class="d-flex flex-column">
                  <span>{{$task->title}}</span>
                  <div class="d-flex flex-row align-items-center time-text">
                    <small>{{$task->description}}</small>
                    <span class="dots"></span>
                    <small>Edited at: {{$task->updated_at}}</small>
                   
                    
                  </div>

                </div>
                

              </div>

              <form action="{{route('task.destroy', $task->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger">Delete</button>
                <a href="{{route('task.edit', $task->id)}}" class="btn btn-outline-success">Edit</a>
            </form>


            </div>
            
          </div>

          @endforeach
          <div class="mt-4">
          {{$tasks->links('pagination::bootstrap-5')}}
        </div>

          </div>
          
        </div>

    </div>
    

  </div>
    

  </div>

  @include('layouts.footer')