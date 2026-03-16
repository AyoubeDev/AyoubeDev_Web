  <!-- Scroll to Top / Navigation Bubble -->
  <div id="scroll-bubble" role="button" tabindex="0" aria-label="Navigation menu" aria-expanded="false">
    <span id="scroll-icon">↑</span>
    <div id="scroll-menu">
      <a href="#section-header">Inicio</a>
      <a href="#formacio">Formació</a>
      <a href="#carrusel_skills">Skills</a>
      <a href="#exp_laboral">Experiència</a>
      <a href="#projectes">Projectes</a>
    </div>
  </div>

  <!-- Contact Bubble -->
  <div id="contact-bubble" role="button" tabindex="0" aria-label="Contact me bubble" onclick="window.location.href='ContactMe.html'" style="cursor:pointer;">
    <span>CONTACT ME</span>
  </div>

  <footer>
    <div id="social-media">
      <a href="">
        <img src="linkedin-black-logo.png" alt="LinkedIn" />
      </a>
      <a href="">
        <img src="87390.png" alt="GitHub" />
      </a>
      <a href="">
        <img src="x-social-media-logo-icon.webp" alt="X" />
      </a>
    </div>
    <div id="PP">
      <a href="">Avis Legal</a>
      <a href="">Cookies</a>
      <a href="">Politiques de privacitat</a>
    </div>
    <div id="copyright">
      <p>&copy; Ayoube Assanhaji Chilah 2025 - tots els drets reservats</p>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    window.addEventListener('scroll', function () {
      const scrollBubble = document.getElementById('scroll-bubble');
      if (window.scrollY < 10) {
        scrollBubble.style.display = 'none';
      } else {
        scrollBubble.style.display = '';
      }
    });
  </script>
</body>

</html>
