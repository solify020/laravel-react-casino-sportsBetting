export default {
    TOKEN: '209564-ijX51jktAU58A5',
    SPORTS_LIST: [{
            SportId: '4',
            name: 'Football'
        },
        {
            SportId: '5',
            name: 'Tennis'
        },
        {
            SportId: '16',
            name: 'Handball'
        },
        {
            SportId: '12',
            name: 'Ice Hockey'
        },
        {
            SportId: '11',
            name: 'American Football'
        },
        {
            SportId: '70',
            name: 'Futsal'
        },
        {
            SportId: '56',
            name: 'Table Tennis'
        },
        {
            SportId: '32',
            name: 'Rugby Union'
        },
        {
            SportId: '24',
            name: 'Boxing'
        },
        {
            SportId: '6',
            name: 'Formula 1'
        },
        {
            SportId: '40',
            name: 'Motorbikes'
        },
        {
            SportId: '9',
            name: 'Alpine Skiing'
        },
        {
            SportId: '7',
            name: 'Basketball'
        },
        {
            SportId: '18',
            name: 'Volleyball'
        },
        {
            SportId: '23',
            name: 'Baseball'
        },
        {
            SportId: '33',
            name: 'Snooker'
        },
        {
            SportId: '22',
            name: 'Cricket'
        },
        {
            SportId: '34',
            name: 'Darts'
        },
        {
            SportId: '44',
            name: 'Badminton'
        },
        {
            SportId: '66',
            name: 'Bowls'
        },
        {
            SportId: '31',
            name: 'Rugby League'
        },
        {
            SportId: '36',
            name: 'Aussie Rules'
        },
        {
            SportId: '13',
            name: 'Golf'
        },
        {
            SportId: '10',
            name: 'Cycling'
        },
        {
            SportId: '64',
            name: 'Biathlon'
        },
    ],
    SPORTS: {
        '4': 'Football',
        '5': 'Tennis',
        '7': 'Basketball',
        '11': 'American Football',
        '12': 'Ice Hockey',
        '16': 'Handball',
        '18': 'Volleyball',
        '22': 'Cricket',
        '23': 'Baseball',
        '24': 'Boxing',
        '31': 'Rugby League',
        '32': 'Rugby Union',
        '33': 'Snooker',
        '34': 'Darts',
        '56': 'Table Tennis',
    },

    API: {
        LIVE_ENDPOINT: 'https://api.betsapi.com/v1/bwin/inplay',
        PRE_ENDPOINT: 'https://api.betsapi.com/v1/bwin/prematch',
        RESULT_ENDPOINT: 'https://api.betsapi.com/v1/bwin/result',
        EVENT_ENDPOINT: 'https://api.betsapi.com/v1/bwin/event',
        LIVE_TIME: '*/10 * * * * *',
        END_TIME: '*/30 * * * * *',
        PRE_TIME: '*/30 * * * *',
    },
    filterList: {
        '4': [
            { value: 'Match Result', pure: true },
            { value: '1st Half Result', pure: true },
            { value: '2nd Half Result', pure: true },
            { value: 'Double Chance', pure: true },
            { value: '1st Half - Double Chance', pure: true },
            { value: '2nd Half - Double Chance', pure: true },
            { value: 'Total Goals', pure: true },
            { value: '1st Half - Total Goals', pure: true },
            { value: '2nd Half - Total Goals', pure: true },
            { value: 'Both Teams To Score', pure: true },
            { value: 'Both Teams To Score 1st Half', pure: true },
            { value: 'Both Teams To Score 2nd Half', pure: true },
            { value: 'Odd/Even - Total Goals', pure: true },
            { value: 'Odd/Even - Total Goals - 1st Half', pure: true },
            { value: 'Odd/Even - Total Goals - 2nd Half', pure: true },
            { value: 'Correct Score', pure: true },
            { value: '1st Half - Correct Score', pure: true },
            { value: '2nd Half - Correct Score', pure: true },
            { value: 'Over/Under Total Goals', pure: true },
            { value: '1st Half - Total Goals', pure: true },
            { value: '2nd Half - Total Goals', pure: true },
            { value: 'Draw No Bet', pure: true },
            { value: 'Both Teams to Score and Either Team to Win', pure: true },
            { value: 'Correct Score', pure: true },
            { value: 'Exact Total Goals', pure: true },
            { value: '1st Half - Total Goals - Exact', pure: true },
            { value: '2nd Half - Total Goals - Exact', pure: true },

            { value: 'Match Won by 1 Goal Exactly', startsWith: 'Match Won by ' },
            { value: '3way Handicap (1) - Regular Time', startsWith: '3way Handicap (' }
        ],
        '5': [
            { value: 'Match Winner', pure: true },
            { value: 'Set Betting', pure: true },
            // { value: 'Total Games - Match', pure: true },

            { value: 'Set 3 Winner', startsWith: 'Set ', has: 'Winner' },
            { value: 'Correct Score - Set 3', startsWith: 'Correct Score - Set ' },
            { value: 'Tie-Break in Set 3', startsWith: 'Tie-Break in Set ' },
            { value: 'Total Games - Set 3', startsWith: 'Total Games - Set ' },
        ],
        '7': [
            { value: '1st Half Money Line', pure: true },
            { value: '2nd Half Money Line', pure: true },
            { value: 'Three Way (Regular time only)', pure: true },
            { value: 'Three Way - (1st Half)', pure: true },
            { value: 'Three Way - (2nd Half)', pure: true },
            { value: 'How many points will be scored in the game? (Regular time only)', pure: true },
            { value: 'Will the final score be odd or even?', pure: true },
            { value: 'Totals', pure: true },
            { value: '1st Half Totals', pure: true },
            { value: '2nd Half Totals', pure: true },
            { value: 'Handicap', pure: true },
            { value: '1st Half Handicap', pure: true },
            { value: '2nd Half Handicap', pure: true },

            { value: 'Money Line', startsWith: 'Money Line' },
            { value: 'Three Way - (1nd Quarter)', startsWith: 'Three Way - (' },
        ],
        '56': [
            { vlaue: '2Way - Who will win?' },
            { vlaue: 'Set Bet' },
            { vlaue: 'Total Points Handicap' },

            { value: 'Number of points scored in 4th set?', startsWith: 'Number of points scored in ' },
            { value: 'How many points will scored in the 4th set?', startsWith: 'How many points will scored in the ' },
            { value: 'Correct Score (Set 4)', startsWith: 'Correct Score (Set ' },
            { value: 'Set 4 Winner', startsWith: 'Set ' },
        ],
        '18': [
            '2Way - Who will win?',
            'How many sets will be played in the match?',
            'Total Points Handicap',
            'Will the total number of points in the match be odd or even?',
            'How many points will be scored in total?',
            'Who will win the match (set handicap)?',

            'Correct Score (Set 3)',
            'How many points will be scored in the 3rd set?',
            'Which team will win the 3rd set?'
        ],
        '34': [
            'Match Winner'
        ],
        '12': [
            '3-Way - Result After Regular Time',
            '3 Way Handicap (regular time)',
            'Handicap (regular time)',
            'Double Chance (regular time)',
            '2-Way (Incl. Overtime And Penalties)',
            'How many goals will be scored (regular time)?',
            'Totals (regular time)',
            'Correct Score Regular Time'
        ],
        '16': [
            'Match Result',
            'Handicap',
            'Totals',
            'Will the final total be odd or even?',
            'Half time result',
            '1st Half Totals',
            '1st Half Handicap',

            '3 Way Handicap (regular time) '
        ],
        '11': [
            { value: 'Money Line', pure: true },
            { value: '1st Half Money Line', pure: true },
            { value: '2nd Half Money Line', pure: true },
            { value: 'Totals', pure: true },
            { value: '1st Half Totals', pure: true },
            { value: '2nd Half Totals', pure: true },
            { value: 'Spread', pure: true },
            { value: 'Both Teams To Score', pure: true },
            { value: 'Will the total number of points in the match be odd or even?', pure: true },
        ],
        '22': [
            '2 Way - Who will win? (Dead heat rules apply)'
        ],
        '31': [
            '3Way - result',
            'Handicap',
            'Totals',

            '3way Handicap'
        ],
        '32': [
            '3Way - result',
            'Handicap',

            '3way Handicap',
            '2way - who will win (Draw no bet)'
        ]
    }
};