<div class="container">
    <div class="card" style="margin-top:25vh;">
        <div class="card-body">
            <h3 class="text-primary"><?=$data['nama']?></h3>
            <label for="kelas">Kelas</label>
            <p class="font-weight-bold" id="kelas"><?=$data['kelas']?></p>
            <label for="absen">Absen</label>
            <p class="font-weight-bold" id="absen"><?=$data['absen']?></p>
        </div>
        <div class="card-footer">
            <a class="badge badge-primary" href="<?=BASEURL?>Home/index">Back</a>
        </div>
    </div>
</div>