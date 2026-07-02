document.addEventListener('DOMContentLoaded', () => {
  // 1. Mouse Tracking for Background Grid & Glow
  const body = document.body;
  const bgEngine = document.querySelector('.bg-engine');

  // Create cursor follower element
  const follower = document.createElement('div');
  follower.className = 'cursor-follower';
  body.appendChild(follower);

  window.addEventListener('mousemove', (e) => {
    // Update Grid Mask
    const x = (e.clientX / window.innerWidth) * 100;
    const y = (e.clientY / window.innerHeight) * 100;
    bgEngine.style.setProperty('--mouse-x', `${x}%`);
    bgEngine.style.setProperty('--mouse-y', `${y}%`);

    // Update Follower Glow
    follower.style.left = e.clientX + 'px';
    follower.style.top = e.clientY + 'px';
  });

  // 2. Intersection Observer for Scroll Reveals (Smoother than jQuery)
  const revealOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        // If it's a child of a staggered group, you could add delay here
      }
    });
  }, revealOptions);

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // 3. Simple Terminal Typing Effect
  const terminalText = document.querySelector('.terminal-type');
  if (terminalText) {
    const text = terminalText.innerText;
    terminalText.innerText = '';
    let i = 0;
    function type() {
      if (i < text.length) {
        terminalText.innerHTML += text.charAt(i);
        i++;
        setTimeout(type, 20);
      }
    }
    // Start typing when terminal is in view
    const termObserver = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        type();
        termObserver.disconnect();
      }
    });
    termObserver.observe(document.querySelector('.terminal-body'));
  }
});