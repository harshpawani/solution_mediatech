@extends('layouts.app')
@push('styles')
<style>

</style>
@endpush
@section('content')
<div class="flex flex-col h-screen">
    <div class="fixed px-10 top-0 left-0 z-20">
        <div> <a href=""> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </a> </div>
    </div>
    <div class="fixed px-20 top-0 right-0 py-10 z-20">
        <div> <a href=""> <img src="{{ asset('assets/images/toggle.png') }}" alt="" class="h-12 w-12"> </a> </div>
    </div>

    <main class="flex-1 bg-gray-50 overflow-x-hidden">
        <section class="p-20 flex flex-col"
            style="background-image: url({{ asset('assets/images/bg.png') }}); max-height:auto; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="flex items-center">
                <div class="w-1/2">
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                        for world-class brands to make your products to live for world-class brands to make your
                        products to live for world-class brands to make your products to
                    </h5>
                </div>
                <div class="w-1/2">
                    <h1 class="text-white text-right mr-5 text-7xl font--gilroy-bold">
                        Blogs
                    </h1>
                </div>
            </div>


            <div class="flex gap-4 -mr-20">
                <div class="w-3/4">
                    <div class="flex items-center mt-5">
                        <div class="mr-4">
                            <hr style="height: 10px; width: 45%" class="m-auto">
                            <hr style=" width: 70%" class="m-auto">
                            <p class="text-white py-3">Hover to view</p>
                            <hr style="height: 10px; width: 45%" class="m-auto">
                            <hr style="width: 70%" class="m-auto">
                        </div>
                        <div>
                            <a href="" class="mt-10">
                                <img src="{{ asset('assets/images/icons/scroll-without-text.png') }}" alt="">
                            </a>
                        </div>
                        
                    </div>
                    <div class="mb-10 mt-12 flex">
                        <div class="border border-white rounded-lg flex p-3">
                            <img class="images" src="{{ asset('assets/images/blogs/1.png') }}"
                            style="width: 329px; height: 499px;">
                        </div>
                    </div>
                </div>
                <div class="w-2/4">
                    <div class="flex">
                        <div class="border border-white rounded-lg flex p-3">
                            <img class="images" src="{{ asset('assets/images/blogs/2.png') }}"
                            style="width: 224px; height: 341px;">
                        </div>
                    </div>
                </div>
                <div class="w-2/4 self-end" > {{-- harusnya di kasih ini style="margin-bottom: -144px;" --}}
                    <div class="flex">
                        <div class="border relative border-white rounded-lg flex p-3">
                            <img class="images" src="{{ asset('assets/images/blogs/3.png') }}"
                            style="width: 216px; height: 328px;">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex">
                        <div class="rounded-lg flex">
                            <img class="images" class="m-3" src="{{ asset('assets/images/blogs/4.png') }}"
                            style="width: 100%; height: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@include('blogs.insights')

@endsection

@push('scripts')
<script>
    $('.images').mouseenter(function(e){
        e.preventDefault()
        console.log('yayayyay');
        const image = $(this).attr('src')
        $('.preview-image').attr('src', image)
        $('.modal').addClass('active');
    })

    $(document).on('click', '.modal', function (e) {  
        e.preventDefault();
        $('.modal').removeClass('active');
    })
</script>
@endpush