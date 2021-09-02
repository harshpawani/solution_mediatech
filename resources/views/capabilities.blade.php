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
        <section class="p-20 flex flex-col"
            style="background-image: url({{ asset('assets/images/bg.png') }}); height: auto; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex">
                <div class=" mt-20">
                    <h1 class="text-white text-7xl font--gilroy-bold">
                        We Break boundaries to craft extraordinary experineces .
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
            </div>
            <div class="flex -mr-20">
                <div class="w-1/2 mt-12 mr-14">
                    <div class="mb-10">
                        <img src="{{ asset('assets/images/capabilities/1.png') }}" width="577" height="387">
                    </div>
                    <div class="text-white">
                        <p class="font--gilroy-md uppercase">Featured case study</p>
                        <p class="font--gilroy-bold text-lg mb-5">Spring Labs — Disrupting How Financial info is Shared.</p>
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-9"><hr class="hr--grey"></div>
                            <div><p class="font--gilroy-md opacity-50">Brand Strategy & Experience</p></div>
                        </div>
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-9"><hr class="hr--grey"></div>
                            <div><p class="font--gilroy-md opacity-50">Guidelines & Systems</p></div>
                        </div>
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-9"><hr class="hr--grey"></div>
                            <div><p class="font--gilroy-md opacity-50">Trends & Insights</p></div>
                        </div>
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-9"><hr class="hr--grey"></div>
                            <div><p class="font--gilroy-md opacity-50">Content Strategy</p></div>
                        </div>
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-9"><hr class="hr--grey"></div>
                            <div><p class="font--gilroy-md opacity-50">Go-To-Market Strategy</p></div>
                        </div>
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-9"><hr class="hr--grey"></div>
                            <div><p class="font--gilroy-md opacity-50">Identity Design</p></div>
                        </div>
                        
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="w-3/4 mb-14">
                        <img src="{{ asset('assets/images/capabilities/3.png') }}" 
                    width="337" height="227">
                    </div>
                    <div class="w-1/1 ml-10">
                        <img src="{{ asset('assets/images/capabilities/2.png') }}" 
                    width="434" height="292">
                    </div>
                </div>
                <div class=" mt-20">
                    <img src="{{ asset('assets/images/capabilities/4.png') }}" 
                    width="203" height="137">
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