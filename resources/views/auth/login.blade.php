<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        <div class="flex flex-col items-center mb-6">
            <div class="h-12 w-12 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold">
                LP
            </div>
            <h1 class="mt-4 text-2xl font-semibold text-gray-900">Sign in to your account</h1>
            <p class="mt-1 text-sm text-gray-500">Enter your credentials to access your dashboard</p>
        </div>

        <form class="space-y-5">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" autocomplete="email"
                             class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                             placeholder="you@example.com">
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot?</a>
                </div>
                <input id="password" name="password" type="password" autocomplete="current-password"
                             class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                             placeholder="••••••••">
            </div>

            <div class="flex items-center">
                <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
            </div>

            <div>
                <button type="submit"
                                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Sign in
                </button>
            </div>

            <div class="pt-4">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="bg-white px-2 text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-2 gap-3">
                    <button type="button" class="inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm hover:bg-gray-50">
                        <span class="sr-only">Sign in with Google</span>
                        Google
                    </button>
                    <button type="button" class="inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm hover:bg-gray-50">
                        <span class="sr-only">Sign in with GitHub</span>
                        GitHub
                    </button>
                </div>
            </div>

            <p class="mt-6 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="#" class="text-indigo-600 hover:underline">Sign up</a>
            </p>
        </form>
    </div>
</body>
</html>