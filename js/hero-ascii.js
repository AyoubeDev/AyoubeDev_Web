(function () {
  const data = window.HERO_ASCII;
  const image = document.querySelector('.hero-portrait');
  const canvas = document.querySelector('.hero-ascii-canvas');
  if (!data || !image || !canvas) return;

  const context = canvas.getContext('2d');
  const radius = 68;
  const cell = 5;
  let pointer = null;
  let frame = 0;
  let view = null;

  function glyphAt(x, y) {
    const column = Math.floor((view.left + x / view.scale) / data.width * data.cols);
    const row = Math.floor((view.top + y / view.scale) / data.height * data.rows);
    const line = data.lines[row];
    const glyph = line && line[column];
    return glyph && glyph !== ' ' ? glyph : null;
  }

  function render() {
    frame = 0;
    if (!view || !pointer) return;
    context.clearRect(0, 0, view.width, view.height);
    context.font = '7px Consolas, Menlo, monospace';
    context.textBaseline = 'top';
    context.shadowColor = 'rgba(0, 0, 0, 0.85)';
    context.shadowBlur = 2;
    const startX = Math.floor((pointer.x - radius) / cell) * cell;
    const startY = Math.floor((pointer.y - radius) / cell) * cell;

    for (let y = startY; y < pointer.y + radius; y += cell) {
      for (let x = startX; x < pointer.x + radius; x += cell) {
        if (x < 0 || y < 0 || x >= view.width || y >= view.height) continue;
        const distance = Math.hypot(x + cell / 2 - pointer.x, y + cell / 2 - pointer.y);
        if (distance >= radius) continue;
        const glyph = glyphAt(x + cell / 2, y + cell / 2);
        if (!glyph) continue;
        const fade = Math.min(1, (radius - distance) / 20);
        context.shadowColor = 'transparent';
        context.globalAlpha = fade * 0.94;
        context.fillStyle = '#000';
        context.fillRect(x, y, cell, cell);
        context.shadowColor = 'rgba(0, 0, 0, 0.85)';
        context.globalAlpha = fade * fade * (3 - 2 * fade);
        context.fillStyle = '#f2f2f2';
        context.fillText(glyph, x, y);
      }
    }
    context.globalAlpha = 1;
  }

  function prepare() {
    const bounds = canvas.getBoundingClientRect();
    if (!bounds.width || !bounds.height) return;
    const ratio = window.devicePixelRatio || 1;
    canvas.width = Math.round(bounds.width * ratio);
    canvas.height = Math.round(bounds.height * ratio);
    context.setTransform(ratio, 0, 0, ratio, 0, 0);
    const scale = Math.max(bounds.width / data.width, bounds.height / data.height);
    view = {
      width: bounds.width,
      height: bounds.height,
      scale: scale,
      left: (data.width - bounds.width / scale) / 2,
      top: data.height - bounds.height / scale
    };
    if (pointer) render();
  }

  function clearEffect() {
    pointer = null;
    image.classList.remove('ascii-active');
    context.clearRect(0, 0, canvas.width, canvas.height);
  }

  window.addEventListener('mousemove', function (event) {
    const bounds = canvas.getBoundingClientRect();
    if (event.clientX < bounds.left || event.clientX > bounds.right ||
        event.clientY < bounds.top || event.clientY > bounds.bottom) {
      if (pointer) clearEffect();
      return;
    }
    if (!view) prepare();
    pointer = { x: event.clientX - bounds.left, y: event.clientY - bounds.top };
    image.style.setProperty('--ascii-x', pointer.x + 'px');
    image.style.setProperty('--ascii-y', pointer.y + 'px');
    image.classList.add('ascii-active');
    if (!frame) frame = window.requestAnimationFrame(render);
  });
  window.addEventListener('blur', clearEffect);
  window.addEventListener('resize', prepare);
  prepare();
})();
