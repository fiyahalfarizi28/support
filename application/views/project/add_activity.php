<div class="modal-header">
    <h4 class="modal-title">ADD DAILY ACTIVITY</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
    <?php 
        $selectProjectType = '<select id="project_id" name="project_id" class="form-control" disabled required>';
        $selectTargetType = '<select id="target_date" name="target_date" class="form-control" disabled required>';        
    ?>
    <form id="frm-activity" method="post" enctype="multipart/form-data">
        <div class="pesan"></div>
        <div class="row">
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
                <label style="margin-top: 8px">TARGET DATE :</label>
                <?php echo $selectTargetType?>
                    <?php
                        $this->db->where('id', $rows->target_date);
                        $targetDate = $this->db->get(TB_TASK)->row();
                    ?>
                    <option value="<?php echo date("d-m-Y",strtotime( $rows->target_date))?>"><?php echo date("d-m-Y",strtotime( $targetDate->target_date)) ?></option>
                </select>
            </div>

            <div class="form-group">
                <label style="margin-top: 8px">TASK :</label>
                <input type="text" name="taskname" class="form-control" placeholder="Task. . ." value="<?php echo $rows->task_name ?>" required <?php echo $readonly ?>>
            </div>

            <div class="form-group">
                <textarea name="detail" class="form-control" style="resize: none" placeholder="Detail. . ." rows="5" required <?php echo $readonly ?>><?php echo $rows->detail ?></textarea>
            </div>

            <input type="hidden" name="id" value="<?php echo $rows->id ?>">
    </form>
</div>