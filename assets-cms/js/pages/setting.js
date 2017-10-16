// List //
$(function () {

      // Tooltips
      // ------------------------------

      // Custom color
      $('[data-popup=tooltip-auto-feed]').tooltip({
        template: '<div class="tooltip"><div class="bg-auto-feed"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div></div>'
      });


      // Switchery
      // ------------------------------

      // Initialize multiple switches
      if (Array.prototype.forEach) {
          var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery-auto-feed'));
          elems.forEach(function(html) {
              var switchery = new Switchery(html, {
                color             : '#4CAF50',
                secondaryColor    : '#b2b2b2'
              });
          });
      }
      else {
          var elems = document.querySelectorAll('.switchery-auto-feed');
          for (var i = 0; i < elems.length; i++) {
              var switchery = new Switchery(elems[i]);
          }
      }

      if (Array.prototype.forEach) {
          var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery-auto-publish'));
          elems.forEach(function(html) {
              var switchery = new Switchery(html, {
                color             : '#4CAF50',
                secondaryColor    : '#b2b2b2'
              });
          });
      }
      else {
          var elems = document.querySelectorAll('.switchery-auto-publish');
          for (var i = 0; i < elems.length; i++) {
              var switchery = new Switchery(elems[i]);
          }
      }

      if (Array.prototype.forEach) {
          var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery-navigation-head'));
          elems.forEach(function(html) {
              var switchery = new Switchery(html, {
                color             : '#3374B6',
                secondaryColor    : '#b2b2b2'
              });
          });
      }
      else {
          var elems = document.querySelectorAll('.switchery-navigation-head');
          for (var i = 0; i < elems.length; i++) {
              var switchery = new Switchery(elems[i]);
          }
      }

      if (Array.prototype.forEach) {
          var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery-navigation'));
          elems.forEach(function(html) {
              var switchery = new Switchery(html, {
                color             : '#4CAF50',
                secondaryColor    : '#b2b2b2'
              });
          });
      }
      else {
          var elems = document.querySelectorAll('.switchery-navigation');
          for (var i = 0; i < elems.length; i++) {
              var switchery = new Switchery(elems[i]);
          }
      }



});
