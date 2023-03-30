@extends('welcome')


@section('content')
    <div class="card-header">
        Create Data Pasien
    </div>
    <div class="container card">
        <form action="{{ route('model-keluhan.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="container mt-3">
                <label for="" class="form-label">Name Patient</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="container">
                <label for="" class="form-label">Phone Patient</label>
                <input type="number" class="form-control" name="phone">
            </div>

            <div class="container">
                <label for="" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="birthdate">
            </div>

            <div class="container">
                <label for="" class="form-label">Age</label>
                <input type="number" class="form-control" name="age">
            </div>

            <div class="container mt-3 mb-3">
                <button class="btn btn-primary" type="submit">Add Patient</button>
            </div>
        </form>
    </div>
@endsection
