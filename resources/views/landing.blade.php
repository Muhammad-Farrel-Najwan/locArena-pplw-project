@extends('master')

@section('isi')
    <main class="w-full pt-20 bg-surface">
        <div class="flex flex-col w-full">
            <!-- Dynamic Atmospheric Hero (Light Mode) -->
            <section class="relative w-full overflow-hidden bg-slate-50 py-space-xl border-b border-slate-200/70">
                <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden"><img
                        alt="Indoor Badminton Sports Hall Arena" class="w-full h-full object-cover object-center opacity-25"
                        src="https://lh3.googleusercontent.com/aida/AEtjO1V676bFaFzAox_5Y_4tRv1eGTTQ1L-LII0uE2i8qr5rEl4obu4199KG1uojVU6uph-nuQ_I_WcJieb9mt1NpKNM_AKoW7C3lsh6OLfpKhbuerznj7N03aZTrEV_A3s6zSqZAHR1cV8410Zgp-TeKoVRlB_CNb2LGHWfPd0rqEUQPB38s2Z5OqKz4IYeJfMDRjT3IBDWqPkW_Wjh0tP9RJAaLgUbXnadgHaO9sq6p7Rc2sxEf5JWhTigFbc" />
                    <div class="absolute inset-0 bg-linear-to-b from-white/95 via-white/80 to-slate-50"></div>
                </div>
                <!-- Ambient Light Glow Accents -->
                <div
                    class="absolute -top-32 left-1/4 w-96 h-96 bg-emerald-300/20 rounded-full blur-[120px] pointer-events-none">
                </div>
                <div
                    class="absolute top-1/2 -right-24 w-80 h-80 bg-teal-200/20 rounded-full blur-[100px] pointer-events-none">
                </div>
                <div class="relative w-full px-gutter pt-16 pb-space-2xl flex flex-col items-center z-10">
                    <!-- High-Performance Overline Tracker -->
                    <div
                        class="inline-flex items-center gap-space-sm bg-white border border-slate-200/90 px-space-md py-1 rounded-full shadow-sm mb-space-md">
                        <span class="flex h-2.5 w-2.5 relative">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-600"></span>
                        </span>
                        <span
                            class="font-label-sm text-[11px] text-emerald-700 uppercase font-bold tracking-widest">Real-time
                            Turnstile Pass Access</span>
                        <span class="text-slate-300 font-body-sm">|</span>
                        <span class="font-label-sm text-[12px] text-slate-700 font-semibold">1,420+ Slot Tersedia Hari
                            Ini</span>
                    </div>
                    <!-- Main Punchy Title -->
                    <div class="flex flex-col items-center mb-space-lg text-center">
                        <h1
                            class="font-display-hero text-4xl sm:text-5xl lg:text-[56px] text-slate-900 text-center max-w-4xl tracking-tight leading-[1.2] font-extrabold mb-space-md">
                            Sewa Lapangan <span
                                class="inline-flex items-center gap-2 px-3 sm:px-4 py-0.5 sm:py-1 rounded-full bg-amber-100/90 text-amber-900 border border-amber-300/70 shadow-sm mx-1 sm:mx-1.5 align-middle font-bold text-[0.72em] sm:text-[0.78em] tracking-normal"><span
                                    class="h-2.5 w-2.5 sm:h-3 sm:w-3 rounded-full bg-amber-500 shadow-sm inline-block shrink-0 animate-pulse"></span><span
                                    class="inline-block transition-all duration-300 transform"
                                    id="dynamic-sport-text">Badminton</span></span><br />
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 via-emerald-700 to-teal-700">Lebih
                                Cepat &amp; Praktis</span>
                        </h1>
                        <p class="font-body-lg text-slate-600 text-center max-w-2xl mb-space-md leading-relaxed">
                            Akses instan ribuan arena berstandar federasi dengan jadwal terintegrasi langsung,
                            pembayaran digital terproteksi, dan tiket QR check-in otomatis.
                        </p>
                    </div>
                    <!-- Integrated High-Performance Search Command Box -->
                    <div
                        class="w-full max-w-5xl bg-white border border-slate-200 rounded-2xl shadow-xl p-space-md flex flex-col gap-space-md">
                        <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-sm"
                            onsubmit="event.preventDefault();">
                            <!-- Lokasi Selector -->
                            <div
                                class="bg-slate-50 border border-slate-200/80 p-space-sm rounded-xl flex items-center gap-space-sm hover:border-slate-300 transition-colors">
                                <span
                                    class="material-symbols-outlined text-emerald-600 text-2xl shrink-0">location_on</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label
                                        class="font-label-sm text-[11px] text-slate-500 uppercase tracking-wider font-bold"
                                        for="location-select">Lokasi / Kota</label>
                                    <select
                                        class="bg-transparent font-label-md text-label-md text-slate-900 font-semibold focus:outline-none cursor-pointer"
                                        id="location-select">
                                        <option class="bg-white text-slate-900" value="all">Semua Jabodetabek</option>
                                        <option class="bg-white text-slate-900" value="jaksul">Jakarta Selatan</option>
                                        <option class="bg-white text-slate-900" value="jakbar">Jakarta Barat</option>
                                        <option class="bg-white text-slate-900" value="jakpus">Jakarta Pusat</option>
                                        <option class="bg-white text-slate-900" value="bekasi">Bekasi</option>
                                        <option class="bg-white text-slate-900" value="tangerang">Tangerang</option>
                                        <option class="bg-white text-slate-900" value="depok">Depok</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Jenis Olahraga -->
                            <div
                                class="bg-slate-50 border border-slate-200/80 p-space-sm rounded-xl flex items-center gap-space-sm hover:border-slate-300 transition-colors">
                                <span
                                    class="material-symbols-outlined text-emerald-600 text-2xl shrink-0">sports_soccer</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label
                                        class="font-label-sm text-[11px] text-slate-500 uppercase tracking-wider font-bold"
                                        for="sport-select">Jenis Olahraga</label>
                                    <select
                                        class="bg-transparent font-label-md text-label-md text-slate-900 font-semibold focus:outline-none cursor-pointer"
                                        id="sport-select">
                                        <option class="bg-white text-slate-900" value="all">Semua Cabang</option>
                                        <option class="bg-white text-slate-900" value="futsal">Futsal</option>
                                        <option class="bg-white text-slate-900" value="badminton">Badminton</option>
                                        <option class="bg-white text-slate-900" value="basketball">Basket</option>
                                        <option class="bg-white text-slate-900" value="tennis">Tenis</option>
                                        <option class="bg-white text-slate-900" value="minisoccer">Mini Soccer</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Tanggal Main -->
                            <div
                                class="bg-slate-50 border border-slate-200/80 p-space-sm rounded-xl flex items-center gap-space-sm hover:border-slate-300 transition-colors">
                                <span
                                    class="material-symbols-outlined text-emerald-600 text-2xl shrink-0">calendar_today</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label
                                        class="font-label-sm text-[11px] text-slate-500 uppercase tracking-wider font-bold"
                                        for="date-select">Tanggal Main</label>
                                    <input
                                        class="bg-transparent font-label-md text-label-md text-slate-900 font-semibold focus:outline-none cursor-pointer"
                                        id="date-select" type="date" value="2025-05-18" />
                                </div>
                            </div>
                            <!-- Execute Search Action Button -->
                            <button
                                class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-headline-sm text-headline-sm font-bold rounded-xl py-space-sm px-space-md flex items-center justify-center gap-space-sm transition-all shadow-md hover:shadow-lg active:scale-95"
                                type="button">
                                <span class="material-symbols-outlined text-xl">search</span>
                                <span class="">Cari Lapangan</span>
                            </button>
                        </form>
                        <!-- Live Quick Stats Strip -->
                        <div
                            class="flex flex-wrap items-center justify-between pt-space-xs text-slate-500 font-body-sm border-t border-slate-100">
                            <div class="flex flex-wrap items-center gap-x-space-md gap-y-1">
                                <span class="flex items-center gap-1 text-slate-700 font-label-sm text-label-sm"><span
                                        class="material-symbols-outlined text-sm text-emerald-600">bolt</span> Instant
                                    Confirmation</span>
                                <span class="flex items-center gap-1 text-slate-700 font-label-sm text-label-sm"><span
                                        class="material-symbols-outlined text-sm text-emerald-600">lock</span> 100%
                                    Secure Payment</span>
                                <span class="flex items-center gap-1 text-slate-700 font-label-sm text-label-sm"><span
                                        class="material-symbols-outlined text-sm text-emerald-600">autorenew</span> Free
                                    Reschedule Guard</span>
                            </div>
                            <div class="text-emerald-700 font-data-mono text-xs font-bold tracking-wider">TERVERIFIKASI
                                BADAN OLAHRAGA NASIONAL</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner QR Check-in -->
            <section class="w-full px-gutter py-space-sm bg-slate-50/50">
                <div
                    class="max-w-7xl mx-auto bg-linear-to-r from-emerald-50 via-white to-emerald-50/60 border border-emerald-200/80 rounded-2xl p-space-md shadow-sm flex flex-col sm:flex-row items-center justify-between gap-space-md">
                    <div class="flex items-center gap-space-md">
                        <div
                            class="h-12 w-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center shrink-0 shadow-sm">
                            <span class="material-symbols-outlined text-2xl">qr_code_scanner</span>
                        </div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-slate-900 font-bold">Pesan Online
                                Langsung Dapat QR Check-in Tanpa Antre!</div>
                            <p class="font-body-sm text-body-sm text-slate-600">Tunjukkan tiket digital dari smartphone
                                langsung ke turnstile pintu masuk arena atau petugas lapangan.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-space-sm shrink-0"><span
                            class="font-data-mono text-emerald-700 font-bold text-sm">#SmartAccess</span><button
                            class="bg-white hover:bg-slate-100 text-slate-800 border border-slate-300 px-space-md py-1.5 rounded-lg font-label-md text-label-md font-semibold transition-colors shadow-sm"
                            type="button">Pelajari Sistem Pass</button></div>
                </div>
            </section>

            <!-- Quick Search Bar -->
            <section class="w-full px-gutter py-space-md bg-white border-y border-slate-200/70">
                <div class="max-w-7xl mx-auto">
                    <div
                        class="relative flex items-center w-full shadow-sm rounded-xl overflow-hidden border border-slate-200 bg-white">
                        <span
                            class="material-symbols-outlined absolute left-space-md text-emerald-600 pointer-events-none text-2xl">search</span><input
                            class="w-full bg-white py-space-md pl-12 pr-28 rounded-xl text-slate-900 placeholder:text-slate-400 text-body-lg font-body-md border-0 focus:ring-2 focus:ring-emerald-500 transition-all"
                            placeholder="Cari arena, lapangan, atau klub olahraga..." type="text" />
                        <div class="absolute right-space-md flex items-center gap-space-xs"><kbd
                                class="hidden sm:inline-block bg-slate-100 text-slate-600 px-space-xs py-1 rounded text-label-sm font-data-mono border border-slate-200">⌘K</kbd><button
                                class="bg-emerald-600 hover:bg-emerald-700 text-white px-space-md py-1.5 rounded-lg font-label-md text-label-md font-bold transition-all shadow-sm active:scale-95"
                                type="button">Cari</button></div>
                    </div>
                </div>
            </section>
            <!-- Kategori Olahraga -->
            <section class="w-full px-gutter py-space-lg bg-slate-50/70">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-space-md">
                    <div class="flex flex-col">
                        <span class="font-label-sm text-emerald-700 uppercase tracking-widest font-bold">Pilih Cepat
                            Olahraga</span>
                        <span class="font-headline-sm text-headline-sm text-slate-900 font-bold">Kategori Favorit
                            Atlet</span>
                    </div>
                    <div class="flex items-center gap-space-sm overflow-x-auto w-full md:w-auto pb-space-xs"><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-emerald-600 text-white transition-all shadow-sm shrink-0"
                            type="button"><span class="material-symbols-outlined text-xl">category</span><span
                                class="font-label-md text-label-md font-bold">Semua</span></button>
                        <!-- Futsal -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-white hover:bg-slate-100 text-slate-700 border border-slate-200/90 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button">
                            <span class="material-symbols-outlined text-emerald-600 text-xl">sports_soccer</span>
                            <span class="font-label-md text-label-md font-semibold">Futsal</span>
                        </button>
                        <!-- Badminton -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-white hover:bg-slate-100 text-slate-700 border border-slate-200/90 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button"><span
                                class="material-symbols-outlined text-emerald-600 text-xl">sports_tennis</span><span
                                class="font-label-md text-label-md font-semibold">Badminton</span></button>
                        <!-- Basket -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-white hover:bg-slate-100 text-slate-700 border border-slate-200/90 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button">
                            <span class="material-symbols-outlined text-emerald-600 text-xl">sports_basketball</span>
                            <span class="font-label-md text-label-md font-semibold">Basket</span>
                        </button>
                        <!-- Tenis -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-white hover:bg-slate-100 text-slate-700 border border-slate-200/90 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button">
                            <span class="material-symbols-outlined text-emerald-600 text-xl">sports_baseball</span>
                            <span class="font-label-md text-label-md font-semibold">Tenis</span>
                        </button>
                        <!-- Mini Soccer -->
                        <button class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-white hover:bg-slate-100 text-slate-700 border border-slate-200/90 transition-all active:scale-95 shadow-sm
    e=" button">
                            <span class="material-symbols-outlined text-emerald-600 text-xl">stadium</span>
                            <span class="font-label-md text-label-md font-semibold">Mini Soccer</span>
                        </button>
                        <!-- Voli -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-white hover:bg-slate-100 text-slate-700 border border-slate-200/90 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button">
                            <span class="material-symbols-outlined text-emerald-600 text-xl">sports_volleyball</span>
                            <span class="font-label-md text-label-md font-semibold">Voli</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Jenis Lantai Lapangan -->
            <section class="w-full px-gutter py-space-md bg-white border-y border-slate-200/70">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-space-md">
                    <div class="flex flex-col"><span
                            class="font-label-sm text-emerald-700 uppercase tracking-widest font-bold">Pilih
                            Spesifikasi</span><span class="font-headline-sm text-headline-sm text-slate-900 font-bold">Jenis
                            Lantai
                            Lapangan</span></div>
                    <div class="flex items-center gap-space-sm overflow-x-auto w-full md:w-auto pb-space-xs"><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-emerald-600 text-white transition-all shadow-sm shrink-0"
                            type="button"><span class="material-symbols-outlined text-xl">select_all</span><span
                                class="font-label-md text-label-md font-bold">Semua Lantai</span></button><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 border border-slate-200 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button"><span
                                class="material-symbols-outlined text-emerald-600 text-xl">grid_on</span><span
                                class="font-label-md text-label-md font-semibold">Vinyl</span></button><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 border border-slate-200 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button"><span class="material-symbols-outlined text-emerald-600 text-xl">grass</span><span
                                class="font-label-md text-label-md font-semibold">Rumput Sintetis</span></button><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 border border-slate-200 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button"><span
                                class="material-symbols-outlined text-emerald-600 text-xl">texture</span><span
                                class="font-label-md text-label-md font-semibold">Parquet Kayu</span></button><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 border border-slate-200 transition-all active:scale-95 shadow-sm shrink-0"
                            type="button"><span
                                class="material-symbols-outlined text-emerald-600 text-xl">layers</span><span
                                class="font-label-md text-label-md font-semibold">Karpet Li-Ning</span></button></div>
                </div>
            </section>
            <!-- Interactive Filtering Bar & Catalog Controls -->
            <section class="w-full px-gutter pt-space-xl pb-space-md bg-slate-50">
                <div class="max-w-7xl mx-auto flex flex-col gap-space-md">
                    <!-- Filter Row Top -->
                    <div
                        class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md bg-white border border-slate-200 p-space-md rounded-2xl shadow-sm">
                        <div class="flex flex-col gap-space-xs w-full flex-1 max-w-xl">
                            <div class="flex items-center justify-between"><span
                                    class="font-label-sm text-slate-500 uppercase font-bold tracking-wide">Harga Max /
                                    Jam</span><span
                                    class="font-data-mono text-emerald-700 font-bold bg-emerald-50 border border-emerald-200 px-space-sm py-0.5 rounded-full"
                                    id="price-display">Rp 350.000</span></div><input
                                class="w-full accent-emerald-600 h-2 bg-slate-200 rounded-lg cursor-pointer" max="500000"
                                min="50000"
                                oninput="document.getElementById('price-display').innerText = 'Rp ' + Number(this.value).toLocaleString('id-ID')"
                                step="25000" type="range" value="350000" />
                            <div class="flex justify-between text-slate-400 font-label-sm text-[12px] font-semibold">
                                <span class="">50 rb</span><span class="">250 rb</span><span class="">500 rb</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-space-xs w-full lg:w-64"><label
                                class="font-label-sm text-slate-500 uppercase font-bold tracking-wide" for="sort-by">Urutkan
                                Lapangan</label>
                            <div class="relative"><select
                                    class="w-full bg-slate-50 border border-slate-200 py-2.5 px-space-sm pr-8 rounded-xl font-label-md text-label-md text-slate-900 font-semibold hover:border-slate-300 focus:outline-none cursor-pointer appearance-none shadow-sm transition-colors"
                                    id="sort-by">
                                    <option class="bg-white text-slate-900" value="popular">Terpopuler &amp; Rekomendasi
                                    </option>
                                    <option class="bg-white text-slate-900" value="price-low">Harga Terendah</option>
                                    <option class="bg-white text-slate-900" value="rating-high">Rating Tertinggi (4.8+)
                                    </option>
                                    <option class="bg-white text-slate-900" value="distance">Jarak Paling Dekat</option>
                                </select><span
                                    class="material-symbols-outlined absolute right-3 top-3 text-emerald-600 pointer-events-none text-lg">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <!-- Facilities Multi-select Badges -->
                    <div class="flex flex-wrap items-center gap-space-xs pt-space-xs"><span
                            class="font-label-sm text-slate-500 uppercase font-bold tracking-wide mr-space-xs">Fasilitas
                            Khusus:</span><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-sm text-emerald-600">local_parking</span> Parkir
                            Luas</button><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span class="material-symbols-outlined text-sm text-emerald-600">shower</span>
                            Kamar Mandi / Shower</button><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span class="material-symbols-outlined text-sm text-emerald-600">restaurant</span>
                            Kantin
                            &amp; Cafe</button><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span class="material-symbols-outlined text-sm text-emerald-600">checkroom</span>
                            Sewa Rompi /
                            Bola</button><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span class="material-symbols-outlined text-sm text-emerald-600">lightbulb</span>
                            AC / Lampu
                            Malam Stadium</button></div>
                </div>
            </section>
            <!-- Grid Daftar Lapangan (Main Cards Presentation) -->
            <section class="w-full px-gutter py-space-xl bg-slate-50">
                <div class="max-w-7xl mx-auto">
                    <div class="flex items-center justify-between mb-space-lg">
                        <div>
                            <h2 class="font-headline-lg text-headline-lg font-bold text-slate-900">Pilihan Arena
                                Terverifikasi</h2>
                            <p class="font-body-md text-body-md text-slate-600">Menampilkan 6 arena terbaik sesuai
                                kriteria pencarian Anda</p>
                        </div>
                        <div
                            class="hidden sm:flex items-center gap-space-xs bg-white border border-slate-200 p-1 rounded-lg shadow-sm">
                            <button aria-label="Grid layout" class="p-1 rounded bg-slate-100 text-emerald-600"
                                type="button"><span class="material-symbols-outlined text-lg">grid_view</span></button>
                            <button aria-label="List layout" class="p-1 rounded text-slate-400 hover:text-slate-700"
                                type="button"><span class="material-symbols-outlined text-lg">view_list</span></button>
                        </div>
                    </div>
                    <!-- 6 Primary Court Grid Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
                        <!-- Card 1: Grand Futsal Arena Galaxy -->
                        <article
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/90 flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-slate-100 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Modern indoor futsal court with vibrant green artificial turf, bright athletic LED stadium spotlights, crisp white perimeter lines, black net goals, and professional dark athletic hall aesthetics in deep navy and emerald tones."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYg136JD90sMcg5xLy14eCA4FTtrV4rISWR37iE8dGfKZi_kIMVCGvtwqNo3TfhMgKjyClDumvHDyBsndU2iSF4IADxZyx_15WYt3ZhwJR2iUfI9SG4ov1pYWbjCgyzQlEbqwd-DS6OUZogOcSpdg3xRBMKD_Wg3bzTqv_rCbxeiGTt55cPcoUgwpMEom8tKzu0YXLCrzYIADhXQ9rqh5oRRJCn7EHeSrf4TKldj_sOc8Ti5ehzF5d" />
                                <!-- Status Badge Top Left -->
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-full shadow-sm">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-[11px] text-emerald-800 uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <!-- Sport Category Top Right -->
                                <div
                                    class="absolute top-3 right-3 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-lg font-label-sm text-[11px] text-slate-800 font-bold flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-xs text-emerald-600">sports_soccer</span>
                                    Futsal
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span
                                            class="font-body-sm text-body-sm text-slate-500 flex items-center gap-1 font-medium">
                                            <span class="material-symbols-outlined text-sm text-emerald-600">pin_drop</span>
                                            Bekasi Selatan (1.8 km)
                                        </span>
                                        <div
                                            class="flex items-center gap-1 bg-amber-50 border border-amber-200/80 px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-amber-500"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="font-label-md text-label-md text-slate-900 font-bold">4.9</span>
                                            <span class="font-label-sm text-xs text-slate-500">(128)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-slate-900 font-bold tracking-tight mb-space-xs group-hover:text-emerald-700 transition-colors">
                                        Grand Futsal Arena Galaxy
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div
                                        class="bg-slate-50 border border-slate-100 p-space-sm rounded-xl mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-emerald-700 font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">grass</span>
                                            <span class="">Rumput Sintetis FIFA Standard</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-slate-600">
                                            <span class="">• Shower Air Hangat</span>
                                            <span class="">• Kantin Lengkap</span>
                                            <span class="">• Parkir Luas</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between border-t border-slate-100">
                                    <div>
                                        <span
                                            class="font-label-sm text-xs text-slate-400 font-bold uppercase tracking-wider block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span
                                                class="font-headline-md text-headline-md text-emerald-700 font-extrabold">Rp
                                                175.000</span>
                                            <span class="font-body-sm text-body-sm text-slate-500 font-medium">/
                                                jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-space-md py-space-sm rounded-xl font-label-md text-label-md font-bold transition-all shadow-sm hover:shadow active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 2: Smash Hall Badminton Center -->
                        <article
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/90 flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-slate-100 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Interior wide angle of an elite multi-court badminton facility with green Li-Ning tournament mats, crisp white court boundary lines, high ceilings with glare-free linear lighting, and spectator benches in deep athletic midnight slate."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBb8h6GrDKT8HO7kSIzsMjDNkKssvpQ5o-BqYsqyAyisAfDCrzHd2quoKX2ZCC1eOjGpozVC_5bu5H-qLEfolqgXq2C5bDqpZ8kLedQhszq9x86UrNShHIieeqV8Zztpu0v3Ly9j4vOKOVC8pkjSJ-7F2HI1ac8eK74qnqTTAIDPAE2rGUN7RsBEhgmIIDVE06kwLi6Hn3VMSltH2nqY1mL5UJuJHztWMG0ty0e8VqqHiM7StU5MTJg" />
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-full shadow-sm">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-[11px] text-emerald-800 uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-lg font-label-sm text-[11px] text-slate-800 font-bold flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-xs text-emerald-600">sports_tennis</span>
                                    Badminton
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span
                                            class="font-body-sm text-body-sm text-slate-500 flex items-center gap-1 font-medium">
                                            <span class="material-symbols-outlined text-sm text-emerald-600">pin_drop</span>
                                            Jakarta Barat (3.4 km)
                                        </span>
                                        <div
                                            class="flex items-center gap-1 bg-amber-50 border border-amber-200/80 px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-amber-500"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="font-label-md text-label-md text-slate-900 font-bold">4.8</span>
                                            <span class="font-label-sm text-xs text-slate-500">(95)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-slate-900 font-bold tracking-tight mb-space-xs group-hover:text-emerald-700 transition-colors">
                                        Smash Hall Badminton Center
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div
                                        class="bg-slate-50 border border-slate-100 p-space-sm rounded-xl mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-emerald-700 font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">layers</span>
                                            <span class="">6 Lapangan Karpet Li-Ning Original</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-slate-600">
                                            <span class="">• Ruang Ganti Ber-AC</span>
                                            <span class="">• Pro Shop Senar</span>
                                            <span class="">• Minuman Dingin</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between border-t border-slate-100">
                                    <div>
                                        <span
                                            class="font-label-sm text-xs text-slate-400 font-bold uppercase tracking-wider block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span
                                                class="font-headline-md text-headline-md text-emerald-700 font-extrabold">Rp
                                                90.000</span>
                                            <span class="font-body-sm text-body-sm text-slate-500 font-medium">/
                                                jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-space-md py-space-sm rounded-xl font-label-md text-label-md font-bold transition-all shadow-sm hover:shadow active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 3: Champions Mini Soccer Stadium -->
                        <article
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/90 flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-slate-100 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Outdoor mini soccer arena at twilight with towering LED floodlight towers, monofilament green turf, covered spectator stands, high digital scoreboard, and camera rigging under an evening athletic sky."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAS2PMLSMsKDZjmsegEvbSYsKodCRggWpZLQ5RyEwy_3WVc-74iCr4dntgjSY8x4hZWF2grpRN8mZGP-8jmZGrSykzm8LSBHH1sRdnh21hfL7p9dHB7V83f23Xffg9JVp00pTrwcsrrAF8jA3cqqHEGfJp4euZeUSMofv629AKInF6rIQq3vmRihyme76U7TEtsTSl9P0LqhCTAN8MsERkqWXoJR5iMNCDh8cwdhT95jjxKLyZavtod" />
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-full shadow-sm">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-[11px] text-emerald-800 uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-lg font-label-sm text-[11px] text-slate-800 font-bold flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-xs text-emerald-600">stadium</span> Mini
                                    Soccer
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span
                                            class="font-body-sm text-body-sm text-slate-500 flex items-center gap-1 font-medium">
                                            <span class="material-symbols-outlined text-sm text-emerald-600">pin_drop</span>
                                            Tangerang Kota (5.1 km)
                                        </span>
                                        <div
                                            class="flex items-center gap-1 bg-amber-50 border border-amber-200/80 px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-amber-500"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="font-label-md text-label-md text-slate-900 font-bold">4.9</span>
                                            <span class="font-label-sm text-xs text-slate-500">(210)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-slate-900 font-bold tracking-tight mb-space-xs group-hover:text-emerald-700 transition-colors">
                                        Champions Mini Soccer Stadium
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div
                                        class="bg-slate-50 border border-slate-100 p-space-sm rounded-xl mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-emerald-700 font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">videocam</span>
                                            <span class="">Lampu LED &amp; Rekaman Pertandingan HD</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-slate-600">
                                            <span class="">• Tribun Penonton</span>
                                            <span class="">• Ruang Wasit</span>
                                            <span class="">• Sound System</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between border-t border-slate-100">
                                    <div>
                                        <span
                                            class="font-label-sm text-xs text-slate-400 font-bold uppercase tracking-wider block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span
                                                class="font-headline-md text-headline-md text-emerald-700 font-extrabold">Rp
                                                350.000</span>
                                            <span class="font-body-sm text-body-sm text-slate-500 font-medium">/
                                                jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-space-md py-space-sm rounded-xl font-label-md text-label-md font-bold transition-all shadow-sm hover:shadow active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 4: Apex Basketball Court -->
                        <article
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/90 flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-slate-100 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Pristine hardwood maple basketball court inside a sleek indoor sports complex, professional FIBA spring-loaded breakaway hoop system, clear glass backboards, and high-intensity overhead stadium lighting."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDo0zw7fNWpvvuvHdV2dGf0PlDh81kcuYaPxYsaKUelqbs7y8V6k1eRp7sBuynWVYJK4j6LKByH7nG8Y4P6zfR7FuQzUlHB_9pYAHjKR1-R4gnJxXzwvkAnwnzH_RYHqI5C0iFoM6kA-Bqckrk9bgqxlT547YBRAZ6spqi4wWdlcu7Ny1Lv1xWFOOQmvGukJHPU75dqScJ3NuZBQEfQrsSA8PNJSDv8pAY9WGz97fA6pesPH6W2pehs" />
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-full shadow-sm">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-[11px] text-emerald-800 uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-lg font-label-sm text-[11px] text-slate-800 font-bold flex items-center gap-1 shadow-sm">
                                    <span
                                        class="material-symbols-outlined text-xs text-emerald-600">sports_basketball</span>
                                    Basket
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span
                                            class="font-body-sm text-body-sm text-slate-500 flex items-center gap-1 font-medium">
                                            <span class="material-symbols-outlined text-sm text-emerald-600">pin_drop</span>
                                            Jakarta Selatan (2.1 km)
                                        </span>
                                        <div
                                            class="flex items-center gap-1 bg-amber-50 border border-amber-200/80 px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-amber-500"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="font-label-md text-label-md text-slate-900 font-bold">4.7</span>
                                            <span class="font-label-sm text-xs text-slate-500">(80)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-slate-900 font-bold tracking-tight mb-space-xs group-hover:text-emerald-700 transition-colors">
                                        Apex Basketball Court
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div
                                        class="bg-slate-50 border border-slate-100 p-space-sm rounded-xl mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-emerald-700 font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">sports_score</span>
                                            <span class="">Lantai Kayu Maple &amp; Ring FIBA</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-slate-600">
                                            <span class="">• Digital Shot Clock</span>
                                            <span class="">• Loker Pemain</span>
                                            <span class="">• Full Indoor AC</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between border-t border-slate-100">
                                    <div>
                                        <span
                                            class="font-label-sm text-xs text-slate-400 font-bold uppercase tracking-wider block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span
                                                class="font-headline-md text-headline-md text-emerald-700 font-extrabold">Rp
                                                220.000</span>
                                            <span class="font-body-sm text-body-sm text-slate-500 font-medium">/
                                                jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-space-md py-space-sm rounded-xl font-label-md text-label-md font-bold transition-all shadow-sm hover:shadow active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 5: Center Court Tennis Club -->
                        <article
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/90 flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-slate-100 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Professional blue and emerald hard court tennis surface with clean white regulation lines, sturdy tennis net, ITF standard surroundings, ball boy bench, and palm trees around an upscale athletic club."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB61NIeYO414yvwFAZmXr3L0nF0TskZru3v9wd9EeVetHxX-9oDtCZ_muxVteLvyoYh4n58WtnB52n7UdJdhWPZpH_ouI-X1y8JCUl-gngZI2aYfwPYWemlX2MBun6X5JjJ_QLXNxahnN4CDdEYbuoaTXOccb7liqLiRLsumT4hy2jBPDio9uMwyO3t_H2rfKf_qBlbn3I2ZdYSWxO4Q1WN60c0epcO4IS16QXH9RJtzO8sglZI-DrF" />
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-full shadow-sm">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-[11px] text-emerald-800 uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-lg font-label-sm text-[11px] text-slate-800 font-bold flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-xs text-emerald-600">sports_baseball</span>
                                    Tenis
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span
                                            class="font-body-sm text-body-sm text-slate-500 flex items-center gap-1 font-medium">
                                            <span class="material-symbols-outlined text-sm text-emerald-600">pin_drop</span>
                                            Jakarta Pusat (4.2 km)
                                        </span>
                                        <div
                                            class="flex items-center gap-1 bg-amber-50 border border-amber-200/80 px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-amber-500"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="font-label-md text-label-md text-slate-900 font-bold">4.8</span>
                                            <span class="font-label-sm text-xs text-slate-500">(64)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-slate-900 font-bold tracking-tight mb-space-xs group-hover:text-emerald-700 transition-colors">
                                        Center Court Tennis Club
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div
                                        class="bg-slate-50 border border-slate-100 p-space-sm rounded-xl mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-emerald-700 font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">sports</span>
                                            <span class="">Hard Court Standar ITF Internasional</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-slate-600">
                                            <span class="">• Ball Boy Ready</span>
                                            <span class="">• Sewa Raket Babolat</span>
                                            <span class="">• Cafe Lounge</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between border-t border-slate-100">
                                    <div>
                                        <span
                                            class="font-label-sm text-xs text-slate-400 font-bold uppercase tracking-wider block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span
                                                class="font-headline-md text-headline-md text-emerald-700 font-extrabold">Rp
                                                150.000</span>
                                            <span class="font-body-sm text-body-sm text-slate-500 font-medium">/
                                                jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-space-md py-space-sm rounded-xl font-label-md text-label-md font-bold transition-all shadow-sm hover:shadow active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 6: Vortex Futsal & Gym -->
                        <article
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/90 flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-slate-100 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="High quality multi-purpose indoor vinyl futsal arena with shock-absorbing blue athletic flooring, yellow boundary lines, padded perimeter walls, digital scoreboard, and modern gym facilities visible in the background."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJMq6PSYNh-cUOCQKvlpl2Z1afpHJkVtHRJsEV1Xq9SWyo0VHDMdTvBv5uP3mUwdWqyANBngBIML65JBr1ntnGLVM9ZxYHtZg4l2uKVRa9220VDZ6S4j3In9S5cK_Abn5c4gwjrbUYg2F1cZSojrDvUqf200ek-GGIBXIIsoBd5cCHmWxyFS6iS-iqrZ5mMZuEHFazaOQHiiLUZgM-H7iWUaBgkd1wM-kuRkIWGxj1u8HHsrlL2TYf" />
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-full shadow-sm">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-[11px] text-emerald-800 uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-lg font-label-sm text-[11px] text-slate-800 font-bold flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-xs text-emerald-600">sports_soccer</span>
                                    Futsal
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span
                                            class="font-body-sm text-body-sm text-slate-500 flex items-center gap-1 font-medium">
                                            <span class="material-symbols-outlined text-sm text-emerald-600">pin_drop</span>
                                            Depok Margonda (3.9 km)
                                        </span>
                                        <div
                                            class="flex items-center gap-1 bg-amber-50 border border-amber-200/80 px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-amber-500"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="font-label-md text-label-md text-slate-900 font-bold">4.6</span>
                                            <span class="font-label-sm text-xs text-slate-500">(45)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-slate-900 font-bold tracking-tight mb-space-xs group-hover:text-emerald-700 transition-colors">
                                        Vortex Futsal &amp; Gym
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div
                                        class="bg-slate-50 border border-slate-100 p-space-sm rounded-xl mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-emerald-700 font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">grid_on</span>
                                            <span class="">Lapangan Vinyl High Grip Standard</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-slate-600">
                                            <span class="">• Locker Room Aman</span>
                                            <span class="">• Free High-speed Wi-Fi</span>
                                            <span class="">• Area Fitness</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between border-t border-slate-100">
                                    <div>
                                        <span
                                            class="font-label-sm text-xs text-slate-400 font-bold uppercase tracking-wider block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span
                                                class="font-headline-md text-headline-md text-emerald-700 font-extrabold">Rp
                                                130.000</span>
                                            <span class="font-body-sm text-body-sm text-slate-500 font-medium">/
                                                jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-space-md py-space-sm rounded-xl font-label-md text-label-md font-bold transition-all shadow-sm hover:shadow active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Pagination Component -->
                    <div
                        class="mt-space-2xl pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md border-t border-slate-200">
                        <div class="font-body-sm text-body-sm text-slate-500">
                            Menampilkan <span class="text-slate-900 font-bold">1 - 6</span> dari <span
                                class="text-slate-900 font-bold">48</span> arena tersedia
                        </div>
                        <div class="flex items-center gap-space-xs">
                            <button aria-label="Previous Page"
                                class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-900 hover:bg-slate-100 transition-colors shadow-sm"
                                type="button">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </button>
                            <button
                                class="w-10 h-10 rounded-xl bg-emerald-600 text-white font-headline-sm text-headline-sm font-bold flex items-center justify-center shadow-sm"
                                type="button">
                                1
                            </button>
                            <button
                                class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-700 hover:bg-slate-100 font-headline-sm text-headline-sm font-semibold flex items-center justify-center transition-colors shadow-sm"
                                type="button">
                                2
                            </button>
                            <button
                                class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-700 hover:bg-slate-100 font-headline-sm text-headline-sm font-semibold flex items-center justify-center transition-colors shadow-sm"
                                type="button">
                                3
                            </button>
                            <span class="w-8 text-center text-slate-400 font-data-mono font-bold">...</span>
                            <button
                                class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-700 hover:bg-slate-100 font-headline-sm text-headline-sm font-semibold flex items-center justify-center transition-colors shadow-sm"
                                type="button">
                                8
                            </button>
                            <button aria-label="Next Page"
                                class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-slate-700 hover:bg-slate-100 transition-colors shadow-sm"
                                type="button">
                                <span class="material-symbols-outlined text-lg">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Community Trust & Live Activity Footprint -->
            <section class="relative w-full px-gutter py-space-xl bg-white border-t border-slate-200">
                <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                    <div
                        class="bg-slate-50 border border-slate-200/90 p-space-lg rounded-2xl flex items-start gap-space-md shadow-sm hover:shadow-md transition-shadow">
                        <div class="p-3 bg-emerald-100 text-emerald-700 rounded-xl "><span
                                class="material-symbols-outlined text-3xl">sports</span></div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-slate-900 font-bold">Standard Federasi
                            </div>
                            <p class="font-body-sm text-body-sm text-slate-600 mt-1 leading-relaxed">Setiap lapangan
                                dikurasi secara ketat mencakup dimensi resmi, pencahayaan minimum 300 lux, dan material
                                lantai teruji.</p>
                        </div>
                    </div>
                    <div
                        class="bg-slate-50 border border-slate-200/90 p-space-lg rounded-2xl flex items-start gap-space-md shadow-sm hover:shadow-md transition-shadow">
                        <div class="p-3 bg-emerald-100 text-emerald-700 rounded-xl shrink-0"><span
                                class="material-symbols-outlined text-3xl">security_update_good</span></div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-slate-900 font-bold">Jaminan Slot Resmi
                            </div>
                            <p class="font-body-sm text-body-sm text-slate-600 mt-1 leading-relaxed">Sistem sinkronisasi
                                langsung dengan pengelola venue. Tanpa risiko jadwal ganda atau pemesanan bertumpuk.</p>
                        </div>
                    </div>
                    <div
                        class="bg-slate-50 border border-slate-200/90 p-space-lg rounded-2xl flex items-start gap-space-md shadow-sm hover:shadow-md transition-shadow">
                        <div class="p-3 bg-emerald-100 text-emerald-700 rounded-xl shrink-0"><span
                                class="material-symbols-outlined text-3xl">group</span></div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-slate-900 font-bold">Komunitas Main
                                Bareng</div>
                            <p class="font-body-sm text-body-sm text-slate-600 mt-1 leading-relaxed">Kekurangan pemain?
                                Aktifkan fitur 'Open Sparring' dan undang atlet lokal terdekat langsung ke match Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive JavaScript for micro-interactions -->
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    // Dynamic button state toggle
                    const sportButtons = document.querySelectorAll('section:nth-of-type(3) button');
                    sportButtons.forEach(btn => {
                        btn.addEventListener('click', () => {
                            sportButtons.forEach(b => {
                                b.className = 'flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-white hover:bg-slate-100 text-slate-700 border border-slate-200/90 transition-all active:scale-95 shadow-sm flex-shrink-0';
                                const icon = b.querySelector('.material-symbols-outlined');
                                if (icon) icon.className = 'material-symbols-outlined text-emerald-600 text-xl';
                            });
                            btn.className = 'flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-emerald-600 text-white transition-all shadow-sm flex-shrink-0';
                            const activeIcon = btn.querySelector('.material-symbols-outlined');
                            if (activeIcon) activeIcon.className = 'material-symbols-outlined text-xl text-white';
                        });
                    });
                });
            </script>
        </div>
    </main>
@endsection
