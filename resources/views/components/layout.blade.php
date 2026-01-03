<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline' 'unsafe-eval' data: blob:;">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&display=swap" rel="stylesheet">    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white m-8 font-semibold pb-15">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="#">
                    <img src="{{ Vite::asset('resources/imgs/logo.svg')}}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-semibold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @auth
            <div class="space-x-6 flex">
                <a href="/jobs/create">Post a Job</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button class="hover:cursor-pointer">Log Out</button>
                </form>

            </div>
            @endauth

            @guest
            <div class="space-x-6 flex">
                <a href="/login" class="mr-5">Log In</a>
                <a href="/register">Sign Up</a>
            </div>
            @endguest
        </nav>
    </div>
    <main class="mt-10 max-w-[986px] mx-auto">
        {{$slot}}
    </main>
</body>
</html>