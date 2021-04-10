<div>
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kelas</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama kelas" wire:model="nama_kelas">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kompetensi Keahlian</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan kompetensi keahlian" wire:model="kompetensi_keahlian">
            </div>
        </div><!-- /.card-body -->
        <div class="card-footer" style="float:right;display:block;">
            <button type="submit" class="btn btn-info" wire:click='simpan'>
                Simpan
            </button>
        </div>
    </form>
</div>
