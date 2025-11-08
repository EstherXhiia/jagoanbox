<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <!-- <a href="responsive_filemanager/filemanager/dialog.php?type=0" class="btn iframe-btn" type="button">Open Filemanager</a> -->
        <a data-toggle="modal" class="btn-frame" href="responsive_filemanager/filemanager/dialog.php?type=0" data-target="#addModal">click me</a>
      </div>
    </div><!-- /.container-fluid -->

    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModal" onclick="">
      <i class="fas fa-edit"></i>
    </button>
  </section>


</div>

<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">
      <div class="modal-content" style=";color: #000;">
        <div id="editor1" name="editor1"></div>
        <!-- <div class="modal-header justify-content-between" style="border-bottom: 0px solid !important;">
          <h3 class=""><span id="stat_title"></span> Menu Header</h3>
          <input type="text" id="id" hidden="hidden" />
        </div>-->
        <div class="modal-body"><!--
            <?php //include("responsive_filemanager/filemanager/dialog.php?type=0"); ?>
          <div class="row justify-content-end">
            <button type="button" class="btn btn-primary text-center mr-2" data-dismiss="modal" onclick="subm('menu_header')">Submit</button>
            <button type="button" class="btn btn-default text-center" data-dismiss="modal" aria-label="Cancel">Cancel</button>
          </div>-->
        </div>

      </div>

  </div>
</div>


<script type="text/javascript">
    // CKEDITOR.replace( 'editor1' ,{
    //   filebrowserBrowseUrl : 'responsive_filemanager/filemanager/dialog.php?type=0',
    // 	filebrowserUploadUrl : 'responsive_filemanager/filemanager/dialog.php?type=0',
    // 	filebrowserImageBrowseUrl : 'responsive_filemanager/filemanager/dialog.php?type=0'
    // });

    $('a.btn-frame').on('click', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $(".modal-body").html('<iframe width="100%" height="500px" frameborder="0" scrolling="yes" allowtransparency="true" src="'+url+'"></iframe>');
    });

</script>
