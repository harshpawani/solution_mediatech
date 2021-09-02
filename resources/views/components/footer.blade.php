<section class="m-container bg--footer w-screen">
    <div id="footer-content" class="flex flex-col text-center space-y-10 py-20">
        <div class="flex flex-col space-y-3">
            <h1 class="text-white font--gilroy-bold" style="font-size: 300%">
                Creativity + Efficiency
            </h1>
            <h5 class="text-white upsmrcase">
                Developed in India With &ensp;<i class="fas fa-heart text-red-500"></i>
            </h5>
        </div>
        <h6 class="text-gray-400" style="font-size: 100%;width: min(1000px, 90vw);margin-left: auto;margin-right: auto;">
            We are a UI/UX (user interface / user experience) design & development company. We have helped
            multiple clients from small medium businesses to big brands from various industry to create
            their website / mobile apps user experiences.
        </h6>
        <div class="flex justify-center space-x-5">
            <div class="flex flex-col space-y-3">
                <h3 class="text-gray-400 uppercase">Quick Links</h3>
                <h3 class="text-white" style="font-weight: 500;">Home</h3>
                <h3 class="text-white" style="font-weight: 500;">Portfolio</h3>
                <h3 class="text-white" style="font-weight: 500;">Career</h3>
                <h3 class="text-white" style="font-weight: 500;">Contact Us</h3>
            </div>
            <div class="flex flex-col space-y-3">
                <h3 class="text-gray-400 uppercase">Social Media</h3>
                <h3 class="text-white" style="font-weight: 500;">Instagram</h3>
                <h3 class="text-white" style="font-weight: 500;">Facebook</h3>
                <h3 class="text-white" style="font-weight: 500;">Twitter</h3>
            </div>
            <div class="flex flex-col space-y-3">
                <h3 class="text-gray-400 uppercase">About</h3>
                <h3 class="text-white" style="font-weight: 500;">Terms</h3>
                <h3 class="text-white" style="font-weight: 500;">Privacy</h3>
            </div>
        </div>
        <div class="flex justify-center space-x-10 pt-10">
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
        <div class="flex justify-center space-x-10 pt-14 text-white">
            <h4 class="mb-5">&copy; 2021 @solution_media</h4>
            <h4 class="mb-5">connect@solutionmedia</h4>
            <h4 class="mb-5">+040 37434623</h4>
        </div>
    </div>
</section>

@push('scripts')
<script>
    $(document).ready(function() {
        gsap.to("#footer-content", {
            // y: 100,
            // autoAlpha: 0,
            // rotation: 180,
            scrollTrigger: {
                trigger: "#footer-content",
                // markers: true
            },
        });
    });
</script>
@endpush
