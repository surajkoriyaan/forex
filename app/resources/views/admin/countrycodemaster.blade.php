@include('admin/header')
<div class="container-fluid">
<div class="row">
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>{{session('success')}}</strong>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                      <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal" style="float: right">Add New</button>
                                          <h4 class="card-title">Country Code Master</h4><br>
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Country Code</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($data as $value)
                                              <tr>
                                               <td>{{$value['id']}}</td>
                                               <td>{{$value['mobilecode']}}</td>
                                               <td>
                                               <button class="badge" style="color: red; font-size: 18px; background: transparent;border: none" data-bs-toggle="modal" data-bs-target="#exampleModal2S{{$value['id']}}">
                                               <li class="fas fa-trash-alt"></li>
                                             </button>

  <div class="modal fade" id="exampleModal2S{{$value['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete?</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>

       <div class="modal-footer">
         <form class="" action="{{route('countrycode.delete')}}" method="post">
           @csrf
           <input type="hidden" name="id" value="{{$value['id']}}">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
           <button type="submit" class="btn btn-primary">Yes, delete</button>
         </form>

       </div>
     </div>
   </div>
  </div>

                                             <a hrf="#" style="color: blue; font-size: 18px">
                                             <li class="fas fa-edit" data-bs-toggle="modal" data-bs-target="#myModal{{$value['id']}}" style="cursor: pointer"></li>
                                           </a>
                                           <div id="myModal{{$value['id']}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                     <div class="modal-dialog">
                                                                         <div class="modal-content">
                                                                             <div class="modal-header">
                                                                                 <h5 class="modal-title" id="myModalLabel">Update Country Code</h5>
                                                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                             </div>
                                                                               <form class="custom-validation" action="{{route('countrycode.update')}}" method="POST">
                                                                                 @csrf
                                                                             <div class="modal-body">
                                                                               <div class="row">
                                                                                 <div class="col-xl-12">
                                                                                     <div class="card">
                                                                                         <div class="card-body">
                                                                                                 <div class="mb-3">
                                                                                                   <input type="hidden" name="id" value="{{$value['id']}}">
                                                                                                     <label class="form-label">Country Code</label>
                                                                                                     <input type="text" name="countrycodeup" value="{{$value['mobilecode']}}" class="form-control" required placeholder="country code" />
                                                                                                 </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div> <!-- end col -->
                                                                             </div> <!-- end row -->
                                                                             </div>
                                                                             <div class="modal-footer">
                                                                                 <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                                                 <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                                             </div>
                                                                             </form>
                                                                         </div><!-- /.modal-content -->
                                                                     </div><!-- /.modal-dialog -->
                                                                 </div><!-- /.modal -->
                                               </td>
                                               </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                      </div>
                      <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Country Code</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                          <form class="custom-validation" action="{{route('countrycode.add')}}" method="POST">
                                                            @csrf
                                                        <div class="modal-body">
                                                          <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Country Code</label>
                                                                                <input type="text" name="countrycode" class="form-control" required placeholder="country code" />
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                        </div>
                                                        </form>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
@include('admin/footer')
