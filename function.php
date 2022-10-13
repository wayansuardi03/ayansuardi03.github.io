<?php
include 'assets/conf/koneksi-lhp.php';
include 'assets/conf/koneksi-sampel.php';

function query($query)
{
    global $connlhp;
    $result = mysqli_query($connlhp, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function total($total)
{
    global $connlhp;
    $result = mysqli_query($connlhp, $total);
    $totalData = mysqli_num_rows($result);
    return $totalData;
}

function totalSampel($totalPengujian)
{
    global $connSampel;
    $result = mysqli_query($connSampel, $totalPengujian);
    $totalSampel = mysqli_num_rows($result);
    return $totalSampel;
}