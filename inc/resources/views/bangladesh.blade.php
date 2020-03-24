@extends('layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      
      <div class="row">
        <div class="offset-md-5 col-lg-3 col-6">
          <!-- small box -->
          <div class="p-3 mb-2 bg-danger text-white">Data Updated From IEDCR (Bangladesh)</div>
        </div>
      </div>
      <div class="row">
        <div class="offset-md-5 col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{!! $todays_div_bd !!}</h3>
  
              <p>Total COVID-19 Tests</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="offset-md-2 col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{!! $todays_div_bd_24 !!}</h3>
  
              <p>Tests in Last 24 Hours</p>
            </div>
          </div>
        </div>
        <div class="offset-md-3 col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-light">
            <div class="inner">
              <h3>{!! $todays_div_bd_confirm !!}</h3>
  
              <p>Confirmed COVID-19 Cases</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="offset-md-5 col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{!! $todays_div_bd_case_24 !!}</h3>
  
              <p>Cases in Last 24 Hours</p>
            </div>
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="offset-md-2 col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>{!! $todays_div_bd_rec !!}</h3>
  
              <p>Recovered</p>
            </div>
          </div>
        </div>
        <div class="offset-md-3 col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-dark">
            <div class="inner">
              <h3>{!! $todays_div_bd_death !!}</h3>
  
              <p>Death Cases</p>
            </div>
            
          </div>
        </div>
      </div>
     
    </div><!-- /.container-fluid -->
  </section>
@endsection