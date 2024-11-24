<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('country')->insert([
            ['id' => 1, 'name' => 'Brazil', 'name_pt' => 'Brasil', 'acronym' => 'BR', 'bacen' => 1058],
            ['id' => 2, 'name' => 'Afghanistan', 'name_pt' => 'Afeganistão', 'acronym' => 'AF', 'bacen' => 132],
            ['id' => 3, 'name' => 'Albania', 'name_pt' => 'Albânia, Republica da', 'acronym' => 'AL', 'bacen' => 175],
            ['id' => 4, 'name' => 'Algeria', 'name_pt' => 'Argélia', 'acronym' => 'DZ', 'bacen' => 590],
            ['id' => 5, 'name' => 'American Samoa', 'name_pt' => 'Samoa Americana', 'acronym' => 'AS', 'bacen' => 6912],
            ['id' => 6, 'name' => 'Andorra', 'name_pt' => 'Andorra', 'acronym' => 'AD', 'bacen' => 370],
            ['id' => 7, 'name' => 'Angola', 'name_pt' => 'Angola', 'acronym' => 'AO', 'bacen' => 400],
            ['id' => 8, 'name' => 'Anguilla', 'name_pt' => 'Anguilla', 'acronym' => 'AI', 'bacen' => 418],
            ['id' => 9, 'name' => 'Antarctica', 'name_pt' => 'Antártida', 'acronym' => 'AQ', 'bacen' => 3596],
            ['id' => 10, 'name' => 'Antigua and Barbuda', 'name_pt' => 'Antigua e Barbuda', 'acronym' => 'AG', 'bacen' => 434],
            ['id' => 11, 'name' => 'Argentina', 'name_pt' => 'Argentina', 'acronym' => 'AR', 'bacen' => 639],
            ['id' => 12, 'name' => 'Armenia', 'name_pt' => 'Armênia, Republica da', 'acronym' => 'AM', 'bacen' => 647],
            ['id' => 13, 'name' => 'Aruba', 'name_pt' => 'Aruba', 'acronym' => 'AW', 'bacen' => 655],
            ['id' => 14, 'name' => 'Australia', 'name_pt' => 'Austrália', 'acronym' => 'AU', 'bacen' => 698],
            ['id' => 15, 'name' => 'Austria', 'name_pt' => 'Áustria', 'acronym' => 'AT', 'bacen' => 728],
            ['id' => 16, 'name' => 'Azerbaijan', 'name_pt' => 'Azerbaijão, Republica do', 'acronym' => 'AZ', 'bacen' => 736],
            ['id' => 17, 'name' => 'Bahamas', 'name_pt' => 'Bahamas, Ilhas', 'acronym' => 'BS', 'bacen' => 779],
            ['id' => 18, 'name' => 'Bahrain', 'name_pt' => 'Bahrein, Ilhas', 'acronym' => 'BH', 'bacen' => 809],
            ['id' => 19, 'name' => 'Bangladesh', 'name_pt' => 'Bangladesh', 'acronym' => 'BD', 'bacen' => 817],
            ['id' => 20, 'name' => 'Barbados', 'name_pt' => 'Barbados', 'acronym' => 'BB', 'bacen' => 833],
            ['id' => 21, 'name' => 'Belarus', 'name_pt' => 'Belarus, Republica da', 'acronym' => 'BY', 'bacen' => 850],
            ['id' => 22, 'name' => 'Belgium', 'name_pt' => 'Bélgica', 'acronym' => 'BE', 'bacen' => 876],
            ['id' => 23, 'name' => 'Belize', 'name_pt' => 'Belize', 'acronym' => 'BZ', 'bacen' => 884],
            ['id' => 24, 'name' => 'Benin', 'name_pt' => 'Benin', 'acronym' => 'BJ', 'bacen' => 2291],
            ['id' => 25, 'name' => 'Bermuda', 'name_pt' => 'Bermudas', 'acronym' => 'BM', 'bacen' => 906],
            ['id' => 26, 'name' => 'Bhutan', 'name_pt' => 'Butão', 'acronym' => 'BT', 'bacen' => 1198],
            ['id' => 27, 'name' => 'Bolivia', 'name_pt' => 'Bolívia', 'acronym' => 'BO', 'bacen' => 973],
            ['id' => 28, 'name' => 'Bosnia and Herzegowina', 'name_pt' => 'Bósnia-herzegovina (Republica da)', 'acronym' => 'BA', 'bacen' => 981],
            ['id' => 29, 'name' => 'Botswana', 'name_pt' => 'Botsuana', 'acronym' => 'BW', 'bacen' => 1015],
            ['id' => 30, 'name' => 'Bouvet Island', 'name_pt' => 'Bouvet, Ilha', 'acronym' => 'BV', 'bacen' => 1023],
            ['id' => 31, 'name' => 'British Indian Ocean Territory', 'name_pt' => 'Território Britânico do Oceano Indico', 'acronym' => 'IO', 'bacen' => 7820],
            ['id' => 32, 'name' => 'Brunei Darussalam', 'name_pt' => 'Brunei', 'acronym' => 'BN', 'bacen' => 1082],
            ['id' => 33, 'name' => 'Bulgaria', 'name_pt' => 'Bulgária, Republica da', 'acronym' => 'BG', 'bacen' => 1112],
            ['id' => 34, 'name' => 'Burkina Faso', 'name_pt' => 'Burkina Faso', 'acronym' => 'BF', 'bacen' => 310],
            ['id' => 35, 'name' => 'Burundi', 'name_pt' => 'Burundi', 'acronym' => 'BI', 'bacen' => 1155],
            ['id' => 36, 'name' => 'Cambodia', 'name_pt' => 'Camboja', 'acronym' => 'KH', 'bacen' => 1414],
            ['id' => 37, 'name' => 'Cameroon', 'name_pt' => 'Camarões', 'acronym' => 'CM', 'bacen' => 1457],
            ['id' => 38, 'name' => 'Canada', 'name_pt' => 'Canada', 'acronym' => 'CA', 'bacen' => 1490],
            ['id' => 39, 'name' => 'Cape Verde', 'name_pt' => 'Cabo Verde, Republica de', 'acronym' => 'CV', 'bacen' => 1279],
            ['id' => 40, 'name' => 'Cayman Islands', 'name_pt' => 'Cayman, Ilhas', 'acronym' => 'KY', 'bacen' => 1376],
            ['id' => 41, 'name' => 'Central African Republic', 'name_pt' => 'Republica Centro-Africana', 'acronym' => 'CF', 'bacen' => 6408],
            ['id' => 42, 'name' => 'Chad', 'name_pt' => 'Chade', 'acronym' => 'TD', 'bacen' => 7889],
            ['id' => 43, 'name' => 'Chile', 'name_pt' => 'Chile', 'acronym' => 'CL', 'bacen' => 1589],
            ['id' => 44, 'name' => 'China', 'name_pt' => 'China, Republica Popular', 'acronym' => 'CN', 'bacen' => 1600],
            ['id' => 45, 'name' => 'Christmas Island', 'name_pt' => 'Christmas, Ilha (Navidad)', 'acronym' => 'CX', 'bacen' => 5118],
            ['id' => 46, 'name' => 'Cocos (Keeling) Islands', 'name_pt' => 'Cocos (Keeling), Ilhas', 'acronym' => 'CC', 'bacen' => 1651],
            ['id' => 47, 'name' => 'Colombia', 'name_pt' => 'Colômbia', 'acronym' => 'CO', 'bacen' => 1694],
            ['id' => 48, 'name' => 'Comoros', 'name_pt' => 'Comores, Ilhas', 'acronym' => 'KM', 'bacen' => 1732],
            ['id' => 49, 'name' => 'Congo', 'name_pt' => 'Congo', 'acronym' => 'CG', 'bacen' => 1775],
            ['id' => 50, 'name' => 'Congo, the Democratic Republic of the', 'name_pt' => 'Congo, Republica Democrática do', 'acronym' => 'CD', 'bacen' => 8885],
            ['id' => 51, 'name' => 'Cook Islands', 'name_pt' => 'Cook, Ilhas', 'acronym' => 'CK', 'bacen' => 1830],
            ['id' => 52, 'name' => 'Costa Rica', 'name_pt' => 'Costa Rica', 'acronym' => 'CR', 'bacen' => 1961],
            ['id' => 53, 'name' => 'Cote d`Ivoire', 'name_pt' => 'Costa do Marfim', 'acronym' => 'CI', 'bacen' => 1937],
            ['id' => 54, 'name' => 'Croatia (Hrvatska)', 'name_pt' => 'Croácia (Republica da)', 'acronym' => 'HR', 'bacen' => 1953],
            ['id' => 55, 'name' => 'Cuba', 'name_pt' => 'Cuba', 'acronym' => 'CU', 'bacen' => 1996],
            ['id' => 56, 'name' => 'Cyprus', 'name_pt' => 'Chipre', 'acronym' => 'CY', 'bacen' => 1635],
            ['id' => 57, 'name' => 'Czech Republic', 'name_pt' => 'Tcheca, Republica', 'acronym' => 'CZ', 'bacen' => 7919],
            ['id' => 58, 'name' => 'Denmark', 'name_pt' => 'Dinamarca', 'acronym' => 'DK', 'bacen' => 2321],
            ['id' => 59, 'name' => 'Djibouti', 'name_pt' => 'Djibuti', 'acronym' => 'DJ', 'bacen' => 7838],
            ['id' => 60, 'name' => 'Dominica', 'name_pt' => 'Dominica, Ilha', 'acronym' => 'DM', 'bacen' => 2356],
            ['id' => 61, 'name' => 'Dominican Republic', 'name_pt' => 'Republica Dominicana', 'acronym' => 'DO', 'bacen' => 6475],
            ['id' => 62, 'name' => 'East Timor', 'name_pt' => 'Timor Leste', 'acronym' => 'TL', 'bacen' => 7951],
            ['id' => 63, 'name' => 'Ecuador', 'name_pt' => 'Equador', 'acronym' => 'EC', 'bacen' => 2399],
            ['id' => 64, 'name' => 'Egypt', 'name_pt' => 'Egito', 'acronym' => 'EG', 'bacen' => 2402],
            ['id' => 65, 'name' => 'El Salvador', 'name_pt' => 'El Salvador', 'acronym' => 'SV', 'bacen' => 6874],
            ['id' => 66, 'name' => 'Equatorial Guinea', 'name_pt' => 'Guine-Equatorial', 'acronym' => 'GQ', 'bacen' => 3310],
            ['id' => 67, 'name' => 'Eritrea', 'name_pt' => 'Eritreia', 'acronym' => 'ER', 'bacen' => 2437],
            ['id' => 68, 'name' => 'Estonia', 'name_pt' => 'Estônia, Republica da', 'acronym' => 'EE', 'bacen' => 2518],
            ['id' => 69, 'name' => 'Ethiopia', 'name_pt' => 'Etiópia', 'acronym' => 'ET', 'bacen' => 2534],
            ['id' => 70, 'name' => 'Falkland Islands (Malvinas)', 'name_pt' => 'Falkland (Ilhas Malvinas)', 'acronym' => 'FK', 'bacen' => 2550],
            ['id' => 71, 'name' => 'Faroe Islands', 'name_pt' => 'Feroe, Ilhas', 'acronym' => 'FO', 'bacen' => 2593],
            ['id' => 72, 'name' => 'Fiji', 'name_pt' => 'Fiji', 'acronym' => 'FJ', 'bacen' => 8702],
            ['id' => 73, 'name' => 'Finland', 'name_pt' => 'Finlândia', 'acronym' => 'FI', 'bacen' => 2712],
            ['id' => 74, 'name' => 'France', 'name_pt' => 'Franca', 'acronym' => 'FR', 'bacen' => 2755],
            ['id' => 76, 'name' => 'French Guiana', 'name_pt' => 'Guiana francesa', 'acronym' => 'GF', 'bacen' => 3255],
            ['id' => 77, 'name' => 'French Polynesia', 'name_pt' => 'Polinésia Francesa', 'acronym' => 'PF', 'bacen' => 5991],
            ['id' => 78, 'name' => 'French Southern Territories', 'name_pt' => 'Terras Austrais e Antárticas Francesas', 'acronym' => 'TF', 'bacen' => 3607],
            ['id' => 79, 'name' => 'Gabon', 'name_pt' => 'Gabão', 'acronym' => 'GA', 'bacen' => 2810],
            ['id' => 80, 'name' => 'Gambia', 'name_pt' => 'Gambia', 'acronym' => 'GM', 'bacen' => 2852],
            ['id' => 81, 'name' => 'Georgia', 'name_pt' => 'Georgia, Republica da', 'acronym' => 'GE', 'bacen' => 2917],
            ['id' => 82, 'name' => 'Germany', 'name_pt' => 'Alemanha', 'acronym' => 'DE', 'bacen' => 230],
            ['id' => 83, 'name' => 'Ghana', 'name_pt' => 'Gana', 'acronym' => 'GH', 'bacen' => 2895],
            ['id' => 84, 'name' => 'Gibraltar', 'name_pt' => 'Gibraltar', 'acronym' => 'GI', 'bacen' => 2933],
            ['id' => 85, 'name' => 'Greece', 'name_pt' => 'Grécia', 'acronym' => 'GR', 'bacen' => 3018],
            ['id' => 86, 'name' => 'Greenland', 'name_pt' => 'Groenlândia', 'acronym' => 'GL', 'bacen' => 3050],
            ['id' => 87, 'name' => 'Grenada', 'name_pt' => 'Granada', 'acronym' => 'GD', 'bacen' => 2976],
            ['id' => 88, 'name' => 'Guadeloupe', 'name_pt' => 'Guadalupe', 'acronym' => 'GP', 'bacen' => 3093],
            ['id' => 89, 'name' => 'Guam', 'name_pt' => 'Guam', 'acronym' => 'GU', 'bacen' => 3131],
            ['id' => 90, 'name' => 'Guatemala', 'name_pt' => 'Guatemala', 'acronym' => 'GT', 'bacen' => 3174],
            ['id' => 91, 'name' => 'Guinea', 'name_pt' => 'Guine', 'acronym' => 'GN', 'bacen' => 3298],
            ['id' => 92, 'name' => 'Guinea-Bissau', 'name_pt' => 'Guine-Bissau', 'acronym' => 'GW', 'bacen' => 3344],
            ['id' => 93, 'name' => 'Guyana', 'name_pt' => 'Guiana', 'acronym' => 'GY', 'bacen' => 3379],
            ['id' => 94, 'name' => 'Haiti', 'name_pt' => 'Haiti', 'acronym' => 'HT', 'bacen' => 3417],
            ['id' => 95, 'name' => 'Heard and Mc Donald Islands', 'name_pt' => 'Ilha Heard e Ilhas McDonald', 'acronym' => 'HM', 'bacen' => 3603],
            ['id' => 96, 'name' => 'Holy See (Vatican City State)', 'name_pt' => 'Vaticano, Estado da Cidade do', 'acronym' => 'VA', 'bacen' => 8486],
            ['id' => 97, 'name' => 'Honduras', 'name_pt' => 'Honduras', 'acronym' => 'HN', 'bacen' => 3450],
            ['id' => 98, 'name' => 'Hong Kong', 'name_pt' => 'Hong Kong', 'acronym' => 'HK', 'bacen' => 3514],
            ['id' => 99, 'name' => 'Hungary', 'name_pt' => 'Hungria, Republica da', 'acronym' => 'HU', 'bacen' => 3557],
            ['id' => 100, 'name' => 'Iceland', 'name_pt' => 'Islândia', 'acronym' => 'IS', 'bacen' => 3794],
            ['id' => 101, 'name' => 'India', 'name_pt' => 'Índia', 'acronym' => 'IN', 'bacen' => 3611],
            ['id' => 102, 'name' => 'Indonesia', 'name_pt' => 'Indonésia', 'acronym' => 'ID', 'bacen' => 3654],
            ['id' => 103, 'name' => 'Iran (Islamic Republic of)', 'name_pt' => 'Ira, Republica Islâmica do', 'acronym' => 'IR', 'bacen' => 3727],
            ['id' => 104, 'name' => 'Iraq', 'name_pt' => 'Iraque', 'acronym' => 'IQ', 'bacen' => 3697],
            ['id' => 105, 'name' => 'Ireland', 'name_pt' => 'Irlanda', 'acronym' => 'IE', 'bacen' => 3751],
            ['id' => 106, 'name' => 'Israel', 'name_pt' => 'Israel', 'acronym' => 'IL', 'bacen' => 3832],
            ['id' => 107, 'name' => 'Italy', 'name_pt' => 'Itália', 'acronym' => 'IT', 'bacen' => 3867],
            ['id' => 108, 'name' => 'Jamaica', 'name_pt' => 'Jamaica', 'acronym' => 'JM', 'bacen' => 3913],
            ['id' => 109, 'name' => 'Japan', 'name_pt' => 'Japão', 'acronym' => 'JP', 'bacen' => 3999],
            ['id' => 110, 'name' => 'Jordan', 'name_pt' => 'Jordânia', 'acronym' => 'JO', 'bacen' => 4030],
            ['id' => 111, 'name' => 'Kazakhstan', 'name_pt' => 'Cazaquistão, Republica do', 'acronym' => 'KZ', 'bacen' => 1538],
            ['id' => 112, 'name' => 'Kenya', 'name_pt' => 'Quênia', 'acronym' => 'KE', 'bacen' => 6238],
            ['id' => 113, 'name' => 'Kiribati', 'name_pt' => 'Kiribati', 'acronym' => 'KI', 'bacen' => 4111],
            ['id' => 114, 'name' => 'Korea, Democratic People`s Republic of', 'name_pt' => 'Coreia, Republica Popular Democrática da', 'acronym' => 'KP', 'bacen' => 1872],
            ['id' => 115, 'name' => 'Korea, Republic of', 'name_pt' => 'Coreia, Republica da', 'acronym' => 'KR', 'bacen' => 1902],
            ['id' => 116, 'name' => 'Kuwait', 'name_pt' => 'Kuwait', 'acronym' => 'KW', 'bacen' => 1988],
            ['id' => 117, 'name' => 'Kyrgyzstan', 'name_pt' => 'Quirguiz, Republica', 'acronym' => 'KG', 'bacen' => 6254],
            ['id' => 118, 'name' => 'Lao People`s Democratic Republic', 'name_pt' => 'Laos, Republica Popular Democrática do', 'acronym' => 'LA', 'bacen' => 4200],
            ['id' => 119, 'name' => 'Latvia', 'name_pt' => 'Letônia, Republica da', 'acronym' => 'LV', 'bacen' => 4278],
            ['id' => 120, 'name' => 'Lebanon', 'name_pt' => 'Líbano', 'acronym' => 'LB', 'bacen' => 4316],
            ['id' => 121, 'name' => 'Lesotho', 'name_pt' => 'Lesoto', 'acronym' => 'LS', 'bacen' => 4260],
            ['id' => 122, 'name' => 'Liberia', 'name_pt' => 'Libéria', 'acronym' => 'LR', 'bacen' => 4340],
            ['id' => 123, 'name' => 'Libyan Arab Jamahiriya', 'name_pt' => 'Líbia', 'acronym' => 'LY', 'bacen' => 4383],
            ['id' => 124, 'name' => 'Liechtenstein', 'name_pt' => 'Liechtenstein', 'acronym' => 'LI', 'bacen' => 4405],
            ['id' => 125, 'name' => 'Lithuania', 'name_pt' => 'Lituânia, Republica da', 'acronym' => 'LT', 'bacen' => 4421],
            ['id' => 126, 'name' => 'Luxembourg', 'name_pt' => 'Luxemburgo', 'acronym' => 'LU', 'bacen' => 4456],
            ['id' => 127, 'name' => 'Macau', 'name_pt' => 'Macau', 'acronym' => 'MO', 'bacen' => 4472],
            ['id' => 128, 'name' => 'North Macedonia', 'name_pt' => 'Macedônia do Norte', 'acronym' => 'MK', 'bacen' => 4499],
            ['id' => 129, 'name' => 'Madagascar', 'name_pt' => 'Madagascar', 'acronym' => 'MG', 'bacen' => 4502],
            ['id' => 130, 'name' => 'Malawi', 'name_pt' => 'Malavi', 'acronym' => 'MW', 'bacen' => 4588],
            ['id' => 131, 'name' => 'Malaysia', 'name_pt' => 'Malásia', 'acronym' => 'MY', 'bacen' => 4553],
            ['id' => 132, 'name' => 'Maldives', 'name_pt' => 'Maldivas', 'acronym' => 'MV', 'bacen' => 4618],
            ['id' => 133, 'name' => 'Mali', 'name_pt' => 'Mali', 'acronym' => 'ML', 'bacen' => 4642],
            ['id' => 134, 'name' => 'Malta', 'name_pt' => 'Malta', 'acronym' => 'MT', 'bacen' => 4677],
            ['id' => 135, 'name' => 'Marshall Islands', 'name_pt' => 'Marshall, Ilhas', 'acronym' => 'MH', 'bacen' => 4766],
            ['id' => 136, 'name' => 'Martinique', 'name_pt' => 'Martinica', 'acronym' => 'MQ', 'bacen' => 4774],
            ['id' => 137, 'name' => 'Mauritania', 'name_pt' => 'Mauritânia', 'acronym' => 'MR', 'bacen' => 4880],
            ['id' => 138, 'name' => 'Mauritius', 'name_pt' => 'Mauricio', 'acronym' => 'MU', 'bacen' => 4855],
            ['id' => 139, 'name' => 'Mayotte', 'name_pt' => 'Mayotte (Ilhas Francesas)', 'acronym' => 'YT', 'bacen' => 4885],
            ['id' => 140, 'name' => 'Mexico', 'name_pt' => 'México', 'acronym' => 'MX', 'bacen' => 4936],
            ['id' => 141, 'name' => 'Micronesia, Federated States of', 'name_pt' => 'Micronesia', 'acronym' => 'FM', 'bacen' => 4995],
            ['id' => 142, 'name' => 'Moldova, Republic of', 'name_pt' => 'Moldávia, Republica da', 'acronym' => 'MD', 'bacen' => 4944],
            ['id' => 143, 'name' => 'Monaco', 'name_pt' => 'Mônaco', 'acronym' => 'MC', 'bacen' => 4952],
            ['id' => 144, 'name' => 'Mongolia', 'name_pt' => 'Mongólia', 'acronym' => 'MN', 'bacen' => 4979],
            ['id' => 145, 'name' => 'Montserrat', 'name_pt' => 'Montserrat, Ilhas', 'acronym' => 'MS', 'bacen' => 5010],
            ['id' => 146, 'name' => 'Morocco', 'name_pt' => 'Marrocos', 'acronym' => 'MA', 'bacen' => 4740],
            ['id' => 147, 'name' => 'Mozambique', 'name_pt' => 'Moçambique', 'acronym' => 'MZ', 'bacen' => 5053],
            ['id' => 148, 'name' => 'Myanmar', 'name_pt' => 'Mianmar (Birmânia)', 'acronym' => 'MM', 'bacen' => 930],
            ['id' => 149, 'name' => 'Namibia', 'name_pt' => 'Namíbia', 'acronym' => 'NA', 'bacen' => 5070],
            ['id' => 150, 'name' => 'Nauru', 'name_pt' => 'Nauru', 'acronym' => 'NR', 'bacen' => 5088],
            ['id' => 151, 'name' => 'Nepal', 'name_pt' => 'Nepal', 'acronym' => 'NP', 'bacen' => 5177],
            ['id' => 152, 'name' => 'Netherlands', 'name_pt' => 'Países Baixos (Holanda)', 'acronym' => 'NL', 'bacen' => 5738],
            ['id' => 154, 'name' => 'New Caledonia', 'name_pt' => 'Nova Caledonia', 'acronym' => 'NC', 'bacen' => 5428],
            [
                'id' => 155,
                'name' => 'New Zealand',
                'name_pt' => 'Nova Zelândia',
                'acronym' => 'NZ',
                'bacen' => 5487
            ],
            [
                'id' => 156,
                'name' => 'Nicaragua',
                'name_pt' => 'Nicarágua',
                'acronym' => 'NI',
                'bacen' => 5215
            ],
            [
                'id' => 157,
                'name' => 'Niger',
                'name_pt' => 'Níger',
                'acronym' => 'NE',
                'bacen' => 5258
            ],
            [
                'id' => 158,
                'name' => 'Nigeria',
                'name_pt' => 'Nigéria',
                'acronym' => 'NG',
                'bacen' => 5282
            ],
            [
                'id' => 159,
                'name' => 'Niue',
                'name_pt' => 'Niue, Ilha',
                'acronym' => 'NU',
                'bacen' => 5312
            ],
            [
                'id' => 160,
                'name' => 'Norfolk Island',
                'name_pt' => 'Norfolk, Ilha',
                'acronym' => 'NF',
                'bacen' => 5355
            ],
            [
                'id' => 161,
                'name' => 'Northern Mariana Islands',
                'name_pt' => 'Marianas do Norte',
                'acronym' => 'MP',
                'bacen' => 4723
            ],
            [
                'id' => 162,
                'name' => 'Norway',
                'name_pt' => 'Noruega',
                'acronym' => 'NO',
                'bacen' => 5380
            ],
            [
                'id' => 163,
                'name' => 'Oman',
                'name_pt' => 'Oma',
                'acronym' => 'OM',
                'bacen' => 5568
            ],
            [
                'id' => 164,
                'name' => 'Pakistan',
                'name_pt' => 'Paquistão',
                'acronym' => 'PK',
                'bacen' => 5762
            ],
            [
                'id' => 165,
                'name' => 'Palau',
                'name_pt' => 'Palau',
                'acronym' => 'PW',
                'bacen' => 5754
            ],
            [
                'id' => 166,
                'name' => 'Panama',
                'name_pt' => 'Panamá',
                'acronym' => 'PA',
                'bacen' => 5800
            ],
            [
                'id' => 167,
                'name' => 'Papua New Guinea',
                'name_pt' => 'Papua Nova Guine',
                'acronym' => 'PG',
                'bacen' => 5452
            ],
            [
                'id' => 168,
                'name' => 'Paraguay',
                'name_pt' => 'Paraguai',
                'acronym' => 'PY',
                'bacen' => 5860
            ],
            [
                'id' => 169,
                'name' => 'Peru',
                'name_pt' => 'Peru',
                'acronym' => 'PE',
                'bacen' => 5894
            ],
            [
                'id' => 170,
                'name' => 'Philippines',
                'name_pt' => 'Filipinas',
                'acronym' => 'PH',
                'bacen' => 2674
            ],
            [
                'id' => 171,
                'name' => 'Pitcairn',
                'name_pt' => 'Pitcairn, Ilha',
                'acronym' => 'PN',
                'bacen' => 5932
            ],
            [
                'id' => 172,
                'name' => 'Poland',
                'name_pt' => 'Polônia, Republica da',
                'acronym' => 'PL',
                'bacen' => 6033
            ],
            [
                'id' => 173,
                'name' => 'Portugal',
                'name_pt' => 'Portugal',
                'acronym' => 'PT',
                'bacen' => 6076
            ],
            [
                'id' => 174,
                'name' => 'Puerto Rico',
                'name_pt' => 'Porto Rico',
                'acronym' => 'PR',
                'bacen' => 6114
            ],
            [
                'id' => 175,
                'name' => 'Qatar',
                'name_pt' => 'Catar',
                'acronym' => 'QA',
                'bacen' => 1546
            ],
            [
                'id' => 176,
                'name' => 'Reunion',
                'name_pt' => 'Reunião, Ilha',
                'acronym' => 'RE',
                'bacen' => 6602
            ],
            [
                'id' => 177,
                'name' => 'Romania',
                'name_pt' => 'Romênia',
                'acronym' => 'RO',
                'bacen' => 6700
            ],
            [
                'id' => 178,
                'name' => 'Russian Federation',
                'name_pt' => 'Rússia, Federação da',
                'acronym' => 'RU',
                'bacen' => 6769
            ],
            [
                'id' => 179,
                'name' => 'Rwanda',
                'name_pt' => 'Ruanda',
                'acronym' => 'RW',
                'bacen' => 6750
            ],
            [
                'id' => 180,
                'name' => 'Saint Kitts and Nevis',
                'name_pt' => 'São Cristovão e Neves, Ilhas',
                'acronym' => 'KN',
                'bacen' => 6955
            ],
            [
                'id' => 181,
                'name' => 'Saint LUCIA',
                'name_pt' => 'Santa Lucia',
                'acronym' => 'LC',
                'bacen' => 7153
            ],
            [
                'id' => 182,
                'name' => 'Saint Vincent and the Grenadines',
                'name_pt' => 'São Vicente e Granadinas',
                'acronym' => 'VC',
                'bacen' => 7056
            ],
            [
                'id' => 183,
                'name' => 'Samoa',
                'name_pt' => 'Samoa',
                'acronym' => 'WS',
                'bacen' => 6904
            ],
            [
                'id' => 184,
                'name' => 'San Marino',
                'name_pt' => 'San Marino',
                'acronym' => 'SM',
                'bacen' => 6971
            ],
            [
                'id' => 185,
                'name' => 'Sao Tome and Principe',
                'name_pt' => 'São Tome e Príncipe, Ilhas',
                'acronym' => 'ST',
                'bacen' => 7200
            ],
            [
                'id' => 186,
                'name' => 'Saudi Arabia',
                'name_pt' => 'Arábia Saudita',
                'acronym' => 'SA',
                'bacen' => 531
            ],
            [
                'id' => 187,
                'name' => 'Senegal',
                'name_pt' => 'Senegal',
                'acronym' => 'SN',
                'bacen' => 7285
            ],
            [
                'id' => 188,
                'name' => 'Seychelles',
                'name_pt' => 'Seychelles',
                'acronym' => 'SC',
                'bacen' => 7315
            ],
            [
                'id' => 189,
                'name' => 'Sierra Leone',
                'name_pt' => 'Serra Leoa',
                'acronym' => 'SL',
                'bacen' => 7358
            ],
            [
                'id' => 190,
                'name' => 'Singapore',
                'name_pt' => 'Cingapura',
                'acronym' => 'SG',
                'bacen' => 7412
            ],
            [
                'id' => 191,
                'name' => 'Slovakia (Slovak Republic)',
                'name_pt' => 'Eslovaca, Republica',
                'acronym' => 'SK',
                'bacen' => 2470
            ],
            [
                'id' => 192,
                'name' => 'Slovenia',
                'name_pt' => 'Eslovênia, Republica da',
                'acronym' => 'SI',
                'bacen' => 2461
            ],
            [
                'id' => 193,
                'name' => 'Solomon Islands',
                'name_pt' => 'Salomão, Ilhas',
                'acronym' => 'SB',
                'bacen' => 6777
            ],
            [
                'id' => 194,
                'name' => 'Somalia',
                'name_pt' => 'Somalia',
                'acronym' => 'SO',
                'bacen' => 7480
            ],
            [
                'id' => 195,
                'name' => 'South Africa',
                'name_pt' => 'África do Sul',
                'acronym' => 'ZA',
                'bacen' => 7560
            ],
            [
                'id' => 196,
                'name' => 'South Georgia and the South Sandwich Islands',
                'name_pt' => 'Ilhas Geórgia do Sul e Sandwich do Sul',
                'acronym' => 'GS',
                'bacen' => 2925
            ],
            [
                'id' => 197,
                'name' => 'Spain',
                'name_pt' => 'Espanha',
                'acronym' => 'ES',
                'bacen' => 2453
            ],
            [
                'id' => 198,
                'name' => 'Sri Lanka',
                'name_pt' => 'Sri Lanka',
                'acronym' => 'LK',
                'bacen' => 7501
            ],
            [
                'id' => 199,
                'name' => 'St. Helena',
                'name_pt' => 'Santa Helena',
                'acronym' => 'SH',
                'bacen' => 7102
            ],
            [
                'id' => 200,
                'name' => 'St. Pierre and Miquelon',
                'name_pt' => 'São Pedro e Miquelon',
                'acronym' => 'PM',
                'bacen' => 7005
            ],
            [
                'id' => 201,
                'name' => 'Sudan',
                'name_pt' => 'Sudão',
                'acronym' => 'SD',
                'bacen' => 7595
            ],
            [
                'id' => 202,
                'name' => 'Suriname',
                'name_pt' => 'Suriname',
                'acronym' => 'SR',
                'bacen' => 7706
            ],
            [
                'id' => 203,
                'name' => 'Svalbard and Jan Mayen Islands',
                'name_pt' => 'Svalbard e Jan Mayen',
                'acronym' => 'SJ',
                'bacen' => 7552
            ],
            [
                'id' => 204,
                'name' => 'Swaziland',
                'name_pt' => 'Eswatini',
                'acronym' => 'SZ',
                'bacen' => 7544
            ],
            [
                'id' => 205,
                'name' => 'Sweden',
                'name_pt' => 'Suécia',
                'acronym' => 'SE',
                'bacen' => 7641
            ],
            [
                'id' => 206,
                'name' => 'Switzerland',
                'name_pt' => 'Suíça',
                'acronym' => 'CH',
                'bacen' => 7676
            ],
            [
                'id' => 207,
                'name' => 'Syrian Arab Republic',
                'name_pt' => 'Síria, Republica Árabe da',
                'acronym' => 'SY',
                'bacen' => 7447
            ],
            [
                'id' => 208,
                'name' => 'Taiwan, Province of China',
                'name_pt' => 'Formosa (Taiwan)',
                'acronym' => 'TW',
                'bacen' => 1619
            ],
            [
                'id' => 209,
                'name' => 'Tajikistan',
                'name_pt' => 'Tadjiquistao, Republica do',
                'acronym' => 'TJ',
                'bacen' => 7722
            ],
            [
                'id' => 210,
                'name' => 'Tanzania, United Republic of',
                'name_pt' => 'Tanzânia, Republica Unida da',
                'acronym' => 'TZ',
                'bacen' => 7803
            ],
            [
                'id' => 211,
                'name' => 'Thailand',
                'name_pt' => 'Tailândia',
                'acronym' => 'TH',
                'bacen' => 7765
            ],
            [
                'id' => 212,
                'name' => 'Togo',
                'name_pt' => 'Togo',
                'acronym' => 'TG',
                'bacen' => 8001
            ],
            [
                'id' => 213,
                'name' => 'Tokelau',
                'name_pt' => 'Toquelau, Ilhas',
                'acronym' => 'TK',
                'bacen' => 8052
            ],
            [
                'id' => 214,
                'name' => 'Tonga',
                'name_pt' => 'Tonga',
                'acronym' => 'TO',
                'bacen' => 8109
            ],
            [
                'id' => 215,
                'name' => 'Trinidad and Tobago',
                'name_pt' => 'Trinidad e Tobago',
                'acronym' => 'TT',
                'bacen' => 8150
            ],
            [
                'id' => 216,
                'name' => 'Tunisia',
                'name_pt' => 'Tunísia',
                'acronym' => 'TN',
                'bacen' => 8206
            ],
            [
                'id' => 217,
                'name' => 'Turkey',
                'name_pt' => 'Turquia',
                'acronym' => 'TR',
                'bacen' => 8273
            ],
            [
                'id' => 218,
                'name' => 'Turkmenistan',
                'name_pt' => 'Turcomenistão, Republica do',
                'acronym' => 'TM',
                'bacen' => 8249
            ],
            [
                'id' => 219,
                'name' => 'Turks and Caicos Islands',
                'name_pt' => 'Turcas e Caicos, Ilhas',
                'acronym' => 'TC',
                'bacen' => 8230
            ],
            [
                'id' => 220,
                'name' => 'Tuvalu',
                'name_pt' => 'Tuvalu',
                'acronym' => 'TV',
                'bacen' => 8281
            ],
            [
                'id' => 221,
                'name' => 'Uganda',
                'name_pt' => 'Uganda',
                'acronym' => 'UG',
                'bacen' => 8338
            ],
            [
                'id' => 222,
                'name' => 'Ukraine',
                'name_pt' => 'Ucrânia',
                'acronym' => 'UA',
                'bacen' => 8311
            ],
            [
                'id' => 223,
                'name' => 'United Arab Emirates',
                'name_pt' => 'Emirados Árabes Unidos',
                'acronym' => 'AE',
                'bacen' => 2445
            ],
            [
                'id' => 224,
                'name' => 'United Kingdom',
                'name_pt' => 'Reino Unido',
                'acronym' => 'GB',
                'bacen' => 6289
            ],
            [
                'id' => 225,
                'name' => 'United States',
                'name_pt' => 'Estados Unidos',
                'acronym' => 'US',
                'bacen' => 2496
            ],
            [
                'id' => 226,
                'name' => 'United States Minor Outlying Islands',
                'name_pt' => 'Ilhas Menores Distantes dos Estados Unidos',
                'acronym' => 'UM',
                'bacen' => 18664
            ],
            [
                'id' => 227,
                'name' => 'Uruguay',
                'name_pt' => 'Uruguai',
                'acronym' => 'UY',
                'bacen' => 8451
            ],
            [
                'id' => 228,
                'name' => 'Uzbekistan',
                'name_pt' => 'Uzbequistão, Republica do',
                'acronym' => 'UZ',
                'bacen' => 8478
            ],
            [
                'id' => 229,
                'name' => 'Vanuatu',
                'name_pt' => 'Vanuatu',
                'acronym' => 'VU',
                'bacen' => 5517
            ],
            [
                'id' => 230,
                'name' => 'Venezuela',
                'name_pt' => 'Venezuela',
                'acronym' => 'VE',
                'bacen' => 8508
            ],
            [
                'id' => 231,
                'name' => 'Viet Nam',
                'name_pt' => 'Vietnã',
                'acronym' => 'VN',
                'bacen' => 8583
            ],
            [
                'id' => 232,
                'name' => 'Virgin Islands (British)',
                'name_pt' => 'Virgens, Ilhas (Britânicas)',
                'acronym' => 'VG',
                'bacen' => 8630
            ],
            [
                'id' => 233,
                'name' => 'Virgin Islands (U.S.)',
                'name_pt' => 'Virgens, Ilhas (E.U.A.)',
                'acronym' => 'VI',
                'bacen' => 8664
            ],
            [
                'id' => 234,
                'name' => 'Wallis and Futuna Islands',
                'name_pt' => 'Wallis e Futuna, Ilhas',
                'acronym' => 'WF',
                'bacen' => 8753
            ],
            [
                'id' => 235,
                'name' => 'Western Sahara',
                'name_pt' => 'Saara Ocidental',
                'acronym' => 'EH',
                'bacen' => 6858
            ],
            [
                'id' => 236,
                'name' => 'Yemen',
                'name_pt' => 'Iémen',
                'acronym' => 'YE',
                'bacen' => 3573
            ],
            [
                'id' => 237,
                'name' => 'Yugoslavia',
                'name_pt' => 'Iugoslávia, República Fed. da',
                'acronym' => 'YU',
                'bacen' => 3883
            ],
            [
                'id' => 238,
                'name' => 'Zambia',
                'name_pt' => 'Zâmbia',
                'acronym' => 'ZM',
                'bacen' => 8907
            ],
            [
                'id' => 239,
                'name' => 'Zimbabwe',
                'name_pt' => 'Zimbabue',
                'acronym' => 'ZW',
                'bacen' => 6653
            ],
            [
                'id' => 240,
                'name' => 'Bailiwick of Guernsey',
                'name_pt' => 'Guernsey, Ilha do Canal (Inclui Alderney e Sark)',
                'acronym' => 'GG',
                'bacen' => 1504
            ],
            [
                'id' => 241,
                'name' => 'Bailiwick of Jersey',
                'name_pt' => 'Jersey, Ilha do Canal',
                'acronym' => 'JE',
                'bacen' => 1508
            ],
            [
                'id' => 243,
                'name' => 'Isle of Man',
                'name_pt' => 'Man, Ilha de',
                'acronym' => 'IM',
                'bacen' => 3595
            ],
            [
                'id' => 246,
                'name' => 'Crna Gora (Montenegro)',
                'name_pt' => 'Montenegro',
                'acronym' => 'ME',
                'bacen' => 4985
            ],
            [
                'id' => 247,
                'name' => 'SÉRVIA',
                'name_pt' => 'Republika Srbija',
                'acronym' => 'RS',
                'bacen' => 7370
            ],
            [
                'id' => 248,
                'name' => 'Republic of South Sudan',
                'name_pt' => 'Sudao do Sul',
                'acronym' => 'SS',
                'bacen' => 7600
            ],
            [
                'id' => 249,
                'name' => 'Zona del Canal de Panamá',
                'name_pt' => 'Zona do Canal do Panamá',
                'acronym' => null,
                'bacen' => 8958
            ],
            [
                'id' => 252,
                'name' => 'Dawlat Filasṭīn',
                'name_pt' => 'Palestina',
                'acronym' => 'PS',
                'bacen' => 5780
            ],
            [
                'id' => 253,
                'name' => 'Åland Islands',
                'name_pt' => 'Aland, Ilhas',
                'acronym' => 'AX',
                'bacen' => 153
            ],
            [
                'id' => 255,
                'name' => 'Curaçao',
                'name_pt' => 'Curaçao',
                'acronym' => 'CW',
                'bacen' => 200
            ],
            [
                'id' => 256,
                'name' => 'Saint Martin',
                'name_pt' => 'São Martinho, Ilha de (Parte Holandesa)',
                'acronym' => 'SM',
                'bacen' => 6998
            ],
            [
                'id' => 258,
                'name' => 'Bonaire',
                'name_pt' => 'Bonaire',
                'acronym' => 'AN',
                'bacen' => 990
            ],
            [
                'id' => 259,
                'name' => 'Antartica',
                'name_pt' => 'Antartica',
                'acronym' => 'AQ',
                'bacen' => 420
            ],
            [
                'id' => 260,
                'name' => 'Heard Island and McDonald Islands',
                'name_pt' => 'Ilha Herad e Ilhas Macdonald',
                'acronym' => 'AU',
                'bacen' => 3433
            ],
            [
                'id' => 261,
                'name' => 'Saint-Barthélemy',
                'name_pt' => 'São Bartolomeu',
                'acronym' => 'FR',
                'bacen' => 6939
            ],
            [
                'id' => 262,
                'name' => 'Saint Martin',
                'name_pt' => 'São Martinho, Ilha de (Parte Francesa)',
                'acronym' => 'SM',
                'bacen' => 6980
            ],
            [
                'id' => 263,
                'name' => 'Terres Australes et Antarctiques Françaises',
                'name_pt' => 'Terras Austrais e Antárcticas Francesas',
                'acronym' => 'TF',
                'bacen' => 7811
            ]
        ]);
    }
}
