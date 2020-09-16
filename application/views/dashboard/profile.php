<style>
.profile {
  font-size: 18px;
}
</style>

<div class="card mb-3" style="margin-top: 15px">
    <div class="card-header" style="text-align:center">
        <b>
            BIODATA
        </b>
    </div>

    <div class="card-body">
        <div class="row justify-content-center" >
            <div class="col-sm-3" style="margin-left: 25px">
                 <div class="card">
                    <img class="card-img-top" src="assets/img/Elvia.jpg" style="width:100%">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2" style="margin-top: 25px; margin-left: 25px">
                <table class="profile">
                    <tr>
                        <td >Nama</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                    </tr>
                    <tr>
                        <td>Tempat, tanggal lahir</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                    </tr>
                </table>
            </div>

            <div class="col-sm-5" style="margin-top: 25px">
                <table class="profile">
                    <tr>
                        <td> : <?php echo "Elvia Nur Anggraini"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "022007125"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "Bengkulu, 28 Agustus 1998"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "Perum. Pesona Serpong Blok F1 No.2, Kota Tangerang Selatan"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "0895-3443-54454"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "staf_tidev10@kreditmandiri.co.id"; ?> </td>
                    </tr>
                </table>
            
            </div>

            <div class="col-sm-3" style="margin-top: 25px">
                <table class="profile" style="margin-left: 25px">
                    <tr>
                        <td>Total RFM Assigned</td>
                    </tr>
                    <tr>
                        <td>Total RFM Terselesaikan</td>
                    </tr>
                    <tr>
                        <td>Total Task Project Assigned</td>
                    </tr>
                    <tr>
                        <td>Total Task Project Terselesaikan</td>
                    </tr>
                    <tr>
                        <td>Melewati Target Date</td>
                    </tr>
                    <tr>
                        <td>Rating</td>
                    </tr>
                </table>
            </div>

            <div class="col-sm-1" style="margin-top: 25px">
                <table class="profile">
                    <tr>
                        <td> : <?php echo "2"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "2"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "8"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "6"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "0"; ?> </td>
                    </tr>
                    <tr>
                        <td> : <?php echo "4.7"; ?> </td>
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