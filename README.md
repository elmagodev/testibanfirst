# IBANFIRST  TEST

## PREREQUISITE

- [x] [IBANFIRST API Documentaion](https://api.ibanfirst.com/APIDocumentation/) 
- [x] php 7.2+
- [x] composer
- [x] [symfony cli](https://symfony.com/download)
- [x] having [cacert.pem](https://curl.haxx.se/ca/cacert.pem) in php.ini to use `curlHttpClient`

## Configure

create `.env.local` file at root project dir and put
```
IBAN_FIRST_API_USERNAME=''
IBAN_FIRST_API_PASSWORD=''
```

run :
```bash
composer install
symfony server:ca:install
symfony server:start -d
```

goto 

- `/wallets` to see list of wallets
- `/financial-movements` to see list of financial movements


