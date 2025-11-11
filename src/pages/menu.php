<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Café - Signature Picks</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="../image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
        }

        .tab-btn,
        .category-btn {
            transition: all 0.3s ease;
        }

        .tab-btn.active,
        .category-btn.active {
            border-color: #C9964C;
            color: #2B1A12;
            font-weight: 600;
        }

        .tab-btn.inactive,
        .category-btn.inactive {
            border-color: #D7A86E;
            color: #6F4E37;
        }

        .price-option {
            transition: all 0.2s ease;
        }

        .price-option.hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-[#F9F5F0]">

    <div class="best-seller-section">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

            <!-- Header -->
            <div class="flex flex-col items-start gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div class="mt-10">
                    <h2 class="mt-3 text-3xl font-semibold text-[#2B1A12] sm:text-4xl">
                        Explore Our Menu
                    </h2>
                    <p class="mt-3 max-w-xl text-base text-[#6F4E37]">
                        Discover our full lineup of signature drinks, artisanal pastries, and café classics —
                        crafted to satisfy every craving, from bold espresso to sweet indulgence.
                    </p>
                </div>
            </div>

            <!-- Category Tabs -->
            <div class="mb-6 flex gap-3 mt-10">
                <button class="category-btn active rounded-full border-2 px-6 py-2.5 font-medium transition" data-category="coffee">Coffee</button>
                <button class="category-btn inactive rounded-full border-2 px-6 py-2.5 font-medium transition" data-category="pastries">Pastries</button>
                <button class="category-btn inactive rounded-full border-2 px-6 py-2.5 font-medium transition" data-category="snacks">Snacks</button>
                <button class="category-btn inactive rounded-full border-2 px-6 py-2.5 font-medium transition" data-category="tea">Tea</button>
            </div>

            <!-- Hot/Iced Tabs -->
            <div class="mb-8 flex gap-3">
                <button class="tab-btn active inline-flex items-center gap-2 rounded-full border-2 px-6 py-2.5 font-medium transition" data-tab="hot">
                    <i class="fas fa-fire text-[#C9964C]"></i> Hot Beverages
                </button>
                <button class="tab-btn inactive inline-flex items-center gap-2 rounded-full border-2 px-6 py-2.5 font-medium transition" data-tab="iced">
                    <i class="fas fa-snowflake text-[#6F4E37]"></i> Iced Beverages
                </button>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                <!-- Coffee Product 1 -->
                <a href="#" data-category="coffee" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:ring-[#C9964C]/30">
                    <div class="relative overflow-hidden">
                        <img src="../image/batbrew.png" alt="The Bat Brew" class="aspect-4/5 w-full mt-9 object-cover transition duration-500 group-hover:scale-105">
                        <span class="absolute left-5 top-5 inline-flex items-center gap-1 rounded-full bg-[#2B1A12]/90 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-[#FAF3E0] shadow-sm">Signature</span>
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-lg font-semibold text-[#2B1A12]">The Bat Brew</h3>
                        <p class="mt-1 text-sm text-[#6F4E37]">A bold dark roast crafted from single-origin beans — smooth, rich, with deep notes of chocolate and caramel.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot S - ₱95</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced S - ₱105</button>
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot M - ₱115</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced M - ₱125</button>
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot L - ₱135</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced L - ₱145</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
                            <span class="flex items-center gap-1 text-[#C9964C]">★ 4.9</span> Rich Aroma • Smooth Finish
                        </div>
                        <button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
                            Add to Cart <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </a>

                <!-- Coffee Product 2 -->
                <a href="#" data-category="coffee" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:ring-[#C9964C]/30">
                    <div class="relative overflow-hidden">
                        <img src="../image/midnightmocha.png" alt="Midnight Mocha" class="aspect-4/5 mt-12 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-lg font-semibold text-[#2B1A12]">Midnight Mocha</h3>
                        <p class="mt-1 text-sm text-[#6F4E37]">Espresso and cocoa fusion, balanced with vanilla and creamy oat milk.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot S - ₱95</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced S - ₱105</button>
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot M - ₱115</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced M - ₱125</button>
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot L - ₱135</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced L - ₱145</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
                            <span class="flex items-center gap-1 text-[#C9964C]">★ 4.8</span> Velvety • Balanced Sweetness
                        </div>
                        <button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
                            Add to Cart <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </a>

                <!-- Pastry Product 3 -->
                <a href="#" data-category="pastries" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:ring-[#C9964C]/30">
                    <div class="relative overflow-hidden">
                        <img src="../image/redvelvet.jpg" alt="Red Velvet Muffin" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-lg font-semibold text-[#2B1A12]">Red Velvet Muffin</h3>
                        <p class="mt-1 text-sm text-[#6F4E37]">Soft red velvet muffin with creamy frosting center — café favorite.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">1pc - ₱65</button>
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">3pcs - ₱195</button>
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">5pcs - ₱325</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
                            <span class="flex items-center gap-1 text-[#C9964C]">★ 4.7</span> Soft Texture • Perfect Sweetness
                        </div>
                        <button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
                            Add to Cart <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </a>

                <!-- Snack Product 4 -->
                <a href="#" data-category="snacks" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:ring-[#C9964C]/30">
                    <div class="relative overflow-hidden">
                        <img src="../image/nachos.jpg" alt="Nachos Grande" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-lg font-semibold text-[#2B1A12]">Nachos Grande</h3>
                        <p class="mt-1 text-sm text-[#6F4E37]">Crispy tortilla chips topped with beef, cheese, jalapeños, and salsa — perfect for sharing.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Medium - ₱180</button>
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Large - ₱355</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
                            <span class="flex items-center gap-1 text-[#C9964C]">★ 4.6</span> Crunchy • Flavor-Packed
                        </div>
                        <button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
                            Add to Cart <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </a>

                <!-- Tea Product 5 -->
                <a href="#" data-category="tea" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:ring-[#C9964C]/30">
                    <div class="relative overflow-hidden">
                        <img src="../image/dirtmacha.png" alt="Dirty Matcha" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-lg font-semibold text-[#2B1A12]">Dirty Matcha</h3>
                        <p class="mt-1 text-sm text-[#6F4E37]">Earthy matcha fused with espresso, layered with creamy milk.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot S - ₱95</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced S - ₱105</button>
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot M - ₱115</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced M - ₱125</button>
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot L - ₱135</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced L - ₱145</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
                            <span class="flex items-center gap-1 text-[#C9964C]">★ 4.9</span> Balanced • Creamy Fusion
                        </div>
                        <button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
                            Add to Cart <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </a>

                <!-- PRODUCT 6 -->
                <a href="#" data-category="tea" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:ring-[#C9964C]/30">
                    <div class="relative overflow-hidden">
                        <img src="../image/caramelmacchiato.png" alt="Caramel Macchiato" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-semibold text-[#2B1A12]">Caramel Macchiato</h3>
                                <p class="mt-1 text-sm text-[#6F4E37]">Smooth espresso layered with steamed milk and rich caramel drizzle for a silky sweetness.</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot S - ₱95</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced S - ₱105</button>
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot M - ₱115</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced M - ₱125</button>
                            <button class="price-option hot-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Hot L - ₱135</button>
                            <button class="price-option iced-only px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2]">Iced L - ₱145</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
                            <span class="flex items-center gap-1 text-[#C9964C]">★ 4.8</span>
                            <span>Silky • Sweet Aroma</span>
                        </div>
                        <button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
                            Add to Cart
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </a>

                <!-- PRODUCT 7 -->

                <a href="#" data-category="pastries" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:ring-[#C9964C]/30">
                    <div class="relative overflow-hidden">
                        <img src="../image/bananaloaf.jpg" alt="Banana Walnut Loaf" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-semibold text-[#2B1A12]">Banana Walnut Loaf</h3>
                                <p class="mt-1 text-sm text-[#6F4E37]">Moist banana bread packed with crunchy walnuts — perfect with your favorite brew.</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">1pc - ₱90</button>
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">2pcs - ₱180</button>
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">3pcs - ₱270</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
                            <span class="flex items-center gap-1 text-[#C9964C]">★ 4.9</span>
                            <span>Moist • Nutty Aroma</span>
                        </div>
                        <button class="mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-[#2B1A12] px-5 py-2 text-sm font-medium text-[#FAF3E0] transition hover:bg-[#1F120B]">
                            Add to Cart
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </a>

                <!-- PRODUCT 8 -->

                <a href="#" data-category="snacks" class="group relative flex h-full flex-col overflow-hidden rounded-3xl bg-white/90 shadow ring-1 ring-[#D7A86E]/20 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:ring-[#C9964C]/30">
                    <div class="relative overflow-hidden">
                        <img src="../image/trufflefries.jpg" alt="Truffle Fries" class="aspect-4/5 w-full object-cover transition duration-500 group-hover:scale-105" />
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-semibold text-[#2B1A12]">Truffle Fries</h3>
                                <p class="mt-1 text-sm text-[#6F4E37]">Crispy golden fries tossed in aromatic truffle oil and parmesan for a savory indulgence.</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Medium - ₱165</button>
                            <button class="price-option px-2 py-1 sm:px-3 sm:py-1 text-xs font-medium bg-[#FAF3E0] rounded-full hover:bg-[#E2D6C2] transition">Large - ₱330</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-xs font-medium uppercase text-[#A37A58]">
                            <span class="flex items-center gap-1 text-[#C9964C]">★ 4.8</span>
                            <span>Crispy • Savory Aroma</span>
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

    <script src="../js/menu.js"></script>

</body>

</html>