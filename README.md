# 🎰 Laravel Slot Admin Panel

Админ-панель для управления слотами, реализованная на Laravel 12 с использованием Blade, SQLite, SCSS, Vite, TailwindCSS и JavaScript.

## 🚀 Технологии

- Backend: Laravel 12 (PHP 8.4+)
- Frontend: Vite, SCSS, JavaScript
- View Engine: Blade
- Database: SQLite
- Package Manager: Composer, NPM
- UI-библиотеки: Swiper.js

## 📦 Установка

⚠️ Требования: PHP 8.2+, Composer, Node.js 18+, NPM

1. Клонируй репозиторий  
`git clone https://github.com/your-username/your-repo-name.git`  
`cd your-repo-name`

2. Установи зависимости  
`composer install`  
`npm install`

3. Настрой переменные окружения  
**Windows (CMD):**  
`copy .env.example .env`  
`type nul > database\database.sqlite`  

**Linux/macOS/Git Bash/WSL:**  
`cp .env.example .env`  
`mkdir -p database`  
`touch database/database.sqlite`

4. Генерация ключа и миграции  
`php artisan key:generate`  
`php artisan migrate`

5. Запуск проекта  
`php artisan serve`  
`npm run dev`

После запуска проект будет доступен по адресу:  
👉 http://127.0.0.1:8000

## 🛠 Продакшен-сборка

Для создания продакшен-сборки:  
`npm run build`

## 🧱 Структура проекта

- `app/Http/Controllers/SlotController.php` — логика CRUD для слотов  
- `app/Http/Requests/StoreSlotRequest.php` — валидация при создании слота  
- `app/View/Components/Sidebar.php` — компонент сайдбара  
- `config/sidebar.php` — конфигурация меню  
- `resources/views/home.blade.php` — отображение всех слотов  
- `resources/views/components/sidebar.blade.php` — Blade-шаблон сайдбара  
- `database/database.sqlite` — локальная база данных
