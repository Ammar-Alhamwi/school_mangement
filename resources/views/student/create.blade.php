@extends('student.layout');
@section('contact')
<div class="container">
  <a class="btn btn-primary btn-lg" href=" /posts" role="button"> Create  student </a>
    <form action="{{ route('student.store')}}" method="POST"enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">name</label>
          <input type="text"name="name_studant" class="form-control"  >
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">age</label>
          <input type="text"name="age" class="form-control"  >
        </div>
       
       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">class</label>
          <textarea class="form-control" name="content" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Address</label>
          <textarea class="form-control" name="Address" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Photo</label>
            <input type="file" name="photo" class="form-control"  >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">certificate</label>
            <input type="file" name="certificate" class="form-control"  >
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">ADD</button>
</div>
    </form>
</div>
@endsection