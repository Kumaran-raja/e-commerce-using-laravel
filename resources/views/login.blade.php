<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">
<div class="w-full max-w-sm bg-red-100 p-8 rounded-2xl shadow-lg">
    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Sign In</h2>

    <form action="#" method="POST" class="space-y-5">
        <!-- Email Input -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
            <input type="email" id="email" name="email" required
                   class="w-full p-3 mt-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 border-gray-300">
        </div>

        <!-- Password Input -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" required
                   class="w-full p-3 mt-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 border-gray-300">
        </div>

        <!-- Remember Me and Forgot Password -->
        <div class="flex items-center justify-between">
            <label class="flex items-center">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span class="ml-2 text-sm text-gray-600">Remember Me</span>
            </label>
            <a href="#" class="text-sm text-yellow-500 hover:underline">Forgot Password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit"
                class="w-full bg-yellow-500 text-white p-3 rounded-lg hover:bg-yellow-700 transition">Sign In</button>

        <!-- Divider and Register Link -->
        <p class="text-center text-sm text-gray-600 mt-4">Don't have an account?
            <a href="#" class="text-yellow-500 hover:underline">Sign Up</a>
        </p>
    </form>
</div>
</body>
</html>



