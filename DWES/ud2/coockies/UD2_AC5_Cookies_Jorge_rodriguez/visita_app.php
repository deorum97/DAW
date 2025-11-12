<?php
    if (!isset($_COOKIE['visitas'])) { // si no existe
    setcookie('visitas', '1', time() + 3600 * 24);
    echo "BIENVENIDO<br>";
    } else { // si existe
        $visitas = (int)$_COOKIE['visitas'];
        $visitas++; // se reescribe incrementada
        setcookie('visitas', $visitas, time() + 3600 * 24);
        echo "VISITA $visitas <br>";
        if($visitas>=10){
            setcookie('visitas','',time()- 3600 * 24);
        }
    }

    if(!isset($_COOKIE['idioma']) || $_COOKIE['idioma']==="es"){
        echo 'Utiliza un sistema con cookies para seleccionar el idioma de un script, que contendrá un título "Selección de idioma" Dicho idioma se elegirá en un SELECT html, de modo que al seleccionarlo cada vez que se visita la página aparecerá el título en el idioma correspondiente. (Usa Google Translate aparte para obtener la traducción en 4 o 5 idiomas y hardcodear la asignación en código).';
    }else{
        $idioma = $_COOKIE['idioma'];
        switch ($idioma){
            case "es";
                echo 'Utiliza un sistema con cookies para seleccionar el idioma de un script, que contendrá un título "Selección de idioma" Dicho idioma se elegirá en un SELECT html, de modo que al seleccionarlo cada vez que se visita la página aparecerá el título en el idioma correspondiente. (Usa Google Translate aparte para obtener la traducción en 4 o 5 idiomas y hardcodear la asignación en código).';
                break;
            case "in";
                echo 'It uses a cookie-based system to select the language of a script, which will contain a "Language Selection" title. This language will be chosen in an HTML SELECT statement, so that when selected, the title will appear in the corresponding language each time the page is visited. (It uses Google Translate separately to obtain the translation in 4 or 5 languages ​​and hardcodes the mapping in code.)';
                break;
            case "ru";
                echo 'Система использует систему на основе cookie для выбора языка скрипта, который будет содержать заголовок «Выбор языка». Этот язык будет выбран в HTML-операторе SELECT, так что при выборе этого языка заголовок будет отображаться на соответствующем языке при каждом посещении страницы. (Для получения перевода на 4 или 5 языков используется Google Translate, и сопоставление жестко закодировано в коде.)';
                break;
            case "ma";
                echo 'ꯃꯁꯤꯅꯥ ꯁ꯭ꯛꯔꯤꯞꯇ ꯑꯃꯒꯤ ꯂꯣꯜ ꯈꯅꯕꯗꯥ ꯀꯨꯀꯤꯗꯥ ꯌꯨꯝꯐꯝ ꯑꯣꯏꯕꯥ ꯁꯤꯁ꯭ꯇꯦꯝ ꯑꯃꯥ ꯁꯤꯖꯤꯟꯅꯩ, ꯃꯁꯤꯗꯥ "ꯂꯣꯜ ꯈꯅꯕꯒꯤ" ꯇꯥꯏꯇꯜ ꯑꯃꯥ ꯌꯥꯑꯣꯒꯅꯤ꯫ ꯂꯣꯜ ꯑꯁꯤ HTML SELECT ꯁ꯭ꯇꯦꯇꯃꯦꯟꯇ ꯑꯃꯗꯥ ꯈꯅꯒꯅꯤ, ꯃꯔꯝ ꯑꯗꯨꯅꯥ ꯈꯅꯒꯠꯂꯕꯥ ꯃꯇꯃꯗꯥ, ꯄꯦꯖ ꯑꯗꯨ ꯚꯤꯖꯤꯠ ꯇꯧꯕꯥ ꯈꯨꯗꯤꯡꯗꯥ ꯇꯥꯏꯇꯜ ꯑꯗꯨ ꯃꯔꯤ ꯂꯩꯅꯕꯥ ꯂꯣꯜ ꯑꯗꯨꯗꯥ ꯊꯣꯔꯛꯀꯅꯤ꯫ (ꯃꯁꯤꯅꯥ ꯂꯣꯜ ꯴ ꯅꯠꯔꯒꯥ ꯵ꯗꯥ ꯍꯟꯗꯣꯀꯄꯥ ꯑꯗꯨ ꯐꯪꯅꯕꯥ ꯇꯣꯉꯥꯟꯅꯥ ꯒꯨꯒꯜ ꯇ꯭ꯔꯥꯟꯁꯂꯦꯠ ꯁꯤꯖꯤꯟꯅꯩ ꯑꯃꯁꯨꯡ ꯃꯦꯄꯤꯡ ꯑꯗꯨ ꯀꯣꯗꯇꯥ ꯍꯥꯔꯗꯀꯣꯗ ꯇꯧꯏ꯫)';
                break;
        }
    }


?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8"
</head>
<body>
<form action="visita_app_logica.php" method="POST"
<label>Selecciona un idioma</label><br>
<select name="idioma">
    <option value="es">Español</option>
    <option value="in">Ingles</option>
    <option value="ru">Ruso</option>
    <option value="ma">Manipurí</option>
</select>
<input type="submit" value="cambiar idioma">
</body>