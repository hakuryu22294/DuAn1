<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h1>THỐNG KÊ</h1>
        </div>
        <div class="frmcontent">
            <div class="statitis-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>LOẠI HÀNG</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($stt_list as $stt){
                                extract($stt);
                                echo '<tr class="py-3">
                                        <td>'.$cateid.'</td>
                                        <td>'.$catename.'</td>
                                        <td>'.$countprd.'</td>
                                        <td>'.$maxprice.'</td>
                                        <td>'.$minprice.'</td>                             
                                        <td>'.$avgprice.'</td>                             
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="mb-10">
                <a href="index.php?act=viewchart"><input type="button" class="btn btn-success" value="Xem Biểu Đồ" name="viewchart"></a>
            </div>
        </div>
    </div>
</div>