   {{-- @dd($projects) --}}
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
                 <a class="btn btn-primary btn-sm" href="{{ route('projects.create') }}">Tambah Data Proyek</a>
            </div>
        </div>
    </div>
        <div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <table class="table table-bordered" id="pengaduanTable">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Descriptions</th>
                        <th class="text-center">Start Date</th>
                        <th class="text-center">End Date</th>
                        <th class="text-center">URL</th>
                        <th class="text-center">Repository Link</th>
                        <th class="text-center">Thumbnail</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
            <tbody>
     @foreach ($projects as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                  <td>{{ $item->description }}</td>
                  <td>{{ $item->start_date }}</td>
                  <td>{{ $item->end_date }}</td>
                  <td>{{ $item->url }}</td>
                  <td>{{ $item->repository_link }}</td>
                  <td><img src="{{ asset('images') }}/{{ $item->thumbnail }}" alt="" width="100px" height="100px"></td>
                <td>
                    <a  href="/projects/{{ $item->id }}" class="btn btn-warning btn-sm d-inline-block mr-2 ">Edit</a>
                     <form action="{{ route('projects.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm d-inline-block " onclick="return confirm('yakin?');" type="submit">Hapus</button>
                </form>
                                   
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