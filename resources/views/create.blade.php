@extends('layouts.master')

@section('content')
<!-- Default form contact -->
<form method="POST" action="/students" class="text-center border border-light p-5">
    @csrf
    <p class="h4 mb-4">Registration</p>

    <input type="text" name="firstname" value="{{ old('firstname') }}" id="defaultContactFormName" class="form-control mb-4" placeholder="FirstName">
    <input type="text" name="lastname" value="{{ old('firstname') }}" id="defaultContactFormName" class="form-control mb-4" placeholder="LastName">
    <input type="email" name="email" value="{{ old('firstname') }}" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
    <input type="text" name="phone" value="{{ old('firstname') }}" id="defaultContactFormName" class="form-control mb-4" placeholder="Phone">
    

    <button class="btn btn-info btn-block" type="submit">Register</button>
    
</form>
<!-- Default form contact -->
@endsection