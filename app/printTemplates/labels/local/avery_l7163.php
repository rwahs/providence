<?php
/* ----------------------------------------------------------------------
 * app/printTemplates/labels/local/avery_l7163.php
 * ----------------------------------------------------------------------
  * Template configuration:
 *
 * @name Avery L7163 14 to a page
 * @type label
 * @pageSize a4
 * @pageOrientation portrait
 * @tables ca_objects
 * @marginLeft 6mm
 * @marginRight 6mm
 * @marginTop 16mm
 * @marginBottom 6mm
 * @horizontalGutter 0.1mm
 * @verticalGutter 3.5mm
 * @labelWidth 98mm
 * @labelHeight 38mm
 * 
 * ----------------------------------------------------------------------
 */

$vo_result = $this->getVar('result');
?>

{{{
<div class="titleText">^ca_objects.preferred_labels
	<ifdef code="ca_objects.idno">^ca_objects.idno</ifdef>
</div>

<ifdef code="ca_objects.Description">
	<div class="description bodyText margin">^ca_objects.Description</div>
</ifdef>
<ifdef code="ca_entities" restrictToRelationshipTypes="donor">
	<div class="bodyText margin">Source/Donor: <unit relativeTo="ca_entities" restrictToRelationshipTypes="donor">^ca_entity_labels.surname, <ifdef code="ca_entity_labels.forename">^ca_entity_labels.forename</ifdef><ifnotdef code="ca_entity_labels.forename">^ca_entity_labels.middlename</ifnotdef></</unit></div>
</ifdef>
<ifdef code="ca_list_items" restrictToRelationshipTypes="described">
	<div class="bodyText left">^ca_list_item_labels.hierarchy%maxLevelsFromTop=2</div>
</ifdef>
}}}
<div class="right">
	{{{barcode:code128:12:^ca_objects.idno}}}
	<div style="text-align: center" class="smallText">{{{^ca_objects.idno}}}</div>
</div>
<div class="clear"></div>


