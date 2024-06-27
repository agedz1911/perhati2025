import preset from "./vendor/filament/support/tailwind.config.preset";
import daisyui from "daisyui";
export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    plugins: [daisyui],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#12599e",
                    secondary: "#5400fe",
                    accent: "#198754",
                    neutral: "#e5e7eb",
                    info: "#0000ff",
                    success: "#00ff00",
                    warning: "#f2e900",
                    error: "#ff0000",
                },
            },
        ],
    },
    theme: {
        extend: {
            colors: {
                endeavour: {
                    50: "#f1f7fe",
                    100: "#e3eefb",
                    200: "#c0dcf7",
                    300: "#88c0f1",
                    400: "#49a1e7",
                    500: "#2185d6",
                    600: "#1368b6",
                    700: "#12599e",
                    800: "#12487a",
                    900: "#153d65",
                    950: "#0e2743",
                },
            },
        },
    },
};
