@extends('layouts.master')

@section('content')
<!-- Default form contact -->
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <p class="h4 mb-4">Registration</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="/students" class="text-center border border-light p-5">
                        @csrf
                        <input type="text" name="firstname" value="{{ old('firstname') }}" id="defaultContactFormName" class="form-control mb-4 {{ $errors->get('firstname') ? 'is-invalid':'' }} " placeholder="FirstName">
                        <input type="text" name="lastname" value="{{ old('lastname') }}" id="defaultContactFormName" class="form-control mb-4 {{ $errors->get('lastname') ? 'is-invalid':'' }}" placeholder="LastName">
                        <input type="email" name="email" value="{{ old('email') }}" id="defaultContactFormEmail" class="form-control mb-4 {{ $errors->get('email') ? 'is-invalid':'' }}" placeholder="E-mail">
                        <input type="text" name="phone" value="{{ old('phone') }}" id="defaultContactFormName" class="form-control mb-4 {{ $errors->get('phone') ? 'is-invalid':'' }}" placeholder="Phone">
                        <button class="btn btn-info btn-block" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Default form contact -->
@endsection