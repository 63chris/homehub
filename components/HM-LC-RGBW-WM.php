<?php
function HM_LC_RGBW_WM($component) {
    if ($component['parent_device_interface'] == 'BidCos-RF' && $component['visible'] == 'true' && isset($component['LEVEL'])) {
        $modalId = mt_rand();
        
        if (!isset($component['color'])) $component['color'] = '#FFCC00';
        return '<div class="hh" style=\'border-left-color: '.$component['color'].'; border-left-style: solid;\'>'
            . '<div data-toggle="collapse" data-target="#' . $modalId . '">'
                . '<div class="pull-left"><img src="icon/' . $component["icon"] . '" class="icon">' . $component['name'] . '</div>'
                . '<div class="pull-right">'
                    . '<span class="info" data-id="' . ($component['LEVEL']-22) . '" data-component="' . $component['component'] . '" data-datapoint="LOWBAT"></span>'
                    . '<span class="info" data-id="' . $component['LEVEL'] . '" data-component="' . $component['component'] . '" data-datapoint="LEVEL"></span>'
                    . '<span class="info" data-id="' . ($component['LEVEL']+11) . '" data-component="' . $component['component'] . '" data-datapoint="COLOR"></span>'
                . '</div>'
                . '<div class="clearfix"></div>'
            . '</div>'
            . '<div class="hh2 collapse" id="' . $modalId . '">'
                . '<div class="row text-center">'
                    . '<div class="form-inline">'
                        . '<div class="input-group">'
                            . '<input type="number" name="' . $component['LEVEL'] . '" min="0" max="100" class="form-control" placeholder="Zahl eingeben">'
                            . '<span class="input-group-btn">'
                                . '<button class="btn btn-primary set" data-datapoint="4" data-set-id="' . $component['LEVEL'] . '" data-set-value="">OK</button>'
                            . '</span>'
                        . '</div>'
                        . '<div class="btn-group">'
                            . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="1.0">'
                                . '<img src="icon/light_light_dim_100.png" />'
                            . '</button>'
                            . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.8">'
                                . '<img src="icon/light_light_dim_80.png" />'
                            . '</button>'
                            . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.6">'
                                . '<img src="icon/light_light_dim_60.png" />'
                            . '</button>'
                            . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.4">'
                                . '<img src="icon/light_light_dim_40.png" />'
                            . '</button>'
                            . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.2">'
                                . '<img src="icon/light_light_dim_20.png" />'
                            . '</button>'
                            . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.0">'
                                . '<img src="icon/light_light_dim_00.png" />'
                            . '</button>'
                        . '</div>'
                    . '</div>'
                . '</div>'
                . '<div class="row text-center top15">'
                    . '<div class="row text-center">'
                        . '<div class="form-inline">'
                            . '<div class="input-group">'
                                . '<input type="number" name="' . ($component['LEVEL']+11) . '" min="0" max="200" class="form-control" placeholder="Zahl eingeben">'
                                . '<span class="input-group-btn">'
                                    . '<button class="btn btn-primary set" data-datapoint="4" data-set-id="' . ($component['LEVEL']+11) . '" data-set-value="">OK</button>'
                                . '</span>'
                            . '</div>'
                            . '<div class="btn-group">'
                                . '<button type="button" class="btn btn-primary set" data-set-id="' . ($component['LEVEL']+11) . '" data-set-value="0">'
                                    . 'Rot'
                                . '</button>'
                                . '<button type="button" class="btn btn-primary set" data-set-id="' . ($component['LEVEL']+11) . '" data-set-value="15">'
                                    . 'Gelb'
                                . '</button>'
                                . '<button type="button" class="btn btn-primary set" data-set-id="' . ($component['LEVEL']+11) . '" data-set-value="66">'
                                    . 'Gr&uuml;n'
                                . '</button>'
                                . '<button type="button" class="btn btn-primary set" data-set-id="' . ($component['LEVEL']+11) . '" data-set-value="133">'
                                    . 'Blau'
                                . '</button>'
                                . '<button type="button" class="btn btn-primary set" data-set-id="' . ($component['LEVEL']+11) . '" data-set-value="150">'
                                    . 'Lila'
                                . '</button>'
                                . '<button type="button" class="btn btn-primary set" data-set-id="' . ($component['LEVEL']+11) . '" data-set-value="200">'
                                    . 'Weiß'
                                . '</button>'
                            . '</div>'
                        . '</div>'
                    . '</div>'
                . '</div>'
            . '</div>'
        . '</div>';
    }
}
