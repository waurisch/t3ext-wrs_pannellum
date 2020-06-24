<?php
defined('TYPO3_MODE') or die();

call_user_func(static function () {

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );
    $iconRegistry->registerIcon(
        'wrspannellum-view', // Icon-Identifier, z.B. tx-myext-action-preview
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:wrs_pannellum/Resources/Public/Icons/Extension.svg']
    );

});