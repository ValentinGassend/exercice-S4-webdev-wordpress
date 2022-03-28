<footer class="content-info">
  <div class="container">
   <!-- Swiper JS -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   <!-- Initialize Swiper -->
   <script>
     var swiper = new Swiper(".mySwiper", {
       slidesPerView: 2,
       spaceBetween: 360,
       freeMode: true,
       loop: true,
       grabCursor:true,
       mousewheel: {
        invert: false,
      },
     });
   </script>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
