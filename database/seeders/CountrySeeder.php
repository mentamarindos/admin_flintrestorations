<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Country::factory(10)->create();
        DB::table('countries')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Cameroon',
                'code' => 'cm',
                'dialing_code' => '237',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Benin',
                'code' => 'bj',
                'dialing_code' => '229',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Madagascar',
                'code' => 'mg',
                'dialing_code' => '261',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Rwanda',
                'code' => 'rw',
                'dialing_code' => '250',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Seychelles',
                'code' => 'sc',
                'dialing_code' => '248',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Cote d’Ivoire',
                'code' => 'ci',
                'dialing_code' => '225',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Egypt',
                'code' => 'eg',
                'dialing_code' => '20',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Mauritius',
                'code' => 'mu',
                'dialing_code' => '230',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Burkina Faso',
                'code' => 'bf',
                'dialing_code' => '226',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Eritrea',
                'code' => 'er',
                'dialing_code' => '291',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Sao Tome and Principe',
                'code' => 'st',
                'dialing_code' => '239',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Angola',
                'code' => 'ao',
                'dialing_code' => '244',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Libya',
                'code' => 'ly',
                'dialing_code' => '218',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Zimbabwe',
                'code' => 'zw',
                'dialing_code' => '263',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Guinea',
                'code' => 'gn',
                'dialing_code' => '224',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Sierra Leone',
                'code' => 'sl',
                'dialing_code' => '232',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Reunion',
                'code' => 're',
                'dialing_code' => '262',
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Gabon',
                'code' => 'ga',
                'dialing_code' => '241',
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Ghana',
                'code' => 'gh',
                'dialing_code' => '233',
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Tanzania',
                'code' => 'tz',
                'dialing_code' => '255',
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Mali',
                'code' => 'ml',
                'dialing_code' => '223',
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Somalia',
                'code' => 'so',
                'dialing_code' => '252',
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Mauritania',
                'code' => 'mr',
                'dialing_code' => '222',
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Uganda',
                'code' => 'ug',
                'dialing_code' => '256',
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Chad',
                'code' => 'td',
                'dialing_code' => '235',
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Mayotte',
                'code' => 'yt',
                'dialing_code' => '262',
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Comoros',
                'code' => 'km',
                'dialing_code' => '269',
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Botswana',
                'code' => 'bw',
                'dialing_code' => '267',
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'Senegal',
                'code' => 'sn',
                'dialing_code' => '221',
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Eswatini',
                'code' => 'sz',
                'dialing_code' => '268',
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'Guinea-Bissau',
                'code' => 'gw',
                'dialing_code' => '245',
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'DR Congo',
                'code' => 'cd',
                'dialing_code' => '242',
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Central African Republic',
                'code' => 'cf',
                'dialing_code' => '236',
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Lesotho',
                'code' => 'ls',
                'dialing_code' => '266',
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Congo',
                'code' => 'cg',
                'dialing_code' => '242',
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'South Africa',
                'code' => 'za',
                'dialing_code' => '27',
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'Liberia',
                'code' => 'lr',
                'dialing_code' => '231',
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Tunisia',
                'code' => 'tn',
                'dialing_code' => '216',
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Zambia',
                'code' => 'zm',
                'dialing_code' => '260',
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'Niger',
                'code' => 'ne',
                'dialing_code' => '227',
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'Western Sahara',
                'code' => 'eh',
                'dialing_code' => '212',
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'Togo',
                'code' => 'tg',
                'dialing_code' => '228',
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'Namibia',
                'code' => 'na',
                'dialing_code' => '264',
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'Mozambique',
                'code' => 'mz',
                'dialing_code' => '258',
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'Ethiopia',
                'code' => 'et',
                'dialing_code' => '251',
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'Morocco',
                'code' => 'ma',
                'dialing_code' => '212',
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'Malawi',
                'code' => 'mw',
                'dialing_code' => '265',
            ),
            47 =>
            array(
                'id' => 48,
                'name' => 'Nigeria',
                'code' => 'ng',
                'dialing_code' => '234',
            ),
            48 =>
            array(
                'id' => 49,
                'name' => 'Cabo Verde',
                'code' => 'cv',
                'dialing_code' => '238',
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'Burundi',
                'code' => 'bi',
                'dialing_code' => '257',
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'Algeria',
                'code' => 'dz',
                'dialing_code' => '213',
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'Djibouti',
                'code' => 'dj',
                'dialing_code' => '253',
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'Guadeloupe',
                'code' => 'gp',
                'dialing_code' => '590',
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'Equatorial Guinea',
                'code' => 'gq',
                'dialing_code' => '240',
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'Sudan',
                'code' => 'sd',
                'dialing_code' => '249',
            ),
            55 =>
            array(
                'id' => 56,
                'name' => 'Kenya',
                'code' => 'ke',
                'dialing_code' => '254',
            ),
            56 =>
            array(
                'id' => 57,
                'name' => 'Singapore',
                'code' => 'sg',
                'dialing_code' => '65',
            ),
            57 =>
            array(
                'id' => 58,
                'name' => 'South Korea',
                'code' => 'kr',
                'dialing_code' => '82',
            ),
            58 =>
            array(
                'id' => 59,
                'name' => 'Syria',
                'code' => 'sy',
                'dialing_code' => '963',
            ),
            59 =>
            array(
                'id' => 60,
                'name' => 'Uzbekistan',
                'code' => 'uz',
                'dialing_code' => '998',
            ),
            60 =>
            array(
                'id' => 61,
                'name' => 'Bahrain',
                'code' => 'bh',
                'dialing_code' => '973',
            ),
            61 =>
            array(
                'id' => 62,
                'name' => 'Japan',
                'code' => 'jp',
                'dialing_code' => '81',
            ),
            62 =>
            array(
                'id' => 63,
                'name' => 'Jordan',
                'code' => 'jo',
                'dialing_code' => '962',
            ),
            63 =>
            array(
                'id' => 64,
                'name' => 'Vietnam',
                'code' => 'vn',
                'dialing_code' => '84',
            ),
            64 =>
            array(
                'id' => 65,
                'name' => 'Kyrgyzstan',
                'code' => 'kg',
                'dialing_code' => '996',
            ),
            65 =>
            array(
                'id' => 66,
                'name' => 'Thailand',
                'code' => 'th',
                'dialing_code' => '66',
            ),
            66 =>
            array(
                'id' => 67,
                'name' => 'Sri Lanka',
                'code' => 'lk',
                'dialing_code' => '94',
            ),
            67 =>
            array(
                'id' => 68,
                'name' => 'United Arab Emirates',
                'code' => 'ae',
                'dialing_code' => '971',
            ),
            68 =>
            array(
                'id' => 69,
                'name' => 'Laos',
                'code' => 'la',
                'dialing_code' => '856',
            ),
            69 =>
            array(
                'id' => 70,
                'name' => 'Afghanistan',
                'code' => 'af',
                'dialing_code' => '93',
            ),
            70 =>
            array(
                'id' => 71,
                'name' => 'Macau',
                'code' => 'mo',
                'dialing_code' => '853',
            ),
            71 =>
            array(
                'id' => 72,
                'name' => 'Tajikistan',
                'code' => 'tj',
                'dialing_code' => '992',
            ),
            72 =>
            array(
                'id' => 73,
                'name' => 'North Korea',
                'code' => 'kp',
                'dialing_code' => '850',
            ),
            73 =>
            array(
                'id' => 74,
                'name' => 'Palestine',
                'code' => 'ps',
                'dialing_code' => '970',
            ),
            74 =>
            array(
                'id' => 75,
                'name' => 'Hong Kong',
                'code' => 'hk',
                'dialing_code' => '852',
            ),
            75 =>
            array(
                'id' => 76,
                'name' => 'Iraq',
                'code' => 'iq',
                'dialing_code' => '964',
            ),
            76 =>
            array(
                'id' => 77,
                'name' => 'Lebanon',
                'code' => 'lb',
                'dialing_code' => '961',
            ),
            77 =>
            array(
                'id' => 78,
                'name' => 'Kuwait',
                'code' => 'kw',
                'dialing_code' => '965',
            ),
            78 =>
            array(
                'id' => 79,
                'name' => 'Brunei',
                'code' => 'bn',
                'dialing_code' => '673',
            ),
            79 =>
            array(
                'id' => 80,
                'name' => 'Maldives',
                'code' => 'mv',
                'dialing_code' => '960',
            ),
            80 =>
            array(
                'id' => 81,
                'name' => 'Indonesia',
                'code' => 'id',
                'dialing_code' => '62',
            ),
            81 =>
            array(
                'id' => 82,
                'name' => 'Israel',
                'code' => 'il',
                'dialing_code' => '972',
            ),
            82 =>
            array(
                'id' => 83,
                'name' => 'Mongolia',
                'code' => 'mn',
                'dialing_code' => '976',
            ),
            83 =>
            array(
                'id' => 84,
                'name' => 'Oman',
                'code' => 'om',
                'dialing_code' => '968',
            ),
            84 =>
            array(
                'id' => 85,
                'name' => 'India',
                'code' => 'in',
                'dialing_code' => '91',
            ),
            85 =>
            array(
                'id' => 86,
                'name' => 'Myanmar',
                'code' => 'mm',
                'dialing_code' => '95',
            ),
            86 =>
            array(
                'id' => 87,
                'name' => 'Malaysia',
                'code' => 'my',
                'dialing_code' => '60',
            ),
            87 =>
            array(
                'id' => 88,
                'name' => 'East Timor',
                'code' => 'tl',
                'dialing_code' => '670',
            ),
            88 =>
            array(
                'id' => 89,
                'name' => 'Yemen',
                'code' => 'ye',
                'dialing_code' => '967',
            ),
            89 =>
            array(
                'id' => 90,
                'name' => 'Bhutan',
                'code' => 'bt',
                'dialing_code' => '975',
            ),
            90 =>
            array(
                'id' => 91,
                'name' => 'Cambodia',
                'code' => 'kh',
                'dialing_code' => '855',
            ),
            91 =>
            array(
                'id' => 92,
                'name' => 'Pakistan',
                'code' => 'pk',
                'dialing_code' => '92',
            ),
            92 =>
            array(
                'id' => 93,
                'name' => 'Bangladesh',
                'code' => 'bd',
                'dialing_code' => '880',
            ),
            93 =>
            array(
                'id' => 94,
                'name' => 'Saudi Arabia',
                'code' => 'sa',
                'dialing_code' => '966',
            ),
            94 =>
            array(
                'id' => 95,
                'name' => 'Turkmenistan',
                'code' => 'tm',
                'dialing_code' => '993',
            ),
            95 =>
            array(
                'id' => 96,
                'name' => 'Qatar',
                'code' => 'qa',
                'dialing_code' => '974',
            ),
            96 =>
            array(
                'id' => 97,
                'name' => 'Nepal',
                'code' => 'np',
                'dialing_code' => '977',
            ),
            97 =>
            array(
                'id' => 98,
                'name' => 'Kazakhstan',
                'code' => 'kz',
                'dialing_code' => '7',
            ),
            98 =>
            array(
                'id' => 99,
                'name' => 'Philippines',
                'code' => 'ph',
                'dialing_code' => '63',
            ),
            99 =>
            array(
                'id' => 100,
                'name' => 'Taiwan',
                'code' => 'tw',
                'dialing_code' => '886',
            ),
            100 =>
            array(
                'id' => 101,
                'name' => 'China',
                'code' => 'cn',
                'dialing_code' => '86',
            ),
            101 =>
            array(
                'id' => 102,
                'name' => 'Iran',
                'code' => 'ir',
                'dialing_code' => '98',
            ),
            102 =>
            array(
                'id' => 103,
                'name' => 'Costa Rica',
                'code' => 'cr',
                'dialing_code' => '506',
            ),
            103 =>
            array(
                'id' => 104,
                'name' => 'Cuba',
                'code' => 'cu',
                'dialing_code' => '53',
            ),
            104 =>
            array(
                'id' => 105,
                'name' => 'Dominican',
                'code' => 'do',
                'dialing_code' => '1809',
            ),
            105 =>
            array(
                'id' => 106,
                'name' => 'Mexico',
                'code' => 'mx',
                'dialing_code' => '52',
            ),
            106 =>
            array(
                'id' => 107,
                'name' => 'Nicaragua',
                'code' => 'ni',
                'dialing_code' => '505',
            ),
            107 =>
            array(
                'id' => 108,
                'name' => 'Panama',
                'code' => 'pa',
                'dialing_code' => '507',
            ),
            108 =>
            array(
                'id' => 109,
                'name' => 'Netherlands Antilles',
                'code' => 'an',
                'dialing_code' => NULL,
            ),
            109 =>
            array(
                'id' => 110,
                'name' => 'El Salvador',
                'code' => 'sv',
                'dialing_code' => '503',
            ),
            110 =>
            array(
                'id' => 111,
                'name' => 'Puerto Rico',
                'code' => 'pr',
                'dialing_code' => '1787',
            ),
            111 =>
            array(
                'id' => 112,
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'vc',
                'dialing_code' => '1784',
            ),
            112 =>
            array(
                'id' => 113,
                'name' => 'Honduras',
                'code' => 'hn',
                'dialing_code' => '504',
            ),
            113 =>
            array(
                'id' => 114,
                'name' => 'Guatemala',
                'code' => 'gt',
                'dialing_code' => '502',
            ),
            114 =>
            array(
                'id' => 115,
                'name' => 'Georgia',
                'code' => 'ge',
                'dialing_code' => '995',
            ),
            115 =>
            array(
                'id' => 116,
                'name' => 'Armenia',
                'code' => 'am',
                'dialing_code' => '374',
            ),
            116 =>
            array(
                'id' => 117,
                'name' => 'Azerbaijan',
                'code' => 'az',
                'dialing_code' => '994',
            ),
            117 =>
            array(
                'id' => 118,
                'name' => 'Belarus',
                'code' => 'by',
                'dialing_code' => '375',
            ),
            118 =>
            array(
                'id' => 119,
                'name' => 'Russia',
                'code' => 'ru',
                'dialing_code' => '70',
            ),
            119 =>
            array(
                'id' => 120,
                'name' => 'Ukraine',
                'code' => 'ua',
                'dialing_code' => '380',
            ),
            120 =>
            array(
                'id' => 121,
                'name' => 'Hungary',
                'code' => 'hu',
                'dialing_code' => '36',
            ),
            121 =>
            array(
                'id' => 122,
                'name' => 'Iceland',
                'code' => 'is',
                'dialing_code' => '354',
            ),
            122 =>
            array(
                'id' => 123,
                'name' => 'Malta',
                'code' => 'mt',
                'dialing_code' => '356',
            ),
            123 =>
            array(
                'id' => 124,
                'name' => 'Monaco',
                'code' => 'mc',
                'dialing_code' => '377',
            ),
            124 =>
            array(
                'id' => 125,
                'name' => 'Norway',
                'code' => 'no',
                'dialing_code' => '47',
            ),
            125 =>
            array(
                'id' => 126,
                'name' => 'Romania',
                'code' => 'ro',
                'dialing_code' => '40',
            ),
            126 =>
            array(
                'id' => 127,
                'name' => 'San Marino',
                'code' => 'sm',
                'dialing_code' => '378',
            ),
            127 =>
            array(
                'id' => 128,
                'name' => 'Sweden',
                'code' => 'se',
                'dialing_code' => '46',
            ),
            128 =>
            array(
                'id' => 129,
                'name' => 'Switzerland',
                'code' => 'ch',
                'dialing_code' => '41',
            ),
            129 =>
            array(
                'id' => 130,
                'name' => 'Estonia',
                'code' => 'ee',
                'dialing_code' => '372',
            ),
            130 =>
            array(
                'id' => 131,
                'name' => 'Latvia',
                'code' => 'lv',
                'dialing_code' => '371',
            ),
            131 =>
            array(
                'id' => 132,
                'name' => 'Lithuania',
                'code' => 'lt',
                'dialing_code' => '370',
            ),
            132 =>
            array(
                'id' => 133,
                'name' => 'Moldova',
                'code' => 'md',
                'dialing_code' => '373',
            ),
            133 =>
            array(
                'id' => 134,
                'name' => 'Turkey',
                'code' => 'tr',
                'dialing_code' => '90',
            ),
            134 =>
            array(
                'id' => 135,
                'name' => 'Slovenia',
                'code' => 'si',
                'dialing_code' => '386',
            ),
            135 =>
            array(
                'id' => 136,
                'name' => 'Czech',
                'code' => 'cz',
                'dialing_code' => '420',
            ),
            136 =>
            array(
                'id' => 137,
                'name' => 'Slovakia',
                'code' => 'sk',
                'dialing_code' => '421',
            ),
            137 =>
            array(
                'id' => 138,
                'name' => 'North Macedonia',
                'code' => 'mk',
                'dialing_code' => '389',
            ),
            138 =>
            array(
                'id' => 139,
                'name' => 'Bosnia Herzegovina',
                'code' => 'ba',
                'dialing_code' => '387',
            ),
            139 =>
            array(
                'id' => 140,
                'name' => 'Vatican City State',
                'code' => 'va',
                'dialing_code' => '39',
            ),
            140 =>
            array(
                'id' => 141,
                'name' => 'Netherlands',
                'code' => 'nl',
                'dialing_code' => '31',
            ),
            141 =>
            array(
                'id' => 142,
                'name' => 'Croatia',
                'code' => 'hr',
                'dialing_code' => '385',
            ),
            142 =>
            array(
                'id' => 143,
                'name' => 'Greece',
                'code' => 'gr',
                'dialing_code' => '30',
            ),
            143 =>
            array(
                'id' => 144,
                'name' => 'Ireland',
                'code' => 'ie',
                'dialing_code' => '353',
            ),
            144 =>
            array(
                'id' => 145,
                'name' => 'Belgium',
                'code' => 'be',
                'dialing_code' => '32',
            ),
            145 =>
            array(
                'id' => 146,
                'name' => 'Cyprus',
                'code' => 'cy',
                'dialing_code' => '357',
            ),
            146 =>
            array(
                'id' => 147,
                'name' => 'Denmark',
                'code' => 'dk',
                'dialing_code' => '45',
            ),
            147 =>
            array(
                'id' => 148,
                'name' => 'United Kingdom',
                'code' => 'gb',
                'dialing_code' => '44',
            ),
            148 =>
            array(
                'id' => 149,
                'name' => 'Germany',
                'code' => 'de',
                'dialing_code' => '49',
            ),
            149 =>
            array(
                'id' => 150,
                'name' => 'France',
                'code' => 'fr',
                'dialing_code' => '33',
            ),
            150 =>
            array(
                'id' => 151,
                'name' => 'Italy',
                'code' => 'it',
                'dialing_code' => '39',
            ),
            151 =>
            array(
                'id' => 152,
                'name' => 'Luxembourg',
                'code' => 'lu',
                'dialing_code' => '352',
            ),
            152 =>
            array(
                'id' => 153,
                'name' => 'Portugal',
                'code' => 'pt',
                'dialing_code' => '351',
            ),
            153 =>
            array(
                'id' => 154,
                'name' => 'Poland',
                'code' => 'pl',
                'dialing_code' => '48',
            ),
            154 =>
            array(
                'id' => 155,
                'name' => 'Spain',
                'code' => 'es',
                'dialing_code' => '34',
            ),
            155 =>
            array(
                'id' => 156,
                'name' => 'Albania',
                'code' => 'al',
                'dialing_code' => '355',
            ),
            156 =>
            array(
                'id' => 157,
                'name' => 'Andorra',
                'code' => 'ad',
                'dialing_code' => '376',
            ),
            157 =>
            array(
                'id' => 158,
                'name' => 'Liechtenstein',
                'code' => 'li',
                'dialing_code' => '423',
            ),
            158 =>
            array(
                'id' => 159,
                'name' => 'Serbia',
                'code' => 'rs',
                'dialing_code' => '381',
            ),
            159 =>
            array(
                'id' => 160,
                'name' => 'Austria',
                'code' => 'at',
                'dialing_code' => '43',
            ),
            160 =>
            array(
                'id' => 161,
                'name' => 'Bulgaria',
                'code' => 'bg',
                'dialing_code' => '359',
            ),
            161 =>
            array(
                'id' => 162,
                'name' => 'Finland',
                'code' => 'fi',
                'dialing_code' => '358',
            ),
            162 =>
            array(
                'id' => 163,
                'name' => 'Gibraltar',
                'code' => 'gi',
                'dialing_code' => '350',
            ),
            163 =>
            array(
                'id' => 164,
                'name' => 'Dominica',
                'code' => 'dm',
                'dialing_code' => '1767',
            ),
            164 =>
            array(
                'id' => 165,
                'name' => 'Bermuda',
                'code' => 'bm',
                'dialing_code' => '1441',
            ),
            165 =>
            array(
                'id' => 166,
                'name' => 'Canada',
                'code' => 'ca',
                'dialing_code' => '1',
            ),
            166 =>
            array(
                'id' => 167,
                'name' => 'United States',
                'code' => 'us',
                'dialing_code' => '1',
            ),
            167 =>
            array(
                'id' => 168,
                'name' => 'Greenland',
                'code' => 'gl',
                'dialing_code' => '299',
            ),
            168 =>
            array(
                'id' => 169,
                'name' => 'Tonga',
                'code' => 'to',
                'dialing_code' => '676',
            ),
            169 =>
            array(
                'id' => 170,
                'name' => 'Australia',
                'code' => 'au',
                'dialing_code' => '61',
            ),
            170 =>
            array(
                'id' => 171,
                'name' => 'Cook Islands',
                'code' => 'ck',
                'dialing_code' => '682',
            ),
            171 =>
            array(
                'id' => 172,
                'name' => 'Nauru',
                'code' => 'nr',
                'dialing_code' => '674',
            ),
            172 =>
            array(
                'id' => 173,
                'name' => 'New Caledonia',
                'code' => 'nc',
                'dialing_code' => '687',
            ),
            173 =>
            array(
                'id' => 174,
                'name' => 'Vanuatu',
                'code' => 'vu',
                'dialing_code' => '678',
            ),
            174 =>
            array(
                'id' => 175,
                'name' => 'Solomon Islands',
                'code' => 'sb',
                'dialing_code' => '677',
            ),
            175 =>
            array(
                'id' => 176,
                'name' => 'Samoa',
                'code' => 'ws',
                'dialing_code' => '685',
            ),
            176 =>
            array(
                'id' => 177,
                'name' => 'Tuvalu',
                'code' => 'tv',
                'dialing_code' => '688',
            ),
            177 =>
            array(
                'id' => 178,
                'name' => 'Micronesia',
                'code' => 'fm',
                'dialing_code' => '691',
            ),
            178 =>
            array(
                'id' => 179,
                'name' => 'Marshall Islands',
                'code' => 'mh',
                'dialing_code' => '692',
            ),
            179 =>
            array(
                'id' => 180,
                'name' => 'Kiribati',
                'code' => 'ki',
                'dialing_code' => '686',
            ),
            180 =>
            array(
                'id' => 181,
                'name' => 'French Polynesia',
                'code' => 'pf',
                'dialing_code' => '689',
            ),
            181 =>
            array(
                'id' => 182,
                'name' => 'New Zealand',
                'code' => 'nz',
                'dialing_code' => '64',
            ),
            182 =>
            array(
                'id' => 183,
                'name' => 'Fiji',
                'code' => 'fj',
                'dialing_code' => '679',
            ),
            183 =>
            array(
                'id' => 184,
                'name' => 'Papua New Guinea',
                'code' => 'pg',
                'dialing_code' => '675',
            ),
            184 =>
            array(
                'id' => 185,
                'name' => 'Palau',
                'code' => 'pw',
                'dialing_code' => '680',
            ),
            185 =>
            array(
                'id' => 186,
                'name' => 'Chile',
                'code' => 'cl',
                'dialing_code' => '56',
            ),
            186 =>
            array(
                'id' => 187,
                'name' => 'Colombia',
                'code' => 'co',
                'dialing_code' => '57',
            ),
            187 =>
            array(
                'id' => 188,
                'name' => 'Guyana',
                'code' => 'gy',
                'dialing_code' => '592',
            ),
            188 =>
            array(
                'id' => 189,
                'name' => 'Paraguay',
                'code' => 'py',
                'dialing_code' => '595',
            ),
            189 =>
            array(
                'id' => 190,
                'name' => 'Peru',
                'code' => 'pe',
                'dialing_code' => '51',
            ),
            190 =>
            array(
                'id' => 191,
                'name' => 'Suriname',
                'code' => 'sr',
                'dialing_code' => '597',
            ),
            191 =>
            array(
                'id' => 192,
                'name' => 'Venezuela',
                'code' => 've',
                'dialing_code' => '58',
            ),
            192 =>
            array(
                'id' => 193,
                'name' => 'Uruguay',
                'code' => 'uy',
                'dialing_code' => '598',
            ),
            193 =>
            array(
                'id' => 194,
                'name' => 'Ecuador',
                'code' => 'ec',
                'dialing_code' => '593',
            ),
            194 =>
            array(
                'id' => 195,
                'name' => 'Antigua and Barbuda',
                'code' => 'ag',
                'dialing_code' => '1268',
            ),
            195 =>
            array(
                'id' => 196,
                'name' => 'Aruba',
                'code' => 'aw',
                'dialing_code' => '297',
            ),
            196 =>
            array(
                'id' => 197,
                'name' => 'Bahamas',
                'code' => 'bs',
                'dialing_code' => '1242',
            ),
            197 =>
            array(
                'id' => 198,
                'name' => 'Barbados',
                'code' => 'bb',
                'dialing_code' => '1246',
            ),
            198 =>
            array(
                'id' => 199,
                'name' => 'Cayman Islands',
                'code' => 'ky',
                'dialing_code' => '1345',
            ),
            199 =>
            array(
                'id' => 200,
                'name' => 'Grenada',
                'code' => 'gd',
                'dialing_code' => '1473',
            ),
            200 =>
            array(
                'id' => 201,
                'name' => 'Haiti',
                'code' => 'ht',
                'dialing_code' => '509',
            ),
            201 =>
            array(
                'id' => 202,
                'name' => 'Jamaica',
                'code' => 'jm',
                'dialing_code' => '1876',
            ),
            202 =>
            array(
                'id' => 203,
                'name' => 'Martinique',
                'code' => 'mq',
                'dialing_code' => '596',
            ),
            203 =>
            array(
                'id' => 204,
                'name' => 'Montserrat',
                'code' => 'ms',
                'dialing_code' => '1664',
            ),
            204 =>
            array(
                'id' => 205,
                'name' => 'Trinidad and Tobago',
                'code' => 'tt',
                'dialing_code' => '1868',
            ),
            205 =>
            array(
                'id' => 206,
                'name' => 'Saint Kitts and Nevis',
                'code' => 'kn',
                'dialing_code' => '1869',
            ),
            206 =>
            array(
                'id' => 207,
                'name' => 'Saint Pierre and Miquelon',
                'code' => 'pm',
                'dialing_code' => '508',
            ),
            207 =>
            array(
                'id' => 208,
                'name' => 'Argentina',
                'code' => 'ar',
                'dialing_code' => '54',
            ),
            208 =>
            array(
                'id' => 209,
                'name' => 'Belize',
                'code' => 'bz',
                'dialing_code' => '501',
            ),
            209 =>
            array(
                'id' => 210,
                'name' => 'Bolivia',
                'code' => 'bo',
                'dialing_code' => '591',
            ),
            210 =>
            array(
                'id' => 211,
                'name' => 'Brazil',
                'code' => 'br',
                'dialing_code' => '55',
            ),
            211 =>
            array(
                'id' => 212,
                'name' => 'American Samoa',
                'code' => 'as',
                'dialing_code' => '1684',
            ),
            212 =>
            array(
                'id' => 213,
                'name' => 'Aland Islands',
                'code' => 'ax',
                'dialing_code' => '358',
            ),
            213 =>
            array(
                'id' => 214,
                'name' => 'Saint Barthélemy',
                'code' => 'bl',
                'dialing_code' => '590',
            ),
            214 =>
            array(
                'id' => 215,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'code' => 'bq',
                'dialing_code' => NULL,
            ),
            215 =>
            array(
                'id' => 216,
                'name' => 'Bouvet Island',
                'code' => 'bv',
                'dialing_code' => NULL,
            ),
            216 =>
            array(
                'id' => 217,
                'name' => 'Cocos (Keeling) Islands',
                'code' => 'cc',
                'dialing_code' => '61',
            ),
            217 =>
            array(
                'id' => 218,
                'name' => 'Curaçao',
                'code' => 'cw',
                'dialing_code' => '5999',
            ),
            218 =>
            array(
                'id' => 219,
                'name' => 'Christmas Island',
                'code' => 'cx',
                'dialing_code' => '61',
            ),
            219 =>
            array(
                'id' => 220,
                'name' => 'Falkland Islands (Malvinas)',
                'code' => 'fk',
                'dialing_code' => '500',
            ),
            220 =>
            array(
                'id' => 221,
                'name' => 'Faroe Islands',
                'code' => 'fo',
                'dialing_code' => '298',
            ),
            221 =>
            array(
                'id' => 222,
                'name' => 'French Guiana',
                'code' => 'gf',
                'dialing_code' => '594',
            ),
            222 =>
            array(
                'id' => 223,
                'name' => 'Guernsey',
                'code' => 'gg',
                'dialing_code' => '44',
            ),
            223 =>
            array(
                'id' => 224,
                'name' => 'South Georgia and the South Sandwich Islands',
                'code' => 'gs',
                'dialing_code' => '500',
            ),
            224 =>
            array(
                'id' => 225,
                'name' => 'Guam',
                'code' => 'gu',
                'dialing_code' => '1671',
            ),
            225 =>
            array(
                'id' => 226,
                'name' => 'Heard Island and McDonald Islands',
                'code' => 'hm',
                'dialing_code' => NULL,
            ),
            226 =>
            array(
                'id' => 227,
                'name' => 'Isle of Man',
                'code' => 'im',
                'dialing_code' => '44',
            ),
            227 =>
            array(
                'id' => 228,
                'name' => 'British Indian Ocean Territory',
                'code' => 'io',
                'dialing_code' => '246',
            ),
            228 =>
            array(
                'id' => 229,
                'name' => 'Jersey',
                'code' => 'je',
                'dialing_code' => '44',
            ),
            229 =>
            array(
                'id' => 230,
                'name' => 'Saint Lucia',
                'code' => 'lc',
                'dialing_code' => '1758',
            ),
            230 =>
            array(
                'id' => 231,
                'name' => 'Saint Martin',
                'code' => 'mf',
                'dialing_code' => '590',
            ),
            231 =>
            array(
                'id' => 232,
                'name' => 'Northern Mariana Islands',
                'code' => 'mp',
                'dialing_code' => '1670',
            ),
            232 =>
            array(
                'id' => 233,
                'name' => 'Norfolk Island',
                'code' => 'nf',
                'dialing_code' => '672',
            ),
            233 =>
            array(
                'id' => 234,
                'name' => 'Niue',
                'code' => 'nu',
                'dialing_code' => '683',
            ),
            234 =>
            array(
                'id' => 236,
                'name' => 'Pitcairn',
                'code' => 'pn',
                'dialing_code' => '64',
            ),
            235 =>
            array(
                'id' => 237,
                'name' => 'Saint Helena',
                'code' => 'sh',
                'dialing_code' => NULL,
            ),
            236 =>
            array(
                'id' => 238,
                'name' => 'Svalbard and Jan Mayen Islands',
                'code' => 'sj',
                'dialing_code' => '4779',
            ),
            237 =>
            array(
                'id' => 239,
                'name' => 'Sint Maarten',
                'code' => 'sx',
                'dialing_code' => '1721',
            ),
            238 =>
            array(
                'id' => 240,
                'name' => 'Turks and Caicos Islands',
                'code' => 'tc',
                'dialing_code' => '1649',
            ),
            239 =>
            array(
                'id' => 241,
                'name' => 'French Southern Territories',
                'code' => 'tf',
                'dialing_code' => NULL,
            ),
            240 =>
            array(
                'id' => 242,
                'name' => 'Tokelau',
                'code' => 'tk',
                'dialing_code' => '690',
            ),
            241 =>
            array(
                'id' => 243,
                'name' => 'United States Minor Outlying Islands',
                'code' => 'um',
                'dialing_code' => '246',
            ),
            242 =>
            array(
                'id' => 244,
                'name' => 'British Virgin Islands',
                'code' => 'vg',
                'dialing_code' => '1284',
            ),
            243 =>
            array(
                'id' => 245,
                'name' => 'United States Virgin Islands',
                'code' => 'vi',
                'dialing_code' => '1340',
            ),
            244 =>
            array(
                'id' => 246,
                'name' => 'Wallis and Futuna Islands',
                'code' => 'wf',
                'dialing_code' => '681',
            ),
            245 =>
            array(
                'id' => 247,
                'name' => 'Kosovo',
                'code' => 'xk',
                'dialing_code' => '383',
            ),
            246 =>
            array(
                'id' => 248,
                'name' => 'Montenegro',
                'code' => 'me',
                'dialing_code' => '382',
            ),
            247 =>
            array(
                'id' => 249,
                'name' => 'Anguilla',
                'code' => 'ai',
                'dialing_code' => '1-264',
            ),
            248 =>
            array(
                'id' => 250,
                'name' => 'Gambia',
                'code' => 'gm',
                'dialing_code' => '220',
            ),
            249 =>
            array(
                'id' => 251,
                'name' => 'South Sudan',
                'code' => 'ss',
                'dialing_code' => '211',
            ),
        ));
    }
}
