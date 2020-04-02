<li class="nav-item">
    <a class="nav-link" href="{{ route('app.beranda') }}">{{ __('Beranda') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('app.kunjungan.index') }}">{{ __('Kunjungan') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('app.check_in.index') }}">{{ __('Check in') }}</a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Laporan <span class="caret"></span>
    </a>

    

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="{{ route('app.laporan_kunjungan.index') }}">
            {{ __('Laporan Kunjungan') }}
        </a>

        <a class="dropdown-item" href="{{ route('app.laporan_kunjungan_tahunan.index') }}">
            {{ __('Laporan Kunjungan Tahunan') }}
        </a>

        <a class="dropdown-item" href="{{ route('app.laporan_pendapatan.index') }}">
            {{ __('Laporan Pendapatan') }}
        </a>

        <a class="dropdown-item" href="{{ route('app.laporan_pendapatan_tahunan.index') }}">
            {{ __('Laporan Pendapatan Tahunan') }}
        </a>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('app.kategori_pengunjung.index') }}">{{ __('Kategori Pengunjung & Pengaturan Tarif') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('app.booth.index') }}">{{ __('Booth') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('app.user.index') }}">{{ __('Pengguna') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('app.activity_log.index') }}">{{ __('Log Aktifitas') }}</a>
</li>