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
                            Web <br> Developer
                        </h1>
                        <h5 class="text-white text-xl my-5" style="font-size: 18px;">
                            for world-class brands to make your products to live for world-class brands to make your
                            products to live for world-class brands to make your products to
                        </h5>
                    </div>
                </div>
            </section>

            {{-- <section class="p-20 bg--dark">
            <div>
                <p class="text-white text-opacity-40 mb-4 text-justify font--gilroy-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis.
                </p>
                <p class="text-white text-opacity-40 mb-4 text-justify font--gilroy-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur nec integer duis.
                </p>
            </div>
        </section> --}}
            <section class="relative">
                <div class="flex flex-col my-10 space-y-10">
                    <div class="flex space-x-10 p-10">
                        <div class="w-full p-10 rounded-xl flex flex-col space-y-5" style="background-color: #2B2B2B;">
                            <div class="rounded-xl">
                                <img src="{{ asset('assets/images/talky.png') }}" width="80%" alt="">
                            </div>
                            <h1 class="text-white text-7xl font--gilroy-bold">
                                Build extraordinary <br>products
                            </h1>
                            <div>
                                <p class="text-white text-opacity-40 mb-5 text-justify font--gilroy-bold">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit
                                    amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus
                                    dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus.
                                    Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean
                                    pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu.
                                    Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget
                                    porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet
                                    pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent
                                    mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra
                                    orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim.
                                    Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur
                                    nec integer duis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique
                                    molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est
                                    id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend
                                    egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo
                                    pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id
                                    nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis
                                    faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices
                                    aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum,
                                    praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis
                                    viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan
                                    enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet
                                    consectetur nec integer duis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet,
                                    sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis
                                    cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui
                                    vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet
                                    blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id
                                    donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales
                                    cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor
                                    interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices.
                                    Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci,
                                    nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac
                                    ut aliquet consectetur nec integer duis.
                                </p>
                                <p class="text-white text-opacity-40 mb-4 mt-5 text-justify font--gilroy-bold">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique molestie amet, sit
                                    amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est id. Bibendum lacus
                                    dolor libero risus. Lectus ultricies venenatis cursus eget eleifend egestas dapibus.
                                    Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo pulvinar aenean
                                    pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id nulla elementum eu.
                                    Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis faucibus eget
                                    porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices aliquet
                                    pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum, praesent
                                    mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis viverra
                                    orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan enim.
                                    Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet consectetur
                                    nec integer duis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique
                                    molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet, sollicitudin est
                                    id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis cursus eget eleifend
                                    egestas dapibus. Scelerisque cras blandit purus amet, vitae dui vel. Cursus leo justo
                                    pulvinar aenean pharetra senectus. Suspendisse vulputate amet blandit nibh. Magna id
                                    nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id donec. Eu velit quis
                                    faucibus eget porttitor integer commodo. Porta quis proin sodales cras enim. Ultrices
                                    aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor interdum diam ipsum,
                                    praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices. Nulla ornare quis
                                    viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci, nibh non accumsan
                                    enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac ut aliquet
                                    consectetur nec integer duis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Tristique molestie amet, sit amet. Sapien mauris elementum sapien id vitae amet,
                                    sollicitudin est id. Bibendum lacus dolor libero risus. Lectus ultricies venenatis
                                    cursus eget eleifend egestas dapibus. Scelerisque cras blandit purus amet, vitae dui
                                    vel. Cursus leo justo pulvinar aenean pharetra senectus. Suspendisse vulputate amet
                                    blandit nibh. Magna id nulla elementum eu. Amet vitae nisl tincidunt bibendum lectus id
                                    donec. Eu velit quis faucibus eget porttitor integer commodo. Porta quis proin sodales
                                    cras enim. Ultrices aliquet pellentesque id lorem nisi, pretium. Nulla sit sed auctor
                                    interdum diam ipsum, praesent mi. Pulvinar urna tincidunt ultrices consectetur ultrices.
                                    Nulla ornare quis viverra orci. Vel purus risus, turpis augue a. Arcu nisl tortor, orci,
                                    nibh non accumsan enim. Dapibus phasellus proin sem pulvinar purus felis, aliquam. A, ac
                                    ut aliquet consectetur nec integer duis.
                                </p>
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
