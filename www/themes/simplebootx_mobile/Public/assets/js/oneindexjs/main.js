(function () {

  var bv = new Bideo();
  bv.init({
    // Video element
    videoEl: document.querySelector('#video_background_video'),

    // Container element
    container: document.querySelector('#video_body'),

    // Resize
    resize: true,

    // autoplay: false,

    isMobile: window.matchMedia('(max-width: 768px)').matches,

    playButton: document.querySelector('#video_play'),
    pauseButton: document.querySelector('#video_pause'),

    // Array of objects containing the src and type
    // of different video formats to add
    src: [
      {				
        src: 'themes/simplebootx/Public/assets/js/video/ahold.mp4',
        type: 'video/mp4'
      },
      {
        src: 'themes/simplebootx/Public/assets/js/video/ahold.webm',
        type: 'video/webm;codecs="vp8, vorbis"'
      }
    ],

    // What to do once video loads (initial frame)
    onLoad: function () {
      document.querySelector('#video_cover').style.display = 'none';
    }
  });
}());
