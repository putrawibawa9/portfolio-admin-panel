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
       <label>
    <input type="checkbox" name="tech_stacks[]" value="HTML"> HTML<br>
    <input type="checkbox" name="tech_stacks[]" value="CSS"> CSS<br>
    <input type="checkbox" name="tech_stacks[]" value="PHP"> PHP<br>
    <input type="checkbox" name="tech_stacks[]" value="Javascript"> Javascript<br>
    <input type="checkbox" name="tech_stacks[]" value="MYSQL"> MYSQL<br>
    <input type="checkbox" name="tech_stacks[]" value="Laravel"> Laravel<br>
    <input type="checkbox" name="tech_stacks[]" value="ExpressJS"> ExpressJS<br>
    <input type="checkbox" name="tech_stacks[]" value="Tailwind"> Tailwind<br>
    <input type="checkbox" name="tech_stacks[]" value="React"> React<br>
    <input type="checkbox" name="tech_stacks[]" value="VueJS"> VueJS<br>
    <input type="checkbox" name="tech_stacks[]" value="Angular"> Angular<br>
    <input type="checkbox" name="tech_stacks[]" value="NodeJS"> NodeJS<br>
    <input type="checkbox" name="tech_stacks[]" value="Python"> Python<br>
    <input type="checkbox" name="tech_stacks[]" value="Django"> Django<br>
    <input type="checkbox" name="tech_stacks[]" value="Flutter"> Flutter<br>
    <input type="checkbox" name="tech_stacks[]" value="React Native"> React Native<br>
    <input type="checkbox" name="tech_stacks[]" value="Swift"> Swift<br>
    <input type="checkbox" name="tech_stacks[]" value="Kotlin"> Kotlin<br>
    <input type="checkbox" name="tech_stacks[]" value="Ruby on Rails"> Ruby on Rails<br>
    <input type="checkbox" name="tech_stacks[]" value="PostgreSQL"> PostgreSQL<br>
    <input type="checkbox" name="tech_stacks[]" value="MongoDB"> MongoDB<br>
    <input type="checkbox" name="tech_stacks[]" value="Docker"> Docker<br>
    <input type="checkbox" name="tech_stacks[]" value="Kubernetes"> Kubernetes<br>
    <input type="checkbox" name="tech_stacks[]" value="AWS"> AWS<br>
    <input type="checkbox" name="tech_stacks[]" value="Azure"> Azure<br>
    <input type="checkbox" name="tech_stacks[]" value="GraphQL"> GraphQL<br>
    <input type="checkbox" name="tech_stacks[]" value="Redis"> Redis<br>
    <input type="checkbox" name="tech_stacks[]" value="Sass"> Sass<br>
</label>

<br>
        </div>
    </div>
            <a href="/gambarProyek" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" >Save</button>
        </form>
    </div>
  </div>
</div>
@endsection