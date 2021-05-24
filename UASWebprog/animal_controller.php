<?php
include_once("db_controller.php");

function readAnimalCategory(){
    $alldata = array();

    $connect = conn();
    if ($connect!=NULL){
        $sql_query = "SELECT * FROM kategori hewan";
        $result = mysqli_query($connect, $sql_query) or die (mysqli_error($connect));

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data["kategori_id"] = $row["kategori_id"];
                $data["kategori_hewan"] = $row["kategori_hewan"];
                $data["image_kategori"] = $row["image_kategori"];
                array_push($allData,$data);
            }
        }
    }
    my_closeDB($connect);
    return $allData;
}
function readAnimalData(){
    $allData = array();

    $connect = conn();
    if ($connect!=NULL){
        $sql_query = "SELECT * FROM hewan";
        $result = mysqli_query($connect, $sql_query) or die (mysqli_error($connect));

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data["hewan_id"] = $row["hewan_id"];
                $data["nama_hewan"] = $row["nama_hewan"];
                $data["kategori_id"] = $row["kategori_id"];
                $data["deskripsi_hewan"] = $row["deskripsi_hewan"];
                $data["image_hewan"] = $row["image_hewan"];
                array_push($allData,$data);
            }
        }
    }
    my_closeDB($connect);
    return $allData;
}

?>