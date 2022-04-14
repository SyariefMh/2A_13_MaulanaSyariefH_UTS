<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
                        <th style="width: 70px">NAMA</th>
                        <th >DETAIL</th>
                        <th >HARGA</th>
                        <th width="130px" class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 0 ?>
                      <form action="insert" method="POST">
                          @csrf
                      <tr>
                        <td class="text-center" width="3%">{{ ++$i }}</td>
                        <td><input type="text" name="nama" id=""></td>
                        <td><input type="text" name="detail" id=""></td>
                        <td><input type="text" name="harga" id=""></td>
                        <td class="text-center">
                          <button>
                            <a class="nav-link">submit</a>
                          </button>
                        </td>
                      </tr>
                    </form>
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