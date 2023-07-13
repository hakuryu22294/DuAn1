<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <div class="container">
        <div class="box-admin space">
            <div class="box-title">
                <h2>Biểu đồ</h2>
            </div>
            <div
            id="myChart" class="p-3" style="width:100%; max-width:600px; height:500px;margin: 0 auto">
            </div>
        </div>
    </div>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Danh mục', 'Số sản phẩm'],
    <?php
        $total_cate = count($stt_list);
        $i=1;
        foreach($stt_list as $stt){
            extract($stt);
            if($i==$total_cate) $comma = ""; else $comma = ",";
            echo "['".$stt['catename']."',".$stt['countprd']."]".$comma;
            $i+=1;
        }
    
    ?>
   
    ]);

    var options = {
    title:'Thống kê sản phẩm theo danh mục'
    };

    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
    }
</script>
