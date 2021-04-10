<div>
    <div>
        <div class="modal fade" id="jumlahBayar">
            <div class="modal-dialog modal-sm">
                <div class="modal-content bg-primary">
                    <div class="modal-body align-self-center">
                        <h6>Total jumlah bayar Rp{{ $totalBayar }}</h6>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" class="btn btn-info" wire:click='simpanPembayaran'>
                            Simpan
                        </button>
                    </div>
                </div> <!-- /.modal-content -->
            </div> <!-- /.modal-dialog -->
        </div> <!-- /.modal -->
    </div>
    <div class="conteiner">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Transaksi Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col" style="color:blue;text-align:center;">
                                    <div style="align-text:right"> <label>Petugas:
                                            {{ Auth::user()->name }}</label><br> @php $hariIni = new DateTime();
                                        echo $hariIni->format('l F Y') . '<br>'; @endphp </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col"> <label for="exampleInputPassword1">NISN</label>
                                    <div class="input-group"> <input type="text" class="form-control" wire:model="nisn"
                                            placeholder="Masukkan NISN"> <span class="input-group-append"> <button
                                                type="button" class="btn btn-info btn-flat" wire:click='crSPP'><i
                                                    class="fab fa-searchengin"></i></button> </span> </div>
                                </div>
                                <div class="col"> <label for="exampleInputPassword1">Nominal</label> <input type="number"
                                        class="form-control" id="exampleInputEmail1" placeholder="Masukkan nominal"
                                        wire:model="spp">
                                    <input type="hidden" class="form-control" id="exampleInputEmail1"
                                        wire:model="idSPP"> </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div wire:ignore> <label>Tahun</label>
                                            <div class="mb-3 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt text-info"></i>
                                                    </span>
                                                </div>
                                                <select id="year" class="form-control" wire:model='tahun'></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 col"><br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="clearfix form-group">
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Januari" wire:model="bulan"
                                                        class="ch"> <label for="checkboxPrimary1"> Januari </label>
                                                </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Februari" wire:model="bulan">
                                                    <label for="checkboxPrimary1"> Februari </label> </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Maret" wire:model="bulan">
                                                    <label for="checkboxPrimary1"> Maret </label> </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="April" wire:model="bulan"> <label
                                                        for="checkboxPrimary1"> April </label> </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Mei" wire:model="bulan"> <label
                                                        for="checkboxPrimary1"> Mei </label> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="clearfix form-group">
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Juni" wire:model="bulan"> <label
                                                        for="checkboxPrimary1"> Juni </label> </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Juli" wire:model="bulan"> <label
                                                        for="checkboxPrimary1"> Juli </label> </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Agustus" wire:model="bulan">
                                                    <label for="checkboxPrimary1"> Agustus </label> </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="September" wire:model="bulan">
                                                    <label for="checkboxPrimary1"> September </label> </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Oktober" wire:model="bulan"> <label
                                                        for="checkboxPrimary1"> Oktober </label> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="clearfix form-group">
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="November" wire:model="bulan">
                                                    <label for="checkboxPrimary1"> November </label> </div>
                                                <div class="icheck-primary d-inline"> <input type="checkbox"
                                                        id="checkboxPrimary1" value="Desember" wire:model="bulan">
                                                    <label for="checkboxPrimary1"> Desember </label> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="float:left;display:block;"> <button type="button"
                                    class="btn btn-primary" wire:click='simpan'>Bayar</button> </div>
                            <div class="card-footer" style="float:right;display:block;">
                                <div> @if (session()->has('message')) <div class="alert alert-success">
                                        {{ session('message') }} </div> @endif </div> </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
