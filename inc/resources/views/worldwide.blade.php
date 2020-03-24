@extends('layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title text-danger">Data Updated From worldometer</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                {!! $todays_table !!}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection
@section('custom_style')
    <link rel="stylesheet" href="{{ asset('assets/datatable/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatable/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatable/css/rowReorder.dataTables.min.css') }}">
@endsection
@section('custom_script')
  <script src="{{ asset('assets/datatable/js/jquery-3.3.1.js') }}"></script>
  <script src="{{ asset('assets/datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/js/dataTables.rowReorder.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/js/dataTables.responsive.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      let app = new Vue({
        el: '#data',
        data: {
          total: {!! json_encode($todays_table) !!}
        }
      });
        $(document).ready(function() {
            var table = $('table').DataTable( {
                columnDefs: [
                    { responsivePriority: 1, targets: 0 },
                    { responsivePriority: 2, targets: 1 },
                    { responsivePriority: 3, targets: 3 },
                    { responsivePriority: 4, targets: 4 }
                ],
                responsive: true
            } );
        } );
    </script>
@endsection