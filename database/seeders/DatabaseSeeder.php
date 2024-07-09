<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          Mobil::create([
            "nama"=> "Toyota Fortuner",
            "merek"=> "Toyota",
            "tahun"=> 2024,
            "cc"=> 2755,
            "decs" => "Toyota Fortuner tersedia dalam pilihan mesin 5 Diesel dan 1 Bensin di Indonesia SUV baru dari Toyota hadir dalam 6 varian. Bicara soal spesifikasi mesin Toyota Fortuner, ini ditenagai dua pilihan mesin yaitu Diesel berkapasitas 2694 cc, serta Bensin 2755 cc. Fortuner tersedia dengan transmisi Manual and Otomatis tergantung variannya. Fortuner adalah SUV 7 seater dengan panjang 4795 mm, lebar 1855 mm, wheelbase 2745 mm. SUV terbaru dari Toyota, Fortuner, hadir dengan 6 varian. Varian tertinggi hadir dengan mesin Diesel 2755 cc, yang mampu menghasilkan tenaga hingga 200 hp dan torsi puncak 499 Nm. Fortuner 4x4 2.8 GR Sport AT DSL berkapasitas 7-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
            "image" => "ToyotaFortuner.webp",
            "type" => "matic"
          ]);

          Mobil::create([
            "nama"=> "Toyota Rush",
            "merek"=> "Toyota",
            "tahun"=> 2024,
            "cc"=> 1496,
            "decs"=> "Toyota Rush tersedia dalam pilihan mesin Bensin di Indonesia SUV baru dari Toyota hadir dalam 4 varian. Bicara soal spesifikasi mesin Toyota Rush, ini ditenagai dua pilihan mesin Bensin berkapasitas 1496 cc. Rush tersedia dengan transmisi Manual and Otomatis tergantung variannya. Rush adalah SUV 7 seater dengan panjang 4435 mm, lebar 1695 mm, wheelbase 2685 mm. SUV terbaru dari Toyota, Rush, hadir dengan 4 varian. Varian tertinggi hadir dengan mesin Bensin 1496 cc, yang mampu menghasilkan tenaga hingga 103 hp dan torsi puncak 136 Nm. Rush 1.5 S AT GR Sport berkapasitas 7-penupang dibekali juga dengan transmisi 4-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
            "image" => "ToyotaRush.webp",
            "type" => "manual"
          ]);

          Mobil::create([
            "nama"=> "Toyota Avanza",
            "merek"=> "Toyota",
            "tahun"=> 2024,
            "cc"=> 1496,
            "decs"=> "Toyota Avanza tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Toyota hadir dalam 4 varian. Bicara soal spesifikasi mesin Toyota Avanza, ini ditenagai dua pilihan mesin Bensin berkapasitas 1496 cc. Avanza tersedia dengan transmisi Manual and CVT tergantung variannya. Avanza adalah MPV 7 seater dengan panjang 4395 mm, lebar 1730 mm, wheelbase 2750 mm. serta ground clearance 195 mm. MPV terbaru dari Toyota, Avanza, hadir dengan 4 varian. Varian tertinggi hadir dengan mesin Bensin 1496 cc, yang mampu menghasilkan tenaga hingga 105 hp dan torsi puncak 141 Nm. Avanza 1.5 G CVT berkapasitas 7-penupang dibekali juga dengan transmisi Variable Speed CVT. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
            "image" => "ToyotaAvanza.webp",
            "type" => "matic"

          ]);

            Mobil::create([
              "nama"=> "Toyota Kijang Innova",
              "merek"=> "Toyota",
              "tahun"=> 2024,
              "cc"=> 2393,
              "decs"=> "Toyota Kijang Innova tersedia dalam pilihan mesin 1 Bensin dan 2 Diesel di Indonesia MPV baru dari Toyota hadir dalam 3 varian. Bicara soal spesifikasi mesin Toyota Kijang Innova, ini ditenagai dua pilihan mesin yaitu Bensin berkapasitas 1998 cc, serta Diesel 2393 cc. Kijang Innova tersedia dengan transmisi Manual and Otomatis tergantung variannya. Juga, tergantung pilihan dan jenis bahan bakar, konsumsi BBM Kijang Innova mencapai 9.7 kmpl untuk perkotaan, 13.6 kmpl saat menjelajah perjalanan luar kota. Kijang Innova adalah MPV 7 seater dengan panjang 4735 mm, lebar 1830 mm, wheelbase 2750 mm. Kijang Innova ditawarkan dengan banyak fitur di setiap varian, sehingga membuatnya kompeten di segmen MPV. MEntenagai Kijang Innova G A/T Diesel adalah mesin 2393 cc yang menghasilkan 147 hp dengan torsi maksimum 360 Nm. Varian tertinggi Kijang Innova terbilang efisien dengan konsumsi BBM 9.7 kmpl untuk di dalam kota, dan 13.6 kmpl di jalan tol.",
              "image" => "ToyotaKijangInnova.webp",
               "type" => "matic"

          ]);

            Mobil::create([
              "nama"=> "Toyota Calya",
              "merek"=> "Toyota",
              "tahun"=> 2024,
              "cc"=> 1197,
              "decs"=> "Toyota Calya tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Toyota hadir dalam 4 varian. Bicara soal spesifikasi mesin Toyota Calya, ini ditenagai dua pilihan mesin Bensin berkapasitas 1197 cc. Calya tersedia dengan transmisi Manual and Otomatis tergantung variannya. Calya adalah MPV 7 seater dengan panjang 4110 mm, lebar 1655 mm, wheelbase 2525 mm. serta ground clearance 180 mm. MPV terbaru dari Toyota, Calya, hadir dengan 4 varian. Varian tertinggi hadir dengan mesin Bensin 1197 cc, yang mampu menghasilkan tenaga hingga 87 hp dan torsi puncak 108 Nm. Calya G AT berkapasitas 7-penupang dibekali juga dengan transmisi 4-Speed Otomatis. Sistem keamanannya dibekali Anti Theft Device & Alarm Mobil.",
              "image" => "ToyotaCayla.webp","type" => "matic"
          ]);

            Mobil::create([
              "nama"=> "Toyota Land Cruiser",
              "merek"=> "Toyota",
              "tahun"=> 2024,
              "cc"=> 3346,
              "decs"=> "Toyota Land Cruiser tersedia dalam pilihan mesin Diesel di Indonesia SUV baru dari Toyota hadir dalam 2 varian. Bicara soal spesifikasi mesin Toyota Land Cruiser, ini ditenagai dua pilihan mesin Diesel berkapasitas 3346 cc. Land Cruiser tersedia dengan transmisi Otomatis tergantung variannya. Land Cruiser adalah SUV 7 seater dengan panjang 4965 mm, lebar 1990 mm, wheelbase 2850 mm. serta ground clearance 235 mm. SUV terbaru dari Toyota, Land Cruiser, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Diesel 3346 cc, yang mampu menghasilkan tenaga hingga 301 hp dan torsi puncak 700 Nm. Land Cruiser GR-S berkapasitas 7-penupang dibekali juga dengan transmisi 10-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "ToyotaLandCruiser.webp",
               "type" => "matic"

           ]);

            Mobil::create([
              "nama"=> "Toyota Vellfire",
              "merek"=> "Toyota",
              "tahun"=> 2024,
              "cc"=> 2498,
              "decs"=> "Toyota Vellfire HEV tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Toyota hadir dalam 1 varian. Bicara soal spesifikasi mesin Toyota Vellfire HEV, ini ditenagai dua pilihan mesin Bensin berkapasitas 2498 cc. Vellfire HEV tersedia dengan transmisi CVT tergantung variannya. Vellfire HEV adalah MPV 6 seater dengan panjang 5010 mm, lebar 1850 mm, wheelbase 3000 mm. MPV terbaru dari Toyota, Vellfire HEV, hadir dengan 1 varian. Varian tertinggi hadir dengan mesin Bensin 2498 cc, yang mampu menghasilkan tenaga hingga 187 hp dan torsi puncak 239 Nm. Vellfire HEV 2.5L VIP berkapasitas 6-penupang dibekali juga dengan transmisi Variable Speed CVT. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "ToyotaVellfireHEV.webp", "type" => "matic"

           ]);

            Mobil::create([
              "nama"=> "Toyota GR Supra",
              "merek"=> "Toyota",
              "tahun"=> 2024,
              "cc"=> 2998,
              "decs"=> "Toyota GR Supra tersedia dalam pilihan mesin Bensin di Indonesia Coupe baru dari Toyota hadir dalam 1 varian. Bicara soal spesifikasi mesin Toyota GR Supra, ini ditenagai dua pilihan mesin Bensin berkapasitas 2998 cc. GR Supra tersedia dengan transmisi Otomatis tergantung variannya. GR Supra adalah Coupe 2 seater dengan panjang 4380 mm, lebar 1855 mm, wheelbase 2470 mm. Coupe terbaru dari Toyota, GR Supra, hadir dengan 1 varian. Varian tertinggi hadir dengan mesin Bensin 2998 cc, yang mampu menghasilkan tenaga hingga 382 hp dan torsi puncak 495 Nm. GR Supra 3.0L berkapasitas 2-penupang dibekali juga dengan transmisi 8-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "ToyotaGRSupra.webp",
               "type" => "manual"

            ]);

            Mobil::create([
              "nama"=> "BMW 3 Series Sedan ",
              "merek"=> "BMW",
              "tahun"=> 2024,
              "cc"=> 1998,
              "decs"=> "BMW 3 Series Sedan tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari BMW hadir dalam 2 varian. Bicara soal spesifikasi mesin BMW 3 Series Sedan, ini ditenagai dua pilihan mesin Bensin berkapasitas 1998 cc. 3 Series Sedan tersedia dengan transmisi Otomatis tergantung variannya. Juga, tergantung pilihan dan jenis bahan bakar, konsumsi BBM 3 Series Sedan mencapai 13.2 kmpl untuk perkotaan. 3 Series Sedan adalah Sedan 5 seater dengan panjang 4713 mm, lebar 2068 mm, wheelbase 2851 mm. Sedan terbaru dari BMW, 3 Series Sedan, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Bensin 1998 cc, yang mampu menghasilkan tenaga hingga 258 hp dan torsi puncak 400 Nm. 3 Series Sedan 330i M Sport Pro berkapasitas 5-penupang dibekali juga dengan transmisi 8-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "BMW3SeriesSedan.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "BMW 3 Series Sedan ",
              "merek"=> "BMW",
              "tahun"=> 2024,
              "cc"=> 1998,
              "decs"=> "BMW 3 Series Sedan tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari BMW hadir dalam 2 varian. Bicara soal spesifikasi mesin BMW 3 Series Sedan, ini ditenagai dua pilihan mesin Bensin berkapasitas 1998 cc. 3 Series Sedan tersedia dengan transmisi Otomatis tergantung variannya. Juga, tergantung pilihan dan jenis bahan bakar, konsumsi BBM 3 Series Sedan mencapai 13.2 kmpl untuk perkotaan. 3 Series Sedan adalah Sedan 5 seater dengan panjang 4713 mm, lebar 2068 mm, wheelbase 2851 mm. Sedan terbaru dari BMW, 3 Series Sedan, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Bensin 1998 cc, yang mampu menghasilkan tenaga hingga 258 hp dan torsi puncak 400 Nm. 3 Series Sedan 330i M Sport Pro berkapasitas 5-penupang dibekali juga dengan transmisi 8-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "BMW3SeriesSedan.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "BMW 7 Series Sedan",
              "merek"=> "BMW",
              "tahun"=> 2024,
              "cc"=> 2998,
              "decs"=> "BMW 7 Series Sedan tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari BMW hadir dalam 1 varian. Bicara soal spesifikasi mesin BMW 7 Series Sedan, ini ditenagai dua pilihan mesin Bensin berkapasitas 2998 cc. 7 Series Sedan tersedia dengan transmisi Otomatis tergantung variannya. 7 Series Sedan adalah Sedan 4 seater dengan panjang 5260 mm, lebar 2169 mm, wheelbase 3210 mm.",
              "image" => "BMW7SeriesSedan.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "BMW 5 Series Sedan",
              "merek"=> "BMW",
              "tahun"=> 2024,
              "cc"=> 1998,
              "decs"=> "BMW 5 Series Sedan tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari BMW hadir dalam 2 varian. Bicara soal spesifikasi mesin BMW 5 Series Sedan, ini ditenagai dua pilihan mesin Bensin berkapasitas 1998 cc. 5 Series Sedan tersedia dengan transmisi Otomatis tergantung variannya. Juga, tergantung pilihan dan jenis bahan bakar, konsumsi BBM 5 Series Sedan mencapai 12.5 kmpl untuk perkotaan, 17.5 kmpl saat menjelajah perjalanan luar kota. 5 Series Sedan adalah Sedan 5 seater dengan panjang 4963 mm, lebar 2126 mm, wheelbase 2975 mm. 5 Series Sedan ditawarkan dengan banyak fitur di setiap varian, sehingga membuatnya kompeten di segmen Sedan. MEntenagai 5 Series Sedan 530i Opulence adalah mesin 1998 cc yang menghasilkan 252 hp dengan torsi maksimum 350 Nm. Varian tertinggi 5 Series Sedan terbilang efisien dengan konsumsi BBM 12.5 kmpl untuk di dalam kota, dan 17.5 kmpl di jalan tol",
              "image" => "BMW5SeriesSedan.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "Mazda MX 5 RF",
              "merek"=> "Mazda",
              "tahun"=> 2024,
              "cc"=> 1998,
              "decs"=> "Mazda MX 5 RF tersedia dalam pilihan mesin Bensin di Indonesia Convertible baru dari Mazda hadir dalam 2 varian. Bicara soal spesifikasi mesin Mazda MX 5 RF, ini ditenagai dua pilihan mesin Bensin berkapasitas 1998 cc. MX 5 RF tersedia dengan transmisi Manual and Otomatis tergantung variannya. MX 5 RF adalah Convertible 2 seater dengan panjang 3915 mm, lebar 1735 mm, wheelbase 2310 mm. serta ground clearance 150 mm. Convertible terbaru dari Mazda, MX 5 RF, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Bensin 1998 cc, yang mampu menghasilkan tenaga hingga 181 hp dan torsi puncak 205 Nm. MX 5 RF AT berkapasitas 2-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "MazdaMX5RF.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "Mazda CX-60",
              "merek"=> "Mazda",
              "tahun"=> 2024,
              "cc"=> 3283,
              "decs"=> "Mazda CX-60 tersedia dalam pilihan mesin Bensin di Indonesia SUV baru dari Mazda hadir dalam 2 varian. Bicara soal spesifikasi mesin Mazda CX-60, ini ditenagai dua pilihan mesin Bensin berkapasitas 3283 cc. CX-60 tersedia dengan transmisi Otomatis tergantung variannya. CX-60 adalah SUV 5 seater dengan panjang 4740 mm, lebar 1890 mm, wheelbase 2870 mm. serta ground clearance 178 mm. SUV terbaru dari Mazda, CX-60, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Bensin 3283 cc, yang mampu menghasilkan tenaga hingga 280 hp dan torsi puncak 450 Nm. CX-60 Elite AWD berkapasitas 5-penupang dibekali juga dengan transmisi 8-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "MazdaCX-60.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "Mazda CX-9",
              "merek"=> "Mazda",
              "tahun"=> 2024,
              "cc"=> 2488,
              "decs"=> "Mazda CX 9 tersedia dalam pilihan mesin Bensin di Indonesia SUV baru dari Mazda hadir dalam 3 varian. Bicara soal spesifikasi mesin Mazda CX 9, ini ditenagai dua pilihan mesin Bensin berkapasitas 2488 cc. CX 9 tersedia dengan transmisi Otomatis tergantung variannya. CX 9 adalah SUV 7 seater dengan panjang 5075 mm, lebar 1969 mm, wheelbase 2930 mm. serta ground clearance 220 mm. SUV terbaru dari Mazda, CX 9, hadir dengan 3 varian. Varian tertinggi hadir dengan mesin Bensin 2488 cc, yang mampu menghasilkan tenaga hingga 228 hp dan torsi puncak 420 Nm. CX 9 AWD berkapasitas 7-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "MazdaCX9.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "Mazda 3 Hatchback",
              "merek"=> "Mazda",
              "tahun"=> 2024,
              "cc"=> 1998,
              "decs"=> "Mazda 3 Hatchback tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Mazda hadir dalam 1 varian. Bicara soal spesifikasi mesin Mazda 3 Hatchback, ini ditenagai dua pilihan mesin Bensin berkapasitas 1998 cc. 3 Hatchback tersedia dengan transmisi Otomatis tergantung variannya. 3 Hatchback adalah Hatchback 5 seater dengan panjang 4460 mm, lebar 1765 mm, wheelbase 2570 mm. serta ground clearance 140 mm. Hatchback terbaru dari Mazda, 3 Hatchback, hadir dengan 1 varian. Varian tertinggi hadir dengan mesin Bensin 1998 cc, yang mampu menghasilkan tenaga hingga 153 hp dan torsi puncak 200 Nm. 3 Hatchback Skyactive-G 2.0 berkapasitas 5-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "Mazda3Hatchback.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "Mazda 3 Sedan",
              "merek"=> "Mazda",
              "tahun"=> 2024,
              "cc"=> 1998,
              "decs"=> "Mazda 3 Sedan tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari Mazda hadir dalam 1 varian. Bicara soal spesifikasi mesin Mazda 3 Sedan, ini ditenagai dua pilihan mesin Bensin berkapasitas 1998 cc. 3 Sedan tersedia dengan transmisi Otomatis tergantung variannya. 3 Sedan adalah Sedan 5 seater dengan panjang 4660 mm, lebar 1765 mm, wheelbase 2725 mm. serta ground clearance 140 mm. Sedan terbaru dari Mazda, 3 Sedan, hadir dengan 1 varian. Varian tertinggi hadir dengan mesin Bensin 1998 cc, yang mampu menghasilkan tenaga hingga 153 hp dan torsi puncak 200 Nm. 3 Sedan Skyactive-G 2.0 berkapasitas 5-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "Mazda3Sedan.webp","type" => "matic"
            ]);

            Mobil::create([
              "nama"=> "Mazda 2 Sedan",
              "merek"=> "Mazda",
              "tahun"=> 2024,
              "cc"=> 1496,
              "decs"=> "Mazda 2 Sedan tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari Mazda hadir dalam 1 varian. Bicara soal spesifikasi mesin Mazda 2 Sedan, ini ditenagai dua pilihan mesin Bensin berkapasitas 1496 cc. 2 Sedan tersedia dengan transmisi Otomatis tergantung variannya. 2 Sedan adalah Sedan 5 seater dengan panjang 4340 mm, lebar 1695 mm, wheelbase 2570 mm. serta ground clearance 150 mm. Sedan terbaru dari Mazda, 2 Sedan, hadir dengan 1 varian. Varian tertinggi hadir dengan mesin Bensin 1496 cc, yang mampu menghasilkan tenaga hingga 109 hp dan torsi puncak 144 Nm. 2 Sedan 1.5L AT berkapasitas 5-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "Mazda2Sedan.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "Mazda 6 Sedan",
              "merek"=> "Mazda",
              "tahun"=> 2024,
              "cc"=> 2488,
              "decs"=> "Mazda 6 Sedan tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari Mazda hadir dalam 2 varian. Bicara soal spesifikasi mesin Mazda 6 Sedan, ini ditenagai dua pilihan mesin Bensin berkapasitas 2488 cc. 6 Sedan tersedia dengan transmisi Otomatis tergantung variannya. 6 Sedan adalah Sedan 5 seater dengan panjang 4865 mm, lebar 1840 mm, wheelbase 2830 mm. serta ground clearance 165 mm. Sedan terbaru dari Mazda, 6 Sedan, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Bensin 2488 cc, yang mampu menghasilkan tenaga hingga 187 hp dan torsi puncak 252 Nm. 6 Sedan 20th Anniversary berkapasitas 5-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "Mazda6Sedan.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "Mazda CX-5",
              "merek"=> "Mazda",
              "tahun"=> 2024,
              "cc"=> 2488,
              "decs"=> "Mazda CX 5 tersedia dalam pilihan mesin Bensin di Indonesia Crossover baru dari Mazda hadir dalam 2 varian. Bicara soal spesifikasi mesin Mazda CX 5, ini ditenagai dua pilihan mesin Bensin berkapasitas 2488 cc. CX 5 tersedia dengan transmisi Otomatis tergantung variannya. CX 5 adalah Crossover 5 seater dengan panjang 4575 mm, lebar 1845 mm, wheelbase 2700 mm. serta ground clearance 193 mm. Crossover terbaru dari Mazda, CX 5, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Bensin 2488 cc, yang mampu menghasilkan tenaga hingga 187 hp dan torsi puncak 252 Nm. CX 5 Kuro Edition berkapasitas 5-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "MazdaCX5.webp",
               "type" => "matic"
            ]);


            Mobil::create([
              "nama"=> "Mitsubishi Xpander",
              "merek"=> "Mistubishi",
              "tahun"=> 2024,
              "cc"=> 1499,
              "decs"=> "Mitsubishi Xpander tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Mitsubishi hadir dalam 6 varian. Bicara soal spesifikasi mesin Mitsubishi Xpander, ini ditenagai dua pilihan mesin Bensin berkapasitas 1499 cc. Xpander tersedia dengan transmisi Manual and CVT tergantung variannya. serta ground clearance 225 mm. MPV terbaru dari Mitsubishi, Xpander, hadir dengan 6 varian. Varian tertinggi hadir dengan mesin Bensin 1499 cc, yang mampu menghasilkan tenaga hingga 104 hp dan torsi puncak 141 Nm. Xpander Ultimate CVT berkapasitas 7-penupang dibekali juga dengan transmisi Variable Speed CVT. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "MitsubishiXpander.webp","type" => "matic"
            ]);

            Mobil::create([
              "nama"=> "Mitsubishi Xpander Cross",
              "merek"=> "Mitsubishi",
              "tahun"=> 2020,
              "cc"=> 1499,
              "decs"=> "Mitsubishi Xpander Cross tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Mitsubishi hadir dalam 2 varian. Bicara soal spesifikasi mesin Mitsubishi Xpander Cross, ini ditenagai dua pilihan mesin Bensin berkapasitas 1499 cc. Xpander Cross tersedia dengan transmisi Manual and CVT tergantung variannya. serta ground clearance 225 mm. MPV terbaru dari Mitsubishi, Xpander Cross, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Bensin 1499 cc, yang mampu menghasilkan tenaga hingga 104 hp dan torsi puncak 141 Nm. Xpander Cross Premium CVT berkapasitas 7-penupang dibekali juga dengan transmisi Variable Speed CVT. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "MitsubishiXpanderCross.webp",            "type" => "matic"

            ]);

            Mobil::create([
              "nama"=> "Mitsubishi Pajero Sport",
              "merek"=> "Mitsubishi",
              "tahun"=> 2024,
              "cc"=> 2477,
              "decs"=> "Mitsubishi Pajero Sport tersedia dalam pilihan mesin Diesel di Indonesia SUV baru dari Mitsubishi hadir dalam 6 varian. Bicara soal spesifikasi mesin Mitsubishi Pajero Sport, ini ditenagai dua pilihan mesin Diesel berkapasitas 2442 cc. Pajero Sport tersedia dengan transmisi Manual and Otomatis tergantung variannya. serta ground clearance 218 mm. SUV terbaru dari Mitsubishi, Pajero Sport, hadir dengan 6 varian. Varian tertinggi hadir dengan mesin Diesel 2442 cc, yang mampu menghasilkan tenaga hingga 179 hp dan torsi puncak 430 Nm. Pajero Sport Dakar Ultimate AT 4x4 berkapasitas 7-penupang dibekali juga dengan transmisi 8-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "MitsubishiPajeroSport.webp",  "type" => "matic"
            ]);

            Mobil::create([
              "nama"=> "Mitsubishi Pajero Sport Elite ",
              "merek"=> "Mitsubishi",
              "tahun"=> 2020,
              "cc"=> 2398,
              "decs"=> "Mitsubishi Pajero Sport Elite tersedia dalam pilihan mesin Diesel di Indonesia SUV baru dari Mitsubishi hadir dalam 1 varian. Bicara soal spesifikasi mesin Mitsubishi Pajero Sport Elite, ini ditenagai dua pilihan mesin Diesel berkapasitas 2398 cc. Pajero Sport Elite tersedia dengan transmisi Otomatis tergantung variannya. SUV terbaru dari Mitsubishi, Pajero Sport Elite, hadir dengan 1 varian. Varian tertinggi hadir dengan mesin Diesel 2398 cc, yang mampu menghasilkan tenaga hingga 179 hp dan torsi puncak 430 Nm. Pajero Sport Elite 2.4L AT berkapasitas 7-penupang dibekali juga dengan transmisi 8-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "MitsubishiPajeroSportElite.webp",  
              "type" => "matic"
            ]);


            Mobil::create([
              "nama"=> "Mitsubishi Triton",
              "merek"=> "Mitsubishi",
              "tahun"=> 2024,
              "cc"=> 2477,
              "decs"=> "Mitsubishi Triton tersedia dalam pilihan mesin Diesel di Indonesia Pickup Truck baru dari Mitsubishi hadir dalam 6 varian. Bicara soal spesifikasi mesin Mitsubishi Triton, ini ditenagai dua pilihan mesin Diesel berkapasitas 2442 cc. Triton tersedia dengan transmisi Manual and Otomatis tergantung variannya. Triton adalah Pickup Truck 2 dan 5 seater dengan panjang 5225 mm, lebar 1815 mm, wheelbase 3000 mm. Pickup Truck terbaru dari Mitsubishi, Triton, hadir dengan 6 varian. Varian tertinggi hadir dengan mesin Diesel 2442 cc, yang mampu menghasilkan tenaga hingga 178 hp dan torsi puncak 430 Nm. Triton Ultimate AT Double Cab 4WD berkapasitas 5-penupang dibekali juga dengan transmisi 6-Speed Otomatis. Sistem keamanannya dibekali Power Door Locks & Anti Theft Device.",
              "image" => "MitsubishiTriton.webp",
              "type" => "matic"
            ]);

            Mobil::create([
              "nama"=> "Hyundai Palisade",
              "merek"=> "Hyundai",
              "tahun"=> 2011,
              "cc"=> 2199,
              "decs"=> "Hyundai Palisade tersedia dalam pilihan mesin Diesel di Indonesia SUV baru dari Hyundai hadir dalam 5 varian. Bicara soal spesifikasi mesin Hyundai Palisade, ini ditenagai dua pilihan mesin Diesel berkapasitas 2199 cc. Palisade tersedia dengan transmisi Otomatis tergantung variannya. Palisade adalah SUV 7 seater dengan panjang 4995 mm, lebar 1975 mm, wheelbase 2900 mm. serta ground clearance 203 mm. SUV terbaru dari Hyundai, Palisade, hadir dengan 5 varian. Varian tertinggi hadir dengan mesin Diesel 2199 cc, yang mampu menghasilkan tenaga hingga 197 hp dan torsi puncak 440 Nm. Palisade XRT AWD berkapasitas 7-penupang dibekali juga dengan transmisi 8-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "HyundaiPalisade.webp", 
              "type" => "matic"
            ]);

            Mobil::create([
              "nama"=> "Hyundai Staria",
              "merek"=> "Hyundai",
              "tahun"=> 2020,
              "cc"=> 2199,
              "decs"=> "Hyundai Staria tersedia dalam pilihan mesin Diesel di Indonesia MPV baru dari Hyundai hadir dalam 2 varian. Bicara soal spesifikasi mesin Hyundai Staria, ini ditenagai dua pilihan mesin Diesel berkapasitas 2199 cc. Staria tersedia dengan transmisi Otomatis tergantung variannya. Staria adalah MPV 9 dan 7 seater dengan panjang 5253 mm, lebar 1997 mm, wheelbase 3273 mm. MPV terbaru dari Hyundai, Staria, hadir dengan 2 varian. Varian tertinggi hadir dengan mesin Diesel 2199 cc, yang mampu menghasilkan tenaga hingga 175 hp dan torsi puncak 430 Nm. Staria Signature 7 berkapasitas 7-penupang dibekali juga dengan transmisi 8-Speed Otomatis. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "HyundaiStaria.webp",            
              "type" => "manual"

            ]);

            Mobil::create([
              "nama"=> "Hyundai Stargazer",
              "merek"=> "Hyundai",
              "tahun"=> 2016,
              "cc"=> 1497,
              "decs"=> "Hyundai Stargazer tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Hyundai hadir dalam 6 varian. Bicara soal spesifikasi mesin Hyundai Stargazer, ini ditenagai dua pilihan mesin Bensin berkapasitas 1497 cc. Stargazer tersedia dengan transmisi Manual and iVT tergantung variannya. Stargazer adalah MPV 7 seater dengan panjang 4460 mm, lebar 1780 mm, wheelbase 2780 mm. serta ground clearance 195 mm. MPV terbaru dari Hyundai, Stargazer, hadir dengan 6 varian. Varian tertinggi hadir dengan mesin Bensin 1497 cc, yang mampu menghasilkan tenaga hingga 113 hp dan torsi puncak 144 Nm. Stargazer Prime IVT berkapasitas 7-penupang dibekali juga dengan transmisi Variable Speed iVT. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "HyundaiStargazer.webp",
              "type" => "manual"
            ]);

            Mobil::create([
              "nama"=> "Hyundai Creta",
              "merek"=> "Hyundai",
              "tahun"=> 2012,
              "cc"=> 1497,
              "decs"=> "Hyundai Creta tersedia dalam pilihan mesin Bensin di Indonesia Mobil Creta tersedia dalam varian 5 Crossover dan 1 SUV. Bicara soal spesifikasi mesin Hyundai Creta, ini ditenagai dua pilihan mesin Bensin berkapasitas 1497 cc. Creta tersedia dengan transmisi Manual and CVT tergantung variannya. Creta adalah SUV 5 seater dengan panjang 4315 mm, lebar 1790 mm, wheelbase 2610 mm. SUV terbaru dari Hyundai, Creta, hadir dengan 6 varian. Varian tertinggi hadir dengan mesin Bensin 1497 cc, yang mampu menghasilkan tenaga hingga 113 hp dan torsi puncak 144 Nm. Creta Alpha IVT berkapasitas 5-penupang dibekali juga dengan transmisi Variable Speed CVT. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "HyundaiCreta.webp",
              "type" => "manual"

            ]);

            Mobil::create([
              "nama"=> "Hyundai Santai Fe",
              "merek"=> "Hyundai",
              "tahun"=> 2016,
              "cc"=> 2151,
              "decs"=> "Hyundai Santa Fe tersedia dalam pilihan mesin 2 Bensin dan 2 Diesel di Indonesia SUV baru dari Hyundai hadir dalam 4 varian. Bicara soal spesifikasi mesin Hyundai Santa Fe, ini ditenagai dua pilihan mesin yaitu Bensin berkapasitas 2497 cc, serta Diesel 2151 cc. Santa Fe tersedia dengan transmisi Otomatis and Dual Clutch tergantung variannya. Santa Fe adalah SUV 7 seater dengan panjang 4785 mm, lebar 1900 mm, wheelbase 2765 mm. serta ground clearance 176 mm. SUV terbaru dari Hyundai, Santa Fe, hadir dengan 4 varian. Varian tertinggi hadir dengan mesin Diesel 2151 cc, yang mampu menghasilkan tenaga hingga 199 hp dan torsi puncak 441 Nm. Santa Fe 2.2 8DCT Signature berkapasitas 7-penupang dibekali juga dengan transmisi 8-Speed Dual Clutch. Sistem keamanannya dibekali Central Locking & Power Door Locks.",
              "image" => "HyundaiSantaFe.webp.",
              "type" => "matic"
            ]);
    }
}


