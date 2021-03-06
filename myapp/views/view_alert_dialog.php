<script>
    function myalert(dialogtitle, dialogtext) {
        $('#myalert-dialog').addClass('modal-sm');
        $('#alert-title').html(dialogtitle);
        $('#alert-text').html(dialogtext);
        $('#alert-dialog').modal('show');
    }

    function myalert_large(dialogtitle, dialogtext) {
        $('#myalert-dialog').removeClass('modal-sm');
        $('#alert-title').html(dialogtitle);
        $('#alert-text').html(dialogtext);
        $('#alert-dialog').modal('show');
    }
</script>

<!-- Generic alert dialog -->
<div id="alert-dialog" class="modal fade">
  <div class="modal-dialog" id="myalert-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-between">
        <div><h4 class="modal-title" id="alert-title">&nbsp;</h4></div>
        <div><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
      </div>
      <div class="modal-body">
        <span class="fas fa-exclamation-triangle" style="float:left; margin:0 7px 20px 0;" aria-hidden="true"></span>
        <span id="alert-text"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal"><?= $this->lang->line('OK_button') ?></button>
      </div>
    </div>
  </div>
</div>

