# laravel-redis
Laravel projesinde redis ile cache kulanımı;

.env dosyamızda vveri tabanı yapılandırmaları sonrası

php artisan migrate --seed ile tabloları ve içinde fake verileri oluşturabilirsiniz.

Redisi projenize eklemek için composer require predis/predis kullanabilirsiniz.

Redis için yeni kurulum yapacaksanız "Command 'iNCRBY' is not a registered Redis command."  hatası ile karşılaşacaksınız.

vendor/predis/predis/src/Profile/RedisProfile.php dosyasında  
strtoupper => mb_strtoupper olarak değiştirin.

Postman üzerinden 10bin veri ile yapılan testlerde veriler;

Redis olmadan =  "7.60 - 8" s aralığında.
Redis ile = "200 - 300" ms aralığında listelenmiştir.


