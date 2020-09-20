<style>
.profile {
  font-size: 16px;
}
</style>

<div class="card mb-3" style="margin-top: 15px">
    <div class="card-header" style="text-align:center">
        <b>
            PROFILE
        </b>
    </div>

    <div class="card-body">
        <?php
            $this->db->select("COUNT(*) AS rfm_assigned");
            $this->db->where('assign_to', '3'); 
            $rfm_assigned = $this->db->get(TB_DETAIL)->row()->rfm_assigned;

            $this->db->select("COUNT(*) AS rfm_done");
            $this->db->where('assign_to', '3');
            $this->db->where('request_status', STT_DONE); 
            $rfm_done = $this->db->get(TB_DETAIL)->row()->rfm_done;

            $this->db->select("COUNT(*) AS task_assigned");
            $this->db->where('assign_to', '3'); 
            $task_assigned = $this->db->get(TB_TASK)->row()->task_assigned;

            $this->db->select("COUNT(*) AS task_done");
            $this->db->where('assign_to', '3');
            $this->db->where('status', STT_DONE); 
            $task_done = $this->db->get(TB_TASK)->row()->task_done;
        
            $query_lewat_rfm = $this->db->query("SELECT COUNT(done_date) AS LEWAT_RFM FROM rfm_new_detail WHERE assign_to='3' AND DATE(done_date) > DATE(target_date) AND request_status='DONE'")->row()->LEWAT_RFM;
            $rfm_lewat = $query_lewat_rfm;

            $query_lewat_task = $this->db->query("SELECT COUNT(done_date) AS LEWAT_TASK FROM task WHERE assign_to='3' AND DATE(done_date) > DATE(target_date) AND status='DONE'")->row()->LEWAT_TASK;
            $task_lewat = $query_lewat_task;

            $this->db->select("SUM(rates) AS totalrates");
            $this->db->where('assign_to', '3');
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
                $rating = '5';
            } else {
                $rating = $totalrates / $rfm_done;
            }
        ?>
        <div class="row">
            <div class="col-sm-2 text-center">
                 <div class="card">
                    <img class="card-img-top" src="assets/img/Hamsudi.png" style="width:100%">
                </div>
                <?php if ($user->user_id == $SESSION_USER_ID) { ?>
                    <button class="btn btn-success btn-sm" id="btn_edit" style="margin-top: 15px" onclick="addFile_photo();">
                        <i class="far fa-edit"></i> Change Photo
                    </button>
                <?php } ?>
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

            <div class="col-sm-3">
                <table class="profile">
                    <tr>
                        <td> : <?php echo $user->nama; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo $user->nik; ?> </td>
                    </tr>
                    <tr>
                        <?php if (!empty($user->no_hp)) { ?>
                            <td> : <?php echo $user->no_hp ?> </td>
                        <?php } else { ?>
                            <td> : <?php echo "-"?> </td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td> : <?php echo $user->email; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo $persen; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo number_format($rating, 1, '.', '')."/5.0"; ?> </td>
                    </tr>
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
<script>
    var fileId = 0;
    function addFile_photo() {
    var html =  '<input type="file" name="photo[]" />'+
                ' <a href="javascript:void(0)" onclick="javascript:removeElement(\'file-' + fileId + '\'); return false;">'+
                '<i class="far fa-window-close fa-lg text-danger"></i></a>';
    addElement('files', 'p', 'file-' + fileId, html);
}
</script>