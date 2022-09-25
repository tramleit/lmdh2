<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/templates/espire/assets/images/logo/favicon.ico">

    <!-- page css -->
    <!-- Core css -->
    <link href="/templates/espire/assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            <div class="header-text-dark header-nav layout-vertical">
                <div class="header-nav-wrap">
                    <div class="header-nav-left">
                        <div class="header-nav-item desktop-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                        <div class="header-nav-item mobile-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-right">
                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select nav-profile">
                                <div class="toggle-wrapper" id="nav-profile-dropdown" data-bs-toggle="dropdown">
                                    <span class="fw-bold mx-1">Julio Baker</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="nav-profile-header">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-column ms-1">
                                                <span class="fw-bold text-dark">Julio Baker</span>
                                                <span class="font-size-sm">Julio@themenate.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <i class="font-size-lg me-2 feather icon-user"></i>
                                            <span>Profile</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <i class="font-size-lg me-2 feather icon-settings"></i>
                                            <span>Settings</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center"><i
                                                class="font-size-lg me-2 feather icon-life-buoy"></i>
                                            <span>Support</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center"><i
                                                class="font-size-lg me-2 feather icon-power"></i>
                                            <span>Sign Out</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav vertical-menu nav-menu-light scrollable">
                <div class="nav-logo">
                    <div class="w-100 logo">
                        <img class="img-fluid" src="/templates/espire/assets/images/logo/logo.png"
                            style="max-height: 70px;" alt="logo">
                    </div>
                    <div class="mobile-close">
                        <i class="icon-arrow-left feather"></i>
                    </div>
                </div>
                <ul class="nav-menu">
                    <li class="nav-menu-item">
                        <a href="index.html">
                            <i class="feather icon-home"></i>
                            <span class="nav-menu-item-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-group-title">Menu</li>
                    <li class="nav-menu-item">
                        <a href="/menu">
                            <i class="feather icon-list"></i>
                            <span class="nav-menu-item-title">List Barang</span>
                        </a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="/menu/create">
                            <i class="feather icon-plus-square"></i>
                            <span class="nav-menu-item-title">Input Data Barang</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Side Nav END -->

            <!-- Content START -->
            <div class="content">
                <div class="main">
                    <div class="page-header">
                        <div class="breadcrumb">
                            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
                            <div class="breadcrumb-item"><a href="index.html"> Home </a></div>
                            <div class="breadcrumb-item"><a href="javascript:void(0)"> LMDH </a></div>
                            <div class="breadcrumb-item"><a href="v-form-layouts.html"> Input Menu </a></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4>Input Data Barang</h4>
                            <div class="mt-4">
                                <div class="row">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    {{-- if success insert --}}
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form action="/menu" method="post">
                                        @csrf
                                        <div class="col-md" id="menu-row">
                                            <div class="input-group mb-3">
                                                <input type="text" name="barang[0][nama]"
                                                    class="form-control form-control-sm" placeholder="Nama" required>
                                                <input type="number" name="barang[0][harga]"
                                                    class="form-control form-control-sm" placeholder="Harga" required>
                                                <button class="btn btn-sm btn-outline-secondary" type="button"
                                                    id="AddMenu">
                                                    <i class="feather icon-plus-square"></i>
                                                </button>
                                            </div>
                                            <div class="input-group mb-3" data-rowid="1">
                                                <input type="text" name="barang[1][nama]"
                                                    class="form-control form-control-sm" placeholder="Nama" required>
                                                <input type="number" name="barang[1][harga]"
                                                    class="form-control form-control-sm" placeholder="Harga" required>
                                                <button class="btn btn-sm btn-outline-secondary" type="button"
                                                    id="delete-row" data-butid="1"><i
                                                        class="feather icon-trash-2"></i></button>
                                            </div>
                                            <div class="input-group mb-3" data-rowid="2">
                                                <input type="text" name="barang[2][nama]"
                                                    class="form-control form-control-sm" placeholder="Nama" required>
                                                <input type="number" name="barang[2][harga]"
                                                    class="form-control form-control-sm" placeholder="Harga" required>
                                                <button class="btn btn-sm btn-outline-secondary" type="button"
                                                    id="delete-row" data-butid="2">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-sm me-2">
                                                <i class="feather icon-edit"></i> Submit
                                            </button>
                                            <button class="btn btn-danger btn-sm me-2" id="tambahMenu">
                                                <i class="feather icon-plus-square"></i> Tambah Barang
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick View END -->
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="/templates/espire/assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script>
        $(document).ready(function() {
            // get last index
            var index = $('#menu-row').children().length - 1;
            // add menu
            $('#AddMenu').click(function(e) {
                e.preventDefault();
                index++;
                var html = '<div class="input-group mb-3" data-rowid="' + index + '">' +
                    '<input type="text" name="barang[' + index +
                    '][nama]" class="form-control form-control-sm" placeholder="Nama" required>' +
                    '<input type="number" name="barang[' + index +
                    '][harga]" class="form-control form-control-sm" placeholder="Harga" required>' +
                    '<button class="btn btn-sm btn-outline-secondary" type="button" id="delete-row" data-butid="' +
                    index + '"><i class="feather icon-trash-2"></i></button>' +
                    '</div>';
                $('#menu-row').append(html);
            });
            // tambah menu (same as add menu)
            $('#tambahMenu').click(function(e) {
                e.preventDefault();
                index++;
                var html = '<div class="input-group mb-3" data-rowid="' + index + '">' +
                    '<input type="text" name="barang[' + index +
                    '][nama]" class="form-control form-control-sm" placeholder="Nama" required>' +
                    '<input type="number" name="barang[' + index +
                    '][harga]" class="form-control form-control-sm" placeholder="Harga" required>' +
                    '<button class="btn btn-sm btn-outline-secondary" type="button" id="delete-row" data-butid="' +
                    index + '"><i class="feather icon-trash-2"></i></button>' +
                    '</div>';
                $('#menu-row').append(html);
            });
            // delete menu
            $('#menu-row').on('click', '#delete-row', function(e) {
                e.preventDefault();
                var id = $(this).data('butid');
                $('#menu-row').children().each(function() {
                    if ($(this).data('rowid') == id) {
                        $(this).remove();
                        console.log('remove');
                    }
                });
            });
        });
    </script>
    <!-- Core JS -->
    <script src="/templates/espire/assets/js/app.min.js"></script>

</body>

</html>
