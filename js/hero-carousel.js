(function () {
  const data = window.HERO_ASCII;
  const box = document.querySelector('.hero-carousel');
  if (!data || !box) return;

  const items = Array.from(box.children);
  const headRow = data.lines.findIndex(function (line) { return /\S/.test(line); });
  const smooth = function (a, b, x) {
    const t = Math.max(0, Math.min(1, (x - a) / (b - a)));
    return t * t * (3 - 2 * t);
  };
  let layout;
  let start = performance.now();
  let visible = true;

  function measure() {
    const width = box.clientWidth;
    const height = box.clientHeight;
    const scale = Math.max(width / data.width, height / data.height);
    const headTop = height - (data.height - headRow / data.rows * data.height) * scale;
    const radius = Math.min(width * 0.42, headTop * 0.9);
    const size = radius * 0.42;
    layout = { x: width / 2, y: headTop - size * 0.1, radius: radius, size: size };
    items.forEach(function (item) {
      item.style.width = size + 'px';
      item.style.height = size * 0.75 + 'px';
    });
  }

  function frame(now) {
    const turn = (now - start) / 45000;
    items.forEach(function (item, index) {
      const angle = (index / items.length + turn) * Math.PI * 2;
      const front = (Math.sin(angle) + 1) / 2;
      const x = layout.x + Math.cos(angle) * layout.radius - layout.size / 2;
      const y = layout.y - layout.radius * 0.1 -
        Math.sin(angle) * layout.radius * 0.25 - layout.size * 0.375;
      const zoom = 0.6 + 0.5 * front;
      item.style.transform = 'translate(' + x + 'px,' + y + 'px) rotate(' +
        (Math.cos(angle) * 8 - 4) + 'deg) scale(' + zoom + ')';
      item.style.opacity = 0.08 + 0.92 * smooth(0.05, 0.75, front);
      item.style.zIndex = front > 0.5 ? 10 + Math.round(front * 10) : 0;
      item.style.filter = 'grayscale(' + (1 - smooth(0.3, 1, front)) + ')';
    });
    if (visible && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      requestAnimationFrame(frame);
    }
  }

  new IntersectionObserver(function (entries) {
    const wasVisible = visible;
    visible = entries[0].isIntersecting;
    if (visible && !wasVisible) requestAnimationFrame(frame);
  }).observe(box);

  measure();
  requestAnimationFrame(frame);
  window.addEventListener('resize', measure);
})();
