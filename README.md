# laravel-redis
Laravel projesinde redis ile cache kulanımı;

.env dosyamızda vveri tabanı yapılandırmaları sonrası

<code>php artisan migrate --seed</code> ile tabloları ve içinde fake verileri oluşturabilirsiniz.

Redisi projenize eklemek için <code>composer require predis/predis</code> kullanabilirsiniz.

<code>"Command 'iNCRBY' is not a registered Redis command."</code>  hatası ile karşılaşabilirsiniz.

vendor/predis/predis/src/Profile/RedisProfile.php dosyasında  
<code>strtoupper => mb_strtoupper</code> olarak değiştirin.

Postman üzerinden 10bin veri ile yapılan testlerde veriler;

Redis olmadan =  "7.60 - 8" s aralığında.
Redis ile = "200 - 300" ms aralığında listelenmiştir.


