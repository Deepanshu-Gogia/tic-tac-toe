<!DOCTYPE html>
<html>
<head>
    <title>Tic Tac Toe</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include your custom CSS styles -->
    <link href="{{ asset('css/tic-tac-toe1.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-item-end">
                <a class="btn btn-dark" href="{{ url('new-game') }}">Go to Js Game</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="game">
                    <div class="board row">
                        <div class="cell col-4" data-position="0"></div>
                        <div class="cell col-4" data-position="1"></div>
                        <div class="cell col-4" data-position="2"></div>
                        <div class="cell col-4" data-position="3"></div>
                        <div class="cell col-4" data-position="4"></div>
                        <div class="cell col-4" data-position="5"></div>
                        <div class="cell col-4" data-position="6"></div>
                        <div class="cell col-4" data-position="7"></div>
                        <div class="cell col-4" data-position="8"></div>
                    </div>
                    <div class="status mt-3">Player X's Turn</div>
                    <button id="reset" class="btn btn-dark mt-3">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include your JavaScript -->
    <script src="{{ asset('js/tic-tac-toe1.js') }}"></script>
</body>
</html>
