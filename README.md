PHP ile oluşturulmuş MVC ve Dosya yapısı
- .htaccess dosyası ile gelen URL'i index üzerinden alıyoruz.
- Ardından aldığımız URL'i URL/controller/method/parameters olarak düzenlemek için Route sınıfımızda parseUrl metodunu oluşturup $_SERVER değişkeni içerisindeki SCRIPT_NAME ve REQUEST_URI değişkenleri üzerinde düzenleme sağlıyoruz.
- Parçalanan url ile controller, method ve parametre değişkenlerini buluyoruz.
- Bulduğumuz bu değişkenleri öncelikle controller'dan başlayarak olup olmadığını kontrol ediyoruz. Ardından method'un varlığı kontrol edilip varsa parametleri gönderiyoruz.
- Controller ve method'dan herhangi biri yoksa "sayfa bulunamadı" ekranına yönlendiriyoruz.
- URL doğru ve kullanıma uygun ise ilgili controller'a iletilir, method ile model sınıfından veriler alınır ve bu veriler view nesnesine gönderilerek ekrana basılır.
- Ana index dosyasından uygulama dosyaları güvenlik için ayrılmıştır.
- Uygulama dosyaları Model, View, Controller ve Core dosyaları ile düzenli hale getirilmiştir.
- Bu projede Twig kullanılarak view dosyaları oluşturulmuştur.
- globals.init dosyası oluşturularak projenin her yerinde kullanabileceğimiz dosya yolları tanımlanmıştır.

<img width="399" alt="image" src="https://github.com/user-attachments/assets/4b4058a1-7dc6-48f9-a74e-78607e32c45e">

<img width="837" alt="image" src="https://github.com/user-attachments/assets/ef4d92ff-f502-470a-bf5c-cadea1808cbf">

