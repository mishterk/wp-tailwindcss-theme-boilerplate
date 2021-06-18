module.exports = {
    mode: 'jit',
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: {
        content: [
            './*.php',
            './templates/**/*.php',
            './build/js/**/*.js',
        ],
        options: {
            safelist: [],
            blocklist: [],
            keyframes: true,
            fontFace: true,
        },
    },
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
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
