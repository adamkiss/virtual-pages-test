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
                                    'opt1' => 'Opt 1',
                                    'opt2' => 'Opt 2',
                                    'opt3' => 'Opt 3',
                                ],
                                'columns' => 3,
                            ],
                            'optionsDemo2' => [
                                'type' => 'radio',
                                'label' => 'Or default value',
                                'default' => 'opt2',
                                'options' => [
                                    ['value'=>'opt1', 'text'  => 'Opt 1'],
                                    ['value'=>'opt2', 'text'  => 'Opt 2'],
                                    ['value'=>'opt3', 'text'  => 'Opt 3'],
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