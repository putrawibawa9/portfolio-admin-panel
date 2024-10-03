   @if (session('hapus'))
        <div class="alert alert-danger">
            {{ session('hapus') }}
        </div>
        @elseif (session('create'))
        <div class="alert alert-primary">
            {{ session('create') }}
        </div>
        @elseif (session('update'))
               <div class="alert alert-secondary">
            {{ session('update') }}
        </div>
    @endif
 @extends('layouts.main')
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col text-center">
                 <a class="btn btn-primary btn-sm" href="{{ route('techStacks.create') }}">Add New Tech Stack</a>
            </div>
        </div>
    </div>        <div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <table class="table table-bordered" id="pengaduanTable">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Project Name</th>
                        <th class="text-center">Tech Stack</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
            <tbody>
     @foreach ($projects as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name}}</td>
                  <td>{{ $item->tech_stack_names }}</td>
                <td>
                    <a  href="{{ route('techStacks.edit', $item->id) }}" class=" text-center btn btn-warning btn-sm d-inline-block mr-2 ">Edit</a>                                  
                  </td>
                  </tr>
      @endforeach
                </tbody>
        </table>
        <div>
          
          </div>
    </div>
  </div>
</div>
@endsection