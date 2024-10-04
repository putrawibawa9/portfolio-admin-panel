{{-- @dd($projects) --}}
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Web Konstruksi</title>

    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('node_modules/photoswipe/dist/photoswipe.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('images/logo-transparent.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden">
 


    <!-- ===== Project Section ===== -->
 <div >
    <div class="flex flex-col space-y-3 lg:space-y-6 text-center">
        
        <h2 class="text-sky-400 text-4xl lg:text-5xl font-bold" id="proyekKami">Another Projects</h2>

        <p class="text-base lg:text-lg ">Feel free to explore my other projects at your convenience. You're welcome to browse through and check out the variety of work I've done.</p>
    </div>
    
</div>


    <section class="container mx-auto pt-12 pb-24 px-6 lg:px-0">
          <a href="https://www.putrawibawa.com/" class="font-semibold">
                    <i class="fa-solid fa-chevron-left mr-2"></i>
                    Back
                </a>

        <div class="card lg:card-side mt-10 rounded-lg border border-slate-400 bg-base-100 h-full lg:h-[450px] w-full">
            <figure class="w-full lg:w-[60%] h-[12.5rem] lg:h-auto">
                <img src="{{ asset('images/project-penting.png') }}" alt="Foto Utama" class="h-full w-full object-fill" />
            </figure>

            <div class="card-body w-full lg:w-[40%] p-6 lg:p-12 flex flex-col justify-between">
                <div class="flex flex-col space-y-2 lg:space-y-4">
              
                    <h2 class="card-title text-2xl lg:text-4xl font-bold text-sky-400">Portfolio</h2>
                    <span class="text-lg lg:text-xl font-bold">01 December 2023</span>
                    <span class="text-base">
                 I want to create a portfolio website to showcase my skills, projects, and experiences in a professional and organized way, making it easier for potential clients or employers to understand my capabilities. It also serves as a personal brand statement, reflecting my creativity and expertise.
                    </span>
                       <span class="text-lg lg:text-xl"> HTML, CSS, JS</span>
                </div>
                <div class="card-actions mt-4">
                    <a href="https://putrawibawa9.github.io/MyPortfolio" class="font-semibold space-x-4">
                        View pages
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 lg:mt-24">
            @foreach ($projects as $row)
                <div class="card border border-slate-400">
                    <figure>
                        <img src="{{ asset('images') }}/{{ $row->thumbnail }}" alt="Project Preview" />
                    </figure>
                    <div class="card-body py-8 px-8">
                        <span class="font-bold mb-1">
    {{ \Carbon\Carbon::parse($row->start_date)->format('d F Y') }}
</span>
<a href="#">
    <h2 class="card-title font-bold">{{ $row->name }}</h2>
</a>
   <span class="text-lg lg:text-xl">
    @foreach($row->techStacks as $index => $techStack)
        {{ $techStack->name }}{{ $index != $row->techStacks->count() - 1 ? ',' : '' }}
    @endforeach
</span>
                        <div class="card-actions mt-6">
                            <a href="/anotherProjects/show/{{ $row->id }}" class="font-semibold space-x-4">
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
    <!-- ===== End Project ===== -->
      

    <!-- ===== Services Section ===== -->
    <footer style="width: 90%"
        class="container mx-auto bg-gradient-to-br from-sky-700 to-sky-400 !w-[90%] rounded-lg px-12 py-16 text-center flex flex-col items-center justify-center gap-y-6 text-white mt-6 lg:mt-12 mb-12 lg:mb-24">
        <h1 class="text-2xl lg:text-5xl font-bold">I Gede Putra Wibawa</h1>
        <p class="text-base lg:text-lg max-w-3xl">
           Take a moment to explore the projects I’ve completed, each reflecting my dedication to craftsmanship and innovation. From concept to execution, I’ve strived to create solutions that are both functional and aesthetically pleasing. Every project represents a step forward in my journey, and I’m excited to share them with you. I hope you’ll appreciate the passion and attention to detail that I’ve put into each one.
        </p>
    </footer>
    <!-- ===== End Services ===== -->

     <!-- ===== Custom JavaScript ===== -->
    <script src="./js/index.js"></script>

    <!-- ===== CDN JavaScript ===== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
