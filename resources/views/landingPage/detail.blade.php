{{-- @dd($project[0]) --}}
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Web Konstruksi | Detail Proyek</title>

    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('images/logo-transparent.png') }}">

</head>

<body class="overflow-x-hidden">
    <!-- ===== Navbar ===== -->
    <header class="navbar px-4 lg:px-12 py-4">
        <div class="navbar-start">
            <!-- ===== Navbar Mobile Sidebar ===== -->
            <div class="dropdown">
                <!-- ===== Dropdown Button ===== -->
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
       

      
    </header>
    <!-- ===== End Navbar ===== -->

    <!-- ===== Detail Project Section ===== -->
    <section class="container mx-auto px-6 lg:px-0 py-2">
        <div class="grid grid-cols-1 lg:grid-cols-[40%_55%] gap-[5%]">
            <div class="flex flex-col gap-y-10 justify-start items-start">
     <a href="/anotherProjects" class="font-semibold">
                    <i class="fa-solid fa-chevron-left mr-2"></i>
                    All Projects
                </a>

        <div class="block lg:hidden">
                    <img src="{{ asset('/images') }}/{{ $project[0]->thumbnail }}" alt="Project Image"
                        class="w-full h-full object-cover rounded-lg" />
                </div>



                <h2 class="text-sky-400 text-5xl font-bold max-w-md">{{ $project[0]->name }}</h2>

                <div class="flex flex-col w-full text-lg">
                                        <div class="py-2">
                        <span class="font-bold w-[21%] inline-flex justify-between items-center">Tech Stack
                            <span>:</span>
                        
                        </span>
                          @foreach($project[0]->techStacks as $index => $techStack)
        {{ $techStack->name }}{{ $index != $project[0]->techStacks->count() - 1 ? ',' : '' }}
    @endforeach
                    </div>
                    <div class="border-b py-2">
                        <span class="font-bold w-[21%] inline-flex justify-between items-center">Start
                            <span>:</span></span>
                        {{ $project[0]->start_date }}
                    </div>
                    <div class="border-b py-2">
                        <span class="font-bold w-[21%] inline-flex justify-between items-center">End
                            <span>:</span></span>
                        {{ $project[0]->end_date }}
                    </div>
                    <div class="border-b py-2">
                        <span class="font-bold w-[21%] inline-flex justify-between items-center">url
                            <span>:</span></span>
                        {{-- {{ $project[0]->url }} --}}
                        <a href=" {{ $project[0]->url }}"> {{ $project[0]->url }}</a>
                    </div>
                    <div class="py-2">
                        <span class="font-bold w-[21%] inline-flex justify-between items-center">Repo
                            <span>:</span>
                        
                        </span>
                        <a href=" {{ $project[0]->repository_link }}"> {{ $project[0]->repository_link }}</a>
                    
                    </div>
                </div>
            </div>

            <div class="lg:block hidden">
                <img src="{{ asset('images') }}/{{ $project[0]->thumbnail }}" alt="Project Image"
                    class="w-full h-full object-cover rounded-lg" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[30%_55%] gap-[10%] lg:gap-[15%] mt-12 lg:mt-24">
            <div class="space-y-14">
                <div class="flex items-center gap-x-4">
                    <div class=" w-16 h-16 rounded-full flex items-center justify-center overflow-hidden p-3">
                        <img src="{{ asset('images/fotoProfesional.jpg') }}" alt="Logo"
                            class=" rounded-full w-full h-full object-contain" />
                    </div>

                    <div class="space-y-3">
                        <h4 class="font-bold text-lg">I Gede Putra Wibawa</h4>
                        <span class="font-semibold">Backend Developer</span>
                    </div>
                </div>

      
            </div>

            <div class="space-y-8 order-first lg:order-last">
                <div class="space-y-6 border-b border-black">
                    <h3 class="text-sky-400 font-bold text-2xl">Project Description</h3>
                    <p class="text-lg pb-6">
                        {{ $project[0]->description }}
                    </p>
                </div>

                <div class="space-y-6 border-b border-black">
                    <h3 class="text-sky-400 font-bold text-2xl">Gallery</h3>

                    <div class="grid grid-cols-3 gap-6 pb-6 pswp-gallery pswp-gallery" id="project-gallery">
                        @foreach ($project[0]->images as $item)
                            <a href="/images/{{ $item->image }}"
                                class="w-full h-[200px] bg-neutral-200 rounded-lg overflow-hidden relative group">
                                <img src="{{ asset('images') }}/{{ $item->image }}" alt="Project Image"
                                    class="w-full h-full object-cover" />
                                <div
                                    class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300">
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== End Detail Project ===== -->

    <!-- ===== Other Project Section ===== -->
    <section class="container mx-auto px-6 lg:px-0 mt-24 lg:mt-0 pt-0 pb-0 lg:pt-12 lg:pb-36">
        <div class="flex justify-between items-end">
            <div class="flex flex-col space-y-6">
                <h2 class="text-sky-400 text-4xl lg:text-5xl font-bold">Another Projects</h2>

                <p class="text-base lg:text-lg max-w-4xl">Feel free to explore my other projects at your convenience. You're welcome to browse through and check out the variety of work I've done.</p>
            </div>

           
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-24">
            @foreach ($threeProjects as $project)
                <div class="card border border-slate-400">
                    <figure>
                        <img src="{{ asset('images') }}/{{ $project->thumbnail }}" alt="Project Preview" />
                    </figure>
                    <div class="card-body py-8 px-8 lg:px-0">
                        <span class="font-bold mb-1">
                            {{ $project->start_date }}</span>
                        <a href="#">
                            <h2 class="card-title font-bold">{{ $project->name }}</h2>
                        </a>
                           @foreach($project->techStacks as $index => $techStack)
        {{ $techStack->name }}{{ $index != $project->techStacks->count() - 1 ? ',' : '' }}
    @endforeach
                        <div class="card-actions mt-6">
                            <a href="/anotherProjects/show/{{ $project->id }}" class="font-semibold space-x-4">
                                View details
                                <i class="fa-solid fa-chevron-right text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center items-center lg:hidden">
            <a href="#" class="btn btn-outline btn-info mt-6">
                Semua Proyek
            </a>
        </div>
    </section>
    <!-- ===== End Other Project ===== -->



  


    <!-- ===== Custom JavaScript ===== -->
    <script src="./js/index.js"></script>

    <!-- ===== CDN JavaScript ===== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
