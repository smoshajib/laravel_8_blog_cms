  <!-- Mainly scripts -->
  <script src="{{asset('backend/js/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset('backend/js/popper.min.js')}}"></script>
  <script src="{{asset('backend/js/bootstrap.js')}}"></script>
  <script src="{{asset('backend/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
  <script src="{{asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>


{{-- data-table --}}
<script src="{{asset('backend/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

 
  <!-- Custom and plugin javascript -->
  <script src="{{asset('backend/js/inspinia.js')}}"></script>
  <script src="{{asset('backend/js/plugins/pace/pace.min.js')}}"></script>

  <!-- jQuery UI -->
  <script src="{{asset('backend/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

 
  <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

  </script>
