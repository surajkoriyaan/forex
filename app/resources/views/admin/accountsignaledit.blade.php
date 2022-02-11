@include('admin/header')
<div class="container-fluid">
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>{{session('success')}}</strong>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>                                                                       
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'#anc'});</script>
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Account Manager And Signal Provider Update</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                      <form class="" action="{{url('add-account-and-signal-update')}}" method="post" enctype="multipart/form-data">
                                        <div id="basic-example">
                                          @csrf
                                            <!-- Seller Details -->
                                            <h3>Step 1</h3>
                                            <section>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="id" value="{{$acountdetails['id']}}" />
                                                                <input type="hidden" name="user_id" value="{{$acountdetails['user_id']}}" />
                                                                <label for="basicpill-firstname-input">First Name</label>
                                                                <input type="text" name="fname" class="form-control" value="{{$acountdetails['first_name']}}" id="basicpill-firstname-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Last Name</label>
                                                                <input type="text" name="lname" class="form-control" value="{{$acountdetails['last_name']}}" id="basicpill-firstname-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Email</label>
                                                                <input type="email" name="email" class="form-control" value="{{$acountdetails['email']}}">
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Password</label>
                                                                <input type="text" name="password" class="form-control" id="password" value="{{$acountdetails['password']}}">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Confirm Password</label>
                                                                <input type="text" name="confirmpass" class="form-control" id="confirmpass" value="{{$acountdetails['password']}}">
                                                                <p id="error" style="color:red"></p>
                                                          </div>
                                                        </div>
                                                    </div>
                                            </section>
                                            <!-- Company Document -->
                                            <h3>Step 2</h3>
                                            <section style="margin-bottom:20px;">
                                                 <div id="inputFormRow">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-pancard-input">D O B</label>
                                                                <input type="date" name="dob" class="form-control" value="{{$acountdetails['dob']}}" id="basicpill-pancard-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-vatno-input">Gender</label><br>
                                                                @if($acountdetails['gender']=='male')
                                                                 <label class="form-check-label" for="flexRadioDefault1">
                                                                 Male
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="male"  id="flexRadioDefault1" checked> 
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Female
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1"> 
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Other
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="other" id="flexRadioDefault1">
                                                                @elseif($acountdetails['gender']=='female')
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                 Male
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="male"  id="flexRadioDefault1"> 
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Female
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1" checked> 
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Other
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="other" id="flexRadioDefault1">
                                                                @else
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                 Male
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="male"  id="flexRadioDefault1"> 
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Female
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1"> 
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Other
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="gender" value="other" id="flexRadioDefault1" checked>
                                                                @endif
                                                                 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-cstno-input">Company Name</label>
                                                                <input type="text" name="companyname" class="form-control" value="{{$acountdetails['company_name']}}" id="basicpill-cstno-input">
                                                            </div>
                                                        </div>
                                                       <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-phoneno-input">Logo</label>
                                                                <input type="file" name="logo" class="form-control" id="basicpill-phoneno-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <img src="{{asset('uploads/account_and_signal/logo/'.$acountdetails['logo'])}}" style="height:200px;width:auto"/>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Description</label>
                                                                    <textarea name="description" id="education" class="form-control tinymce-editor">{{$acountdetails['description']}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Services</label>
                                                                    <textarea name="services" id="awards" class="form-control tinymce-editor">{{$acountdetails['services']}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Address</label>
                                                                    <textarea name="address" id="conclusion" class="form-control tinymce-editor">{{$acountdetails['address']}}</textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-companyuin-input">City</label>
                                                                <input type="text" name="city" value="{{$acountdetails['city']}}" class="form-control" id="basicpill-companyuin-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Country Name</label>
                                                                <select class="form-select" name="country">
                                                                  <option>{{$acountdetails['country']}}</option>
                                                                  @foreach($country as $cnry)
                                                                  <option>{{$cnry['country_name']}}</option>
                                                                  @endforeach
                                                                </select>
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                          <div class="row">
                                                            <div class="col-md-4">
                                                              <label>Country Code</label>
                                                              <select class="form-select" name="countrycode">
                                                                <option>{{$acountdetails['country_code']}}</option>
                                                                @foreach($mobilecode as $mobile)
                                                                <option>{{$mobile['mobilecode']}}</option>
                                                                @endforeach
                                                              </select>
                                                            </div>
                                                            <div class="col-md-8">
                                                              <div class="mb-3">
                                                                  <label for="basicpill-email-input">Mobile Number</label>
                                                                  <input type="number"  name="mobilenumber" class="form-control" value="{{$acountdetails['mobile']}}">
                                                            </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Whatsapp Number</label>
                                                                <input type="text" name="whatsappno" class="form-control" value="{{$acountdetails['whatsappno']}}" id="basicpill-Declaration-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Telegram Link</label>
                                                                <input type="text" name="telegramid" value="{{$acountdetails['telegram_link']}}" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Facebook Id</label>
                                                                <input type="text" name="facebookid" value="{{$acountdetails['facebook_id']}}" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Instagram Id</label>
                                                                <input type="text" name="instagramid" value="{{$acountdetails['instagram_id']}}"  class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Linkedin Id</label>
                                                                <input type="text" name="linkedinid" value="{{$acountdetails['linkedin_id']}}" class="form-control" />
                                                            </div>
                                                        </div>
                                                         <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Website Url</label>
                                                                <input type="text" name="websiteurl" value="{{$acountdetails['website_url']}}" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="basicpill-declaration-input">Video Gallery</label>
                                                            @php
                                                            $videgal=explode(",",$acountdetails['video_gallery']);
                                                            $cc=count($videgal);
                                                            @endphp
                                                            @for($i=0;$i<$cc;$i++)
                                                            <div id="newRow">
                                                                <div id="inputFormRow">
                <div class="input-group mb-3">
                    <input type="text" name="videogallery[]" class="form-control m-input" value="{{$videgal[$i]}}" placeholder="Enter title" autocomplete="off">
                    <div class="input-group-append">                
                        <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                    </div>
                </div>
            </div>
            </div>
                                                            @endfor
            
            <button id="addRow" type="button" class="btn btn-info">Add More</button>
        </div>
       
               <div class="col-lg-12">
                    <div class="mb-3">
                         <br>
                                                                <label for="basicpill-declaration-input">Image Gallery</label>
                                                               <input id="file-input" type="file" name="imagegallery[]" class="form-control" multiple>
                                                            </div>
                                                            <div id="preview"></div>
               </div>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            @php
                                                            $imggalery=explode(",",$acountdetails['image_gallery']);
                                                            $cd=count($imggalery);
                                                            @endphp
                                                            
                                                            @for($j=0;$j<$cd;$j++)
                                                             <div class="col-lg-3">
                                                                 <img src="{{asset('uploads/account_and_signal/image_gallery/'.$imggalery[$j])}}" style="height:auto;width:100%"/>
                                                             </div>
                                                            @endfor
                                                        </div>
                                                        
                                                    </div>
                                                    </div>
                                                    </div>
                                                   
                                            </section>
                                            <h3>Step 3</h3>
                                            <section style="margin-bottom:20px;">
                                                <div id="inputFormRow2">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label>Price</label>
                                                                    <input type="text" class="form-control" name="price" value="{{$acountdetails['price']}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label>Signal Frequency</label>
                                                                    <input type="text" class="form-control" name="signalfreq" value="{{$acountdetails['signal_frequency']}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Signal Provider via</label>
                                                                    <input type="text" class="form-control" name="signalprovia" id="basicpill-cardno-input" value="{{$acountdetails['signal_provider_via']}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Trading Stratergy</label>
                                                                   <textarea name="stragery" id="stragery" class="form-control tinymce-editor">{{$acountdetails['trading_strategy']}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                            </section>
                                            <!-- Bank Details -->
                                            <h3>Step 4</h3>
                                            <section style="margin-bottom:20px;">
                                                <div id="inputFormRow2">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label>Minimum Equity</label>
                                                                    <input type="text" class="form-control" name="minimum_equity" value="{{$acountdetails['minimum_equity']}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label>Profit Sharing</label>
                                                                    <input type="text" class="form-control" name="profitsharing" value="{{$acountdetails['profit_sharing']}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Currency Pairs</label>
                                                                    <input type="text" class="form-control" name="currencypairs" value="{{$acountdetails['currency_pair']}}" id="basicpill-cardno-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Trading Plateform</label>
                                                                    <input type="text" class="form-control" name="tradingplateform" value="{{$acountdetails['trading_plateform']}}" id="basicpill-card-verification-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Tradable Assets</label>
                                                                    <input type="text" class="form-control" name="tradableassets" value="{{$acountdetails['tradable_assets']}}" id="basicpill-cardno-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Minimum Deposit</label>
                                                                    <input type="text" class="form-control" name="minimum_deposit" value="{{$acountdetails['minimum_deposit']}}" id="basicpill-card-verification-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Forex Brokers</label>
                                                                    <input type="text" class="form-control" name="forex_broker" value="{{$acountdetails['forex_bokers']}}" id="basicpill-cardno-input">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Investor Id & Password Details</label>
                                                                    <textarea class="form-control" name="investerid" id="investerid">{{$acountdetails['investor_id']}}</textarea>
                                                                    <!--<input type="text" class="form-control" name="investerid" value="{{$acountdetails['investor_id']}}" id="basicpill-cardno-input">-->
                                                                </div>
                                                            </div>
                                                            <!--<div class="col-lg-6">-->
                                                            <!--    <div class="mb-3">-->
                                                            <!--        <label for="basicpill-card-verification-input">Password Details</label>-->
                                                            <!--        <input type="text" class="form-control" name="passworddetails" value="{{$acountdetails['passdord_details']}}" id="basicpill-card-verification-input">-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                        </div>
                                                  </div>
                                            </section>
                                            <!-- Confirm Details -->
                                            <section>
                                                <div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                              <button type="submit" style="float: right" class="btn btn-primary" name="button">Submit</button>
                                                            </div>
                                                        </div>
                                                  </div>
                                            </section>
                                        </div>
                                      </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                   
@include('admin/footer')

 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script> 
                    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
var editor=CKEDITOR.replace('fulladdress',{
    filebrowserUploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
    filebrowserUploadMethod:"form"
  });
  //CKFinder.setupCKEditor(editor);
</script>
<script>
var editor=CKEDITOR.replace('tradingplatform',{
    filebrowserUploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
    filebrowserUploadMethod:"form"
  });
  //CKFinder.setupCKEditor(editor);
</script>
<script>
var editor=CKEDITOR.replace('support',{
    filebrowserUploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
    filebrowserUploadMethod:"form"
  });
  //CKFinder.setupCKEditor(editor);
</script>
<script>
var editor=CKEDITOR.replace('education',{
    filebrowserUploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
    filebrowserUploadMethod:"form"
  });
  //CKFinder.setupCKEditor(editor);
</script>
<script>
var editor=CKEDITOR.replace('awards',{
    filebrowserUploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
    filebrowserUploadMethod:"form"
  });
  //CKFinder.setupCKEditor(editor);
</script>
<script>
var editor=CKEDITOR.replace('conclusion',{
    filebrowserUploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
    filebrowserUploadMethod:"form"
  });
  //CKFinder.setupCKEditor(editor);
</script>
<script>
var editor=CKEDITOR.replace('stragery',{
    filebrowserUploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
    filebrowserUploadMethod:"form"
  });
  //CKFinder.setupCKEditor(editor);
</script>
<script>
var editor=CKEDITOR.replace('investerid',{
    filebrowserUploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
    filebrowserUploadMethod:"form"
  });
  //CKFinder.setupCKEditor(editor);
</script>
<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>
<script>
    function previewImages() {

  var preview = document.querySelector('#preview');
  
  if (this.files) {
    [].forEach.call(this.files, readAndPreview);
  }

  function readAndPreview(file) {

    // Make sure `file.name` matches our extensions criteria
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
      return alert(file.name + " is not an image");
    } // else...
    
    var reader = new FileReader();
    
    reader.addEventListener("load", function() {
      var image = new Image();
      image.height = 100;
      image.title  = file.name;
      image.src    = this.result;
      preview.appendChild(image);
    });
    
    reader.readAsDataURL(file);
    
  }

}

document.querySelector('#file-input').addEventListener("change", previewImages);
</script>
<script>
    $('#confirmpass').on('keyup',function(){
          var pass=$('#password').val();
          var cpass=$(this).val();
          if(pass===cpass){
              $('#error').html('');
          }else{
              $('#error').html('password not matched.');
          }
    });
</script>