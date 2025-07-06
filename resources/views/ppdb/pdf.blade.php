<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lembar Pendaftaran PPDB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table td {
            padding: 3px;
        }
        .ttd {
            width: 100%;
            margin-top: 50px;
        }
        .catatan {
            margin-top: 60px;
        }
    </style>
</head>
<body>

     <!-- Kop Surat -->
    <table style="width:100%; border-bottom: 2px solid black; padding-bottom: 10px;">
        <tr>
            <td style="text-align: center;">
                <h4 style="margin: 0; font-weight: bold;">PEMERINTAH KABUPATEN CIAMIS</h4>
                <h4 style="margin: 0; font-weight: bold;">DINAS PENDIDIKAN</h4>
                <h3 style="margin: 0; font-weight: bold;">SDN 1 LINGGASARI</h3>
                <p style="margin: 0;">
                    Jalan Insinyur Haji Djuanda No.84 Kec. Ciamis, Kab. Ciamis, Provinsi Jawa Barat 46211<br>
                    Email: satulinggasari@gmail.com &nbsp;&nbsp; Tlp: 080000000
                </p>
            </td>
        </tr>
    </table>

    <h3 style="text-align: center;">Lembar Pendaftaran Peserta Didik Baru (PPDB)</h3>

    <!-- Data PPDB -->
    <table class="table">
        <tr><td><strong>Nama Lengkap</strong></td><td>: {{ $ppdb->nama }}</td></tr>
        <tr><td><strong>NISN</strong></td><td>: {{ $ppdb->nisn }}</td></tr>
        <tr><td><strong>Jenis Kelamin</strong></td><td>: {{ $ppdb->jenis_kelamin }}</td></tr>
        <tr><td><strong>Tanggal Lahir</strong></td><td>: {{ \Carbon\Carbon::parse($ppdb->tanggal_lahir)->translatedFormat('d F Y') }}</td></tr>
        <tr><td><strong>Alamat</strong></td><td>: {{ $ppdb->alamat }}</td></tr>
        <tr><td><strong>Nama Ayah</strong></td><td>: {{ $ppdb->nama_ayah }}</td></tr>
        <tr><td><strong>Nama Ibu</strong></td><td>: {{ $ppdb->nama_ibu }}</td></tr>
        <tr><td><strong>Asal Sekolah</strong></td><td>: {{ $ppdb->asal_sekolah }}</td></tr>
        <tr><td><strong>No HP</strong></td><td>: {{ $ppdb->no_hp }}</td></tr>
    </table>

    <!-- Tanda Tangan -->
    <div class="ttd">
        <table width="100%">
            <tr>
                <td style="text-align: center;">
                    Orang Tua/Wali <br><br><br><br><br>

                    ( __________________________ )
                </td>
                <td style="text-align: center;">
                    Ciamis, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}<br>
                    Panitia PPDB<br><br><br><br>
                    ( __________________________ )
                </td>
            </tr>
        </table>
    </div>

    <!-- Catatan -->
    <div class="catatan">
        <strong>Catatan untuk Daftar Ulang:</strong>
        <ol>
            <li>Fotokopi KTP Orang Tua/Wali</li>
            <li>Fotokopi KIA (Kartu Identitas Anak)</li>
            <li>Fotokopi Kartu Keluarga</li>
            <li>Fotokopi Akta Kelahiran</li>
        </ol>
    </div>

</body>
</html>
