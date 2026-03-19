# ITEC Web

The official website for ITE Counsel (ITEC), built with Laravel. This platform serves as the primary web presence for ITEC, featuring service information, content management, and user interaction capabilities. Includes Docker and Dockerfile for containerized deployment.

## Tech Stack

- **PHP** ^7.3 | ^8.0
- **Laravel** ^8.12
- **Tailwind CSS** for styling
- **Webpack Mix** for asset compilation
- **Docker** with Dockerfile and Docker Compose
- **PHPUnit** for automated testing

## Features

- Informational pages and service descriptions
- Content management system
- Contact and inquiry forms
- SEO optimization with robots.txt
- Responsive design with Tailwind CSS
- Containerized deployment with Docker

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL or compatible database

### Installation

```bash
# Clone the repository
git clone https://github.com/mhmalvi/itec-web.git
cd itec-web

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Run database migrations
php artisan migrate

# Compile assets
npm run dev
```

### Development

```bash
# Start the development server
php artisan serve

# Watch for asset changes
npm run watch
```

### Docker

```bash
docker-compose up -d
```

### Testing

```bash
php artisan test
```

## Project Structure

```
itec-web/
├── app/                  # Application logic
├── bootstrap/            # Framework bootstrap files
├── config/               # Configuration files
├── database/             # Migrations, factories, and seeders
├── public/               # Public assets and entry point
├── resources/            # Views, raw assets, and language files
├── routes/               # Route definitions
├── storage/              # Logs, cache, and compiled files
├── tests/                # Automated tests
├── Dockerfile            # Docker image configuration
├── docker-compose.yml    # Docker Compose configuration
└── webpack.mix.js        # Asset compilation configuration
```

## Related

- [ITE Counsel Web](https://github.com/mhmalvi/itecounsel-web) — Updated iteration
- [ITEC RPL Portal](https://github.com/mhmalvi/itec-rpl-portal) — RPL management portal

## License

MIT