# cevrimici

Çevrimici modülünü eklemek için öncelikle,

Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

############################

"repositories": [ { .... { "type": "vcs", "url": "https://github.com/cemaldenizulucak/cevrimici.git" } ],

"require": {

....   
"kouosl/cevrimici": "dev-master"
},

############################

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal 
composer update
php yii migrate--migrationPath=@vendor/kouosl/cevrimici/migrations

Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

Portal dizinindeki "\frontend\config\main.php" dosyasına girerek şu satırları ekliyoruz;

'cevrimici' => [ 'class' => 'kouosl\cevrimici\Module'
],

Modül kurulumu tamamlanmıştır.

http://portal.kouosl/cevrimici buradan modüle ulaşabilirsiniz.

Cemal Deniz Ulucak - 141307033
