<script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('backend/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset('backend/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('backend/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('backend/assets/js/dashboard/dash_1.js')}}"></script>
<script src="{{asset('backend/assets/js/dashboard/dash_2.js')}}"></script>

 <!-- BEGIN PAGE LEVEL SCRIPTS -->
 <script src="{{asset('backend/plugins/table/datatable/datatables.js')}}"></script>
 <script>
     $('#zero-config').DataTable({
         "oLanguage": {
             "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
             "sInfo": "Showing page _PAGE_ of _PAGES_",
             "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
             "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
         },
         "stripeClasses": [],
         "lengthMenu": [4, 10, 20, 50],
         "pageLength": 4
     });
 </script>

<script src="{{asset('backend/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('backend/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('backend/plugins/sweetalerts/custom-sweetalert.js')}}"></script>
<script>
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()
</script>

 <!-- END PAGE LEVEL SCRIPTS -->
