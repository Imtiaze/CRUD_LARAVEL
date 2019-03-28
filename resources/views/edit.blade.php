@extends('layouts.master')

@section('content')
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <p class="h4 mb-4">Edit Information</p>
                </div>
                <div class="card-body">
                    <!-- Default form contact -->
                    <form method="POST" action="/students/{{$student->id}}" class="text-center border border-light p-5">
                        @method('PATCH')
                        @csrf
                        
                        <!-- firstname -->
                        <input type="text" name="firstname " value="{{ $student->firstname }}" id="defaultContactFormName" class="form-control mb-4 {{ $errors->get('firstname') ? 'is-invalid':'' }}" placeholder="FirstName">    
                        <!-- lastname -->
                        <input type="text" name="lastname" value="{{ $student->lastname }}" id="defaultContactFormName" class="form-control mb-4 {{ $errors->get('firstname') ? 'is-invalid':'' }}" placeholder="LastName">
                        <!-- phone -->
                        <input type="email" name="email" value="{{ $student->email }}" id="defaultContactFormName" class="form-control mb-4 {{ $errors->get('firstname') ? 'is-invalid':'' }}" placeholder="Phone">
                        
                        <!-- Email -->
                        <input type="text" name="phone" value="{{ $student->phone }}" id="defaultContactFormEmail" class="form-control mb-4 {{ $errors->get('firstname') ? 'is-invalid':'' }}" placeholder="E-mail">
                        
                        <!-- Subject -->
                        
                        
                        
                        
                        <!-- Send button -->
                        <button class="btn btn-info btn-block" type="submit">Update</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Default form contact -->
@endsection