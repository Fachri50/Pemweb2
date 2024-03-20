<h1>Form nilai siswa</h1>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET" action="hasil_nilai.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8"> 
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemograman</option>
        <option value="Pemweb">Pemograman Web</option>
        <option value="ui/ux">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="Nilai_uts" name="Nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="Nilai_uas" name="Nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_praktikum" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="Nilai_praktikum" name="Nilai_praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
