<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizzer | Home</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen w-full bg-gradient-to-r from-[#334D50] to-[#CBCAA5]">
        {{-- * NAVBAR --}}
        <div class="text-white py-5 fixed flex justify-between w-full">
            <div class="px-10">
                <h1>Wizzer</h1>
            </div>
            <div class="flex w-1/2 justify-evenly">
                <div>
                    <h1>About Us</h1>
                </div>
                <div>
                    <h1>Wedding Inspiration</h1>
                </div>
                <div>
                    <h1>Notification</h1>
                </div>
                <div>
                    <h1>My Profile</h1>
                </div>
                <div>
                    <a href="/logout">logout</a>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center min-h-screen text-white">
            <div class="">
                <img src="/images/jumbotron.png" alt="" class="w-3/4 translate-y-1/2">
            </div>
            <div class="text-right">
                <h1 class="text-4xl py-4">Hai {{$user->name}}</h1>
                <p class="text-3xl">Make your dream <br> come true with us</p>
            </div>
        </div>
    </div>
    {{-- * WALLET --}}
    <div class="flex justify-evenly py-12">
        <div> </div>
        <div>
            <h1 class="text-[#54A3A9] text-[55px]">My Wallet</h1>
            <p class="text-[#B91616] text-[40px]">{{round($user->balance)}} IDR</p>
        </div>
    </div>

    {{-- * SERVICE --}}
    <div class="py-3 px-40">
        <div class="bg-gradient-to-r from-[#D9D9D9] w-1/3">
            <p class="text-[#354F51] font-bold py-3 text-7xl translate-x-10">Our Service</p>
        </div>

        <div class="flex justify-around py-5">
            <div class="py-4">
                <div class="bg-[#D9D9D9] pt-3 px-3 rounded-lg">
                    <img src="/images/home/dress.png" alt="" class="w-40">
                </div>
                <h1 class="text-center text-lg font-medium pt-2">Dress & <br>Beauty</h1>
            </div>
            <div class="py-4">
                <div class="bg-[#D9D9D9] px-4 py-2 rounded-lg">
                    <img src="/images/home/catering.png" alt="" class="w-40">
                </div>
                <h1 class="text-center text-lg font-medium pt-2">Catering</h1>
            </div>
            <div class="py-4">
                <div class="bg-[#D9D9D9] px-4 py-12 rounded-lg">
                    <img src="/images/home/decoration.png" alt="" class="w-40">
                </div>
                <h1 class="text-center text-lg font-medium pt-2">Decoration</h1>
            </div>
        </div>

        {{-- Row 2 --}}
        <div class="flex justify-around py-5">
            <div class="py-4">
                <div class="bg-[#D9D9D9] py-10 px-4 rounded-lg">
                    <img src="/images/home/sound-system.png" alt="" class="w-40">
                </div>
                <h1 class="text-center text-lg font-medium pt-2">Sound System</h1>
            </div>
            <div class="py-4">
                <div class="bg-[#D9D9D9] px-4 py-6 rounded-lg">
                    <img src="/images/home/mic.png" alt="" class="w-40">
                </div>
                <h1 class="text-center text-lg font-medium pt-2">MC</h1>
            </div>
            <div class="py-4">
                <div class="bg-[#D9D9D9] px-4 py-4 rounded-lg">
                    <img src="/images/home/camera.png" alt="" class="w-40">
                </div>
                <h1 class="text-center text-lg font-medium pt-2">Photographer</h1>
            </div>
        </div>
    </div>

    {{-- * ABOUT US --}}
    <div class="text-center">
        <h1 class="text-7xl text-[#354F51]">About Us</h1>
        <p class="py-10 text-3xl mx-auto text-[#576B65] w-1/2">
            Lorem ipsum dolor sit amet consectetur. Sed ut tortor sed ultrices dolor congue. Auctor lacinia arcu aenean
            nunc maecenas morbi sodales leo eu.
        </p>
    </div>

    {{-- * GALLERY --}}
    <div class="text-center">
        <h1 class="text-7xl text-[#354F51] py-20">Gallery</h1>
        <div class="flex justify-center">
            <div class="h-full">
                <img src="/images/home/gallery-1.png" alt="">
            </div>
            <div class="">
                <img src="/images/home/gallery-2.png" alt="" class="py-5">
                <img src="/images/home/gallery-3.png" alt="">
            </div>
        </div>
    </div>

    {{-- * --}}
    <div class="flex justify-around py-10 bg-[#385052]">
        <div>
            <img src="/images/home/maps.png" alt="">
        </div>
        <div class="text-white">
            <p>Street: Jl. Yos Sudarso No 26-30</p>
            <p>Medan</p>
            <p>City: Medan</p>
            <p>State/Province/Area: Medan</p>
            <p>Phone Number: +62 61 455 4580</p>
            <p>ZIP Code 20114</p>
            <p>Country Calling Code +62</p>
            <p>Country Indonesia</p>
        </div>
        <div class="flex flex-col gap-y-4 items-center">
            <img src="/images/home/facebook.png" alt="">
            <img src="/images/home/instagram.png" alt="">
            <img src="/images/home/linkedin.png" alt="">
        </div>
    </div>
</body>
</html>