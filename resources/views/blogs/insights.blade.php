<div class="flex modal flex-col h-screen">
    <div class="h-screen blur--effect w-screen relative"></div>
    <main class="pl-20 flex-1 h-screen w-screen overflow-y-hidden top-0 left-0 overflow-x-hidden absolute">
        <section class="flex mt-20">
            <div class="w-96 relative">
                <img class="m-3 preview-image" src="{{ asset('assets/images/blogs/1.png') }}"
                    style="width: 329px; height: 499px;">
                <div class="absolute text-center rounded-full p-3 z-10 bg-white" style="width: 100px; height: 100px;
                bottom: 40px; right: -30px;">
                    {{-- <img class="absolute" src="{{ asset('assets/images/icons/arrow-right.png') }}" alt=""> --}}
                    <svg viewBox="0 0 500 500">
                        <path style="fill: transparent;" id="curve"
                            d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                        <text width="500">
                            <textPath xlink:href="#curve" style="font-size: 68px;font-weight: bolder;">
                                Explore More
                            </textPath>
                        </text>
                    </svg>

                </div>
            </div>
            <div class="mt-8 w-3/5">
                <div class="flex gap-5">
                    <div>
                        <hr style="height: 199px; border-left: 3px solid #fff;">
                    </div>
                    <div class="w-full">
                        <div class="flex gap-8">
                            <div class="uppercase font--gilroy-reg text-white">DESIGN AND IDEATION</div>
                            <div class="uppercase font--gilroy-reg text-white">|</div>
                            <div class="uppercase font--gilroy-reg text-white">5 MINS READ</div>
                            <div class="uppercase font--gilroy-reg text-white">|</div>
                            <div class="uppercase font--gilroy-reg text-white">23 DAYS AGO</div>
                        </div>
                        <h1 class="text-white text-6xl font--gilroy-bold">
                            Build extraordinary products
                        </h1>
                        <h5 class="text-white text-opacity-40 text-xl my-5" style="font-size: 18px;">
                            Engineering technologies that bring people together in the real world is both inspiring and
                            daunting. We're tackling challenges in search relevance, payments
                        </h5>
                        <div class="flex gap-4">
                            <a href="" class="bg-white rounded-lg p-3" style="--tw-bg-opacity: 0.06;">
                                <img src="{{ asset('assets/images/icons/blogs/love.png') }}" alt="">
                            </a>
                            <a href="" class="bg-white rounded-lg p-3" style="--tw-bg-opacity: 0.06;">
                                <img src="{{ asset('assets/images/icons/blogs/comment.png') }}" alt="">
                            </a>
                            <a href="" class="bg-white rounded-lg p-3" style="--tw-bg-opacity: 0.06;">
                                <img src="{{ asset('assets/images/icons/blogs/share.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </main>
</div>