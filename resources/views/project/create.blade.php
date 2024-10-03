@extends('layouts.main')
@section('content')
 <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
      <h4 class="text-center">Tambah Project</h4>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
           <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <input type="text" name="name" placeholder="Name" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="description" placeholder=" Description" class="form-control" required>
            </div>
               <p>Start Date</p>
            <div class="mb-3">
                <input type="date" name="start_date" placeholder="Start Date" class="form-control" required>
            </div>
            <p>End Date</p>
            <div class="mb-3">
                <input type="date" name="end_date" placeholder=" Ukuran Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="url" placeholder=" URL" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="repository_link" placeholder=" Repository Link" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control" required>
            </div>
            <a href="/proyek" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" >Save</button>
        </form>
    </div>
  </div>
</div>
@endsection