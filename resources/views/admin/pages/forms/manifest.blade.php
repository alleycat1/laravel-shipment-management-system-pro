@extends('admin.layouts.layout-basic')

@section('scripts')
<script src="{{asset('/assets/admin/js/pages/wizard.js')}}"></script>
@stop

@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Form Manifest</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active">Manifest</li>
        </ol>
    </div>

    <div class="card">
        <div class="card-header">
            <h6>Form Wizard Manifest</h6>
        </div>
        <div class="card-body">
            <div class="content">
                <form action="manifest" method="POST" id="basic-wizard-2" class="form-wizard-2 icon-wizard">
                    <h3><i class="icon-fa icon-fa-home"></i>Step 1</h3>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Kode Manifest</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>DOB</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control ls-datepicker" value="06/10/2017"
                                            readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="icon-fa icon-fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h3><i class="icon-fa icon-fa-key"></i>Step 2</h3>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Jenis Pengiriman</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone No.</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input type="password" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h3><i class="icon-fa icon-fa-map-marker"></i>Step 3</h3>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ID Barang</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address Line2</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h3><i class="icon-fa icon-fa-twitter"></i>Step 4</h3>
                    <section>
                        <div class="form-group">
                            <label>ID Pegawai</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ID Penerima</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ID Jarak</label>
                            <input type="text" class="form-control">
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>

    </form>
</div>
</div>
</div>
</div>
@stop