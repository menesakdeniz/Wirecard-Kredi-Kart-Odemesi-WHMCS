# Wirecard-Kredi-Karti-Odemesi-WHMCS - WHMCS Wirecard kredi kartı ödeme Modülü
WHMCS için, wirecard kredi kartı ile ödeme modülü.

# Wirecard-Mobil-Odeme-WHMCS
[WHMCS için, wirecard mobil ödeme modülüne buradan ulaşabilirsiniz](https://github.com/menesakdeniz/Wirecard-Mobil-Odeme-WHMCS)

## Kurulum
Dosyaları, modules/gateways/callback klasörüne atınız.
WHMCS üzerinden Ödeme Ayarları -> Ödeme Yöntemleri kısmından ödeme yöntemini aktif edip, ayarlarına gelerek ilgili kutucukları doldurunuz.


## Callback(Otomatik fatura onaylama)
Callback dosyasının çalışması için, wirecard callback urlsini;

```
siteismi.com/modules/gateways/callback/threepaycc.php
```

olarak, wirecard a mail yoluyla iletmeyi unutmayınız.


### S.S.S
#### Fatura ödenmedi gözüküyor?
Callback adresinizin wirecard tarafına iletildiğine ve onlardan yapıldı cevap aldığınızdan emin olunuz. Eğer eminseniz, lütfen sitenizin wirecard ip adresleri tarafından ziyaret edilebildiğinden emin olun(eğer var ise firewall kurallarınızı gözden geçiriniz).
