<?php

$entity = elgg_extract('entity', $vars);

echo elgg_view_input('text', array(
	'name' => 'params[api_key]',
	'value' => $entity->api_key,
	'label' => elgg_echo('google:client:api_key'),
));

