<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var $arParams */
/** @var $list */
include_once('.list.php');
?>
<div class="social">
    <?php foreach ($arParams as $class => $link) :
        if (empty($link) || !isset($list[$class])) {
            continue;
        } ?>
        <a href="<?= $link; ?>"><span class="<?= $class; ?>"></span></a>
    <?php endforeach; ?>
</div>