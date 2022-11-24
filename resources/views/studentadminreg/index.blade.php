@extends('student.layout');
@section('contact')
<div class="jumbotron">
  <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <a class="btn btn-primary btn-lg" href=" /index/productstrashed/" role="button">Trashe products </a>
    </div>
    <div class="contienr">
      
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">name </th>
              
              <th scope="col">age</th>
            </tr>
            </tr>
          </thead>
          <tbody>
            @php
                $i=0;
            @endphp

              
@foreach($studant as $iteam)
<tr>
  <th scope="row">{{++$i}}</th>
  <td>{{$iteam->name_studant}}</td>
  <td>{{$iteam->age}}</td>
  

  {{-- <td>{{$iteam->price}}</td>
  <td>{{$iteam->details}}</td> --}}
  <td>
              <td>
                
                {{-- <td><a href="/Tags/edit/{{$iteam->id}}" type="button" class="btn btn-success">Edit</button> </td>
                  <a href="{{ route('productes.show',$iteam->id)}}"> show </a>
                  {{-- DELETE --}}
                  {{-- <td><a href="/Tags/delete/{{$iteam->id}}" type="button" class="btn btn-danger">Delete</button></td>
              </td>
             
            {{-- </tr> --}}
           @endforeach 
          </tbody>
        </table>
      