<?php

return [
	'sourcePath' => __DIR__ . '/../',
	'messagePath' => __DIR__,
	'languages' => ['ru'],
	'translator' => 'Yii::t',
	'sort' => false,
	'overwrite' => true,
	'removeUnused' => false,
	'only' => ['*.php'],
	'except' => [
		'.svn',
		'.git',
		'.gitignore',
		'.gitkeep',
		'.hgignore',
		'.hgkeep',
		'/messages',
	],
	'format' => 'php',
];