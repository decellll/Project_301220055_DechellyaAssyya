<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6fb;
        }

        .sidebar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 100;
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem 2rem 0 2rem;
        }

        .table thead {
            background: #f3f4f6;
        }

        .btn-generate {
            background: #a21caf;
            color: #fff;
        }

        .btn-generate:hover {
            background: #7c3aed;
            color: #fff;
        }

        .btn-edit {
            background: #38bdf8;
            color: #fff;
        }

        .btn-edit:hover {
            background: #0ea5e9;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="sidebar-fixed">
        <?php $this->load->view('templates/sidebar', ['user' => $user]); ?>
    </div>
    <div class="main-content">
        <h4 class="mb-4">Generate QR Code</h4>
        <div class="card mb-4">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Judul QR Code</label>
                        <input type="text" class="form-control" placeholder="Judul QR Code">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" placeholder="Deskripsi singkat">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Lokasi</label>
                        <input type="text" class="form-control" placeholder="Lokasi presensi">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Berlaku Dari</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Berlaku Sampai</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="col-md-3 align-self-end">
                        <button type="submit" class="btn btn-generate w-100"><i class="fas fa-qrcode"></i> Generate QR</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-3">Daftar QR Code</h6>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Lokasi</th>
                                <th>Berlaku Dari</th>
                                <th>Berlaku Sampai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($qrcodes as $row): ?>
                                <tr>
                                    <td><?= $row['no'] ?></td>
                                    <td><?= $row['code'] ?></td>
                                    <td><?= $row['title'] ?></td>
                                    <td><?= $row['desc'] ?></td>
                                    <td><?= $row['lokasi'] ?></td>
                                    <td><?= $row['valid_from'] ?></td>
                                    <td><?= $row['valid_until'] ?></td>
                                    <td><button class="btn btn-edit btn-sm"><i class="fas fa-edit"></i> EDIT</button></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>