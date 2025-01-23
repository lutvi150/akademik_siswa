@extends('layout.template')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Siswa</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Rekap Data Siswa</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <a href="{{ route('admin.add-siswa') }}" class="btn btn-success btn-sm"><i class="fa fa-pluas"></i> Tambah Data Siswa</a>
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Nomor Induk/ NISN</th>
                    <th>Tempat / Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status Dalam Keluarga</th>
                    <th>Anak Ke-</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ERLINA WULANDARI</td>
                        <td>9113 / 0037817477</td>
                        <td>TUMBANG ATEI, 28 Agustus 2003</td>
                        <td>
                            <label for="" class="label label-success">Perempuan</label>
                            <label for="" class="label label-danger">Laki-Laki</label>
                        </td>
                        <td>
                            <label for="" class="label label-success">Islam</label>
                        </td>
                        <td>
                            Anak Kandung
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            Alamat
                        </td>
                        <td>
                            <button class="btn btn-info btn-sm"><i class="fa fa-search"></i> Detail</button>
                            <button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection