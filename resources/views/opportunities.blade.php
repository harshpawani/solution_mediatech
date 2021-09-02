@extends('layouts.app')
@push('styles')
<style>

</style>
@endpush
@section('content')

<div class="flex flex-col h-screen">
	@include('layouts.__menu')

    <main class="flex-1 overflow-y-auto bg-gray-50 overflow-x-hidden">
        <section class="p-20 flex flex-col"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height: auto; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex">
                <div class="w-2/3 mt-20">
                    <h1 class="text-white text-7xl font--gilroy-bold"> Apply for carrer <br> with us </h1>
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                        for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to
                    </h5>
                </div>
                <div class="w-1/3 flex items-end">
                    <img src="{{ asset('assets/images/team/budy.png') }}" alt="" >
                </div>
            </div>
            <div class="flex relative mb-10">
                <div class="absolute " style="top: -192px;right: -49px;">
                    <img src="{{ asset('assets/images/wave-2.png') }}" alt="">
                </div>
                <div class="w-2/3"></div>
                <div class="w-1/3 flex justify-end px-10">
                    <a href="" class="mt-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="flex space-x-4 ">
                <div class="w-1/2 bg-white bg-opacity-20 rounded-md	">
                    <div class="p-16 text-center text-white grid flex-col justify-items-center">
                        <img class="mb-4" src="{{ asset('assets/images/icons/calendar.png') }}"
                        style="width: 110px; height: 123px;">
                        <p class="font--gilroy-bold">Flexible</p>
                        <p class="font--gilroy-md">Time Schedule</p>
                    </div>
                </div>
                <div class="w-1/3 bg-white bg-opacity-20 rounded-md	">
                    <div class="p-16 text-center text-white grid flex-col justify-items-center">
                        <img class="mb-4" src="{{ asset('assets/images/icons/wfh.png') }}"
                        style="width: 110px; height: 123px;">
                        <p class="font--gilroy-bold">Work from Home</p>
                        <p class="font--gilroy-md">plans Available</p>
                    </div>
                </div>
                <div class="w-1/3 bg-white bg-opacity-20 rounded-md	">
                    <div class="p-16 text-center text-white grid flex-col justify-items-center">
                        <img class="mb-4" src="{{ asset('assets/images/icons/faster.png') }}"
                        style="width: 110px; height: 123px;">
                        <p class="font--gilroy-bold">Faster and Easy</p>
                        <p class="font--gilroy-md">Apply option</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-20 bg--dark">
            <div>
                <h1 class="text-white font--gilroy-bold">
                    Fill the form we willl get back tou soon :)
                </h1>
            </div>
            <div class="flex flex-col mt-10 mb-20 space-y-10">
                <div id="input-1">
                    <input type="email" placeholder="Email Address"
                        class="input--custome box--dark font--gilroy-md" />
                </div>
                <div id="input-2">
                    <input type="text" placeholder="Full Name"
                        class="input--custome box--dark font--gilroy-md" />
                </div>
                <div id="input-3">
                    <input type="text" placeholder="Phone Number"
                        class="input--custome box--dark font--gilroy-md" />
                </div>
                <div id="input-4">
                    <input type="text" placeholder="Reason to contact"
                        class="input--custome box--dark font--gilroy-md" />
                </div>
                <button class="bg-white rounded-md py-3 px-9 font-normal font--gilroy-md">Send</button>
            </div>

        </section>
        <x-footer/>
    </main>
</div>
@endsection

@push('scripts')
<script>
    gsap.to("#input-1", {
        // y: 100,
        // autoAlpha: 0,
        rotation: 180,
        scrollTrigger: {
            trigger: "#input-1",
            markers: true
        },
    });
    gsap.to("#input-2", {
        // y: 100,
        // autoAlpha: 0,
        rotation: 180,
        scrollTrigger: {
            trigger: "#input-1",
            markers: true
        },
    });
    gsap.to("#input-3", {
        // y: 100,
        // autoAlpha: 0,
        rotation: 180,
        scrollTrigger: {
            trigger: "#input-1",
            markers: true
        },
    });
    gsap.to("#input-4", {
        // y: 100,
        // autoAlpha: 0,
        rotation: 180,
        scrollTrigger: {
            trigger: "#input-1",
            markers: true
        },
    });
</script>
@endpush
