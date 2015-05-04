(function() {
  'use strict';

  withTab();

  function withTab() {
    var mainView = document.querySelector('.main-view');
    if (mainView && !mainView.classList.contains('with-tab')) { return; }

    mainView.classList.remove('hide');
    mainView.style.paddingTop = window.innerHeight + 'px';
    tabEvent();
  }

  function tabEvent() {
    var tab = document.querySelector('.view-more-tab');
    var mainNav = document.querySelector('.main-nav');

    tab.addEventListener('click', function(e) {
      e.preventDefault();

      var options = {
        updateURL: false,
        offset: mainNav.offsetTop + mainNav.offsetHeight
      };
      smoothScroll.animateScroll(null, e.target.hash, options);
    });
  }

})();
