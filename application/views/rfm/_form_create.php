<div class="modal-header">
    <h4 class="modal-title">TULIS RFM BARU</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
    <form id="frm-create" method="post" enctype="multipart/form-data">
        <div class="pesan"></div>
            <div class="row">       
                <div class="col-md-12">
                    <label>REQUEST TYPE :</label>
                    <select name="request_type" id="request_type" class="form-control">
                        <option disabled value="" selected="selected">- REQUEST TYPE -</option>
                            <?php foreach($request_type->result() as $r): ?>
                                <option value="<?php echo $r->id ?>"><?php echo $r->request_type ?></option>
                            <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="panel-group" id="accordion" style="margin-top: 8px">
                <div class="panel panel-default">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project_id">APPLICATION :</label>
                                <select id="project_id" class="form-control" name="project_id" style="margin-bottom: 15px" required>
                                    <option disabled value="" selected="selected">- SELECT APPLICATION -</option>
                                    <?php foreach($project_list->result() as $r): ?>
                                        <?php if ($rows->request_type == 2 || $rows->request_type == 3) {?>
                                            <?php if ($r->id > 2) {?>
                                                <option value="<?php echo $r->id ?>"><?php echo $r->project_name ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>PROBLEM TYPE :</label>
                                <select name="problem_type" id="problem_type" class="form-control" required>
                                    <option disabled selected="selected" value="">- SELECT PROBLEM TYPE -</option>
                                    <?php foreach($problem_type->result() as $r): ?>
                                        <?php if ($rows->problem_type !== $r->id) {?>
                                            <?php if ($rows->request_type == 2) {?>
                                                <?php if ($rows->project_id != 1) { ?>
                                                    <?php if ($r->id < 6 ) {?>
                                                        <option value="<?php echo $r->id ?>"><?php echo $r->problem_type ?></option>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php if ($r->id > 5 && $r->id < 9 ) {?>
                                                        <option value="<?php echo $r->id ?>"><?php echo $r->problem_type ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } else  { ?>
                                                <?php if ($rows->project_id != 2) { ?>
                                                    <?php if ($r->id > 8 && $r->id < 11) {?>
                                                        <option value="<?php echo $r->id ?>"><?php echo $r->problem_type ?></option>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php if ($r->id > 10) {?>
                                                        <option value="<?php echo $r->id ?>"><?php echo $r->problem_type ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                     </div>
                </div>

            </div>

            <div class="form-group">
                <label>SUBJECT :<?php $cc ?></label>
                <input type="text" name="subject" class="form-control" placeholder="Subject. . ." required>
            </div>

            <div class="form-group">
                <textarea style="resize: none" name="detail" class="form-control" placeholder="Detail. . ." rows="5" required></textarea>
            </div>
            <div class="form-group text-primary">
                <i class="far fa-clock"></i> <?php echo date('d-m-Y') ?>
            </div>

            <div id="files"></div>

            <div class="row">
                <div class="col-md-6">
                    Attachment: <a href="javascript:void(0)" class="btn btn-warning text-white" onclick="addFile();"><i class="fa fa-paperclip"></i></a>         
                </div>

                <div class="col-md-6 text-right">
                    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('USER_ID') ?>" readonly>
                    
                    <input type="hidden" name="kode_cabang" value="<?php echo $this->session->userdata('USER_KODE_CABANG') ?>" readonly>
                    
                    <input type="hidden" name="head_id" value="<?php echo $this->session->userdata('USER_INDUK') ?>" readonly>

                    <!-- btn_kirim -->
                    <div class="btn_post_request">
                        <a href="javascript:void(0)" onclick="post_request()" class="btn btn-success"><i class="fa fa-check"></i> Kirim</a>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
   
