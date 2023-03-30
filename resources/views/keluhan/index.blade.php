@extends('welcome')

@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Pasien</h5>

      <nav>
    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('model-keluhan.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item active"><a href="">Pasien</a></li>
        </ol>
    </nav>

     @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif

    <a href="{{ route('model-keluhan.create') }}" class="btn btn-primary">Add Patient</a>
</button>


      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Phone</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Age</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($modelkeluhan as $row)
              <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$row->name}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->birthdate}}</td>
            <td>{{$row->Age}}</td>
            <td>

                <a href="{{ route('model-keluhan.edit', $row->id) }}" class="btn btn-warning m-2">
                    <i class="bi bi-pencil"></i>
                </a>


                <form action="{{ route('model-keluhan.destroy', $row->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger m-2" >
                    <i class="bi bi-trash"></i>
                </button>
                </form>
            </td>
          </tr>  
            @endforeach
          

        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>

@endsection

