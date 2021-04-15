<div>
    @if (Route::has('login'))
    @auth
    @if (Auth::user()->level === 'admin')
    <script>window.location = "/siswa";</script>
    @elseif (Auth::user()->level === 'petugas')
    <script>window.location = "/transaksi";</script>
    @elseif (Auth::user()->level === 'siswa')
    <script>window.location = "/historyPembayaran";</script>
    @endif
    @endif
    @endif
</div>
