# 3pay-Kredi-Karti-Odemesi-WHMCS
WHMCS için, 3pay kredi kartı ile ödeme modülü.

## Kurulum
Dosyaları, modules/gateways/callback klasörüne atınız.
WHMCS üzerinden Ödeme Ayarları -> Ödeme Yöntemleri kısmından ödeme yöntemini aktif edip, ayarlarına gelerek ilgili kutucukları doldurunuz.


## Callback(Otomatik fatura onaylama)
Callback dosyasının çalışması için, 3pay callback urlsini;

```
siteismi.com/modules/gateways/callback/threepaycc.php
```

olarak iletmeyi unutmayınız.
