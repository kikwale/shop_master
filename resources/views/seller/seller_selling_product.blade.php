

      @extends('layouts.seller')
      @section('content')
          <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
      
                     {{-- <!-- Info boxes -->
       <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-i elevation-1" style="background-color:#006699" ><i class="fas fa-users text-white"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Total O-level {{Session::get('owner_id')}} {{Session::get('shop_id')}}</span>
              <span class="info-box-number">
              3546
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg- elevation-1" style="background-color:#006699"><i class="fas fa-users text-white"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Total A-level</span>
              <span class="info-box-number">4354</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
    
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-in elevation-1" style="background-color:#006699"><i class="fas fa-users text-white"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Undergraduates</span>
              <span class="info-box-number">2242</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-inf elevation-1" style="background-color:#006699"><i class="fas fa-users text-white"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Graduates</span>
              <span class="info-box-number">443</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row --> --}}


              <div class="row mb-2">
                <div class="col-sm-6">
               
                  <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
            
              @if (session('success'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Waoo!</strong> {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if (session('unsold') == "Sold")
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Ok !! </strong> Successfuly Product(s) Sold.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              @endif

              @if (session('sale_empty') == "empty")
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Ok !! </strong> No Product have been Sold
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              @endif

              @if (session('unsold1') == "Unsold")
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Ok !! </strong> Many Products You have sell than that Stored, You want to sell {{session('product_sold')}} Product(s) WHILE you have {{session('product_stored')}} Product(s)
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              @endif
                 
                {{-- @include('admin.include') --}}
                            @if(count((array)$data) > 0)
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="car">
                                          <div class="card-head">

                                             <div class="row">
                                               <div class="col-md-3">
                                                <div class="card card-outline card-primary">
                                                  <div class="card-header bg-" style="background-color: #fc8803">
                                                    <h3 class="card-title text-white">Today's Sales: </h3>
                                    
                                                    <div class="card-tools">
                                                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                      </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                  </div>
                                                  <!-- /.card-header -->
                                                  <div class="card-body">
                                                    <h3 class="text-info"> &nbsp; {{$daySales}} {{Session::get('money')}}</h3>
                                                    </div>
                                                  <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                               </div>
                                               <div class="col-md-3">
                                                  <div class="card card-outline card-primary">
                                                <div class="card-header" style="background-color: #fc8803">
                                                   <h3 class="card-title text-white">  Today's Profit   </h3>
                                  
                                                  <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                  <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                  <h3 class="text-info"> &nbsp; {{$dayProfit}} {{Session::get('money')}}</h3>
                                                  </div>
                                                <!-- /.card-body -->
                                              </div>
                                              <!-- /.card -->
                                            </div>
                                               <div class="col-md-3">
                                                <div class="card card-outline card-primary">
                                                  <div class="card-header bg-inf" style="background-color: #fc8803">
                                                    <h3 class="card-title text-white">Month Sales: </h3>
                                    
                                                    <div class="card-tools">
                                                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                      </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                  </div>
                                                  <!-- /.card-header -->
                                                  <div class="card-body">
                                                    <h3 class="text-info"> &nbsp; {{$month_sales}} {{Session::get('money')}}</h3>
                                                    </div>
                                                  <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                               </div>

                                               <div class="col-md-3">
                                                <div class="card card-outline card-primary">
                                                  <div class="card-header bg-inf" style="background-color: #fc8803">
                                                    <h3 class="card-title text-white">Month Profit: </h3>
                                    
                                                    <div class="card-tools">
                                                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                      </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                  </div>
                                                  <!-- /.card-header -->
                                                  <div class="card-body">
                                                    <h3 class="text-info"> &nbsp; {{$month_profit}} {{Session::get('money')}}</h3>
                                                    </div>
                                                  <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                               </div>

                                               
                                             </div>
                                            <div class="card-tools">
                                           
                                              {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                              </button>
                                              
                                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                              </button> --}}
                                            </div><br>
                                            <h5 class="card-title">Shelves &nbsp;  <a href="#" class="btn btn-info btn-sm">Barcode</a></h5>
                                          </div>
                                        
                                            <div class="card-bod">
                                              
                                              <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                  <th>Product Name</th>
                                                  <th>Product Category</th>
                                                  <th>unit</th>
                                                  <th>quantity</th>
                                                  <th>Total</th>
                                                  <th>purchased Price</th>
                                                  <th>Price for Sale</th>
                                                  <th>Expire Date</th>
                                                  <th>Location</th>
                                                  <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                              
                    {{-- Full texts	
                      
                id	name	owner_id	shop_id	category	unit	quantity	amount	purchased_price	sold_price	expire	created_at	updated_at	
                    --}}
                                          @foreach($data as $value)
                                      
                                        <tr>
                                          <td>{{$value->name}}</td>
                                          <td>{{$value->category}}</td>
                                          <td>{{$value->unit}}</td>
                                          <td>{{$value->quantity}}</td>
                                          @if ($value->category == "Jumla")
                                          <td>{{$value->total}}
                                          @if (session('unsold') == $value->id)
                                            <small class="text-danger"> <span class="right badge badge-danger">Error</span></small>
                                          @endif
                                          @if (session('sold') == $value->id)
                                            <small class="text-success"> <span class="right badge badge-success">Success</span></small>
                                          @endif
                                          </td>
                                          @else
                                          <td>{{$value->total}}{{$value->unit}}
                                                @if (session('unsold') == $value->id)
                                                <small class="text-danger"> <span class="right badge badge-danger">Error</span></small>
                                              @endif
                                              @if (session('sold') == $value->id)
                                                <small class="text-success"> <span class="right badge badge-success">Success</span></small>
                                              @endif
                                          </td>
                                          @endif
                                          <td>{{$value->purchased_price}}</td>
                                          <td>{{$value->sold_price}}</td>
                                          <td>{{$value->expire}}</td>
                                          <td>{{$value->location}}</td>
                                        
                                          <td>
                                              <a class="btn btn-info btn-sm" href="?id={{$value->id}}&&dhfjhdhgfjhgfjdhfhghguh@#gfdf$=5hj5hjg$3$$$$$#*^fg" data-toggle="modal" data-target="#staticBackdrop{{$value->id}}">
                                            
                                                  Sell
                                                  </a>
                                          </td>

                                          @if ($value->category == "Jumla")
                                                                
                                          
                                        <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop{{$value->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                      <h5 class="modal-title" id="staticBackdropLabel">Create User</h5>
                                                      <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <form method="POST" action="/jumlaForm">
                                                              @csrf

                                                            

                                                            <div class="form-group row">
                                                              <label for="total_quantity" class="col-md-4 col-form-label text-md-right"><sup class="text-danger">*</sup>{{ __('Total Goods Sold') }}</label>

                                                              <div class="col-md-6">
                                                                  <input id="total_quantity" type="number" class="form-control @error('total_quantity') is-invalid @enderror" name="total_quantity" value="{{ old('total_quantity') }}" required autocomplete="total_quantity" autofocus>

                                                                  <input id="owner_id" type="text" class="form-control @error('owner_id') is-invalid @enderror" name="owner_id" hidden value="{{ Session::get('owner_id') }}" required autocomplete="owner_id" autofocus>

                                                                  <input id="shop_id" type="text" class="form-control @error('shop_id') is-invalid @enderror" name="shop_id" hidden value="{{Session::get('shop_id') }}" required autocomplete="shop_id" autofocus>

                                                                  @error('total_quantity')
                                                                      <span class="invalid-feedback" role="alert">
                                                                          <strong>{{ $message }}</strong>
                                                                      </span>
                                                                  @enderror
                                                              </div>
                                                          </div>

                                                            <div class="form-group row">
                                                              <label for="discount" class="col-md-4 col-form-label text-md-right"><sup></sup>{{ __('Discount') }}</label>

                                                              <div class="col-md-6">
                                                                  <input id="discount" type="number" placeholder="Option" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}" autocomplete="discount" autofocus>
                                                                  <input id="product_id" type="text" class="form-control @error('product_id') is-invalid @enderror" name="product_id" value="{{ $value->id }}" hidden required autocomplete="product_id" autofocus>
                                                              
                                                                  @error('discount')
                                                                      <span class="invalid-feedback" role="alert">
                                                                          <strong>{{ $message }}</strong>
                                                                      </span>
                                                                  @enderror
                                                              </div>
                                                          </div>

                                                        

                                                              {{-- <div class="form-group row">
                                                                  <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Select Role') }}</label>

                                                                  <div class="col-md-6">
                                                                      <select id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                                                          <option value=""></option>
                                                                          <option value="Admin">Admin</option>
                                                                          <option value="Farmer">Farmer</option>
                                                                          <option value="Trader">Trader</option>
                                                                      </select>
                                                                      @error('role')
                                                                          <span class="invalid-feedback" role="alert">
                                                                              <strong>{{ $message }}</strong>
                                                                          </span>
                                                                      @enderror
                                                                  </div>
                                                              </div> --}}

                                                              <div class="form-group row mb-0">
                                                                  <div class="col-md-6 offset-md-4">
                                                                      <button type="submit" class="btn btn-primary">
                                                                          {{ __('Sell') }}
                                                                      </button>
                                                                  </div>
                                                              </div>
                                                          </form>
                                                      </div>
                                                      <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      </div>
                                                  </div>


                                                  </div>
                                                </div>


                                 @else
                                        
                          
                                                            <!-- Modal -->
                                                      <div class="modal fade" id="staticBackdrop{{$value->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Create User</h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST" action="/rejarejaForm">
                                                                    @csrf

                                                                    <div class="form-group row">
                                                                      <label for="total_quantity" class="col-md-4 col-form-label text-md-right"><sup class="text-danger"></sup>{{ __('Total Quantity Sold') }}</label>
                                          
                                                                      <div class="col-md-6">
                                                                          <input id="total_quantity" type="number" class="form-control @error('total_quantity') is-invalid @enderror" name="total_quantity" value="{{ old('total_quantity') }}" autocomplete="total_quantity" autofocus>
                                                                          
                                                                          <input id="product_id" type="text" class="form-control @error('product_id') is-invalid @enderror" name="product_id" hidden value="{{ $value->id }}" required autocomplete="owner_id" autofocus>
                                                                          <input id="owner_id" type="text" class="form-control @error('owner_id') is-invalid @enderror" name="owner_id" hidden value="{{ Session::get('owner_id') }}" required autocomplete="owner_id" autofocus>
                                          
                                                                          <input id="shop_id" type="text" class="form-control @error('shop_id') is-invalid @enderror" name="shop_id" hidden value="{{Session::get('shop_id') }}" required autocomplete="shop_id" autofocus>
                                          
                                                                          @error('total_quantity')
                                                                              <span class="invalid-feedback" role="alert">
                                                                                  <strong>{{ $message }}</strong>
                                                                              </span>
                                                                          @enderror
                                                                      </div>
                                                                  </div>

                                                                  
                                      {{-- id	product_id	seller_id	owner_id	shop_id	day	month	year	quantity	amount	profit	created_at	updated_at	 --}}


                                                                    <div class="form-group row">
                                                                        <label for="subquantity" class="col-md-4 col-form-label text-md-right">{{ __('Sub-Quantity') }}</label>

                                                                        <div class="col-md-6">
                                                                            <select id="subquantity" type="text" class="form-control @error('subquantity') is-invalid @enderror" name="subquantity" value="{{ old('subquantity') }}"  autocomplete="subquantity" autofocus>
                                                                                <option value=""></option>
                                                                                <option value="0.5">1/2</option>
                                                                                <option value="0.25">1/4</option>
                                                                                <option value="0.75">3/4</option>
                                                                            </select>
                                                                            @error('subquantity')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group row">
                                                                      <label for="discount" class="col-md-4 col-form-label text-md-right"><sup class="text-danger"></sup>{{ __('discount') }}</label>
                                          
                                                                      <div class="col-md-6">
                                                                          <input id="discount" type="number" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}" placeholder="Option" autocomplete="discount" autofocus>
                                                                          
                                                                      
                                                                          @error('discount')
                                                                              <span class="invalid-feedback" role="alert">
                                                                                  <strong>{{ $message }}</strong>
                                                                              </span>
                                                                          @enderror
                                                                      </div>
                                                                  </div>

                                                                  <div class="form-group row">
                                                                    <label for="customer_name" class="col-md-4 col-form-label text-md-right"><sup class="text-danger"></sup>{{ __('Customer Full Name') }}</label>
                                        
                                                                    <div class="col-md-6">
                                                                        <input id="customer_name" type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{ old('customer_name') }}" placeholder="Option" autocomplete="customer_name" autofocus>
                                                                        
                                                                    
                                                                        @error('customer_name')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                    <div class="form-group row mb-0">
                                                                        <div class="col-md-6 offset-md-4">
                                                                            <button type="submit" class="btn btn-primary">
                                                                                {{ __('Sell') }}
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>


                                                        </div>
                                                      </div>

                                        @endif

                                        </tr> 
                                      
                      
                                      @endforeach
                                              
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                  <th>Product Name</th>
                                                  <th>Category</th>
                                                  <th>Unit</th>
                                                  <th>Quantity</th>
                                                  <th>Product Sold</th>
                                                  <th>Purchased Price</th>
                                                  <th>Sold Price</th>
                                                  <th>Expire Date</th>
                                                  <th>Location</th>
                                                  <th>Action</th>
                                                </tr>
                                                </tfoot>
                                              </table>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                        <!-- /.card -->
                                      </div>
                                      <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                  @else
                            
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h5 class="card-title">Shelves</h5>
                
                                      <div class="card-tools">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" data-card-widget="collapse">
                                        add
                                        </button>
                            
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                          <i class="fas fa-minus"></i>
                                        </button>
                                        
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                          <i class="fas fa-times"></i>
                                        </button>
                                      </div>
                                    </div>
                                  
                                      <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                          <thead>
                                          <tr>
                                              <th>Product Name</th>
                                              <th>Product Category</th>
                                              <th>unit</th>
                                              <th>quantity</th>
                                              <th>Product Sold</th>
                                              <th>purchased Price</th>
                                              <th>Price for Sale</th>
                                              <th>Discount</th>
                                              <th>Expire Date</th>
                                              <th>Location</th>
                                              <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                      
                                        
                                          </tbody>
                                          <tfoot>
                                          <tr>
                                              <th>Product Name</th>
                                              <th>Product Category</th>
                                              <th>unit</th>
                                              <th>quantity</th>
                                              <th>Product Sold</th>
                                              <th>purchased Price</th>
                                              <th>Price for Sale</th>
                                              <th>Discount</th>
                                              <th>Expire Date</th>
                                              <th>Location</th>
                                              <th>Action</th>
                                          </tr>
                                          </tfoot>
                                        </table>
                                      </div>
                                      <!-- /.card-body -->
                                    </div>
                                  <!-- /.card -->
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                    
                  @endif
                    
            
      
              </div>

             
            </div><!--/. container-fluid -->
          </section>
          <!-- /.content -->
          
        </div>
        
      @endsection
      
        