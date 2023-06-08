<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Tic-Tac-Toe

This is a Tic-Tac-Toe application built with Laravel. It allows players to play the classic game of Tic-Tac-Toe against each other.

## Installation

1. Clone the repository:
git clone REPOSITORY_URL

2. Install dependencies:
composer install
npm install


3. Set up the database:
- Create a new database for the application.
- Configure the database connection in the `.env` file.

4. Run migrations:
php artisan migrate


5. Start the development server:
php artisan serve


6. Open the browser and navigate to `http://localhost:8000` to access the Tic-Tac-Toe app.

## Usage

- The Tic-Tac-Toe game can be played by two players.
- Players take turns to click on the cells of the game board to place their respective symbols (X or O).
- The first player to get three of their symbols in a row (horizontally, vertically, or diagonally) wins the game.
- If all cells are filled and no player has won, the game ends in a tie.
- Click the "Reset" button to start a new game.

## Testing

To run the end-to-end test cases, make sure you have Node.js and npm installed on your machine. Then, run the following command:

npm run zest

->This will execute the end-to-end test cases using npm zest

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
