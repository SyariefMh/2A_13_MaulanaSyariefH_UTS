<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="produk">TAMBAH</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <!-- Chart Canvas Top Player -->
              <div class="card">
                <div class="card-body p-0">
                  <!-- <table id="example3" class="table table-bordered table-striped"> -->
                  <table id="findTable2" class="table table-sm">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th >Kode</th>
                        <th >NAMA</th>
                        <th >Detail</th>
                        <th >HARGA</th>
                        <th >GAMBAR</th>
                        <th width="130px" class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 0 ?>
                      @foreach ($data as $item)
                      <tr>
                        <td class="text-center" width="3%">{{ ++$i }}</td>
                        <td>{{ $item->id }} </td>
                        <td>{{ $item->nama }} </td>
                        <td>{{ $item->detail }} </td>
                        <td>{{ $item->harga }} </td>
                        <td><img src="css/{{ $item->Gambar }}" alt="" srcset="" class="ml-lg-5 order-1 order-lg-2"></td> 
                        <td class="text-center">
                          <a href="" value="{{ $item->id }}" class="InfoBtn btn-warning btn-xs" data-toggle="modal" data-target="#infoDetail" data-placement="top" title="Info Detail">
                          <i class="fa fa-info-circle"></i> Info</a>
                          <a href="" value="{{ $item->id }}" class="EditBtn btn-primary btn-xs" data-toggle="modal" data-target="#EditModal" data-placement="top" title="Koreksi Data">
                          <i class="fa fa-edit"></i> Edit</a>
                          <a href="" value="{{ $item->id }}" class="DelBtn btn-secondary btn-xs" data-toggle="modal" data-target="#DelRecModal" data-placement="top" title="Data tidak boleh dihapus">
                          <i class="fa fa-trash"></i> Del</a>
                          
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->