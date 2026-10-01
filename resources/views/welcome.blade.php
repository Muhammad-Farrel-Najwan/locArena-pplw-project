<!DOCTYPE html>
<html class="dark" lang="en" style="">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@100..900&amp;family=Outfit:wght@100..900&amp;display=swap"
        rel="stylesheet">
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary": "#283044",
                        "surface-container": "#102034",
                        "surface-dim": "#031427",
                        "secondary": "#bec6e0",
                        "secondary-fixed": "#dae2fd",
                        "tertiary-fixed-dim": "#d0bcff",
                        "background": "#031427",
                        "primary-fixed-dim": "#68dba9",
                        "inverse-surface": "#d3e4fe",
                        "error-container": "#93000a",
                        "secondary-fixed-dim": "#bec6e0",
                        "outline": "#87948b",
                        "on-surface": "#d3e4fe",
                        "primary-fixed": "#85f8c4",
                        "surface-variant": "#26364a",
                        "on-primary": "#003825",
                        "surface-tint": "#68dba9",
                        "on-background": "#d3e4fe",
                        "primary-container": "#25a475",
                        "surface-bright": "#2a3a4f",
                        "primary": "#68dba9",
                        "on-surface-variant": "#bccac0",
                        "on-secondary-fixed-variant": "#3f465c",
                        "on-tertiary-container": "#340080",
                        "surface-container-lowest": "#000f21",
                        "surface-container-highest": "#26364a",
                        "on-secondary-container": "#adb4ce",
                        "surface": "#031427",
                        "tertiary": "#d0bcff",
                        "on-secondary-fixed": "#131b2e",
                        "inverse-primary": "#006c4a",
                        "surface-container-low": "#0b1c30",
                        "inverse-on-surface": "#213145",
                        "on-primary-fixed": "#002114",
                        "error": "#ffb4ab",
                        "on-error": "#690005",
                        "tertiary-fixed": "#e9ddff",
                        "on-tertiary": "#3c0091",
                        "secondary-container": "#3f465c",
                        "surface-container-high": "#1b2b3f",
                        "tertiary-container": "#a078ff",
                        "on-tertiary-fixed": "#23005c",
                        "on-tertiary-fixed-variant": "#5516be",
                        "on-primary-fixed-variant": "#005137",
                        "on-primary-container": "#00311f",
                        "outline-variant": "#3d4a42",
                        "on-error-container": "#ffdad6"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "space-md": "1rem",
                        "space-sm": "0.5rem",
                        "space-xl": "2rem",
                        "margin-mobile": "1rem",
                        "space-lg": "1.5rem",
                        "space-2xl": "3rem",
                        "space-xs": "0.25rem",
                        "margin": "2rem",
                        "gutter-mobile": "0.75rem",
                        "gutter": "1.5rem"
                    },
                    fontFamily: {
                        "body-sm": ["Manrope"],
                        "label-sm": ["Outfit"],
                        "headline-sm": ["Outfit"],
                        "label-md": ["Outfit"],
                        "headline-lg": ["Outfit"],
                        "headline-md": ["Outfit"],
                        "label-lg": ["Outfit"],
                        "display-hero": ["Outfit"],
                        "body-md": ["Manrope"],
                        "body-lg": ["Manrope"],
                        "headline-lg-mobile": ["Outfit"],
                        "data-mono": ["Outfit"],
                        "display-hero-mobile": ["Outfit"]
                    },
                    fontSize: {
                        "body-sm": ["12px", {
                            "lineHeight": "18px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "400"
                        }],
                        "label-sm": ["10px", {
                            "lineHeight": "14px",
                            "letterSpacing": "0.06em",
                            "fontWeight": "700"
                        }],
                        "headline-sm": ["18px", {
                            "lineHeight": "26px",
                            "letterSpacing": "0",
                            "fontWeight": "600"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.04em",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "600"
                        }],
                        "display-hero": ["56px", {
                            "lineHeight": "64px",
                            "letterSpacing": "-0.03em",
                            "fontWeight": "800"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "22px",
                            "letterSpacing": "0",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "26px",
                            "letterSpacing": "0",
                            "fontWeight": "400"
                        }],
                        "headline-lg-mobile": ["26px", {
                            "lineHeight": "34px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "data-mono": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "700"
                        }],
                        "display-hero-mobile": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "800"
                        }]
                    }
                }
            }
        }
    </script>
</head>

<body
    class="bg-surface font-body-md text-body-md text-on-surface antialiased selection:bg-primary-container selection:text-on-primary">
    <header
        class="fixed top-0 left-0 right-0 z-50 bg-surface-container-low/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.3)]">
        <div class="h-20 w-full px-gutter flex items-center justify-between gap-space-lg">
            <div class="flex items-center gap-space-lg"><a class="flex items-center gap-space-sm"
                    data-path="explore-arenas" href="#"><img alt="locArena Logo" class="h-8 w-auto object-contain"
                        src="https://lh3.googleusercontent.com/aida/AEtjO1W9vARxAlbj6B4U9rcHs4SOJjdW3banBuEFMrdmi-ALAU9jLfWjWKGJSMPS1kWSD6vRUNrS7u2LS4fpzbuOEf9PuzHbS3v7N8-IZQMvfLAPtGBFL0DerXJmpI6-kBgZ6YjshU9uCBw5_hYSo3463kRB9qU-2cOItVCI9JGRI-8wyCB4gxT8uIQCECbVOK16aVXQUJMyWVpv6H91oaTzStVLE6MnQgxgN7kAyTXhOOVYk3khQrv44RzHiQ"></a>
                <div
                    class="hidden xl:flex items-center bg-surface-container-high rounded-lg px-space-md py-space-xs text-on-surface-variant gap-space-sm w-72">
                    <span class="material-symbols-outlined text-primary text-xl">location_on</span>
                    <div class="flex flex-col flex-1"><span
                            class="font-label-sm text-label-sm text-outline uppercase">Lokasi</span><span
                            class="font-label-md text-label-md text-on-surface truncate">Jakarta Selatan, ID</span>
                    </div><span class="material-symbols-outlined text-on-surface-variant text-sm">expand_more</span>
                </div>
            </div>
            <div class="flex items-center gap-space-md">

                <a href="{{ route('login') }}"
                    class="px-space-md py-space-sm rounded-lg border border-outline-variant hover:border-outline text-on-surface hover:bg-surface-container-high transition-colors font-label-md text-label-md font-semibold">
                    Masuk
                </a>

                <a href="{{ route('register') }}"
                    class="px-space-md py-space-sm rounded-lg bg-primary hover:bg-primary-container text-on-primary transition-all font-label-md text-label-md font-bold shadow-md hover:shadow-lg active:scale-95">
                    Daftar
                </a>

            </div>
    </header>
    <main class="w-full pt-20 bg-surface">
        <div class="flex flex-col w-full">
            <!-- Dynamic Atmospheric Hero -->
            <section class="relative w-full overflow-hidden bg-surface-container-lowest py-space-xl">
                <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden"><img
                        alt="Indoor Badminton Sports Hall Arena"
                        class="w-full h-full object-cover object-center opacity-75"
                        src="https://lh3.googleusercontent.com/aida/AEtjO1ULlbR4mb4I-X5a2HscjhMOlBVhtuf5kxPZuALAA_VWTSCjk9qPR5KaI6KDKGALA4382uH0GESPdY8gr9rRPLftXgoWvBgBf6M5nuGPDyfo-w7V1lwMRaoAY9oIZqkTnI2giWJfbz9GaH5a82m3UqCHm2kAb25jM1ml7eAnfUTU82kaxXrWmVkQOO6cx9ac0yPpVJbbw9E_UhnyZQSfN2lAec2FKnxeMJo59tVpSCufmbJSUDbTqi2jNhY">
                    <div class="absolute inset-0 bg-linear-to-b from-[#000f21]/70 via-[#000f21]/40 to-[#000f21]">
                    </div>
                </div>
                <!-- Ambient Floodlight & Field Glow Visuals -->
                <div
                    class="absolute -top-32 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-[120px] pointer-events-none">
                </div>
                <div
                    class="absolute top-1/2 -right-24 w-80 h-80 bg-tertiary-container/10 rounded-full blur-[100px] pointer-events-none">
                </div>
                <div class="relative w-full px-gutter pt-20 pb-space-2xl flex flex-col items-center z-10">
                    <!-- High-Performance Overline Tracker -->
                    <div
                        class="inline-flex items-center gap-space-sm bg-surface-container-high px-space-md py-space-xs rounded-full shadow-sm mb-space-md">
                        <span class="flex h-2.5 w-2.5 relative">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75 mb-2"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary mb-2"></span>
                        </span>
                        <span class="font-label-sm text-label-sm text-primary uppercase tracking-widest">Real-time
                            Turnstile Pass Access</span>
                        <span class="text-outline font-body-sm text-body-sm">|</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant font-semibold">1,420+ Slot
                            Tersedia Hari Ini</span>
                    </div>
                    <!-- Main Punchy Title -->
                    <div class="flex flex-col items-center mb-space-lg">
                        <h1
                            class="font-display-hero text-display-hero text-on-surface text-center max-w-4xl tracking-tight leading-none mb-space-md">
                            Sewa Lapangan Olahraga <br>
                            <span
                                class="text-transparent bg-clip-text bg-linear-to-r from-primary via-primary-fixed to-secondary">Lebih
                                Cepat &amp; Praktis</span>
                        </h1>
                        <p
                            class="font-body-lg text-body-lg text-on-surface-variant text-center max-w-2xl mb-space-xl leading-relaxed">
                            Akses instan ribuan arena berstandar federasi dengan jadwal terintegrasi langsung,
                            pembayaran digital terproteksi, dan tiket QR check-in otomatis.
                        </p>
                    </div>
                    <!-- Integrated High-Performance Search Command Box -->
                    <div
                        class="w-full max-w-5xl bg-surface-container-high/95 backdrop-blur-xl rounded-xl shadow-xl p-space-md flex flex-col gap-space-md">
                        <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-sm"
                            onsubmit="event.preventDefault();">
                            <!-- Lokasi Selector -->
                            <div class="bg-surface-container p-space-sm rounded-lg flex items-center gap-space-sm">
                                <span
                                    class="material-symbols-outlined text-primary text-2xl shrink-0">location_on</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label class="font-label-sm text-label-sm text-outline uppercase tracking-wider"
                                        for="location-select">Lokasi / Kota</label>
                                    <select
                                        class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer"
                                        id="location-select">
                                        <option class="bg-surface-container text-on-surface" value="all">Semua
                                            Jabodetabek</option>
                                        <option class="bg-surface-container text-on-surface" value="jaksul">Jakarta
                                            Selatan</option>
                                        <option class="bg-surface-container text-on-surface" value="jakbar">Jakarta
                                            Barat</option>
                                        <option class="bg-surface-container text-on-surface" value="jakpus">Jakarta
                                            Pusat</option>
                                        <option class="bg-surface-container text-on-surface" value="bekasi">Bekasi
                                        </option>
                                        <option class="bg-surface-container text-on-surface" value="tangerang">Tangerang
                                        </option>
                                        <option class="bg-surface-container text-on-surface" value="depok">Depok
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- Jenis Olahraga -->
                            <div class="bg-surface-container p-space-sm rounded-lg flex items-center gap-space-sm">
                                <span
                                    class="material-symbols-outlined text-primary text-2xl shrink-0">sports_soccer</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label class="font-label-sm text-label-sm text-outline uppercase tracking-wider"
                                        for="sport-select">Jenis Olahraga</label>
                                    <select
                                        class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer"
                                        id="sport-select">
                                        <option class="bg-surface-container text-on-surface" value="all">Semua Cabang
                                        </option>
                                        <option class="bg-surface-container text-on-surface" value="futsal">Futsal
                                        </option>
                                        <option class="bg-surface-container text-on-surface" value="badminton">Badminton
                                        </option>
                                        <option class="bg-surface-container text-on-surface" value="basketball">Basket
                                        </option>
                                        <option class="bg-surface-container text-on-surface" value="tennis">Tenis
                                        </option>
                                        <option class="bg-surface-container text-on-surface" value="minisoccer">Mini
                                            Soccer</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Tanggal Main -->
                            <div class="bg-surface-container p-space-sm rounded-lg flex items-center gap-space-sm">
                                <span
                                    class="material-symbols-outlined text-primary text-2xl shrink-0">calendar_today</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label class="font-label-sm text-label-sm text-outline uppercase tracking-wider"
                                        for="date-select">Tanggal Main</label>
                                    <input
                                        class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer scheme-dark"
                                        id="date-select" type="date" value="2025-05-18">
                                </div>
                            </div>
                            <!-- Execute Search Action Button -->
                            <button
                                class="w-full bg-primary hover:bg-primary-container text-on-primary font-headline-sm text-headline-sm rounded-lg py-space-sm px-space-md flex items-center justify-center gap-space-sm transition-all shadow-md hover:shadow-lg active:scale-95"
                                type="button">
                                <span class="material-symbols-outlined text-xl">search</span>
                                <span class="">Cari Lapangan</span>
                            </button>
                        </form>
                        <!-- Live Quick Stats Strip -->
                        <div
                            class="flex flex-wrap items-center justify-between pt-space-xs text-outline font-body-sm text-body-sm">
                            <div class="flex items-center gap-space-md">
                                <span
                                    class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm"><span
                                        class="material-symbols-outlined text-sm text-primary">bolt</span> Instant
                                    Confirmation</span>
                                <span
                                    class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm"><span
                                        class="material-symbols-outlined text-sm text-primary">lock</span> 100% Secure
                                    Payment</span>
                                <span
                                    class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm"><span
                                        class="material-symbols-outlined text-sm text-primary">autorenew</span> Free
                                    Reschedule Guard</span>
                            </div>
                            <div class="text-primary font-data-mono text-data-mono">TERVERIFIKASI BADAN OLAHRAGA
                                NASIONAL</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Kategori Pilihan Cepat (Icon Badges) -->
            <section class="w-full px-gutter py-space-sm">
                <div
                    class="max-w-7xl mx-auto bg-linear-to-r from-surface-container-high via-surface-container to-surface-container-high rounded-xl p-space-md shadow-lg flex flex-col sm:flex-row items-center justify-between gap-space-md">
                    <div class="flex items-center gap-space-md">
                        <div
                            class="h-12 w-12 rounded-xl bg-primary/20 flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined text-3xl">qr_code_scanner</span>
                        </div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-on-surface font-bold">Pesan Online
                                Langsung Dapat QR Check-in Tanpa Antre!</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tunjukkan tiket digital dari
                                smartphone langsung ke turnstile pintu masuk arena atau petugas lapangan.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-space-sm shrink-0"><span
                            class="font-data-mono text-data-mono text-primary font-bold">#SmartAccess</span><button
                            class="bg-surface-variant hover:bg-surface-bright text-on-surface px-space-md py-space-xs rounded-lg font-label-md text-label-md transition-colors"
                            type="button">Pelajari Sistem Pass</button></div>
                </div>
            </section>
            <section
                class="w-full px-gutter py-space-md bg-surface-container-lowest border-b border-outline-variant/30">
                <div class="max-w-7xl mx-auto">
                    <div class="relative flex items-center w-full shadow-lg rounded-xl overflow-hidden"><span
                            class="material-symbols-outlined absolute left-space-md text-primary pointer-events-none text-2xl">search</span><input
                            class="w-full bg-surface-container-high py-space-md pl-12 pr-28 rounded-xl text-on-surface placeholder:text-outline text-body-lg font-body-md border border-outline-variant hover:border-outline focus:outline-none focus:border-primary transition-all"
                            placeholder="Cari arena, lapangan, atau klub olahraga..." type="text">
                        <div class="absolute right-space-md flex items-center gap-space-xs"><kbd
                                class="hidden sm:inline-block bg-surface-variant text-on-surface-variant px-space-xs py-1 rounded text-label-sm font-data-mono border border-outline-variant/30">⌘K</kbd><button
                                type="button"
                                class="bg-primary hover:bg-primary-container text-on-primary px-space-md py-1.5 rounded-lg font-label-md text-label-md font-bold transition-all shadow-sm active:scale-95">Cari</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full px-gutter py-space-lg bg-surface-container-low">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-space-md">
                    <div class="flex flex-col">
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest font-bold">Pilih
                            Cepat Olahraga</span>
                        <span class="font-headline-sm text-headline-sm text-on-surface">Kategori Favorit Atlet</span>
                    </div>
                    <div class="flex items-center gap-space-sm overflow-x-auto w-full md:w-auto pb-space-xs"><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-primary text-on-primary transition-all shadow-md"
                            type="button"><span class="material-symbols-outlined text-xl">category</span><span
                                class="font-label-md text-label-md font-bold">Semua</span></button>
                        <!-- Futsal -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button">
                            <span class="material-symbols-outlined text-primary text-xl">sports_soccer</span>
                            <span class="font-label-md text-label-md font-semibold">Futsal</span>
                        </button>
                        <!-- Badminton -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-primary text-xl">sports_tennis</span><span
                                class="font-label-md text-label-md font-semibold">Badminton</span></button>
                        <!-- Basket -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button">
                            <span class="material-symbols-outlined text-primary text-xl">sports_basketball</span>
                            <span class="font-label-md text-label-md font-semibold">Basket</span>
                        </button>
                        <!-- Tenis -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button">
                            <span class="material-symbols-outlined text-primary text-xl">sports_baseball</span>
                            <span class="font-label-md text-label-md font-semibold">Tenis</span>
                        </button>
                        <!-- Mini Soccer -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button">
                            <span class="material-symbols-outlined text-primary text-xl">stadium</span>
                            <span class="font-label-md text-label-md font-semibold">Mini Soccer</span>
                        </button>
                        <!-- Voli -->
                        <button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button">
                            <span class="material-symbols-outlined text-primary text-xl">sports_volleyball</span>
                            <span class="font-label-md text-label-md font-semibold">Voli</span>
                        </button>
                    </div>
                </div>
            </section>
            <section class="w-full px-gutter py-space-md bg-surface-container-low border-t border-outline-variant/30">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-space-md">
                    <div class="flex flex-col"><span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest font-bold">Pilih
                            Spesifikasi</span><span class="font-headline-sm text-headline-sm text-on-surface">Jenis
                            Lantai Lapangan</span></div>
                    <div class="flex items-center gap-space-sm overflow-x-auto w-full md:w-auto pb-space-xs"><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-primary text-on-primary transition-all shadow-md"
                            type="button"><span class="material-symbols-outlined text-xl">select_all</span><span
                                class="font-label-md text-label-md font-bold">Semua Lantai</span></button><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-primary text-xl">grid_on</span><span
                                class="font-label-md text-label-md font-semibold">Vinyl</span></button><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-primary text-xl">grass</span><span
                                class="font-label-md text-label-md font-semibold">Rumput
                                Sintetis</span></button><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-primary text-xl">texture</span><span
                                class="font-label-md text-label-md font-semibold">Parquet Kayu</span></button><button
                            class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-primary text-xl">layers</span><span
                                class="font-label-md text-label-md font-semibold">Karpet Li-Ning</span></button></div>
                </div>
            </section>
            <!-- Interactive Filtering Bar & Catalog Controls -->
            <section class="w-full px-gutter pt-space-xl pb-space-md">
                <div class="max-w-7xl mx-auto flex flex-col gap-space-md">
                    <!-- Filter Row Top -->
                    <div
                        class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md bg-surface-container-low border border-outline-variant p-space-md rounded-xl shadow-lg">
                        <div class="flex flex-col gap-space-xs w-full flex-1 max-w-xl">
                            <div class="flex items-center justify-between"><span
                                    class="font-label-sm text-label-sm text-outline uppercase font-bold tracking-wide">Harga
                                    Max / Jam</span><span
                                    class="font-data-mono text-data-mono text-primary font-bold bg-primary/10 border border-primary/20 px-space-sm py-0.5 rounded-full"
                                    id="price-display">Rp 350.000</span></div><input
                                class="w-full accent-primary h-1.5 bg-surface-container-highest rounded-lg cursor-pointer"
                                max="500000" min="50000"
                                oninput="document.getElementById('price-display').innerText = 'Rp ' + Number(this.value).toLocaleString('id-ID')"
                                step="25000" type="range" value="350000">
                            <div class="flex justify-between text-outline font-label-sm text-label-sm"><span
                                    class="">50
                                    rb</span><span class="">250 rb</span><span class="">500 rb</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-space-xs w-full lg:w-56"><label
                                class="font-label-sm text-label-sm text-outline uppercase font-bold tracking-wide"
                                for="sort-by">Urutkan Lapangan</label>
                            <div class="relative"><select
                                    class="w-full bg-surface-container-high border border-outline-variant py-2 px-space-sm pr-8 rounded-xl font-label-md text-label-md text-on-surface hover:border-outline focus:outline-none cursor-pointer appearance-none shadow-sm transition-colors"
                                    id="sort-by">
                                    <option class="bg-surface-container text-on-surface" value="popular">Terpopuler
                                        &amp; Rekomendasi</option>
                                    <option class="bg-surface-container text-on-surface" value="price-low">Harga
                                        Terendah</option>
                                    <option class="bg-surface-container text-on-surface" value="rating-high">Rating
                                        Tertinggi (4.8+)</option>
                                    <option class="bg-surface-container text-on-surface" value="distance">Jarak Paling
                                        Dekat</option>
                                </select><span
                                    class="material-symbols-outlined absolute right-3 top-2.5 text-primary pointer-events-none text-lg">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <!-- Facilities Multi-select Badges -->
                    <div class="flex flex-wrap items-center gap-space-xs pt-space-xs"><span
                            class="font-label-sm text-label-sm text-outline uppercase font-bold tracking-wide mr-space-xs">Fasilitas
                            Khusus:</span><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-surface-container-high hover:bg-surface-variant border border-outline-variant hover:border-outline text-on-surface font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-sm text-primary">local_parking</span> Parkir
                            Luas</button><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-surface-container-high hover:bg-surface-variant border border-outline-variant hover:border-outline text-on-surface font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span class="material-symbols-outlined text-sm text-primary">shower</span>
                            Kamar Mandi / Shower</button><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-surface-container-high hover:bg-surface-variant border border-outline-variant hover:border-outline text-on-surface font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-sm text-primary">restaurant</span>
                            Kantin &amp; Cafe</button><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-surface-container-high hover:bg-surface-variant border border-outline-variant hover:border-outline text-on-surface font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-sm text-primary">checkroom</span>
                            Sewa Rompi / Bola</button><button
                            class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-xl bg-surface-container-high hover:bg-surface-variant border border-outline-variant hover:border-outline text-on-surface font-label-md text-label-md font-semibold transition-all active:scale-95 shadow-sm"
                            type="button"><span
                                class="material-symbols-outlined text-sm text-primary">lightbulb</span>
                            AC / Lampu Malam Stadium</button></div>
                </div>
            </section>
            <!-- Educational Interactive Value Banner -->

            <!-- Grid Daftar Lapangan (Main Cards Presentation) -->
            <section class="w-full px-gutter py-space-xl">
                <div class="max-w-7xl mx-auto">
                    <div class="flex items-center justify-between mb-space-lg">
                        <div>
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">Pilihan Arena Terverifikasi
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">Menampilkan 6 arena terbaik
                                sesuai kriteria pencarian Anda</p>
                        </div>
                        <div class="hidden sm:flex items-center gap-space-xs bg-surface-container p-1 rounded-lg">
                            <button aria-label="Grid layout"
                                class="p-1 rounded bg-surface-container-high text-primary" type="button"><span
                                    class="material-symbols-outlined text-lg">grid_view</span></button>
                            <button aria-label="List layout" class="p-1 rounded text-outline hover:text-on-surface"
                                type="button"><span
                                    class="material-symbols-outlined text-lg">view_list</span></button>
                        </div>
                    </div>
                    <!-- 6 Primary Court Grid Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
                        <!-- Card 1: Grand Futsal Arena Galaxy -->
                        <article
                            class="bg-surface-container-low rounded-xl overflow-hidden shadow-xl flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-surface-container overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Modern indoor futsal court with vibrant green artificial turf, bright athletic LED stadium spotlights, crisp white perimeter lines, black net goals, and professional dark athletic hall aesthetics in deep navy and emerald tones."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYg136JD90sMcg5xLy14eCA4FTtrV4rISWR37iE8dGfKZi_kIMVCGvtwqNo3TfhMgKjyClDumvHDyBsndU2iSF4IADxZyx_15WYt3ZhwJR2iUfI9SG4ov1pYWbjCgyzQlEbqwd-DS6OUZogOcSpdg3xRBMKD_Wg3bzTqv_rCbxeiGTt55cPcoUgwpMEom8tKzu0YXLCrzYIADhXQ9rqh5oRRJCn7EHeSrf4TKldj_sOc8Ti5ehzF5d">
                                <!-- Status Badge Top Left -->
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-surface-dim/80 backdrop-blur-md px-space-sm py-0.5 rounded-full">
                                    <span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <!-- Sport Category Top Right -->
                                <div
                                    class="absolute top-3 right-3 bg-surface-container-lowest/85 backdrop-blur-md px-space-sm py-0.5 rounded-md font-label-sm text-label-sm text-on-surface font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-xs text-primary">sports_soccer</span>
                                    Futsal
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-sm text-primary">pin_drop</span>
                                            Bekasi Selatan (1.8 km)
                                        </span>
                                        <div class="flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-primary"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="font-label-md text-label-md text-on-surface font-bold">4.9</span>
                                            <span class="font-label-sm text-label-sm text-outline">(128)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight mb-space-xs group-hover:text-primary transition-colors">
                                        Grand Futsal Arena Galaxy
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div class="bg-surface-container p-space-sm rounded-lg mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-primary font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">grass</span>
                                            <span class="">Rumput Sintetis FIFA Standard</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                            <span class="">• Shower Air Hangat</span>
                                            <span class="">• Kantin Lengkap</span>
                                            <span class="">• Parkir Luas</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-outline uppercase block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-primary font-bold">Rp
                                                175.000</span>
                                            <span class="font-body-sm text-body-sm text-outline">/ jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-primary hover:bg-primary-container text-on-primary px-space-md py-space-sm rounded-lg font-label-md text-label-md font-bold transition-all shadow-md active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 2: Smash Hall Badminton Center -->
                        <article
                            class="bg-surface-container-low rounded-xl overflow-hidden shadow-xl flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-surface-container overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Interior wide angle of an elite multi-court badminton facility with green Li-Ning tournament mats, crisp white court boundary lines, high ceilings with glare-free linear lighting, and spectator benches in deep athletic midnight slate."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBb8h6GrDKT8HO7kSIzsMjDNkKssvpQ5o-BqYsqyAyisAfDCrzHd2quoKX2ZCC1eOjGpozVC_5bu5H-qLEfolqgXq2C5bDqpZ8kLedQhszq9x86UrNShHIieeqV8Zztpu0v3Ly9j4vOKOVC8pkjSJ-7F2HI1ac8eK74qnqTTAIDPAE2rGUN7RsBEhgmIIDVE06kwLi6Hn3VMSltH2nqY1mL5UJuJHztWMG0ty0e8VqqHiM7StU5MTJg">
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-surface-dim/80 backdrop-blur-md px-space-sm py-0.5 rounded-full">
                                    <span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-surface-container-lowest/85 backdrop-blur-md px-space-sm py-0.5 rounded-md font-label-sm text-label-sm text-on-surface font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-xs text-primary">sports_tennis</span>
                                    Badminton
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-sm text-primary">pin_drop</span>
                                            Jakarta Barat (3.4 km)
                                        </span>
                                        <div class="flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-primary"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="font-label-md text-label-md text-on-surface font-bold">4.8</span>
                                            <span class="font-label-sm text-label-sm text-outline">(95)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight mb-space-xs group-hover:text-primary transition-colors">
                                        Smash Hall Badminton Center
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div class="bg-surface-container p-space-sm rounded-lg mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-primary font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">layers</span>
                                            <span class="">6 Lapangan Karpet Li-Ning Original</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                            <span class="">• Ruang Ganti Ber-AC</span>
                                            <span class="">• Pro Shop Senar</span>
                                            <span class="">• Minuman Dingin</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-outline uppercase block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-primary font-bold">Rp
                                                90.000</span>
                                            <span class="font-body-sm text-body-sm text-outline">/ jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-primary hover:bg-primary-container text-on-primary px-space-md py-space-sm rounded-lg font-label-md text-label-md font-bold transition-all shadow-md active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 3: Champions Mini Soccer Stadium -->
                        <article
                            class="bg-surface-container-low rounded-xl overflow-hidden shadow-xl flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-surface-container overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Outdoor mini soccer arena at twilight with towering LED floodlight towers, monofilament green turf, covered spectator stands, high digital scoreboard, and camera rigging under an evening athletic sky."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAS2PMLSMsKDZjmsegEvbSYsKodCRggWpZLQ5RyEwy_3WVc-74iCr4dntgjSY8x4hZWF2grpRN8mZGP-8jmZGrSykzm8LSBHH1sRdnh21hfL7p9dHB7V83f23Xffg9JVp00pTrwcsrrAF8jA3cqqHEGfJp4euZeUSMofv629AKInF6rIQq3vmRihyme76U7TEtsTSl9P0LqhCTAN8MsERkqWXoJR5iMNCDh8cwdhT95jjxKLyZavtod">
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-surface-dim/80 backdrop-blur-md px-space-sm py-0.5 rounded-full">
                                    <span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-surface-container-lowest/85 backdrop-blur-md px-space-sm py-0.5 rounded-md font-label-sm text-label-sm text-on-surface font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-xs text-primary">stadium</span> Mini
                                    Soccer
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-sm text-primary">pin_drop</span>
                                            Tangerang Kota (5.1 km)
                                        </span>
                                        <div class="flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-primary"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="font-label-md text-label-md text-on-surface font-bold">4.9</span>
                                            <span class="font-label-sm text-label-sm text-outline">(210)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight mb-space-xs group-hover:text-primary transition-colors">
                                        Champions Mini Soccer Stadium
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div class="bg-surface-container p-space-sm rounded-lg mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-primary font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">videocam</span>
                                            <span class="">Lampu LED &amp; Rekaman Pertandingan HD</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                            <span class="">• Tribun Penonton</span>
                                            <span class="">• Ruang Wasit</span>
                                            <span class="">• Sound System</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-outline uppercase block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-primary font-bold">Rp
                                                350.000</span>
                                            <span class="font-body-sm text-body-sm text-outline">/ jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-primary hover:bg-primary-container text-on-primary px-space-md py-space-sm rounded-lg font-label-md text-label-md font-bold transition-all shadow-md active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 4: Apex Basketball Court -->
                        <article
                            class="bg-surface-container-low rounded-xl overflow-hidden shadow-xl flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-surface-container overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Pristine hardwood maple basketball court inside a sleek indoor sports complex, professional FIBA spring-loaded breakaway hoop system, clear glass backboards, and high-intensity overhead stadium lighting."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDo0zw7fNWpvvuvHdV2dGf0PlDh81kcuYaPxYsaKUelqbs7y8V6k1eRp7sBuynWVYJK4j6LKByH7nG8Y4P6zfR7FuQzUlHB_9pYAHjKR1-R4gnJxXzwvkAnwnzH_RYHqI5C0iFoM6kA-Bqckrk9bgqxlT547YBRAZ6spqi4wWdlcu7Ny1Lv1xWFOOQmvGukJHPU75dqScJ3NuZBQEfQrsSA8PNJSDv8pAY9WGz97fA6pesPH6W2pehs">
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-surface-dim/80 backdrop-blur-md px-space-sm py-0.5 rounded-full">
                                    <span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-surface-container-lowest/85 backdrop-blur-md px-space-sm py-0.5 rounded-md font-label-sm text-label-sm text-on-surface font-semibold flex items-center gap-1">
                                    <span
                                        class="material-symbols-outlined text-xs text-primary">sports_basketball</span>
                                    Basket
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-sm text-primary">pin_drop</span>
                                            Jakarta Selatan (2.1 km)
                                        </span>
                                        <div class="flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-primary"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="font-label-md text-label-md text-on-surface font-bold">4.7</span>
                                            <span class="font-label-sm text-label-sm text-outline">(80)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight mb-space-xs group-hover:text-primary transition-colors">
                                        Apex Basketball Court
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div class="bg-surface-container p-space-sm rounded-lg mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-primary font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">sports_score</span>
                                            <span class="">Lantai Kayu Maple &amp; Ring FIBA</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                            <span class="">• Digital Shot Clock</span>
                                            <span class="">• Loker Pemain</span>
                                            <span class="">• Full Indoor AC</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-outline uppercase block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-primary font-bold">Rp
                                                220.000</span>
                                            <span class="font-body-sm text-body-sm text-outline">/ jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-primary hover:bg-primary-container text-on-primary px-space-md py-space-sm rounded-lg font-label-md text-label-md font-bold transition-all shadow-md active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 5: Center Court Tennis Club -->
                        <article
                            class="bg-surface-container-low rounded-xl overflow-hidden shadow-xl flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-surface-container overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Professional blue and emerald hard court tennis surface with clean white regulation lines, sturdy tennis net, ITF standard surroundings, ball boy bench, and palm trees around an upscale athletic club."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB61NIeYO414yvwFAZmXr3L0nF0TskZru3v9wd9EeVetHxX-9oDtCZ_muxVteLvyoYh4n58WtnB52n7UdJdhWPZpH_ouI-X1y8JCUl-gngZI2aYfwPYWemlX2MBun6X5JjJ_QLXNxahnN4CDdEYbuoaTXOccb7liqLiRLsumT4hy2jBPDio9uMwyO3t_H2rfKf_qBlbn3I2ZdYSWxO4Q1WN60c0epcO4IS16QXH9RJtzO8sglZI-DrF">
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-surface-dim/80 backdrop-blur-md px-space-sm py-0.5 rounded-full">
                                    <span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-surface-container-lowest/85 backdrop-blur-md px-space-sm py-0.5 rounded-md font-label-sm text-label-sm text-on-surface font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-xs text-primary">sports_baseball</span>
                                    Tenis
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-sm text-primary">pin_drop</span>
                                            Jakarta Pusat (4.2 km)
                                        </span>
                                        <div class="flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-primary"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="font-label-md text-label-md text-on-surface font-bold">4.8</span>
                                            <span class="font-label-sm text-label-sm text-outline">(64)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight mb-space-xs group-hover:text-primary transition-colors">
                                        Center Court Tennis Club
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div class="bg-surface-container p-space-sm rounded-lg mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-primary font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">sports</span>
                                            <span class="">Hard Court Standar ITF Internasional</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                            <span class="">• Ball Boy Ready</span>
                                            <span class="">• Sewa Raket Babolat</span>
                                            <span class="">• Cafe Lounge</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-outline uppercase block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-primary font-bold">Rp
                                                150.000</span>
                                            <span class="font-body-sm text-body-sm text-outline">/ jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-primary hover:bg-primary-container text-on-primary px-space-md py-space-sm rounded-lg font-label-md text-label-md font-bold transition-all shadow-md active:scale-95 flex items-center gap-1"
                                        type="button">
                                        <span class="">Lihat Jadwal</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Card 6: Vortex Futsal & Gym -->
                        <article
                            class="bg-surface-container-low rounded-xl overflow-hidden shadow-xl flex flex-col group transition-all duration-300 hover:-translate-y-1">
                            <!-- Card Media Container -->
                            <div class="relative w-full h-52 bg-surface-container overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="High quality multi-purpose indoor vinyl futsal arena with shock-absorbing blue athletic flooring, yellow boundary lines, padded perimeter walls, digital scoreboard, and modern gym facilities visible in the background."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJMq6PSYNh-cUOCQKvlpl2Z1afpHJkVtHRJsEV1Xq9SWyo0VHDMdTvBv5uP3mUwdWqyANBngBIML65JBr1ntnGLVM9ZxYHtZg4l2uKVRa9220VDZ6S4j3In9S5cK_Abn5c4gwjrbUYg2F1cZSojrDvUqf200ek-GGIBXIIsoBd5cCHmWxyFS6iS-iqrZ5mMZuEHFazaOQHiiLUZgM-H7iWUaBgkd1wM-kuRkIWGxj1u8HHsrlL2TYf">
                                <div
                                    class="absolute top-3 left-3 flex items-center gap-1.5 bg-surface-dim/80 backdrop-blur-md px-space-sm py-0.5 rounded-full">
                                    <span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                                    <span
                                        class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wide">Tersedia
                                        Hari Ini</span>
                                </div>
                                <div
                                    class="absolute top-3 right-3 bg-surface-container-lowest/85 backdrop-blur-md px-space-sm py-0.5 rounded-md font-label-sm text-label-sm text-on-surface font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-xs text-primary">sports_soccer</span>
                                    Futsal
                                </div>
                            </div>
                            <!-- Card Content Body -->
                            <div class="p-space-md flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-1">
                                        <span class="font-body-sm text-body-sm text-outline flex items-center gap-1">
                                            <span
                                                class="material-symbols-outlined text-sm text-primary">pin_drop</span>
                                            Depok Margonda (3.9 km)
                                        </span>
                                        <div class="flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded">
                                            <span class="material-symbols-outlined text-sm text-primary"
                                                style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span
                                                class="font-label-md text-label-md text-on-surface font-bold">4.6</span>
                                            <span class="font-label-sm text-label-sm text-outline">(45)</span>
                                        </div>
                                    </div>
                                    <h3
                                        class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight mb-space-xs group-hover:text-primary transition-colors">
                                        Vortex Futsal &amp; Gym
                                    </h3>
                                    <!-- Surface Tag & Facilities Specs -->
                                    <div class="bg-surface-container p-space-sm rounded-lg mb-space-sm space-y-1">
                                        <div
                                            class="flex items-center gap-1 text-primary font-label-md text-label-md font-bold">
                                            <span class="material-symbols-outlined text-sm">grid_on</span>
                                            <span class="">Lapangan Vinyl High Grip Standard</span>
                                        </div>
                                        <div
                                            class="flex flex-wrap items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                            <span class="">• Locker Room Aman</span>
                                            <span class="">• Free High-speed Wi-Fi</span>
                                            <span class="">• Area Fitness</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing & Reserve CTA Strip -->
                                <div class="pt-space-sm flex items-center justify-between">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-outline uppercase block">Harga
                                            Sewa</span>
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-primary font-bold">Rp
                                                130.000</span>
                                            <span class="font-body-sm text-body-sm text-outline">/ jam</span>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-primary hover:bg-primary-container text-on-primary px-space-md py-space-sm rounded-lg font-label-md text-label-md font-bold transition-all shadow-md active:scale-95 flex items-center gap-1"
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
                        class="mt-space-2xl pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md">
                        <div class="font-body-sm text-body-sm text-outline">
                            Menampilkan <span class="text-on-surface font-bold">1 - 6</span> dari <span
                                class="text-on-surface font-bold">48</span> arena tersedia
                        </div>
                        <div class="flex items-center gap-space-xs">
                            <button aria-label="Previous Page"
                                class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-outline hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </button>
                            <button
                                class="w-10 h-10 rounded-lg bg-primary text-on-primary font-headline-sm text-headline-sm flex items-center justify-center shadow-sm"
                                type="button">
                                1
                            </button>
                            <button
                                class="w-10 h-10 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high font-headline-sm text-headline-sm flex items-center justify-center transition-colors"
                                type="button">
                                2
                            </button>
                            <button
                                class="w-10 h-10 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high font-headline-sm text-headline-sm flex items-center justify-center transition-colors"
                                type="button">
                                3
                            </button>
                            <span class="w-8 text-center text-outline font-data-mono">...</span>
                            <button
                                class="w-10 h-10 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high font-headline-sm text-headline-sm flex items-center justify-center transition-colors"
                                type="button">
                                8
                            </button>
                            <button aria-label="Next Page"
                                class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-lg">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Community Trust & Live Activity Footprint -->
            <section class="relative w-full px-gutter py-space-xl bg-surface-container-low">
                <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                    <div class="bg-surface-container p-space-lg rounded-xl flex items-start gap-space-md shadow-md">
                        <div class="p-3 bg-surface-variant rounded-lg text-primary shrink-0"><span
                                class="material-symbols-outlined text-3xl">sports</span></div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-on-surface font-bold">Standard Federasi
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">Setiap
                                lapangan dikurasi secara ketat mencakup dimensi resmi, pencahayaan minimum 300 lux, dan
                                material lantai teruji.</p>
                        </div>
                    </div>
                    <div class="bg-surface-container p-space-lg rounded-xl flex items-start gap-space-md shadow-md">
                        <div class="p-3 bg-surface-variant rounded-lg text-primary shrink-0"><span
                                class="material-symbols-outlined text-3xl">security_update_good</span></div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-on-surface font-bold">Jaminan Slot Resmi
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">Sistem
                                sinkronisasi langsung dengan pengelola venue. Tanpa risiko jadwal ganda atau pemesanan
                                bertumpuk.</p>
                        </div>
                    </div>
                    <div class="bg-surface-container p-space-lg rounded-xl flex items-start gap-space-md shadow-md">
                        <div class="p-3 bg-surface-variant rounded-lg text-primary shrink-0"><span
                                class="material-symbols-outlined text-3xl">group</span></div>
                        <div>
                            <div class="font-headline-sm text-headline-sm text-on-surface font-bold">Komunitas Main
                                Bareng</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">
                                Kekurangan
                                pemain? Aktifkan fitur 'Open Sparring' dan undang atlet lokal terdekat langsung ke match
                                Anda.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive JavaScript for micro-interactions -->
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    // Dynamic button state toggle
                    const sportButtons = document.querySelectorAll('section:nth-of-type(2) button');
                    sportButtons.forEach(btn => {
                        btn.addEventListener('click', () => {
                            sportButtons.forEach(b => {
                                b.className =
                                    'flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface transition-all active:scale-95 shadow-sm';
                                const icon = b.querySelector('.material-symbols-outlined');
                                if (icon) icon.className =
                                    'material-symbols-outlined text-primary text-xl';
                            });
                            btn.className =
                                'flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-primary text-on-primary transition-all shadow-md';
                            const activeIcon = btn.querySelector('.material-symbols-outlined');
                            if (activeIcon) activeIcon.className =
                                'material-symbols-outlined text-xl text-on-primary';
                        });
                    });
                });
            </script>
        </div>
    </main>
    <footer class="w-full bg-surface-container-lowest py-space-2xl text-on-surface-variant">
        <div class="w-full px-gutter">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl mb-space-2xl">
                <div class="lg:col-span-2 space-y-space-md">
                    <div class="flex items-center gap-space-sm"><img alt="locArena Logo"
                            class="h-8 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida/AEtjO1W9vARxAlbj6B4U9rcHs4SOJjdW3banBuEFMrdmi-ALAU9jLfWjWKGJSMPS1kWSD6vRUNrS7u2LS4fpzbuOEf9PuzHbS3v7N8-IZQMvfLAPtGBFL0DerXJmpI6-kBgZ6YjshU9uCBw5_hYSo3463kRB9qU-2cOItVCI9JGRI-8wyCB4gxT8uIQCECbVOK16aVXQUJMyWVpv6H91oaTzStVLE6MnQgxgN7kAyTXhOOVYk3khQrv44RzHiQ">
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-sm">Platform digital sewa
                        lapangan
                        dan arena olahraga modern di Indonesia. Temukan, pesan waktu main dengan konfirmasi instan dan
                        digital pass otomatis.</p>
                    <div class="space-y-space-xs pt-space-xs text-body-sm font-body-sm text-outline">
                        <p class="">© 2025 locArena Indonesia. Hak Cipta Dilindungi Undang-Undang.</p>
                        <div class="flex flex-wrap items-center gap-space-md text-xs"><a
                                class="hover:text-on-surface transition-colors" href="#">Ketentuan
                                Layanan</a><span class="text-outline/40">•</span><a
                                class="hover:text-on-surface transition-colors" href="#">Kebijakan
                                Privasi</a><span class="text-outline/40">•</span><a
                                class="hover:text-on-surface transition-colors" href="#">Keamanan Transaksi</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="font-label-lg text-label-lg text-on-surface mb-space-md uppercase font-bold tracking-wider">
                        Kategori Populer</div>
                    <ul class="space-y-space-sm font-body-md text-body-md">
                        <li class=""><a class="hover:text-primary transition-colors" data-path="futsal-arenas"
                                href="#">Sewa Lapangan Futsal</a></li>
                        <li class=""><a class="hover:text-primary transition-colors"
                                data-path="badminton-courts" href="#">Sewa Hall Badminton</a></li>
                        <li class=""><a class="hover:text-primary transition-colors"
                                data-path="mini-soccer-pitches" href="#">Sewa Lapangan Mini Soccer</a></li>
                        <li class=""><a class="hover:text-primary transition-colors"
                                data-path="basketball-arenas" href="#">Sewa Lapangan Basket</a></li>
                        <li class=""><a class="hover:text-primary transition-colors" data-path="tennis-courts"
                                href="#">Sewa Lapangan Tenis</a></li>
                    </ul>
                </div>
                <div>
                    <div
                        class="font-label-lg text-label-lg text-on-surface mb-space-md uppercase font-bold tracking-wider">
                        Pusat Bantuan</div>
                    <ul class="space-y-space-sm font-body-md text-body-md">
                        <li class=""><a class="hover:text-primary transition-colors" data-path="support-center"
                                href="#">Customer Support</a></li>
                        <li class=""><a class="hover:text-primary transition-colors" data-path="support-center"
                                href="#">Kebijakan Reschedule</a></li>
                        <li class=""><a class="hover:text-primary transition-colors" data-path="support-center"
                                href="#">Sistem Arena Pass QR</a></li>
                        <li class=""><a class="hover:text-primary transition-colors" data-path="support-center"
                                href="#">Daftarkan Arena Anda</a></li>
                    </ul>
                </div>
                <div>
                    <div
                        class="font-label-lg text-label-lg text-on-surface mb-space-md uppercase font-bold tracking-wider">
                        Unduh Aplikasi</div>
                    <p class="font-body-sm text-body-sm text-outline mb-space-sm">Dapatkan tiket check-in turnstile
                        offline di ponsel Anda.</p>
                    <div class="space-y-space-xs">
                        <div
                            class="bg-surface-container hover:bg-surface-container-high transition-colors p-space-sm rounded-lg flex items-center gap-space-sm cursor-pointer">
                            <span class="material-symbols-outlined text-primary text-2xl">install_mobile</span>
                            <div>
                                <div class="font-label-sm text-label-sm text-outline">Tersedia di</div>
                                <div class="font-label-md text-label-md text-on-surface">Google Play &amp; App Store
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
