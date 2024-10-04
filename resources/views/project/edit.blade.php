{{-- @dd($project) --}}
@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Proyek</h3>
            <form action="/projects/{{ $project->id }}" enctype="multipart/form-data" method="post">
        @csrf
           @method('PUT')
            <div class="mb-3">
                <input value="{{ $project->name }}" type="text" name="name" placeholder=" Nama Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $project->description }}" type="text" name="description" placeholder="description" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $project->start_date }}" type="date" name="start_date" placeholder=" Start Date" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $project->end_date }}" type="date" name="end_date" placeholder="End Date" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $project->url }}" type="text" name="url" placeholder="URL" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $project->repository_link }}" type="text" name="repository_link" placeholder=" Ukuran Proyek" class="form-control" required>
            </div>
                   <div class="mb-3">
                <label for="gambar" class="form-label"> Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control" required>
            </div>
            <a href="/project" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" >Save</button>
        </form>
    </div>
  </div>
</div>
@endsection