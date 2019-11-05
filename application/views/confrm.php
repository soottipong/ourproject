<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer bg-whitesmoke br">
			  <a class="btn btn-default pull-left" href="<?= base_url($backlink) ?>" role="button">
								ไม่ใช่
							</a>
							<a class="btn btn-primary" href="<?= base_url($locklink) ?>" role="button">
								ใช่ ยืนยันการลบ
							</a>
              </div>
            </div>
          </div>
</div>

<?php $this->load->view('_partials/footer'); ?>