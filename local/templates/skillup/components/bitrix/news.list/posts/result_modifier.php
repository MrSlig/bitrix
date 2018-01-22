<?php

$aSizePost = [
    'width' => '400',
    'height' => '250',
];

$aSizeAvatar = [
    'width' => '50',
    'height' => '50',
];

foreach ($arResult['ITEMS'] as &$aItem) {

    $aPicture = CFile::ResizeImageGet(
        $aItem['DETAIL_PICTURE'],
        $aSizePost,
        BX_RESIZE_IMAGE_EXACT);

    $aItem['DETAIL_PICTURE']['SRC'] = $aPicture['src'];

    $aPicture = CFile::ResizeImageGet(
        $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE'],
        $aSizeAvatar,
        BX_RESIZE_IMAGE_EXACT);

    $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC'] = $aPicture['src'];
}