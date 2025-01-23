@extends('layout.template')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3 class="head-form">Tambah Siswa</h3>
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
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h class="head-row-form">Tambah Siswa</h2>
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
              <form class="form-horizontal form-label-left">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-danger e_nama_siswa"></small>
                  </div>
                  <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <textarea name="tempat_lahir" class="form-control" id="tempat_lahir"></textarea>
                    <small id="helpId" class="text-danger e_tempat_lahir"></small>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-danger e_tanggal_lahir"></small>
                  </div>
                  <div class="form-group">
                    <label for="">Anak Ke-</label>
                    <input type="number" name="anak_ke" id="anak_ke" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-danger e_anak_ke"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nomor Induk</label>
                    <input type="text" name="nomor_induk" id="nomor_induk" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-danger e_nomor_induk"></small>
                  </div>
                  <div class="form-group">
                    <label for="">NISN</label>
                    <input type="text" name="nisn" id="nisi" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-danger e_nisn"></small>
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                    <small id="helpId" class="text-danger e_jenis_kelamin"></small>
                  </div>
                  <div class="form-group">
                    <label for="">Status Dalam Kelaur</label>
                    <select class="form-control" name="status" id="status" >
                      <option value="1">Anak Kandung</option>
                      <option value="2">Anak Tiri</option>
                      <option value="3">Anaka Angkat</option>
                    </select>
                    <small id="helpId" class="text-danger e_status"></small>
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="button" class="btn btn-primary">Kembali</button>                    
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection