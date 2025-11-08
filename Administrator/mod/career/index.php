<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo ucfirst($_GET['mod']); ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Master</li>
            <li class="breadcrumb-item"><a href="#"><?php echo ucfirst($_GET['mod']); ?></a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo ucfirst($_GET['mod']); ?></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">

              <table id="showing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Picture</th>
                  <th>Department</th>
                  <th>Valid Hingga</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // print_r($_GET);
                    $qulog="SELECT * FROM ".$_GET['mod']." where showing = '0'";
                    // echo "$qulog";
                    $res=mysqli_query($con, "$qulog");
                    while($row=mysqli_fetch_assoc($res)){
                      // print_r($career);
                      // echo $row['id'];
                  ?>
                  <tr>
                    <td class="align-middle"><?php echo $row['title'];?></td>
                    <td class="text-center"><img src="<?php echo $row['img_id'];?>" style="max-width:100px;max-height: 100px;" /></td>
                    <td class="align-middle"><?php echo $row['department'];?></td>
                    <td class="align-middle"><?php echo $row['expire_date'];?></td>
                    <td class="text-center align-middle">
                      <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i></a> -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                        onclick="pass('<?php echo $row['id'];?>')">
                        <i class="fas fa-eye"></i>
                      </button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModal" onclick="cr('edit', '<?php echo $row['id'];?>')">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-info" onclick="javascript:if(confirm('Are you sure to not showing <?= $row['title']?> on The Web ?')){up('hide', '<?php echo $row['id'];?>')}">
                        <i class="fas fa-eye-slash"></i>
                      </button>
                    </td>
                  </tr>

                  <?php
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Title</th>
                  <th>Picture</th>
                  <th>Department</th>
                  <th>Valid Hingga</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">
              Footer
            </div> -->
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo ucfirst($_GET['mod']); ?></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">

              <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal" onclick="cr('new', '0')">
                <i class="fas fa-plus"> Add New Career!</i>
              </button>
              <table id="not_showing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Picture</th>
                  <th>Department</th>
                  <th>Valid Hingga</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // print_r($_GET);
                    $qulog="SELECT * FROM ".$_GET['mod']." where showing = '1'";
                    // echo "$qulog";
                    $res=mysqli_query($con, "$qulog");
                    while($row=mysqli_fetch_assoc($res)){
                      // print_r($career);
                      // echo $row['id'];
                  ?>
                  <tr>
                    <td class="align-middle"><?php echo $row['title'];?></td>
                    <td class="text-center"><img src="<?php echo $row['img_id'];?>" style="max-width:100px;max-height: 100px;" /></td>
                    <td class="align-middle"><?php echo $row['department'];?></td>
                    <td class="align-middle"><?php echo $row['expire_date'];?></td>
                    <td class="text-center align-middle">
                      <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i></a> -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                        onclick="pass('<?php echo $row['id'];?>')">
                        <i class="fas fa-binoculars"></i>
                      </button>
                      <button type="button" class="btn btn-info" onclick="javascript:if(confirm('Are you sure to show <?= $row['title']?> on The Web ?')){up('show', '<?php echo $row['id'];?>')}">
                        <i class="fas fa-eye-slash"></i>
                      </button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModal" onclick="cr('edit', '<?php echo $row['id'];?>')">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-danger" onclick="javascript:if(confirm('Are you sure to delete <?= $row['title']?> ?')){up('delete', '<?php echo $row['id'];?>')}">
                        <i class="fas fa-trash"></i>
                      </button>
                      <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mi-modal" onclick="setConf('<?=$row['id']?>','<?php echo $row['title'];?>')">
                      </button> -->
                    </td>
                  </tr>

                  <?php
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Title</th>
                  <th>Picture</th>
                  <th>Department</th>
                  <th>Valid Hingga</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">
              Footer
            </div> -->
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

      <div class="modal-content" style="background-color: #F2BB13;color: #000;">
        <div class="modal-header justify-content-between" style="border-bottom: 0px solid !important;">
          <input type="text" id="id" hidden="hidden" />
          <img src="" class="img-thumbnail rounded-circle img-pro2 mx-4 img-mod" id="img-mod" style="" width="100" />
          <div class="row justify-content-between" style="width: 70%;">
            <p class="col-4" style="font-size: 18px;"><strong>DEPARTEMEN: </strong> <br><span id="department"></span></p>
            <p class="col-4" style="font-size: 18px;"><strong>POSITION: </strong> <br><span id="position"></span></p>
            <p class="col-4" style="font-size: 18px;"><strong>VALID UNTIL: </strong> <br><span id="expire_date"></span></p>
            <hr style="height: 2px;">
          </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <button type="button" class="btn-close text-right" data-bs-dismiss="modal" aria-label="Close" style=""></button> -->
        </div>
        <div class="row mx-5 mb-5 justify-content-between">

          <div class="col-md-6">
            <h4 class="mb-4"><strong>Kualifikasi.</strong></h4>
            <div id="kualifikasi">
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="mb-4"><strong>Tanggung Jawab.</strong></h3>
            <div id="responsibility">
            </div>
          </div>

        </div>
        <div class="row justify-content-center mb-5">
          <button class="btn-hov3 text-center">APPLY NOW!</button>
        </div>

      </div>

  </div>
</div>


<!-- Modal Add New -->
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" style="overflow-y: auto !important;">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style=";color: #000;">
        <div class="modal-header justify-content-between" style="border-bottom: 0px solid !important;">
          <h3 class=""><span id="stat_title"></span> Career</h3>
          <input type="text" id="id" hidden="hidden" />
        </div>
        <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="post" action="#">
              <input type="text" name="stat" id="stat" value="" hidden/>
              <input type="text" name="stat" id="edit_id" value="" hidden/>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title" id="edit_title" placeholder="Masukkan Judul Karir ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="description" id="edit_description" placeholder="Masukkan Deskripsi Karir ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Departmen</label>
                    <input type="text" class="form-control" name="department" id="edit_department" placeholder="Masukkan Departmen Karir ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Posisi</label>
                    <input type="text" class="form-control" name="position" id="edit_position" placeholder="Masukkan Posisi Karir ...">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Berlaku Hingga</label>
                    <input type="text" class="form-control" name="expire_date" id="edit_expire_date" placeholder="Masukkan Tanggal Berlaku ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Pilih Gambar ...</label>
                    <div class="row">
                      <input type="text" class="form-control col-sm-8" name="img_id" id="edit_img_id" placeholder="Masukkan Link Gambar ...">
                      <button class="btn btn-default col-sm-4">
                        <a data-toggle="modal" class="btn-frame" href="responsive_filemanager/filemanager/dialog.php?type=1&field_id=edit_img_id&relative_url=1&multiple=0" data-target="#addModalGallery">Pilih Gambar</a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 ">
                  <!-- <div class="row justify-content-md-center"> -->
                    <!-- <div class="col-md-12 col-lg-8"> -->
                      <label>Kualifikasi</label>
                      <div class="form-group">
                         <textarea class="textarea" name="qualifications" id="edit_qualifications"></textarea>
                      </div>
                    <!-- </div> -->
                  <!-- </div> -->
                </div>
                <div class="col-sm-6">
                  <!-- <div class="row justify-content-md-center"> -->
                    <!-- <div class="col-md-12 col-lg-8"> -->
                      <label>Tanggung Jawab</label>
                      <div class="form-group">
                         <textarea class="textarea" name="responsibilities" id="edit_responsibilities"></textarea>
                      </div>
                    <!-- </div> -->
                  <!-- </div> -->
                </div>
              </div>
            </form>
          </div>
          <!-- <button type="button" class="btn-close text-right" data-bs-dismiss="modal" aria-label="Close" style=""></button> -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary justify-content-end" data-dismiss="modal" onclick="subm()">Submit</button>
          </div>
        </div>
      </div>

  </div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true" id="mi-modal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" name="del_id" id="del_id" value="" hidden/>
        <h4 class="modal-title" id="myModalLabel">Yakin Menghapus <span id="del_conf"></span> ?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="modal-btn-si">Hapus</button>
        <button type="button" class="btn btn-primary" id="modal-btn-no">Batal</button>
      </div>
    </div>
  </div>
</div>

<div class="alert" role="alert" id="result"></div>


<!-- Modal Gallery -->
<div id="addModalGallery" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">
      <div class="modal-header">
        <button type="button" class="btn-close text-right" data-bs-dismiss="modal" aria-label="Close" style="">CLOSE</button>
      </div>
      <div class="modal-content" style=";color: #000;">
        <div id="editor1" name="editor1"></div>
        <div class="modal-body modal-bodii">
        </div>

      </div>

  </div>
</div>
<!-- End Modal Gallery -->

<script>

  $('a.btn-frame').on('click', function(e) {
      e.preventDefault();
      var url = $(this).attr('href');
      $(".modal-bodii").html('<iframe width="100%" height="500px" frameborder="0" scrolling="yes" filechoose="yes" allowtransparency="true" src="'+url+'"></iframe>');
  });

  $(function () {
    $("#showing").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#not_showing").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });

  function setConf(id,name){
    // alert(id + "    "+ name);
    document.getElementById('del_id').value = id;
    document.getElementById('del_conf').innerHTML = name;

  }
  // function pass(id, department, position, expire_date, qualification, responsibility, img_id){
  function pass(id){
    // alert(img_id);
    // data = {id = id}
    $.ajax({
				type: "GET",
				dataType: "json",
				url: "mod/GetData.php?mod=career&id="+id, //Relative or absolute path to response.php?mod=career file
				// data: data,
				success: function(data){
          // alert(data.status);
          if(data.status == "01"){
            alert("noData");
          }else{
            // alert(data.msg['id']);
            document.getElementById('id').innerHTML = data.msg['id'];
            document.getElementById('department').innerHTML = data.msg['department'];
            document.getElementById('kualifikasi').innerHTML = data.msg['qualifications'];
            document.getElementById('responsibility').innerHTML = data.msg['responsibilities'];
            document.getElementById('position').innerHTML = data.msg['position'];
            document.getElementById('expire_date').innerHTML = data.msg['expire_date'];
            document.getElementById('img-mod').src = data.msg['img_id'];
          }
				}
			});
  }

  function cr(stat, id){

    document.getElementById('stat').value = stat;

    if(stat == "edit"){
      $.ajax({
  				type: "GET",
  				dataType: "json",
  				url: "mod/GetData.php?mod=career&id="+id, //Relative or absolute path to response.php?mod=career file
  				// data: data,
  				success: function(data){
            // alert(data.status);
            if(data.status == "01"){
              alert("noData");
            }else{
              // alert(data.msg['qualifications']);
              document.getElementById('edit_id').value = data.msg['id'];
              document.getElementById('edit_title').value = data.msg['title'];
              document.getElementById('edit_description').value = data.msg['description'];
              document.getElementById('edit_department').value = data.msg['department'];

              $('#edit_qualifications').summernote('code', data.msg['qualifications']);
              $('#edit_responsibilities').summernote('code', data.msg['responsibilities']);

              document.getElementById('edit_position').value = data.msg['position'];
              document.getElementById('edit_expire_date').value = data.msg['expire_date'];
              document.getElementById('edit_img_id').src = '<?php echo $base_url; ?>'+data.msg['img_id'].replace('source/','');
              document.getElementById('edit_img_id').value =  data.msg['img_id'].replace('source/','');
            }
  				}
  			});
    }else if(stat == 'new'){
      document.getElementById('edit_id').value = '';
      document.getElementById('edit_title').value = '';
      document.getElementById('edit_description').value = '';
      document.getElementById('edit_department').value = ''

      $('#edit_qualifications').summernote('code', '');
      $('#edit_responsibilities').summernote('code', '');

      document.getElementById('edit_position').value = '';
      document.getElementById('edit_expire_date').value = '';
      document.getElementById('edit_img_id').src = '';
      document.getElementById('edit_img_id').value =  '';
    }
  }
  function subm(){

    var stat= $('#stat').val();

    if(stat == "edit"){
      var data = {
        'id': $('#edit_id').val(),
        'title': $('#edit_title').val(),
        'description': $('#edit_description').val(),
        'img_id': "source/"+$('#edit_img_id').val(),
        'qualifications': $('#edit_qualifications').val(),
        'responsibilities': $('#edit_responsibilities').val(),
        'department': $('#edit_department').val(),
        'position': $('#edit_position').val(),
        'expire_date': $('#edit_expire_date').val()
      };
      $.ajax({
  				type: "POST",
  				dataType: "json",
  				url: "mod/UpdateData.php?mod=career", //Relative or absolute path to response.php?mod=career file
  				data: data,
  				success: function(data){
            // alert(data.status);
            if(data.status == "01"){
              alert(data.msg);
            }else{
              alert(data.msg);
              location.reload();

            }
  				}
  			});
    }else if(stat == "new"){
      // alert(stat);
      var data = {
        // 'id': $('#edit_id').val(),
        'title': $('#edit_title').val(),
        'description': $('#edit_description').val(),
        'img_id': "source/"+$('#edit_img_id').val(),
        'qualifications': $('#edit_qualifications').val(),
        'responsibilities': $('#edit_responsibilities').val(),
        'department': $('#edit_department').val(),
        'position': $('#edit_position').val(),
        'expire_date': $('#edit_expire_date').val()
      };
      $.ajax({
  				type: "POST",
  				dataType: "json",
  				url: "mod/InsertData.php?mod=career", //Relative or absolute path to response.php?mod=career file
  				data: data,
  				success: function(data){
            // alert(data.status);
            if(data.status == "01"){
              alert(data.msg);
            }else{
              alert(data.msg);
              location.reload();
            }
  				}
  			});
    }
  }
  function up(stat, id){
    switch (stat) {
      case 'show':
        var data = {
          'id': id,
          'showing' : '0'
        };
        // alert("Success! " + stat);
        break;
      case 'hide':
        var data = {
          'id': id,
          'showing' : '1'
        };
        // alert("Success! " + stat);
        break;
      case 'delete':
        var data = {
          'id': id,
          'showing' : '2'
        };
        // alert("Success! " + stat);
        break;

      default:

    }
    $.ajax({
				type: "POST",
				dataType: "json",
				url: "mod/UpdateData.php?mod=career", //Relative or absolute path to response.php?mod=career file
				data: data,
				success: function(data){
          // alert(data.status);
          if(data.status == "01"){
            alert(data.msg);
          }else{
            alert(data.msg);
            location.reload();

          }
				}
			});
  }
  var modalConfirm = function(callback){

    $("#btn-confirm").on("click", function(){
      $("#mi-modal").modal('show');
    });

    $("#modal-btn-si").on("click", function(){
      callback(true);
      $("#mi-modal").modal('hide');
    });

    $("#modal-btn-no").on("click", function(){
      callback(false);
      $("#mi-modal").modal('hide');
    });
  };

  modalConfirm(function(confirm){
    if(confirm){

      var id = $('#del_id').val();
      var data = {
        'id' :  $('#del_id').val(),
        'showing': '1'
      };
      $.ajax({
          type: "POST",
          dataType: "json",
          url: "mod/UpdateData.php?mod=career&id="+id, //Relative or absolute path to response.php?mod=career file
          data: data,
          success: function(data){
            // alert(data.status);
            if(data.status == "01"){
              alert(data.msg);
            }else{
              alert(data.msg);
              location.reload();

            }
          }
        });

      // $("#result").html("Berh");
    }
  });
</script>
