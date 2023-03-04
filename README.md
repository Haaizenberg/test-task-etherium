<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About project

<b>Краткое описание сервиса</b>
Сервис отвечает за создание кошельков, получение балансов по ним, хранение приватных ключей и трансфер денег с созданных кошельков.

### **Создание кошелька**
Сервис должен уметь создавать кошельки в блокчейне (далее БЧ) Ethereum и в БД хранить публичный и приватный ключи.
<br>
POST /api/v1/wallets/

### **Получение списка кошельков**
Сервис должен уметь отдавать список кошельков в БД. В ответ также должен быть включен их баланс
<br>
GET /api/v1/wallets/

### **Перевод с одного кошелька в системе на другой кошелек в системе**
Сервис должен уметь совершать транзакции с одного кошелька системы на другой кошелек в нашей системе. Обратите внимание, что должны быть реализованы проверки на то, что переводить можно только между кошельками внутри системы и сумма перевода должна быть меньше чем баланс кошелька (плюс затраты на комиссию сети - газ)
<br>
POST /api/v1/transactions/

## License

MIT
