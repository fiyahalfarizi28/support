<div class="card mb-3" id="table" style="margin-top: 15px">
    <div class="card-header" >
        <b>DAILY ACTIVITY DEPARTMENT IT</b>
    </div>
    <div class="card-body">
    <!-- table table-bordered table-hover -->
        <table class="colapse-table res3"  width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th>HARI</th>
                    <th>TANGGAL</th>
					<th>WAKTU</th>
					<th>PROJECT</th>
					<th>TASK</th>
					<th>RFM</th>
                    <th>STATUS</th>
                    <th>KETERANGAN</th>
                    <th>PIC</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $ITList = $this->db->get(TB_USER)->result();
                    $projectList = $this->db->get(TB_PROJECT)->result();
                    $taskList = $this->db->get(TB_TASK)->result();
                    $rfmList = $this->db->get(TB_DETAIL)->result();
                ?>

                <?php foreach($ITList as $r): ?>
                    
                    <?php 
                        $this->db->where('user_id', $r->user_id);
                        $this->db->where('date_activity', date('Y-m-d'));
                        $this->db->order_by('last_update DESC');
                        $specificDailyActivity = $this->db->get(TB_DAILY_ACTIVITY)->result();
                    ?>
                    
                    <?php if (count($specificDailyActivity) > 0) { ?>
                        <?php foreach($specificDailyActivity as $row): ?>
                            <?php if (array_search($row, $specificDailyActivity) == 0) {?>
                                <tr>
                                    <td style="text-align: center"><i data-toggle="collapse" data-target=<?php echo "#".$r->user_id?> style=" color: #28a745; background-color: #f4fbff" class="fa fa-plus-circle" aria-hidden="true"></i></td>
                                    <td>
                                        <?php
                                            $hari = date('l',strtotime($row->date_activity));
                                            switch($hari){
                                                case 'Sunday':
                                                    $hari = "Minggu";
                                                break;
                                        
                                                case 'Monday':			
                                                    $hari = "Senin";
                                                break;
                                        
                                                case 'Tuesday':
                                                    $hari = "Selasa";
                                                break;
                                        
                                                case 'Wednesday':
                                                    $hari = "Rabu";
                                                break;
                                        
                                                case 'Thursday':
                                                    $hari = "Kamis";
                                                break;
                                        
                                                case 'Friday':
                                                    $hari = "Jumat";
                                                break;
                                        
                                                case 'Saturday':
                                                    $hari = "Sabtu";
                                                break;
                                                
                                                default:
                                                    $hari= "Tidak di ketahui";		
                                                break;
                                            }
                                            echo $hari;
                                        ?>
                                    </td>
                                    <td><?php echo date("d-m-Y",strtotime( $row->date_activity)) ?></td>
                                    <td><?php echo date("H:i",strtotime( $row->last_update)) ?></td>
                                    <td>
                                        <?php 
                                            // $data = json_encode($projectList->result());
                                            // echo "<script>console.log($data);</script>";
                                            $tableDataProjectName = null;
                                            if (!empty($row->project_id))
                                            {
                                                foreach($projectList as $rowProject):
                                                    if ($row->project_id == $rowProject->id) {
                                                        $tableDataProjectName = $rowProject->project_name;
                                                        break;
                                                    }
                                                endforeach;
                                            }
                                            else {
                                                $tableDataProjectName = "-";
                                            }
                                            echo $tableDataProjectName;
                                        ?>
                                    </td>
                                    <td>
                                        <?php $tableTaskName = null;
                                            if (!empty($row->task_id))
                                            {
                                                foreach($taskList as $rowTask):
                                                    if ($row->task_id == $rowTask->id) {
                                                        $tableTaskName = $rowTask->task_name;
                                                        break;
                                                    }
                                                endforeach;
                                            }
                                            else {
                                                $tableTaskName = "-";
                                            }
                                            echo $tableTaskName;
                                        ?>
                                    </td>            
                                    <td>
                                        <?php $tableDataNoRFM = null;
                                            if (!empty($row->rfm_id))
                                            {
                                                foreach($rfmList as $rowRfm):
                                                    if ($row->rfm_id == $rowRfm->id) {
                                                        $tableDataNoRFM = $rowRfm->no_rfm;
                                                        break;
                                                    }
                                                endforeach;
                                            }
                                            else {
                                                $tableDataNoRFM = "-";
                                            }
                                            echo $tableDataNoRFM;
                                        ?>
                                    </td>
                                    <td><?php echo $row->status ?></td>
                                    <td><?php echo $row->keterangan ?></td>
                                    <td><?php echo $r->nama ?></td>
                                </tr>
                            <?php } ?>
                        <?php endforeach ?>
                        <tr id=<?php echo $r->user_id?> class="collapse">
                            <td colspan="10">
                                <p>
                                    <table style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>HARI</th>
                                            <th>TANGGAL</th>
                                            <th>WAKTU</th>
                                            <th>PROJECT</th>
                                            <th>TASK</th>
                                            <th>RFM</th>
                                            <th>STATUS</th>
                                            <th>KETERANGAN</th>
                                        </tr>
                                    </thead>
                                        <?php foreach($specificDailyActivity as $row): ?>
                                            <?php if (array_search($row, $specificDailyActivity) !== 0) {?>
                                                
                                                <tr>
                                                    <td>
                                                        <?php
                                                            $hari = date('l',strtotime($row->date_activity));
                                                            switch($hari){
                                                                case 'Sunday':
                                                                    $hari = "Minggu";
                                                                break;
                                                        
                                                                case 'Monday':			
                                                                    $hari = "Senin";
                                                                break;
                                                        
                                                                case 'Tuesday':
                                                                    $hari = "Selasa";
                                                                break;
                                                        
                                                                case 'Wednesday':
                                                                    $hari = "Rabu";
                                                                break;
                                                        
                                                                case 'Thursday':
                                                                    $hari = "Kamis";
                                                                break;
                                                        
                                                                case 'Friday':
                                                                    $hari = "Jumat";
                                                                break;
                                                        
                                                                case 'Saturday':
                                                                    $hari = "Sabtu";
                                                                break;
                                                                
                                                                default:
                                                                    $hari= "Tidak di ketahui";		
                                                                break;
                                                            }
                                                            echo $hari;
                                                        ?>
                                                    </td>
                                                    <td><?php echo date("d-m-Y",strtotime( $row->date_activity)) ?></td>
                                                    <td><?php echo date("H:i",strtotime( $row->last_update)) ?></td>
                                                    <td>
                                                        <?php 
                                                            // $data = json_encode($projectList->result());
                                                            // echo "<script>console.log($data);</script>";
                                                            $tableDataProjectName = null;
                                                            if (!empty($row->project_id))
                                                            {
                                                                foreach($projectList as $rowProject):
                                                                    if ($row->project_id == $rowProject->id) {
                                                                        $tableDataProjectName = $rowProject->project_name;
                                                                        break;
                                                                    }
                                                                endforeach;
                                                            }
                                                            else {
                                                                $tableDataProjectName = "-";
                                                            }
                                                            echo $tableDataProjectName;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php $tableTaskName = null;
                                                            if (!empty($row->task_id))
                                                            {
                                                                foreach($taskList as $rowTask):
                                                                    if ($row->task_id == $rowTask->id) {
                                                                        $tableTaskName = $rowTask->task_name;
                                                                        break;
                                                                    }
                                                                endforeach;
                                                            }
                                                            else {
                                                                $tableTaskName = "-";
                                                            }
                                                            echo $tableTaskName;
                                                        ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <?php $tableDataNoRFM = null;
                                                            if (!empty($row->rfm_id))
                                                            {   
                                                                foreach($rfmList as $rowRfm):
                                                                    if ($row->rfm_id == $rowRfm->id) {
                                                                        $tableDataNoRFM = $rowRfm->no_rfm;
                                                                        break;
                                                                    }
                                                                endforeach;
                                                            }
                                                            else {
                                                                $tableDataNoRFM = "-";
                                                            }
                                                            echo $tableDataNoRFM;
                                                        ?>
                                                    </td>
                                                    <td><?php echo $row->status ?></td>
                                                    <td><?php echo $row->keterangan ?></td>
                                                </tr>
                                            <?php } ?>
                                        <?php endforeach ?>
                                    </table>
                                </p>
                            </td>
                        </tr>
                    <?php } ?>
                <?php endforeach ?>
            </tbody>        
        </table>
    </div>
</div>

<div class="card mb-3" id="table" style="margin-top: 15px">
    <div class="card-header" >
        <b>PROGRESS PROJECT</b>
    </div>
    <div class="card-body">
    <!-- table table-bordered table-hover -->
        <table class="colapse-table res3"  width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th>NAMA PROJECT</th>
                    <th>STATUS</th>
                    <th>LAST UPDATE</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($filteredProjectList as $r): ?>
                    
                    <?php 
                        $this->db->where('project_id', $r->id);
                        $this->db->order_by('last_update DESC');
                        $specificTask = $this->db->get(TB_TASK)->result();
                    ?>

                    <script>console.log(<?php echo json_encode($specificTask)?>)</script>
                    
                    <tr>
                        <td style="text-align: center"><i data-toggle="collapse" data-target=<?php echo "#".$r->id?> style=" color: #28a745; background-color: #f4fbff" class="fa fa-plus-circle" aria-hidden="true"></i></td>
                        <td><?php echo $r->project_name?></td>
                        <td>
                            <?php echo STT_ON_PROGRESS?>
                        </td>
                        <td><?php echo date("d-m-Y | H:i:s",strtotime( $r->last_update))?></td>
                    </tr>

                    <tr id=<?php echo $r->id?> class="collapse">                     
                        <td colspan="4">
                            <p>
                                <table style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>NAMA TASK</th>
                                            <th>TANGGAL DIBUAT</th>
                                            <th>TARGET DATE</th>
                                            <th>STATUS</th>
                                            <th>LAST UPDATE</th>
                                            <th>PIC</th>
                                            <th>KETERANGAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($specificTask as $row): ?>
                                            <?php if ($row->status != STT_DONE && $this->db->where('no_rfp', $row->no_rfp)->get(TB_RFP)->row()->result_status != STT_SOLVED ) {?>
                                                <tr>
                                                    <td><?php echo $row->task_name?></td>
                                                    <td><?php echo date("d-m-Y",strtotime( $row->create_date)) ?></td>
                                                    <td><?php echo date("d-m-Y",strtotime( $row->target_date))?></td>
                                                    <td><?php echo $row->status?></td>
                                                    <td><?php echo date("d-m-Y | H:i:s",strtotime( $row->last_update))?></td>
                                                    <td>
                                                        <?php 
                                                            $this->db->where('user_id', $row->assign_to);
                                                            echo $this->db->get(TB_USER)->row()->nama;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            if (date("d-m-Y",strtotime($row->last_update)) > date("d-m-Y",strtotime($row->target_date))) {
                                                                echo'Task telah melewati target date';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </p>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>