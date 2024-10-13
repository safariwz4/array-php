<?php
$text = "Ми будемо раді бачити Вашого сина на нашому заході. Чекаємо на нього 25 жовтня. Оргкомітет."; 
$phrases = explode(". ", $text); 
$parentName = "Шановний Олександре"; 
$phrases[0] = str_replace("Ми будемо", "$parentName!", $phrases[0]); 
$phrases[0] = str_replace("Вашого сина", "Вашу дочку", $phrases[0]); 
$phrases[1] = str_replace("нього", "неї", $phrases[1]); 
$phrases[2] = str_replace("Оргкомітет", "Адміністрація", $phrases[2]); 
$modifiedText = join(".\n", $phrases);

echo nl2br($modifiedText);
?>