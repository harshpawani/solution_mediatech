@extends('layouts.app')
@push('styles')
<style>

</style>
@endpush
@section('content')

<div class="flex flex-col h-screen">
    @include('layouts.__menu')

    <main class="flex-1 overflow-y-auto bg--dark overflow-x-hidden">
        <section class="p-10 pt-32 bg--dark flex flex-col space-y-20">
            <div id="overview-container" class="flex p-10 rounded-lg bg-white bg-opacity-10 space-x-20">
                <div id="overview-image" class="w-1/2">
                    <img src="{{ asset('assets/images/blogs/blog-detail.png') }}" alt="">
                </div>
                <div class="w-1/2 space-y-5">
                    <button id="overview-tag" class="uppercase bg-white bg-opacity-10 py-2 px-10 rounded-md text-white text-opacity-60">
                        Color Design
                    </button>
                    <h2 id="overview-title" class="font--gilroy-bold text-white leading-none" style="font-size: 55px;">
                        Build Extraordinary products
                    </h2>
                    <div id="overview-actions" class="flex space-x-5">
                        <div class="flex p-5 bg--dark rounded-xl">
                            <i class="fas fa-heart text-3xl text-red-500 m-auto"></i>
                        </div>
                        <div class="flex p-5 bg--dark rounded-xl">
                            <i class="fas fa-comment-alt text-3xl text-white m-auto"></i>
                        </div>
                        <div class="flex p-5 bg--dark rounded-xl">
                            <i class="fas fa-share-alt text-3xl text-white m-auto"></i>
                        </div>
                    </div>
                    <div id="overview-content">
                        <h4 class="text-white text-opacity-60" style="font-size: 18px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit
                            amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus
                            dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus.
                            Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean
                            pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu.
                            Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget
                            porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet
                            pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent
                            mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra
                            orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non.
                        </h4>
                    </div>
                </div>
            </div>
            <div id="content" class="flex flex-col p-10 rounded-lg bg-white bg-opacity-10">
                <p class="text-white text-opacity-60 mb-4 font--gilroy-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien
                    mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus.
                    Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus
                    amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet
                    blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu
                    velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices
                    aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi.
                    Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus
                    risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem
                    pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien
                    id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis
                    cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo
                    justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla
                    elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget
                    porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id
                    lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt
                    ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu
                    nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis,
                    aliquam. A, ac ut aliquet consectetur nec integer duis.Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet,
                    sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget
                    eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo
                    pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum
                    eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor
                    integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi,
                    pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices
                    consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl
                    tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A,
                    ac ut aliquet consectetur nec integer duis.
                </p>
                <p class="text-white text-opacity-60 mb-4 font--gilroy-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien
                    mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus.
                    Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus
                    amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet
                    blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu
                    velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices
                    aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi.
                    Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus
                    risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem
                    pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien
                    id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis
                    cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo
                    justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla
                    elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget
                    porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id
                    lorem nisi, pretium. Nulla sit sed auctor int
                </p>
            </div>
        </section>
        <x-footer />
    </main>
</div>
@endsection

@push('scripts')
<script>
    // Startup Animation
    gsap.fromTo("#overview-container", { y: 100, opacity: 0}, { y: 0, opacity: 1 });
    gsap.fromTo("#overview-image", { y: 100, opacity: 0}, { y: 0, opacity: 1, delay: 0.15 });
    gsap.fromTo("#overview-tag", { y: 100, opacity: 0}, { y: 0, opacity: 1, delay: 0.15 });
    gsap.fromTo("#overview-title", { y: 100, opacity: 0}, { y: 0, opacity: 1, delay: 0.3 });
    gsap.fromTo("#overview-actions", { y: 100, opacity: 0}, { y: 0, opacity: 1, delay: 0.45 });
    gsap.fromTo("#overview-content", { y: 100, opacity: 0}, { y: 0, opacity: 1, delay: 0.6 });
    gsap.fromTo("#content", { y: 100, opacity: 0}, { y: 0, opacity: 1, delay: 0.15 });
</script>
@endpush
