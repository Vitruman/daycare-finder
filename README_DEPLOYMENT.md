# Восстановлено - Сайт реабилитационных центров

## Описание проекта

Полнофункциональный сайт для поиска и информации о реабилитационных центрах США, построенный на Laravel 12 с админкой Filament.

## Функциональность

### Публичная часть
- Главная страница с поиском и информацией
- Каталог реабилитационных центров по штатам
- Блог с полезными статьями о реабилитации
- Детальные страницы учреждений с контактами
- Адаптивный дизайн для всех устройств

### Админка (Filament)
- Управление статьями блога
- Управление информацией о центрах
- Управление штатами
- Управление настройками сайта (телефон, email)

## Установка и запуск

### Требования
- PHP 8.2+
- Composer
- Node.js и npm
- SQLite (или другая БД)

### Шаги установки

1. **Клонирование проекта**
```bash
git clone <repository-url>
cd rehab
```

2. **Установка зависимостей**
```bash
composer install
npm install
```

3. **Настройка окружения**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Настройка базы данных**
```bash
# Создание БД (если используете SQLite)
touch database/database.sqlite

# Запуск миграций
php artisan migrate

# Запуск сидеров для наполнения контентом
php artisan db:seed
```

5. **Сборка frontend**
```bash
npm run build
```

6. **Запуск сервера**
```bash
php artisan serve
```

## Структура контента

### Статьи блога (8 статей)
1. Как выбрать реабилитационный центр: полное руководство
2. Этапы выздоровления: что ожидать после реабилитации
3. Семейная терапия в реабилитации: почему это важно
4. Мифы о реабилитации: что не соответствует действительности
5. Программы 12 шагов: основа современной реабилитации
6. Питание в период реабилитации: как правильно восстановить организм
7. Как поддерживать трезвость после реабилитации
8. Роль семьи в процессе выздоровления

### Реабилитационные центры (12 центров)
- California: Sunrise Recovery Center, Pacific Wellness Institute, Golden State Wellness
- Florida: Sunshine State Recovery, Florida Keys Recovery
- Colorado: Mountain View Treatment Center, Rocky Mountain Rehab
- New York: Empire State Rehabilitation, Big Apple Recovery Center
- Texas: Lone Star Recovery Center, Texas Hill Country Treatment
- Arizona: Desert Oasis Treatment, Arizona Desert Healing

### Штаты (6 штатов)
- California, Florida, Colorado, New York, Texas, Arizona

## Админка

Доступ к админке: `/admin`
- Логин: admin@admin.com
- Пароль: password

### Возможности админки
- Редактирование всех настроек сайта в одном месте
- Управление контентом блога
- Добавление/редактирование центров реабилитации
- Управление информацией о штатах

## Развертывание на сервере

### Production настройки

1. **Настройка production окружения**
```bash
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
```

2. **Оптимизация**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

3. **Настройка веб-сервера**
   - Настройте виртуальный хост для Laravel
   - Убедитесь, что `public/` директория является корневой
   - Настройте SSL сертификат

4. **Права доступа**
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

5. **Крон задачи** (опционально)
```bash
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

## API endpoints

- `GET /` - Главная страница
- `GET /blog` - Список статей блога
- `GET /blog/{slug}` - Детальная статья
- `GET /facilities` - Список всех центров
- `GET /facilities/{slug}` - Детальная информация о центре
- `GET /states` - Список штатов
- `GET /states/{slug}` - Центры в конкретном штате
- `GET /admin` - Админка

## Технические особенности

- **Laravel 12** - современный фреймворк
- **Filament** - мощная админка
- **Tailwind CSS** - утилитарный CSS фреймворк
- **Alpine.js** - легковесный JavaScript фреймворк
- **SQLite** - файловая база данных (можно заменить на MySQL/PostgreSQL)

## Поддержка

Сайт полностью функционален и готов к развертыванию на любом хостинге, поддерживающем PHP 8.2+.

## Лицензия

Все права защищены © 2025 Восстановлено





