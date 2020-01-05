<?php
// @codingStandardsIgnoreFile
return array(
    'domain' => "[[DOMAIN]]", // Домен | Ideal_Text
    'robotEmail' => "robot@[[DOMAIN]]", // Почтовый ящик, с которого будут приходить письма с сайта | Ideal_Text
    'mailForm' => "info@[[DOMAIN]]", // Почтовый ящик менеджера сайта | Ideal_Text
    'phone' => "(495) 123-45-67", // Телефон в шапке сайта | Ideal_Text
    'urlSuffix' => ".html", // Стандартный суффикс URL | Ideal_Text
    'allowResize' => "", // Разрешённые размеры изображений (по одному на строку) | Ideal_Area
    'cms' => array( // CMS
        'tmpFolder' => "/tmp", // Путь к папке с временными файлами | Ideal_Text
        'errorLog' => "firebug", // Способ уведомления об ошибках | Ideal_Select | {"firebug":"FireBug","email":"отправлять на email менеджера","display":"отображать в браузере","comment":"комментарий в html-коде","file":"сохранять в файл notice.log"}
        'adminEmail' => "top@neox.ru", // Почта, на которую будут отправляться сообщения об ошибках | Ideal_Text
        'error404Notice' => "0", // Уведомление о 404ых ошибках | Ideal_Checkbox
    ),
);
