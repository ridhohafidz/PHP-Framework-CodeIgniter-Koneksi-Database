<h2>Data Pasien #ID : <?=$bmi_pasien->id?></h2>

<div>
    <table class="table table-striped">
        <tr>
        <td>Tanggal</td><td>:</td><td><?=$bmi_pasien->tanggal?></td>
        </tr>
        <tr><td>Berat</td><td>:</td><td><?=$bmi_pasien->berat?></td></tr>
        <tr>
        <td>Tinggi</td><td>:</td><td><?=$bmi_pasien->tinggi?></td>
        </tr>
        <tr>
        <td>Status BMI</td><td>:</td>
        <td><?=$bmi_pasien->status_bmi?></td>
        </tr>
        <tr><td>Catatan</td><td>:</td><td><?=$bmi_pasien->catatan?></td></tr>
        </tr>
        <tr><td>Pasien ID</td><td>:</td><td><?=$bmi_pasien->pasien_id?></td></tr>        
    </table>
</div> 