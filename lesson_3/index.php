<?php

$br = '<br>';

//задание 1

const NUMBER = 100;
$i = 0;

while ($i++ <= NUMBER) {
    if ($i % 3 === 0) {
        echo $i.' ';
    }
}
echo $br.$br;


//задание 2

$i = 0;
do {
    if ($i === 0) {
        echo $i.' - это ноль'.$br;
        continue;
    }
    
    if ($i % 2 === 0) {
        echo $i.' - четное число'.$br;
    } else {
        echo $i.' - нечетное число'.$br;
    }
    
} while ($i++ < 10);
echo $br;


//задание 3

$towns = [
    'Московская область' => [
        'Москва', 'Зеленоград', 'Клин',
    ],
    'Ленинградская область' => [
        'Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт',
    ],
    'Рязанская область' => [
        'Рязань', 'Рыбное', 'Новоселки',
    ],
];

foreach ($towns as $region => $city) {
    echo $region.':<br>';
    foreach ($city as $town) {
        if (next($city)) {
            echo $town.', ';
        } else {
            echo $town.'<br>';
        }
    }
}
echo $br.$br;


//задание 4

const LITER = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'ye',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'y',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sch',
    'ъ' => '',
    'ы' => 'yi',
    'ь' => '\'',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
];

function transliter($text) {
    
    $temp = '';
    $splittext = preg_split('//u', $text);
    
    foreach ($splittext as $rusLetter) {
        $isLowLetter = mb_strtolower($rusLetter) === $rusLetter;
        $letter = LITER[mb_strtolower($rusLetter)];
        if (empty($letter))
            $temp .= $rusLetter;
        else
            $temp .= $isLowLetter ? $letter : mb_strtoupper($letter);
    }
    return $temp;
}

$text = 'Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый опыт реализация намеченных плановых заданий способствует подготовки и реализации соответствующий условий активизации. Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа форм развития.';

echo transliter($text).$br.$br;


//задание 5

echo str_replace(' ', '_', $text).$br.$br;


//задание 7

for ($i = 0 ; $i < 10; print "$i", $i++) {};
echo $br.$br;
    

//задание 8

foreach ($towns as $region => $city) {
    echo $region.':<br>';
    foreach ($city as $town) {
        $sym = mb_substr($town, 0, 1);
        if ($sym === 'К') {
            echo $town.', ';
        }
    }
    echo $br;
}
echo $br;


//задание 9

$newLiter = LITER;
$newLiter[' '] = '_';

function transliterNew($text) {
    
    global $newLiter;
    $temp = '';
    $splittext = preg_split('//u', $text);
    
    foreach ($splittext as $rusLetter) {
        $isLowLetter = mb_strtolower($rusLetter) === $rusLetter;
        $letter = $newLiter[mb_strtolower($rusLetter)];
        if (empty($letter))
            $temp .= $rusLetter;
        else
            $temp .= $isLowLetter ? $letter : mb_strtoupper($letter);
    }
    return $temp;
}

echo transliterNew($text).$br.$br;


//задание 6

$towns['Тверская область'] = '';
$towns['Калужская область'] = ['Калуга', 'Воротынск', 'Кондрово'];
?>

<ul>
<?php foreach ($towns as $region => $city): ?>
    <li><?=$region ?></li>
    <?php if (is_array($city)): ?>
        <ul>
        <?php foreach ($city as $town): ?>
            <li><?=$town ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
