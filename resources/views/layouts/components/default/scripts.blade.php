  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->
  <!-- JS Global Compulsory -->
  <script src="{{ asset('default') }}/assets\vendor\jquery\dist\jquery.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\jquery-migrate\dist\jquery-migrate.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\popper.js\dist\umd\popper.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\bootstrap\bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('default') }}/assets\vendor\hs-megamenu\src\hs.megamenu.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\svg-injector\dist\svg-injector.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\malihu-custom-scrollbar-plugin\jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\custombox\dist\custombox.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\custombox\dist\custombox.legacy.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\datatables\media\js\jquery.dataTables.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\bootstrap-select\dist\js\bootstrap-select.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\flatpickr\dist\flatpickr.min.js"></script>
  <script src="{{ asset('default') }}/assets\vendor\bootstrap-tagsinput\js\bootstrap-tagsinput.min.js"></script>

  <!-- JS Front -->
  <script src="{{ asset('default') }}/assets\js\hs.core.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.header.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.unfold.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.malihu-scrollbar.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.focus-state.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.datatables.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.selectpicker.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.modal-window.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.range-datepicker.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.svg-injector.js"></script>
  <script src="{{ asset('default') }}/assets\js\components\hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of HSMegaMenu component
      $('.js-breadcrumb-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-add-project-window', {
        autonomous: true
      });

      // initialization of datatables
      $.HSCore.components.HSDatatables.init('.js-datatable');

      // initialization of select picker
      $.HSCore.components.HSSelectPicker.init('.js-select');

      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
