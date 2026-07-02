$(function () {
  // 1. Mouse Tracking for Background Grid & Glow
  const $bgEngine = $('.bg-engine');

  // Create cursor follower element using jQuery
  const $follower = $('<div class="cursor-follower"></div>').appendTo('body');

  $(window).on('mousemove', function (e) {
    // Calculate percentages
    const x = (e.clientX / $(window).width()) * 100;
    const y = (e.clientY / $(window).height()) * 100;

    // Update Grid Mask CSS Variables
    $bgEngine.css({
      '--mouse-x': x + '%',
      '--mouse-y': y + '%'
    });

    // Update Follower Glow Position
    $follower.css({
      left: e.clientX + 'px',
      top: e.clientY + 'px'
    });
  });

  // 2. Intersection Observer for Scroll Reveals
  // Note: We use the native IntersectionObserver but control it with jQuery selection
  const revealOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
  };

  const observer = new IntersectionObserver((entries) => {
    $.each(entries, function (i, entry) {
      if (entry.isIntersecting) {
        $(entry.target).addClass('in-view');
        // Once it is revealed, we can stop observing it
        observer.unobserve(entry.target);
      }
    });
  }, revealOptions);

  // Observe each .reveal element
  $('.reveal').each(function () {
    observer.observe(this);
  });

  // 3. Simple Terminal Typing Effect
  const $terminalText = $('.terminal-type');

  if ($terminalText.length) {
    const fullContent = $terminalText.text();
    $terminalText.empty(); // Clear existing text

    let charIndex = 0;

    function typeEffect() {
      if (charIndex < fullContent.length) {
        $terminalText.append(fullContent.charAt(charIndex));
        charIndex++;
        setTimeout(typeEffect, 20);
      }
    }

    // Start typing when the terminal container enters the viewport
    const termObserver = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        typeEffect();
        termObserver.disconnect(); // Only type once
      }
    });

    const $terminalBody = $('.terminal-body');
    if ($terminalBody.length) {
      termObserver.observe($terminalBody[0]);
    }
  }

  // 4. Extra Touch: Smooth Scroll for Nav Links
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    const target = this.hash;
    const $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top - 70 // Adjust for fixed header
    }, 800, 'swing');
  });
});