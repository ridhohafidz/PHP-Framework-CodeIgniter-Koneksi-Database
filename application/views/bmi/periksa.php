<h3>Form Periksa  BMI Pasien</h3>
<?php echo form_open('bmi/simpan') ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" value="<?=$tanggal?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pasien_id" class="col-4 col-form-label">Pasien</label> 
    <div class="col-8">
      <select id="pasien_id" name="pasien_id" class="custom-select">
        <option value="0">-- Pilih Pasien --</option>
        <?php
        foreach($list_pasien as $pasien){
            echo '<option value ="'.$pasien->id.'">'.$pasien->nama.'</option>';
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="berat" name="berat" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">Kg</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="tinggi" name="tinggi" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">Cm</div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>