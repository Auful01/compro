  <!-- body-wrapper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
    <script type='text/javascript' src='{{asset('js/jquery.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery-migrate.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/scripts.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/superfish.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/hoverIntent.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/modernizr.custom.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.dlmenu.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.easing.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.fancybox.pack.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/helpers/jquery.fancybox-media.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/helpers/jquery.fancybox-thumbs.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.flexslider.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.isotope.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/gdlr-script.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.transit.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/gdlr-portfolio-script.js')}}'></script>
    <script>var ms_grabbing_curosr = 'images/grabbing.cur', ms_grab_curosr = 'images/grab.cur';</script>
    <script type="text/javascript">
        (function (url) {
            if (/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)) { return; }
            var addEvent = function (evt, handler) {
                if (window.addEventListener) {
                    document.addEventListener(evt, handler, false);
                } else if (window.attachEvent) {
                    document.attachEvent('on' + evt, handler);
                }
            };
            var removeEvent = function (evt, handler) {
                if (window.removeEventListener) {
                    document.removeEventListener(evt, handler, false);
                } else if (window.detachEvent) {
                    document.detachEvent('on' + evt, handler);
                }
            };
            var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
            var logHuman = function () {
                if (window.wfLogHumanRan) { return; }
                window.wfLogHumanRan = true;
                var wfscr = document.createElement('script');
                wfscr.type = 'text/javascript';
                wfscr.async = true;
                wfscr.src = url + '&r=' + Math.random();
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(wfscr);
                for (var i = 0; i < evts.length; i++) {
                    removeEvent(evts[i], logHuman);
                }
            };
            for (var i = 0; i < evts.length; i++) {
                addEvent(evts[i], logHuman);
            }
        });
    </script>
    <script>
        (window.MSReady = window.MSReady || []).push(function ($) {

            "use strict";
            var masterslider_8b8a = new MasterSlider();

            // slider controls
            masterslider_8b8a.control('bullets', {
                autohide: false,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 6,
                margin: 35
            });
            // slider setup
            masterslider_8b8a.setup("MS5bab48b0b8b8a", {
                width: 1140,
                height: 740,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: true,
                swipe: false,
                mouse: false,
                keyboard: true,
                layout: "fullwidth",
                wheel: false,
                autoplay: true,
                instantStartLayers: false,
                mobileBGVideo: false,
                loop: true,
                shuffle: false,
                preload: 0,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: true,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 20,
                dir: "h",
                view: "basic"
            });

            window.masterslider_instances = window.masterslider_instances || [];
            window.masterslider_instances.push(masterslider_8b8a);
        });
    </script>
    <script type='text/javascript' src='{{asset('assets/js/masterslider.min.js')}}'></script>
    {{-- <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        </script> --}}
