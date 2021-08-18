module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './functions.php',
            './header.php',
            './footer.php',
            './index.php',
            './templates/**/*.php',
            './assets/**/*.js',
            './tailwind-purge-safelist.txt',
        ],
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        container: {
            center: true,
            padding: '1.5rem',
        },
        extend: {
            colors: {
                link: {
                    DEFAULT: '#3182ce',
                    'hover': '#63b3ed',
                }
            },
            fontSize: {
                xxs: '0.675rem',
            },
            lineHeight: {
                tighter: '1.125',
            },
        }
    },
    variants: {
        extend: {},
    },
}