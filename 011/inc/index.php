<?php

echo '<h1>INDEX START</h1>';


//include 'file1.php';  файл в том же самом директории;
//include '../dir2/file1.php'; файл в другой папке;

//include __DIR__ .'/../dir2/file1.php';  //первый способ включения файла в файл;
//include_once __DIR__ .'/../dir2/file1.php'; // лучше не использовать;
//@include __DIR__ .'/../dir2/file11.php'; //если файла file11 нет, будет ошибка. Чтобы пропала ошибка - @include. ТАК НЕ ДЕЛАТЬ;
//require __DIR__ .'/../dir2/file1.php'; // работает так же, как include, но если не находит файл - сразу ошибка и не продолжает код.
//require_once __DIR__ .'/../dir2/file1.php'; //4-ый способ, по аналогии с include_once;

require __DIR__ .'/../dir2/file1.php'; // сейчас используется этот способ;

echo '<h1>INDEX END</h1>';

