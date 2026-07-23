# Установка

## Требования
- Веб-сервер (Apache / Nginx) с PHP 7.4+
- Доступ к серверу по SSH (для настройки)

## Быстрая установка

1. Скопируйте файлы на сервер:
```bash
scp control_LLO.html save_data.php get_server_time.php user@server:/var/www/html/lekarstva/
```
2. Настройте права:

```bash
sudo chown -R www-data:www-data /var/www/html/lekarstva/
sudo chmod -R 755 /var/www/html/lekarstva/
```
3. Откройте в браузере:

http://server/lekarstva/control_LLO.html

Настройка логирования
Файл save_log.php автоматически создаст actions.log при первом сохранении.

Резервное копирование
Через админ-панель: «Создать копию» → загрузить JSON-файл.
