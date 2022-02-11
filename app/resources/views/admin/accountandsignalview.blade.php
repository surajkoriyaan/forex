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
                                        <h4 class="card-title">Account Manager And Signal Providers</h4>
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Logo</th>
                                                <th>Mobile No</th>
                                                <th>Email</th>
                                                <th>Country</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($data as $value)
                                              <tr>
                                                  <td>{{$value['first_name']}} {{$value['last_name']}}</td>
                                                  <td><img src="{{ asset('uploads/account_and_signal/logo/'.$value['logo']) }}" style="height: 40px;width: 40px" alt=""></td>
                                                  <td>{{$value['mobile']}}</td>
                                                  <td>{{$value['email']}}</td>
                                                  <td>{{$value['country']}}</td>
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
              <form class="" action="{{route('add.account.and.signal.delete')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$value['id']}}">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes, delete</button>
              </form>

            </div>
          </div>
        </div>
      </div>
                                                <a href="{{url('add-account-and-signal-edit/'.$value['id'])}}" style="color: blue; font-size: 18px">
                                                <li class="fas fa-edit"></li>
                                                </a>
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
@include('admin/footer')
