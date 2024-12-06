const path = require('path');
const generatePalette = require(path.resolve(__dirname, ('dev/tailwind/utils/generate-palette')));

const customPalettes = {
        primary: generatePalette('#355689'),
        accent: generatePalette('#c02b6b'),
};

module.exports = {
        content: [
                "./resources/*",
                "./resources/**/**/*.blade.php",
                "./resources/**/*.js",
                "./resources/**/*.vue",
        ],
        safelist: [
                'col-span-1',
                'col-span-2',
                'col-span-3',
                'col-span-4',
                'col-span-5',
                'col-span-6',
                'col-span-7',
                'col-span-8',
                'sm:order-1',
                'sm:order-2',
                'sm:order-3',
                'sm:order-4',
                'sm:order-5',
                'sm:order-6',
                'sm:order-7',
                'sm:order-8',
                'sm:order-9',
                'sm:order-10',
                'bg-[#F8F9FB]',
                'bg-white'
            ],
        theme: {
                extend: {
                        colors: {
                                primary: customPalettes.primary,
                                accent: customPalettes.accent
                        },

                        fontFamily: {
                                'sans': ['Nunito'],
                                'display': ['Nunito'],
                                'mono': ['Nunito'],
                                'body': ['Nunito'],
                                'title': ['Lato']
                        },
                        screens: {
                                lg: '1024px',
                                sm: { max: '1023px' }
                        },
                },
        },
        plugins: [],
}

