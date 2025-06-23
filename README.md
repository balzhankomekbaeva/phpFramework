# ⚙️ PHP Mini MVC Framework
A lightweight custom PHP MVC framework built from scratch — ideal for learning the inner workings of routing, request/response handling, and controller logic without relying on heavy frameworks.

# 🌟 Overview
This project demonstrates a simple implementation of an MVC (Model-View-Controller) architecture using core PHP, PSR-4 autoloading, and a basic routing system powered by FastRoute. It is perfect for educational purposes or as a starting point for building a more complex PHP application.

# 🧩 Features
✅ Clean MVC structure (Controllers, Kernel, Routes, etc.)

✅ FastRoute-based routing system with parameter support

✅ Custom Request and Response classes

✅ PSR-4 Autoloading via Composer

✅ Easy to extend and understand

# 🚀 Getting Started
📦 Prerequisites
PHP 8.0 or higher

Composer

🔧 Installation
Clone the repository
```
git clone https://github.com/yourusername/php-mini-framework.git
cd php-mini-framework
```
Install dependencies
```
composer install
```
Run the development server
```
php -S localhost:8000 -t public
```
Visit in browser
```
http://localhost:8000/public → Homepage

http://localhost:8000/public/posts/1 → Show Post with ID 1
```
🧭 Routing
All routes are defined in routes/web.php using a minimal route helper:
```
use App\Controllers\HomeController;
use App\Controllers\PostControllers;
use Somecode\Framework\Routing\Route;

return [
    Route::get('/public', [HomeController::class, 'index']),
    Route::get('/public/posts/{id:\d+}', [PostControllers::class, 'show']),
];
```
🧪 Example Controller
```
namespace App\Controllers;

use Somecode\Framework\Http\Response;

class HomeController
{
    public function index(): Response
    {
        return new Response('<h1>Hello World!</h1>');
    }
}
```
# 💡 Educational Purpose
This framework is intentionally minimal to help you:

Understand how frameworks like Laravel or Symfony work under the hood

Learn the flow of HTTP request → routing → controller → response

Practice organizing scalable PHP applications


# 🙌 Acknowledgements
nikic/FastRoute — for routing

Composer — for autoloading

Inspired by Laravel architecture (very simplified)
