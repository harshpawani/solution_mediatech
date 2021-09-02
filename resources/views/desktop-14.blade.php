@extends('layouts.app')
@push('styles')
<style>
    .m-container {
        padding-left: 10rem;
        padding-right: 10rem;
    }

    .icon-page {
        font-size: 120%;
    }

    .section {
        overflow: hidden;
    }
</style>
@endpush
@section('content')

@include('layouts.__menu')

<div id="scroll-down-btn" style="position: fixed;bottom: 5vh;z-index: 50;left: 50%;transform: translateX(-50%);">
    <a href="" class="-mb-10">
        <img src="{{ asset('assets/images/scroll.png') }}" alt="" style="height: 10vh;">
    </a>
</div>

<div id="section-navbar" class="flex px-10" style="position: fixed;right: 0;bottom: 4vh;z-index: 50;">
    <div class="flex py-5 px-5 mr-5 border-b-2 border-white w-1/5">
        <i class="fa fa-home text-white icon-page mx-auto self-end"></i>
    </div>
    <div class="flex py-5 px-5 mr-5 border-b-2 border-white w-1/5">
        <i class="fa fa-city text-white icon-page mx-auto self-end"></i>
    </div>
    <div class="flex py-5 px-5 mr-5 border-b-2 border-white w-1/5">
        <i class="fas fa-cube text-white icon-page mx-auto self-end"></i>
    </div>
    <div class="flex py-5 px-5 mr-5 border-b-2 border-white w-1/5">
        <i class="fas fa-cube text-white icon-page mx-auto self-end"></i>
    </div>
    <div class="flex py-5 px-5 mr-5 border-b-2 border-white w-1/5">
        <i class="fas fa-envelope text-white icon-page mx-auto self-end"></i>
    </div>
</div>

<main  class=" w-screen">
    <section class="section section-1 w-screen h-screen"
        style="background-image: url({{ asset('assets/images/bg.png') }});background-position: center;background-repeat: no-repeat;background-size: cover;position: relative;z-index: 1;">
        {{-- <div class="background" style="position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; overflow: hidden">
            <div style="position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; background: conic-gradient(from 180deg at 50% 50%, #020031 0deg, #090035 19.68deg, #2B045E 29.09deg, #3E0578 37.08deg, #7708BE 44.38deg,
                #C80EEC 108.66deg, #E839DE 147.4deg, #F35AAA 159.09deg, #F8668A 168.49deg, #FFA290 179.83deg, #FE8E68 180deg, #FF8134 191.01deg, #FFB97D 192deg, #F7BD4F 206.51deg, #F3C07A 219.02deg,
                #EBD4C3 226.4deg, #DEDFE3 246.49deg, #D8E7F8 269.42deg, #94D7FC 277.72deg, rgba(0, 156, 233, 0.87) 306.55deg, #0058AA 308.44deg, #02205D 321.45deg, #020031 360deg);"></div>
            <div style="position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; background: radial-gradient(50% 158.02% at 50% 50%, rgba(2, 0, 49, 0) 0%, rgba(2, 0, 49, 0.25) 100%); mix-blend-mode: hard-light;"></div>
            <div style="position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; background: conic-gradient(from 180deg at 50% 50%, #020031 0deg, #090035 22.31deg, #2B045E 31.32deg, #290454 37.59deg, #3F0571 49.46deg,
                #5C068B 67.67deg, #8B0A9A 108.66deg, #9E0B8D 135.48deg, #F01866 159.09deg, #FD5554 168.49deg, #FF7153 179.41deg, #FF6B45 180.25deg, #F86225 185.2deg, #FE7940 189.94deg, #EC8D39 206.51deg,
                #CC7945 219.96deg, #B8B2B4 226.27deg, #B5B8C7 236.05deg, #9FADD0 269.42deg, #88A0CE 277.72deg, #0064BE 306.42deg, #005EB6 306.9deg, #02205D 321.45deg, #020031 360deg)"></div>
            <div style="position: absolute; top: 0; left: 0; width: 50vw; height: 50vh; background: #FFFFFF; mix-blend-mode: overlay; opacity: 0.5; filter: blur(200px);"></div>
            <div style="position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(3, 1, 49, 0.01); backdrop-filter: blur(200px);"></div>
        </div> --}}
        <div class="content flex h-screen" style="flex-direction: column;justify-content: center;">
            <div style="padding-left: 14%; user-select: none;">
                <h1 class="stroke--text-white leading-none mt-10" style="font-size: 14.5vh">Amazing</h1>
                <h1 class="text-white leading-none -mr-5" style="white-space: nowrap; transform: translateX(0px)">
                    <span class="font--gilroy-bold" style="font-size: 15.25vh">Creativity </span>
                    <span class="font--gilroy-reg" style="font-size: 15vh" onmouseover="raiseHiddenText(this, true)" onmouseout="raiseHiddenText(this, false)">+ Vision</span>
                </h1>
            </div>
            <div class="flex" style="margin-top: 8vh;margin-right: 6vw;">
                <h4 class="text-white ml-20 leading-8" style="font-size: 2vh;width: min(500px, 35vw);margin-left: auto;">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
            </div>
        </div>
        <div id="mini-video-player" class="flex-col space-y-2 -mt-2 ml-10 absolute" style="transform: translateY(20%);left:0;bottom: 0">
            <div class="flex justify-around text-white mb-5" style="font-size: 2.25vh;">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-facebook"></i></a>
            </div>
            <img src="{{ asset('assets/images/watch-video.png') }}" alt="" onmouseover="raiseMiniVideoPlayer(this, true)" onmouseout="raiseMiniVideoPlayer(this, false)">
        </div>
    </section>
    <section class="section section-2 h-screen w-screen"
        style="background-image: url({{ asset('assets/images/bg.png') }});background-position: center;background-repeat: no-repeat;background-size: cover;position: relative;z-index: 1;">
        <div class="content" style="display: flex;flex-direction: column;height: 100vh;justify-content: center;padding-bottom: 10vh;">
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/about-us.png') }}" alt="" style="width: 50vh;">
            </div>
            <div class="space-y-5" style="padding-top: 8vh;">
                <h1 class="text-white font--gilroy-bold leading-none text-center" style="font-size: 9vh;">
                    A little <span class="stroke--text-white" style="font-size: 100%;">about</span> us
                </h1>
                <h4 class="text-white leading-10 text-center" style="font-size: 2vh;max-width: 1100px;margin: 0 auto;">
                    for world-class brands to make your products to live for world-class brands to make your products to
                    live for world-class brands to make your products to for world-class brands to make your products to
                    live for world-class brands to
                </h4>
            </div>
        </div>
    </section>
    <section class="section section-3 h-screen w-screen" style="background: #131313;padding: 0 10vw;">
        <div class="flex">
            <div class="w-1/4">
                <img src="{{ asset('assets/images/service1.png') }}" alt="" style="width: 100%">
            </div>
            <div class="w-3/4"></div>
        </div>
        <div class="flex space-x-10">
            <div class="w-3/5">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%;">
                    Services we <br /><span class="stroke--text-white" style="font-size: 90%;">Provide</span>
                </h1>
                <h4 class="text-white leading-10" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
            </div>
            <div class="w-2/5 self-end">
                <img src="{{ asset('assets/images/service.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="section section-4 m-container pt-20 h-screen w-screen" style="background: #9c6b6b">
        <div class="flex ">
            <div class="w-2/5">
                <img src="{{ asset('assets/images/iphone-group.png') }}" alt="" class="-ml-40">
            </div>
            <div class="w-3/5 flex-col">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%;">
                    App<br>Development
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-5 m-container pt-20 h-screen w-screen" style="background: #CC7F5E">
        <div class="flex">
            <div class="w-2/5">
                <img src="{{ asset('assets/images/ss.png') }}" alt="" class="-ml-40">
            </div>
            <div class="w-3/5 flex-col space-y-10 ">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%;">
                    Web<br>Development
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-6 m-container pt-20 h-screen w-screen" style="background: #DFAF53">
        <div class="flex my-20 ">
            <div class="w-2/5 px-10">
                <img src="{{ asset('assets/images/seo.png') }}" alt="">
            </div>
            <div class="w-3/5 flex-col space-y-10  ">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                    SEO
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-7 pt-20 m-container h-screen w-screen" style="background: #BFBB92">
        <div class="flex my-20 ">
            <div class="w-2/5 px-10">
                <img src="{{ asset('assets/images/ig-post.png') }}" alt="" class="">
            </div>
            <div class="w-3/5 flex-col space-y-10 ">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                    Social Media Marketing
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-8 pt-20 m-container h-screen w-screen" style="background: #A6C092">
        <div class="flex my-20">
            <div class="w-2/5  px-10">
                <img src="{{ asset('assets/images/content.png') }}" alt="">
            </div>
            <div class="w-3/5 flex-col space-y-10">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                    Content Marketing
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-9 pt-20 m-container h-screen w-screen" style="background: #91C2B7">
        <div class="flex my-20">
            <div class="w-2/5 px-10">
                <img src="{{ asset('assets/images/graphic-design.png') }}" alt="">
            </div>
            <div class="w-3/5 flex-col space-y-10">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                    Graphic <br> Design
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-10 pt-20 m-container h-screen w-screen" style="background: #97ACC6">
        <div class="flex my-20">
            <div class="w-2/5 px-10">
                <img src="{{ asset('assets/images/logo-designing.png') }}" alt="">
            </div>
            <div class="w-3/5 flex-col space-y-10">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                    Logo <br> Designing
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-11 pt-20 m-container h-screen w-screen" style="background: #9993C2">
        <div class="flex my-10">
            <div class="w-2/5 px-10">
                <img src="{{ asset('assets/images/production.png') }}" alt="">
            </div>
            <div class="w-3/5 flex-col space-y-10">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                    Production
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-12 pt-20 m-container h-screen w-screen" style="background: #BF96C6">
        <div class="flex my-10">
            <div class="w-2/5 px-10">
                <img src="{{ asset('assets/images/travel-pamflet.png') }}" alt="">
            </div>
            <div class="w-3/5 flex-col space-y-10">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                    Digital Printing Service
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-13 pt-20 m-container h-screen w-screen" style="background: #C99CB4">
        <div class="flex mt-10 mb-40 space-x-10">
            <div class="w-2/3 flex-col space-y-10 mr-20">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%">
                    Our <span class="stroke--text-white" style="font-size: 100%">Works</span>
                </h1>
                <h4 class="text-white leading-10 mr-36" style="font-size: 100%;">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to live for world-class brands to make your products to
                </h4>
                <div>
                    <a href=""
                        class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                        See More
                    </a>
                </div>
            </div>
            <div class="w-1/3 flex">
            </div>
        </div>
    </section>
    <section class="section section-14 m-container h-screen w-screen justify-between"
        style="background: #C59595;position: relative;">
        <div style="position: absolute;left:0;top: 0;width: 100%;height: 100%;z-index: 1">
            <div class="flex ">
                <div class="w-2/3">
                    <img src="{{ asset('assets/images/goals/goals-1.png') }}" alt="" srcset="">
                    <img src="{{ asset('assets/images/goals/goals-2.png') }}" alt="" srcset="">
                </div>
                <div class="w-1/3">
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="items-center" style="z-index: 2;position: relative;display: inline-block;padding-top: 20%">
                <div class="m-container">
                    <h1 class="text-white font--gilroy-bold leading-none text-left" style="font-size: 700%;">
                        Goals <span class="stroke--text-white" style="font-size: 100%">App</span>
                    </h1>
                    <h6 class="font--gilroy-bold text-white uppercase text-lg text-left">App
                        Development</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-15 px-40 h-screen w-screen"
        style="background: linear-gradient(122.56deg, #3E3E3E -6.12%, #0D0D0D 108.94%);">
        <div class="flex p-20 justify-between items-center -ml-10 mr-20">
            <div>
                <img src="{{ asset('assets/images/hovertoview.png') }}" alt="" style="width: 70%">
            </div>
            <div>
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 600%;">
                    Blogs
                </h1>
            </div>
        </div>
        <div class="flex justify-between items-center space-x-20 mr-60 -mt-10">
            <div class="p-2 rounded border border-white">
                <img class="images" src="{{ asset('assets/images/blogs/blog-1.png') }}" alt="" class="rounded">
            </div>
            <div class="p-2 rounded border border-white">
                <img class="images" src="{{ asset('assets/images/blogs/blog-2.png') }}" alt="" class="rounded">
            </div>
            <div class="p-2 rounded border border-white">
                <img class="images" src="{{ asset('assets/images/blogs/blog-3.png') }}" alt="" class="rounded">
            </div>
        </div>
        <div class="flex justify-between items-end -mt-10 mb-10">
            <div class="w-2/3 flex space-x-10">
                <h6 class="text-white text-base leading-none">connect@us.solutiommedia</h6>
                <h6 class="text-white text-base leading-none">+91 8123632783</h6>
            </div>
        </div>
    </section>
    <section class="section section-16 pt-20 m-container h-screen w-screen"
        style="background: linear-gradient(122.56deg, #3E3E3E -6.12%, #0D0D0D 108.94%);">
        <div class="flex mb-10 justify-center">
            <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 300%">
                What our <span class="stroke--text-white" style="font-size: 100%;">Clients say</span>
            </h1>
        </div>
        <div class="flex">
            <div class="w-2/5 flex ml-20">
                <div class="self-end">
                    <img src="{{ asset('assets/images/client/client-7.png') }}" alt="">
                </div>
                <div class="self-center">
                    <img src="{{ asset('assets/images/client/client-2.png') }}" alt="">
                </div>
                <div class="self-center -mb-40">
                    <img src="{{ asset('assets/images/client/client-3.png') }}" alt="">
                </div>
            </div>
            <div class="w-1/5">
                <img src="{{ asset('assets/images/client/client-1.png') }}" alt="" class="h-auto m-auto">
            </div>
            <div class="w-2/5 flex mr-20justify-center ml-10">
                <div class="self-end justify-center">
                    <img src="{{ asset('assets/images/client/client-4.png') }}" alt="" class="-mt-28">
                </div>
                <div class="self-center">
                    <img src="{{ asset('assets/images/client/client-5.png') }}" alt="">
                </div>
                <div class=" items-center justify-evenly">
                    <img src="{{ asset('assets/images/client/client-8.png') }}" alt="" class="w-16 h-auto">
                    <img src="{{ asset('assets/images/client/client-6.png') }}" alt="" class="-mb-32">
                </div>
            </div>
        </div>
        <div class=" px-20">
            <div class="flex space-x-10 my-10">
                <div class="w-1/5 flex justify-end">
                    <img src="{{ asset('assets/images/arrow-left.png') }}" alt="" class="w-8 h-8">
                </div>
                <div class="w-3/5 space-y-10">
                    <h4 class="text-white font--gilroy-bold  text-center" style="font-size: 150%">
                        Lectus arcu bibendum at varius. Adipiscing diam donec adipiscing tristique.
                    </h4>
                    <h5 class="text-white font--gilroy-bold text-lg text-center">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-purple-700">Kerry
                            Johnes</span> -
                        Some Company
                    </h5>
                </div>
                <div class="w-1/5 flex">
                    <img src="{{ asset('assets/images/arrow-right.png') }}" alt="" class="w-8 h-8">
                </div>
            </div>
        </div>
    </section>
    <section class="section section-17 pt-20 m-container h-screen w-screen"
        style="background: linear-gradient(122.56deg, #3E3E3E -6.12%, #0D0D0D 108.94%);">
        <div class="">
            <h2 class="font--gilroy-bold text-white text-center" style="font-size: 300%">Newsletter</h2>
            <h4 class="text-gray-500 text-center leading-10" style="font-size: 100%">
                We are a UI/UX (user interface / user experience) design & development company. We have helped
                multiple clients from small medium businesses to big brands from various industry to create their
                website / mobile apps user experiences .
            </h4>
        </div>
        <div class="flex ">
            <div class="w-1/2">
                <img src="{{ asset('assets/images/mailbox.png') }}" alt="" class="w-96 h-auto">
            </div>
            <div class="w-1/2 ">
                <form action="" class=" space-y-5 pt-20 pb-40">
                    <div>
                        <input type="text"
                            class="form-control w-full py-3 px-5 placeholder-white text-white rounded focus:outline-none focus:ring focus:border-blue-500"
                            placeholder="Full Name" style="background: #313131">
                    </div>
                    <div>
                        <input type="text"
                            class="form-control w-full py-3 px-5 placeholder-white text-white rounded focus:outline-none focus:ring focus:border-blue-500"
                            placeholder="Enter your mail-id" style="background: #313131">
                    </div>
                    <div>
                        <button
                            class="py-3 bg-white w-full text-center font--gilroy-med text-gray-700 rounded hover:bg-gray-500 hover:text-white transition duration-300">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="section section-18 pt-20 m-container h-screen w-screen"
        style="background-image: url({{ asset('assets/images/bg.png') }}); background-position:center; background-repeat: no-repeat; background-size: cover;">
        <div class="flex ">
            <div class="w-1/2 space-y-5">
                <h1 class="text-white font--gilroy-bold leading-none" style="font-size: 300%">
                    Connect
                </h1>
                <h4 class="text-white text-lg" style="font-size: 100%">
                    for world-class brands to make your products to live for world-class brands to make your
                    products to
                    live for world-class brands to make your products to
                </h4>
                <form action="">
                    <div class=" space-y-5 ">
                        <input type="text"
                            class=" w-full bg-white bg-opacity-20 py-3 px-5 focus:outline-none focus:ring focus:border-white rounded placeholder-white text-white"
                            placeholder="Full Name">
                        <input type="text"
                            class=" w-full bg-white bg-opacity-20 py-3 px-5 focus:outline-none focus:ring focus:border-white rounded placeholder-white text-white"
                            placeholder="Enter your mail-id">
                        <input type="text"
                            class=" w-full bg-white bg-opacity-20 py-3 px-5 focus:outline-none focus:ring focus:border-white rounded placeholder-white text-white"
                            placeholder="Phone Number">
                        <input type=" w-full text"
                            class="bg-white bg-opacity-20 py-3 px-5 focus:outline-none focus:ring focus:border-white rounded placeholder-white text-white"
                            placeholder="Reason to connect">
                        <button
                            class=" w-full bg-white py-3 text-gray-700 hover:bg-gray-500 hover:text-white transition duration-300 rounded">
                            SignUp
                        </button>
                    </div>
                </form>
            </div>
            <div class="w-1/2  items-center">
                <div class="flex z-0">
                    <h1 class="stroke--text-white leading-none -mb-28 -ml-80 opacity-10" style="font-size: 600%;">
                        Connect
                    </h1>
                </div>
                <img src="{{ asset('assets/images/3d-man.png') }}" alt="" class="w-96 h-auto z-10">
                <div class="flex w-12 h-12 bg-white rounded-full self-end">
                    <i class="fab fa-whatsapp m-auto text-xl"></i>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-end px-10 ">
            <div class="w-2/3 flex space-x-10">
                <h6 class="text-white text-base leading-none">
                    <i class="fas fa-envelope"></i>&ensp;connect@us.solutiommedia
                </h6>
                <h6 class="text-white text-base leading-none">
                    <i class="fas fa-phone-alt"></i>&ensp;+91 8123632783
                </h6>
            </div>
        </div>
    </section>
    <x-footer />
</main>
</div>

@include('blogs.insights')

@endsection

@push('scripts')
<script>
    window.onload = () => {
        gsap.fromTo(
            ".section-1 .content",
            { opacity: 0, xPercent: -10 },
            { opacity: 1, xPercent: 0, ease: "power3", duration: 0.4, delay: 0.25 }
        );
        gsap.utils.toArray("#section-navbar div").forEach((element, index) => {
            gsap.fromTo(
                element,
                { opacity: 0, yPercent: 100 },
                { opacity: 1, yPercent: 0, ease: "power3", duration: 0.4, delay: 0.2 + 0.2 * index }
            );
        });
        gsap.fromTo(
            "#scroll-down-btn",
            { opacity: 0, scale: 0.3 },
            { opacity: 1, scale: 1, ease: "back", duration: 0.6, delay: 0.6 }
        );
        gsap.fromTo(
            "#mini-video-player",
            { opacity: 0, yPercent: 100 },
            { opacity: 1, yPercent: 0, ease: "back", duration: 0.6, delay: 0.8 }
        );
    }

    const sections = gsap.utils.toArray(".section");
    timeline = gsap.timeline({
        // defaults: { duration: 1 },
        scrollTrigger: {
            trigger: ".main",
            pin: true,
            scrub: true,
            // start: "bottom bottom",
            // snap: 1 / (sections.length - 1),
            // snap: gsap.utils.snap(0.1),
            end: () => "+=" + (sections.length * 100) + "%",
            // onUpdate: ({progress}) => console.log(progress)
        }
    })

    sections.forEach((section, index) => {
        // gsap.set(section, { zIndex: (sections.length - index + 5), position: "absolute", left: 0, top: 0 });
        // timeline.fromTo(section, { opacity: 1, duration: 2 }, { opacity: 0 });
    });

    // const sections = gsap.utils.toArray(".section");
    // let currentSection = sections[0];
    // // console.log(currentSection);
    // gsap.defaults({ overwrite: "auto", duration: 0.3 });
    // gsap.set("body", { height: (sections.length * 100) + "%" });
    // sections.forEach((section, index) => {
    //     ScrollTrigger.create({
    //         start: () => (index - 0.5) * innerHeight,
    //         end: () => (index + 0.5) * innerHeight,
    //         onToggle: self => self.isActive && setSection(section)
    //     });
    // });
    // function setSection(newSection) {
    //     if (newSection !== currentSection) {
    //         gsap.to(currentSection, { scale: 0.8, autoAlpha: 0 });
    //         gsap.to(newSection, { scale: 0.1, autoAlpha: 1 });
    //         currentSection = newSection;
    //     }
    // }

    // gsap.to(sections, {
    //     yPercent: -100 * (sections.length - 1),
    //     ease: "none",
    //     scrollTrigger: {
    //         trigger: ".main",
    //         pin: true,
    //         scrub: true,
    //         markers: true,
    //         // snap: 1 / (sections.length - 1),
    //         end: () => "+=" + window.innerHeight * sections.length
    //     }
    // });

    // const contentPage1 = document.querySelector(".section-1 .content");
    // document.addEventListener("mousemove", () => {

    // });

    function raiseMiniVideoPlayer(element, isRaised) {
        gsap.to(element.parentElement,{
         yPercent: (isRaised ? -20 : 0), duration: 0.2, delay: (!isRaised ? 0.4 : 0) });
        
    }

    function raiseHiddenText(element, isRaised) {
        const elementOffsetRight = element.getBoundingClientRect().left + element.offsetWidth;
        const elementShiftX = elementOffsetRight - window.innerWidth + 50;
        if (isRaised && elementShiftX <= 0) { return }
        gsap.to(element.parentElement, { translateX: (isRaised ? -elementShiftX : 0), duration: 0.4 });
    }
</script>
@endpush
