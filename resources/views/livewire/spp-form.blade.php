<div>
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <div wire:ignore>
                    <label>Tahun</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt text-info"></i>
                            </span>
                        </div>
                        <select id="year" class="form-control" wire:model="tahun"></select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nominal</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nominal" wire:model="nominal">
            </div>
        </div><!-- /.card-body -->
        <div class="card-footer" style="float:right;display:block;">
            <button type="submit" class="btn btn-info" wire:click='simpan'>
                Simpan
            </button>
        </div>
    </form>
</div>
