# Laravel E-commerce Project

![screenshot_homepage](docs/screenshot_homepage.png)

This is an e-commerce project built with the TALL stack.

It is a **concept** project.

It shows common used concepts used in the development of web applications, such as:

 - Full Text Search implementation 
 - Multiple context routing
 - Converting monolith into small Livewire/Blade Components (aka The Modern Monolith)
 - Human Readable Database seeder based on a public open API
 - Different Sorting options

#### Skills showcased
- [x] Creation of views in a laravel project
- [x] Navigation between top-level categories and subcategories
- [x] Implementation of clean looking and user-friendly interface
- [x] View each product's details
- [x] Search product by search bar
- [x] Pagination for multiple records listings
- [x] Multiple sorting implemented in a clean manner
- [ ] How to implement an ecommerce app ready for production

> **_NOTE:_**  This project is not aimming to be production ready, it's aim is to showcase the dev's ability to implement the above features.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.1
- Composer (for PHP dependencies)
- Node.js and npm (for frontend assets compilation) 
  
  OR
- Docker (if you prefer to use Laravel Sail for local development, like I do)

## Installation

To set up the project, follow these steps:

### Using Composer and npm

1. Clone the repository:

   ```bash
   git clone https://github.com/luismgsantos/ecommerce-app.git
   ```

2. Navigate to the project directory:

   ```bash
   cd ecommerce-app
   ```

3. Install PHP dependencies using Composer:

   ```bash
   composer install
   ```

4. Install JavaScript dependencies using npm:

   ```bash
   npm install && npm run dev
   ```

5. Copy the `.env.example` file and rename it to `.env`. You can use the following command:

   ```bash
   cp .env.example .env
   ```

6. Generate the application key:

   ```bash
   php artisan key:generate
   ```

7. Run the database migrations:

   ```bash
   php artisan migrate
   ```

8. Seed the database with sample data:

   ```bash
   php artisan db:seed
   ```
   - If you want to use more Human Readable data and not Lorem Ipsum you can run: 
   ```bash
   php artisan db:seed HumanReadableDatabaseSeeder
   ```


9. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

10. You can now access the application at `http://localhost:8000`.

### Using Laravel Sail (Docker)

1. Clone the repository:

   ```bash
   git clone https://github.com/luismgsantos/ecommerce-app.git
   ```

2. Navigate to the project directory:

   ```bash
   cd ecommerce-app
   ```

3. Copy the `.env.example` file and rename it to `.env`. You can use the following command:

   ```bash
   cp .env.example .env
   ```

4. Install composer dependencies with standalone container:
    ```bash
   docker run --rm \
      -u "$(id -u):$(id -g)" \
      -v $(pwd):/var/www/html \
      -w /var/www/html \
      laravelsail/php81-composer:latest \
      composer install --ignore-platform-reqs
    ```

5. Start the Laravel Sail containers:

   ```bash
   ./vendor/bin/sail up -d
   ```

6. Install NPM dependencies and generate the application key:

   ```bash
   ./vendor/bin/sail npm i && ./vendor/bin/sail npm run build
   ./vendor/bin/sail artisan key:generate
   ```

7. Run the database migrations:

   ```bash
   ./vendor/bin/sail artisan migrate
   ```
   
   - You can do this and the next step with:
   ```bash
   ./vendor/bin/sail artisan migrate:fresh --seed --seeder HumanReadableDatabaseSeeder
   ```

8. Seed the database with sample data:

   ```bash
   ./vendor/bin/sail artisan db:seed
   ```
   
   - (Recommended) Seed the database with Human Readable data:
    ```bash
   ./vendor/bin/sail artisan db:seed HumanReadableDatabaseSeeder
   ```
9. You can now access the application at `http://localhost`.

## Usage

- Visit the homepage to browse the products and categories.
- Navigate to the individual product pages for more details.
- Use the search bar to find specific products.
