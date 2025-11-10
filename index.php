<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://kit.fontawesome.com/8196c78746.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="./src/image/logo.png">
	<title>CAVE CAFE</title>
	<style>
		.backdrop-blur-fallback {
			background: rgba(11, 7, 6, 0.45);
		}

		/* Dark mode styles */
		body.dark-mode {
			background: linear-gradient(to bottom right, #4A332C, #8B6A4A);
		}

		.logo {
			filter: drop-shadow(0 0 25px #D7A86E);
		}

		body.dark-mode .text-dark-mode {
			color: #e8dcc4 !important;
		}

		body.dark-mode header a,
		body.dark-mode header button {
			color: #e8dcc4 !important;
		}

		body.dark-mode .log-btn {
			color: #e8dcc4 !important;
		}

		body.dark-mode h1 {
			color: #f5e6d3 !important;
		}

		body.dark-mode p {
			color: #d4c4a8 !important;
		}

		body.dark-mode .order-btn {
			background-color: #D7A86E !important;
			color: #2B1A12 !important;
		}

		body.dark-mode .menu-btn {
			color: #e8dcc4 !important;
		}

		/* Smooth transition */
		body {
			transition: background 0.6s ease;
		}

		body * {
			transition: color 0.3s ease;
		}
	</style>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#F8E9D2] to-[#D7B894] text-[#4B2E19] antialiased">

	<!-- Header / Nav -->
	<header class="absolute inset-x-0 top-0 z-50">
		<nav class="flex items-center justify-between p-6 lg:px-8">

			<!-- Logo -->
			<div class="flex lg:flex-1 items-center ">
				<a href="#" class="p-1.5 inline-flex items-center gap-3 ml-20">
					<!-- BAT CAVE LOGO -->
					<img class="h-20 ml-40 w-20" src="./src/image/logo.png" alt="BAT CAVE CAFE LOGO">
					<span class="hidden sm:inline-block font-semibold"></span>
				</a>
			</div>

			<!-- Mobile hamburger -->
			<div class="flex lg:hidden">
				<button id="mobile-open" aria-controls="mobile-drawer" aria-expanded="false"
					class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-[#D7A86E]/40"
					aria-label="Open menu">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-6 w-6">
						<path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
				</button>
			</div>

			<!-- Desktop nav -->
			<div class="hidden lg:flex lg:gap-x-12">
				<a href="#" class="text-md font-bold hover:text-[#6B4F33]">HOME</a>
				<a href="#" class="text-md font-bold hover:text-[#6B4F33]">MENU</a>
				<a href="#" class="text-md font-bold hover:text-[#6B4F33]">BOOKING</a>
			</div>

			<!-- Login & Dark Mode -->
			<div class="hidden lg:flex lg:flex-1 lg:justify-end items-center gap-4">
				<a href="#"
					class="log-btn mr-4 rounded-full shadow-2xl px-3 py-3 text-md font-semibold transition-colors">
					<i class="fa-solid fa-cart-shopping fa-xl"></i>
				</a>
				<button id="darkModeBtn" class="mr-20 p-3 rounded-full hover:bg-black/10 transition-colors"
					aria-label="Toggle dark mode">
					<i class="fa-solid fa-moon fa-xl"></i>
				</button>
			</div>
		</nav>
	</header>

	<!-- Page Hero -->
	<main>
		<div class="relative isolate px-6 pt-14 lg:px-8">
			<div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
				<div class="text-center">
					<h1 class="text-5xl font-semibold tracking-tight text-[#3B2F2F] sm:text-7xl">
						Sip, Relax & Enjoy the Aroma
					</h1>
					<p class="mt-6 text-lg font-medium text-[#5C4632] sm:text-xl">
						A cozy sanctuary for coffee lovers — crafted brews and pastries made with love.
					</p>
					<div class="mt-10 flex items-center justify-center gap-x-6">
						<a href="#"
							class="order-btn rounded-2xl bg-[#8B6A4A] px-5 py-3 text-sm font-semibold text-[#cdc6b2] shadow-md focus:outline-none focus:ring-2 focus:ring-[#D7A86E]/30">
							Order Now
						</a>
						<a href="#"
							class="menu-btn text-sm shadow-2xl font-semibold hover:text-[#6B4F33] rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#D7A86E]/30">
							View Menu →
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- Mobile Drawer -->
	<div id="drawer-backdrop"
		class="fixed inset-0 z-40 hidden backdrop-blur-sm backdrop-brightness-75 transition-opacity duration-300"
		aria-hidden="true"></div>

	<aside id="mobile-drawer"
		class="fixed inset-y-0 right-0 z-50 w-full max-w-xs transform translate-x-full transition-transform duration-350 ease-out"
		role="dialog" aria-modal="true" aria-labelledby="drawer-title" aria-hidden="true">
		<div class="h-full flex flex-col bg-gradient-to-b from-[#D7A86E] to-[#8B6A4A] text-[#2B1A12] shadow-xl">

			<!-- Drawer header -->
			<div class="flex items-center justify-between px-4 py-4">
				<div class="flex items-center gap-3">
					<svg fill="#000000" class="w-8 h-8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M20,9H2a1,1,0,0,0-1,1v4a9,9,0,0,0,17.941,1H20a3,3,0,0,0,0-6ZM10,21a7.008,7.008,0,0,1-7-7V11H17v3A7.008,7.008,0,0,1,10,21Zm9-8V11c.306.069,2-.366,2,1C21,13.322,19.254,12.943,19,13ZM3.293,6.293l1.25-1.25a2.42,2.42,0,0,1-.6-1.543,2.049,2.049,0,0,1,.6-1.457l.75-.75A1,1,0,0,1,6.707,2.707l-.75.75A2.42,2.42,0,0,1,6.561,5a2.049,2.049,0,0,1-.6,1.457l-1.25,1.25A1,1,0,0,1,3.293,6.293Zm5,0,1.25-1.25a2.42,2.42,0,0,1-.6-1.543,2.049,2.049,0,0,1,.6-1.457l.75-.75a1,1,0,0,1,1.414,1.414l-.75.75A2.42,2.42,0,0,1,11.561,5a2.049,2.049,0,0,1-.6,1.457l-1.25,1.25A1,1,0,0,1,8.293,6.293Zm5,0,1.25-1.25a2.42,2.42,0,0,1-.6-1.543,2.049,2.049,0,0,1,.6-1.457l.75-.75a1,1,0,0,1,1.414,1.414l-.75.75A2.42,2.42,0,0,1,16.561,5a2.049,2.049,0,0,1-.6,1.457l-1.25,1.25a1,1,0,0,1-1.414-1.414Z">
						</path>
					</svg>
					<span class="font-semibold">CAVE CAFE</span>
				</div>
				<button id="mobile-close"
					class="rounded-md p-2.5 text-[#2B1A12] focus:outline-none focus:ring-2 focus:ring-[#FAF3E0]/30"
					aria-label="Close menu">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-6 w-6">
						<path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
			</div>

			<!-- Drawer content -->
			<nav class="mt-4 flex-1 overflow-y-auto px-4 py-2">
				<ul class="space-y-2">
					<li><a href="#"
							class="block rounded-lg px-4 py-3 text-base font-semibold text-[#3B2F2F] hover:bg-white/10">HOME</a>
					</li>
					<li><a href="#"
							class="block rounded-lg px-4 py-3 text-base font-semibold text-[#3B2F2F] hover:bg-white/10">MENU</a>
					</li>
					<li><a href="#"
							class="block rounded-lg px-4 py-3 text-base font-semibold text-[#3B2F2F] hover:bg-white/10">BOOKING</a>
					</li>
					<li class="flex items-center justify-between rounded-lg px-4 py-3">
						<span class="text-base font-semibold text-[#3B2F2F]">Dark Mode</span>
						<button id="darkModeBtnMobile"
							class="rounded-full p-2 py-5 font-semibold bg-[#2B1A12] text-[#FAF3E0] hover:bg-[#1a1008] flex items-center justify-center transition-colors"
							aria-label="Toggle dark mode">
							<i class="fa-solid fa-moon fa-lg"></i>
						</button>
					</li>
				</ul>
				<div class="mt-6 border-t border-white/20 pt-6">
					<a href="#"
						class="block rounded-md px-4 py-3 text-center font-semibold bg-[#3B2F2F] text-[#FAF3E0] hover:bg-[#2A221C]">Order
						Now</a>
					<a href="#" class="mt-3 block text-center font-medium text-[#3B2F2F] hover:text-[#2A221C]">Log in</a>
				</div>
			</nav>

			<!-- Footer small -->
			<div class="px-4 py-4 text-sm text-[#3B2F2F]">
				<p class="opacity-90">Open daily · 7:00 AM — 9:00 PM</p>
			</div>
		</div>
	</aside>




	<div class="best-seller-section bg-[#F9F5F0]">
		<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
			<div class="flex flex-col items-start gap-6 sm:flex-row sm:items-end sm:justify-between">
				<div>
					<p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#BB8A52]">Signature Picks</p>
					<h2 class="mt-3 text-3xl font-semibold text-[#2B1A12] sm:text-4xl">Best Sellers Crafted Daily</h2>
					<p class="mt-3 max-w-xl text-base text-[#6F4E37]">
						Indulge in customer favorites hand-selected by our baristas. Each sip and bite is curated to transform ordinary moments into quiet rituals.
					</p>
				</div>
				<a href="#" class="inline-flex items-center gap-2 rounded-full border border-[#D7A86E]/60 bg-white px-5 py-2.5 text-sm font-medium text-[#3E2C23] shadow-[0_10px_30px_rgba(215,168,110,0.15)] transition hover:-translate-y-0.5 hover:border-[#C9964C] hover:text-[#2B1A12]">
					<span>View Full Menu</span>
					<svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
						<path d="M5 12h14M13 6l6 6-6 6"></path>
					</svg>
				</a>
			</div>

			<div class="mt-14 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

				<!-- Product 1 -->
				<a href="#" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow-[0_20px_40px_-25px_rgba(43,26,18,0.35)] ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-20px_rgba(43,26,18,0.45)] hover:ring-[#C9964C]/30">
					<div class="relative overflow-hidden">
						<img src="https://images.unsplash.com/photo-1617196032810-4b1f6f936b79?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=560" alt="Ceramic coffee mug filled with latte" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
						<span class="absolute left-5 top-5 inline-flex items-center gap-1 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-[#5A3E36] shadow-sm">
							Signature
						</span>
					</div>
					<div class="flex flex-1 flex-col p-6">
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold text-[#2B1A12]">The Bat Brew</h3>
								<p class="mt-1 text-sm text-[#6F4E37]">Hand-thrown ceramic with insulated glaze to hold warmth longer.</p>
							</div>
							<span class="rounded-full bg-[#FAF3E0] px-3 py-1 text-sm font-semibold text-[#3E2C23]">PHP120</span>
						</div>
						<div class="mt-4 flex gap-2">
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">S - PHP100</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">M - PHP120</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">L - PHP140</button>
						</div>
						<div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
							<span class="flex items-center gap-1 text-[#C9964C]">
								★ 4.9
							</span>
							<span>Heat Retention • Limited Run</span>
						</div>
						<button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
							Add to Cart
							<i class="fa-solid fa-cart-plus"></i>
						</button>
					</div>
				</a>

				<!-- Product 2 -->
				<a href="#" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow-[0_20px_40px_-25px_rgba(43,26,18,0.35)] ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-20px_rgba(43,26,18,0.45)] hover:ring-[#C9964C]/30">
					<div class="relative overflow-hidden">
						<img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=560" alt="Latte coffee with latte art" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
						<span class="absolute right-5 top-5 inline-flex items-center gap-1 rounded-full bg-[#2B1A12]/90 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-[#FAF3E0] shadow-sm">
							New Roast
						</span>
					</div>
					<div class="flex flex-1 flex-col p-6">
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold text-[#2B1A12]">Midnight Mocha</h3>
								<p class="mt-1 text-sm text-[#6F4E37]">Single-origin shot folded with Madagascar vanilla and oat microfoam.</p>
							</div>
							<span class="rounded-full bg-[#FAF3E0] px-3 py-1 text-sm font-semibold text-[#3E2C23]">PHP135</span>
						</div>
						<div class="mt-4 flex gap-2">
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Hot - PHP135</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Iced - PHP145</button>
						</div>
						<div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
							<span class="flex items-center gap-1 text-[#C9964C]">
								★ 4.8
							</span>
							<span>Oat Milk • Balanced Sweetness</span>
						</div>
						<button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
							Add to Cart
							<i class="fa-solid fa-cart-plus"></i>
						</button>
					</div>
				</a>

				<!-- Product 3 -->
				<a href="#" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow-[0_20px_40px_-25px_rgba(43,26,18,0.35)] ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-20px_rgba(43,26,18,0.45)] hover:ring-[#C9964C]/30">
					<div class="relative overflow-hidden">
						<img src="https://images.unsplash.com/photo-1601050695275-c2a6e59a6f95?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=560" alt="Cappuccino in cup" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
					</div>
					<div class="flex flex-1 flex-col p-6">
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold text-[#2B1A12]">Velvet Cappuccino</h3>
								<p class="mt-1 text-sm text-[#6F4E37]">Rich espresso layered with creamy steamed milk foam.</p>
							</div>
							<span class="rounded-full bg-[#FAF3E0] px-3 py-1 text-sm font-semibold text-[#3E2C23]">PHP125</span>
						</div>
						<div class="mt-4 flex gap-2">
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">S - PHP115</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">M - PHP125</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">L - PHP135</button>
						</div>
						<div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
							<span class="flex items-center gap-1 text-[#C9964C]">★ 4.7</span>
							<span>Classic Foam • Smooth Finish</span>
						</div>
						<button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
							Add to Cart
							<i class="fa-solid fa-cart-plus"></i>
						</button>
					</div>
				</a>

				<!-- Product 4 -->
				<a href="#" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow-[0_20px_40px_-25px_rgba(43,26,18,0.35)] ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-20px_rgba(43,26,18,0.45)] hover:ring-[#C9964C]/30">
					<div class="relative overflow-hidden">
						<img src="https://images.unsplash.com/photo-1603052875657-7be26c39b2db?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=560" alt="Iced Coffee with ice cubes" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
					</div>
					<div class="flex flex-1 flex-col p-6">
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold text-[#2B1A12]">Frosted Latte</h3>
								<p class="mt-1 text-sm text-[#6F4E37]">Cold brew espresso blended with creamy milk and crushed ice.</p>
							</div>
							<span class="rounded-full bg-[#FAF3E0] px-3 py-1 text-sm font-semibold text-[#3E2C23]">PHP150</span>
						</div>
						<div class="mt-4 flex gap-2">
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Iced - PHP150</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Frappé - PHP165</button>
						</div>
						<div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
							<span class="flex items-center gap-1 text-[#C9964C]">★ 4.6</span>
							<span>Refreshing • Smooth Cold Brew</span>
						</div>
						<button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
							Add to Cart
							<i class="fa-solid fa-cart-plus"></i>
						</button>
					</div>
				</a>

				<!-- Product 5 -->
				<a href="#" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow-[0_20px_40px_-25px_rgba(43,26,18,0.35)] ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-20px_rgba(43,26,18,0.45)] hover:ring-[#C9964C]/30">
					<div class="relative overflow-hidden">
						<img src="https://images.unsplash.com/photo-1622736327741-d3cf5f87f5f0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=560" alt="Chocolate dessert in cup" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
					</div>
					<div class="flex flex-1 flex-col p-6">
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold text-[#2B1A12]">Choco Delight</h3>
								<p class="mt-1 text-sm text-[#6F4E37]">Rich chocolate mousse topped with cocoa powder and whipped cream.</p>
							</div>
							<span class="rounded-full bg-[#FAF3E0] px-3 py-1 text-sm font-semibold text-[#3E2C23]">PHP140</span>
						</div>
						<div class="mt-4 flex gap-2">
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Small - PHP120</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Regular - PHP140</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Large - PHP160</button>
						</div>
						<div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
							<span class="flex items-center gap-1 text-[#C9964C]">★ 4.9</span>
							<span>Sweet • Decadent Treat</span>
						</div>
						<button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
							Add to Cart
							<i class="fa-solid fa-cart-plus"></i>
						</button>
					</div>
				</a>

				<!-- Product 6 -->
				<a href="#" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow-[0_20px_40px_-25px_rgba(43,26,18,0.35)] ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-20px_rgba(43,26,18,0.45)] hover:ring-[#C9964C]/30">
					<div class="relative overflow-hidden">
						<img src="https://images.unsplash.com/photo-1583324113626-70df0f4deaab?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=560" alt="Espresso shot in cup" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
					</div>
					<div class="flex flex-1 flex-col p-6">
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold text-[#2B1A12]">Classic Espresso</h3>
								<p class="mt-1 text-sm text-[#6F4E37]">Pure, robust espresso with a crema that melts in your mouth.</p>
							</div>
							<span class="rounded-full bg-[#FAF3E0] px-3 py-1 text-sm font-semibold text-[#3E2C23]">PHP95</span>
						</div>
						<div class="mt-4 flex gap-2">
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Single - PHP95</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Double - PHP130</button>
						</div>
						<div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
							<span class="flex items-center gap-1 text-[#C9964C]">★ 4.8</span>
							<span>Strong • Full Aroma</span>
						</div>
						<button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
							Add to Cart
							<i class="fa-solid fa-cart-plus"></i>
						</button>
					</div>
				</a>

				<!-- Product 7 -->
				<a href="#" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow-[0_20px_40px_-25px_rgba(43,26,18,0.35)] ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-20px_rgba(43,26,18,0.45)] hover:ring-[#C9964C]/30">
					<div class="relative overflow-hidden">
						<img src="https://images.unsplash.com/photo-1612197551982-9b0ee663a3d8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=560" alt="Pastry on plate" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
					</div>
					<div class="flex flex-1 flex-col p-6">
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold text-[#2B1A12]">Almond Croissant</h3>
								<p class="mt-1 text-sm text-[#6F4E37]">Buttery croissant filled with almond cream and topped with sliced almonds.</p>
							</div>
							<span class="rounded-full bg-[#FAF3E0] px-3 py-1 text-sm font-semibold text-[#3E2C23]">PHP85</span>
						</div>
						<div class="mt-4 flex gap-2">
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Single - PHP85</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Box of 6 - PHP480</button>
						</div>
						<div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
							<span class="flex items-center gap-1 text-[#C9964C]">★ 4.9</span>
							<span>Freshly Baked • Almond Filling</span>
						</div>
						<button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
							Add to Cart
							<i class="fa-solid fa-cart-plus"></i>
						</button>
					</div>
				</a>

				<!-- Product 8 -->
				<a href="#" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow-[0_20px_40px_-25px_rgba(43,26,18,0.35)] ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-20px_rgba(43,26,18,0.45)] hover:ring-[#C9964C]/30">
					<div class="relative overflow-hidden">
						<img src="https://images.unsplash.com/photo-1621609769421-1b9c8e0f798f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=560" alt="Matcha drink with foam" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
					</div>
					<div class="flex flex-1 flex-col p-6">
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold text-[#2B1A12]">Green Matcha Latte</h3>
								<p class="mt-1 text-sm text-[#6F4E37]">Ceremonial grade matcha whisked with creamy milk and subtle sweetener.</p>
							</div>
							<span class="rounded-full bg-[#FAF3E0] px-3 py-1 text-sm font-semibold text-[#3E2C23]">PHP140</span>
						</div>
						<div class="mt-4 flex gap-2">
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Hot - PHP140</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Iced - PHP150</button>
							<button class="px-3 py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Large - PHP160</button>
						</div>
						<div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
							<span class="flex items-center gap-1 text-[#C9964C]">★ 4.8</span>
							<span>Earthy Flavor • Antioxidant Boost</span>
						</div>
						<button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
							Add to Cart
							<i class="fa-solid fa-cart-plus"></i>
						</button>
					</div>
				</a>

			</div>
		</div>
	</div>


	<!-- Professional Footer Section -->
	<footer class="bg-[#FDFBF7] border-t border-[#D7A86E]/20">
		<div class="mx-auto max-w-7xl px-6 py-16 sm:py-20 lg:px-8">
			<!-- Main Footer Content -->
			<div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
				<!-- Brand Section -->
				<div class="md:col-span-1">
					<div class="flex items-center gap-3 mb-6">
						<img class="h-20  w-20" src="./src/image/logo.png" alt="BAT CAVE CAFE LOGO">
						<span class="font-semibold text-[#3B2F2F]">CAVE CAFE</span>
					</div>
					<p class="text-sm text-[#5A3E36] leading-relaxed">
						Crafted coffee & cozy moments. Your sanctuary for exceptional
						brews and warm connections.
					</p>
				</div>

				<!-- Quick Links -->
				<div>
					<h3 class="font-semibold text-[#3B2F2F] mb-4">Quick Links</h3>
					<ul class="space-y-3 text-sm">
						<li>
							<a href="#" class="text-[#5A3E36] hover:text-[#D7A86E]">Home</a>
						</li>
						<li>
							<a href="#" class="text-[#5A3E36] hover:text-[#D7A86E]">Menu</a>
						</li>
						<li>
							<a href="#" class="text-[#5A3E36] hover:text-[#D7A86E]">Booking</a>
						</li>
						<li>
							<a href="#" class="text-[#5A3E36] hover:text-[#D7A86E]">Order Online</a>
						</li>
					</ul>
				</div>

				<!-- Information -->
				<div>
					<h3 class="font-semibold text-[#3B2F2F] mb-4">Information</h3>
					<ul class="space-y-3 text-sm">
						<li>
							<a href="#" class="text-[#5A3E36] hover:text-[#D7A86E]">About Us</a>
						</li>
						<li>
							<a href="#" class="text-[#5A3E36] hover:text-[#D7A86E]">Careers</a>
						</li>
						<li>
							<a href="#" class="text-[#5A3E36] hover:text-[#D7A86E]">Contact</a>
						</li>
						<li>
							<a href="#" class="text-[#5A3E36] hover:text-[#D7A86E]">Privacy Policy</a>
						</li>
					</ul>
				</div>

				<!-- Contact -->
				<div>
					<h3 class="font-semibold text-[#3B2F2F] mb-4">Contact & Hours</h3>
					<p class="text-sm text-[#5A3E36] mb-3">
						📍 123 Coffee Lane, Brew City
					</p>
					<p class="text-sm text-[#5A3E36] mb-3">📞 (555) 123-4567</p>
					<p class="text-sm text-[#5A3E36]">⏰ Daily: 7:00 AM - 9:00 PM</p>
				</div>
			</div>

			<!-- Footer Divider -->
			<div class="footer-divider h-px mb-8"></div>

			<!-- Bottom Section -->
			<div
				class="flex flex-col md:flex-row md:items-center md:justify-between">
				<p class="text-sm text-[#5A3E36] mb-6 md:mb-0">
					© 2025 Cave Cafe. All rights reserved.
				</p>

				<!-- Social Links -->
				<div class="flex gap-6">
					<a
						href="#"
						class="text-[#5A3E36] hover:text-[#D7A86E] transition-colors"
						aria-label="Facebook">
						<i class="fa-brands fa-facebook fa-lg"></i>
					</a>
					<a
						href="#"
						class="text-[#5A3E36] hover:text-[#D7A86E] transition-colors"
						aria-label="Instagram">
						<i class="fa-brands fa-instagram fa-lg"></i>
					</a>
					<a
						href="#"
						class="text-[#5A3E36] hover:text-[#D7A86E] transition-colors"
						aria-label="Twitter">
						<i class="fa-brands fa-twitter fa-lg"></i>
					</a>
					<a
						href="#"
						class="text-[#5A3E36] hover:text-[#D7A86E] transition-colors"
						aria-label="LinkedIn">
						<i class="fa-brands fa-linkedin fa-lg"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>

	<script src="./src/js/index.js"></script>
</body>

</html>