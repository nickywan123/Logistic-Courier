<?php

use App\Web\Faq;
use App\Web\FaqCategory;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Faq::truncate();

        $user = FaqCategory::where('name', 'User')->first();
        $merchant = FaqCategory::where('name', 'Merchant')->first();
        $rider = FaqCategory::where('name', 'Rider')->first();
        $hub = FaqCategory::where('name', 'Hub')->first();

        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Berapakah had penghantaran untuk Fuiyoh Express?',
            'answer' => 'Had jarak penghantaran bagi Fuiyoh Express adalah sekitar radius 15 kilometer.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Berapakah had penghantaran untuk Fuiyoh Express?',
            'answer' => 'Had jarak penghantaran bagi Fuiyoh Express adalah sekitar radius 15 kilometer.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Berapakah caj penghantaran menggunakan platform Fuiyoh?',
            'answer' => 'Caj penghantaran menggunakan Platform Fuiyoh bermula dari serendah RM2.00.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Adakah kos penghantaran ditentukan mengikut jumlah berat parcel?',
            'answer' => 'Kadar caj penghantaran bagi Fuiyoh Express ditentukan mengikut jenis kenderaan penghantaran dan jarak penghantaran.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Apakah itu Fuiyoh?',
            'answer' => 'Fuiyoh merupakan platform jualan atas talian yang dibangunkan oleh KOPENAS.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Apakah itu platform eDagang Fuiyoh?',
            'answer' => 'Platform eDagang Fuiyoh adalah platform jualan “online” melalui aplikasi pengguna, Fuiyoh'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Apakah itu platform P-hailing Fuiyoh?',
            'answer' => 'Platform P-hailing Fuiyoh adalah platform perkhidmatan “pick-up” dan “delivery”.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Apakah itu Fuiyoh Delivery?',
            'answer' => 'Fuiyoh Delivery adalah kurier penghantaran jarak jauh yang merentasi daerah dan negeri'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Apakah itu Fuiyoh Express?',
            'answer' => 'Fuiyoh Express adalah penghantaran jarak dekat dan segera.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Apakah servis yang ditawarkan oleh Fuiyoh?',
            'answer' => 'Rangkaian servis yang diperkenalkan dibawah jenama Fuiyoh adalah Fuiyoh Delivery, Fuiyoh Market, Fuiyoh Crew, Fuiyoh Hub, Fuiyoh Courier dan Fuiyoh Express.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Apakah servis dan jualan yang disediakan di platform eDagang Fuiyoh?',
            'answer' => 'Makanan, minuman, barang runcit, keperluan harian, pakaian, barangan elektronik, produk kecantikan dan pelbagai lagi'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $user->id,
            'question' => 'Apakah perkhidmatan kurier yang digunakan oleh platform Fuiyoh?',
            'answer' => 'Fuiyoh menggunakan kurier Fuiyoh Delivery dan Fuiyoh Express.'
        ]);

        Faq::updateOrCreate([
            'faq_category_id' => $merchant->id,
            'question' => 'Adakah pendaftaran Merchant percuma?',
            'answer' => 'Ya. Pendaftaran Merchant adalah percuma.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $merchant->id,
            'question' => 'Apakah itu Fuiyoh Market?',
            'answer' => 'Platform dashboard khas untuk Merchant/Seller/Freelancers berbisnes & berhubung secara atas talian'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $merchant->id,
            'question' => 'Dimanakah produk dipasarkan sekiranya Merchant memuat naik senarai produk mereka melalui dashboard Fuiyoh Market?',
            'answer' => 'Produk akan automatik dipasarkan di aplikasi pengguna Fuiyoh, Facebook Page (shop), Shopee, Lazada dan Alibaba.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $merchant->id,
            'question' => 'Adakah Merchant perlu menyemak tempahan pelanggan dan mengurus stok dengan mengakses setiap akaun eDagang tersebut?',
            'answer' => 'Merchant hanya perlu menyemak dan mengurus stok melalui dashboard Fuiyoh Gig sahaja.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $merchant->id,
            'question' => 'Adakah penolakan caj servis dikenakan kepada setiap transaksi yang berjaya?',
            'answer' => 'Tidak. Harga jualan Merchant adalah kekal seperti yang ditetapkan.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $merchant->id,
            'question' => 'Apakah produk yang boleh dipasarkan melalui Fuiyoh Market?',
            'answer' => 'Fuiyoh Market membolehkan pemasaran untuk pelbagai jenis produk.'
        ]);

        Faq::updateOrCreate([
            'faq_category_id' => $rider->id,
            'question' => 'Adakah pendaftaran sebagai rider di Fuiyoh Crew percuma?',
            'answer' => 'Ya. Pendaftaran sebagai Fuiyoh Crew adalah percuma.',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $rider->id,
            'question' => 'Apakah itu Fuiyoh Crew?',
            'answer' => 'Fuiyoh Crew adalah platform untuk menjadi Rider kepada Fuiyoh Delivery dan Fuiyoh Express.',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $rider->id,
            'question' => 'Siapakah yang boleh daftar sebagai rider di Fuiyoh Crew?',
            'answer' => 'Sesiapa sahaja berumur 18 – 40 tahun dan mempunyai lesen memandu yang sah bagi yang menggunakan kenderaan seperti motorsikal dan kereta.',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $rider->id,
            'question' => 'Apakah kenderaan yang digunakan?',
            'answer' => 'Jenis kenderaan yang digunakan adalah kereta, motosikal dan basikal',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $rider->id,
            'question' => 'Adakah rider Fuiyoh Crew mendapat lindungan insurans?',
            'answer' => 'Rider yang sah berdaftar akan mendapat lindungan insurans.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $rider->id,
            'question' => 'Bagaimanakah cara untuk mendaftar sebagai rider?',
            'answer' => 'Untuk menjadi rider kepada Fuiyoh Delivery dan Fuiyoh Express, boleh mendaftar secara percuma melalui platfrom Fuiyoh Crew.'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $rider->id,
            'question' => 'Adakah terdapat kekosongan untuk jawatan rider?',
            'answer' => 'Bagi sebarang jawatan kosong rider, sila rujuk kepada...'
        ]);

        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Berapakah harga untuk menggunakan Fuiyoh Express?',
            'answer' => 'Kadar caj penghantaran bergantung pada:<ol class="ps-20 mb-0"><li>Jenis kenderaan penghantaran</li><li>Jarak penghantaran</li></ol>'
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Apakah itu Fuiyoh Hub?',
            'answer' => 'Fuiyoh Hub adalah pusat perkhidmatan kurier dan penghantaran yang diusahakan oleh Kopenas Berhad',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Apakah itu Drop Point?',
            'answer' => 'Drop Point adalah tempat untuk pelanggan meletakkan barangan atau parcel yang perlu dihantar ke destinasi',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Apakah itu Drop Center?',
            'answer' => 'Drop Center adalah tempat pengagihan barangan mengikut lokasi alamat yang dikirim.',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Siapakah rakan penghantaran rasmi Fuiyoh Hub?',
            'answer' => 'Fuiyoh Courier dan Fuiyoh Express merupakan rakan penghantaran rasmi Fuiyoh Hub.',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Bagaimanakah sistem yang digunakan oleh Fuiyoh Delivery?',
            'answer' => 'Fuiyoh Delivery menggunakan sistem Drop Point dan Drop Center.',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Dimanakah lokasi rasmi Drop Point untuk Fuiyoh Delivery?',
            'answer' => 'Stesen minyak yang terpilih.',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Apakah cara penghantaran yang boleh digunakan oleh pelanggan?',
            'answer' => 'Terdapat 3 cara penghantaran yang boleh digunakan oleh pelanggan, iaitu:-<ol class="ps-20 mb-0"><li>Membuat kiriman barangan atau parcel di Fuiyoh Hub.</li><li>Membuat tempahan penghantaran secara atas talian.</li><li>Menggunakan sister Drop Point dan Drop Center</li></ol>',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Bagaimanakah proses penghantaran menggunakan sistem Drop Point dan Drop Center?',
            'answer' => 'Proses penghantaran adalah seperti berikut:- <ol class="ps-20 mb-0"><li>Pelanggan meletakkan barangan yang hendak dikirim di mana-mana lokasi Drop Point.</li><li>Barangan tersebut akan di bawa ke lokasi Drop Center yang terdekat.</li><li>Barangan tersebut akan dikurier ke Drop Center lain seperti alamat yang  dikirim.</li><li>Dari Drop Center itu, barangan akan diedarkan ke Fuiyoh Hub yang terdekat  dengan alamat yang dikirim.</li><li>Dari Fuiyoh Hub, Fuiyoh Crew akan terus menghantar barangan tersebut sehingga ke depan pintu alamat penerima.</li></ol>',
        ]);

        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Bagaimana proses penghantaran menggunakan Fuiyoh Express?',
            'answer' => 'Pelanggan boleh terus membuat tempahan untuk menggunakan Fuiyoh Express melalui website, aplikasi atau Fuiyoh Hub',
        ]);
        Faq::updateOrCreate([
            'faq_category_id' => $hub->id,
            'question' => 'Berapakah radius jarak penghantaran untuk pelanggan menggunakan Fuiyoh Express melalui Fuiyoh Hub',
            'answer' => 'Sekitar 15 km sahaja',
        ]);

    }
}
