<?php
$snippets = array();
$snippets[0] = $modx->newObject('modSnippet');
$snippets[0]->set('id', 0);
$snippets[0]->set('name', 'ditsformsaver');
$snippets[0]->set('description', 'FormIt hook saving form results');
$snippets[0]->set('snippet', file_get_contents($sources['source_core'].'/elements/snippets/snippet.ditsformsaver.php'));