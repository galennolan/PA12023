<!DOCTYPE html>
<html>
<head>
    <title>Percabangan</title>
</head>
<body>
    <h1>Percabangan</h1><hr>
    @if($nilai<=35)
        <h3>
            Nama : {{ $nama }}<br>
            Nilai : {{ $nilai }}<br>
            Grade : E <br>
            Keterangan : Gagal!
        </h3>
    @elseif($nilai>=36&&$nilai<=55)
        <h3>
            Nama : {{ $nama }}<br>
            Nilai : {{ $nilai }}<br>
            Grade : D <br>
            Keterangan : Gagal!
        </h3>
    @elseif($nilai>=56&&$nilai<=69)
        <h3>
            Nama : {{ $nama }}<br>
            Nilai : {{ $nilai }}<br>
            Grade : C <br>
            Keterangan : Lulus!
        </h3>
    @elseif($nilai>=70&&$nilai<=84)
        <h3>
            Nama : {{ $nama }}<br>
            Nilai : {{ $nilai }}<br>
            Grade : B <br>
            Keterangan : Lulus!
        </h3>
    @else
        <h3>
            Nama : {{ $nama }}<br>
            Nilai : {{ $nilai }}<br>
            Grade : A <br>
            Keterangan : Lulus!
        </h3>
    @endif
</body>
</html>