<div class="svg_map">
    <div id="tooltip<?= $id ?>">tooltip</div>
    <svg id="mapSVG<?= $id ?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" />
</div>

<?php
$this->registerJs("
    new SvgMap({
        svgId : 'mapSVG". $id ."',
        toolTipId: 'tooltip". $id ."',
        states: ruStates
    });
");
?>