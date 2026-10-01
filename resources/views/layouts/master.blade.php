<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
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
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#e0e3e5",
                        "surface-container": "#eceef0",
                        "inverse-on-surface": "#eff1f3",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#6c748b",
                        "on-error-container": "#93000a",
                        "error": "#ba1a1a",
                        "surface": "#f7f9fb",
                        "surface-container-low": "#f2f4f6",
                        "surface-variant": "#e0e3e5",
                        "on-error": "#ffffff",
                        "on-secondary-container": "#00714d",
                        "outline-variant": "#bccac0",
                        "on-primary": "#ffffff",
                        "tertiary-fixed-dim": "#bec6e0",
                        "tertiary-fixed": "#dae2fd",
                        "on-tertiary-container": "#fefcff",
                        "primary-fixed": "#85f8c4",
                        "outline": "#6d7a72",
                        "secondary-container": "#6cf8bb",
                        "surface-tint": "#006c4a",
                        "secondary-fixed-dim": "#4edea3",
                        "secondary-fixed": "#6ffbbe",
                        "on-tertiary-fixed": "#131b2e",
                        "surface-dim": "#d8dadc",
                        "primary": "#006948",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#002114",
                        "surface-bright": "#f7f9fb",
                        "primary-fixed-dim": "#68dba9",
                        "on-secondary-fixed": "#002113",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed-variant": "#005137",
                        "surface-container-high": "#e6e8ea",
                        "inverse-primary": "#68dba9",
                        "inverse-surface": "#2d3133",
                        "background": "#f7f9fb",
                        "on-primary-container": "#f5fff7",
                        "primary-container": "#00855d",
                        "secondary": "#006c49",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "on-background": "#191c1e",
                        "tertiary": "#545c72",
                        "on-secondary-fixed-variant": "#005236",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#3d4a42",
                        "on-surface": "#191c1e"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin": "3rem",
                        "space-sm": "0.5rem",
                        "space-xxl": "3.5rem",
                        "gutter-mobile": "1rem",
                        "space-xl": "2.25rem",
                        "margin-mobile": "1.25rem",
                        "space-lg": "1.5rem",
                        "gutter": "1.5rem",
                        "space-md": "1rem",
                        "space-xs": "0.25rem"
                    },
                    "fontFamily": {
                        "headline-md": ["Outfit"],
                        "label-md": ["Outfit"],
                        "headline-lg": ["Outfit"],
                        "display-hero-mobile": ["Outfit"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "label-tag": ["Outfit"],
                        "headline-xl-mobile": ["Outfit"],
                        "headline-xl": ["Outfit"],
                        "display-hero": ["Outfit"],
                        "headline-sm": ["Outfit"],
                        "body-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-lg": ["Outfit"],
                        "label-sm": ["Outfit"],
                        "data-mono": ["Outfit"]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface">

    <!-- Manggil file navbar -->
    @include('navbar')

    <!-- Nyediain tempat kosong dengan nama 'isi' -->
    @yield('isi')

    <!-- Manggil file footer -->
    @include('footer')

</body>
</html>
