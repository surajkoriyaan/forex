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
                                    <h4 class="mb-sm-0 font-size-18">Broker Registration</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                      <form class="" action="{{route('broker.action')}}" method="post" enctype="multipart/form-data">
                                        <div id="basic-example">
                                          @csrf
                                            <!-- Seller Details -->
                                            <h3>Basic Information</h3>
                                            <section>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Full Name</label>
                                                                <input type="text" name="fullname" class="form-control" id="basicpill-firstname-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-phoneno-input">Logo</label>
                                                                <input type="file" name="logo" class="form-control" id="basicpill-phoneno-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Founded Year</label>
                                                                <input type="text" name="foundedyear" class="form-control" id="basicpill-email-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Regulations</label>
                                                                <select class="form-select" name="regalations">
                                                                  <option value="">Select Option</option>
                                                                  <option value="1">Regulated</option>
                                                                  <option value="2">Unregulated</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Regulated By</label>
                                                                <select class="form-select" name="regulatedby">
                                                                  <option value="">Select Option</option>
                                                                  @foreach($regulatorymaster as $regmaster)
                                                                  <option>{{$regmaster['name']}}</option>
                                                                  @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Min Deposit</label>
                                                                <input type="text" name="mindeposit" class="form-control" value="">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Headquarters</label>
                                                                <input type="text" name="headquarters" class="form-control" value="">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Max Leverage</label>
                                                                <input type="text" name="maxleverage" class="form-control" value="">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                          <div class="row">
                                                            <div class="col-md-4">
                                                              <label for="">Select Country Code</label>
                                                              <select class="form-select" name="countrycode">
                                                                <option value="">select code</option>
                                                                @foreach($mobilecode as $mobile)
                                                                <option>{{$mobile['mobilecode']}}</option>
                                                                @endforeach
                                                              </select>
                                                            </div>
                                                            <div class="col-md-8">
                                                              <div class="mb-3">
                                                                  <label for="basicpill-email-input">Mobile Number</label>
                                                                  <input type="number"  name="mobilenumber" class="form-control" value="">
                                                            </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Email</label>
                                                                <input type="email" name="email" class="form-control" value="">
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-address-input">Full Address</label>
                                                                <textarea id="fulladdress" name="fulladdress" class="form-control tinymce-editor"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">City Name</label>
                                        <input type="text" name="city" class="form-control" />
                                                                
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Country Name</label>
                                                                <select class="form-select" name="country">
                                                                  <option value="">Select Country</option>
                                                                  @foreach($country as $cnry)
                                                                  <option>{{$cnry['country_name']}}</option>
                                                                  @endforeach
                                                                </select>
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Website</label>
                                                                <input type="text" name="website" class="form-control" value="">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">YouTube URL</label>
                                                                <input type="url" name="youtube1" class="form-control" value="">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">YouTube URL</label>
                                                                <input type="url" name="youtube2" class="form-control" value="">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">YouTube URL</label>
                                                                <input type="url" name="youtube3" class="form-control" value="">
                                                          </div>
                                                        </div>
                                                    </div>
                                            </section>
                                            <!-- Company Document -->
                                            <h3>Account Types</h3>
                                            <section style="margin-bottom:20px;">
                                                 <div id="inputFormRow">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-pancard-input">Account Type Name</label>
                                                                <input type="text" name="account_type[]" class="form-control" id="basicpill-pancard-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-vatno-input">Min Deposit</label>
                                                                <input type="text" name="accountmindeposit[]" class="form-control" id="basicpill-vatno-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-cstno-input">Max Leverage</label>
                                                                <input type="text" name="accountmaxleverage[]" class="form-control" id="basicpill-cstno-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-servicetax-input">Minimum Trade Volume</label>
                                                                <input type="text" name="account_minimumtradevolume[]" class="form-control" id="basicpill-servicetax-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-companyuin-input">Commission</label>
                                                                <input type="text" name="commission[]" class="form-control" id="basicpill-companyuin-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Spread</label>
                                                                <input type="text" name="spreades[]" class="form-control" id="basicpill-Declaration-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Account Currencies</label>
                                                                <input type="text" name="account_currency[]" class="form-control" id="basicpill-Declaration-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Trading Instruments</label>
                                                                <input type="text" name="trading_instrument[]" class="form-control" id="basicpill-Declaration-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">EA</label>
                                                                <select class="form-select" name="ea[]">
                                                                  <option value="">Select Option</option>
                                                                  <option value="yes">Yes</option>
                                                                  <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Hedging</label>
                                                                <select class="form-select" name="hedging[]">
                                                                  <option value="">Select Option</option>
                                                                  <option value="yes">Yes</option>
                                                                  <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Scalping</label>
                                                                <select class="form-select" name="scalping[]">
                                                                  <option value="">Select Option</option>
                                                                  <option value="yes">Yes</option>
                                                                  <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Islamic Account</label>
                                                                <select class="form-select" name="islamicaccount[]">
                                                                  <option value="">Select Option</option>
                                                                  <option value="yes">Yes</option>
                                                                  <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div></div>
                                                    <div id="newRow"></div>
            <button id="addRow" type="button" class="btn btn-info" style="float:right">Add More</button>
                                            </section>
                                            <!-- Bank Details -->
                                            <h3>Deposit</h3>
                                            <section style="margin-bottom:20px;">
                                                <div id="inputFormRow2">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-namecard-input">Deposit Method Name</label>
                                                                    <select class="form-select" name="deposit_method[]">
                                                                      <option value="">Select Option</option>
                                                                      @foreach($deposit_withdrawal as $dp)
                                                                     <option>{{$dp['name']}}</option>
                                                                      @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label>Commission</label>
                                                                    <input type="text" class="form-control" name="deposit_comission[]" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Exchange Rate</label>
                                                                    <input type="text" class="form-control" name="deposit_exchange[]" id="basicpill-cardno-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Processing Time</label>
                                                                    <input type="text" class="form-control" name="processing_time[]" id="basicpill-card-verification-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  <div id="newRow2"></div>
            <button id="addRow2" type="button" class="btn btn-info" style="float:right">Add More</button>
                                            </section>
                                            <!-- Confirm Details -->
                                            <h3>Withdrawal</h3>
                                            <section style="margin-bottom:20px;">
                                                <div id="inputFormRow3">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-namecard-input">Withdrawal Method Name</label>
                                                                    <select class="form-select" name="withdrawal_mehtod[]">
                                                                      <option value="">Select Option</option>
                                                                      @foreach($deposit_withdrawal as $dp)
                                                                     <option>{{$dp['name']}}</option>
                                                                      @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label>Commission</label>
                                                                    <input type="text" class="form-control" name="withdrawal_comission[]" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Exchange Rate</label>
                                                                    <input type="text" class="form-control" name="withdrawal_exchange[]" id="basicpill-cardno-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Processing Time</label>
                                                                    <input type="text" class="form-control" name="withdrawal_processingtime[]" id="basicpill-card-verification-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  <div id="newRow3"></div>
            <button id="addRow3" type="button" class="btn btn-info" style="float:right">Add More</button>
                                            </section>
                                            
                                            
                                            <h3>Account</h3>
                                            <section>
                                                <div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-namecard-input">Account Link</label>
                                                                    <input type="text" name="account_link" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label>Trading Platforms</label>
                                                                    <textarea name="trading_plateform" id="tradingplatform" class="form-control tinymce-editor"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Customer Support</label>
                                                                    <textarea name="customer_support" id="support" class="form-control tinymce-editor"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Education</label>
                                                                    <textarea name="education" id="education" class="form-control tinymce-editor"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Awards</label>
                                                                    <textarea name="awards" id="awards" class="form-control tinymce-editor"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Conclusion</label>
                                                                    <textarea name="conclusion" id="conclusion" class="form-control tinymce-editor"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                              <input type="hidden" name="createdby" value="admin">
                                                            </div>
                                                            <div class="col-lg-4">
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


    <script type="text/javascript">
        // tinymce.init({
        //     selector: 'textarea.tinymce-editor',
        //     height: 200,
        //     menubar: false,
        //     plugins: [
        //         'advlist autolink lists link image charmap print preview anchor',
        //         'searchreplace visualblocks code fullscreen',
        //         'insertdatetime media table paste code help wordcount'
        //     ],
        //     toolbar: 'undo redo | formatselect | ' +
        //         'bold italic backcolor | alignleft aligncenter ' +
        //         'alignright alignjustify | bullist numlist outdent indent | ' +
        //         'removeformat | help',
        //     content_css: '//www.tiny.cloud/css/codepen.min.css'
       // });
    </script>
    <script type="text/javascript">
    // add row
    $("#addRow").on('click',function () {
        console.log('its work');
          var html = '';
         html += '<div id="inputFormRow">';
          html+='<hr>';
         html += '<div class="row">';
         html+='<div class="col-lg-6">';
         html+='<div class="mb-3">';
        html+='<label for="basicpill-pancard-input">Account Type Name</label>';
        html+='<input type="text" name="account_type[]" class="form-control" id="basicpill-pancard-input">';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-vatno-input">Min Deposit</label>';
        html+='<input type="text" name="accountmindeposit[]" class="form-control" id="basicpill-vatno-input">';
        html+='</div>';
        html+='</div>';
        html+='</div>';
        html+='<div class="row">';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-cstno-input">Max Leverage</label>';
        html+='<input type="text" name="accountmaxleverage[]" class="form-control" id="basicpill-cstno-input">';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-servicetax-input">Minimum Trade Volume</label>';
        html+='<input type="text" name="account_minimumtradevolume[]" class="form-control" id="basicpill-servicetax-input">';
        html+='</div>';
        html+='</div>';
        html+='</div>';
        html+='<div class="row">';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-companyuin-input">Commission</label>';
        html+='<input type="text" name="commission[]" class="form-control" id="basicpill-companyuin-input">';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-declaration-input">Spread</label>';
        html+='<input type="text" name="spreades[]" class="form-control" id="basicpill-Declaration-input">';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-declaration-input">Account Currencies</label>';
        html+='<input type="text" name="account_currency[]" class="form-control" id="basicpill-Declaration-input">';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-declaration-input">Trading Instruments</label>';
        html+='<input type="text" name="trading_instrument[]" class="form-control" id="basicpill-Declaration-input">';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-declaration-input">EA</label>';
        html+='<select class="form-select" name="ea[]">';
        html+='<option value="">Select Option</option>';
        html+='<option value="yes">Yes</option>';
        html+='<option value="no">No</option>';
        html+='</select>';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-declaration-input">Hedging</label>';
        html+='<select class="form-select" name="hedging[]">';
        html+='<option value="">Select Option</option>';
        html+='<option value="yes">Yes</option>';
        html+='<option value="no">No</option>';
        html+='</select>';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-declaration-input">Scalping</label>';
        html+='<select class="form-select" name="scalping[]">';
        html+='<option value="">Select Option</option>';
        html+='<option value="yes">Yes</option>';
        html+='<option value="no">No</option>';
        html+='</select>';
        html+='</div>';
        html+='</div>';
        html+='<div class="col-lg-6">';
        html+='<div class="mb-3">';
        html+='<label for="basicpill-declaration-input">Islamic Account</label>';
        html+='<select class="form-select" name="islamicaccount[]">';
        html+='<option value="">Select Option</option>';
        html+='<option value="yes">Yes</option>';
        html+='<option value="no">No</option>';
        html+='</select>';
        html+='</div>';
        html+='</div>';
        html+='</div>';
       // html += '</div>';
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
<script type="text/javascript">
    // add row
    $("#addRow2").on('click',function () {
        var html2 = '';
            html2+='<div id="inputFormRow2">';
            html2+='<hr>';
            html2+='<div class="row">';
            html2+='<div class="col-lg-6">';
            html2+='<div class="mb-3">';
            html2+='<label for="basicpill-namecard-input">Deposit Method Name</label>';
           html2+='<select class="form-select" name="deposit_method[]">';
           html2+='<option value="">Select Option</option>';
           html2+='@foreach($deposit_withdrawal as $dp)';
           html2+='<option>{{$dp['name']}}</option>';
           html2+='@endforeach';
           html2+='</select>';
           html2+='</div>';
           html2+='</div>';
           html2+='<div class="col-lg-6">';
           html2+='<div class="mb-3">';
           html2+='<label>Commission</label>';
           html2+='<input type="text" class="form-control" name="deposit_comission[]" value="">';
           html2+='</div>';
           html2+='</div>';
           html2+='</div>';
           html2+='<div class="row">';
           html2+='<div class="col-lg-6">';
           html2+='<div class="mb-3">';
           html2+='<label for="basicpill-cardno-input">Exchange Rate</label>';
           html2+='<input type="text" class="form-control" name="deposit_exchange[]" id="basicpill-cardno-input">';
           html2+='</div>';
           html2+='</div>';
           html2+='<div class="col-lg-6">';
           html2+='<div class="mb-3">';
           html2+='<label for="basicpill-card-verification-input">Processing Time</label>';
        html2+='<input type="text" class="form-control" name="processing_time[]" id="basicpill-card-verification-input">';
          html2+='</div>';
          html2+='</div>';
          html2+='</div>';
          html2 += '<div class="input-group-append">';
         html2 += '<button id="removeRow2" type="button" class="btn btn-danger">Remove</button>';
         html2 += '</div>';
         html2 += '</div>';
        
        // html += '<div id="inputFormRow">';
        // html += '<div class="input-group mb-3">';
        // html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        // html += '<div class="input-group-append">';
        // html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        // html += '</div>';
        // html += '</div>';

         $('#newRow2').append(html2);
    });

    // remove row
     $(document).on('click', '#removeRow2', function () {
         $(this).closest('#inputFormRow2').remove();
     });
</script>
<script type="text/javascript">
    // add row
    $("#addRow3").on('click',function () {
        var html3 = '';
            html3+='<div id="inputFormRow3">';
             html3+='<hr>';
            html3+='<div class="row">';
            html3+='<div class="col-lg-6">';
            html3+='<div class="mb-3">';
            html3+='<label for="basicpill-namecard-input">Withdrawal Method Name</label>';
            html3+='<select class="form-select" name="withdrawal_mehtod[]">';
            html3+='<option value="">Select Option</option>';
            html3+='@foreach($deposit_withdrawal as $dp)';
            html3+='<option>{{$dp['name']}}</option>';
            html3+='@endforeach';
            html3+='</select>';
            html3+='</div>';
            html3+='</div>';
            html3+='<div class="col-lg-6">';
            html3+='<div class="mb-3">';
            html3+='<label>Commission</label>';
            html3+='<input type="text" class="form-control" name="withdrawal_comission[]" value="">';
            html3+='</div>';
            html3+='</div>';
            html3+='</div>';
            html3+='<div class="row">';
            html3+='<div class="col-lg-6">';
            html3+='<div class="mb-3">';
            html3+='<label for="basicpill-cardno-input">Exchange Rate</label>';
            html3+='<input type="text" class="form-control" name="withdrawal_exchange[]" id="basicpill-cardno-input">';
            html3+='</div>';
            html3+='</div>';
            html3+='<div class="col-lg-6">';
            html3+='<div class="mb-3">';
            html3+='<label for="basicpill-card-verification-input">Processing Time</label>';
            html3+='<input type="text" class="form-control" name="withdrawal_processingtime[]" id="basicpill-card-verification-input">';
            html3+='</div>';
            html3+='</div>';
            html3+='</div>';
            //html+='</div>';
        // html += '<div id="inputFormRow">';
        // html += '<div class="input-group mb-3">';
        // html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
         html3 += '<div class="input-group-append">';
         html3 += '<button id="removeRow3" type="button" class="btn btn-danger">Remove</button>';
         html3 += '</div>';
         html3 += '</div>';

         $('#newRow3').append(html3);
    });

    // remove row
     $(document).on('click', '#removeRow3', function () {
         $(this).closest('#inputFormRow3').remove();
     });
</script>