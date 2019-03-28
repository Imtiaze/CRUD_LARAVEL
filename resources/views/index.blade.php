@extends('layouts.master')

@section('content')
<div class="card">
    <h5 class="card-header h5">Students</h5>
    <div class="card-body">
        <table class="table">
            <thead class="blue white-text">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 0 @endphp
                @foreach ($students as $student)
                @php $i++ @endphp
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $student->firstname }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="/students/{{$student->id}}/edit"><i class="fas fa-edit" style="font-size:20px;color:green"></i></a>
                        <i class="fas fa-grip-lines-vertical"></i>
                        {{-- <form method="POST" action="/students/{{ $student->id }}" >
                            @method('DELETE')
                            @csrf --}}
                            <a href="/students/{{$student->id}}"><i class="far fa-trash-alt" style="font-size:20px;color:red"></i></a>
                        {{-- </form> --}}
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection