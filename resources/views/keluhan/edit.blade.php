@extends('welcome')

@section('content')
    <div class="container">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- {{dd($keluhan)}} --}}
                <form action="{{route('model-keluhan.update', $modelKeluhan->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label">Pasien Name</label>
                                <input class="form-control" type="text" name="name" value="{{$modelKeluhan->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <input class="form-control" type="text" name="phone" value="{{$modelKeluhan->phone}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-10">
                              <label class="col-sm-2 col-form-label">Birth Date</label>
                              <input class="form-control" type="date" name="birthdate" value="{{$modelKeluhan->birthdate}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">Age</label>
                            <input class="form-control" type="text" name="age" value="{{$modelKeluhan->age}}">
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary m-sm-2" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
