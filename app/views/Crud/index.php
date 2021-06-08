<div class="container mt-5">
  <div class="row">
    <div class="col-11">
      <h1>Aplikasi CRUD simpel</h1>
    </div>
    <div class="col-1">
      <?php
        if (isset($_SESSION['login'])){
          echo '<a class="btn btn-danger" href="'.BASEURL.'Admin/Logout">Logout</a>';
        }else{
          echo('');
        }
      ?>
    </div>
  </div>
  <a href="https://www.instagram.com/ciptiadmyt" class="text-primary" style="text-decoration:none;"><b>Nurul Habibah XII RPL 2</b></a>
  <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="tambah-tab" data-toggle="tab" href="#tambah" role="tab" aria-controls="tambah" aria-selected="false">Tambah</a>
    </li>
  </ul>
  <div class="tab-content mt-5" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <h2 class="text-primary">Home</h2>
      <ul class="list-group">
        <?php foreach ($data as $nama) :?>
        <li class="list-group-item">
          <?=$nama['nama']?>
            <a class="delete badge badge-danger float-right" href="<?=BASEURL?>Crud/delete/<?=$nama['id']?>" id="delete">Hapus</a>
            <a class="badge badge-success float-right mr-2 updatebadge" href="<?=BASEURL?>Crud/getUpdate" id="tampilUpdate" data-id="<?=$nama['id']?>" data-toggle="modal" data-target="#modalUbah">update</a>
            <a class="badge badge-primary float-right mr-2" href="<?=BASEURL?>Crud/detail/<?=$nama['id']?>">detail</a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="tab-pane fade" id="tambah" role="tabpanel" aria-labelledby="tambah-tab">
      <h2 class="text-primary">Tambah</h2>
      <form action="<?=BASEURL?>Crud/tambah" method="POST">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input class="form-control" type="text" name="nama" id="nama">
        </div>
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <select class="form-control" name="kelas" id="kelas">
            <option value="XI RPL">XI RPL</option>
            <option value="XII RPL 1">XII RPL 1</option>
            <option value="XII RPL 2">XII RPL 2</option>
          </select>
        </div>
        <div class="form-group">
          <label for="absen">Absen</label>
          <input class="form-control" type="number" name="absen" id="absen">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal ubah -->
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Ubah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2 class="text-primary">Ubah</h2>
    <form action="<?=BASEURL?>Crud/update" method="POST">
    <input type="hidden" name="idUpdate" id="idUpdate">
      <div class="form-group">
        <label for="namaUpdate">Nama</label>
        <input class="form-control" type="text" name="namaUpdate" id="namaUpdate">
      </div>
      <div class="form-group">
        <label for="kelasUpdate">Kelas</label>
        <select class="form-control" name="kelasUpdate" id="kelasUpdate">
          <option value="XI RPL">XI RPL</option>
          <option value="XII RPL 1">XII RPL 1</option>
          <option value="XII RPL 2">XII RPL 2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="absenUpdate">Absen</label>
        <input class="form-control" type="number" name="absenUpdate" id="absenUpdate">
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="update">Update</button>
      </div>
    </form>
    </div>
  </div>
</div>