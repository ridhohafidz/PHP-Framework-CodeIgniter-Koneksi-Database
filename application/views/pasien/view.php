<h2>Data Pasien #ID : <?=$pasien->id?></h2>

<div>
    <table class="table table-striped">
        <tr>
        <td>Kode Pasien</td><td>:</td><td><?=$pasien->kode?></td>
        </tr>
        <tr><td>Nama</td><td>:</td><td><?=$pasien->nama?></td></tr>
        <tr>
        <td>Gender</td><td>:</td><td><?=$pasien->gender?></td>
        </tr>
        <tr>
        <td>Tempat, Tgl Lahir</td><td>:</td>
        <td><?=$pasien->tmp_lahir?>, <?=$pasien->tgl_lahir?></td>
        </tr>
        <tr><td>Email</td><td>:</td><td><?=$pasien->email?></td></tr>
    </table>
</div>