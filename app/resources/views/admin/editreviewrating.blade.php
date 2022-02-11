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
                                        <h4 class="card-title">Review Details</h4>
                                        <form action="{{url('review-rating-action')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$row->id}}" />
                                        <table  class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                <th>Avtar</th>
                                                <th><img src="{{$data->imgs}}" style="height:60px;width:60px" />  </th>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <th>{{$data->name}}</th>
                                            </tr>
                                             <tr>
                                                <th>Email</th>
                                                <th>{{$data->email}}</th>
                                            </tr>
                                             <tr>
                                                <th>Google Id</th>
                                                <th>{{$data->google_id}}</th>
                                            </tr>
                                             <tr>
                                                <th>Type</th>
                                                <th>
                                                     @if($row['type']=='1')
                                                      <span class="badge rounded-pill bg-primary">Broker</span>
                                                      @elseif($row['type']=='2')
                                                      <span class="badge rounded-pill bg-secondary">Account Manager</span>
                                                      @elseif($row['type']=='3')
                                                      <span class="badge rounded-pill bg-info text-dark">Signal Provider</span>
                                                      @else
                                                      <span class="badge rounded-pill bg-warning text-dark">Account And Signal (Both)</span>
                                                      @endif
                                                </th>
                                            </tr>
                                             <tr>
                                                    <th>Type Name</th>
                                                <th>{{$row->type_name}}</th>
                                            </tr>
                                             <tr>
                                                <th>Rating</th>
                                                <th><input type="number" name="rating" value="{{$row->rating}}" class="form-control" /></th>
                                            </tr>
                                            <tr>
                                                <th>Comments</th>
                                                <th><textarea name="comments" class="form-control">{{$row->comments}}</textarea></th>
                                            </tr>
                                             <tr>
                                                <th>Status</th>
                                                <th>
                                                    <select class="form-select" name="approval">
                                                        <option value="">select option</option>
                                                        <option value="1">approved</option>
                                                        <option value="0">not approced</option>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th><input type="submit" name="submit" class="btn btn-primary" value="submit" /></th>
                                            </tr>
                                            </thead>
                                        </table>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                      </div>
@include('admin/footer')
