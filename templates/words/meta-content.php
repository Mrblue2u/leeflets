<?php
$content = array(
	'page' => array(
		'type' => 'fieldset',
		'elements' => array(
			'title' => array(
				'type' => 'text',
				'label' => 'Page Title',
				'required' => true,
				'autofocus' => true,
				'tip' => 'This is the title displayed on your page.'
			),
			'intro-paragraph' => array(
				'type' => 'wysiwyg',
				'label' => 'Content',
				'required' => true,
				'tip' => 'This is the text displayed on your page.'
			)
		)
	),
	'movies' => array(
		'type' => 'repeatable',
		'title' => 'Movies',
		'description' => 'Consume all the Sam Jackson movies!',
		'empty-to-show' => 3,
		'elements' => array(
			'title' => array(
				'type' => 'text',
				'column-width' => '40%',
				'placeholder' => "Title"
			),
			'url' => array(
				'type' => 'url',
				'column-width' => '40%',
				'placeholder' => "IMDB URL"
			),
			'stars' => array(
				'type' => 'select',
				'column-width' => '20%',
				'options' => array(
					'' => 'Star Rating',
					'1' => '1/5',
					'2' => '2/5',
					'3' => '3/5',
					'4' => '4/5',
					'5' => '5/5'
				)
			)
		)
	),
	'left-button' => array(
		'type' => 'fieldset',
		'elements' => array(
			'text' => array(
				'type' => 'text',
				'label' => 'Left Button Text',
				'required' => true,
				'tip' => 'The text for the left hand button link.'
			),
			'url' => array(
				'type' => 'url',
				'label' => 'Left Button Link',
				'required' => true,
				'tip' => 'The link for the left hand button.'
			)
		)
	),
	'right-button' => array(
		'type' => 'fieldset',
		'elements' => array(
			'text' => array(
				'type' => 'text',
				'label' => 'Right Button Text',
				'required' => true,
				'tip' => 'The text for the right hand button link.'
			),
			'url' => array(
				'type' => 'url',
				'label' => 'Right Button Link',
				'required' => true,
				'tip' => 'The link for the right hand button.'
			)
		)
	)
);