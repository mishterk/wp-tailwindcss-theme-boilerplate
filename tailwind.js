module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: [
        './*.php',
        './templates/**/*.php',
        './build/js/**/*.js',
    ],
    theme: {
        container: {
            padding: '1.5rem',
        },
        extend: {
            colors: {
                link: {
                    'default': '#3182ce',
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
