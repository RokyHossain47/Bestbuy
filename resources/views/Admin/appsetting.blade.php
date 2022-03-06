@extends('layouts.admin')
@section('title', 'Setting')
@section('content')

<div class="card ml-3 mr-3">
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="mb-4">
            <h4 class="card-header bg-success">Application Setting</h4>
            <div class="card-body">
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="border_preview">
                        <form action="https://phpcryptomarket.bdtask.com/demo-v4.0/backend/setting/app_setting" class="form-inner" enctype="multipart&#x2F;form-data" method="post" accept-charset="utf-8">
                        <input type="hidden" name="csrf_test_name" value="da7471bcf8ee8069b17c7ef90e88e395" />                            
                        <input type="hidden" name="setting_id" value="1" style="display:none;" />

                            <div class="form-group row">
                                <label for="title" class="col-sm-3 col-form-label">Application Title <i class="text-danger">*</i></label>
                                <div class="col-sm-9">
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Application Title" value="Crypto Currency Treading System">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input name="description" type="text" class="form-control" id="description" placeholder="Address"  value="Bangladesh Office 98 Green Road, Farmgate, Dhaka- 1215">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Email Address"  value="info@demo.com">
                                </div>
                            </div>
 
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone"  value="+88-01317-584839" >
                                </div>
                            </div>
                            <!-- if setting favicon is already uploaded -->
                                                        <div class="form-group row">
                                <label for="faviconPreview" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <img src="#" alt="Favicon" class="img-thumbnail" />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="favicon" class="col-sm-3 col-form-label">Favicon </label>
                                <div class="col-sm-9">
                                    <input type="file" name="favicon" id="favicon">
                                    <input type="hidden" name="old_favicon" value="/public/uploads/dashboard/new/1609072784_bafaefb632fe55203bc9.png">
                                   <div class="text-danger">32x32 px(jpg, jpeg, png, gif, ico)</div>
                                </div>
                            </div>


                            <!-- if setting logo is already uploaded -->
                                                        <div class="form-group row">
                                <label for="logoPreview" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <img src="#" alt="Picture" class="img-thumbnail" />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="logo" class="col-sm-3 col-form-label">Dashboard Logo</label>
                                <div class="col-sm-9">
                                    <input type="file" name="logo" id="logo">
                                    <input type="hidden" name="old_logo" value="/public/uploads/settings/1609072784_a3d6ceb248256f995c1e.png">
                                    <div class="text-danger">184x42 px(jpg, jpeg, png, gif, ico)</div>
                                </div>
                            </div>


                            <!-- if setting Web logo is already uploaded -->
                                                        <div class="form-group row">
                                <label for="logoPreview" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <img src="#" alt="Picture" class="img-thumbnail" />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="logo_web" class="col-sm-3 col-form-label">WebSite Logo</label>
                                <div class="col-sm-9">
                                    <input type="file" name="logo_web" id="logo_web">
                                    <input type="hidden" name="old_web_logo" value="Websie logo">
                                    <div class="text-danger">163x50 px(jpg, jpeg, png, gif, ico)</div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="left_to_right" class="col-sm-3 col-form-label">Admin Align</label>
                                <div class="col-sm-9">
                                    <select name="site_align" class="form-control">
                                    <option value="LTR" selected="selected">Left to Right</option>
                                    <option value="RTL">Right to Left</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="office_time" class="col-sm-3 col-form-label">Office Time</label>
                                <div class="col-sm-9">
                                    <textarea name="office_time" class="form-control"  placeholder="Office Time" maxlength="255" rows="7">Monday - Friday: 08:00 - 22:00
Saturday, Sunday: Closed</textarea>
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label for="latitude" class="col-sm-3 col-form-label">Latitude, Longitude</label>
                                <div class="col-sm-9">
                                    <input name="latitude" type="text" class="form-control" id="latitude" placeholder="Latitude, Longitude"  value="40.6700, -73.9400" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="footer_text" class="col-sm-3 col-form-label">Footer Text</label>
                                <div class="col-sm-9">
                                    <textarea name="footer_text" class="form-control"  placeholder="Footer Text" maxlength="140" rows="7">Copyright © 2014-2021 Bestbuy. All rights reserved.</textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-success mr-2 mb-3">
                                <a href="#" class="btn btn-danger mr-3 mb-3">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                 </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection