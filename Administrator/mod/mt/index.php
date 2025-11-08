<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Management Training</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Master</li>
            <li class="breadcrumb-item"><a href="#">!</a></li>
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
              <h3 class="card-title">Management Training</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal" onclick="cr('new', '0')">
                <i class="fas fa-plus"> Add New Management Training!</i>
              </button> -->

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Picture</th>
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
                      // print_r($mt);
                      // echo $row['id'];
                  ?>
                  <tr>
                    <td class="align-middle"><?php echo $row['title'];?></td>
                    <td class="align-middle"><?php echo $row['description'];?></td>
                    <td class="text-center"><img src="<?php echo $row['img_url'];?>" style="max-width:100px;max-height: 100px;" /></td>
                    <td class="text-center align-middle">
                      <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i></a> -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                        onclick="pass('<?php echo $row['id'];?>')">
                        <i class="fas fa-eye"></i>
                      </button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModal" onclick="cr('edit', '<?php echo $row['id'];?>')">
                        <i class="fas fa-edit"></i>
                      </button>
                      <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mi-modal" onclick="setConf('<?php //echo $row['id'];?>')">
                        <i class="fas fa-trash"></i>
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
                  <th>Description</th>
                  <th>Picture</th>
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
  <div class="modal-dialog text-center justify-content-center">
      <div class="modal-content" style="background-color: #fff;color: #000;">
        <div class="justify-content-end mr-2">
          <button type="button text-right" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-header justify-content-center" style="border-bottom: 0px solid !important;">

          <div class="color-base1 text-center m-5">
            <img src="" id="img_url" class="img-pro" />
            <h5 class="color-base1 pt-3" style="width: 100%;"><strong><div id="title"></div></strong></h5>
            <em>
              <div id=description></div>
            </em>
          </div>
        </div>
      </div>
  </div>
</div>


<!-- Modal Add New -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style=";color: #000;">
        <div class="modal-header justify-content-between" style="border-bottom: 0px solid !important;">
          <h3 class=""><span id="stat_title"></span> Management Training</h3>
          <input type="text" id="id" hidden="hidden" />
        </div>
        <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="post" action="#">
              <input type="text" name="stat" id="stat" value="" hidden/>
              <input type="text" name="stat" id="edit_id" value="" hidden />
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title" id="edit_title" placeholder="Masukkan Judul Karir ...">
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

                <div class="col text-center ">
                  <label>Deskripsi</label>
                  <div class="form-group">
                    <textarea class="textarea" name="description" id="edit_description"></textarea>
                  </div>
                </div>
            </form>
          </div>
          <div class="row text-center">
            <button type="button" class="btn btn-primary text-center" data-dismiss="modal" onclick="subm()">Submit</button>
            <!-- <button type="button" class="btn-close text-right" data-bs-dismiss="modal" aria-label="Close" style=""></button> -->
          </div>
        </div>

      </div>

  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true" id="mi-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" name="del_id" id="del_id" value="" />
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Yakin Menghapus <span id="del_conf"></span> ?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="modal-btn-si">Yakin</button>
        <button type="button" class="btn btn-primary" id="modal-btn-no">Tidak Yakin</button>
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
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  function setConf(id){
    document.getElementById('del_id').value = id;

  }
  // function pass(id, department, position, expire_date, qualification, responsibility, img_id){
  function pass(id){
    // alert(img_id);
    // data = {id = id}
    $.ajax({
				type: "GET",
				dataType: "json",
				url: "mod/GetData.php?mod=mt&id="+id, //Relative or absolute path to response.php?mod=mt file
				// data: data,
				success: function(data){
          // alert(data.status);
          if(data.status == "01"){
            alert("noData");
          }else{
            // alert(data.msg['id']);
            // document.getElementById('id').innerHTML = data.msg['id'];
            document.getElementById('description').innerHTML = data.msg['description'];
            document.getElementById('title').innerHTML = data.msg['title'];
            document.getElementById('img_url').src = data.msg['img_url'];
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
  				url: "mod/GetData.php?mod=mt&id="+id, //Relative or absolute path to response.php?mod=mt file
  				// data: data,
  				success: function(data){
            // alert(data.status);
            if(data.status == "01"){
              alert("noData");
            }else{
              // alert(data.msg['qualifications']);
              document.getElementById('edit_id').value = data.msg['id'];
              document.getElementById('edit_title').value = data.msg['title'];
              $('#edit_description').summernote('code', data.msg['description']);
              document.getElementById('edit_img_id').value =  data.msg['img_url'].replace('source/','');
            }
  				}
  			});
    }else if(stat == 'new'){
      document.getElementById('edit_id').value = '';
      document.getElementById('edit_title').value = '';
      document.getElementById('edit_description').value = '';
      document.getElementById('edit_department').value = ''

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
        'img_url': "source/"+$('#edit_img_id').val()
      };
      $.ajax({
  				type: "POST",
  				dataType: "json",
  				url: "mod/UpdateData.php?mod=mt", //Relative or absolute path to response.php?mod=mt file
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
        'img_url': "source/"+$('#edit_img_id').val(),
      };
      $.ajax({
  				type: "POST",
  				dataType: "json",
  				url: "mod/InsertData.php?mod=mt", //Relative or absolute path to response.php?mod=mt file
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
        url: "mod/UpdateData.php?mod=mt&id="+id, //Relative or absolute path to response.php?mod=mt file
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
