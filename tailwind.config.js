import preset from './vendor/filament/support/tailwind.config.preset'
export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        './app/Filament/**/*.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                background: "#ffffff",
                foreground: "#03272C",
                primary: "#088395",
                "primary-foreground": "#ffffff",
                secondary: "#EBF4F6",
                "secondary-foreground": "#088395",
                accent: "#03272C",
                "accent-foreground": "#ffffff",
                border: "#CCF0F5",
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}


