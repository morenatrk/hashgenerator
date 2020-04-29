HashGenerator Nedir ?

Kendi sunucularınızda md5 sha1 gibi şifrelemeleri random oluşturup veritabanınızda tutarak elinizde bir password wordlisti oluşturabilirsiniz
günde sunucu performansına bağlı yüz milyonlarca şifre oluşturabilmektesiniz.

Kurulum;
1.) Veritabanı oluşturup sql'i yükleyin 
2.) hashgenerator.php'de veritabanı bilgilerini doldurun. 
3.) islem.php'de veritabanı bilgilerini doldurun.


kurulum tamam

hashgenerator.php'deki 1. for döngüsündeki i < e gelen değer sizin oluşturmak istediğiniz karakter uzunluğunu belirler örneğin 8 kullandık
2. for döngüsündeki i < e gelen sayısal değer kaç adet şifre oluşturmak istediğinizi belirler kendinize göre ayarlayıp kullanabilirsiniz

Search edebilmeniz ve mantığını kontrol edebilmeniz için veritabanında 40 k şifre bıraktım.


zamanla güncelleyip yüklemeye devam edebilirim.
