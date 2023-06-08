document.addEventListener('DOMContentLoaded', function() {
    const cells = document.querySelectorAll('.cell');
    const status = document.querySelector('.status');
    const resetButton = document.querySelector('#reset');

    let currentPlayer = 'X';
    let gameStatus = 'In progress';

    const winningCombinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Rows
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columns
        [0, 4, 8], [2, 4, 6] // Diagonals
    ];

    let moves = ['', '', '', '', '', '', '', '', ''];

    // Add click event listeners to each cell
    cells.forEach((cell, index) => {
        cell.addEventListener('click', () => {
            if (cell.innerHTML === '' && gameStatus === 'In progress') {
                cell.innerHTML = currentPlayer;
                moves[index] = currentPlayer;

                if (checkWin(currentPlayer)) {
                    gameStatus = 'Game over';
                    status.innerHTML = `Player ${currentPlayer} wins!`;
                } else if (checkTie()) {
                    gameStatus = 'Game over';
                    status.innerHTML = 'It\'s a tie!';
                } else {
                    currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
                    status.innerHTML = `Player ${currentPlayer}'s Turn`;
                }
            }
        });
    });

    // Add click event listener to the reset button
    resetButton.addEventListener('click', () => {
        // Clear the game board
        cells.forEach(cell => {
            cell.innerHTML = '';
        });

        // Reset game status and current player
        gameStatus = 'In progress';
        currentPlayer = 'X';
        status.innerHTML = `Player ${currentPlayer}'s Turn`;

        // Reset moves array
        moves = ['', '', '', '', '', '', '', '', ''];
    });

    function checkWin(player) {
        return winningCombinations.some(combination => {
            return combination.every(index => moves[index] === player);
        });
    }

    function checkTie() {
        return moves.every(move => move !== '');
    }
});
