<?php
function HmIP_SWSD_2($component) {

    global $export;
    $obj = $export;
    $key = array_search(substr($component['address'], 0, -1)."0", array_column($obj['channels'], 'address'));
    foreach($obj['channels'][$key]['datapoints'] as $datapoint)
    { $status_component[$datapoint['type']] = $datapoint['ise_id']; }
    
    if ($component['parent_device_interface'] == 'HmIP-RF' && $component['visible'] == 'true' && isset($component['SMOKE_DETECTOR_ALARM_STATUS'])) {
        if (!isset($component['color'])) $component['color'] = '#595959';
        return '<div class="hh" style=\'border-left-color: '.$component['color'].'; border-left-style: solid;\'>'
            . '<div class="pull-left"><img src="icon/' . $component["icon"] . '" class="icon">' . $component['name'] . '</div>'
            . '<div class="pull-right">'
                . '<span class="info" data-id="' . $status_component['LOW_BAT'] . '" data-component="' . $component['component'] . '" data-datapoint="LOW_BAT"></span>'
                . '<span class="info" data-id="' . $component['SMOKE_DETECTOR_ALARM_STATUS'] . '" data-component="' . $component['component'] . '" data-datapoint="SMOKE_DETECTOR_ALARM_STATUS"></span>'
            . '</div>'
            . '<div class="clearfix"></div>'
        . '</div>';
    }
}
