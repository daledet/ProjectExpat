module.exports = {
    purge: [],
    theme: {
        customForms: theme => ({
            default: {
                input: {
                    borderRadius: theme('borderRadius.lg'),
                    backgroundColor: theme('colors.gray.200'),
                    '&:focus': {
                        backgroundColor: theme('colors.white'),
                    }
                },
                select: {
                    borderRadius: theme('borderRadius.lg'),
                    boxShadow: theme('boxShadow.default'),
                },
                checkbox: {
                    width: theme('spacing.6'),
                    height: theme('spacing.6'),
                },
            },
        }),
        extend: {},
    },
    variants: {},
    plugins: [
        require('@tailwindcss/custom-forms'),
    ]
}
