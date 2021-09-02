@extends('layouts.app')
@section('content')
<div class="flex flex-col h-screen">
    {{-- <div class="fixed px-10 top-0 left-0 z-20">
        <div> <a href=""> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </a> </div>
    </div>
    <div class="fixed px-20 top-0 right-0 py-10 z-20">
        <div> <a href=""> <img src="{{ asset('assets/images/toggle.png') }}" alt="" class="h-12 w-12"> </a> </div>
    </div> --}}
	@include('layouts.__menu')

    <main class="flex-1 overflow-y-auto bg-gray-50">
        <section class="p-20 flex"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="w-2/3 my-auto">
                <h1 class="text-white text-7xl" style="font-family: Gilroy-Bold;">
                    We Break boundaries to craft extraordinary experiences.
                </h1>
                <h5 class="text-gray-400 text-xl my-5" style="font-size: 18px;">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h5>
            </div>
            <div class="w-1/3 flex items-end justify-end py-20 px-10">
                <img src="{{ asset('assets/images/scroll.png') }}" alt="">
            </div>

        </section>

        <section class="relative bg-gray-900 p-20 z-10">
            <div class=" flex flex-col space-y-20 mb-20 bottom-0">
                <div class="container flex space-x-10 items-center">
                    <div class="w-1/2">
                        <img src="{{ asset('assets/images/bg.png') }}" alt="" class="w-full rounded-xl">
                    </div>
                    <div class="w-1/2 space-y-3 pl-10">
                        <h2 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                            Roady V3.0 Ilustration
                        </h2>
                        <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                            Illustration Design
                        </h4>
                        <p class="text-white text-opacity-50" style="font-size: 17px;">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to for world-class brands
                            to
                            make your products to live for world-class brands to make your products to live for
                            world-class brands to make your products to
                        </p>
                    </div>
                </div>
                <div class="container flex space-x-10 items-center">
                    <div class="w-1/2 space-y-3">
                        <h2 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                            Roady V3.0 Ilustration
                        </h2>
                        <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                            Illustration Design
                        </h4>
                        <p class="text-white text-opacity-50" style="font-size: 17px;">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to for world-class brands
                            to
                            make your products to live for world-class brands to make your products to live for
                            world-class brands to make your products to
                        </p>
                    </div>
                    <div class="w-1/2">
                        <img src="{{ asset('assets/images/bg.png') }}" alt="" class="w-full rounded-xl">
                    </div>
                </div>
                <div class="container flex space-x-10 items-center">
                    <div class="w-1/2">
                        <img src="{{ asset('assets/images/bg.png') }}" alt="" class="w-full rounded-xl">
                    </div>
                    <div class="w-1/2 space-y-3 pl-10">
                        <h2 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                            Roady V3.0 Ilustration
                        </h2>
                        <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                            Illustration Design
                        </h4>
                        <p class="text-white text-opacity-50" style="font-size: 17px;">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to for world-class brands
                            to
                            make your products to live for world-class brands to make your products to live for
                            world-class brands to make your products to
                        </p>
                    </div>
                </div>
                <div class="container flex space-x-10 items-center">
                    <div class="w-1/2 space-y-3">
                        <h2 class="text-white text-3xl" style="font-family: Gilroy-Bold;">
                            Roady V3.0 Ilustration
                        </h2>
                        <h4 class="text-white uppercase text-sm" style="font-family: Gilroy-Medium;">
                            Illustration Design
                        </h4>
                        <p class="text-white text-opacity-50" style="font-size: 17px;">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to for world-class brands
                            to
                            make your products to live for world-class brands to make your products to live for
                            world-class brands to make your products to
                        </p>
                    </div>
                    <div class="w-1/2">
                        <img src="{{ asset('assets/images/bg.png') }}" alt="" class="w-full rounded-xl">
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-10 rounded-2xl -mb-186"
                style="background-image: url({{ asset('assets/images/bg.png') }}); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
                <h1 class="text-white text-7xl" style="font-family: Gilroy-Bold;">
                    Connect
                </h1>
                <form action="">
                    <div class="flex space-x-20">
                        <div class="w-3/5">
                            <h5 class="text-white text-xl my-5" style="font-size: 18px;">
                                for world-class brands to make your products to live for world-class brands to make
                                your
                                products to live for world-class brands to make your products to
                            </h5>
                            <div class="flex flex-col space-y-5">
                                <div style="font-family: Gilroy-Medium; font-size: 21px;">
                                    <input type="email" placeholder="Email Address"
                                        class="w-full bg-transparent py-3 border-b focus:outline-none focus:border-blue-500 appearance-none block text-white placeholder-white" />
                                </div>
                                <div style="font-family: Gilroy-Medium; font-size: 21px;">
                                    <input type="text" placeholder="Full Name"
                                        class="w-full bg-transparent py-3 border-b focus:outline-none focus:border-blue-500 appearance-none block text-white placeholder-white" />
                                </div>
                                <div style="font-family: Gilroy-Medium; font-size: 21px;">
                                    <input type="text" placeholder="Phone Number"
                                        class="w-full bg-transparent py-3 border-b focus:outline-none focus:border-blue-500 appearance-none block text-white placeholder-white" />
                                </div>
                                <div style="font-family: Gilroy-Medium; font-size: 21px;">
                                    <input type="text" placeholder="Reason to Contact"
                                        class="w-full bg-transparent py-3 border-b focus:outline-none focus:border-blue-500 appearance-none block text-white placeholder-white" />
                                </div>
                            </div>
                        </div>
                        <div class="w-2/5">
                            <div class="flex flex-col space-y-10 bg-gray-900 p-10 rounded-xl">
                                <div>
                                    <h5 class="uppercase text-gray-400">Address</h5>
                                    <h6 class="text-white">hno-3/34/220 , gujarat , India</h6>
                                </div>
                                <div>
                                    <h5 class="uppercase text-gray-400">Email</h5>
                                    <h6 class="text-white">Connect@us.solutiommedia</h6>
                                </div>
                                <div>
                                    <h5 class="uppercase text-gray-400">Phone Number</h5>
                                    <h6 class="text-white">+91 8123632783</h6>
                                </div>
                                <div class="flex justify-end">
                                    <a href="">
                                        <div class="flex h-12 w-12 bg-white rounded-full -mt-10">
                                            <i class="fab fa-whatsapp m-auto text-2xl"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="mt-10">
                    <button class="w-full bg-gray-900 text-center p-3 text-white rounded-xl">Send</button>
                </div>
            </div>
        </section>

        <section class="relative bg-gray-700 p-20 z-0">
            <div class="flex flex-col text-center space-y-10 mt-32 -mb-20">
                <div class="flex flex-col space-y-3">
                    <h1 class="text-white text-7xl" style="font-family: Gilroy-Bold;">
                        Creativity + Efficiency
                    </h1>
                    <h5 class="text-white uppercase" style="font-size: 15px;">
                        Developed in India With &ensp;<i class="fas fa-heart text-red-500"></i>
                    </h5>
                </div>
                <h6 class="text-gray-400" style="font-size: 18px;">
                    We are a UI/UX (user interface / user experience) design & development company. We have helped
                    multiple clients from small medium businesses to big brands from various industry to create
                    their website / mobile apps user experiences.
                </h6>
                <div class="flex justify-center space-x-10">
                    <div class="flex flex-col space-y-3">
                        <h3 class="text-gray-400 uppercase">Quick Links</h3>
                        <h3 class="text-white" style="font-weight: 500;">Home</h3>
                        <h3 class="text-white" style="font-weight: 500;">Portfolio</h3>
                        <h3 class="text-white" style="font-weight: 500;">Career</h3>
                        <h3 class="text-white" style="font-weight: 500;">Contact Us</h3>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <h3 class="text-gray-400 uppercase">Social Media</h3>
                        <h3 class="text-white" style="font-weight: 500;">Instagram</h3>
                        <h3 class="text-white" style="font-weight: 500;">Facebook</h3>
                        <h3 class="text-white" style="font-weight: 500;">Twitter</h3>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <h3 class="text-gray-400 uppercase">About</h3>
                        <h3 class="text-white" style="font-weight: 500;">Terms</h3>
                        <h3 class="text-white" style="font-weight: 500;">Privacy</h3>
                    </div>
                </div>
                <div class="flex justify-center space-x-10 pt-10">
                    <a href="" class="text-white">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="" class="text-white">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="" class="text-white">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                </div>
                <div class="pt-14 text-white">
                    <h4 class="mb-5">&copy; 2021 @solution_media</h4>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection