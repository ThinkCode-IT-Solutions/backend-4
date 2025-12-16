<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navbar</title>
</head>
<body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        background-color: #333;
        padding: 1rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .nav-links {
        list-style: none;
        display: flex;
        gap: 2rem;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        transition: color 0.3s;
    }

    .nav-links a:hover {
        color: #4CAF50;
    }
</style>

<nav>
    <div class="logo">MyWebsite</div>
    <ul class="nav-links">
        <li><a href="{{ route("home") }}">Home</a></li>
        <li><a href="{{ route("about") }}">About</a></li>
        <li><a href="{{ route("services") }}">Services</a></li>
        <li><a href="{{ route("contact") }}">Contact</a></li>
    </ul>
</nav>

<style>
    .banner {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 6rem 2rem;
        text-align: center;
        color: white;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .banner h1 {
        font-size: 3.5rem;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<section class="banner">
    <main>
        <h1>Contact</h1>
    </main>
</section>
</body>
</html>
