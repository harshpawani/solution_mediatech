@extends('layouts.app')
@push('styles')
<style>

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
        <section class="p-20 flex flex-col relative"
            style="background-image: url({{ asset('assets/images/bg.png') }}); 
            height: 1000px; background-position: center; background-repeat: no-repeat;
             background-size: cover;">
            <div class="flex">
                <div class="w-3/4 mt-20">
                    <h1 class="text-white text-7xl font--gilroy-bold">
                        Create a world where anyone can belong anywhere
                    </h1>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h5>
                </div>
            </div>
            <div class="left-0 top-1/2 absolute">
                <img src="{{ asset('assets/images/careers/3.png') }}" width="auto" height="315">
            </div>
            <div class=" bottom-5 absolute" style="left: 40%">
                <img class="" src="{{ asset('assets/images/careers/4.png') }}" width="277" height="325">
            </div>

            <div class="right-0 top-1/3 absolute grid justify-items-end">
                <img class="w-3/4" src="{{ asset('assets/images/careers/1.png') }}" width="811" height="449">
            </div>

            <div class="right-5 bottom-5 absolute">
                <img class="" src="{{ asset('assets/images/careers/2.png') }}" width="352" height="389">
            </div>
        </section>

        <section class="relative p-20 bg--dark">
            <div class="flex">
                <div class="w-3/4">
                    <h1 class="text-white text-6xl font--gilroy-bold">
                        Live your best life , Benifits to work with us .
                    </h1>
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 16px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h5>
                </div>
                <div class="w-1/4 flex justify-end">
                    <a href="" class="mt-10">
                        <img src="{{ asset('assets/images/scroll.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="flex flex-col my-10 space-y-10">
                <div class="flex space-x-10">
                    <div class="w-6/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: #5C4E44; opacity: 1;">
                        <img src="{{ asset('assets/images/careers/calendar.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Flexible</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">Time Schedule</h4>
                        </div>
                    </div>
                    <div class="w-3/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(228, 195, 249, 0.2);">
                        <img src="{{ asset('assets/images/careers/shield.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Comprehensive</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">Health Plants</h4>
                        </div>
                    </div>
                    <div class="w-3/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(122, 120, 203, 0.2);">
                        <img src="{{ asset('assets/images/careers/leaf.png') }}" alt=""
                            class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Best Environtment</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">to work</h4>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-10">
                    <div class="w-3/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(200, 230, 255, 0.2);">
                        <img src="{{ asset('assets/images/careers/shield.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Comprehensive</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">Health Plants</h4>
                        </div>
                    </div>
                    <div class="w-3/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(165, 181, 236, 0.2);">
                        <img src="{{ asset('assets/images/careers/star.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Best Environtment</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">to work</h4>
                        </div>
                    </div>
                    <div class="w-6/12 p-10 rounded-xl flex flex-col space-y-5"
                        style="background-color: rgba(83, 142, 235, 0.2);">
                        <img src="{{ asset('assets/images/careers/love.png') }}" alt="" class="mx-auto h-48 w-auto">
                        <div class="flex flex-col space-y-2">
                            <h3 class="font--gilroy-bold text-white text-xl mx-auto">Heart Warning</h3>
                            <h4 class="font--gilroy-md text-white text-sm uppercase mx-auto">Experience</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-20 bg--dark">
            <div class="flex gap-10 mb-20">
                <div class="w-1/2">
                    <img src="{{ asset('assets/images/careers/build.png') }}" alt="">
                </div>
                <div class="w-1/2">
                    <h5 class="mb-5 font--gilroy-bold text-4xl text-white">Build extraordinary <br> products</h5>
                    <p class="text-white opacity-50">
                        Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful experience. We love to contribute to the community, from our work on testing React components to our new Android framework.
                    </p>
                </div>
            </div>
            <div class="flex gap-10">
                <div class="w-1/2">
                    <h5 class="mb-5 font--gilroy-bold text-4xl text-white">Team Spirit makes <br> work better</h5>
                    <p class="text-white opacity-50">
                        A world where anyone can belong anywhere starts with a workplace where you feel welcome and can contribute your best work. Airbnb welcomes candidates with backgrounds that are traditionally underrepresented in tech and offers opportunities to create community in our offices around the world.
                    </p>
                </div>
                <div class="w-1/2">
                    <img src="{{ asset('assets/images/careers/team.png') }}" alt="">
                </div>
            </div>
        </section>

        <section class="p-20 bg--dark">
            <div class="flex flex-col mb-20">
                <div class="w-3/4">
                    <h1 class="text-white text-6xl font--gilroy-bold">
                        Oppurtunities , Small  teams, global mission
                    </h1>
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 16px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h5>
                    <div class="relative w-9/12">
                        <input type="text" name="" id="" placeholder="Search Any Position"
                        class="w-full bg--dark-grey py-4 px-8 outline-none text-white rounded-full">
                        <button type="submit" class="absolute outline-none right-0 top-1/3 mr-4">
                            <svg class="text-white h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                            </svg>
                        </button>
                    </div>
                    
                </div>
                
            </div>

            <div class="flex gap-4" style="height: 638px;">
                <div class="w-2/5">
                    <h4 class="font--gilroy-bold mb-8 text-5xl mt-8 text-white">Filters</h4>
                    <a href="" class="transition duration-150 ease-in-out text--grey-light text-xl p-4 block rounded
                    active:bg--dark-grey hover:bg--dark-grey active:text-white hover:text-white">
                        UI/UX Designer
                    </a>

                    <a href="" class="transition duration-150 ease-in-out text--grey-light text-xl p-4 block rounded
                    active:bg--dark-grey hover:bg--dark-grey active:text-white hover:text-white">
                        App Designer
                    </a>
                    <a href="" class="transition duration-150 ease-in-out text--grey-light text-xl p-4 block rounded
                    active:bg--dark-grey hover:bg--dark-grey active:text-white hover:text-white">
                        Web Designer
                    </a>
                    <a href="" class="transition duration-150 ease-in-out text--grey-light text-xl p-4 block rounded
                    active:bg--dark-grey hover:bg--dark-grey active:text-white hover:text-white">
                        Graphic Designer
                    </a>

                    <a href="" class="transition duration-150 ease-in-out text--grey-light text-xl p-4 block rounded
                    active:bg--dark-grey hover:bg--dark-grey active:text-white hover:text-white">
                        Content writer
                    </a>
                </div>
                <div class="w-5">
                    <hr class="hr--vertical h-full">
                </div>
                <div class="3/5 h-full">
                    <h6 class="text-white mb-4 font--gilroy-md">AVAILABLE POSITIONS</h6>
                    <div class="h-full"  style=" overflow-y: auto">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="bg--dark-grey rounded mb-3">
                                <div class="p-8">
                                    <h4 class="text-white text-xl mb-3 font--gilroy-bold">Senior UI/UX Designer</h4>
                                <h6 class="text-white opacity-50">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</h6>
                                </div>
                            </div>    
                        @endfor
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

        <x-footer/>
    </main>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush