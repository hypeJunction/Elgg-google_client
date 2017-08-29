<?php

$entity = elgg_extract('entity', $vars);

echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('google:client:api_key'),
	'name' => 'params[api_key]',
	'value' => $entity->api_key,
]);

