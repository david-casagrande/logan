(function() {
  'use strict';

  withTab();
  productNav();
  navToggle();
  disableLinksForSingleProduct();
  backNextNavForSingleProduct();

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
    var navItems = document.querySelectorAll('.products-nav > ul > li > a');
    for(var x = 0; x < navItems.length; x++) {
      navItems[x].addEventListener('click', function(e) {
        productNavClick(e);
      });
    }

    var subNavItems = document.querySelectorAll('.products-nav .sub-menu a');
    for(var x = 0; x < subNavItems.length; x++) {
      subNavItems[x].addEventListener('click', function(e) {
        e.preventDefault();
      });
    }
  }

  function productNavClick(e) {
    if (window.innerWidth <= 960) { return; } //960 is mobile breakpoint in css
    e.preventDefault();
    var target = e.target;
    var parent = target.parentNode;
    var img = document.getElementById('product-image');
    var currentClassName = 'current-menu-item';
    var image;

    if(parent.classList.contains(currentClassName)) {
      parent.classList.remove(currentClassName);
      image = LOGAN_IMAGES['default'];
    } else {
      closeProductNavItems();
      parent.classList.add(currentClassName);
      image = LOGAN_IMAGES[e.target.href];
    }

    img.setAttribute('src', image);
  }

  function closeProductNavItems() {
    var navItems = document.querySelectorAll('.products-nav > ul > li');
    for(var x = 0; x < navItems.length; x++) {
      navItems[x].classList.remove('current-menu-item');
    }
  }

  function navToggle() {
    var navToggle = document.querySelector('.nav-toggle');
    var nav = document.querySelector('.main-nav');

    navToggle.addEventListener('click', function mainNavToggle(e) {
      e.preventDefault();
      navToggle.classList.toggle('active');
      nav.classList.toggle('active');
    });
  }

  function disableLinksForSingleProduct() {
    var productLinks = document.querySelectorAll('.sub-nav.single a');
    for(var x = 0; x < productLinks.length; x++) {
      productLinks[x].addEventListener('click', function(e) {
        e.preventDefault();
      });
    }
  }

  function backNextNavForSingleProduct() {
    var current = document.querySelector('.sub-nav.single > li.current-menu-item > a');
    var back = document.querySelector('.products-back');
    var next = document.querySelector('.products-next');

    _setLinkForSingleProductNav(current, back, 'previousElementSibling');
    _setLinkForSingleProductNav(current, next, 'nextElementSibling');
  }

  function _setLinkForSingleProductNav(current, el, findSibling) {
    if(!current || !el) { return; }
    var parent = current.parentNode;

    if(!parent) { return; }
    var sibling = parent[findSibling];

    if(!sibling) { return; }
    el.classList.add('visible');

    var a = sibling.querySelector('a');
    if(!a) { return; }

    var href = a.getAttribute('href');
    el.setAttribute('href', href);
  }

})();
