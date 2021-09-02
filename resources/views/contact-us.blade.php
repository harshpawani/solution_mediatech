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
                <div class="w-2/3 mt-20">
                    <h1 class="text-white text-7xl font--gilroy-bold"> Have a project in mind? </h1>
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                        for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to
                    </h5>
                    <button class="bg-white rounded-md py-3 px-9 font-normal font--gilroy-md">Compose Mail</button>
                </div>
                <div class="w-1/3 flex items-end">
                    <img src="{{ asset('assets/images/team/john.png') }}" alt="">
                </div>
            </div>
            <div class="flex relative">
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
        </section>

        <section class="p-20 bg--dark">
            <div>
                <h1 class="text-white font--gilroy-bold">
                    Fill the form we willl get back tou soon :)
                </h1>
            </div>
            <div class="flex flex-col mt-10 mb-20 space-y-10">
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
                <button class="bg-white rounded-md py-3 px-9 font-normal font--gilroy-md">Send</button>
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