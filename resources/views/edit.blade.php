@extends('layouts.master')

@section('content')
<!-- Default form contact -->
<form method="POST" action="/students/{{$student->id}}" class="text-center border border-light p-5">
    @method('PATCH')
    @csrf
    <p class="h4 mb-4">Registration</p>
    
    <!-- firstname -->
    <input type="text" name="firstname" value="{{ $student->firstname }}" id="defaultContactFormName" class="form-control mb-4" placeholder="FirstName">    
    <!-- lastname -->
    <input type="text" name="lastname" value="{{ $student->lastname }}" id="defaultContactFormName" class="form-control mb-4" placeholder="LastName">
     <!-- phone -->
    <input type="email" name="email" value="{{ $student->email }}" id="defaultContactFormName" class="form-control mb-4" placeholder="Phone">
    
    <!-- Email -->
    <input type="text" name="phone" value="{{ $student->phone }}" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
    
    <!-- Subject -->
    
    
    
    
    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Update</button>
    
</form>
<!-- Default form contact -->
@endsection