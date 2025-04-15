<!-- resources/views/admin/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Admin</title>
</head>
<body>
    <h2>Registrasi Admin</h2>
    <form action="{{ route('admin.register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Admin" required><br>
        <input type="email" name="email" placeholder="Email Admin" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
 