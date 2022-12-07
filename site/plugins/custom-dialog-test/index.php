<?php

use Kirby\Cms\App;

App::plugin('custom/dialog', [
  'areas' => [
    'site' => function ($kirby) {
      return [
        'dialogs' => [
          'page.changeStatus' => [
            'load' => function (string $id) {
                return [
                    'component' => 'k-form-dialog',
                    'icon' => 'edit',
                    'props' => [
                        'text' => "CUSTOM CHANGE STATUS<br><br>",
                        'fields' => [
                            'optionsDemo1' => [
                                'type' => 'radio',
                                'label' => 'Doesnt load options',
                                'default' => 'opt2',
                                'options' => [
                                    'opt1' => 'Option1',
                                    'opt2' => 'Option2',
                                    'opt3' => 'Option3',
                                ],
                                'columns' => 3,
                            ],
                            'optionsDemo2' => [
                                'type' => 'radio',
                                'label' => 'Or default value',
                                'default' => 'opt2',
                                'options' => [
                                    ['value'=>'opt1', 'text'  => 'O 1'],
                                    ['value'=>'opt2', 'text'  => 'O 2'],
                                    ['value'=>'opt3', 'text'  => 'O 3'],
                                ],
                                'columns' => 3,
                            ],
                        ],
                        'size' => 'small',
                        'value' => [
                            'optionsDemo1' => 'opt1',
                            // 'optionsDemo2' => 'opt2',
                        ]
                    ]
                ];
            },
            'submit' => function (string $id) {
              // custom dialog submitter action
            }
          ]
        ]
      ];
    },
  ]
]);