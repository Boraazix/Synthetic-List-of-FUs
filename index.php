<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Lista de UFs</title>
</head>
<body>
    <header>
        <h2>Uma Lista Sintética das Unidades Federativas do Brasil</h2>
        <hr>
    </header>
    <main>
        <?php
        $ufs = [
            'AC' => ['https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg',
                'Acre',
                'AC',
                'Rio Branco',
                164122.2,
                795145,
                4.30,
                13622000,
                0.2,
                16953.46,
                0.663,
                '86.9%',
                '17.0&permil;',
                '73.9 anos'
            ],
            'AL' => [
                'https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg',
                'Alagoas',
                'AL',
                'Maceió',
                27767.7,
                3327551,
                108.61,
                46364000,
                0.8,
                13877.53,
                0.631,
                '80.6%',
                '19.5&permil;',
                '71.6 anos'
            ],
            'AP' => [
                'https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg',
                'Amapá',
                'AP',
                'Macapá',
                142814.6,
                756500,
                4.16,
                13861000,
                0.2,
                18079.54,
                0.708,
                '95%',
                '23.2&permil;',
                '73.9 anos'
            ],
            'AM' => [
                'https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg',
                'Amazonas',
                'AM',
                'Manaus',
                1570745.7,
                3893763,
                2.05,
                86560000,
                1.4,
                21978.95,
                0.674,
                '93.1%',
                '18.2&permil;',
                '71.9 anos'
            ],
            'BA' => [
                'https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg',
                'Bahia',
                'BA',
                'Salvador',
                564692.7,
                15150143,
                24.46,
                245025000,
                4.1,
                16115.89,
                0.66,
                '87%',
                '17.3&permil;',
                '73.5 anos'
            ],
            'CE' => [
                'https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg',
                'Ceará',
                'CE',
                'Fortaleza',
                148825.6,
                8867448,
                54.40,
                130621000,
                2.2,
                14669.14,
                0.682,
                '84.8%',
                '14.4&permil;',
                '73.8 anos'
            ],
            'DF' => [
                'https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg',
                'Distrito Federal',
                'DF',
                'Brasília',
                5779.9,
                3055149,
                526.70,
                244733000,
                4.1,
                66963.21,
                0.824,
                '99.3%',
                '6.0&permil;',
                '78.3 anos'
            ],
            'ES' => [
                'https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg',
                'Espírito Santo',
                'ES',
                'Vitória',
                46095.6,
                4064052,
                87.50,
                53267000,
                0.9,
                13107.18,
                0.721,
                '92.6%',
                '11.9&permil;',
                '76.1 anos'
            ],
            'GO' => [
                'https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg',
                'Goiás',
                'GO',
                'Goiânia',
                340086.7,
                7188667,
                21.12,
                167777000,
                2.8,
                23298.31,
                0.728,
                '95.6%',
                '11.6&permil;',
                '76.9 anos'
            ],
            'MA' => [
                'https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg',
                'Maranhão',
                'MA',
                'São Luís',
                331983.3,
                7153262,
                21.53,
                85769000,
                1.4,
                11991.79,
                0.636,
                '86.5%',
                '12.9&permil;',
                '70.9 anos'
            ],
            'MT' => [
                'https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg',
                'Mato Grosso',
                'MT',
                'Cuiabá',
                903366.1,
                3526220,
                3.90,
                806652000,
                1.3,
                22895.03,
                0.724,
                '92.6%',
                '9.6&permil;',
                '75.3 anos'
            ],
            'MS' => [
                'https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg',
                'Mato Grosso do Sul',
                'MS',
                'Campo Grande',
                357125.0,
                2809394,
                7.87,
                131842000,
                1.9,
                43180.10,
                0.778,
                '95.4%',
                '7.5&permil;',
                '76.1 anos'
            ],
            'MG' => [
                'https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg',
                'Minas Gerais',
                'MG',
                'Belo Horizonte',
                586522.1,
                21168791,
                36.11,
                473141000,
                8.0,
                22053.94,
                0.727,
                '89.9%',
                '16.9&permil;',
                '75.4 anos'
            ],
            'PA' => [
                'https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg',
                'Pará',
                'PA',
                'Belém',
                1247954.7,
                8690745,
                6.96,
                221292000,
                3.6,
                22516.73,
                0.671,
                '88.2%',
                '17.7&permil;',
                '71.8 anos'
            ],
            'PB' => [
                'https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg',
                'Paraíba',
                'PB',
                'João Pessoa',
                56585.0,
                4025558,
                68.52,
                45366000,
                0.8,
                12192.17,
                0.667,
                '82.4%',
                '20.6&permil;',
                '74.4 anos'
            ],
            'PR' => [
                'https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg',
                'Paraná',
                'PR',
                'Curitiba',
                199307.9,
                11516840,
                57.83,
                367230000,
                6.1,
                31816.19,
                0.775,
                '89.3%',
                '11.3&permil;',
                '77.6 anos'
            ],
            'PE' => [
                'https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg',
                'Pernambuco',
                'PE',
                'Recife',
                98148.3,
                9616621,
                97.81,
                123451000,
                2.1,
                12850.67,
                0.663,
                '84.8%',
                '21.7&permil;',
                '72.6 anos'
            ],
            'PI' => [
                'https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg',
                'Piauí',
                'PI',
                'Teresina',
                251577.7,
                3273227,
                12.99,
                62052000,
                1.0,
                18929.02,
                0.653,
                '86.7%',
                '19.1&permil;',
                '72.3 anos'
            ],
            'RJ' => [
                'https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg',
                'Rio de Janeiro',
                'RJ',
                'Rio de Janeiro',
                43780.7,
                17366189,
                398.07,
                638734000,
                10.6,
                38588.11,
                0.799,
                '95.1%',
                '6.5&permil;',
                '75.4 anos'
            ],
            'RN' => [
                'https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg',
                'Rio Grande do Norte',
                'RN',
                'Natal',
                52811.0,
                3651514,
                69.10,
                45445000,
                0.8,
                12485.85,
                0.685,
                '86.5%',
                '20.2&permil;',
                '75.1 anos'
            ],
            'RS' => [
                'https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg',
                'Rio Grande do Sul',
                'RS',
                'Porto Alegre',
                281748.5,
                11422973,
                39.26,
                474183000,
                8.0,
                41589.49,
                0.802,
                '96.8%',
                '5.6&permil;',
                '78.3 anos'
            ],
            'RO' => [
                'https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg',
                'Rondônia',
                'RO',
                'Porto Velho',
                237576.2,
                1796460,
                7.56,
                36188000,
                0.6,
                20221.66,
                0.689,
                '90.1%',
                '17.0&permil;',
                '74.4 anos'
            ],
            'RR' => [
                'https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg',
                'Roraima',
                'RR',
                'Boa Vista',
                224299.0,
                 450479,
                2.01,
                29200000,
                0.5,
                44654.63,
                0.712,
                '96.2%',
                '21.5&permil;',
                '73.6 anos'
            ],
            'SC' => [
                'https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg',
                'Santa Catarina',
                'SC',
                'Florianópolis',
                95736.2,
                7164788,
                74.77,
                212052000,
                3.5,
                30255.17,
                0.788,
                '97.3%',
                '4.5&permil;',
                '79.1 anos'
            ],
            'SP' => [
                'https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg',
                'São Paulo',
                'SP',
                'São Paulo',
                248209.4,
                46289333,
                186.57,
                2420900000,
                40.4,
                54449.15,
                0.826,
                '99.4%',
                '6.9&permil;',
                '77.6 anos'
            ],
            'SE' => [
                'https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg',
                'Sergipe',
                'SE',
                'Aracaju',
                21915.1,
                2318822,
                105.81,
                28364000,
                0.5,
                12209.67,
                0.638,
                '84.5%',
                '20.4&permil;',
                '73.5 anos'
            ],
            'TO' => [
                'https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg',
                'Tocantins',
                'TO',
                'Palmas',
                277720.5,
                1550194,
                5.58,
                28693000,
                0.5,
                18511.71,
                0.672,
                '92.6%',
                '18.7&permil;',
                '74.8 anos'
            ]
        ]
        ?>
        <table>
            <thead>
                <tr>
                    <th>Bandeira</th>
                    <th>Unidade federativa</th>
                    <th>Abreviação</th>
                    <th>Sede de Governo</th>
                    <th>Área (km&#178;)</th>
                    <th>População (2014)</th>
                    <th>Densidade (2005)</th>
                    <th>PIB (2015)</th>
                    <th>(&#37; total)(2015)</th>
                    <th>PIB per capta (R&#36;)(2015)</th>
                    <th>IDH (2010)</th>
                    <th>Alfabetização (2016)</th>
                    <th>Mortalidade Infantil (2016)</th>
                    <th>Expectativa de Vida (2016)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($ufs as $key => $value)
                {
                    echo '<tr>';
                    foreach($value as $k => $v)
                    {
                        if($k==0)
                            echo"<td><img src=\"$v\" alt=\"Bandeira do/de $value[1]\"></td>";
                        else
                            echo"<td>$v</td>";
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <hr>
        <p>&copy; 2023 Russell Edward, all rights reserved</p>
    </footer>
</body>
</html>