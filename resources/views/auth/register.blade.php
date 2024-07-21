{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf



        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="contact" :value="__('Telephone')" />
            <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="addresse" :value="__('Quartier')" />
            <x-text-input id="addresse" class="block mt-1 w-full" type="text" name="addresse" :value="old('addresse')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('addresse')" class="mt-2" />
        </div>

        <div >
            <x-input-label for="ville" :value="__('Ville')" />
            <x-text-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="pays" :value="__('Pays')" />
            <x-text-input id="pays" class="block mt-1 w-full" type="text" name="pays" :value="old('pays')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('pays')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking - Multipurpose Online Booking Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')

		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})

	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

    <body>

        <!-- **************** MAIN CONTENT START **************** -->
            <main>

                <!-- =======================
                Main Content START -->
                    <section class="vh-xxl-100">
                        <div class="container h-100 d-flex px-0 px-sm-4">
                            <div class="row justify-content-center align-items-center m-auto">
                                <div class="col-12">
                                    <div class="bg-mode shadow rounded-3 overflow-hidden">
                                        <div class="row g-0">
                                            <!-- Vector Image -->
                                            <div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
                                                <div class="p-3 p-lg-5">
                                                    <img src="assets/images/element/signin.svg" alt="">
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr opacity-1 d-none d-lg-block"></div>
                                            </div>

                                            <!-- Information -->
                                            <div class="col-lg-6 order-1">
                                                <div class="p-4 p-sm-6">
                                                    <!-- Logo -->
                                                    <a href="index.html">
                                                        <img class="h-50px mb-4" src="assets/images/logo-icon.svg" alt="logo">
                                                    </a>
                                                    <!-- Title -->
                                                    <h1 class="mb-2 h3">Create new account</h1>
                                                    <p class="mb-0">Already a member?<a href="{{ route('login') }}"> Log in</a></p>

                                                    <!-- Form START -->

                                                    {{-- <form method="POST" class="mt-4 text-start" action="{{ route('register') }}">
                                                            @csrf --}}
                                                    <form method="POST" class="mt-4 text-start" action="{{ route('register') }}">
                                                                @csrf

                                                        <!-- Name -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Enter Name</label>
                                                            <input type="text" name="name" class="form-control">
                                                        </div>
                                                        <!-- Email -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Enter email id</label>
                                                            <input type="email" name="email" class="form-control">
                                                        </div>
                                                        <!-- Email -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Enter Phone Number</label>
                                                            <input type="text" name="contact" class="form-control">
                                                        </div>
                                                        <!-- Email -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Enter Town</label>
                                                            <input type="text" name="addresse" class="form-control">
                                                        </div>
                                                        <!-- Email -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Enter City</label>
                                                            <input type="text" name="ville" class="form-control">
                                                        </div>
                                                        <!-- Email -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Enter Country</label>
                                                            <input type="text" name="pays" class="form-control">
                                                        </div>
                                                        <!-- Password -->
                                                        <div class="mb-3 position-relative">
                                                            <label class="form-label">Enter password</label>
                                                            <input class="form-control fakepassword" type="password" name="password" id="psw-input">
                                                            <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                                                <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                            </span>
                                                        </div>
                                                        <!-- Confirm Password -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Confirm Password</label>
                                                            <input type="password" name="password_confirmation" class="form-control">
                                                        </div>
                                                        <!-- Remember me -->
                                                        <div class="mb-3">
                                                            <input type="checkbox" class="form-check-input" id="rememberCheck">
                                                            <label class="form-check-label" for="rememberCheck">Keep me signed in</label>
                                                        </div>
                                                        <!-- Button -->
                                                        <div><button type="submit" class="btn btn-primary w-100 mb-0">Sign up</button></div>

                                                        <!-- Divider -->
                                                        <div class="position-relative my-4">
                                                            <hr>
                                                            <p class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">Or sign in with</p>
                                                        </div>

                                                        <!-- Google and facebook button -->
                                                        <div class="vstack gap-3">
                                                            <a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with Google</a>
                                                            <a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Sign in with Facebook</a>
                                                        </div>

                                                        <!-- Copyright -->
                                                        <div class="text-primary-hover text-body mt-3 text-center"> Copyrights ©2024 Booking. Build by <a href="https://www.webestica.com/" class="text-body">Webestica</a>. </div>
                                                    </form>
                                                    <!-- Form END -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- =======================
                Main Content END -->

            </main>
        <!-- **************** MAIN CONTENT END **************** -->

        <!-- Back to top -->
         <div class="back-top"></div>

        <!-- Bootstrap JS -->
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <!-- ThemeFunctions -->
        <script src="assets/js/functions.js"></script>

    </body>
</html>
