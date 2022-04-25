// lazyload config
var MODULE_CONFIG = {
    chat:           [
                      '../libs/list.js/dist/list.js',
                      '../libs/notie/dist/notie.min.js',
                      '../assets/js/plugins/notie.js',
                      '../assets/js/app/chat.js'
                    ],
    mail:           [
                      '../libs/list.js/dist/list.js',
                      '../libs/notie/dist/notie.min.js',
                      '../assets/js/plugins/notie.js',
                      '../assets/js/app/mail.js'
                    ],
    user:           [
                      '../libs/list.js/dist/list.js',
                      '../libs/notie/dist/notie.min.js',
                      '../assets/js/plugins/notie.js',
                      '../assets/js/app/user.js'
                    ],
    search:         [
                      '../libs/list.js/dist/list.js',
                      '../assets/js/app/search.js'
                    ],
    invoice:        [
                      '../libs/list.js/dist/list.js',
                      '../libs/notie/dist/notie.min.js',
                      '../assets/js/app/invoice.js'
                    ],
    musicapp:       [
                      '../libs/list.js/dist/list.js',
                      '../assets/js/plugins/musicapp.js'
                    ],
    fullscreen:     [
                      '../libs/jquery-fullscreen-plugin/jquery.fullscreen-min.js',
                      '../assets/js/plugins/fullscreen.js'
                    ],
    jscroll:        [
                      '../libs/jscroll/dist/jquery.jscroll.min.js'
                    ],
    countTo:        [
                      '../libs/jquery-countto/jquery.countTo.js'
                    ],
    stick_in_parent:[
                      '../libs/sticky-kit/dist/sticky-kit.min.js'
                    ],
    stellar:        [
                      '../libs/jquery.stellar/jquery.stellar.min.js',
                      '../assets/js/plugins/stellar.js'
                    ],
    masonry:        [
                      '../libs/masonry-layout/dist/masonry.pkgd.min.js'
                    ],
    slick:          [
                      '../libs/slick-carousel/slick/slick.css',
                      '../libs/slick-carousel/slick/slick-theme.css',
                      '../libs/slick-carousel/slick/slick.min.js'
                    ],
    sort:           [
                      '../libs/html5sortable/dist/html.sortable.min.js',
                      '../assets/js/plugins/sort.js'
                    ],
    chartjs:        [
                      '../libs/moment/min/moment-with-locales.min.js',
                      '../libs/chart.js/dist/Chart.min.js',
                      '../libs/chart.js/dist/chart.ext.js',
                      '../assets/js/plugins/chartjs.js'
                    ],
    chartist:       [
                      '../libs/chartist/dist/chartist.min.css',
                      '../libs/chartist/dist/chartist.min.js',
                      '../libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js',
                      '../libs/chartist/dist/chartist.ext.js',
                      '../assets/js/plugins/chartist.js'
                    ],
    dataTable:      [
                      '../libs/datatables/media/js/jquery.dataTables.min.js',
                      '../libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                      '../libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
                      '../assets/js/plugins/datatable.js'
                    ],
    bootstrapTable: [
                      '../libs/bootstrap-table/dist/bootstrap-table.min.js',
                      '../libs/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js',
                      '../libs/bootstrap-table/dist/extensions/mobile/bootstrap-table-mobile.min.js',
                      '../assets/js/plugins/tableExport.min.js',
                      '../assets/js/plugins/bootstrap-table.js'
                    ],
    bootstrapWizard:[
                      '../libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
                    ],
    dropzone:       [
                      '../libs/dropzone/dist/min/dropzone.min.js',
                      '../libs/dropzone/dist/min/dropzone.min.css'
                    ],
    typeahead:      [
                      '../libs/typeahead.js/dist/typeahead.bundle.min.js',
                      '../assets/js/plugins/typeahead.js'
                    ],
    datepicker:     [
                      "../libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
                      "../libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
                    ],
    daterangepicker:[
                      "../libs/daterangepicker/daterangepicker.css",
                      '../libs/moment/min/moment-with-locales.min.js',
                      "../libs/daterangepicker/daterangepicker.js"
                    ],
    fullCalendar:   [
                      '../libs/moment/min/moment-with-locales.min.js',
                      '../libs/fullcalendar/dist/fullcalendar.min.js',
                      '../libs/fullcalendar/dist/fullcalendar.min.css',
                      '../libs/notie/dist/notie.min.js',
                      '../assets/js/plugins/notie.js',
                      '../assets/js/app/calendar.js'
                    ],
    parsley:        [
                      '../libs/parsleyjs/dist/parsley.min.js'
                    ],
    select2:        [
                      '../libs/select2/dist/css/select2.min.css',
                      '../libs/select2/dist/js/select2.min.js',
                      '../assets/js/plugins/select2.js'
                    ],
    summernote:     [
                      '../libs/summernote/dist/summernote.css',
                      '../libs/summernote/dist/summernote-bs4.css',
                      '../libs/summernote/dist/summernote.min.js',
                      '../libs/summernote/dist/summernote-bs4.min.js'
                    ],
    vectorMap:      [
                      '../libs/jqvmap/dist/jqvmap.min.css',
                      '../libs/jqvmap/dist/jquery.vmap.js',
                      '../libs/jqvmap/dist/maps/jquery.vmap.world.js',
                      '../libs/jqvmap/dist/maps/jquery.vmap.usa.js',
                      '../libs/jqvmap/dist/maps/jquery.vmap.france.js',
                      '../assets/js/plugins/jqvmap.js'
                    ],
    plyr:           [
                      '../libs/plyrist/src/plyrist.css',
                      '../libs/plyr/dist/plyr.polyfilled.min.js',
                      '../libs/wavesurfer.js/dist/wavesurfer.min.js',
                      '../libs/plyrist/src/plyrist.js',
                      '../assets/js/plugins/plyr.js'
                    ]
  };

var MODULE_OPTION_CONFIG = {
  parsley: {
    errorClass: 'is-invalid',
    successClass: 'is-valid',
    errorsWrapper: '<ul class="list-unstyled text-sm mt-1 text-muted"></ul>'
  }
}
