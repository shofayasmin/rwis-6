<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link ke file CSS Anda -->
    <link rel="stylesheet" href="path/to/your/css/file.css">
    <!-- Gaya CSS langsung -->
    <style>
        .active {
            color: #037afb; /* atau menggunakan rgba(3,122,251,255) */
        }
    </style>
</head>

<div class="lime-sidebar">
    <div class="lime-sidebar-inner slimscroll">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                POV General / Belum Terpisah
            </li>
            <li>
                <a href="{{ asset('home') }}" class="{{ Request::path() === 'home' ? 'active' : '' }}">
                    <i class="material-icons">dashboard</i>Dashboard
                </a>
            </li>

            <li class="page {{ Request::is('laporan*') ? 'active-page' : '' }}">
                <a href="#"><i class="material-icons">person_outline</i>Laporan<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('laporan.create') }}" class="{{ Request::routeIs('laporan.create') ? 'active' : '' }}">Membuat Laporan</a>
                    </li>
                    <li>
                        <a href="{{ route('laporan.view') }}" >View Laporan</a>
                    </li>
                </ul>
            </li>
            

            <li class="page {{ Request::is('acara*') || Request::is('umkm*') ? 'active-page' : '' }}">
                <a href="#"><i class="material-icons">inbox</i>Acara<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('umkm.register') }}" >UMKM Register</a>
                    </li>
                    <li>
                        <a href="{{ route('acara.manage') }}" >Manage</a>
                    </li>
                    <li>
                        <a href="{{ route('acara.view') }}" >View</a>
                    </li>
                </ul>
            </li>

            <li class="page {{ Request::is('Bansos*') ? 'active-page' : '' }}">
                <a href="#"><i class="material-icons">done_all</i>Bansos<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('bansos.informasi') }}">Informasi Terbaru Bansos</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('bansos.pengajuan') }}">Pengajuan Bansos</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('bansos.manage') }}">Manage Bansos</a>
                    </li>
                </ul>
            </li>

<<<<<<< HEAD

            <li>
                <a href="{{ route('citizen.index') }}" class="{{ Request::routeIs('citizen.index') ? 'active' : '' }}"><i class="material-icons">person</i>Citizen</a>
            </li>
=======
            @can('sekretaris')
>>>>>>> 351a429431c6e3ccd0a911f2f49c77cab2fa6a3e
            <li class="sidebar-title">
                Sekretaris
            </li>
            <li>
                <a href="{{ route('iuran.index') }}" class="{{ Request::routeIs('iuran.index') ? 'active' : '' }}"><i class="material-icons">cloud_queue</i>Iuran</a>
            </li>
            <li>
                <a href="{{ route('citizen.index') }}"><i class="material-icons {{ Request::routeIs('citizen.index') ? 'active' : '' }}">person</i>Citizen</a>
            </li>
            @endcan

<<<<<<< HEAD

=======
            @can('rw')
>>>>>>> 351a429431c6e3ccd0a911f2f49c77cab2fa6a3e
            <li class="sidebar-title">
                RW
            </li>
            <li>
                <a href="{{ route('bansos.lurah') }}" class="{{ Request::routeIs('bansos.lurah') ? 'active' : '' }}">
                    <i class="material-icons">inbox</i>Mailbox</a>
            </li>
<<<<<<< HEAD
            <li>
                <a href="{{ route('dashboard.rw') }}" class="{{ Request::routeIs('dashboard.rw') ? 'active' : '' }}">
                    <i class="material-icons">dashboard</i>Dashboard_rw
                </a>
            </li>

=======
            @endcan
>>>>>>> 351a429431c6e3ccd0a911f2f49c77cab2fa6a3e

            <li class="sidebar-title">
                Warga
            </li>
            <li>
                <a href="{{ route('dashboard.warga') }}" class="{{ Request::routeIs('dashboard.warga') ? 'active' : '' }}">
                    <i class="material-icons">dashboard</i>Dashboard_warga
                </a>
            </li>

            <li class="sidebar-title">
                SPK
            </li>
            {{-- <li>
                <a href="{{ route('spk.electre') }}" class="{{ Request::routeIs('spk.electre') ? 'active' : '' }}">
                    <i class="material-icons">calculate</i>ELECTRE
                </a>
            </li>
            <li>
                <a href="{{ route('spk.saw') }}" class="{{ Request::routeIs('spk.saw') ? 'active' : '' }}">
                    <i class="material-icons">calculate</i>SAW
                </a>
            </li> --}}
            <li>
                <a href="{{ route('spk.topsis') }}" class="{{ Request::routeIs('spk.topsis') ? 'active' : '' }}">
                    <i class="material-icons">calculate</i>topsis
                </a>
            </li>



        </ul>
    </div>
</div>
