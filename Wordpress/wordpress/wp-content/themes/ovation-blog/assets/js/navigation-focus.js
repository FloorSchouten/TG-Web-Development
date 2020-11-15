var ovation_blog_Keyboard_loop = function (elem) {
  var ovation_blog_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var ovation_blog_firstTabbable = ovation_blog_tabbable.first();
  var ovation_blog_lastTabbable = ovation_blog_tabbable.last();
  /*set focus on first input*/
  ovation_blog_firstTabbable.focus();

  /*redirect last tab to first input*/
  ovation_blog_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
        e.preventDefault();
        ovation_blog_firstTabbable.focus();
    }
  });

  /*redirect first shift+tab to last input*/
  ovation_blog_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
        e.preventDefault();
        ovation_blog_lastTabbable.focus();
    }
  });

  /* allow escape key to close insiders div */
  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
        elem.hide();
    };
  });
};