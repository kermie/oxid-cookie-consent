<?php
$sMetadataVersion = '2.1';
$aModule = [
    'id' => 'oxps/cookiemanager',
    'title' => 'CookieManager',
    'description' => 'Dieses Modul ist für das Managen von Cookies zuständig!',
    'version' => '1.0',
    'author' => 'Moritz Demmer',
    'events' => array(
        'onActivate' => '\OxidProfessionalServices\CookieManager\Core\Events::onActivate',
        'onDeactivate' => '\OxidProfessionalServices\CookieManager\Core\Events::onDeactivate'
    ),

    'templates' => array(),
    'blocks' => array(
        array(
            'template' => 'layout/page.tpl',
            'block' => 'layout_header',
            'file' => 'views/blocks/layout/page.tpl',
        ),

    ),

    'settings' => array(
        array('group' => 'cookiemanager_settings', 'name' => 'cmSettings',
            'type' => 'select', 'value' => 'Consent Manager', 'constraints' => 'tarteaucitron|klaro'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacHashtag',
            'type' => 'str', 'value' => '#tarteaucitron'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacCookieName',
            'type' => 'str', 'value' => 'tartaucitron'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacOrientation', 'type' => 'str', 'value' => 'bottom'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacShowAlertSmall', 'type' => 'bool', 'value' => 'true'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacCookiesList', 'type' => 'bool', 'value' => 'true'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacAdblocker', 'type' => 'bool', 'value' => 'false'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacAcceptAllCta', 'type' => 'bool', 'value' => 'true'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacHighPrivacy', 'type' => 'bool', 'value' => 'false'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacHandleBrowserDNTRequest',
            'type' => 'bool', 'value' => 'false'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacRemoveCredit', 'type' => 'bool', 'value' => 'false'),
        array('group' => 'tarteaucitron_settings', 'name' => 'tacMoreInfoLink', 'type' => 'bool', 'value' => 'true')


    ),

    'controllers' => array(),

    'extend' => array(
        \OxidEsales\Eshop\Core\ViewConfig::class => \OxidProfessionalServices\CookieManager\Core\ViewConfig::class
    )

];
