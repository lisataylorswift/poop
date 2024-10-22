<?php

        // Получаем ID автора из свойства инфоблока постов
        $authorID = $arResult["DISPLAY_PROPERTIES"]["AUTHOR"]["VALUE"]; 
		
        // Задаем ID инфоблока с авторами
        $IBLOCK_ID_AUTHORS = 5; 
		
        if ($authorID) {
            // Выполняем запрос к инфоблоку для получения данных автора
            $res = CIBlockElement::GetList(
                [],
                ['IBLOCK_ID' => $IBLOCK_ID_AUTHORS, 'ID' => $authorID],
                false,
                false,
                ['ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE']
            );
			
            // Если данные автора найдены, сохраняем их в элемент поста
            if ($authorData = $res->GetNext()) {
                $arResult['PROPERTIES']["AUTHOR"]['AUTHOR_DATA'] = $authorData;
				 // Сохраняем данные автора в элемент
            }
            $authorID = $arResult["DISPLAY_PROPERTIES"]["AUTHOR"]["VALUE"]; 
            
		// echo '<pre>';
		// print_r($arResult["PROPERTIES"]);
		// echo '</pre>';
        }
        
        $tagIDs = $arResult["PROPERTIES"]["TAG"]["VALUE"]; // Массив ID тегов
        $IBLOCK_ID_TAGS = 3; // ID инфоблока с тегами

        $arResult['PROPERTIES']['TAG']['TAG_DATA'] = []; // Инициализация массива для данных тегов
        // echo '<pre>';
        // print_r($tagIDs);
        // echo '</pre>';
        if (!empty($tagIDs)) {
            // Проверяем, является ли $tagIDs массивом

            // Выполняем запрос для каждого ID тега
            foreach ($tagIDs as $tagID) { 
                $res = CIBlockElement::GetList(
                    [],
                    ['IBLOCK_ID' => $IBLOCK_ID_TAGS, 'ID' => $tagID],
                    false,
                    false,
                    ['ID', 'NAME']
                );

                // Если данные тега найдены, сохраняем их
                if ($tagData = $res->GetNext()) {
                    $arResult['PROPERTIES']['TAG']['TAG_DATA'][] = $tagData;
                }

            }
        }

        // echo '<pre>';
        // print_r($arResult['PROPERTIES']['TAG']);
        // echo '</pre>';




        
?>
