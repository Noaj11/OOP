bash:


php -S localhost:8000


composer create-project laravel/laravel laravel-app

php artisan migrate
php artisan serve



# 1. Create migration
php artisan make:migration create_todos_table

# 2. Run migrations
php artisan migrate

# 3. Create model
php artisan make:model Todo -m

# 4. Create controller
php artisan make:controller TodoController --resource

# 5. Start server
php artisan serve




## 📦 Quick Start

### 1. Clone & Install
```bash
git clone <your-repo>
cd laravel-todo-app
composer install
cp .env.example .env
php artisan key:generate











# MySQL
php artisan migrate

# Or SQLite (no config needed)
touch database/database.sqlite
php artisan migrate











php artisan serve





CREATE DATABASE laravel_todo;




DB_DATABASE=laravel_todo
DB_USERNAME=root
DB_PASSWORD=




# Install dependencies
composer install
npm install

# Migrations
php artisan migrate

# Fresh install
php artisan migrate:fresh --seed

# Run tests
php artisan test

# Clear cache
php artisan optimize:clear














php artisan test
./vendor/bin/phpunit







GET    /api/todos
POST   /api/todos
PUT    /api/todos/{id}
DELETE /api/todos/{id}




## 📁 **Additional Folder Files**

### **bootstrap/app.php** (Auto-generated)





# Clear and regenerate cache files
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Or clear everything
php artisan optimize:clear











# 1. Make sure bootstrap/cache folder exists
mkdir -p bootstrap/cache

# 2. Set proper permissions
chmod -R 775 bootstrap/cache
chmod -R 775 storage

# 3. Generate cache files
php artisan config:cache
php artisan route:cache






# Essential command - links storage to public
php artisan storage:link


# Development (Hot reload)
npm run dev

# Production build
npm run build

# Watch for changes
npm run dev -- --watch









# 1. Create public folder structure
mkdir -p public/{css,js}

# 2. Create essential files (use code above)
touch public/index.php public/.htaccess public/robots.txt

# 3. Install NPM dependencies & build assets
npm install
npm run build

# 4. Create storage symlink
php artisan storage:link

# 5. Set permissions
chmod -R 755 public
chmod -R 775 storage








# Install Sanctum for API auth
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate

# Test endpoints
curl http://localhost:8000/api/v1/todos
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{"email":"test@example.com","password":"password"}'







# 1. Create API controller folder
mkdir -p app/Http/Controllers/Api

# 2. Create controllers (use code above)
# 3. Publish Sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

# 4. Run migrations
php artisan migrate

# 5. Test API
php artisan serve




