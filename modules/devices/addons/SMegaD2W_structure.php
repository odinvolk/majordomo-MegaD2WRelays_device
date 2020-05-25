<?php
 
$this->device_types['megad2w_relay'] = array(
        'TITLE'=>'Реле MegaD2W',
        'PARENT_CLASS'=>'SControllers',
        'CLASS'=>'SMegaD2WRelays',
        'PROPERTIES'=>array(
            'groupEco'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_ECO,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupEco'),
            'groupEcoOn'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_ECO_ON,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupEcoOn'),
            'groupSunrise'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_SUNRISE,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupSunrise'),
            'groupSunset'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_SUNSET,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupSunset'),
            'isActivity'=>array('DESCRIPTION'=>LANG_DEVICES_IS_ACTIVITY,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdIsActivity'),
            'loadType'=>array('DESCRIPTION'=>LANG_DEVICES_LOADTYPE,
                '_CONFIG_TYPE'=>'select','_CONFIG_HELP'=>'SdLoadType',
                '_CONFIG_OPTIONS'=>'light='.LANG_DEVICES_LOADTYPE_LIGHT.
                    ',heating='.LANG_DEVICES_LOADTYPE_HEATING.
                    ',vent='.LANG_DEVICES_LOADTYPE_VENT.
                    ',curtains='.LANG_DEVICES_LOADTYPE_CURTAINS.
                    ',gates='.LANG_DEVICES_LOADTYPE_GATES.
                    ',power='.LANG_DEVICES_LOADTYPE_POWER),
            'icon'=>array('DESCRIPTION'=>LANG_IMAGE,'_CONFIG_TYPE'=>'style_image','_CONFIG_HELP'=>'SdIcon'),
            'ipAddress'=>array('DESCRIPTION'=>'IP адрес MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'Password'=>array('DESCRIPTION'=>'Пароль MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'Port'=>array('DESCRIPTION'=>'Порт MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'bAddress'=>array('DESCRIPTION'=>'Адрес MegaD2W устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'chA'=>array('DESCRIPTION'=>'Порт А MegaD2W устройства','ONCHANGE'=>'chAUpdated', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'chB'=>array('DESCRIPTION'=>'Порт В MegaD2W устройства','ONCHANGE'=>'chBUpdated', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
        ),
        'METHODS'=>array(
            'turnOnA'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON),
            'turnOffA'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF),
            'switchA'=>array('DESCRIPTION'=>'Пареключить A','_CONFIG_SHOW'=>1),
            'turnOnB'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON),
            'turnOffB'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF),
            'switchB'=>array('DESCRIPTION'=>'Пареключить B','_CONFIG_SHOW'=>1),
            'chAUpdated'=>array('DESCRIPTION'=>'Канал A'),
            'chBUpdated'=>array('DESCRIPTION'=>'Канал B'),
        )
);
        
@include_once(ROOT . 'languages/SMegaD2Wdevice_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SMegaD2Wdevice_default' . '.php');
