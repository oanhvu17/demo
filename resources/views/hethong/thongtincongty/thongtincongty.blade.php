@extends('hethong.hethong')
@section('header')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Thông tin công ty<br/>
                        <small></small>
                    </h3>
                </header>
            </div>                      
        </div>
    </div>
</section>
@stop
@section('content')
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15667.860860005932!2d106.6689991!3d10.9659982!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcede8f213dc3082d!2zQ8O0bmcgdHkgxJFp4buHbiBs4buxYyBCw6xuaCBExrDGoW5n!5e0!3m2!1svi!2s!4v1556287445669!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container">
                    @foreach ($thongtincongty as $item)
                        <div class="row">
                        <div id="acct-password-row" class="span7">
                            <div class="control-group ">
                                <label class="control-label">Tên công ty</label>
                                <div class="controls">
                                    <input class="span8" type="text" name="" value="{!! $item->cty_ten !!}">
                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">Địa chỉ</label>
                                <div class="controls">
                                    <input class="span8" type="text" name="" value="{!! $item->cty_diachi !!}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="acct-password-row" class="span4">
                            <fieldset>
                                <div class="control-group ">
                                    <label class="control-label">Số điện thoại</label>
                                    <div class="controls">
                                       <input class="span4" type="text" name="" value="{!! $item->cty_sdt !!}">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Số Fax</label>
                                    <div class="controls">
                                       <input class="span4" type="text" name="" value="{!! $item->cty_fax !!}">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div id="acct-verify-row" class="span4  ">
                            <fieldset>
                                <div class="control-group ">
                                    <label class="control-label">Website</label>
                                    <div class="controls">
                                       <input class="span4" type="text" name="" value="{!! $item->cty_web !!}">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input class="span4" type="text" name="" value="{!! $item->cty_email !!}">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    
                    @endforeach
                    <footer id="submit-actions" class="form-actions">
                        <a href="{!! URL::route('hethong.thongtincongty.getEdit' , $item->id) !!}" class="btn btn-info"><i class="btn-icon-only icon-edit"></i>&nbsp&nbspSửa</a>
                    </footer>
        </div>
    </section>
@stop
