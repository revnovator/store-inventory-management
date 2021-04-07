@extends('layouts.master')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stocks</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Stock List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
       <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Stock List</h5></br>
                            <!-- <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"> </i> Add Category </a><br><br> -->

                            <table class="table table-bordered datatable">
                                <thead>
                                <tr>
                                    <td>#SL</td>
                                    <td>Date</td>
                                    <td>Product</td>
                                    <td>Size</td>
                                    <td>Quantity</td>                                                                        
                                    <td>Status</td>
                                </tr>
                                </thead>
                                <tbody>
                                @if($stocks)
                                    @foreach($stocks as $key => $stock)
                                        <tr>
                                            <td>{{ ++$key}}</td>
                                            <td>{{ $stock->date ?? '' }}</td>
                                            <td>{{ $stock->product->name ?? '' }}</td>
                                            <td>{{ $stock->size->size ?? '' }}</td>                                                                                        
                                            <td>{{ $stock->quantity ?? '' }}</td>                                             
                                            <td>{{ $stock->status ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->            
                </div>
            </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>    
@endsection