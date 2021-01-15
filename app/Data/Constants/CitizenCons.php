<?php


namespace App\Data\Constants;

class CitizenCons
{

    public static $bloodTypes = [
      "A", "B", "AB", "O"
    ];

    public static $genders = [
      "male" => "Laki-laki",
      "female" => "Perempuan",
    ];

    public static $religions = [
        "Islam","Katholik","Kristen","Budha","Hindu","Khong Hucu", "Penghayat Kepercayaan","Lainnya"
    ];

    public static $marriedStatuses = ["Kawin", "Belum Kawin", "Cerai Hidup", "Cerai Mati"];

    public static $lastEducations = [
        "Tidak/Belum Sekolah", "Tidak Tamat SD/Sederajat", "Tamat SD/Sederajat",
        "SLTP/Sederajat", "SLTA/Sederjat", "Diploma I/II", "Akademi/Diploma III/S. Muda",
        "DilpomaIV/Strata I", "Strata II", "Strata III"
    ];
}
