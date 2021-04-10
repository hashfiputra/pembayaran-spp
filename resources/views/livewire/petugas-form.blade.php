<div>
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Username/Kode Petugas</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan username atau kode petugas" wire:model="username">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama" wire:model="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email" wire:model="email">
            </div>
        </div><!-- /.card-body -->
        <div class="card-footer" style="float:right;display:block;">
            <button type="submit" class="btn btn-info" wire:click='simpan'>
                Simpan
            </button>
        </div>
    </form>
</div>
