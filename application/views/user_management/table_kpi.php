<div class="card mb-3">
    <div class="card-header">
        <h4>KPI IT</h4>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <form class="mb-2" action="" method="post">
                <label>
                    Cari berdasarkan bulan dan tahun
                    <!-- <span class="text-danger"><i>(belum ada aksi pencariannya)</i></span> -->
                </label>
                <div class="row">
                    <div class="col-md-3">
                        <select name="m" class="form-control">
                            <?php
                            $m = $this->input->post('m');
                            $y = $this->input->post('y');

                            if(empty($m && $y)) {
                                $m = date('m');
                                $y = date('Y');
                            }
                                if($m=='01'):
                                    $mm = 'Januari';
                                elseif($m=='02'):
                                    $mm = 'Februari';
                                elseif($m=='03'):
                                    $mm = 'Maret';
                                elseif($m=='04'):
                                    $mm = 'April';
                                elseif($m=='05'):
                                    $mm = 'Mei';
                                elseif($m=='06'):
                                    $mm = 'Juni';
                                elseif($m=='07'):
                                    $mm = 'Juli';
                                elseif($m=='08'):
                                    $mm = 'Agustus';
                                elseif($m=='09'):
                                    $mm = 'September';
                                elseif($m=='10'):
                                    $mm = 'Oktober';
                                elseif($m=='11'):
                                    $mm = 'November';
                                elseif($m=='12'):
                                    $mm = 'Desember';
                                endif;

                                if($m):
                                    echo "<option value='$m'>$mm</option>";
                                endif;
                            ?>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="y" class="form-control">
                            <?php
                                if($y):
                                    echo "<option value='$y'>$y</option>";
                                endif;
                            ?>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <input type="submit" name="" value="Cari" class="btn btn-block btn-outline-secondary">
                    </div>
                </div>
            </form>

            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead class="text-center">
                <tr>
                    <th width="3%">#</th>
                    <th width="15%">NAMA</th>
                    <th width="10%">JUMLAH KEHADIRAN</th>
                    <th width="10%">ASSIGNED</th>
                    <th width="10%">ON PROGRESS</th>
                    <th width="10%">DONE</th>
                    <th width="10%">MELEWATI TARGET DATE</th>
                    <th width="10%">TOTAL</th>
                    <th width="10%">%</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        foreach($result as $r):

                            $query_kehadiran = $this->db->query("SELECT COUNT(DISTINCT date_activity) AS KEHADIRAN FROM daily_activity WHERE user_id='$r->user_id' AND MONTH(date_activity) = $m AND YEAR(date_activity) = $y")->row();
                           
                            $query_assigned_rfm = $this->db->query("SELECT COUNT(assign_date) AS ASSIGNED_RFM FROM rfm_new_detail WHERE assign_to='$r->user_id' AND result_status != 'ON PROGRESS' AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y")->row();
                            $query_assigned_task = $this->db->query("SELECT COUNT(assign_date) AS ASSIGNED_TASK FROM task WHERE assign_to='$r->user_id' AND (status != 'ON PROGRESS') AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y")->row();
                            $query_assigned =  $query_assigned_rfm->ASSIGNED_RFM + $query_assigned_task->ASSIGNED_TASK;

                            $query_progress_rfm = $this->db->query("SELECT COUNT(assign_date) AS ON_PROGRESS_RFM FROM rfm_new_detail WHERE assign_to='$r->user_id' AND result_status = 'ON PROGRESS' AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y")->row();
                            $query_progress_task = $this->db->query("SELECT COUNT(assign_date) AS ON_PROGRESS_TASK FROM task WHERE assign_to='$r->user_id' AND (status = 'ON PROGRESS') AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y")->row();
                            $query_progress = $query_progress_rfm->ON_PROGRESS_RFM + $query_progress_task->ON_PROGRESS_TASK;

                            $query_done_rfm = $this->db->query("SELECT COUNT(done_date) AS DONE_RFM FROM rfm_new_detail WHERE assign_to='$r->user_id' AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y AND MONTH(done_date) = $m AND YEAR(done_date) = $y")->row();
                            $query_done_task = $this->db->query("SELECT COUNT(done_date) AS DONE_TASK FROM task WHERE assign_to='$r->user_id' AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y AND MONTH(done_date) = $m AND YEAR(done_date) = $y")->row();
                            $query_done = $query_done_rfm->DONE_RFM + $query_done_task->DONE_TASK;

                            $query_total_rfm = $this->db->query("SELECT COUNT(assign_date) AS TOTAL_RFM FROM rfm_new_detail WHERE assign_to='$r->user_id' AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y")->row();
                            $query_total_task = $this->db->query("SELECT COUNT(assign_date) AS TOTAL_TASK FROM task WHERE assign_to='$r->user_id' AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y")->row();
                            $query_total = $query_total_rfm->TOTAL_RFM + $query_total_task->TOTAL_TASK;

                            $query_lewat_rfm = $this->db->query("SELECT COUNT(done_date) AS LEWAT_RFM FROM rfm_new_detail WHERE assign_to='$r->user_id' AND DATE(done_date) > DATE(target_date) AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y AND MONTH(done_date) = $m AND YEAR(done_date) = $y")->row();
                            $query_lewat_task = $this->db->query("SELECT COUNT(done_date) AS LEWAT_TASK FROM task WHERE assign_to='$r->user_id' AND DATE(done_date) > DATE(target_date) AND MONTH(assign_date) = $m AND YEAR(assign_date) = $y AND MONTH(done_date) = $m AND YEAR(done_date) = $y")->row();
                            $query_lewat = $query_lewat_rfm->LEWAT_RFM + $query_lewat_task->LEWAT_TASK;

                            $assigned = $query_assigned - $query_done;

                            if($query_done == 0){
                                $persen = '0 %';
                            } else {
                                $persen = ($query_done * 100) / $query_total;
                                $persen = ROUND(ROUND($persen))." %";
                            }
                    ?>
                        <tr>
                            <td style ="text-align: center"><?php echo $no++ ?></td>
                            <td><?php echo $r->nama ?></td>
                            <td class="text-right"><?php echo !empty($query_kehadiran->KEHADIRAN) ? $query_kehadiran->KEHADIRAN : 0?></td>
                            <td class="text-right"><?php echo $assigned ?></td>
                            <td class="text-right"><?php echo $query_progress?></td>
                            <td class="text-right"><?php echo $query_done?></td>
                            <td class="text-right"><?php echo $query_lewat?></td>
                            <td class="text-right"><?php echo $query_total?></td>
                            <td class="text-right"><?php echo $persen ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="form_add_akses" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="hasil-data"></div>
        </div>
    </div>
</div>