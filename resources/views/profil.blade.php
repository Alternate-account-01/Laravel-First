<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<x-layout>
    <x-slot:judul>{{$title}}</x-slot:judul>
    <div style="color: white;">
    <h1>My Profile</h1>
    <p>Name: {{ $nama }}</p>
    <p>Class: {{ $kelas }}</p>
    <p>School: {{ $sekolah }}</p>
    </div>
</x-layout>

</body>
</html>
