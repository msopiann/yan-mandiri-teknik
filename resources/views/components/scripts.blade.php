<!-- scripts -->
<script src="{{asset('assets/js/plugins/jquery.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/odometer.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-appear.js')}}"></script>

<script src="{{asset('assets/js/plugins/metismenu.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper.js')}}"></script>
<script src="{{asset('assets/js/plugins/aos.js')}}"></script>
<script src="{{asset('assets/js/plugins/nice-select.js')}}"></script>
<script src="{{asset('assets/js/plugins/smooth-scroll.js')}}"></script>
<script src="{{asset('assets/js/vendor/waw.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&loading=async"></script>

<script src="{{asset('assets/js/vendor/marker.js')}}"></script>
<script src="{{asset('assets/js/vendor/map-content.js')}}"></script>
<script src="{{asset('assets/js/vendor/info-box.js')}}"></script>
<script src="https://html.themewant.com/golfy/assets/js/plugins/magnific-popup.js"></script>

<script src="{{asset('assets/js/main.js')}}"></script>

<script>
    let lastScrollY = window.scrollY;
    let marquee = document.querySelector('.marquee');
    let marquee_2 = document.querySelector('.marquee-2');
    let position = 0; // Current position of the marquee text
    let scrollTimeout;

    // Function to update marquee position based on scroll
    function updateMarqueeOnScroll() {
        const currentScrollY = window.scrollY;

        // Determine scroll direction
        if (currentScrollY > lastScrollY) {
            // Scrolling down: Move marquee left
            position -= 4; // Adjust speed as needed
        } else if (currentScrollY < lastScrollY) {
            // Scrolling up: Move marquee right
            position += 4; // Adjust speed as needed
        }

        // Update marquee position
        marquee.style.transform = `translateX(${position}px)`;

        lastScrollY = currentScrollY;

        // Clear timeout and reset after scrolling stops
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => marquee.style.transform = `translateX(${position}px)`, 50);
    }
    function updateMarqueeOnScrollTwo() {
        const currentScrollY = window.scrollY;

        // Determine scroll direction
        if (currentScrollY > lastScrollY) {
            // Scrolling down: Move marquee left
            position -= 4; // Adjust speed as needed
        } else if (currentScrollY < lastScrollY) {
            // Scrolling up: Move marquee right
            position += 4; // Adjust speed as needed
        }

        // Update marquee position
        marquee_2.style.transform = `translateX(${position}px)`;

        lastScrollY = currentScrollY;

        // Clear timeout and reset after scrolling stops
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => marquee_2.style.transform = `translateX(${position}px)`, 50);
    }

    // Listen for scroll events
    window.addEventListener('scroll', updateMarqueeOnScroll);
    window.addEventListener('scroll', updateMarqueeOnScrollTwo);
</script>