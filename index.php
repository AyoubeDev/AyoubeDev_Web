<?php include 'header.php'; ?>

  <!-- secció principal per mostrar una fotografia de mi i una descripció  -->
  <section id="section-header" class="section-header-bg">
    <article class="section-header-img"></article>
    <article class="section-header-content">
      <h2>Sobre Mi</h2>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem omnis quia illo ut assumenda quibusdam et iure porro ipsum? Sit delectus voluptatum officia ipsum vitae! Quo omnis exercitationem fugiat quidem.
      </p>
    </article>
  </section>

  <!-- Chipset Mask - Elemento independiente con parallax -->
  <div id="chipset-mask"></div>

  <div id="formacio" class="parallax-block">
    <div class="section-lead" data-aos="fade-up">
      <span class="lead-kicker">Story Road</span>
      <h3>Evolución constante, con foco en crear experiencias digitales que destaquen</h3>
      <p>Esta parte resume cómo he pasado de la curiosidad visual al desarrollo frontend con intención: diseño, código y narrativa en una misma dirección.</p>
    </div>

    <section id="sec-form">
      <article class="sec-form-div parallax-item" data-parallax-speed="0.04" data-aos="fade-up">
        <figure class="story-media"><img src="me/Untitled.png" alt="Inicio creativo" /></figure>
        <div class="story-content">
          <span class="story-step">2020</span>
          <h3>Base digital</h3>
          <p>Primeros pasos en edición multimedia y composición visual para construir criterio estético.</p>
          <span class="story-tag">Diseño + curiosidad técnica</span>
        </div>
      </article>

      <article class="sec-form-div parallax-item" data-parallax-speed="0.08" data-aos="fade-up" data-aos-delay="80">
        <figure class="story-media"><img src="logos/HTML-5-Badge-Logo.png" alt="Aprendizaje DAM" /></figure>
        <div class="story-content">
          <span class="story-step">2021</span>
          <h3>Formación DAM</h3>
          <p>Fundamentos sólidos en programación, estructura de datos y análisis para proyectos reales.</p>
          <span class="story-tag">Java · SQL · arquitectura</span>
        </div>
      </article>

      <article class="sec-form-div parallax-item" data-parallax-speed="0.05" data-aos="fade-up" data-aos-delay="120">
        <figure class="story-media"><img src="empresas/si2.png" alt="Soporte SI2" /></figure>
        <div class="story-content">
          <span class="story-step">2022</span>
          <h3>SI2 Informàtica</h3>
          <p>Resolución de incidencias técnicas y contacto diario con necesidades reales de usuarios.</p>
          <span class="story-tag">Soporte · hardware · cliente</span>
        </div>
      </article>

      <article class="sec-form-div parallax-item" data-parallax-speed="0.09" data-aos="fade-up" data-aos-delay="160">
        <figure class="story-media"><img src="empresas/OXFAM.jpeg" alt="Experiencia social" /></figure>
        <div class="story-content">
          <span class="story-step">2023</span>
          <h3>Entorno social y técnico</h3>
          <p>Aplicación de tecnología en contextos colaborativos, con impacto práctico y comunicación clara.</p>
          <span class="story-tag">Colaboración · impacto · empatía</span>
        </div>
      </article>

      <article class="sec-form-div parallax-item" data-parallax-speed="0.06" data-aos="fade-up" data-aos-delay="200">
        <figure class="story-media"><img src="empresas/engruna.png" alt="Prácticum" /></figure>
        <div class="story-content">
          <span class="story-step">2024</span>
          <h3>Prácticum y producto</h3>
          <p>Trabajo en interfaz y mejora visual uniendo detalle, funcionalidad y presentación profesional.</p>
          <span class="story-tag">UI · frontend · iteración</span>
        </div>
      </article>

      <article class="sec-form-div parallax-item" data-parallax-speed="0.1" data-aos="fade-up" data-aos-delay="240">
        <figure class="story-media"><img src="empresas/UVIC.jpg" alt="Siguiente etapa" /></figure>
        <div class="story-content">
          <span class="story-step">Ahora</span>
          <h3>Siguiente nivel</h3>
          <p>Construyendo un perfil frontend con código limpio, identidad visual y proyectos con propósito.</p>
          <span class="story-tag">Frontend · crecimiento constante</span>
        </div>
      </article>
    </section>
  </div>

  <div id="llenguatges-over" class="parallax-block">
    <div class="section-lead compact" data-aos="fade-up">
      <span class="lead-kicker">Visual + Idiomas</span>
      <h3>Plantillas en parallax para tus fotos y una presentación de idiomas más viva</h3>
    </div>

    <section class="photo-templates" aria-label="Plantillas parallax para fotografías">
      <article class="photo-slot tall parallax-item" data-parallax-speed="0.12">
        <img src="me/Untitled.png" alt="Plantilla foto personal" />
        <span>Foto principal - reemplázala con tu retrato</span>
      </article>
      <article class="photo-slot parallax-item" data-parallax-speed="0.06">
        <img src="empresas/si2.png" alt="Plantilla experiencia 1" />
        <span>Foto experiencia 1</span>
      </article>
      <article class="photo-slot parallax-item" data-parallax-speed="0.09">
        <img src="empresas/OXFAM.jpeg" alt="Plantilla experiencia 2" />
        <span>Foto experiencia 2</span>
      </article>
      <article class="photo-slot wide parallax-item" data-parallax-speed="0.05">
        <img src="empresas/engruna.png" alt="Plantilla proyecto destacado" />
        <span>Foto proyecto destacado</span>
      </article>
    </section>

    <div id="llenguatges">
      <article class="card" data-aos="zoom-in-up">
        <span class="lang-flag" aria-hidden="true">CAT</span>
        <h3 class="lang-title">Català</h3>
        <p class="lang-desc">Llengua d'ús diari i professional.</p>
        <div class="lang-meter" aria-label="Nivell Català 100%"><span style="--fill: 100%"></span></div>
        <span class="lang-level native">Nadiu</span>
      </article>
      <article class="card" data-aos="zoom-in-up" data-aos-delay="80">
        <span class="lang-flag" aria-hidden="true">ESP</span>
        <h3 class="lang-title">Español</h3>
        <p class="lang-desc">Comunicació fluida en tots els contextos.</p>
        <div class="lang-meter" aria-label="Nivell Español 100%"><span style="--fill: 100%"></span></div>
        <span class="lang-level native">Nadiu</span>
      </article>
      <article class="card" data-aos="zoom-in-up" data-aos-delay="140">
        <span class="lang-flag" aria-hidden="true">ENG</span>
        <h3 class="lang-title">English</h3>
        <p class="lang-desc">Entorn tècnic, documentació i reunions.</p>
        <div class="lang-meter" aria-label="Nivell English 72%"><span style="--fill: 72%"></span></div>
        <span class="lang-level">B2 · Intermedio</span>
      </article>
      <article class="card" data-aos="zoom-in-up" data-aos-delay="200">
        <span class="lang-flag" aria-hidden="true">AMZ</span>
        <h3 class="lang-title">Amazigh</h3>
        <p class="lang-desc">Llengua materna en context familiar i social.</p>
        <div class="lang-meter" aria-label="Nivell Amazigh 100%"><span style="--fill: 100%"></span></div>
        <span class="lang-level native">Nadiu</span>
      </article>
    </div>
  </div>

  <section id="carrusel_skills" class="parallax-block">
    <div class="section-lead compact" data-aos="fade-up">
      <span class="lead-kicker">Stack visual</span>
      <h3>Herramientas con las que diseño, desarrollo y prototipo</h3>
    </div>

    <div class="carousel">
      <div class="track">
        <img src="logos/Adobe_After_Effects_CC_icon.svg.png" alt="After Effects" />
        <img src="logos/Adobe_Photoshop_CC_icon.svg.png" alt="PhotoShop" />
        <img src="logos/autodesk-maya-small-social-400.png" alt="Maya" />
        <img src="logos/Blender_logo_no_text.svg.png" alt="Blender" />
        <img src="logos/HTML-5-Badge-Logo.png" alt="HTML" />
        <img src="logos/logotipo_css-min.png" alt="CSS" />
        <img src="logos/Python-logo-notext.svg.png" alt="Python" />
        <img src="logos/substant-painter.png" alt="Substance Painter" />
        <img src="logos/Unity-logo.png" alt="Unity" />
        <img src="logos/pngimg.com - mysql_PNG23.png" alt="MySQL" />

        <img src="logos/Adobe_After_Effects_CC_icon.svg.png" alt="After Effects" />
        <img src="logos/Adobe_Photoshop_CC_icon.svg.png" alt="PhotoShop" />
        <img src="logos/autodesk-maya-small-social-400.png" alt="Maya" />
        <img src="logos/Blender_logo_no_text.svg.png" alt="Blender" />
        <img src="logos/HTML-5-Badge-Logo.png" alt="HTML" />
        <img src="logos/logotipo_css-min.png" alt="CSS" />
        <img src="logos/Python-logo-notext.svg.png" alt="Python" />
        <img src="logos/substant-painter.png" alt="Substance Painter" />
        <img src="logos/Unity-logo.png" alt="Unity" />
        <img src="logos/pngimg.com - mysql_PNG23.png" alt="MySQL" />
      </div>
    </div>
  </section>

  <section id="ikigai" class="parallax-block">
    <div class="section-lead" data-aos="fade-up">
      <span class="lead-kicker">IKIGAI</span>
      <h3>MIS IKIGAIS</h3>
      <p>Tres motores personales que definen mi energía y mi forma de crecer: programar, explorar montaña y competir en equipo.</p>
    </div>

    <div class="ikigai-grid">
      <article class="ikigai-column parallax-item" data-parallax-speed="0.05" data-aos="fade-up">
        <h4>Software Programming</h4>
        <div class="ikigai-orbit parallax-item" data-parallax-speed="0.14">
          <button class="ikigai-bubble large" data-bubble-speed="0.06" type="button">
            <img src="logos/HTML-5-Badge-Logo.png" alt="Frontend Craft" />
            <span>Frontend Craft</span>
          </button>
          <button class="ikigai-bubble medium" data-bubble-speed="0.04" type="button">
            <img src="logos/Python-logo-notext.svg.png" alt="Logic Builder" />
            <span>Logic Builder</span>
          </button>
          <button class="ikigai-bubble" data-bubble-speed="0.05" type="button">
            <img src="logos/pngimg.com - mysql_PNG23.png" alt="Data Mindset" />
            <span>Data Mindset</span>
          </button>
        </div>
      </article>

      <article class="ikigai-column parallax-item" data-parallax-speed="0.08" data-aos="fade-up" data-aos-delay="90">
        <h4>Trekking</h4>
        <div class="ikigai-orbit parallax-item" data-parallax-speed="0.16">
          <button class="ikigai-bubble large" data-bubble-speed="0.06" type="button">
            <img src="empresas/UVIC.jpg" alt="Trail Spirit" />
            <span>Trail Spirit</span>
          </button>
          <button class="ikigai-bubble medium" data-bubble-speed="0.045" type="button">
            <img src="empresas/engruna.png" alt="Mountain Focus" />
            <span>Mountain Focus</span>
          </button>
          <button class="ikigai-bubble" data-bubble-speed="0.05" type="button">
            <img src="me/Untitled.png" alt="Nature Reset" />
            <span>Nature Reset</span>
          </button>
        </div>
      </article>

      <article class="ikigai-column parallax-item" data-parallax-speed="0.06" data-aos="fade-up" data-aos-delay="140">
        <h4>Volei</h4>
        <div class="ikigai-orbit parallax-item" data-parallax-speed="0.1">
          <button class="ikigai-bubble large" data-bubble-speed="0.03" type="button">
            <img src="empresas/si2.png" alt="Team Energy" />
            <span>Team Energy</span>
          </button>
          <button class="ikigai-bubble medium" data-bubble-speed="0.025" type="button">
            <img src="empresas/OXFAM.jpeg" alt="Competitive Mindset" />
            <span>Competitive Mindset</span>
          </button>
          <button class="ikigai-bubble" data-bubble-speed="0.03" type="button">
            <img src="empresas/UVIC.jpg" alt="Discipline" />
            <span>Discipline</span>
          </button>
        </div>
      </article>
    </div>
  </section>

  <div id="exp_laboral" class="parallax-block">
    <div class="section-lead compact" data-aos="fade-up">
      <span class="lead-kicker">Experiència</span>
      <h3>Trayectoria profesional orientada a resultados y mejora continua</h3>
    </div>

    <div class="parent">
      <article id="div1" class="exp-intro parallax-item" data-parallax-speed="0.04">
        <h3>Experiència Laboral</h3>
        <p>Suport tècnic, atenció a incidències i evolució cap al desenvolupament web amb mirada de producte.</p>
      </article>
      <article id="div2" class="parallax-item" data-parallax-speed="0.1">
        <span class="exp-name">SI2 informàtica</span>
        <div class="popup">Suport tècnic · 2022-2023</div>
      </article>
      <article id="div3" class="parallax-item" data-parallax-speed="0.07">
        <span class="exp-name">OXFAM ONG</span>
        <div class="popup">Suport tècnic · 2023</div>
      </article>
      <article id="div4" class="parallax-item" data-parallax-speed="0.12">
        <span class="exp-name">L'engruna</span>
        <div class="popup">Practicum · 2024-actualitat</div>
      </article>
      <article id="div5" class="parallax-item" data-parallax-speed="0.06">
        <span class="exp-name">Projecte freelance</span>
        <div class="popup">Disseny UI · etapa inicial</div>
      </article>
    </div>
  </div>

  <div id="projectes" class="parallax-block">
    <div class="section-lead" data-aos="fade-up">
      <span class="lead-kicker">Projectes</span>
      <h3>Proyectos que mezclan diseño visual, interacción y desarrollo web</h3>
      <p>Cada bloque tiene plantilla de galería para que puedas mostrar capturas reales y proceso.</p>
    </div>

    <section id="projectes-section">
      <article class="project-art left" data-aos="fade-up">
        <div class="project-img">
          <img src="logos/HTML-5-Badge-Logo.png" alt="Proyecto Portfolio" />
        </div>
        <div class="project-info">
          <h3>Portfolio Web</h3>
          <p>Presentación personal construida con HTML, CSS y JavaScript, orientada a impacto visual y navegación fluida.</p>
          <div class="project-gallery">
            <img src="me/Untitled.png" alt="Captura portfolio 1" />
            <img src="logos/logotipo_css-min.png" alt="Captura portfolio 2" />
            <img src="logos/HTML-5-Badge-Logo.png" alt="Captura portfolio 3" />
          </div>
        </div>
        <button class="gallery-toggle square-btn" type="button">Ver galería</button>
      </article>

      <article class="project-art right" data-aos="fade-up" data-aos-delay="80">
        <button class="gallery-toggle square-btn" type="button">Ver galería</button>
        <div class="project-info">
          <h3>Gestor de Tareas</h3>
          <p>Aplicación enfocada en productividad con flujo CRUD, estado claro y experiencia sencilla para usuario final.</p>
          <div class="project-gallery">
            <img src="logos/Python-logo-notext.svg.png" alt="Captura gestor 1" />
            <img src="logos/Unity-logo.png" alt="Captura gestor 2" />
            <img src="logos/pngimg.com - mysql_PNG23.png" alt="Captura gestor 3" />
          </div>
        </div>
        <div class="project-img">
          <img src="logos/Python-logo-notext.svg.png" alt="Proyecto Gestor" />
        </div>
      </article>

      <article class="project-art left" data-aos="fade-up" data-aos-delay="140">
        <div class="project-img">
          <img src="logos/Unity-logo.png" alt="Proyecto Videojuego" />
        </div>
        <div class="project-info">
          <h3>Videojuego 2D</h3>
          <p>Prototipo educativo con mecánicas de lógica y ritmo visual para mantener aprendizaje y diversión.</p>
          <div class="project-gallery">
            <img src="logos/Unity-logo.png" alt="Captura videojuego 1" />
            <img src="logos/Blender_logo_no_text.svg.png" alt="Captura videojuego 2" />
            <img src="logos/substant-painter.png" alt="Captura videojuego 3" />
          </div>
        </div>
        <button class="gallery-toggle square-btn" type="button">Ver galería</button>
      </article>
    </section>
  </div>

  <script>
    function updateParallax() {
      const scrollY = window.scrollY;
      const parallaxStrength = 0.24;
      const gridParallaxStrength = 0.075;
      const offset = scrollY * parallaxStrength;
      const bgOffset = (scrollY * gridParallaxStrength) % 24;

      document.documentElement.style.setProperty('--parallax-offset', offset + 'px');
      document.documentElement.style.setProperty('--bg-offset-y', bgOffset + 'px');

      document.querySelectorAll('.parallax-item[data-parallax-speed]').forEach(function (item) {
        const speed = parseFloat(item.getAttribute('data-parallax-speed')) || 0;
        const rect = item.getBoundingClientRect();
        const viewportAnchor = window.innerHeight * 0.5;
        const itemCenter = rect.top + rect.height * 0.5;
        const translateY = (itemCenter - viewportAnchor) * speed * -0.24;
        item.style.setProperty('--item-parallax-y', translateY.toFixed(2) + 'px');
      });

      document.querySelectorAll('.ikigai-bubble[data-bubble-speed]').forEach(function (bubble) {
        const speed = parseFloat(bubble.getAttribute('data-bubble-speed')) || 0;
        const rect = bubble.getBoundingClientRect();
        const viewportAnchor = window.innerHeight * 0.52;
        const bubbleCenter = rect.top + rect.height * 0.5;
        const translateY = (bubbleCenter - viewportAnchor) * speed * -0.2;
        bubble.style.setProperty('--bubble-parallax', translateY.toFixed(2) + 'px');
      });
    }

    window.addEventListener('scroll', updateParallax, { passive: true });
    window.addEventListener('resize', updateParallax);

    document.addEventListener('DOMContentLoaded', function () {
      updateParallax();
      const cards = document.querySelectorAll('#llenguatges .card');
      const maxRotate = 11;
      const ease = 0.12;

      function lerp(a, b, t) {
        return a + (b - a) * t;
      }

      cards.forEach(function (card) {
        let rect = card.getBoundingClientRect();
        let currentX = 0;
        let currentY = 0;
        let targetX = 0;
        let targetY = 0;
        let rAF = null;

        const update = function () {
          currentX = lerp(currentX, targetX, ease);
          currentY = lerp(currentY, targetY, ease);
          card.style.setProperty('--tilt-x', currentX + 'deg');
          card.style.setProperty('--tilt-y', currentY + 'deg');

          if (Math.abs(currentX - targetX) > 0.1 || Math.abs(currentY - targetY) > 0.1) {
            rAF = requestAnimationFrame(update);
          } else {
            rAF = null;
          }
        };

        const startAnimation = function () {
          if (!rAF) {
            rAF = requestAnimationFrame(update);
          }
        };

        card.addEventListener('mousemove', function (e) {
          rect = card.getBoundingClientRect();
          const normX = ((e.clientX - rect.left) / rect.width) * 2 - 1;
          const normY = ((e.clientY - rect.top) / rect.height) * 2 - 1;
          targetY = normX * maxRotate;
          targetX = -normY * maxRotate;
          startAnimation();
        });

        card.addEventListener('mouseleave', function () {
          targetX = 0;
          targetY = 0;
          startAnimation();
        });
      });

      const toggles = document.querySelectorAll('.gallery-toggle');
      toggles.forEach(function (btn) {
        btn.addEventListener('click', function () {
          const article = btn.closest('.project-art');
          const gallery = article.querySelector('.project-gallery');
          if (gallery) {
            gallery.classList.toggle('open');
            btn.textContent = gallery.classList.contains('open') ? 'Ocultar galería' : 'Ver galería';
          }
        });
      });
    });
  </script>

<?php include 'footer.php'; ?>
