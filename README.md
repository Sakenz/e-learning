# E-Learning

## Description
Briefly describe your project here, outlining its purpose and core features.

## Installation Guide
Software required for native setup:
- PHP 8.2
- MySQL 8+
- Apache
- Composer
- phpMyAdmin

### 1. Clone the Repository
Clone the repository from GitHub to your local machine and navigate into the project directory:
```bash
git clone https://github.com/Sakenz/e-learning.git
cd e-learning
```

### 2. Install Dependencies
- **Backend dependencies**:
```bash
composer install
```

- **Frontend dependencies**:
```bash
npm install
```

### 3. Configure the Environment Variables
Create a copy of the `.env` file from the example provided:
```bash
cp .env.example .env
```
Edit the `.env` file to configure your database, cache settings, and other environment-specific variables as required.

### 4. Generate the Application Key
Ensure that the application has a secure key:
```bash
php artisan key:generate
```

### 5. Run Database Migrations
Run the following command to migrate the database schema:
```bash
php artisan migrate
```

## Running the Project

### Development Environment
Start the Laravel development server using:
```bash
php artisan serve
```
The application will be accessible at `http://localhost:8000`.

To compile the frontend assets and enable live reload, use:
```bash
npm run dev
```

### Production Environment
1. Compile the frontend assets for a production build:
```bash
npm run build
```

2. Serve the application using a production server such as **Nginx** or **Apache**, or use:
```bash
php artisan serve --env=production
```

3. Optimize the configuration, routes, and views:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```
