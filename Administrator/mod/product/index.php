<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Master</li>
            <li class="breadcrumb-item"><a href="#">Product</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Section Product -->
  <section class="content">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal" onclick="cr('new', '0', 'product')">
                <i class="fas fa-plus"> Add New Product</i>
              </button>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $qulog="SELECT * FROM product where showing = '0'";
                    $res=mysqli_query($con, "$qulog");
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr>
                    <td class="align-middle"><?php echo $row['id'];?></td>
                    <td class="align-middle"><?php echo $row['title'];?></td>
                    <td class="align-middle"><?php echo ucfirst($row['product_category']);?></td>
                    <td class="text-center"><img src="<?php echo $row['img_url'];?>" style="max-width:100px;max-height: 100px;" /></td>
                    <td class="text-center align-middle">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModal" onclick="cr('edit', '<?php echo $row['id'];?>','product')">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mi-modal" onclick="setConf(<?php echo $row['id'];?>,'<?php echo $row['title'];?>', 'product')">
                        <i class="fas fa-trash"></i>
                      </button>
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
                  <th>Category</th>
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

  <!-- Section Product Detail -->
  <section class="content">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product Detail</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModalPd" onclick="cr('new', '0', 'product_detail')">
                <i class="fas fa-plus"> Add New Product Detail</i>
              </button>

              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Detail ID</th>
                  <th>Title</th>
                  <th>Product Header</th>
                  <th>Category</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // print_r($_GET);
                    $qulog="SELECT pd.id,p.title product_title, p.product_category, pd.title, pd.img_url FROM product_detail pd LEFT JOIN product p ON pd.product_id = p.id WHERE pd.showing = '0'";
                    // echo "$qulog";
                    $res=mysqli_query($con, "$qulog");
                    while($row=mysqli_fetch_assoc($res)){
                      // print_r($mt);
                      // echo $row['id'];
                  ?>
                  <tr>
                    <td class="align-middle"><?php echo $row['id'];?></td>
                    <td class="align-middle"><?php echo $row['title'];?></td>
                    <td class="align-middle"><?php echo $row['product_title'];?></td>
                    <td class="align-middle"><?php echo $row['product_category'];?></td>
                    <td class="text-center"><img src="<?php echo $row['img_url'];?>" style="max-width:100px;max-height: 100px;" /></td>
                    <td class="text-center align-middle">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModalPd" onclick="cr('edit', '<?php echo $row['id'];?>', 'product_detail')">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mi-modal" onclick="setConf('<?php echo $row['id'];?>','<?php echo $row['title'];?>','product_detail')">
                        <i class="fas fa-trash"></i>
                      </button>
                    </td>
                  </tr>

                  <?php
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Detail ID</th>
                  <th>Title</th>
                  <th>Product Header</th>
                  <th>Category</th>
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

  <!-- Section Product Size -->
  <section class="content">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product Size</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModalPs" onclick="cr('new', '0', 'product_size')">
                <i class="fas fa-plus"> Add New Product Size</i>
              </button>

              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // print_r($_GET);
                    $qulog="SELECT * FROM product_size where showing = '0'";
                    // echo "$qulog";
                    $res=mysqli_query($con, "$qulog");
                    while($row=mysqli_fetch_assoc($res)){
                      // print_r($mt);
                      // echo $row['id'];
                  ?>
                  <tr>
                    <td class="align-middle"><?php echo $row['title'];?></td>
                    <td class="align-middle"><?php echo $row['product_category'];?></td>
                    <td class="align-middle"><?php echo $row['description'];?></td>
                    <td class="text-center"><img src="<?php echo $row['img_url'];?>" style="max-width:100px;max-height: 100px;" /></td>
                    <td class="text-center align-middle">
                      <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i></a> -->
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                        onclick="pass('<?php //echo $row['id'];?>')">
                        <i class="fas fa-eye"></i>
                      </button> -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModalPs" onclick="cr('edit', '<?php echo $row['id'];?>', 'product_size')">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mi-modal" onclick="setConf('<?php echo $row['id'];?>', '<?php echo $row['title'];?>', 'product_size')">
                        <i class="fas fa-trash"></i>
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
                  <th>Category</th>
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


<!-- Start Modal Product -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog text-center justify-content-center">
      <div class="modal-content" style="background-color: #fff;color: #000;">
        <div class="justify-content-end mr-2">
          <button type="button text-right" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-header justify-content-center" style="border-bottom: 0px solid !important;">

          <div class=" justify-content-center text-center m-5">
            <img src="" id="img_url" class="img-pro" />
            <h5 class="color-base1 pt-3" style="width: 100%;"><strong><div id="title"></div></strong></h5>

              <div id=description></div>
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
          <h3 class="justify-content-start"><span id="stat_title"></span> Product</h3>
          <input type="text" id="id" hidden="hidden" />
        </div>
        <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="post" action="#">
              <input type="text" name="stat" id="stat" value="" hidden />
              <input type="text" name="id" id="edit_id" value="" hidden />
              <input type="text" name="id" id="edit_tb" value="" hidden />
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Product Category</label>
                    <select class="form-control select2" id="edit_product_category" name="product_category" style="width: 100%;">
                      <option>-- Pilih Product Category --</option>
                      <option value="common">Common</option>
                      <option value="elegant">Elegant</option>
                      <option value="prestige">Prestige</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title" id="edit_title" placeholder="Masukkan Judul Product Header ...">
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
                      <!-- <a class="btn btn-danger" id="ckfinder-modal-1" onclick="openPopup('edit_img_id')">Pilih Gambar</a> -->
                    </div>
                  </div>
                </div>
              </div>


            </form>
            <div class="row justify-content-end">
              <button type="button" class="btn btn-primary text-center" data-dismiss="modal" onclick="subm('product')">Submit</button>
              <!-- <button type="button" class="btn-close text-right" data-bs-dismiss="modal" aria-label="Close" style=""></button> -->
            </div>
          </div>
        </div>

      </div>

  </div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true" id="mi-modal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" name="del_id" id="del_id" value="" hidden/>
        <input type="text" name="del_tb" id="del_tb" value="" hidden/>
        <h4 class="modal-title" id="myModalLabel">Yakin Menghapus <span id="del_conf"></span> ?</h4>
      </div>
      <div class="modal-footer justify-content-between mx-5 px-5">
        <button type="button" class="btn btn-primary" id="modal-btn-si">Yakin</button>
        <button type="button" class="btn btn-default" id="modal-btn-no">Tidak Yakin</button>
      </div>
    </div>
  </div>
</div>

<div class="alert" role="alert" id="result"></div>
<!-- End Modal Product -->


<!-- Start Modal Product Detail -->

<!-- Modal Add New -->
<div id="addModalPd" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style=";color: #000;">
        <div class="modal-header justify-content-between" style="border-bottom: 0px solid !important;">
          <h3 class=""><span id="stat_title"></span> Product Detail</h3>
          <input type="text" id="id" hidden="hidden" />
        </div>
        <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="post" action="#">
              <input type="text" name="stat" id="stat_pd" value="" hidden />
              <input type="text" name="id" id="edit_id_pd" value="" hidden />
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Product Header</label>
                    <select class="form-control select2" id="edit_product_category_pd" required name="product_category" style="width: 100%;">
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title" id="edit_title_pd" required placeholder="Masukkan Judul Product Header ...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>CUP</label>
                    <textarea class="form-control" name="title" id="edit_cup" required placeholder="Masukkan Informasi Cup"></textarea>
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>CUP INCH</label>
                    <textarea class="form-control" name="title" id="edit_cup_inch" required placeholder="Masukkan Informasi Cup Inch"></textarea>
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Plate</label>
                    <textarea class="form-control" name="title" id="edit_plate" required placeholder="Masukkan Informasi Plate"></textarea>
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Plate INCH</label>
                    <textarea class="form-control" name="title" id="edit_plate_inch" required placeholder="Masukkan Informasi Plate Inch"></textarea>
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Bowl</label>
                    <textarea class="form-control" name="title" id="edit_bowl" required placeholder="Masukkan Informasi Bowl"></textarea>
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Bowl INCH</label>
                    <textarea class="form-control" name="title" id="edit_bowl_inch" required placeholder="Masukkan Informasi Bowl Inch"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Pilih Gambar ...</label>
                    <div class="row">
                      <input type="text" class="form-control col-sm-8" name="img_id" id="edit_img_id_pd" placeholder="Masukkan Link Gambar ...">
                      <button class="btn btn-default col-sm-4">
                        <a data-toggle="modal" class="btn-frame" href="responsive_filemanager/filemanager/dialog.php?type=1&field_id=edit_img_id_pd&relative_url=1&multiple=0" data-target="#addModalGallery">Pilih Gambar</a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="row justify-content-end">
              <button type="button" class="btn btn-primary text-center" data-dismiss="modal" onclick="subm('product_detail')">Submit</button>
              <!-- <button type="button" class="btn-close text-right" data-bs-dismiss="modal" aria-label="Close" style=""></button> -->
            </div>
          </div>
        </div>

      </div>

  </div>
<!-- End Modal Product -->



<!-- Modal Add New -->
<div id="addModalPs" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style=";color: #000;">
        <div class="modal-header justify-content-between" style="border-bottom: 0px solid !important;">
          <h3 class="justify-content-start">Product Size </h3>
        </div>
        <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="post" action="#">
              <input type="text" name="stat" id="stat_ps" value="" hidden />
              <input type="text" name="id" id="edit_id_ps" value="" hidden />
              <input type="text" name="id" id="edit_tb_ps" value="" hidden />
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Product Category</label>
                    <select class="form-control select2" id="edit_product_category_ps" name="product_category" style="width: 100%;">
                      <option>-- Pilih Product Category --</option>
                      <option value="common">Common</option>
                      <option value="elegant">Elegant</option>
                      <option value="prestige">Prestige</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title" id="edit_title_ps" placeholder="Masukkan Judul Product Header ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Pilih Gambar ...</label>
                    <div class="row">
                      <input type="text" class="form-control col-sm-8" name="edit_img_id_ps" id="edit_img_id_ps" placeholder="Masukkan Link Gambar ...">
                      <button class="btn btn-default col-sm-4">
                        <a data-toggle="modal" class="btn-frame" href="responsive_filemanager/filemanager/dialog.php?type=1&field_id=edit_img_id_ps&relative_url=1&multiple=0" data-target="#addModalGallery">Pilih Gambar</a>
                      </button>
                      <!-- <a class="btn btn-danger" id="ckfinder-modal-1" onclick="openPopup('edit_img_id')">Pilih Gambar</a> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" id="desc">
                <div class="col text-center ">
                  <label>Deskripsi</label>
                  <div class="form-group">
                    <textarea class="textarea" name="description" id="edit_description_ps"></textarea>
                  </div>
                </div>
              </div>
            </form>
            <div class="row justify-content-end">
              <button type="button" class="btn btn-primary text-center" data-dismiss="modal" onclick="subm('product_size')">Submit</button>
              <!-- <button type="button" class="btn-close text-right" data-bs-dismiss="modal" aria-label="Close" style=""></button> -->
            </div>
          </div>
        </div>

      </div>

  </div>


<!-- Modal Gallery -->
<div id="addModalGallery" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">
      <div class="modal-header">
        <button type="button" class="btn-close text-right" data-dismiss="modal" aria-label="Close" style="">CLOSE</button>
      </div>
      <div class="modal-content" style=";color: #000;">
        <!-- <div id="editor1" name="editor1"></div> -->
        <div class="modal-body modal-bodii">
        </div>

      </div>

  </div>
</div>
<!-- End Modal Gallery -->

<script>

  // tinymce.init({
  //   selector: 'textarea.edit_description_ps',
  //   height: 250,
  //   menubar: true,
  //   plugins: [
  //     'advlist autolink lists link image charmap print preview anchor',
  //     'insertdatetime media table paste code help wordcount'
  //   ],
  //   toolbar: 'undo redo | formatselect | ' +
  //   'bold italic backcolor | alignleft aligncenter ' +
  //   'alignright alignjustify | bullist numlist outdent indent | ' +
  //   'removeformat | help',
  //   content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
  // });
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
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#example3").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#exampler').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $(".select2").select2();
  });


  function setConf(id,nama,tb){
    document.getElementById('del_id').value = id;
    document.getElementById('del_tb').value = tb;
    document.getElementById('del_conf').innerHTML = nama;
  }

  function pass(id,tb){
    $.ajax({
				type: "GET",
				dataType: "json",
				url: "mod/GetData.php?mod="+tb+"&id="+id, //Relative or absolute path to response.php?mod=news file
				// data: data,
				success: function(data){
          if(data.status == "01"){
            alert("noData");
          }else{
            document.getElementById('description').innerHTML = data.msg['product_category'];
            document.getElementById('title').innerHTML = data.msg['title'];
            document.getElementById('img_url').src = data.msg['img_url'];
          }
				}
			});
  }

  function cr(stat, id, tb){
    alert(tb);
    if(stat == "edit"){
      $.ajax({
  				type: "GET",
  				dataType: "json",
  				url: "mod/GetData.php?mod="+tb+"&id="+id, //Relative or absolute path to response.php?mod=news file
  				success: function(data){
            if(data.status == "01"){
              alert("noData");
            }else{
              switch(tb) {
                case "product":
                  // code block
                  var options = ["common", "elegant", "prestige"];
                  var appn = "<option disabled>-- Pilih Category Product --</option>";
                  for(var i =0;i<options.length;i++){
                    if(data.msg['product_category'] == options[i]){
                      appn +="<option value="+options[i]+" selected>"+options[i].charAt(0).toUpperCase()+options[i].slice(1)+"</option>";
                    }else{
                      appn +="<option value="+options[i]+">"+options[i].charAt(0).toUpperCase()+options[i].slice(1)+"</option>";
                    }
                  }
                  document.getElementById('stat').value = stat;
                  document.getElementById('edit_tb').value = tb;
                  // document.getElementById('wew').innerHTML = "Product";
                  document.getElementById('edit_id').value = data.msg['id'];
                  document.getElementById('edit_title').value = data.msg['title'];
                  document.getElementById('edit_product_category').innerHTML = appn;
                  document.getElementById('edit_img_id').value =  data.msg['img_url'];
                  // document.getElementById('desc').style.visibility =  "hidden";

                  break;
                case "product_size":
                  // code block
                  var options = ["common", "elegant", "prestige"];
                  var appn = "<option disabled>-- Pilih Category Product --</option>";
                  for(var i =0;i<options.length;i++){
                    if(data.msg['product_category'] == options[i]){
                      appn +="<option value="+options[i]+" selected>"+options[i].charAt(0).toUpperCase()+options[i].slice(1)+"</option>";
                    }else{
                      appn +="<option value="+options[i]+">"+options[i].charAt(0).toUpperCase()+options[i].slice(1)+"</option>";
                    }
                  }
                  document.getElementById('stat_ps').value = stat;
                  alert(tb+" "+stat);
                  document.getElementById('edit_tb_ps').value = tb;
                  // document.getElementById('wew').innerHTML = "Product SIZE";
                  // document.getElementById('desc').style.visibility =  "visible";
                  document.getElementById('edit_id_ps').value = data.msg['id'];
                  document.getElementById('edit_title_ps').value = data.msg['title'];
                  document.getElementById('edit_product_category_ps').innerHTML = appn;
                  // tinymce.get("edit_description_ps").setContent(data.msg['description']);
                  $('#edit_description_ps').summernote('code', data.msg['description']);
                  // document.getElementById('edit_description_ps').innerHTML = data.msg['description'];
                  document.getElementById('edit_img_id_ps').value =  data.msg['img_url'];

                  break;
                case "product_detail":
                  // code block
                  // alert("sat");
                  var appn = "<option disabled>-- Pilih Product Header --</option>";
                  // alert(allPd.msg[0]['id']);
                  // alert("sat");
                  var appn = "<option selected disabled>-- Pilih Product Header --</option>";
                  $.ajax({
              				type: "GET",
              				dataType: "JSON",
              				url: "mod/product/GetData_Product.php", //Relative or absolute path to response.php?mod=news file
              				// data: data,
              				success: function(data_p){
                        if(data_p.status == "01"){
                          alert("noData");
                        }else{
                          for(var i=0;i<data_p['msg'].length;i++){
                            // alert(data_p.msg[i]['id'] +" ytyuii "+ data.msg['product_id']);
                            if(data_p.msg[i]['id'] == data.msg['product_id']){
                              appn += "<option selected value="+data_p.msg[i]['id']+">"+data_p.msg[i]['id']+" - "+data_p.msg[i]['title']+" - "+data_p.msg[i]['product_category']+"</option>";
                            }else{
                              appn += "<option value="+data_p.msg[i]['id']+">"+data_p.msg[i]['id']+" - "+data_p.msg[i]['title']+" - "+data_p.msg[i]['product_category']+"</option>";
                            }
                          }
                          document.getElementById('edit_product_category_pd').innerHTML = appn;
                        }
              				}
            			});

                  document.getElementById('edit_id_pd').value = data.msg['id'];
                  document.getElementById('stat_pd').value = stat;
                  document.getElementById('edit_title_pd').value = data.msg['title'];
                  document.getElementById('edit_cup').value = data.msg['cup'];
                  document.getElementById('edit_cup_inch').value = data.msg['cup_inch'];
                  document.getElementById('edit_plate').value = data.msg['plate'];
                  document.getElementById('edit_plate_inch').value = data.msg['plate_inch'];
                  document.getElementById('edit_bowl').value = data.msg['bowl'];
                  document.getElementById('edit_bowl_inch').value = data.msg['bowl_inch'];
                  document.getElementById('edit_img_id_pd').value =  data.msg['img_url'];

                  break;

                default:
                  // code block
              }
            }
  				}
  			});
    }else if(stat == 'new'){

      switch (tb) {
        case "product":
          document.getElementById('stat').value = stat;
          // document.getElementById('wew').innerHTML = "Product";
          document.getElementById('edit_tb').value = tb;
          document.getElementById('edit_id').value = '';
          document.getElementById('edit_title').value = '';
          document.getElementById('edit_img_id').value =  '';
          document.getElementById('edit_img_id').src = '';

          break;
        case "product_size":
          document.getElementById('stat_ps').value = stat;
          document.getElementById('edit_tb_ps').value = tb;
          // document.getElementById('wew').innerHTML = "Product SIZE";
          document.getElementById('edit_id_ps').value = '';
          // tinymce.get("edit_description_ps").setContent('');
          $('#edit_description').summernote('code', '');
          document.getElementById('edit_title_ps').value = '';
          document.getElementById('edit_img_id_ps').value =  '';
          document.getElementById('edit_img_id_ps').src = '';

          break;
        case "product_detail":
          var appn = "<option selected disabled>-- Pilih Product Header --</option>";
          $.ajax({
      				type: "GET",
      				dataType: "JSON",
      				url: "mod/product/GetData_Product.php", //Relative or absolute path to response.php?mod=news file
      				// data: data,
      				success: function(data_p){
                if(data_p.status == "01"){
                  alert("noData");
                }else{
                  for(var i=0;i<data_p['msg'].length;i++){
                    appn += "<option value="+data_p.msg[i]['id']+">"+data_p.msg[i]['id']+" - "+data_p.msg[i]['title']+" - "+data_p.msg[i]['product_category']+"</option>";
                  }
                  document.getElementById('edit_product_category_pd').innerHTML = appn;
                }
      				}
    			});

          document.getElementById('stat_pd').value = stat;
          document.getElementById('edit_title_pd').value = '';
          document.getElementById('edit_cup').value = '';
          document.getElementById('edit_cup_inch').value = '';
          document.getElementById('edit_plate').value = '';
          document.getElementById('edit_plate_inch').value = '';
          document.getElementById('edit_bowl').value = '';
          document.getElementById('edit_bowl_inch').value = '';
          document.getElementById('edit_img_id_pd').value = '';


          break;
        default:

      }

    }
  }

  function subm(tb){
    // alert(tb);
    // if(tb != 'product_detail'){
    //   tb= $('#edit_tb').val();
    // }
    var stat;
    switch (tb) {
      case 'product':
        stat= $('#stat').val();

        break;
      case 'product_size':
        stat= $('#stat_ps').val();
        // tb= $('#edit_tb').val();

        break;
      case 'product_detail':
        stat= $('#stat_pd').val();

        break;
      default:
        // var stat= 'aaaaaa';

    }
    alert(tb);

    // alert(tb);
    if(stat == "edit"){
      var data = {};
      switch (tb) {
        case 'product':
          data = {
            'id': $('#edit_id').val(),
            'title': $('#edit_title').val(),
            'product_category': $('#edit_product_category').val(),
            'img_url': "source/"+$('#edit_img_id').val()
          };

          break;
        case 'product_size':
          alert("BANGSAT");
          alert($('#edit_description_ps').val());
          data = {
            'id': $('#edit_id_ps').val(),
            'title': $('#edit_title_ps').val(),
            // 'description': tinymce.get("edit_description_ps").getContent(),
            'description': $('#edit_description_ps').val(),
            'product_category': $('#edit_product_category_ps').val(),
            'img_url': "source/"+$('#edit_img_id_ps').val()
          };

          break;
        case 'product_detail':
          data = {
            'id': $('#edit_id_pd').val(),
            'title': $('#edit_title_pd').val(),
            'img_url': "source/"+$('#edit_img_id_pd').val(),
            'cup': $('#edit_cup').val(),
            'cup_inch': $('#edit_cup_inch').val(),
            'plate': $('#edit_plate').val(),
            'plate_inch': $('#edit_plate_inch').val(),
            'bowl': $('#edit_bowl').val(),
            'bowl_inch': $('#edit_bowl_inch').val(),
            'product_id': $('#edit_product_category_pd').val()
          };

          break;
        default:
      }
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "mod/UpdateData.php?mod="+tb, //Relative or absolute path to response.php?mod=news file
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
      var data = {};
      switch (tb) {
        case 'product':
          data = {
            'id': $('#edit_id').val(),
            'title': $('#edit_title').val(),
            'product_category': $('#edit_product_category').val(),
            'img_url': "source/"+$('#edit_img_id').val()
          };

        break;
        case 'product_detail':
          data = {
            'id': $('#edit_id_pd').val(),
            'title': $('#edit_title_pd').val(),
            'img_url': "source/"+$('#edit_img_id_pd').val(),
            'cup': $('#edit_cup').val(),
            'cup_inch': $('#edit_cup_inch').val(),
            'plate': $('#edit_plate').val(),
            'plate_inch': $('#edit_plate_inch').val(),
            'bowl': $('#edit_bowl').val(),
            'bowl_inch': $('#edit_bowl_inch').val(),
            'product_id': $('#edit_product_category_pd').val()
          };

        break;
        case 'product_size':

          data = {
            'id': $('#edit_id_ps').val(),
            'title': $('#edit_title_ps').val(),
            // 'description': tinymce.get("edit_description_ps").getContent(),
            'description': $('#edit_description_ps').val(),
            'product_category': $('#edit_product_category_ps').val(),
            'img_url': "source/"+$('#edit_img_id_ps').val()
          };

        break;
        default:

      }
      // alert(data);
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "mod/InsertData.php?mod="+tb, //Relative or absolute path to response.php?mod=news file
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
      var tb = $('#del_tb').val();
      // alert(id);
      var data = {
        'id' :  $('#del_id').val(),
        'showing': '1'
      };
      $.ajax({
          type: "POST",
          dataType: "json",
          url: "mod/UpdateData.php?mod="+tb+"&id="+id, //Relative or absolute path to response.php?mod=news file
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
    });

</script>
