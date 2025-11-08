<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            <a href="#Menu">Menu</a> -
            <a href="#SubMenu">Sub Menu</a>
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Master</li>
            <li class="breadcrumb-item"><a href="#">Menu</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content" id="Menu">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Menu Header</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal" onclick="cr('new', '0')">
                <i class="fas fa-plus"> Add New Menu Header</i>
              </button> -->

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Navigation Title</th>
                  <th>Header Title</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // print_r($_GET);
                    $qulog="SELECT * FROM menu_header";
                    // echo "$qulog";
                    $res=mysqli_query($con, "$qulog");
                    while($row=mysqli_fetch_assoc($res)){
                      // print_r($mt);
                      // echo $row['id'];
                  ?>
                  <tr>
                    <td class="align-middle"><?php echo $row['id'];?></td>
                    <td class="align-middle"><?php echo $row['title'];?></td>
                    <td class="align-middle"><?php echo $row['menu_title'];?></td>
                    <td class="align-middle"><?php echo $row['header_title'];?></td>
                    <td class="align-middle"><?php echo $row['description'];?></td>
                    <td class="text-center"><img src="<?php echo $row['img_url'];?>" style="max-width:100px;max-height: 100px;" /></td>
                    <td class="text-center align-middle">
                      <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i></a> -->
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                        onclick="pass('<?php //echo $row['id'];?>')">
                        <i class="fas fa-eye"></i>
                      </button> -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModal" onclick="cr('edit', '<?php echo $row['id'];?>', 'menu_header')">
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
                  <th>ID</th>
                  <th>Title</th>
                  <th>Navigation Title</th>
                  <th>Header Title</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content" id="SubMenu">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Sub Menu Header</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal" onclick="cr('new', '0')">
                <i class="fas fa-plus"> Add New Menu Header</i>
              </button> -->

              <table id="sub_menu_datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sub Menu ID</th>
                  <th>Title</th>
                  <th>Header Title</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // print_r($_GET);
                    $qulog="SELECT sb.id, sb.menu_header_id, mh.header_title, mh.title as menu_title, sb.title, sb.description, sb.img_url FROM sub_menu sb LEFT JOIN menu_header mh ON sb.menu_header_id = mh.id";
                    // echo "$qulog";
                    $res=mysqli_query($con, "$qulog");
                    while($row=mysqli_fetch_assoc($res)){
                      // print_r($mt);
                      // echo $row['id'];
                  ?>
                  <tr>
                    <td class="align-middle"><?php echo $row['id'];?></td>
                    <td class="align-middle"><?php echo $row['menu_title']." > ".$row['header_title'];?></td>
                    <td class="align-middle"><?php echo $row['title'];?></td>
                    <td class="align-middle"><?php echo $row['description'];?></td>
                    <td class="text-center"><img src="<?php echo $row['img_url'];?>" style="max-width:100px;max-height: 100px;" /></td>
                    <td class="text-center align-middle">
                      <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i></a> -->
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                        onclick="pass('<?php //echo $row['id'];?>')">
                        <i class="fas fa-eye"></i>
                      </button> -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModalSub" onclick="cr('edit', '<?php echo $row['id'];?>', 'sub_menu')">
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
                  <th>Sub Menu ID</th>
                  <th>Title</th>
                  <th>Header Title</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- Modal Add New -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style=";color: #000;">
        <div class="modal-header justify-content-between" style="border-bottom: 0px solid !important;">
          <h3 class=""><span id="stat_title"></span> Menu Header</h3>
          <input type="text" id="id" hidden="hidden" />
        </div>
        <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="post" action="#">
              <input type="text" name="stat" id="stat" value="" hidden/>
              <input type="text" name="stat" id="edit_id" value="" hidden/>
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" id="edit_title" placeholder="Masukkan Title ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" id="edit_title_menu" placeholder="Masukkan Title Menu ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Header Title</label>
                    <input type="text" class="form-control" name="header_title" id="edit_header_title" placeholder="Masukkan Header Title ...">
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

                <div class="row">
                  <div class="col text-justify">
                    <label>Deskripsi</label>
                    <div class="form-group">
                      <textarea class="textarea" name="description" id="edit_description"></textarea>
                    </div>
                  </div>
                </div>
            </form>
          </div>
          <div class="row justify-content-end">
            <button type="button" class="btn btn-primary text-center mr-2" data-dismiss="modal" onclick="subm('menu_header')">Submit</button>
            <button type="button" class="btn btn-default text-center" data-dismiss="modal" aria-label="Cancel">Cancel</button>
          </div>
        </div>

      </div>

  </div>
</div>



<!-- Modal Add New -->
<div id="editModalSub" class="modal fade" role="dialog" style="overflow-y: auto !important;">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style=";color: #000;">
        <div class="modal-header justify-content-between" style="border-bottom: 0px solid !important;">
          <h3 class=""><span id="stat_title"></span>Sub Menu Header</h3>
          <!-- <input type="text" id="id2" hidden="hidden" /> -->
        </div>
        <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="post" action="#">
              <input type="text" name="stat" id="stat" value="" hidden/>
              <input type="text" name="id" id="edit_id2" value="" hidden/>
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Menu Title</label>
                    <input type="text" class="form-control" name="menu_header_title" id="edit_menu_header_title" disabled>
                    <input type="text" class="form-control" name="menu_header_id" id="edit_menu_header_id" hidden>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" id="edit_title2" placeholder="Masukkan Title ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Pilih Gambar ...</label>
                    <div class="row">
                      <input type="text" class="form-control col-sm-8" name="img_id" id="edit_img_id2" placeholder="Masukkan Link Gambar ...">
                      <button class="btn btn-default col-sm-4">
                        <a data-toggle="modal" class="btn-frame" href="responsive_filemanager/filemanager/dialog.php?type=1&field_id=edit_img_id2&relative_url=1&multiple=0" data-target="#addModalGallery">Pilih Gambar</a>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label>Deskripsi</label>
                    <div class="form-group">
                      <textarea class="textarea" name="description" id="edit_description2"></textarea>
                    </div>
                  </div>
                </div>
            </form>
          </div>
          <div class="row justify-content-end">
            <button type="button" class="btn btn-primary text-center mr-2" data-dismiss="modal" onclick="subm('sub_menu')">Submit</button>
            <button type="button" class="btn btn-default text-center" data-dismiss="modal" aria-label="Cancel">Cancel</button>
          </div>
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
    $("#sub_menu_datatable").DataTable({
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

  function cr(stat, id, tb){

    document.getElementById('stat').value = stat;

    if(tb == "menu_header"){
      $.ajax({
  				type: "GET",
  				dataType: "json",
  				url: "mod/GetData.php?mod=menu_header&id="+id+"&tab="+tb, //Relative or absolute path to response.php?mod=menu_header file
  				// data: data,
  				success: function(data){
            // alert(data.status);
            if(data.status == "01"){
              alert("noData");
            }else{
              // alert(data.msg['qualifications']);
              document.getElementById('edit_id').value = data.msg['id'];
              document.getElementById('edit_title').value = data.msg['title'];
              document.getElementById('edit_title_menu').value = data.msg['menu_title'];
              document.getElementById('edit_header_title').value = data.msg['header_title'];
              $('#edit_description').summernote('code', data.msg['description']);
              document.getElementById('edit_img_id').value =  data.msg['img_url'];
            }
          }
        });
    }else if(tb == "sub_menu"){
      $.ajax({
        type: "GET",
        dataType: "json",
        url: "mod/GetData_Sub_Menu.php?id="+id, //Relative or absolute path to response.php?mod=menu_header file
        // data: data,
        success: function(data){
          // alert(data.status);
          if(data.status == "01"){
            alert("noData");
          }else{
            // alert(data.msg['qualifications']);
            document.getElementById('edit_id2').value = data.msg['id'];
            document.getElementById('edit_title2').value = data.msg['title'];
            document.getElementById('edit_menu_header_title').value = data.msg['menu_title'];
            document.getElementById('edit_menu_header_id').value = data.msg['menu_header_id'];
            $('#edit_description2').summernote('code', data.msg['description']);
            document.getElementById('edit_img_id2').value =  data.msg['img_url'];
            // document.getElementById('edit_level2').value =  data.msg['level'];
          }
        }
      });
    }
  }
  function subm(tb){
    var stat= $('#stat').val();
    var data = {};

    if(tb=="menu_header"){
      data = {
        'id': $('#edit_id').val(),
        'title': $('#edit_title').val(),
        'menu_title': $('#edit_title_menu').val(),
        'header_title': $('#edit_header_title').val(),
        'description': $('#edit_description').val(),
        'img_url': "source/"+$('#edit_img_id').val()
      };
    }else if(tb=="sub_menu"){
      data = {
        'id': $('#edit_id2').val(),
        'title': $('#edit_title2').val(),
        'description': $('#edit_description2').val(),
        'img_url': "source/"+$('#edit_img_id2').val()
      };
    }
    $.ajax({
				type: "POST",
				dataType: "json",
				url: "mod/UpdateData.php?mod="+tb, //Relative or absolute path to response.php?mod=menu_header file
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
        url: "mod/UpdateData.php?mod=menu_header&id="+id, //Relative or absolute path to response.php?mod=menu_header file
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
