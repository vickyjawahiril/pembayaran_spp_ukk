<h5>Halaman tambah Data SPP</h5>
<a href="?url=spp" class="btn btn-primary"> Kembali </a>
<hr>
<form method="post" action="?url=proses-tambah-spp">
    <div class="form-group mb-2"><label>Tahun</label>
        <input type="date" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2"><label>Nominal</label>
        <input type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> Simpan </button>
        <button type="reset" class="btn btn-warning"> Kosongkan </button>
    </div>
</form>