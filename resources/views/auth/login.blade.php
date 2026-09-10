<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 16px;
        }

        .card {
            background: #ffffff;
            width: 100%;
            max-width: 400px;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 8px;
            color: #111827;
        }

        p.subtitle {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 6px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #4b5563;
        }

        button {
            width: 100%;
            background-color: #2563eb;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        .errors {
            background-color: #fee2e2;
            color: #b91c1c;
            padding: 12px;
            border-radius: 6px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .footer {
            margin-top: 24px;
            text-align: center;
            font-size: 14px;
            color: #6b7280;
        }

        .footer a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Login</h2>
        <p class="subtitle">Please enter your credentials to sign in.</p>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="errors">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        {{-- Fortify Login Form --}}
        <form method="POST" action="/login">
            @csrf

            <div class="form-group">
                <label for="email">Email address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required placeholder="••••••••">
            </div>

            <div class="remember-me">
                <input id="remember" type="checkbox" name="remember">
                <label for="remember" style="margin-bottom: 0; cursor: pointer;">Remember me</label>
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="footer">
            Don't have an account? <a href="/register">Register</a>
        </div>
    </div>

</body>
</html>
