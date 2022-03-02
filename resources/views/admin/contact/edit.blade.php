@extends('layouts.app')
@section('title', 'container')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form edit </strong> Contact Us
                            </div>
                            <div class="card-body card-block">
                                <form action="{{route('contact.update', $contact->id)}}" method="post" class="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="hf-email" class=" form-control-label">Nama</label>
                                            <input type="text" name="nama" class="form-control" value="{{ $contact->nama }}">
                                    </div>
                                    <div class="form-group">
                                            <label for="hf-email" class=" form-control-label">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $contact->email }}">
                                    </div>
                                    <div class="form-group">
                                            <label for="hf-password" class=" form-control-label">Pesan</label>
                                            <textarea name="pesan" class="form-control">{{ $contact->pesan }}</textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @extends('layouts.app')
@section('title', 'container')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>date</th>
                                    <th>type</th>
                                    <th>description</th>
                                    <th>status</th>
                                    <th>price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>iPhone X 64Gb Grey</td>
                                    <td class="process">Processed</td>
                                    <td>$999.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-28 01:22</td>
                                    <td>Mobile</td>
                                    <td>Samsung S8 Black</td>
                                    <td class="process">Processed</td>
                                    <td>$756.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-27 02:12</td>
                                    <td>Game</td>
                                    <td>Game Console Controller</td>
                                    <td class="denied">Denied</td>
                                    <td>$22.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-26 23:06</td>
                                    <td>Mobile</td>
                                    <td>iPhone X 256Gb Black</td>
                                    <td class="denied">Denied</td>
                                    <td>$1199.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-25 19:03</td>
                                    <td>Accessories</td>
                                    <td>USB 3.0 Cable</td>
                                    <td class="process">Processed</td>
                                    <td>$10.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Accesories</td>
                                    <td>Smartwatch 4.0 LTE Wifi</td>
                                    <td class="denied">Denied</td>
                                    <td>$199.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-24 19:10</td>
                                    <td>Camera</td>
                                    <td>Camera C430W 4k</td>
                                    <td class="process">Processed</td>
                                    <td>$699.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-22 00:43</td>
                                    <td>Computer</td>
                                    <td>Macbook Pro Retina 2017</td>
                                    <td class="process">Processed</td>
                                    <td>$10.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}