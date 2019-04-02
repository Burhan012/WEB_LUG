<?php 

function upload (){

    $namaFoto = $_FILES['uploadfoto'] ['name'];
    $ukuranFoto = $_FILES[ 'uploadfoto' ][ 'size' ];
    $tmpFoto = $_FILES['uploadfoto']['tmp_name'];

    // validasi file
    $ekstensiValid = ['jpg', 'jpeg', 'png', 'bmp'];
    $ekstensiFoto = explode('.',$namaFoto);
    $ekstensiFoto = strtolower(end($ekstensiFoto));

    if (!in_array($ekstensiFoto, $ekstensiValid)) {
        return false;
    }

    // falidasi ukuran
    if ($ukuranFoto > 2000000) {
        return false;
    }

    // proses upload
    $destFile = __DIR__. '/fotomhs/'.$namaFoto;
    //                      /fotomhs/174.jpg
    move_uploaded_file($tmpFoto, $destFile);

    return $namaFoto;


}

?>