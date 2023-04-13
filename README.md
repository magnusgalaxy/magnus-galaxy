# Magnus Galaxy

Magnus Galaxy uses Laravel, a web application framework with expressive, elegant syntax. The website also features a blog section where insights and tips on web development and design are shared.

## Features

- Customized web design and development using Laravel, Livewire and Tailwind CSS
- Responsive and mobile-friendly website
- SEO-optimized and fast-loading website
- Blog section with recent posts and categories
- Contact form with validation and email notification
- Admin panel with Filament PHP

## Installation

To install Magnus Galaxy website on your local machine, you need to have the following requirements:

- A web server (such as Apache or Nginx)
- PHP 8 or higher
- MySQL 5.7 or higher
- Composer
- Git

Follow these steps to install Magnus Galaxy website:

1. Fork the repository from GitHub: https://github.com/magnusgalaxy/magnus-galaxy
2. Clone the forked repository to your local machine: `git clone https://github.com/your_username/magnus-galaxy.git`
3. Navigate to the project directory: `cd magnus-galaxy`
4. Install the dependencies: `composer install`
5. Copy the .env.example file to .env and edit the database credentials: `cp .env.example .env`
6. Generate the application key: `php artisan key:generate`
7. Run the database migrations: `php artisan migrate`
8. Run the database seeder: `php artisan db:seed`
9. Start the local development server: `php artisan serve`

## Usage

To use Magnus Galaxy website, you need to have a web browser (such as Chrome or Firefox) and an internet connection. You can access the website by visiting http://127.0.0.1:8000.

To access the admin panel, you need to have an admin account. You can create one by running `php artisan tinker` and then `App\Models\User::factory()->create(['is_admin' => true]);`. The admin panel can be accessed by visiting http://127.0.0.1:8000/admin.

## License

Magnus Galaxy website is licensed under the MIT License. See the LICENSE file for more details.
