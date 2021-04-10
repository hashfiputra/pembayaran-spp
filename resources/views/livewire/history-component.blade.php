<div>
    <div class="conteiner">
        <div class="row justify-content-center">
            <div class="card card-primary" style="width: 90%;">
                <div class="card-header">
                    <h3 class="card-title">Riwayat Transaksi</h3>
                </div>
                <div class="card-body">
                    @if (Auth::user()->level === 'siswa')
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" wire:model='nisn' placeholder="Masukkan NISN">
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-primary" wire:click='laporan'>
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <hr>
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>SPP</th>
                                    <th>Jumlah Dibayar</th>
                                    <th>Bulan Yang Dibayar</th>
                                    <th>Dibayar Pada</th>
                                </tr>
                            </thead>
                            @if (Auth::user()->level === 'admin' or Auth::user()->level === 'petugas')
                            @foreach ($history as $key)
                            <tbody>
                                <tr>
                                    <td>{{$key->nisn}}</td>
                                    <td>{{$key->nama}}</td>
                                    <td>{{$key->nama_kelas}}</td>
                                    <td>Rp{{$key->nominal}}</td>
                                    <td>Rp{{$key->jumlah_bayar}}</td>
                                    <td>{{$key->bulan_dibayar}}</td>
                                    <td>{{$key->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            @foreach ($dataHistory as $key)
                            <tbody>
                                <tr>
                                    <td>{{$key->nisn}}</td>
                                    <td>{{$key->nama}}</td>
                                    <td>{{$key->nama_kelas}}</td>
                                    <td>Rp{{$key->nominal}}</td>
                                    <td>Rp{{$key->jumlah_bayar}}</td>
                                    <td>{{$key->bulan_dibayar}}</td>
                                    <td>{{$key->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
