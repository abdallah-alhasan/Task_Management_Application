@include('layouts.navbar')


@if (Session::has('message'))
        <div class="col-12" style="margin-bottom:40px;">
            <h3 class="section__title section__message" style="color: #29b474">{{Session('message')}}</h3>
        </div>
@endif

<form class="row g-3 needs-validation" action="{{route('task.update', $task->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Title</label>
    <input type="text" class="form-control" name='title' id="validationCustom01" value={{$task->title}} required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Description</label>
    <textarea type="text" class="form-control" name="description" id="validationCustom02" value={{$task->description}}  required>{{$task->description}}</textarea>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Image</label>
    <div class="input-group">
      <input type="file" name="image" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" >
      <div class="invalid-feedback">
        Please choose an image.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-outline-success" type="submit">Submit form</button>
    <a name="" id="" class="btn btn-outline-primary" href="{{route('task.index')}}" role="button">Back</a>

  </div>
</form>

@include('layouts.footer')
