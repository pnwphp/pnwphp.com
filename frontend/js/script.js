$( document ).ready(function() {
  var $header1 = $('.head-banner-content h1'),
    $header2 = $('.head-banner-content h2'),
    wHeight  = $(window).height();

  $(window).on('resize', function(){
    wHeight = $(window).height();
  });

  /**
   * requestAnimationFrame Shim
   */
  window.requestAnimFrame = (function()
  {
    return  window.requestAnimationFrame       ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame    ||
      function( callback ){
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  /**
   * Scroller
   */
  function Scroller()
  {
    this.latestKnownScrollY = 0;
    this.ticking            = false;
  }

  Scroller.prototype = {
    /**
     * Initialize
     */
    init: function() {
      window.addEventListener('scroll', this.onScroll.bind(this), false);
    },

    /**
     * Capture Scroll
     */
    onScroll: function() {
      this.latestKnownScrollY = window.scrollY;
      this.requestTick();
    },

    /**
     * Request a Tick
     */
    requestTick: function() {
      if( !this.ticking ) {
        window.requestAnimFrame(this.update.bind(this));
      }
      this.ticking = true;
    },

    /**
     * Update.
     */
    update: function() {
      var currentScrollY = this.latestKnownScrollY;
      this.ticking       = false;

      /**
       * Do The Dirty Work Here
       */
      var slowScroll = currentScrollY / 4;

      $header1.css({
        'transform'         : 'translateY(+' + slowScroll + 'px)',
        '-moz-transform'    : 'translateY(+' + slowScroll + 'px)',
        '-webkit-transform' : 'translateY(+' + slowScroll + 'px)'
      });

      $header2.css({
        'transform'         : 'translateY(+' + slowScroll/2 + 'px)',
        '-moz-transform'    : 'translateY(+' + slowScroll/2 + 'px)',
        '-webkit-transform' : 'translateY(+' + slowScroll/2 + 'px)'
      });

    }
  };

  /**
   * Attach!
   */
  var scroller = new Scroller();
  scroller.init();


  var BLUR_RADIUS = 40;
  var sourceImages = [];

  $('.profile-card img').each(function(){
    sourceImages.push($(this).attr('src'));
  });

  var drawBlur = function(canvas, image) {
    var w = canvas.width;
    var h = canvas.height;
    var canvasContext = canvas.getContext('2d');
    canvasContext.drawImage(image, 0, 0, w, h);
    stackBlurCanvasRGBA(canvas, 0, 0, w, h, BLUR_RADIUS);
  };

  $('.profile-card canvas').each(function(index){
    var canvas = $(this)[0];

    var image = new Image();
    image.src = sourceImages[index];

    image.onload = function() {
      drawBlur(canvas, image);
    }
  });
});