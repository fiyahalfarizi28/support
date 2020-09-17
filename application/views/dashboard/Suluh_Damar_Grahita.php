<style>
.profile {
  font-size: 16px;
}
</style>

<div class="card mb-3" style="margin-top: 15px">
    <div class="card-header" style="text-align:center">
        <b>
            BIODATA
        </b>
    </div>

    <div class="card-body">
        <?php
            $this->db->select("COUNT(*) AS rfm_assigned");
            $this->db->where('assign_to', '1473'); 
            $rfm_assigned = $this->db->get(TB_DETAIL)->row()->rfm_assigned;

            $this->db->select("COUNT(*) AS rfm_done");
            $this->db->where('assign_to', '1473');
            $this->db->where('request_status', STT_DONE); 
            $rfm_done = $this->db->get(TB_DETAIL)->row()->rfm_done;

            $this->db->select("COUNT(*) AS task_assigned");
            $this->db->where('assign_to', '1473'); 
            $task_assigned = $this->db->get(TB_TASK)->row()->task_assigned;

            $this->db->select("COUNT(*) AS task_done");
            $this->db->where('assign_to', '1473');
            $this->db->where('status', STT_DONE); 
            $task_done = $this->db->get(TB_TASK)->row()->task_done;
        
            $this->db->select("COUNT(*) AS rfm_lewat");
            $this->db->where('assign_to', '1473');
            $this->db->where('done_date !=', NULL);
            $this->db->where('request_status', STT_DONE);
            $this->db->where('done_date >', date('Y-m-d ', strtotime('target_date')));
            $rfm_lewat = $this->db->get(TB_DETAIL)->row()->rfm_lewat;

            $this->db->select("COUNT(*) AS task_lewat");
            $this->db->where('assign_to', '1473');
            $this->db->where('done_date !=', NULL);
            $this->db->where('status', STT_DONE);
            $this->db->where('done_date >', date('Y-m-d ', strtotime('target_date')));
            $task_lewat = $this->db->get(TB_TASK)->row()->task_lewat;

            $this->db->select("SUM(rates) AS totalrates");
            $this->db->where('assign_to', '1473');
            $totalrates = $this->db->get(TB_DETAIL)->row()->totalrates;

            $assigned = $rfm_assigned + $task_assigned;
            $done = $rfm_done + $task_done;
            $lewat = $rfm_lewat + $task_lewat;

            if($done == 0){
                $persen = '0 %';
            } else {
                $persen = ($done * 100) / $assigned;
                $persen = ROUND(ROUND($persen))." %";
            }

            if ($totalrates == 0){
                $rating = '0';
            } else {
                $rating = $totalrates / $rfm_done;
            }
        ?>
        <div class="row">
            <div class="col-sm-2">
                 <div class="card">
                    <img class="card-img-top" src="assets/img/Suluh.png" style="width:100%">
                </div>
            </div>

            <div class="col-sm-2">
                <table class="profile">
                    <tr>
                        <td >Nama</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td>Performance</td>
                    </tr>
                    <tr>
                        <td>Rating</td>
                    </tr>
                </table>
            </div>

            <div class="col-sm-4">
                <table class="profile">
                    <?php foreach($userList->result() as $r): ?>
                        <tr>
                            <td> : <?php echo $r->nama; ?> </td>
                        </tr>
                        <tr>
                            <td> : <?php echo $r->nik; ?> </td>
                        </tr>
                        <tr>
                            <?php if (!empty($r->no_hp)) { ?>
                                <td> : <?php echo $r->no_hp ?> </td>
                            <?php } else { ?>
                                <td> : <?php echo "-"?> </td>
                            <?php }?>
                        </tr>
                        <tr>
                            <td> : <?php echo $r->email; ?> </td>
                        </tr>
                        <tr>
                            <td> : <?php echo $persen; ?> </td>
                        </tr>
                        <tr>
                            <td> : <?php echo number_format($rating, 1, '.', '')."/5.0"; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            
            </div>

            <div class="col-sm-3">
                <table class="profile" style="margin-left: 25px">
                    <tr>
                        <td>Total RFM Assigned</td>
                    </tr>
                    <tr>
                        <td>Total RFM Done</td>
                    </tr>
                    <tr>
                        <td>Total Task Project Assigned</td>
                    </tr>
                    <tr>
                        <td>Total Task Project Done</td>
                    </tr>
                    <tr>
                        <td>Melewati Target Date</td>
                    </tr>
                    
                </table>
            </div>

            <div class="col-sm-1">
                <table class="profile">
                    <tr>
                        <td> : <?php echo $rfm_assigned; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo $rfm_done; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo $task_assigned; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo $task_done; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo $lewat; ?> </td>
                    </tr>
                    
                </table>
            
            </div>

        </div>
    </div>
</div>

<div class="card mb-3" style="margin-top: 15px">
    <div class="card-header" style="text-align:center">
        <b>
            DAFTAR AKTIVITAS
        </b>
    </div>

    <div class="card-body">
        <div class="pesan"></div>

            <table class="colapse-table res3" id="tb_detail_profile" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>HARI</th>
                        <th>TANGGAL</th>
                        <th>WAKTU</th>
                        <th>PROJECT</th>
                        <th>TASK</th>
                        <th>No. RFM</th>
                        <th>STATUS</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>

                <?php foreach($daily_activities->result() as $r): ?>
                    <tr>
                        <td>
                        <?php
                            $hari = date('l',strtotime($r->date_activity));
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

                        <td><?php echo date("d-m-Y",strtotime( $r->date_activity)) ?></td>

                        <td>
                            <?php echo date("H:i",strtotime( $r->last_update)) ?>
                        </td>

                        <td>
                            <?php 
                                $tableDataProjectName = null;
                                if (!empty($r->project_id))
                                {
                                    foreach($projectList->result() as $row):
                                        if ($r->project_id == $row->id) {
                                            $tableDataProjectName = $row->project_name;
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
                        
                        <td><?php $tableTaskName = null;
                                if (!empty($r->task_id))
                                {
                                    foreach($DataTaskList->result() as $row):
                                        if ($r->task_id == $row->id) {
                                            $tableTaskName = $row->task_name;
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
                                if (!empty($r->rfm_id))
                                {
                                    foreach($rfmList->result() as $row):
                                        if ($r->rfm_id == $row->id) {
                                            $tableDataNoRFM = $row->no_rfm;
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
                        
                        <td><?php echo $r->status ?></td>
                        <td><?php echo $r->keterangan ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            $('#tb_detail_profile').DataTable({
                "bSort" : false
            });
        });
    </script>

</div>