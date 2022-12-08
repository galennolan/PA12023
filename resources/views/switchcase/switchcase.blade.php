<!DOCTYPE html>
<html>
<head>
    <title>Percabangan</title>
</head>
<body>
    <h1>Percabangan Switch Case</h1><hr>
    @switch($jurusan)
        @case(11)
            <h3>Program Studi Sistem Informasi Akuntansi</h3>
        @break
        @case(12)
            <h3>Program Studi Sistem Informasi</h3>
        @break
        @case(13)
            <h3>Program Studi Teknologi Komputer</h3>
        @break
        @default
            <h3>Program Studi Teknologi Informasi</h3>
    @endswitch
</body>
</html>