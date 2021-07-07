<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERHITUNGAN RFM</b>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <h1><?php echo $jumlah_queue ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-list"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">On Queued</span>
                            </i>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h1><?php echo $jumlah_approve ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-check-double"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">Approved</span>
                            </i>
                        </div>
                    </div>
                
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-dark">
                            <div class="card-body">
                                <h1><?php echo $jumlah_progress ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">On Progress</span>
                            </i>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h1><?php echo $jumlah_done ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">Done</span>
                            </i>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-danger">
                            <div class="card-body">
                                <h1><?php echo $jumlah_reject ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-ban"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">Reject</span>
                            </i>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <h1><?php echo $jumlah_rfm ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">Total RFM</span>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERHITUNGAN RFP</b>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <h1><?php echo $jumlah_queue_rfp ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-list"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">On Queued</span>
                            </i>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h1><?php echo $jumlah_approve_rfp ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-check-double"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">Approved</span>
                            </i>
                        </div>
                    </div>
                
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-dark">
                            <div class="card-body">
                                <h1><?php echo $jumlah_progress_rfp ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">On Progress</span>
                            </i>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h1><?php echo $jumlah_done_rfp ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">Done</span>
                            </i>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-danger">
                            <div class="card-body">
                                <h1><?php echo $jumlah_reject_rfp ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-ban"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">Reject</span>
                            </i>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <h1><?php echo $jumlah_rfp ?></h1>
                                <div class="card-body-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <i class="card-footer text-white clearfix small">
                            <span class="float-left">Total RFP</span>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>GRAFIK RFM KUMULATIF</b>
            </div>
            <div class="card-body">
                <canvas id="myChart9"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>GRAFIK RFP KUMULATIF</b>
            </div>
            <div class="card-body">
                <canvas id="myChart10"></canvas>
            </div>
        </div>
    </div>
</div>

<?php
    $tb_detail = TB_DETAIL;
    $Q = "SELECT DISTINCT MONTH(`request_date`) AS bulan FROM `rfm_new_detail` WHERE YEAR(`request_date`) BETWEEN '2019' AND YEAR(CURDATE()) ORDER BY MONTH(`request_date`) ASC";
    $query = $this->db->query($Q)->result();
    
    $Q = "SELECT DISTINCT YEAR(`request_date`) AS tahun 
            FROM $tb_detail";
    $queryyear = $this->db->query($Q)->result();
    
    $post_month = $this->input->post('month');
    $post_monthAwal = $this->input->post('monthAwal');
    $post_monthAkhir = $this->input->post('monthAkhir');
    $post_year = $this->input->post('year');

    if($post_month==1)
    {
        $bulan = "Januari";
    }
    elseif($post_month==2)
    {
        $bulan = "Februari";
    }
    elseif($post_month==3)
    {
        $bulan = "Maret";
    }
    elseif($post_month==4)
    {
        $bulan = "April";
    }
    elseif($post_month==5)
    {
        $bulan = "Mei";
    }
    elseif($post_month==6)
    {
        $bulan = "Juni";
    }
    elseif($post_month==7)
    {
        $bulan = "Juli";
    }
    elseif($post_month==8)
    {
        $bulan = "Agustus";
    }
    elseif($post_month==9)
    {
        $bulan = "September";
    }
    elseif($post_month==10)
    {
        $bulan = "Oktober";
    }
    elseif($post_month==11)
    {
        $bulan = "November";
    }
    elseif($post_month==12)
    {
        $bulan = "Desember";
    }

    if(empty($post_month))
    {
        $text_bulan = "Bulan";
        $val_bulan = "";
    }
    else
    {
        $text_bulan = $bulan;
        $val_bulan = $post_month;
    }

    if(empty($post_year))
    {
        $text_tahun = "Tahun";
        $val_tahun = date('Y');
    }
    else
    {
        $text_tahun = $post_year;
        $val_tahun = $post_year;
    }

    //CHART==================================
    echo "
        <div class='row mt-3'>
            <div class='col-md-12'>
                <form action=" . $_SERVER['PHP_SELF'] . " method='POST'>
                    <div class='row'>
                        <div class='col-md-3'>
                            <select name='monthAwal' id='monthAwal' class='form-control'>
                                <option value='$val_bulan'>$text_bulan</option>
    ";
                            foreach($query as $row):
                                if($row->bulan==01)
                                {
                                    $bulan = "Januari";
                                }
                                elseif($row->bulan==02)
                                {
                                    $bulan = "Februari";
                                }
                                elseif($row->bulan==03)
                                {
                                    $bulan = "Maret";
                                }
                                elseif($row->bulan==04)
                                {
                                    $bulan = "April";
                                }
                                elseif($row->bulan==05)
                                {
                                    $bulan = "Mei";
                                }
                                elseif($row->bulan==06)
                                {
                                    $bulan = "Juni";
                                }
                                elseif($row->bulan==07)
                                {
                                    $bulan = "Juli";
                                }
                                elseif($row->bulan=='08')
                                {
                                    $bulan = "Agustus";
                                }
                                elseif($row->bulan=='09')
                                {
                                    $bulan = "September";
                                }
                                elseif($row->bulan==10)
                                {
                                    $bulan = "Oktober";
                                }
                                elseif($row->bulan==11)
                                {
                                    $bulan = "November";
                                }
                                elseif($row->bulan==12)
                                {
                                    $bulan = "Desember";
                                }
    echo "
                                <option value='$row->bulan'>$bulan</option>
    ";
                            endforeach;
    echo "
                            </select>
                        </div>
                        <div class='col-md-1'>
                            <h6 style = 'margin-top: 8px; margin-left: 30px'> s/d </h6>
                        </div>
                        <div class='col-md-3'>
                            <select name='monthAkhir' id='monthAkhir' class='form-control'>
                            </select>
                        </div>
                        <div class='col-md-3'>
                            <select name='year' id='year' class='form-control'>
                                <option value='$val_tahun'>$text_tahun</option>
                                ";
                            foreach($queryyear as $row):
    echo "
                                <option value='$row->tahun'>$row->tahun</option>
    ";
                            endforeach;
    echo "
                            </select>
                        </div>
                        <div class='col-md-2'>
                        <button name='btnSearch' type='submit' id='btnSearch' class='btn btn-primary btn-block' >CARI</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    ";
?>

<script src="<?php echo base_url('assets/js/chart/Chart.bundle.js') ?>"></script>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERSENTASE RFM BERDASARKAN APLIKASI</b>
            </div>
            <div class="card-body">
                <canvas id="myChart1"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERSENTASE RFM BERDASARKAN PROBLEM TYPE</b>
            </div>
            <div class="card-body">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERSENTASE RFP BERDASARKAN APLIKASI</b>
            </div>
            <div class="card-body">
                <canvas id="myChart3"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERSENTASE RFP BERDASARKAN REQUEST TYPE</b>
            </div>
            <div class="card-body">
                <canvas id="myChart4"></canvas>
            </div>
        </div>
    </div>
</div>  

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERSENTASE RFM BERDASARKAN KANTOR</b>
            </div>
            <div class="card-body">
                <canvas id="myChart5"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERSENTASE RFM BERDASARKAN AREA</b>
            </div>
            <div class="card-body">
                <canvas id="myChart6"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERSENTASE RFM BERDASARKAN DIVISI</b>
            </div>
            <div class="card-body">
                <canvas id="myChart7"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b>PERSENTASE RFP BERDASARKAN DIVISI</b>
            </div>
            <div class="card-body">
                <canvas id="myChart8"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    <?php
        $applicationList = $this->db->get(TB_PROJECT)->result();
        $problemTypeList = $this->db->get(TB_PROBLEM_TYPE)->result();
        $userList = $this->db->get('dpm_online.'.TB_USER)->result();
    
        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }
        $this->db->join(TB_PROJECT." as Project", "Project.id = rfm_new_detail.project_id");

        $rfmList = $this->db->get(TB_DETAIL)->result();
        
        
        $this->db->select("COUNT(*) AS jmlh_rfm");
        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }
    ?>

    var ctx_ = document.getElementById("myChart1").getContext("2d");
    var data_ = {
        labels: [
            <?php
                foreach($applicationList as $r):
                    $data = array();
                    $data = $r->project_name;
                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            data: [
                <?php
                    foreach($applicationList as $r):
                        $data = array();
                        $counter = 0;
                        foreach($rfmList as $eachrfm):
                            if ($eachrfm->project_id == $r->id) {
                                $counter += 1;
                            }
                        endforeach;
                        $data = $counter;
                        echo json_encode($data).",";
                    endforeach;

                ?>

                
            ],
            backgroundColor: [
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                "rgb(247, 201, 89)",
                "rgb(68, 124, 158)",
                "rgb(78, 245, 197)",
                "rgb(158, 143, 186)",
                "rgb(250, 187, 135)",
                "rgb(247, 227, 126)",
                "rgb(247, 197, 188)",
                "rgb(166, 88, 86)",
                "rgb(247, 205, 181)",
                "rgb(255, 203, 134)",
                "rgb(201, 197, 143)",
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                ],
                hoverBackgroundColor: 'rgb(187,185,190)',
                hoverBorderColor: 'rgb(0, 0, 0, 1)',
        }]
    };
    var myBarChartApplication = new Chart(ctx_, {
        type: 'pie',
        data: data_,
        options: {
            legend: {
                display: false
            },
            'onClick' : function (evt, item) {
                $('#tableRfm').empty();
                
                var label = this.data.labels[item[0]["_index"]];
                var rfmList = <?php echo json_encode($rfmList); ?>;
                var userList = <?php echo json_encode($userList); ?>;

                
                rfmList.forEach( (rfm) => {
                    if (rfm.project_name == label) {
                        var nama_requestor;
                        var jabatan_requestor;
                        var nama_pic = "-";
                        var date = new Date(rfm.request_date);
                        var formattedDate = `${String(date.getDate()).length == 1 ? "0"+date.getDate() : date.getDate()}-${String(date.getMonth()+1).length == 1 ? "0"+ (date.getMonth()+1) : date.getMonth()+1}-${date.getFullYear()}`;

                        userList.forEach( (user) => {
                            if (rfm.request_by == user.user_id) {
                                nama_requestor = user.nama;
                                jabatan_requestor = user.jabatan;
                            }

                            if (rfm.assign_to == user.user_id) {
                                nama_pic = user.nama;
                            }
                        })


                        $('#tableRfm').append(`
                            <tr>
                                <td>
                                    ${nama_requestor}
                                </td>
                                <td>
                                    ${jabatan_requestor}
                                </td>
                                <td>
                                    ${rfm.no_rfm}
                                </td>
                                <td>
                                    ${formattedDate}
                                </td>
                                <td>
                                    ${rfm.request_status}
                                </td>
                                <td>
                                    ${rfm.result_status}
                                </td>
                                <td>
                                    ${nama_pic}
                                </td>
                            </tr>
                        `);

                    }
                })

                $('#modal-Chart1').modal('show');

            },            
            responsive: true,
            title:{
                display:true,
                text:'Application Chart | Total RFM : <?php echo $this->db->get(TB_DETAIL)->row()->jmlh_rfm;?>'
                
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = data.labels[tooltipItem.index];
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} | ` + (data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / <?php echo count($rfmList)?> * 100).toLocaleString()+'%';
                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }
                    return dataLabel;
                    }
                }
            }
        }
    });

</script>

<div class="modal fade" id="modal-Chart1" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-left: 180px">
        <!-- Modal content-->
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h3 class="modal-title">Detail RFM</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <table style="margin-left: auto; margin-right: auto">
                    <thead class ="table">
                        <tr>
                            <th>REQUEST BY</th>
                            <th>JABATAN</th>
                            <th>NO.RFM</th>
                            <th>DATE</th>
                            <th>REQUEST STATUS</th>
                            <th>RESULT STATUS</th>
                            <th>PIC</th>
                        </tr>
                    </thead>
                    
                    <tbody class ="table" id="tableRfm">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    <?php 
    $this->db->select("COUNT(*) AS jmlh_rfm");
    $this->db->where('request_status !=', STT_ON_QUEUE);
    $this->db->where('request_status !=', STT_REJECT);
    if(!empty($post_monthAwal && $post_monthAkhir)) {
        $this->db->where("MONTH(request_date) >=", $post_monthAwal);
        $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
        $this->db->where("YEAR(request_date)", $val_tahun);
    }
    ?>
    
    var ctx_ = document.getElementById("myChart2").getContext("2d");
    var data_ = {
        labels: [
            <?php
                foreach($problemTypeList as $r):
                    $data = array();
                    $data = $r->problem_type;
                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            data: [
                <?php
                    foreach($problemTypeList as $r):
                        $data = array();
                        $counter = 0;
                        foreach($rfmList as $eachrfm):
                            if ($eachrfm->problem_type == $r->id) {
                                $counter += 1;
                            }
                        endforeach;
                        $data = $counter;
                        echo json_encode($data).",";
                    endforeach;
                ?>
            ],
            backgroundColor: [
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                "rgb(247, 201, 89)",
                "rgb(68, 124, 158)",
                "rgb(78, 245, 197)",
                "rgb(158, 143, 186)",
                "rgb(250, 187, 135)",
                "rgb(247, 227, 126)",
                "rgb(247, 197, 188)",
                "rgb(166, 88, 86)",
                "rgb(247, 205, 181)",
                "rgb(255, 203, 134)",
                "rgb(201, 197, 143)",
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                ],
                hoverBackgroundColor: 'rgb(187,185,190)',
                hoverBorderColor: 'rgb(0, 0, 0, 1)',
        }]
    };
    var myBarChartProblemType = new Chart(ctx_, {
        type: 'pie',
        data: data_,
        options: {
            legend: {
                display: false
            },
            'onClick' : function (evt, item) {
                $('#tablePTrfm').empty();
                
                var label = this.data.labels[item[0]["_index"]];
                var problem_type_id;
                var rfmList = <?php echo json_encode($rfmList); ?>;
                var userList = <?php echo json_encode($userList); ?>;
                var problemTypeList = <?php echo json_encode($problemTypeList); ?>;

                problemTypeList.forEach( (problem) => {
                    if (label == problem.problem_type) {
                        problem_type_id = problem.id;
                    }
                })
                
                rfmList.forEach( (rfm) => {
                    if (rfm.problem_type == problem_type_id) {
                        var nama_requestor;
                        var jabatan_requestor;
                        var nama_pic = "-";
                        var date = new Date(rfm.request_date);
                        var formattedDate = `${String(date.getDate()).length == 1 ? "0"+date.getDate() : date.getDate()}-${String(date.getMonth()+1).length == 1 ? "0"+ (date.getMonth()+1) : date.getMonth()+1}-${date.getFullYear()}`;
                        var problem_type;
                        userList.forEach( (user) => {
                            if (rfm.request_by == user.user_id) {
                                nama_requestor = user.nama;
                                jabatan_requestor = user.jabatan;
                            }

                            if (rfm.assign_to == user.user_id) {
                                nama_pic = user.nama;
                            }
                        })

                        $('#tablePTrfm').append(`
                            <tr>
                                <td>
                                    ${nama_requestor}
                                </td>
                                <td>
                                    ${jabatan_requestor}
                                </td>
                                <td>
                                    ${rfm.no_rfm}
                                </td>
                                <td>
                                    ${formattedDate}
                                </td>
                                <td>
                                    ${rfm.request_status}
                                </td>
                                <td>
                                    ${rfm.result_status}
                                </td>
                                <td>
                                    ${nama_pic}
                                </td>
                            </tr>
                        `);

                    }
                })

                $('#modal-Chart2').modal('show');

            }, 
            responsive: true,
            title:{
                display:true,
                text:'Problem Type Chart | Total RFM : <?php echo $this->db->get(TB_DETAIL)->row()->jmlh_rfm;?>'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = data.labels[tooltipItem.index];
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} | ` + (data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / <?php echo count($rfmList)?> * 100).toLocaleString()+'%';

                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }

                    // return the text to display on the tooltip
                    return dataLabel;
                    }
                }
            }
        }
    });

</script>

<div class="modal fade" id="modal-Chart2" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-left: 180px">
        <!-- Modal content-->
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h3 class="modal-title">Detail Problem Type</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <table style="margin-left: auto; margin-right: auto">
                    <thead class ="table">
                        <tr>
                            <th>REQUEST BY</th>
                            <th>JABATAN</th>
                            <th>NO.RFM</th>
                            <th>DATE</th>
                            <th>REQUEST STATUS</th>
                            <th>RESULT STATUS</th>
                            <th>PIC</th>
                        </tr>
                    </thead>
                    
                    <tbody class ="table" id="tablePTrfm">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    <?php
        $applicationList = $this->db->get(TB_PROJECT)->result();
        $problemTypeList = $this->db->get(TB_PROBLEM_TYPE)->result();
        $userList = $this->db->get('dpm_online.'.TB_USER)->result();

        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }
        $this->db->join(TB_PROJECT." as Project", "Project.id = rfp_new_detail.project_id");
        
        $rfpList = $this->db->get(TB_RFP)->result();

        $this->db->select("COUNT(*) AS jmlh_rfp");
        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }
    ?>

    var ctx_ = document.getElementById("myChart3").getContext("2d");
    var data_ = {
        labels: [
            <?php
                foreach($applicationList as $r):
                    $data = array();
                    $data = $r->project_name;
                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            data: [
                <?php
                    foreach($applicationList as $r):
                        $data = array();
                        $counter = 0;
                        foreach($rfpList as $eachrfp):
                            if ($eachrfp->project_id == $r->id) {
                                $counter += 1;
                            }
                        endforeach;
                        $data = $counter;
                        echo json_encode($data).",";
                    endforeach;
                ?>
            ],
            backgroundColor: [
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                "rgb(247, 201, 89)",
                "rgb(68, 124, 158)",
                "rgb(78, 245, 197)",
                "rgb(158, 143, 186)",
                "rgb(250, 187, 135)",
                "rgb(247, 227, 126)",
                "rgb(247, 197, 188)",
                "rgb(166, 88, 86)",
                "rgb(247, 205, 181)",
                "rgb(255, 203, 134)",
                "rgb(201, 197, 143)",
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                ],
                hoverBackgroundColor: 'rgb(187,185,190)',
                hoverBorderColor: 'rgb(0, 0, 0, 1)',
        }]
    };
    var myBarChartApplication = new Chart(ctx_, {
        type: 'pie',
        data: data_,
        options: {
            legend: {
                display: false
            },
            'onClick' : function (evt, item) {
                $('#tableRfp').empty();
                var label = this.data.labels[item[0]["_index"]];
                var rfpList = <?php echo json_encode($rfpList); ?>;
                var userList = <?php echo json_encode($userList); ?>;

                rfpList.forEach( (rfp) => {
                    if (rfp.project_name == label) {
                        var nama_requestor;
                        var jabatan_requestor;
                        var nama_pic = "-";
                        var date = new Date(rfp.request_date);
                        var formattedDate = `${String(date.getDate()).length == 1 ? "0"+date.getDate() : date.getDate()}-${String(date.getMonth()+1).length == 1 ? "0"+ (date.getMonth()+1) : date.getMonth()+1}-${date.getFullYear()}`;

                        userList.forEach( (user) => {
                            if (rfp.request_by == user.user_id) {
                                nama_requestor = user.nama;
                                jabatan_requestor = user.jabatan;
                            }
                        })


                        $('#tableRfp').append(`
                            <tr>
                                <td>
                                    ${nama_requestor}
                                </td>
                                <td>
                                    ${jabatan_requestor}
                                </td>
                                <td>
                                    ${rfp.no_rfp}
                                </td>
                                <td>
                                    ${formattedDate}
                                </td>
                                <td>
                                    ${rfp.request_status}
                                </td>
                                <td>
                                    ${rfp.result_status}
                                </td>
                            </tr>
                        `);

                    }
                })

                $('#modal-Chart3').modal('show');

            },
            responsive: true,
            title:{
                display:true,
                text:' Application Chart | Total RFP : <?php echo $this->db->get(TB_RFP)->row()->jmlh_rfp;?>'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = data.labels[tooltipItem.index];
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} | ` + (data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / <?php echo count($rfpList)?> * 100).toLocaleString()+'%';
                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }
                    return dataLabel;
                    }
                }
            }
        }
    });

</script>

<div class="modal fade" id="modal-Chart3" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-left: 225px">
        <!-- Modal content-->
        <div class="modal-content" style="width: 900px;">
            <div class="modal-header">
                <h3 class="modal-title">Detail RFP</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <table style="margin-left: auto; margin-right: auto">
                    <thead class ="table">
                        <tr>
                            <th>REQUEST BY</th>
                            <th>JABATAN</th>
                            <th>NO.RFM</th>
                            <th>DATE</th>
                            <th>REQUEST STATUS</th>
                            <th>RESULT STATUS</th>
                        </tr>
                    </thead>
                    
                    <tbody class ="table" id="tableRfp">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    <?php 
        $this->db->select("COUNT(*) AS jmlh_rfp");
        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }
    ?>

    var ctx_ = document.getElementById("myChart4").getContext("2d");
    var data_ = {
        labels: [
            <?php
                foreach($problemTypeList as $r):
                    $data = array();
                    $data = $r->problem_type;
                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            data: [
                <?php
                    foreach($problemTypeList as $r):
                        $data = array();
                        $counter = 0;
                        foreach($rfpList as $eachrfp):
                            if ($eachrfp->problem_type == $r->id) {
                                $counter += 1;
                            }
                        endforeach;
                        $data = $counter;
                        echo json_encode($data).",";
                    endforeach;
                ?>
            ],
            backgroundColor: [
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                "rgb(247, 201, 89)",
                "rgb(68, 124, 158)",
                "rgb(78, 245, 197)",
                "rgb(158, 143, 186)",
                "rgb(250, 187, 135)",
                "rgb(247, 227, 126)",
                "rgb(247, 197, 188)",
                "rgb(166, 88, 86)",
                "rgb(247, 205, 181)",
                "rgb(255, 203, 134)",
                "rgb(201, 197, 143)",
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                ],
                hoverBackgroundColor: 'rgb(187,185,190)',
                hoverBorderColor: 'rgb(0, 0, 0, 1)',
        }]
    };
    var myBarChartProblemType = new Chart(ctx_, {
        type: 'pie',
        data: data_,
        options: {
            legend: {
                display: false
            },
            'onClick' : function (evt, item) {
                $('#tablePTrfp').empty();
                
                var label = this.data.labels[item[0]["_index"]];
                var problem_type_id;
                var rfpList = <?php echo json_encode($rfpList); ?>;
                var userList = <?php echo json_encode($userList); ?>;
                var problemTypeList = <?php echo json_encode($problemTypeList); ?>;

                problemTypeList.forEach( (problem) => {
                    if (label == problem.problem_type) {
                        problem_type_id = problem.id;
                    }
                })

                rfpList.forEach( (rfp) => {
                    if (rfp.problem_type == problem_type_id) {
                        var nama_requestor;
                        var jabatan_requestor;
                        var date = new Date(rfp.request_date);
                        var formattedDate = `${String(date.getDate()).length == 1 ? "0"+date.getDate() : date.getDate()}-${String(date.getMonth()+1).length == 1 ? "0"+ (date.getMonth()+1) : date.getMonth()+1}-${date.getFullYear()}`;
                        var problem_type;

                        userList.forEach( (user) => {
                            if (rfp.request_by == user.user_id) {
                                nama_requestor = user.nama;
                                jabatan_requestor = user.jabatan;
                            }
                        })


                        $('#tablePTrfp').append(`
                            <tr>
                                <td>
                                    ${nama_requestor}
                                </td>
                                <td>
                                    ${jabatan_requestor}
                                </td>
                                <td>
                                    ${rfp.no_rfp}
                                </td>
                                <td>
                                    ${formattedDate}
                                </td>
                                <td>
                                    ${rfp.request_status}
                                </td>
                                <td>
                                    ${rfp.result_status}
                                </td>
                            </tr>
                        `);

                    }
                })

                $('#modal-Chart4').modal('show');

            }, 
            responsive: true,
            title:{
                display:true,
                text:'Request Type Chart | Total RFP : <?php echo $this->db->get(TB_RFP)->row()->jmlh_rfp;?>'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = data.labels[tooltipItem.index];
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} | ` + (data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / <?php echo count($rfpList)?> * 100).toLocaleString()+'%';

                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }

                    // return the text to display on the tooltip
                    return dataLabel;
                    }
                }
            }
        }
    });

</script>

<div class="modal fade" id="modal-Chart4" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-left: 180px">
        <!-- Modal content-->
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h3 class="modal-title">Detail Problem Type</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <table style="margin-left: auto; margin-right: auto">
                    <thead class ="table">
                        <tr>
                            <th>REQUEST BY</th>
                            <th>JABATAN</th>
                            <th>NO.RFM</th>
                            <th>DATE</th>
                            <th>REQUEST STATUS</th>
                            <th>RESULT STATUS</th>
                        </tr>
                    </thead>
                    
                    <tbody class ="table" id="tablePTrfp">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    <?php
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }
        $rfmList = $this->db->join(TB_KODE_KANTOR, TB_KODE_KANTOR.".kode_kantor=".TB_DETAIL.".kode_kantor")->where('request_status !=', STT_ON_QUEUE)->where('request_status !=', STT_REJECT)->get(TB_DETAIL)->result();

        $this->db->select("COUNT(rfm_new_detail.kode_kantor) AS total_by_kk, view_app_kode_kantor.nama_kantor AS nama_kantor");
        $this->db->join(TB_KODE_KANTOR." as view_app_kode_kantor", "view_app_kode_kantor.kode_kantor = rfm_new_detail.kode_kantor");
        
        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);

        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }

        $this->db->group_by('rfm_new_detail.kode_kantor');
        $this->db->order_by('rfm_new_detail.kode_kantor', 'asc');

        $rfmGrouped = $this->db->get(TB_DETAIL)->result();
    ?>

    var ctx_ = document.getElementById("myChart5").getContext("2d");
    var data_ = {
        labels: [
            <?php 
                foreach($rfmGrouped as $r):
                    $data = array();
                    $data = $r->nama_kantor;
                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            data: [
                <?php
                    foreach($rfmGrouped as $r):
                        $data = array();
                        $data = $r->total_by_kk;
                        echo json_encode($data).",";
                    endforeach;
                ?>
            ],
            backgroundColor: [
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                "rgb(247, 201, 89)",
                "rgb(68, 124, 158)",
                "rgb(78, 245, 197)",
                "rgb(158, 143, 186)",
                "rgb(250, 187, 135)",
                "rgb(247, 227, 126)",
                "rgb(247, 197, 188)",
                "rgb(166, 88, 86)",
                "rgb(247, 205, 181)",
                "rgb(255, 203, 134)",
                "rgb(201, 197, 143)",
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                ],
                hoverBackgroundColor: 'rgb(187,185,190)',
                hoverBorderColor: 'rgb(0, 0, 0, 1)',
        }]
    };
    var myBarChartApplication = new Chart(ctx_, {
        type: 'pie',
        data: data_,
        options: {
            legend: {
                display: false
            },
            'onClick' : function (evt, item) {
                $('#table_kode_kantor').empty();
                
                var label = this.data.labels[item[0]["_index"]];
                var rfmList = <?php echo json_encode($rfmList); ?>;
                var userList = <?php echo json_encode($userList); ?>;

                rfmList.forEach( (rfm) => {
                    if (rfm.nama_kantor == label) {
                        var nama_requestor;
                        var jabatan_requestor;
                        var nama_pic = "-";
                        var date = new Date(rfm.request_date);
                        var formattedDate = `${String(date.getDate()).length == 1 ? "0"+date.getDate() : date.getDate()}-${String(date.getMonth()+1).length == 1 ? "0"+ (date.getMonth()+1) : date.getMonth()+1}-${date.getFullYear()}`;

                        userList.forEach( (user) => {
                            if (rfm.request_by == user.user_id) {
                                nama_requestor = user.nama;
                                jabatan_requestor = user.jabatan;
                            }

                            if (rfm.assign_to == user.user_id) {
                                nama_pic = user.nama;
                            }
                        })

                        $('#table_kode_kantor').append(`
                            <tr>
                                <td>
                                    ${nama_requestor}
                                </td>
                                <td>
                                    ${jabatan_requestor}
                                </td>
                                <td>
                                    ${rfm.no_rfm}
                                </td>
                                <td>
                                    ${formattedDate}
                                </td>
                                <td>
                                    ${rfm.request_status}
                                </td>
                                <td>
                                    ${rfm.result_status}
                                </td>
                                <td>
                                    ${nama_pic}
                                </td>
                            </tr>
                        `);

                    }
                })

                $('#modal-Chart5').modal('show');
            },
            responsive: true,
            title:{
                display:true,
                text:'RFM Chart'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = data.labels[tooltipItem.index];
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} | ` + (data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / <?php echo count($rfmList)?> * 100).toLocaleString()+'%';
                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }
                    return dataLabel;
                    }
                }
            }
        }
    });

</script>

<div class="modal fade" id="modal-Chart5" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-left: 180px">
        <!-- Modal content-->
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h3 class="modal-title">Detail RFM Berdasarkan Kantor</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <table style="margin-left: auto; margin-right: auto">
                    <thead class ="table">
                        <tr>
                            <th>REQUEST BY</th>
                            <th>JABATAN</th>
                            <th>NO.RFM</th>
                            <th>DATE</th>
                            <th>REQUEST STATUS</th>
                            <th>RESULT STATUS</th>
                            <th>PIC</th>
                        </tr>
                    </thead>
                    
                    <tbody class ="table" id="table_kode_kantor">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    <?php   
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }

        $rfmList = $this->db->join(TB_KODE_KANTOR, TB_KODE_KANTOR.".kode_kantor=".TB_DETAIL.".kode_kantor")->where('request_status !=', STT_ON_QUEUE)->where('request_status !=', STT_REJECT)->get(TB_DETAIL)->result();

        $this->db->select("COUNT(rfm_new_detail.kode_kantor) AS total_by_area, view_app_kode_kantor.kode_area AS kode_area");
        $this->db->join(TB_KODE_KANTOR." as view_app_kode_kantor", "view_app_kode_kantor.kode_kantor = rfm_new_detail.kode_kantor");
        
        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);

        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }

        $this->db->group_by('rfm_new_detail.kode_kantor');
        $this->db->order_by('rfm_new_detail.kode_kantor', 'asc');

        $rfmGrouped = $this->db->get(TB_DETAIL)->result();
    ?>

    var ctx_ = document.getElementById("myChart6").getContext("2d");
    var data_ = {
        labels: [
            <?php 
                foreach($rfmGrouped as $r):
                    $data = array();
                    $data = $r->kode_area;
                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            data: [
                <?php
                    foreach($rfmGrouped as $r):
                        $data = array();
                        $data = $r->total_by_area;
                        echo json_encode($data).",";
                    endforeach;
                ?>
            ],
            backgroundColor: [
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                "rgb(247, 201, 89)",
                "rgb(68, 124, 158)",
                "rgb(78, 245, 197)",
                "rgb(158, 143, 186)",
                "rgb(250, 187, 135)",
                "rgb(247, 227, 126)",
                "rgb(247, 197, 188)",
                "rgb(166, 88, 86)",
                "rgb(247, 205, 181)",
                "rgb(255, 203, 134)",
                "rgb(201, 197, 143)",
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                ],
                hoverBackgroundColor: 'rgb(187,185,190)',
                hoverBorderColor: 'rgb(0, 0, 0, 1)',
        }]
    };
    var myBarChartApplication = new Chart(ctx_, {
        type: 'pie',
        data: data_,
        options: {
            legend: {
                display: false
            },
            'onClick' : function (evt, item) {
                $('#table_kode_area').empty();
                
                var label = this.data.labels[item[0]["_index"]];
                var rfmList = <?php echo json_encode($rfmList); ?>;
                var userList = <?php echo json_encode($userList); ?>;

                rfmList.forEach( (rfm) => {
                    if (rfm.kode_area == label) {
                        var nama_requestor;
                        var jabatan_requestor;
                        var nama_pic = "-";
                        var date = new Date(rfm.request_date);
                        var formattedDate = `${String(date.getDate()).length == 1 ? "0"+date.getDate() : date.getDate()}-${String(date.getMonth()+1).length == 1 ? "0"+ (date.getMonth()+1) : date.getMonth()+1}-${date.getFullYear()}`;

                        userList.forEach( (user) => {
                            if (rfm.request_by == user.user_id) {
                                nama_requestor = user.nama;
                                jabatan_requestor = user.jabatan;
                            }

                            if (rfm.assign_to == user.user_id) {
                                nama_pic = user.nama;
                            }
                        })

                        $('#table_kode_area').append(`
                            <tr>
                                <td>
                                    ${nama_requestor}
                                </td>
                                <td>
                                    ${jabatan_requestor}
                                </td>
                                <td>
                                    ${rfm.no_rfm}
                                </td>
                                <td>
                                    ${formattedDate}
                                </td>
                                <td>
                                    ${rfm.request_status}
                                </td>
                                <td>
                                    ${rfm.result_status}
                                </td>
                                <td>
                                    ${nama_pic}
                                </td>
                            </tr>
                        `);

                    }
                })

                $('#modal-Chart6').modal('show');
            },
            responsive: true,
            title:{
                display:true,
                text:'RFM Chart'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = data.labels[tooltipItem.index];
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} | ` + (data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / <?php echo count($rfmList)?> * 100).toLocaleString()+'%';
                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }
                    return dataLabel;
                    }
                }
            }
        }
    });

</script>

<div class="modal fade" id="modal-Chart6" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-left: 180px">
        <!-- Modal content-->
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h3 class="modal-title">Detail RFM Berdasarkan Area</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <table style="margin-left: auto; margin-right: auto">
                    <thead class ="table">
                        <tr>
                            <th>REQUEST BY</th>
                            <th>JABATAN</th>
                            <th>NO.RFM</th>
                            <th>DATE</th>
                            <th>REQUEST STATUS</th>
                            <th>RESULT STATUS</th>
                            <th>PIC</th>
                        </tr>
                    </thead>
                    
                    <tbody class ="table" id="table_kode_area">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    <?php 
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }

        $rfmList = $this->db->join('dpm_online.'.TB_USER, 'dpm_online.'.TB_USER.".user_id=".TB_DETAIL.".request_by")->where('request_status !=', STT_ON_QUEUE)->where('request_status !=', STT_REJECT)->get(TB_DETAIL)->result();

        $this->db->select("COUNT(dpm_online.user.divisi_id) AS total_by_div, dpm_online.user.divisi_id AS divisi");
        $this->db->join('dpm_online.user', 'dpm_online.user.user_id = ticket_support.rfm_new_detail.request_by');

        $this->db->where('ticket_support.rfm_new_detail.request_status !=', STT_ON_QUEUE);
        $this->db->where('ticket_support.rfm_new_detail.request_status !=', STT_REJECT);

        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(ticket_support.rfm_new_detail.request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(ticket_support.rfm_new_detail.request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(ticket_support.rfm_new_detail.request_date)", $val_tahun);
        }

        $this->db->group_by('dpm_online.user.divisi_id');
        $this->db->order_by('dpm_online.user.divisi_id', 'asc');

        $groupedByDivision = $this->db->get(TB_DETAIL)->result();
    ?>

    var ctx_ = document.getElementById("myChart7").getContext("2d");
    var data_ = {
        labels: [
            <?php 
                foreach($groupedByDivision as $r):
                    $data = array();
                    $data = $r->divisi;
                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            data: [
                <?php
                    foreach($groupedByDivision as $r):
                        $data = array();
                        
                        $data = $r->total_by_div;
                        echo json_encode($data).",";
                    endforeach;
                ?>
            ],
            backgroundColor: [
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                "rgb(247, 201, 89)",
                "rgb(68, 124, 158)",
                "rgb(78, 245, 197)",
                "rgb(158, 143, 186)",
                "rgb(250, 187, 135)",
                "rgb(247, 227, 126)",
                "rgb(247, 197, 188)",
                "rgb(166, 88, 86)",
                "rgb(247, 205, 181)",
                "rgb(255, 203, 134)",
                "rgb(201, 197, 143)",
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                ],
                hoverBackgroundColor: 'rgb(187,185,190)',
                hoverBorderColor: 'rgb(0, 0, 0, 1)',
        }]
    };
    var myBarChartApplication = new Chart(ctx_, {
        type: 'pie',
        data: data_,
        options: {
            legend: {
                display: false
            },
            'onClick' : function (evt, item) {
                $('#tablerfm_divisi').empty();
                
                var label = this.data.labels[item[0]["_index"]];
                var rfmList = <?php echo json_encode($rfmList); ?>;
                var userList = <?php echo json_encode($userList); ?>;

                rfmList.forEach( (rfm) => {
                    if (rfm.divisi_id == label) {
                        var nama_requestor;
                        var jabatan_requestor;
                        var nama_pic = "-";
                        var date = new Date(rfm.request_date);
                        var formattedDate = `${String(date.getDate()).length == 1 ? "0"+date.getDate() : date.getDate()}-${String(date.getMonth()+1).length == 1 ? "0"+ (date.getMonth()+1) : date.getMonth()+1}-${date.getFullYear()}`;

                        userList.forEach( (user) => {
                            if (rfm.request_by == user.user_id) {
                                nama_requestor = user.nama;
                                jabatan_requestor = user.jabatan;
                            }

                            if (rfm.assign_to == user.user_id) {
                                nama_pic = user.nama;
                            }
                        })

                        $('#tablerfm_divisi').append(`
                            <tr>
                                <td>
                                    ${nama_requestor}
                                </td>
                                <td>
                                    ${jabatan_requestor}
                                </td>
                                <td>
                                    ${rfm.no_rfm}
                                </td>
                                <td>
                                    ${formattedDate}
                                </td>
                                <td>
                                    ${rfm.request_status}
                                </td>
                                <td>
                                    ${rfm.result_status}
                                </td>
                                <td>
                                    ${nama_pic}
                                </td>
                            </tr>
                        `);

                    }
                })

                $('#modal-Chart7').modal('show');
            },
            responsive: true,
            title:{
                display:true,
                text:'RFM Chart'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = data.labels[tooltipItem.index];
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} | ` + (data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / <?php echo count($rfmList)?> * 100).toLocaleString()+'%';
                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }
                    return dataLabel;
                    }
                }
            }
        }
    });

</script>

<div class="modal fade" id="modal-Chart7" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-left: 180px">
        <!-- Modal content-->
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h3 class="modal-title">Detail RFM Berdasarkan Divisi</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <table style="margin-left: auto; margin-right: auto">
                    <thead class ="table">
                        <tr>
                            <th>REQUEST BY</th>
                            <th>JABATAN</th>
                            <th>NO.RFM</th>
                            <th>DATE</th>
                            <th>REQUEST STATUS</th>
                            <th>RESULT STATUS</th>
                            <th>PIC</th>
                        </tr>
                    </thead>
                    
                    <tbody class ="table" id="tablerfm_divisi">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    <?php 
        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(request_date)", $val_tahun);
        }
        
        $rfpList = $this->db->join('dpm_online.'.TB_USER, 'dpm_online.'.TB_USER.".user_id=".TB_RFP.".request_by")->where('request_status !=', STT_ON_QUEUE)->where('request_status !=', STT_REJECT)->get(TB_RFP)->result();

        $this->db->select("COUNT(dpm_online.user.divisi_id) AS total_by_div, dpm_online.user.divisi_id AS divisi");
        $this->db->join('dpm_online.user', 'dpm_online.user.user_id = ticket_support.rfp_new_detail.request_by');

        $this->db->where('ticket_support.rfp_new_detail.request_status !=', STT_ON_QUEUE);
        $this->db->where('ticket_support.rfp_new_detail.request_status !=', STT_REJECT);

        if(!empty($post_monthAwal && $post_monthAkhir)) {
            $this->db->where("MONTH(ticket_support.rfp_new_detail.request_date) >=", $post_monthAwal);
            $this->db->where("MONTH(ticket_support.rfp_new_detail.request_date) <=", $post_monthAkhir);
            $this->db->where("YEAR(ticket_support.rfp_new_detail.request_date)", $val_tahun);
        }

        $this->db->group_by('dpm_online.user.divisi_id');
        $this->db->order_by('dpm_online.user.divisi_id', 'asc');

        $groupedByDivision = $this->db->get(TB_RFP)->result();
    ?>

    var ctx_ = document.getElementById("myChart8").getContext("2d");
    var data_ = {
        labels: [
            <?php 
                foreach($groupedByDivision as $r):
                    $data = array();
                    $data = $r->divisi;
                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            data: [
                <?php
                    foreach($groupedByDivision as $r):
                        $data = array();
                        
                        $data = $r->total_by_div;
                        echo json_encode($data).",";
                    endforeach;
                ?>
            ],
            backgroundColor: [
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                "rgb(247, 201, 89)",
                "rgb(68, 124, 158)",
                "rgb(78, 245, 197)",
                "rgb(158, 143, 186)",
                "rgb(250, 187, 135)",
                "rgb(247, 227, 126)",
                "rgb(247, 197, 188)",
                "rgb(166, 88, 86)",
                "rgb(247, 205, 181)",
                "rgb(255, 203, 134)",
                "rgb(201, 197, 143)",
                "rgb(240, 185, 185)",
                "rgb(192, 209, 157)",
                "rgb(247, 217, 121)",
                "rgb(147, 230, 218)",
                "rgb(240, 203, 161)",
                "rgb(247, 183, 166)",
                "rgb(219, 162, 199)",
                "rgb(141, 207, 136)",
                "rgb(209, 118, 88)",
                "rgb(163, 163, 163)",
                ],
                hoverBackgroundColor: 'rgb(187,185,190)',
                hoverBorderColor: 'rgb(0, 0, 0, 1)',
        }]
    };
    var myBarChartApplication = new Chart(ctx_, {
        type: 'pie',
        data: data_,
        options: {
            legend: {
                display: false
            },
            'onClick' : function (evt, item) {
                $('#tablerfp_divisi').empty();
                
                var label = this.data.labels[item[0]["_index"]];
                var rfpList = <?php echo json_encode($rfpList); ?>;
                var userList = <?php echo json_encode($userList); ?>;

                rfpList.forEach( (rfp) => {
                    if (rfp.divisi_id == label) {
                        var nama_requestor;
                        var jabatan_requestor;
                        var nama_pic = "-";
                        var date = new Date(rfp.request_date);
                        var formattedDate = `${String(date.getDate()).length == 1 ? "0"+date.getDate() : date.getDate()}-${String(date.getMonth()+1).length == 1 ? "0"+ (date.getMonth()+1) : date.getMonth()+1}-${date.getFullYear()}`;

                        userList.forEach( (user) => {
                            if (rfp.request_by == user.user_id) {
                                nama_requestor = user.nama;
                                jabatan_requestor = user.jabatan;
                            }

                            if (rfp.assign_to == user.user_id) {
                                nama_pic = user.nama;
                            }
                        })


                        $('#tablerfp_divisi').append(`
                            <tr>
                                <td>
                                    ${nama_requestor}
                                </td>
                                <td>
                                    ${jabatan_requestor}
                                </td>
                                <td>
                                    ${rfp.no_rfp}
                                </td>
                                <td>
                                    ${formattedDate}
                                </td>
                                <td>
                                    ${rfp.request_status}
                                </td>
                                <td>
                                    ${rfp.result_status}
                                </td>
                                <td>
                                    ${nama_pic}
                                </td>
                            </tr>
                        `);

                    }
                })

                $('#modal-Chart8').modal('show');
            },
            responsive: true,
            title:{
                display:true,
                text:'RFP Chart'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = data.labels[tooltipItem.index];
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} | ` + (data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] / <?php echo count($rfmList)?> * 100).toLocaleString()+'%';
                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }
                    return dataLabel;
                    }
                }
            }
        }
    });
</script>

<div class="modal fade" id="modal-Chart8" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-left: 180px">
        <!-- Modal content-->
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h3 class="modal-title">Detail RFP Berdasarkan Divisi</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <table style="margin-left: auto; margin-right: auto">
                    <thead class ="table">
                        <tr>
                            <th>REQUEST BY</th>
                            <th>JABATAN</th>
                            <th>NO.RFM</th>
                            <th>DATE</th>
                            <th>REQUEST STATUS</th>
                            <th>RESULT STATUS</th>
                            <th>PIC</th>
                        </tr>
                    </thead>
                    
                    <tbody class ="table" id="tablerfp_divisi">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    <?php
        $applicationList = $this->db->get(TB_PROJECT)->result();
        $problemTypeList = $this->db->get(TB_PROBLEM_TYPE)->result();

        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);
        $rfmList = $this->db->get(TB_DETAIL)->result();
        
        $this->db->select("COUNT(*) AS jmlh_rfm");
        $this->db->where('request_status !=', STT_ON_QUEUE);
        $this->db->where('request_status !=', STT_REJECT);

        $jmlh_rfm = $this->db->get(TB_DETAIL)->row()->jmlh_rfm;
    ?>

    var ctx_ = document.getElementById("myChart9").getContext("2d");
    var data_ = {
        labels: [
            <?php
                foreach(DAFTAR_BULAN as $r):
                    $data = array();
                    $data = $r;
                    
                    if ($r == strtoupper(date("F"))) {
                        echo json_encode($data).",";
                        break;
                    }

                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            label: 'Kumulatif',
            fill: false,
            borderColor: "#9bc1eb",
            backgroundColor: "#9bc1eb",
            data: [
                <?php
                    $data = array();
                    $counter = 0;

                    for ($x = 1; $x <= 12; $x++) {
                        $this->db->select("COUNT(*) AS jmlh_rfm");
                        $this->db->where('request_status !=', STT_ON_QUEUE);
                        $this->db->where('request_status !=', STT_REJECT);
                        $this->db->where("MONTH(request_date)", $x);
                        $this->db->where("YEAR(request_date)", date("Y"));
                        $jmlh_rfm_per_month = $this->db->get(TB_DETAIL)->row()->jmlh_rfm;
                        $counter += $jmlh_rfm_per_month;
                        $data = $counter;

                        if ($x == date("m")) {
                            echo json_encode($data).",";
                            break;
                        }
                        echo json_encode($data).",";
                    }
                ?>
            ],
        },
        {
            label: 'RFM',
            fill: false,
            borderColor: "#e89694",
            backgroundColor: "#e89694",
            data: [
                <?php
                    $data = array();

                    for ($x = 1; $x <= 12; $x++) {
                        $this->db->select("COUNT(*) AS jmlh_rfm");
                        $this->db->where('request_status !=', STT_ON_QUEUE);
                        $this->db->where('request_status !=', STT_REJECT);
                        $this->db->where("MONTH(request_date)", $x);
                        $this->db->where("YEAR(request_date)", date("Y"));
                        $jmlh_rfm_per_month = $this->db->get(TB_DETAIL)->row()->jmlh_rfm;
                        $data = $jmlh_rfm_per_month;

                        if ($x == date("m")) {
                            echo json_encode($data).",";
                            break;
                        }
                        echo json_encode($data).",";
                    }
                ?>
            ],
        }]
    };
    var myBarChartApplication = new Chart(ctx_, {
        type: 'line',
        data: data_,
        options: {
            legend: {
                labels : {
                    useLineStyle: true,
                },
            },
            responsive: true,
            title:{
                display:true,
                text:'Total RFM : <?php echo $jmlh_rfm ?>'
            },
            scales: {
                yAxes: [{
                    ticks: {
                        suggestedMin: 0,
                        stepSize: 1
                    }
                }]
            },            
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = "Total RFM ";
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} `;
                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }
                    return dataLabel;
                    }
                }
            }
        }
    });

//==================================================
<?php
    $applicationList = $this->db->get(TB_PROJECT)->result();
    $problemTypeList = $this->db->get(TB_PROBLEM_TYPE)->result();

    $this->db->where('request_status !=', STT_ON_QUEUE);
    $this->db->where('request_status !=', STT_REJECT);
    $rfpList = $this->db->get(TB_RFP)->result();
    
    $this->db->select("COUNT(*) AS jmlh_rfp");
    $this->db->where('request_status !=', STT_ON_QUEUE);
    $this->db->where('request_status !=', STT_REJECT);

    $jmlh_rfp = $this->db->get(TB_RFP)->row()->jmlh_rfp;
?>

    var ctx_ = document.getElementById("myChart10").getContext("2d");
    var data_ = {
        labels: [
            <?php
                foreach(DAFTAR_BULAN as $r):
                    $data = array();
                    $data = $r;
                    
                    if ($r == strtoupper(date("F"))) {
                        echo json_encode($data).",";
                        break;
                    }

                    echo json_encode($data).",";
                endforeach;
            ?>
        ],
        datasets:
        [{
            label: 'Kumulatif',
            fill: false,
            borderColor: "#9bc1eb",
            backgroundColor: "#9bc1eb",
            data: [
                <?php
                    $data = array();
                    $counter = 0;

                    for ($x = 1; $x <= 12; $x++) {
                        $this->db->select("COUNT(*) AS jmlh_rfp");
                        $this->db->where('request_status !=', STT_ON_QUEUE);
                        $this->db->where('request_status !=', STT_REJECT);
                        $this->db->where("MONTH(request_date)", $x);
                        $this->db->where("YEAR(request_date)", date("Y"));
                        $jmlh_rfp_per_month = $this->db->get(TB_RFP)->row()->jmlh_rfp;
                        $counter += $jmlh_rfp_per_month;
                        $data = $counter;

                        if ($x == date("m")) {
                            echo json_encode($data).",";
                            break;
                        }
                        echo json_encode($data).",";
                    }
                ?>
            ],
        },
        {
            label: 'RFP',
            fill: false,
            borderColor: "#e89694",
            backgroundColor: "#e89694",
            data: [
                <?php
                    $data = array();

                    for ($x = 1; $x <= 12; $x++) {
                        $this->db->select("COUNT(*) AS jmlh_rfp");
                        $this->db->where('request_status !=', STT_ON_QUEUE);
                        $this->db->where('request_status !=', STT_REJECT);
                        $this->db->where("MONTH(request_date)", $x);
                        $this->db->where("YEAR(request_date)", date("Y"));
                        $jmlh_rfp_per_month = $this->db->get(TB_RFP)->row()->jmlh_rfp;
                        $data = $jmlh_rfp_per_month;

                        if ($x == date("m")) {
                            echo json_encode($data).",";
                            break;
                        }
                        echo json_encode($data).",";
                    }
                ?>
            ],
        }]
    };
    var myBarChartApplication = new Chart(ctx_, {
        type: 'line',
        data: data_,
        options: {
            legend: {
                labels : {
                    useLineStyle: true,
                },
            },
            responsive: true,
            title:{
                display:true,
                text:'Total RFP : <?php echo $jmlh_rfp ?>'
            },
            scales: {
                yAxes: [{
                    ticks: {
                        suggestedMin: 0,
                        stepSize: 1
                    }
                }]
            },            
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                    var dataLabel = "Total RFP ";
                    var value = `: ${data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]} `;
                    if (Chart.helpers.isArray(dataLabel)) {
                        dataLabel = dataLabel.slice();
                        dataLabel[0] += value;
                    } else {
                        dataLabel += value;
                    }
                    return dataLabel;
                    }
                }
            }
        }
    });
//==================================================

    document.getElementById("monthAwal").addEventListener("change", function(){
        var e = document.getElementById("monthAwal");
        document.getElementById("monthAkhir").innerHTML = "";

        function getBulan(angka) {
            var monthText;
            switch (angka) {
                case 1:
                    monthText = 'Januari' 
                    break;
                case 2:
                    monthText = 'Februari' 
                    break;
                case 3:
                    monthText = 'Maret' 
                    break;
                case 4:
                    monthText = 'April' 
                    break;
                case 5:
                    monthText = 'Mei' 
                    break;
                case 6:
                    monthText = 'Juni' 
                    break;
                case 7:
                    monthText = 'Juli' 
                    break;
                case 8:
                    monthText = 'Agustus' 
                    break;
                case 9:
                    monthText = 'September' 
                    break;
                case 10:
                    monthText = 'Oktober' 
                    break;
                case 11:
                    monthText = 'November' 
                    break;
                case 12:
                    monthText = 'Desember' 
                    break;
            }
            return monthText;
        }

        for (var i= Number(e.options[e.selectedIndex].value); i<=12; i++) {
            if (i > 0) {
                document.getElementById("monthAkhir").innerHTML = document.getElementById("monthAkhir").innerHTML + `<option value='${i}'>${getBulan(i)}</option>`;
            }
        }
        
    });

</script>

<div class="row pt-3">
    <!-- <div class="col-md-6">
        <div class="card">
            <div class="card-header"><b>PERSENTASE RFM BERDASARKAN KANTOR</b></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="dt_dashboard">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th>NAMA KANTOR</th>
                                <th>JUMLAH REQUEST</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $Q = 'SELECT kode_kantor, COUNT(*) as total_by_kk
                                FROM ticket_support.rfm_new_detail
                                GROUP BY kode_kantor';
                                $rfmGrouped = $this->db->query($Q)->result();
                                
                                foreach($rfmGrouped as $r): 
                            ?>
                                <tr>
                                    <td>
                                        <?php 
                                            $this->db->where('kode_kantor', $r->kode_kantor);
                                            echo $this->db->get(TB_KODE_KANTOR)->row()->nama_kantor;
                                        ?>
                                    </td>
                                    <td style="text-align: right"><?php echo $r->total_by_kk ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><b>JUMLAH</b></td>
                                <td style="text-align: right"><?php echo "<b>$total_semua</b>" ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="col-md-6">
        <div class="card">
            <div class="card-header"><b>REQUEST BERDASARKAN DIVISI</b></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="dt_dashboard">
                    <thead class="bg-primary text-light">
                            <tr>
                                <th>DIVISI</th>
                                <th>JUMLAH REQUEST</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                               $divisi = 'SELECT dpm_online.user.divisi_id as divisi_id, COUNT(*) as total_by_div
                                FROM ticket_support.rfm_new_detail
                                INNER JOIN dpm_online.user
                                ON ticket_support.rfm_new_detail.request_by = dpm_online.user.user_id
                                GROUP BY dpm_online.user.divisi_id';
                                $rfmDivisi = $this->db->query($divisi)->result();
                                
                                foreach($rfmDivisi as $r): 
                            ?>
                                <tr>
                                    <td>
                                        <?php 
                                            echo $r->divisi_id;
                                        ?>
                                    </td>
                                    <td style="text-align: right"><?php echo $r->total_by_div ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><b>JUMLAH</b></td>
                                <td style="text-align: right"><?php echo "<b>$total_semua</b>" ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div> -->
</div>

                
<!-- <div class="row pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">ACCEPTED RFM RATIO</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="dt_dashboard">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th>PROBLEM TYPE</th>
                                <th>JML PENDING</th>
                                <th>JML ACCEPTED</th>
                                <th>JML REJECTED</th>
                                <th>RASIO ACCEPTED</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($chart_pie as $r): ?>
                            <tr>
                                <td style="text-align: left"><?php echo $r->problem_type ?></td>
                                <td style="text-align: right"><?php echo $r->jml_rfm_pending ?></td>
                                <td style="text-align: right"><?php echo $r->jml_rfm_accepted ?></td>
                                <td style="text-align: right"><?php echo $r->jml_rfm_reject ?></td>
                                <td style="text-align: right"><?php echo $r->rasio_rfm_accepted." %" ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><b>JUMLAH</b></td>
                                <td></td>
                                <td style="text-align: right"><?php echo "<b>$total_semua</b>" ?></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->

