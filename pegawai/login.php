<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#ecfdf5",
                            "100": "#d1fae5",
                            "200": "#a7f3d0",
                            "300": "#6ee7b7",
                            "400": "#34d399",
                            "500": "#10b981",
                            "600": "#059669",
                            "700": "#047857",
                            "800": "#065f46",
                            "900": "#064e3b"
                        },
                    },
                    fontFamily: {
                        'body': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'Arial', 'sans-serif'],
                        'sans': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'Arial', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <title>Sign In</title>
</head>
<body class="bg-gradient-to-r from-green-100 to-green-300 dark:bg-gradient-to-r dark:from-gray-900 dark:to-gray-700">
    <section class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 transform transition hover:scale-105 hover:shadow-2xl duration-300">
            <div class="p-8 space-y-8">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white text-center">Sign in to your account <span class="text-green-600">KANTORDRP</span></h1>
                
                <!-- Animated Divider -->
                <div class="border-b border-gray-300 dark:border-gray-700 mb-6">
                    <span class="flex justify-center items-center -mt-4">
                        <span class="bg-white px-2 dark:bg-gray-800 text-sm text-gray-500 dark:text-gray-400">Let's Begin</span>
                    </span>
                </div>

                <form class="space-y-6" action="proses_login.php" method="post">
                    <!-- NIK -->
                    <div class="relative">
                        <label for="NIK" class="block text-sm font-medium text-gray-700 dark:text-gray-300">NIK</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <input type="text" name="NIK" id="NIK" class="block w-full mt-2 p-3 pl-10 bg-gray-100 border border-gray-300 rounded-lg text-gray-900 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Enter your NIK" required>
                    </div>

                    <!-- Password -->
                    <div class="relative">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12a4 4 0 100-8 4 4 0 000 8zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <input type="password" name="password" id="password" class="block w-full mt-2 p-3 pl-10 bg-gray-100 border border-gray-300 rounded-lg text-gray-900 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="••••••••" required>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" type="checkbox" class="w-4 h-4 text-primary-600 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600">
                            <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-primary-600 hover:underline dark:text-primary-400">Forgot password?</a>
                    </div>

                    <button type="submit" class="w-full py-3 text-white bg-gradient-to-r from-green-500 to-teal-600 rounded-lg hover:from-teal-600 hover:to-green-500 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800 transition ease-in-out duration-150">Sign in</button>
                    <p class="text-sm text-center text-gray-500 dark:text-gray-400">Don’t have an account? <a href="register.php" class="text-primary-600 hover:underline dark:text-primary-400">Sign up</a></p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
