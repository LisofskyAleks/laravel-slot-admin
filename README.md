# 🎰 Laravel Slot Admin Panel

Админ-панель для управления слотами, реализованная на **Laravel 12** с использованием **Blade**, **SQLite**, **SCSS**, **Vite**, **TailwindCSS** и **JavaScript**.

---

## 🚀 Технологии

- **Backend:** Laravel 12 (PHP 8.4+)
- **Frontend:** Vite, TailwindCSS, SCSS, JavaScript
- **View Engine:** Blade
- **Database:** SQLite
- **Package Manager:** Composer, NPM
- **UI-библиотеки:** Swiper.js, TailwindCSS

---

## 📦 Установка

> ⚠️ Требования: **PHP 8.2+**, **Composer**, **Node.js 18+**, **NPM**

### 🧰 1. Клонируй репозиторий

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
🔧 2. Установи зависимости
✅ PHP-зависимости
bash
Copy
Edit
composer install
✅ Node-зависимости
bash
Copy
Edit
npm install
⚙️ 3. Настрой переменные окружения
✅ Windows CMD
cmd
Copy
Edit
copy .env.example .env
type nul > database\database.sqlite
✅ Linux / macOS / Git Bash / WSL
bash
Copy
Edit
cp .env.example .env
mkdir -p database
touch database/database.sqlite
🔑 4. Генерация ключа и миграции
bash
Copy
Edit
php artisan key:generate
php artisan migrate
💻 5. Запуск проекта
✅ Запуск Laravel-сервера
bash
Copy
Edit
php artisan serve
✅ Запуск Vite
bash
Copy
Edit
npm run dev
🔗 После запуска
Перейди в браузере по адресу:
👉 http://127.0.0.1:8000

🛠 Продакшен-сборка
Для продакшен-билда:

bash
Copy
Edit
npm run build
🧱 Структура проекта
app/Http/Controllers/SlotController.php — логика CRUD для слотов

app/Http/Requests/StoreSlotRequest.php — валидация при создании слота

app/View/Components/Sidebar.php — компонент сайдбара

config/sidebar.php — конфигурация меню

resources/views/home.blade.php — отображение всех слотов

resources/views/components/sidebar.blade.php — Blade-шаблон сайдбара

database/database.sqlite — локальная база данных


