@extends('layouts.app')
@push('styles')
<style>
    ::-webkit-scrollbar {
        width: 2px;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 2px rgba(255, 255, 255, 0.5);
        /* background-color: rgba(255, 255, 255, 0.5); */
        border-radius: 10px;
        width: 2px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: rgba(43, 43, 43, 1);
        outline: 1px rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        width: 2px;
    }
</style>
@endpush
@section('content')

<div class="flex flex-col h-screen">
    {{-- <div class="fixed px-10 top-0 left-0 z-20">
        <div> <a href=""> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </a> </div>
    </div>
    <div class="fixed px-20 top-0 right-0 py-10 z-20">
        <div> <a href=""> <img src="{{ asset('assets/images/toggle.png') }}" alt="" class="h-12 w-12"> </a> </div>
    </div> --}}
	@include('layouts.__menu')

    <main class="flex-1 overflow-y-auto bg-gray-50 overflow-x-hidden">
        <section class="p-20 flex flex-col"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height: 140%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex">
                <div class="w-2/3 mt-20">
                    <h1 class="text-white text-7xl font--gilroy-bold">
                        We drive experiences for brands with purpose.
                    </h1>
                </div>
                <div class="w-1/3 flex items-end">
                    <h1 class="stroke--text-white -mb-20 -ml-28" style="font-size: 170px;">
                        Experiences
                    </h1>
                </div>
            </div>
            <div class="flex">
                <div class="w-2/3">
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h5>
                </div>
                <div class="w-1/3 flex justify-end px-10">
                    <a href="" class="mt-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap my-10 relative">
                <div class="absolute opacity-20">
                    <img src="{{ asset('assets/images/wave-2.png') }}" alt="">
                </div>
                <div class="w-1/3 border-b border-white flex h-40">
                    <img src="{{ asset('assets/images/swell.png') }}" alt="" class="m-auto">
                </div>
                <div class="w-1/3 border-r border-l border-b border-white flex h-40">
                    <img src="{{ asset('assets/images/airbnb-ericsson.png') }}" alt="" class="m-auto">
                </div>
                <div class="w-1/3 border-b border-white flex h-40">
                    <img src="{{ asset('assets/images/amazon.png') }}" alt="" class="m-auto">
                </div>
                <div class="w-1/3 flex h-40">
                    <img src="{{ asset('assets/images/forbes.png') }}" alt="" class="m-auto">
                </div>
                <div class="w-1/3 border-r border-l border-white flex h-40">
                    <img src="{{ asset('assets/images/hubspot.png') }}" alt="" class="m-auto">
                </div>
                <div class="w-1/3 flex h-40">
                    <img src="{{ asset('assets/images/loliware.png') }}" alt="" class="m-auto">
                </div>
            </div>
        </section>

        <section class="relative p-20 bg--dark">
            <div class="flex">
                <div class="w-7/12">
                    <h1 class="text-white text-7xl font--gilroy-bold">
                        Explore ~ Ideate
                        <br>Our Team & leads
                    </h1>
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 16px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h5>
                </div>
                <div class="w-5/12 flex justify-end">
                    <a href="" class="mt-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="flex flex-col my-10 space-y-10">
                <div class="flex space-x-10">
                    <div class="w-6/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: #5C4E44; opacity: 1;">
                        <img src="{{ asset('assets/images/team/zetra.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Zetra</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">Digital Marketer</h4>
                        </div>
                    </div>
                    <div class="w-3/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(228, 195, 249, 0.2);">
                        <img src="{{ asset('assets/images/team/bruce-wayne.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Bruce Wayne</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">WEB DEVELOPER</h4>
                        </div>
                    </div>
                    <div class="w-3/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(122, 120, 203, 0.2);">
                        <img src="{{ asset('assets/images/team/princes-diana.png') }}" alt=""
                            class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Diana Prince</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">GRAPHIC DESIGNER</h4>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-10">
                    <div class="w-3/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(200, 230, 255, 0.2);">
                        <img src="{{ asset('assets/images/team/jonathan.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Jonathan</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">UI/UX DESIGNER</h4>
                        </div>
                    </div>
                    <div class="w-3/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(165, 181, 236, 0.2);">
                        <img src="{{ asset('assets/images/team/clark-kent.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Clark Kent</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">ANIMATOR</h4>
                        </div>
                    </div>
                    <div class="w-6/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(83, 142, 235, 0.2);">
                        <img src="{{ asset('assets/images/team/barry-allen.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Barry Allen</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">ANDROID DEVELOPER</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-20 bg--dark">
            <div class="flex">
                <div class="w-2/3 z-10">
                    <h1 class="text-white text-7xl font--gilroy-bold">
                        We drive experiences for brands with purpose.
                    </h1>
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h5>
                </div>
                <div class="w-1/3">
                    <h1 class="stroke--text-dark -ml-60 -mt-24 z-0" style="font-size: 160px;">
                        Experiences
                    </h1>
                </div>
            </div>
            <div class="flex overflow-x-auto my-10">
                <div class="flex flex-nowrap space-x-10 mb-10">
                    <div class="flex flex-col space-y-10">
                        <div class="inline-block">
                            <div class="w-80 h-70 overflow-hidden rounded-lg p-10" style="background-color: #2B2B2B;">
                                <img src="{{ asset('assets/images/airbnb.png') }}" alt="">
                                <h5 class="text-white text-opacity-40 text-sm my-5">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                        <div class="inline-block">
                            <div class="w-80 h-70 overflow-hidden rounded-lg p-10" style="background-color: #2B2B2B;">
                                <img src="{{ asset('assets/images/airbnb.png') }}" alt="">
                                <h5 class="text-white text-opacity-40 text-sm my-5">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-10">
                        <div class="inline-block">
                            <div class="w-80 h-70 overflow-hidden rounded-lg p-10" style="background-color: #2B2B2B;">
                                <img src="{{ asset('assets/images/opus9.png') }}" alt="">
                                <h5 class="text-white text-opacity-40 text-sm my-5">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                        <div class="inline-block">
                            <div class="w-80 h-70 overflow-hidden rounded-lg p-10" style="background-color: #2B2B2B;">
                                <img src="{{ asset('assets/images/opus9.png') }}" alt="">
                                <h5 class="text-white text-opacity-40 text-sm my-5">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-10">
                        <div class="inline-block">
                            <div class="w-80 h-70 overflow-hidden rounded-lg p-10" style="background-color: #2B2B2B;">
                                <img src="{{ asset('assets/images/microsoft.png') }}" alt="">
                                <h5 class="text-white text-opacity-40 text-sm my-5">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                        <div class="inline-block">
                            <div class="w-80 h-70 overflow-hidden rounded-lg p-10" style="background-color: #2B2B2B;">
                                <img src="{{ asset('assets/images/microsoft.png') }}" alt="">
                                <h5 class="text-white text-opacity-40 text-sm my-5">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-10">
                        <div class="inline-block">
                            <div class="w-80 h-70 overflow-hidden rounded-lg p-10" style="background-color: #2B2B2B;">
                                <img src="{{ asset('assets/images/airbnb.png') }}" alt="">
                                <h5 class="text-white text-opacity-40 text-sm my-5">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                        <div class="inline-block">
                            <div class="w-80 h-70 overflow-hidden rounded-lg p-10" style="background-color: #2B2B2B;">
                                <img src="{{ asset('assets/images/airbnb.png') }}" alt="">
                                <h5 class="text-white text-opacity-40 text-sm my-5">
                                    for world-class brands to make your products to live for world-class brands to make
                                    your
                                    products to live for world-class brands to make your products to
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-20 bg--dark">
            <div class="flex space-x-20">
                <div class="w-7/12">
                    <div class="flex">
                        <div class="w-full">
                            <h1 class="text-white text-7xl font--gilroy-bold">
                                Connect
                            </h1>
                        </div>
                    </div>
                    <h5 class="text-white text-xl mt-5" style="font-size: 17px; color: #A0A0A0;">
                        for world-class brands to make your products to live for world-class brands to make
                        your
                        products to live for world-class brands to make your products to
                    </h5>
                    <div class="flex flex-col my-20 space-y-10">
                        <div>
                            <input type="email" placeholder="Email Address"
                                class="input--custome box--dark font--gilroy-md" />
                        </div>
                        <div>
                            <input type="text" placeholder="Full Name"
                                class="input--custome box--dark font--gilroy-md" />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone Number"
                                class="input--custome box--dark font--gilroy-md" />
                        </div>
                        <div>
                            <input type="text" placeholder="Reason to contact"
                                class="input--custome box--dark font--gilroy-md" />
                        </div>
                    </div>
                </div>
                <div class="w-5/12">
                    <div class="-mx-20 -mt-10">
                        <h1 class="stroke--text-dark">
                            Connect
                        </h1>
                    </div>
                    <div class="flex flex-col space-y-10 box--dark p-10 rounded-xl">
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
            <div class="flex mt-10">
                <button class="box--dark font--gilroy-md w-full p-3 rounded-xl text-white">Send</button>
            </div>
        </section>

        <x-footer />
    </main>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush