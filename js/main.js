$(function () {
  // Scroll-reveal
  const revealEls = $('.reveal');
  function checkReveal() {
    const windowBottom = $(window).scrollTop() + $(window).height();
    revealEls.each(function () {
      const el = $(this);
      if (!el.hasClass('in-view')) {
        const elTop = el.offset().top + 60;
        if (windowBottom > elTop) {
          el.addClass('in-view');
        }
      }
    });
  }
  checkReveal();
  $(window).on('scroll resize', checkReveal);

  // Smooth nav highlight not required; simple anchor scroll already via CSS scroll-behavior
});
