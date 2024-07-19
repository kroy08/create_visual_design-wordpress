

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <ul class="footer__social">
          <li>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-brands fa-twitter"></i></a> 
          </li>
          <li>
            <a href=""><i class="fa-brands fa-square-instagram"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-envelope"></i></a>
          </li>
        </ul>
        <p>Baloc Road, Brgy, San Ignacio San Pablo City, Laguna 4000</p>
        <p>©INSIDESTYLE2023</p>
      </div>
    </div>
  </footer>
  <?php wp_footer() ?>

  <script>

    let tl = gsap.timeline();

    tl.from('.headerBrand', {opacity: 0, x: '-20px' duration: 2})
      .from('.header__nav', {opacity: 0, x: '20px' duration: 2})

    let homeBanner = gsap.timeline();

    homeBanner.from('.HomeAbout__text', {opacity: 0, x: '-20px' duration: 2})
      .from('.HomeAbout__img', {opacity: 0, x: '20px' duration: 2})


  </script>

</body>
</html>