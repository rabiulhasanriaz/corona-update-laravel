@extends('layout.master')
@section('content')
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    
    <div class="row">
      <div class="offset-md-5 col-lg-3 col-6">
        <!-- small box -->
        <div class="p-3 mb-2 bg-danger text-white">Data Updated From worldometer</div>
      </div>
    </div>
    <div class="row">
      <div class="offset-md-5 col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{!! $todays_div_active !!}</h3>

            <p>Active Cases</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="offset-md-2 col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{!! $todays_span_mild !!}</h3>

            <p>in Mild Condition</p>
          </div>
        </div>
      </div>
      <div class="offset-md-3 col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-light">
          <div class="inner">
            <h3 style="color: white;">{!! $todays_span_serious !!}</h3>

            <p>Serious or Critical</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="offset-md-5 col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{!! $todays_div_close !!}</h3>

            <p>Closed Cases</p>
          </div>
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="offset-md-2 col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>{!! $todays_span_rec !!}</h3>

            <p>Recovered / Discharged</p>
          </div>
        </div>
      </div>
      <div class="offset-md-3 col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-dark">
          <div class="inner">
            <h3>{!! $todays_span_death !!}</h3>

            <p>Deaths</p>
          </div>
          
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection