@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Proyek</h3>
           <form action="{{ route('techStacks.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <select name="project_id" id="">
                @foreach ($projects as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
           <!-- Tech Stacks Checkbox -->
    <div class="form-group">
        <label for="tech_stacks">Tech Stacks</label>
        <div>
            @foreach($techStacks as $tech)
                <label>
                    <input type="checkbox" name="tech_stacks[]" value="{{ $tech->name }}"> {{ $tech->name }}
                </label><br>
            @endforeach
        </div>
    </div>
            <a href="/gambarProyek" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" >Save</button>
        </form>
    </div>
  </div>
</div>
@endsection