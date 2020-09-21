<div class="modal-header">
    <h4 class="modal-title">APPROVE RFM</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">

    <?php     
        if ( $rows->request_status == STT_APPROVED) {
            $selectProjectType = '<select id="project_id" name="project_id" class="form-control" required>';
            $selectRequestType = '<select id="request_type" name="request_type" class="form-control" required>';
            $selectProblemType = '<select id="problem_type" name="problem_type" class="form-control" required>';
        } else {
            $selectProjectType = '<select id="project_id" name="project_id" class="form-control" required>';
            $selectRequestType = '<select id="request_type" name="request_type" class="form-control" required>';
            $selectProblemType = '<select id="problem_type" name="problem_type" class="form-control" required>';
        }
    ?>

    <form id="frm-daily" method="post" enctype="multipart/form-data">
        <div class="pesan"></div>
        <div class="row">
                <div class="col-md-12">
                    <label>REQUEST TYPE :</label>
                    <?php echo $selectRequestType?>
                        <?php
                            $this->db->where('id', $rows->problem_type);
                            $pt_id = $this->db->get(TB_PROBLEM_TYPE)->row();
                            
                            $this->db->where('id', $rows->request_type);
                            $rt_id = $this->db->get(TB_REQUEST_TYPE)->row();
                        ?>
                        <option value="<?php echo $rows->request_type ?>"><?php echo $rt_id->request_type ?></option>
                    </select>
                </div>

                <div class="col-md-6">
                <label style="margin-top: 8px">APPLICATION :</label>
                    <?php echo $selectProjectType?>
                        <?php
                            $this->db->where('id', $rows->project_id);
                            $projectList = $this->db->get(TB_PROJECT)->row();
                        ?>
                        <option value="<?php echo $rows->project_id ?>"><?php echo $projectList->project_name ?></option>
                    </select>
                </div>

                <div class="col-md-6">           
                <label style="margin-top: 8px">PROBLEM TYPE :</label> 
                    <?php echo $selectProblemType?>
                        <option value="<?php echo $rows->problem_type ?>"><?php echo $pt_id->problem_type ?></option>
                    </select>
                </div>

                <?php if ($rows->risk_type != NULL ) { ?>
                    <div class="col-md-12">
                        <label style="margin-top: 8px">MEMPENGARUHI FINANCIAL :</label>
                        <select disabled id="risk_type"name="risk_type" class="form-control" required>
                            <option value="<?php echo $rows->risk_type ?>"><?php echo $rows->risk_type ?></option>
                        </select>
                    </div>
                <?php } ?>
        </div>

        <div class="form-group">
            <label style="margin-top: 8px">SUBJECT :</label>
            <input type="text" name="subject" class="form-control" placeholder="Subject. . ." value="<?php echo $rows->subject ?>" required <?php echo $readonly ?>>
        </div>

        <div class="form-group">
            <textarea name="detail" class="form-control" style="resize: none" placeholder="Detail. . ." rows="5" required <?php echo $readonly ?>><?php echo $rows->rfm_detail ?></textarea>
        </div>
        <div class="form-group text-primary">
            <i class="far fa-clock"></i> <?php echo date('d-m-Y') ?>
        </div>

        <div class="form-group">
            <?php
                $no = 1;
                $this->db->where('rfm_id', $rows->id);
                $qAtt = $this->db->get(TB_ATTACHMENT_RFM);
                foreach($qAtt->result() as $rAtt){
                    $nama_file = $rAtt->filename;
                    $explode_file_ext = explode(".", $nama_file);
                    $file_ext = $explode_file_ext[1];
                    if($file_ext =='jpg' or $file_ext =='jpeg' or $file_ext =='png' or $file_ext =='PNG' or $file_ext =='gif' or $file_ext =='GIF'){
            ?>
                    <span id="name_id<?php echo $rAtt->id ?>">
                        <a title="<?php echo $rAtt->filename ?>" target="_blank" href="<?php echo $rAtt->data_file ?>" class=""><i class="far fa-image fa-2x"></i></a>
                    </span>
            <?php
                }elseif($file_ext =='docx' or $file_ext =='docm' or $file_ext =='dotx' or $file_ext =='dotm'){
            ?>
                    <span id="name_id<?php echo $rAtt->id?>">
                        <a title="<?php echo $rAtt->filename?>" target="_blank" href="<?php echo $rAtt->data_file?>" class=""><i class="far fa-file-word fa-2x"></i></a>
                    </span>
            <?php
                }elseif($file_ext =='xlsx' or $file_ext =='xlsm' or $file_ext =='xltx' or $file_ext =='xltm' or $file_ext =='xlsb' or $file_ext =='xlam'){
            ?>
                    <span id="name_id<?php echo $rAtt->id?>">
                        <a title="<?php echo $rAtt->filename?>" target="_blank" href="<?php echo $rAtt->data_file?>" class=""><i class="far fa-file-excel fa-2x"></i></a>
                    </span>
            <?php
                }else{
            ?>
                    <span id="name_id<?php echo $rAtt->id?>">
                        <a title="<?php echo $rAtt->filename?>" target="_blank" href="<?php echo $rAtt->data_file?>" class=""><i class="far fa-file fa-2x"></i></a>
                        </label>
                    </span>
            <?php
                    }
                }
            ?>
        </div>
        
        <?php if(!empty($rows->approve_notes)): ?>
        <div class="form-group">
            <label>Notes : <?php echo $notes_name_approve->nama." | ".$rows->approve_date ?></label>
            <textarea placeholder="Notes..." rows="2" class="form-control" style="resize: none" readonly><?php echo $rows->approve_notes ?></textarea>
        </div>
        <?php endif ?>
        
        <?php if(!empty($rows->receive_notes)): ?>
        <div class="form-group">
            <label>Notes : <?php echo $notes_name_receive->nama." | ".$rows->receive_date ?></label>
            <textarea placeholder="Notes..." rows="2" class="form-control" style="resize: none" readonly><?php echo $rows->receive_notes ?></textarea>
        </div>
        <?php endif ?>

        <?php if(!empty($rows->confirm_notes)): ?>
        <div class="form-group">
            <label>Notes Revisi: <?php echo $notes_name_confirm->nama ?></label>
            <textarea placeholder="Notes..." rows="2" class="form-control" style="resize: none" readonly><?php echo $rows->confirm_notes ?></textarea>
        </div>
        <?php endif ?>
    </form>
</div>
