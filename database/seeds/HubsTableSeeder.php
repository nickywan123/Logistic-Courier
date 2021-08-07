<?php

use App\Hub;
use Illuminate\Database\Seeder;

class HubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create all available Fuiyoh Hubs

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB KERIAN',
            'address' => 'NO 4, JALAN WAWASAN 4, TAMAN WAWASAN JAYA, 34200 PARIT BUNTAR PERAK',
            'city' =>'PARIT BUNTAR',
            'state' =>'PERAK',
            'postcode' =>'34200'
        ],['email' =>'kerian-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB TAIPING',
            'address' =>'NO 231, JALAN BERANGAN, KAMPUNG JAMBU,34000 TAIPING, PERAK',
            'city' =>'TAIPING',
            'state' =>'PERAK',
            'postcode' =>'34000'
        ],['email' =>'taiping-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB SUNGAI ARA',
            'address' =>'302C-1, GROUND FLOOR, JALAN DATO ISMAIL HASHIM, SUNGAI ARA 11900 BAYAN LEPAS, PULAU PINANG',
            'city' =>'BAYAN LEPAS',
            'state' =>'PULAU PINANG',
            'postcode' =>'11900'
        ],['email' =>'sg-ara-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB SUNGAI BULOH',
            'address' =>'NO 32A-G, JALAN DC 4/5, DESA COALFIELDS,47000, SUNGAI BULOH, SELANGOR',
            'city' =>'SUNGAI BULOH',
            'state' =>'SELANGOR',
            'postcode' =>'47000'
        ],['email' =>'sg-buloh-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB SRI RAMPAI',
            'address' =>'NO 60 TINGKAT BAWAH, JALAN 42/26,TAMAN SRI RAMPAI, 53300 KUALA LUMPUR',
            'city' =>'KUALA LUMPUR',
            'state' =>'WILAYAH PERSEKUTUAN',
            'postcode' =>'53300'
        ],['email' =>'sri-rampai-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB REMBAU',
            'address' =>'PT 177, BT 17 3/4 JALAN SEREMBAN,TAMPIN (REMBAU) 71300 REMBAU, NEGERI SEMBILAN',
            'city' =>'REMBAU',
            'state' =>'NEGERI SEMBILAN',
            'postcode' =>'71300'
        ],['email' =>'rembau-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB HANG TUAH JAYA',
            'address' =>'NO 43, JALAN PPPS 1, PUSAT PERNIAGAAN PUTRA SENTOSA,BUKIT BARU 75150 MELAKA',
            'city' =>'MELAKA',
            'state' =>'MELAKA',
            'postcode' =>'75150'
        ],['email' =>'hang-tuah-jaya-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB SUNGAI UDANG',
            'address' =>'NO 20A, JALAN KERAMBIT 4, BANDAR BARU SUNGAI UDANG, 76300 SUNGAI UDANG MELAKA',
            'city' =>'SUNGAI UDANG',
            'state' =>'MELAKA',
            'postcode' =>'76300'
        ],['email' =>'sg-udang-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB KOTA MELAKA',
            'address' =>'NO. G-7, BLOK ANGGERIK 1, JALAN BERKAT 15, TAMAN MALIM JAYA, 75250 MELAKA',
            'city' =>'MELAKA',
            'state' =>'MELAKA',
            'postcode' =>'75250'
        ],['email' =>'kota-melaka-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' =>'FUIYOH HUB TANGKAK',
            'address'=> 'NO 15, GROUND FLOOR, TAMAN MEGA RIA, 84900 TANGKAK, JOHOR',
            'city' =>'TANGKAK',
            'state' =>'JOHOR',
            'postcode' =>'84900'
        ],['email' =>'tangkak-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB BANDAR PENAWAR',
            'address' => 'NO. 36 JALAN KEMPAS 4, TAMAN DESARU CHERAS,81930 BANDAR PENAWAR, JOHOR',
            'city' => 'BANDAR PENAWAR',
            'state' => 'JOHOR',
            'postcode' =>'81930'
        ],['email' =>'bandar-penawar-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB KEMAMAN',
            'address' => 'PT13839 GF, JALAN PENGHIBURAN, BAKAU TINGGI,24000 KEMAMAN, TERENGGANU',
            'city' =>'CHUKAI',
            'state' => 'TERENGGANU',
            'postcode' =>'24000'
        ],['email' =>'kemaman-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB DESA PINGGIRAN',
            'address' =>'7A, JALAN PINGGIRAN PUTRA 4A/2, DESA PINGGIRAN PUTRA,43000 KAJANG,SELANGOR',
            'city' =>'KAJANG',
            'state' =>'SELANGOR',
            'postcode' =>'43000'
        ],['email' =>'desa-pinggiran-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB PANDAN',
            'address' =>'29G, JALAN PANDAN INDAH 4/6A, PANDAN INDAH,51000,KUALA LUMPUR',
            'city' =>'KUALA LUMPUR',
            'state' =>'WILAYAH PERSEKUTUAN',
            'postcode' =>'51000'
        ],['email' =>'pandan-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB SELAYANG',
            'address' =>'NO. 20 (GROUND FLOOR), JALAN BIDARA, TAMAN BIDARA, 68100 SELAYANG, BATU CAVES, SELANGOR',
            'city' =>'BATU CAVES',
            'state' =>'SELANGOR',
            'postcode' =>'68100'
        ],['email' =>'selayang-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB SEMENYIH',
            'address' =>'NO 6, GROUND FLOOR, JALAN SEMENYIH SENTRAL 4,43500 SEMENYIH,SELANGOR',
            'city' =>'SEMENYIH',
            'state' =>'SELANGOR',
            'postcode' =>'43500'
        ],['email' =>'semenyih-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB SENAWANG ',
            'address' =>'NO 507, JALAN BANDAR SENAWANG 19, PUSAT BANDAR SENAWANG, 70450 SEREMBAN, NEGERI SEMBILAN',
            'city' =>'SEREMBAN',
            'state' =>'NEGERI SEMBILAN',
            'postcode' =>'70450'
        ],['email' =>'senawang-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB PORT DICKSON',
            'address' =>'NO 139-G, JALAN DS 1/11, BANDAR DATARAN SEGAR, 71010 PORT DICKSON',
            'city' =>'PORT DICKSON',
            'state' =>'NEGERI SEMBILAN',
            'postcode' =>'71010'
        ],['email' =>'port-dickson-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB NILAI',
            'address' =>'PT 9691, GROUND FLOOR, JALAN BBN 1/3B PUSAT BANDAR, PUTRA POINT, NILAI, 71800 SEREMBAN',
            'city' =>'NILAI',
            'state' =>'NEGERI SEMBILAN',
            'postcode' =>'71800'
        ],['email' =>'nilai-hub@fuiyoh.my']);


        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB KUALA PILAH',
            'address' =>'NO 81, JALAN DATO UNDANG JOHOL, 72000 KUALA PILAH, NEGERI SEMBILAN',
            'city' =>'KUALA PILAH',
            'state' =>'NEGERI SEMBILAN',
            'postcode' =>'72000'
        ],['email' =>'kuala-pilah-hub@fuiyoh.my']);

        Hub::updateOrCreate([
            'hub_name' => 'FUIYOH HUB KUCHING',
            'address' =>'SUBLOT NO 2 OF PARENTS LOTS 3 TO 710 TO 68, 71, 72, 10010 & 10012 ALL OF SECTION 65 KUCHING, TOWN LAND DISTRICT, 93050 KUCHING, SARAWAK',
            'city' =>'KUCHING',
            'state' =>'SARAWAK',
            'postcode' =>'93050'
        ],['email' =>'kuching-hub@fuiyoh.my']);

       
    }
}
