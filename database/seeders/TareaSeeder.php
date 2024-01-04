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
        Tarea::create(['codigo' => '1506 025', 'nombre'=>'Se Explicó Funcionamiento Dispositivos clientes']);
        Tarea::create(['codigo' => '1508 024', 'nombre'=>'Se Inicializó Deco']);
        Tarea::create(['codigo' => '1517 036', 'nombre'=>'Se Reconectó Por Mal Corte']);
        Tarea::create(['codigo' => '1520 039', 'nombre'=>'Se Reparó Cable Cortado']);
        Tarea::create(['codigo' => '1521 040', 'nombre'=>'Se Reparó Empalme Domiciliario']);
        Tarea::create(['codigo' => '1534 055', 'nombre'=>'Se Verificó']);
        Tarea::create(['codigo' => '1539 060', 'nombre'=>'Alargar boca hasta 10 Mts.']);
        Tarea::create(['codigo' => '1540 522', 'nombre'=>'Reinstalar por cambio Boca de Lugar']);
        Tarea::create(['codigo' => '1545 066', 'nombre'=>'Instalar Subida Rg11']);
        Tarea::create(['codigo' => '1546 067', 'nombre'=>'Instalar Cable 220V']);
        Tarea::create(['codigo' => '1551 072', 'nombre'=>'Reinstalar Subida Rg11']);
        Tarea::create(['codigo' => '1552 073', 'nombre'=>'Reinstalar Subida Rg6']);
        Tarea::create(['codigo' => '1556 077', 'nombre'=>'Se Ajustó Conector']);
        Tarea::create(['codigo' => '1604 150', 'nombre'=>'Cambiar Cablemodem']);
        Tarea::create(['codigo' => '1604 150', 'nombre'=>'Se Cambió Cablemódem']);
        Tarea::create(['codigo' => '1607 011', 'nombre'=>'Se Quitó Filtro']);
        Tarea::create(['codigo' => '1661', 'nombre'=>'Retirar por Cambio Cablemodem']);
        Tarea::create(['codigo' => '1662', 'nombre'=>'Retirar por Cambio Cablemodem WiFi']);
        Tarea::create(['codigo' => '1663', 'nombre'=>'Retirar por Cambio Emta']);
        Tarea::create(['codigo' => '1671', 'nombre'=>'Recuperar  Cablemodem WiFi']);
        Tarea::create(['codigo' => '1687', 'nombre'=>'Boca CM reconectada']);
        Tarea::create(['codigo' => '1691', 'nombre'=>'Retirar por Cambio DECO Analogico']);
        Tarea::create(['codigo' => '1692', 'nombre'=>'Retirar por Cambio DECO Digital']);
        Tarea::create(['codigo' => '1694', 'nombre'=>'Retirar por Cambio DECO DVR HD']);
        Tarea::create(['codigo' => '1695', 'nombre'=>'Retirar por Cambio DECO HD']);
        Tarea::create(['codigo' => '2042 008', 'nombre'=>'Cambio Decodificador']);
        Tarea::create(['codigo' => '2043 012', 'nombre'=>'Cambio Remoto Deco']);
        Tarea::create(['codigo' => '2140', 'nombre'=>'Instalar Boca CATV Convenio']);
        Tarea::create(['codigo' => '25260', 'nombre'=>'INSTALAR DECO HD EN CTE ACTIVO']);
        Tarea::create(['codigo' => '25261', 'nombre'=>'Instalar DECO Flow en cte activo']);
        Tarea::create(['codigo' => '25262', 'nombre'=>'INSTALAR CABLEMODEM EN CTE ACTIVO']);
        Tarea::create(['codigo' => '25263', 'nombre'=>'INSTALAR CABLEMODEM WIFI EN CTE ACTIVO']);
        Tarea::create(['codigo' => '25266', 'nombre'=>'Instalar Cablemódem WIFI 3.0 24X4/8 (DPC 3848) en CTE ACTIVO']);
        Tarea::create(['codigo' => '25267', 'nombre'=>'INSTALAR EMTA EN CTE ACTIVO']);
        Tarea::create(['codigo' => '25270', 'nombre'=>'Instalar y Retirar CM por Recambio']);
        Tarea::create(['codigo' => '25274', 'nombre'=>'Instalar ToIP WiFi Internet en cliente activo']);
        Tarea::create(['codigo' => '2641 017', 'nombre'=>'Se Conectó TV - DECO']);
        Tarea::create(['codigo' => '2642 026', 'nombre'=>'Se Configuró TV Cliente']);
        Tarea::create(['codigo' => '2643 046', 'nombre'=>'Se Configuraron Dispositivos Cliente']);
        Tarea::create(['codigo' => '2644 060', 'nombre'=>'Se Cambió Boca de Lugar']);
        Tarea::create(['codigo' => '2645 061', 'nombre'=>'Se Cambió Boca Aire de Lugar']);
        Tarea::create(['codigo' => '2646 062', 'nombre'=>'Se Reinstaló Aire Completamente']);
        Tarea::create(['codigo' => '2647 069', 'nombre'=>'Se Reinstaló Boca Interna']);
        Tarea::create(['codigo' => '2648 070', 'nombre'=>'Se Reinstaló Acometida']);
        Tarea::create(['codigo' => '2651 075', 'nombre'=>'Se Reinstaló Completamente']);
        Tarea::create(['codigo' => '2661 164', 'nombre'=>'Se Verificó Problema en Equipo del Cliente']);
        Tarea::create(['codigo' => '2707', 'nombre'=>'RETIRAR POR MORA DECO DIGITAL FLEX']);
        Tarea::create(['codigo' => '2708', 'nombre'=>'RETIRAR POR CAMBIO DECO DIGITAL  FLEX']);
        Tarea::create(['codigo' => '2709', 'nombre'=>'Instalar Deco Digital DCT']);
        Tarea::create(['codigo' => '2710', 'nombre'=>'Recuperar DECO Digital FLEX']);
        Tarea::create(['codigo' => '2711', 'nombre'=>'Cambiar de Lugar dos o más Bocas']);
        Tarea::create(['codigo' => '2713', 'nombre'=>'INSTALAR DECO HD FLEX']);
        Tarea::create(['codigo' => '4724', 'nombre'=>'Instalar DECO Flow']);
        Tarea::create(['codigo' => '4724', 'nombre'=>'Instalar DECO HIBRIDO']);
        Tarea::create(['codigo' => '4725', 'nombre'=>'Retirar por voluntaria DECO Flow']);
        Tarea::create(['codigo' => '4726', 'nombre'=>'Retirar por Mora DECO Flow']);
        Tarea::create(['codigo' => '4728', 'nombre'=>'Retirar por Cambio DECO Flow']);
        Tarea::create(['codigo' => '4834', 'nombre'=>'INSTALAR DECO DIGITAL BASICO']);
        Tarea::create(['codigo' => '4839', 'nombre'=>'RETIRAR POR VOLUNTARIA DECO DIGITAL BASICO']);
        Tarea::create(['codigo' => '4841', 'nombre'=>'Instalar Cablemodem 3.0']);
        Tarea::create(['codigo' => '4843', 'nombre'=>'Retirar por Cambio Cablemodem 3,0']);
        Tarea::create(['codigo' => '4844', 'nombre'=>'Retirar por Cambio Cablemodem 3.0 WiFi']);
        Tarea::create(['codigo' => '4846', 'nombre'=>'Retirar por mora Cablemodem 3.0 WiFi']);
        Tarea::create(['codigo' => '4847', 'nombre'=>'Retirar por voluntaria Cablemodem 3.0']);
        Tarea::create(['codigo' => '4849', 'nombre'=>'Retirar por voluntaria Cablemodem 3.0 WiFi']);
        Tarea::create(['codigo' => '4851', 'nombre'=>'Recuperar Cablemodem 3.0 WiFi']);
        Tarea::create(['codigo' => '4853', 'nombre'=>'INSTALAR ACOMETIDA TS']);
        Tarea::create(['codigo' => '4854', 'nombre'=>'RETIRAR POR MORA ACOMETIDA TS']);
        Tarea::create(['codigo' => '4855', 'nombre'=>'Retiro Voluntario Acometida TS']);
        Tarea::create(['codigo' => '6033', 'nombre'=>'Retirar por Mora Coaxil Cablemodem Docsis 3.0 WiFi']);
        Tarea::create(['codigo' => '6034', 'nombre'=>'Instalar Modem 3.0 WIFI']);
        Tarea::create(['codigo' => '6175', 'nombre'=>'Instalar Acometida Coaxil']);
        Tarea::create(['codigo' => '6176', 'nombre'=>'Retiro Voluntario Acometida']);
        Tarea::create(['codigo' => '6177 CORP', 'nombre'=>'Retirar por Mora Acometida']);
        Tarea::create(['codigo' => '6178', 'nombre'=>'Instalar Boca CM Coaxil']);
        Tarea::create(['codigo' => '6184', 'nombre'=>'Retirar por Cambio DECO Digital TS']);
        Tarea::create(['codigo' => '6187', 'nombre'=>'Retirar por mora DECO Digital TS']);
        Tarea::create(['codigo' => '6190', 'nombre'=>'Instalar DECO Digital TS']);
        Tarea::create(['codigo' => '6190', 'nombre'=>'Instalar DECO Digital TS']);
        Tarea::create(['codigo' => '6192', 'nombre'=>'Instalar Multiroom TS']);
        Tarea::create(['codigo' => '700146', 'nombre'=>'Instalar DECO DTA']);
        Tarea::create(['codigo' => '700147', 'nombre'=>'Retirar por Voluntaria DECO DTA']);
        Tarea::create(['codigo' => '700322', 'nombre'=>'REINSTALACIÓN DE DOS O MÁS BOCAS COAXIALES']);
        Tarea::create(['codigo' => '70500', 'nombre'=>'RECONECTAR DE TAP ACOMETIDA']);
        Tarea::create(['codigo' => '70501', 'nombre'=>'ACOMETIDA SOLO INTERNET']);
        Tarea::create(['codigo' => '70502', 'nombre'=>'BOCA INTERNET SIN ACOMETIDA']);
        Tarea::create(['codigo' => '7965', 'nombre'=>'Recambio de Acometida FTTH']);
        Tarea::create(['codigo' => '7965', 'nombre'=>'Recambio de Acometida FTTH']);
        Tarea::create(['codigo' => '7966', 'nombre'=>'Instalar Acometida FTTH']);
        Tarea::create(['codigo' => '7967', 'nombre'=>'Instalar ONT FTTH']);
        Tarea::create(['codigo' => '800018', 'nombre'=>'Instalar DECO FULL IP']);
        Tarea::create(['codigo' => '800019', 'nombre'=>'Retirar por voluntaria DECO FULL IP/4K']);
        Tarea::create(['codigo' => '800019', 'nombre'=>'Retirar por voluntaria DECO FULL IP/4K']);
        Tarea::create(['codigo' => '800020', 'nombre'=>'Instalar DECO HD 600']);
        Tarea::create(['codigo' => '800024', 'nombre'=>'Retirar por voluntaria DECO HD 600']);
        Tarea::create(['codigo' => '800025', 'nombre'=>'Retirar por cambio DECO HD 600']);
        Tarea::create(['codigo' => '800026', 'nombre'=>'Recuperar Deco HD 600']);
        Tarea::create(['codigo' => '800033', 'nombre'=>'Instalar DECO FULL IP en cte activo']);
        Tarea::create(['codigo' => '800724', 'nombre'=>'RETIRAR POR CAMBIO DECO DTA']);
        Tarea::create(['codigo' => '800751', 'nombre'=>'INSTALAR CABLEMODEM GOLD']);
        Tarea::create(['codigo' => '800752', 'nombre'=>'Instalar cablemodem wifi 3.0 24x4/8 (dpc 3848)']);
        Tarea::create(['codigo' => '800753', 'nombre'=>'Recambio de Equipo No Apto a WIFI 3.0 24X4/8 (DPC 3848)']);









    }
}
