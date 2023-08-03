@extends('admin.layouts.layout-horizontal')
@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Data Master</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
            <li class="breadcrumb-item active">View</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-6 mb-4">
                    <h5 class="section-semi-title">Data Pengirim Table</h5>

                    <p>This is just a Simple Bootstrap style table. To use this just apply
                        <mark>.table</mark>
                        class to your table element.
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pengirim</th>
                                <th>Alamat</th>
                                <th>Telephone</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengirims as $pengirim)
                            <tr>
                                <td>1</td>
                                <td> {{ $pengirim->nama_pengirim }} </td>
                                <td><span class="label label-success">{{ $pengirim->alamat_pengirim }}</span></td>
                                <td> {{ $pengirim->no_telpon }} </td>
                                <td> {{ $pengirim->created_at }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6 mb-4">
                    <h5 class="section-semi-title">Jenis Pengiriman Table</h5>

                    <p>To use this just apply
                        <mark>.table</mark>
                        ,
                        <mark>.table-bordered</mark>
                        classes to your table element to make it bordered.
                    </p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Pengiriman</th>
                                <th>Nama Jenis Pengiriman</th>
                                <th>Harga Per KM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenispengirimans as $jenispengiriman)
                            <tr>
                                <td>1</td>
                                <td> {{ $jenispengiriman->kd_pengiriman }} </td>
                                <td><span class="label label-success"> {{ $jenispengiriman->nm_jns_pengiriman }} </span>
                                </td>
                                <td>Rp {{ $jenispengiriman->harga_per_km }} </td>
                            </tr>
                            @endforeach

                            {{-- <tr>
                                <td>2</td>
                                <td>Pink T-Shirt</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$20</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nike Running Shoes</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Reebok Casual Shoes</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$70</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Titan Raga Premium Watch</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Philips Hair Remover</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$50</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6 mb-4">
                    <h5 class="section-semi-title">Data Barang Table</h5>

                    <p>To use this just apply
                        <mark>.table</mark>
                        ,
                        <mark>.table-hover</mark>
                        classes to your table element to make it hoverable.
                    </p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Barang</th>
                                <th>Jenis Barang</th>
                                <th>Berat Barang</th>
                                <th>Pengirim</th>
                                <th>Jumlah PCS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $barang)
                            <tr>
                                <td>1</td>
                                <td> {{ $barang->id_barang }} </td>
                                <td> {{ $barang->jenis_barang }} </td>
                                <td> {{ $barang->berat_barang }} </td>
                                {{-- <td> {{ $barang->id_pengirim }} </td> --}}
                                <td> <a href=" {{ asset('/') }} ">{{ $barang->id_pengirim }}</a> </td>
                                <td> {{ $barang->jumlah_pcs }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6 mb-4">
                    <h5 class="section-semi-title">Data Penerima Table</h5>

                    <p>To use this just apply
                        <mark>.table</mark>
                        ,
                        <mark>.table-bordered</mark>
                        classes to your table element to make it striped.
                    </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Telephone</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Colgate Toothpaste</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$5</td>
                                <td>$6</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pink T-Shirt</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$20</td>
                                <td>$40</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nike Running Shoes</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$100</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Reebok Casual Shoes</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$70</td>
                                <td>$80</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Titan Raga Premium Watch</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$100</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Philips Hair Remover</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$50</td>
                                <td>$70</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6 mb-4">
                    <h5 class="section-semi-title">Small Table</h5>

                    <p>To use this just apply
                        <mark>.table</mark>
                        ,
                        <mark>.table-sm</mark>
                        class to your table element to make it small.
                    </p>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>MRP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Colgate Toothpaste</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$5</td>
                                <td>$6</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pink T-Shirt</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$20</td>
                                <td>$40</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nike Running Shoes</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$100</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Reebok Casual Shoes</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$70</td>
                                <td>$80</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Titan Raga Premium Watch</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$100</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Philips Hair Remover</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$50</td>
                                <td>$70</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6 mb-4">
                    <h5 class="section-semi-title">Contextual Classes</h5>

                    <p>To use this just apply
                        <mark>.table-active</mark>
                        ,
                        <mark>.table-success</mark>
                        ,
                        <mark>.table-warning</mark>
                        ,
                        <mark>.table-danger</mark>
                        ,
                        <mark>.table-info</mark>
                        classes on the row or cells.
                    </p>
                    <table class="table table-default">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>MRP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-success">
                                <td>1</td>
                                <td>Colgate Toothpaste</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$5</td>
                                <td>$6</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pink T-Shirt</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$20</td>
                                <td>$40</td>
                            </tr>
                            <tr class="table-danger">
                                <td>3</td>
                                <td>Nike Running Shoes</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$100</td>
                                <td>$120</td>
                            </tr>
                            <tr class="table-warning">
                                <td>4</td>
                                <td>Reebok Casual Shoes</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$70</td>
                                <td>$80</td>
                            </tr>
                            <tr>
                                <td class="table-success">5</td>
                                <td>Titan Raga Premium Watch</td>
                                <td><span class="label label-success">in stock</span></td>
                                <td>$100</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Philips Hair Remover</td>
                                <td><span class="label label-danger">out of stock</span></td>
                                <td>$50</td>
                                <td class="table-danger">$70</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
@stop