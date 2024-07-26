<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Investigación</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <section class="content">
                <h2>Investigación Formativa</h2>
                <p>Consumo de una API con implementación en Laravel.<br>
                    Realizado por: Luis Shagñay
                </p>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </footer>
    </div>
    
    <script src="scripts.js"></script>
</body>
</html>
