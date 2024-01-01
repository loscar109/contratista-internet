<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarea;


class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tarea::create(['codigo' => '1275', 'nombre'=>'Acometida reconectada']);
        Tarea::create(['codigo' => '1277', 'nombre'=>'Boca CATV reconectada']);
        Tarea::create(['codigo' => '1279', 'nombre'=>'Desconectar acometida de TAP']);
        Tarea::create(['codigo' => '1283', 'nombre'=>'Filtrar acometida por mora']);
        Tarea::create(['codigo' => '1284', 'nombre'=>'Filtrar acometida por voluntaria']);
        Tarea::create(['codigo' => '1285', 'nombre'=>'Instalar Acometida']);
        Tarea::create(['codigo' => '1287', 'nombre'=>'Instalar Acometida subterranea']);
        Tarea::create(['codigo' => '1290', 'nombre'=>'Instalar Boca AIRE']);
        Tarea::create(['codigo' => '1291', 'nombre'=>'Instalar Boca CATV']);
        Tarea::create(['codigo' => '1292', 'nombre'=>'Instalar Boca CATV externa']);
        Tarea::create(['codigo' => '1293', 'nombre'=>'Instalar Boca CM']);
        Tarea::create(['codigo' => '1294', 'nombre'=>'Instalar boca adicional Catv']);
        Tarea::create(['codigo' => '1298', 'nombre'=>'Instalar Boca TS']);
        Tarea::create(['codigo' => '1299', 'nombre'=>'Instalar Boca UTP']);
        Tarea::create(['codigo' => '1300', 'nombre'=>'Instalar Cablemodem']);
        Tarea::create(['codigo' => '1301', 'nombre'=>'Instalar Cablemodem WiFi']);
        Tarea::create(['codigo' => '1302', 'nombre'=>'Instalar DECO Analogico']);
        Tarea::create(['codigo' => '1305', 'nombre'=>'Instalar DECO Digital']);
        Tarea::create(['codigo' => '1309', 'nombre'=>'Instalar DECO DVR HD']);
        Tarea::create(['codigo' => '1314', 'nombre'=>'Instalar DECO HD']);
        Tarea::create(['codigo' => '1317', 'nombre'=>'Instalar Emta']);
        Tarea::create(['codigo' => '1326', 'nombre'=>'Instalar ToIP WiFi Internet']);
        Tarea::create(['codigo' => '1329', 'nombre'=>'Retirar por mora Acometida']);
        Tarea::create(['codigo' => '1339', 'nombre'=>'Retirar por mora Cablemodem']);
        Tarea::create(['codigo' => '1340', 'nombre'=>'Retirar por mora Cablemodem WiFi']);
        Tarea::create(['codigo' => '1342', 'nombre'=>'Retirar por mora DECO Digital']);
        Tarea::create(['codigo' => '1345', 'nombre'=>'Retirar por mora DECO HD']);
        Tarea::create(['codigo' => '1361', 'nombre'=>'Retirar por voluntaria Acometida']);
        Tarea::create(['codigo' => '1371', 'nombre'=>'Retirar por voluntaria Cablemodem']);
        Tarea::create(['codigo' => '1372', 'nombre'=>'Retirar por voluntaria Cablemodem WiFi']);
        Tarea::create(['codigo' => '1374', 'nombre'=>'Retirar por voluntaria DECO Digital']);
        Tarea::create(['codigo' => '1376', 'nombre'=>'Retirar por voluntaria DECO DVR HD']);
        Tarea::create(['codigo' => '1377', 'nombre'=>'Retirar por voluntaria DECO HD']);
        Tarea::create(['codigo' => '1378', 'nombre'=>'Retirar por voluntaria Emta']);
        Tarea::create(['codigo' => '1393', 'nombre'=>'Recuperar Cablemodem']);
        Tarea::create(['codigo' => '1394', 'nombre'=>'Recuperar DECO Analogico']);
        Tarea::create(['codigo' => '1395', 'nombre'=>'Recuperar DECO Digital']);
        Tarea::create(['codigo' => '1398', 'nombre'=>'Recuperar DECO HD']);
        Tarea::create(['codigo' => '1399', 'nombre'=>'Recuperar eMTA']);
        Tarea::create(['codigo' => '1487', 'nombre'=>'Cambiar F en Tap por Variación de TX']);
        Tarea::create(['codigo' => '1488 004', 'nombre'=>'Se Cambió Chicote TV/DECO']);
        Tarea::create(['codigo' => '1490 006', 'nombre'=>'Se Cambió Conector Domiciliario']);
        Tarea::create(['codigo' => '1491 007', 'nombre'=>'Se Cambió Cable de Lugar']);
        Tarea::create(['codigo' => '1493 009', 'nombre'=>'Se Cambió F en el TAP']);
        Tarea::create(['codigo' => '1497 013', 'nombre'=>'Se Cambió Splitter']);
        Tarea::create(['codigo' => '1498 014', 'nombre'=>'Se Cambió TAP Domiciliario']);
        Tarea::create(['codigo' => '1500 016', 'nombre'=>'Se Colocó Atenuador']);
        Tarea::create(['codigo' => '1501 507', 'nombre'=>'Conectar Tv-Dvd-Deco']);
        Tarea::create(['codigo' => '1505 021', 'nombre'=>'Se Prolijó Instalación']);






    }
}
