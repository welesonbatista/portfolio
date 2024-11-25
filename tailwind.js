tailwind.config = {
    theme: {
        extend: {
            colors: {
                'red': '#E3646E',
                'purple': '#BB72E9',
                'blue': '#3996DB',
                'green': '#82BC4F',
                'yellow': '#EABD5F',
                'gray-100': '#0D0E11',
                'gray-200': '#16181D',
                'gray-300': '#292C34',
                'gray-400': '#878EA1',
                'gray-500': '#C0C4CE',
                'gray-600': '#E2E4E9',
            },
            fontFamily: {
                'asap': ["Asap", "sans-serif"],
                'inconsolata': ["Inconsolata", "sans-serif"],
                'maven': ["Maven Pro", "sans-serif"],
            },
            backgroundImage: {
                'intro': "url('img/Background_Intro.png')",
                'contacts': "url('img/background_Contacts.png')",
            },
            lineHeight: {
                '120': '120%',
                '140': '140%',
            },
            boxShadow: {
                'grayBorderHover': '0px 0px 0px 1.5px #878EA1',
                'blueBorderHover': '0px 0px 0px 1.5px #3996DB',

            },

        }
    }
}