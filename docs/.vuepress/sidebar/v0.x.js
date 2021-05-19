var sidebar = [
    {
        title: 'The package',   // required
        sidebarDepth: 1,
        collapsable: false,
        children: [
            ['', 'Introduction'],
            ['install/', 'Installation']
        ]
    },
    {
        title: 'Usage',   // required
        sidebarDepth: 2,
        collapsable: false,
        children: [
            ['models/', 'Models'],
            ['models/plan-subscription-schedule.md', 'Plan Subscription Schedule']
        ]
    }
]

module.exports = {sidebar}
