# 🎰 Laravel Slot Admin Panel

Админ-панель для управления слотами, реализованная на **Laravel 12** с использованием **Blade**, **SQLite**, **SCSS**, **Vite**, **TailwindCSS** и **JavaScript**.

## 🚀 Технологии

- **Backend:** Laravel 12 (PHP 8.4+)
- **Frontend:** Vite, TailwindCSS, SCSS, JavaScript
- **View Engine:** Blade
- **Database:** SQLite
- **Package Manager:** Composer, NPM
- **UI-библиотеки:** Swiper.js, TailwindCSS

---

## 📦 Установка

> ⚠️ Требования: PHP 8.2+, Composer, Node.js 18+, NPM

### 🧰 1. Клонируй репозиторий

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
🔧 2. Установи зависимости
bash
Copy code
composer install
npm install
⚙️ 3. Настрой окружение
bash
Copy code
cp .env.example .env
touch database/database.sqlite
php artisan key:generate
php artisan migrate
💻 4. Запусти проект
bash
Copy code
npm run dev
php artisan serve
После запуска проект будет доступен по адресу:
👉 http://127.0.0.1:8000
