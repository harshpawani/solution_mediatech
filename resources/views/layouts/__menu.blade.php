<style>
	.menu--scroll {
        scrollbar-width: none;
    }
	.menu--scroll::-webkit-scrollbar {
		display: none;
	}
</style>

<div x-data="{ open: false }">
    <div :class="{ 'hidden': open }" class="fixed px-20 top-0 left-0" style="width: 100%; z-index: 999999 !important">
        <div class="flex" style="justify-content: space-between;align-items: center;">
            <div class="">
                <div> <a href=""> <img src="{{ asset('assets/images/logo.png') }}" alt="" style="width: 16vh;"> </a> </div>
            </div>
            <div>
                <div class="flex items-center space-x-5 ">
                    @if (request()->is('desktop-14'))
                    <a href="">
                        <div class="py-2 px-10 border rounded-full border-white text-white hover:bg-white hover:text-gray-600 transition duration-300">
                            <p>Get in Touch</p>
                        </div>
                    </a>
                    @endif
                    <div class="flex"> <button @click="open = true"> <img src="{{ asset('assets/images/toggle.png') }}" alt="" class="h-12 w-12"> </button> </div>
                    {{-- <x-menubar /> --}}
                </div>
            </div>
        </div>
    </div>




    <section x-show="open" class="bg--dark h-screen w-screen fixed overflow-x-hidden" style="z-index: 999999; display: none">
        <div class="flex justify-between items-center px-20">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
            <h4 class="font--gilroy-reg text-white" style="font-size: 19px;">Contact Us</h4>
        </div>
        <div class="flex justify-end">
            <h1 class=" stroke--text-dark leading-none -mr-10">Menu</h1>
        </div>

        <div class="flex flex-nowrap overflow-x-auto -mt-40 menu--scroll">
            <div class="min-w-max flex-col p-10 ml-28">
                <img src="{{ asset('assets/images/menu/menu-1.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('desktop-50') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Our Process</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-2.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('capabilities') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Capabilities</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-3.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('opportunities') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Opportunities</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-4.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{  route('blogs') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Blogs</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-5.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('case-studies') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Case Studies</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-6.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('philosophy') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Philosophy</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-6.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('careers') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Careers</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-6.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('contact-us') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Contact Us</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-6.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('privacy-policy') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Privacy Policy</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-6.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('terms-conditions') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Terms and Conditions</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-6.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('terms-conditions-2') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Terms and Conditions 2</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="min-w-max flex-col p-10">
                <img src="{{ asset('assets/images/menu/menu-6.png') }}" alt="" class="rounded-xl"
                    style="box-shadow: -30px 50px 0 0 rgba(51, 51, 51, 1);">
                <div class="flex justify-end">
                    <a href="{{ route('blog-details') }}" class="w-2/3 -mr-5 -mt-5">
                        <div class="flex justify-between items-center bg-white py-2 px-3 rounded-lg hover:bg-gray-500 hover:text-white transition duration-300">
                            <h4 class="text-sm font--gilroy-reg">Blog Details</h4>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-20">
            <button @click="open = false">
                <div class="flex p-3 rounded-full bg-white w-12 h-12 hover:bg-gray-500 hover:text-white transition duration-300">
                    <i class="fas fa-times text-xl m-auto"></i>
                </div>
            </button>
        </div>
        <div class="flex justify-between items-end px-20 py-10">
            <div>
                <h4 class="font--gilroy-med text-white uppercase leading-none" style="font-size: 16px;">Say hello at:
                </h4>
                <h3 class="font--gilroy-med text-white leading-none" style="font-size: 23px;">Connect@solution.com</h3>
            </div>
            <div>
                <h4 class="font--gilroy-med text-white leading-none" style="font-size: 23px;">Follow us</h4>
                <div class="flex justify-center space-x-10 mt-5">
                    <a href="" class="text-white">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="" class="text-white">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="" class="text-white">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
