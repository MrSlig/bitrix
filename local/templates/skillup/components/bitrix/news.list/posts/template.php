<?
//echo '<pre>';
//print_r($arResult);
//$this->addExternalCss();
//$this->addExternalJs();
?>

<? if(count($arResult['ITEMS']) > 0): ?>
    <div>
        <? foreach ($arResult['ITEMS'] as $aItems): ?>
            <div>
                <?= $aItems['PROPERTIES']['AUTHOR']['VALUE']; ?>
                <?= $aItems['PROPERTIES']['DATA_PUBLIC']['VALUE']; ?>
                <img class="post_user_ava" src="
                     <?= $aItems['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC']; ?>
                " alt="^_^" />
            </div>

            <div>
                <img src="
                    <?= $aItems['DETAIL_PICTURE']['SRC']; ?>
                "/>
            </div>

            <div>
                <?= $aItems['PROPERTIES']['LIKES']['VALUE']; ?>
                <?= $aItems['PROPERTIES']['COMMENT']['VALUE']; ?>

                <? foreach ($aItems['PROPERTIES']['TAGS']['VALUE'] as $aValue): ?>
                    <?= $aValue; ?>
                <? endforeach; ?>
            </div>

        <? endforeach; ?>
    </div>
<? endif ?>