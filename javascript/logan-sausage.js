(function() {
  'use strict';

  setTimeout(function() {
  //  setMainViewHeight();
  }, 10);

  function setMainViewHeight() {
    var mainView = document.querySelector('.main-view'),
        top = mainView.offsetTop;

    var height = window.innerHeight - top;
    mainView.style.height = height + 'px';
  }
})();
