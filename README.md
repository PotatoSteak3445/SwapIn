# SwapIn 🛍️
A full-stack second-hand marketplace web application where users can buy 
and sell used goods with ease. Built with Laravel and MySQL, featuring 
real-time chat, product listings with image uploads, and integrated 
payment processing via Midtrans.

## 📸 Preview
<img width="621" height="946" alt="Screenshot from 2026-06-29 16-04-37" src="https://github.com/user-attachments/assets/89876642-a15f-4cac-8912-a1e9bcf34bc4" />

> ⚠️ **Work in Progress** — This project is still actively being developed. 
> Features may be incomplete or subject to change.

## ✨ Features
- 🔐 User authentication (Sign Up / Sign In)
- 📦 Product listings with image uploads and category browsing
- 💬 Real-time chat between buyers and sellers
- 💳 Payment integration via Midtrans
- 🔍 Product search and category filtering
- 🏷️ Discount and deal display per product
- 📱 Responsive UI across devices

## 🛠️ Tech Stack
| Layer | Technology |
|-------|-----------|
| Backend | Laravel (PHP) |
| Database | MySQL |
| Frontend | Blade, HTML, CSS, JavaScript |
| Payment | Midtrans |
| Design | Figma |

## 🚀 Installation
# Clone the repo
git clone https://github.com/PotatoSteak3445/SwapIn.git
cd SwapIn

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure your .env with DB and Midtrans credentials
# Then run migrations
php artisan migrate

# Start the server
php artisan serve
