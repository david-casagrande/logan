(function() {
  'use strict';

  withTab();
  productNav();

  // checkScrollTimer();

  function checkScrollTimer() {
    setTimeout(function() {
      checkScrollPosition();
      checkScrollTimer();
    }, 300);
  }

  function checkScrollPosition() {
    var scrollTop = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
    var scrolledToBottom = (scrollTop + window.innerHeight) >= document.body.scrollHeight;
  }

  function withTab() {
    var mainView = document.querySelector('.main-view');
    if (mainView && !mainView.classList.contains('with-tab')) { return; }
    var adminOffset = document.querySelector('body').classList.contains('logged-in') ? 32 : 0;

    mainView.classList.remove('hide');
    mainView.style.paddingTop = (window.innerHeight - adminOffset) + 'px';
    tabEvent(adminOffset);
  }

  function tabEvent(adminOffset) {
    var tab = document.querySelector('.view-more-tab');
    var mainNav = document.querySelector('.main-nav');

    tab.addEventListener('click', function(e) {
      e.preventDefault();

      var options = {
        updateURL: false,
        offset: mainNav.offsetTop + mainNav.offsetHeight - adminOffset
      };
      smoothScroll.animateScroll(null, e.target.hash, options);
    });
  }

  function productNav() {
    var navItems = document.querySelectorAll('.products-nav a');
    console.log(navItems.length);
    for(var x = 0; x < navItems.length; x++) {
      navItems[x].addEventListener('click', function(e) {
        e.preventDefault();
        var sibling = this.nextElementSibling;
        if(!sibling) { return; }
        sibling.classList.toggle('open');

        var parent = this.parentNode;
        parent.classList.toggle('current-menu-item');
      });
    }
  }

})();
