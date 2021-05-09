module.exports = {
    title: 'Laravel Subby Schedule',
    description: 'Laravel Subby Schedules scheduling extension for Laravel Subby.',

    /**
     * Extra tags to be injected to the page HTML `<head>`
     *
     * ref：https://v1.vuepress.vuejs.org/config/#head
     */
    head: [
        ['meta', {name: 'theme-color', content: '#3eaf7c'}],
        ['meta', {name: 'apple-mobile-web-app-capable', content: 'yes'}],
        ['meta', {name: 'apple-mobile-web-app-status-bar-style', content: 'black'}]
    ],
    base: '/laravel-subby-schedule/',
    /**
     * Theme configuration, here is the default theme configuration for VuePress.
     *
     * ref：https://v1.vuepress.vuejs.org/theme/default-theme-config.html
     */
    themeConfig: {
        repo: 'https://github.com/bpuig/laravel-subby-schedule',
        editLinks: false,
        docsDir: '',
        editLinkText: '',
        lastUpdated: true,
        nav: [
            {text: 'Home', link: '/'},
        ],
        sidebar: [
            {
                title: 'The package',   // required
                sidebarDepth: 1,
                collapsable: false,
                children: [
                    ['/', 'Introduction'],
                    ['/install/', 'Installation']
                ]
            },
            {
                title: 'Usage',   // required
                sidebarDepth: 2,
                collapsable: false,
                children: [
                    ['/models/', 'Models'],
                    ['/extras/plan-subscription-schedule.md', 'Plan Subscription Schedule']
                ]
            }
        ]
    },

    /**
     * Apply plugins，ref：https://v1.vuepress.vuejs.org/zh/plugin/
     */
    plugins: [
        '@vuepress/plugin-back-to-top',
        '@vuepress/plugin-medium-zoom',
    ]
}
