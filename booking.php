<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "hotel-booking"
);

if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$Guest_ID = $_POST['Guest_ID'];
$RoomNo = $_POST['RoomNo'];
$BookingDate = $_POST['BookingDate'];
$Check_In_Time = $_POST['Check_In_Time'];
$Check_Out_Time = $_POST['Check_Out_Time'];

$sql = "INSERT INTO booking11
(Guest_ID, RoomNo, BookingDate, Check_In_Time, Check_Out_Time)

VALUES(
'$Guest_ID',
'$RoomNo',
'$BookingDate',
'$Check_In_Time',
'$Check_Out_Time'
)";

if ($conn->query($sql) === TRUE){

    header("Location: pay.html");
    exit();

}
else{

    echo "Error: " . $conn->error;

}

$conn->close();

?>ٍ