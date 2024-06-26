<?php

// HM-Sec-SCo|Badezimmer Fenster:0||VISIBLE=|OPERATE=|UNREACH=1416|STICKY_UNREACH=1412|CONFIG_PENDING=1398|LOWBAT=1406|RSSI_DEVICE=1410|RSSI_PEER=1411|DEVICE_IN_BOOTLOADER=1402|UPDATE_PENDING=1420|
// HM-Sec-SCo|Badezimmer Fenster:1||VISIBLE=true|OPERATE=true|STATE=1449|ERROR=1425|LOWBAT=1448|

// Validated by Braindead, steingarten

// https://community.openhab.org/t/homeatic-ip-weather-sensor-hmip-swo-access-to-internal-system-variable/134885


function HmIP_SWDO_PL($component) {

    global $export;
    $obj = $export;
    $key = array_search(substr($component['address'], 0, -1)."0", array_column($obj['channels'], 'address'));
    foreach($obj['channels'][$key]['datapoints'] as $datapoint)
    { $status_component[$datapoint['type']] = $datapoint['ise_id']; }

	// ShowTime - Uhrzeit der letzten Änderung anzeigen
		if(isset($component['showtime']))
		{
			if($component['showtime'] == "true") { $ShowTime = '<span class="info" data-id="' . $component['ise_id']  . 't" data-component="showtime" data-datapoint="showtime"></span>'		; }
			else { $ShowTime = ''; }
		}
		else { $ShowTime = ''; }	    
    
    if ($component['parent_device_interface'] == 'HmIP-RF' && $component['visible'] == 'true' && isset($component['STATE'])) {
      if (!isset($component['color'])) $component['color'] = '#595959';
      if(!isset($component['state_icons'])) {
                    $component['state_icons'] = '';
      }
      
        return '<div class="hh" style=\'border-left-color: '.$component['color'].'; border-left-style: solid;\'>'
            . '<div class="pull-left"><img src="icon/' . $component["icon"] . '" class="icon">' . $component['name'] . '</div>'
            . '<div class="pull-right">'
				. $ShowTime
                . '<span class="info" data-id="' . $status_component['LOW_BAT'] . '" data-component="' . $component['component'] . '" data-datapoint="LOW_BAT"></span>'
                . '<span class="info" data-id="' . $component['STATE'] . '" data-component="' . $component['component'] . '" data-state-icons="' . $component['state_icons'] . '" data-datapoint="STATE"></span>'
            . '</div>'
            . '<div class="clearfix"></div>'
        . '</div>';
    }
}
