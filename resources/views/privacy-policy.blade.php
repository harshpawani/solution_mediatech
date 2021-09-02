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

    <main class="flex-1 overflow-y-auto bg--dark overflow-x-hidden">
        <section class="px-20 pt-20 flex flex-col">
            <div class="flex">
                <div class="w-2/3 mt-20">
                    <h1 class="text-white text-7xl font--gilroy-bold"> 
                        Privacy Policy
                    </h1>
                    <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                        for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to
                    </h5>
                </div>
            </div>
        </section>

        <section class="p-20 bg--dark">
            <div>
                <p class="text-white text-opacity-40 mb-4 text-justify font--gilroy-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis.
                </p>
                <p class="text-white text-opacity-40 mb-4 text-justify font--gilroy-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis.
                </p>
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