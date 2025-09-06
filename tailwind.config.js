import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose, // Or any other red shade from colors
                warning: colors.yellow, // Or any other yellow shade from colors
                // You can also define primary, success, etc. here
            },
        },
    },
};
