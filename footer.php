  <!-- Navegación rápida -->
  <div id="scroll-bubble" role="button" tabindex="0" aria-label="Navigation menu" aria-expanded="false">
    <span id="scroll-icon">↑</span>
    <div id="scroll-menu">
      <a href="#section-header">Inicio</a>
      <a href="#formacio">Formació</a>
      <a href="#carrusel_skills">Skills</a>
      <a href="#ikigai">Ikigai</a>
      <a href="#exp_laboral">Experiència</a>
      <a href="#projectes">Projectes</a>
    </div>
  </div>

  <!-- Acceso al contacto -->
  <div id="contact-bubble" role="button" tabindex="0" aria-label="Contact me bubble" onclick="window.location.href='ContactMe.html'" style="cursor:pointer;">
    <span>CONTACT ME</span>
  </div>

  <footer>
    <nav id="social-media" aria-label="Xarxes socials">
      <a href="https://www.linkedin.com/in/ayoube-chilah-assanhaji-85b660334">
        <img src="linkedin-black-logo.png" alt="LinkedIn" />
      </a>
      <a href="">
        <img src="87390.png" alt="Instagram" />
      </a>
      <a href="https://github.com/AyoubeDev">
        <img src="25231.png" alt="GitHub" />
      </a>
    </nav>
    <div id="copyright">
      <p>&copy; Ayoube Assanhaji Chilah 2026 - tots els drets reservats</p>
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
