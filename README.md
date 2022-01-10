# Proje Kurulumu

Projeyi indirmek için terminale aşağıdaki komutu yazın

```bash
git clone https://github.com/ozgurozalp/todoApp.git
```

Clone işlemi tamamlandıktan sonra ise bu komutu yazın

```bash
cd todoApp
```

ardından aşağıdaki komut yardımıyla projemizin bağımlılıklarını yükleyelim ve bir key ataması yapalım

```bash
composer install && php artisan key:generate
```

SQLite kullandığım için direkt seedler ile migrate işlemi yeterli olacaktır.

```bash
php artisan migrate --seed
```

Şimdi tek yapılması gereken development ortamımızı ayağa kaldırmak. Bunun için de aşağıdaki komutu çalıştırmanız yeterli

```bash
php artisan serve
```

### Herşey tamam. Şimdi http://localhost:8000 adresine girmeniz yeterli.


## Author

* **Özgür ÖZALP** - [Özgür ÖZALP](https://github.com/ozgurozalp)
