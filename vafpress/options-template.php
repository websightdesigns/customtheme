<?php

require_once get_template_directory() . '/vafpress/data-sources.php';

return array(
    'title' => __('Vafpress Option Panel', 'customtheme'),
    'logo'  => '',
    'menus' => array(
        array(
            'title' => __('Settings', 'customtheme'),
            'name' => 'menu_1',
            'icon' => 'font-awesome:fa-cog',
            'menus' => array(
                array(
                    'title' => __('Global', 'customtheme'),
                    'name' => 'submenu_1',
                    'icon' => 'font-awesome:fa-globe',
                    'controls' => array(
                        array(
                            'type' => 'section',
                            'title' => __('TextBox', 'customtheme'),
                            'name' => 'section_1',
                            'description' => __('TextBox and TextArea Showcase', 'customtheme'),
                            'fields' => array(
                                array(
                                    'type' => 'textbox',
                                    'name' => 'tb_1',
                                    'label' => __('Site Title', 'customtheme'),
                                    'description' => __('This field is required', 'customtheme'),
                                    'validation' => 'required',
                                ),
                                array(
                                    'type' => 'textbox',
                                    'name' => 'tb_2',
                                    'label' => __('Alphanumeric', 'customtheme'),
                                    'description' => __('Only alphabets and numbers allowed here.', 'customtheme'),
                                    'default' => 'abcd123',
                                    'validation' => 'alphanumeric',
                                ),
                                array(
                                    'type' => 'textbox',
                                    'name' => 'tb_3',
                                    'label' => __('Numeric', 'customtheme'),
                                    'description' => __('Only numbers allowed here.', 'customtheme'),
                                    'default' => '123',
                                    'validation' => 'numeric',
                                ),
                                array(
                                    'type' => 'textbox',
                                    'name' => 'tb_4',
                                    'label' => __('Email', 'customtheme'),
                                    'description' => __('Only valid email allowed here.', 'customtheme'),
                                    'default' => 'info@websightdesigns.com',
                                    'validation' => 'email',
                                ),
                                array(
                                    'type' => 'textbox',
                                    'name' => 'tb_5',
                                    'label' => __('URL', 'customtheme'),
                                    'description' => __('Only valid URL allowed here.', 'customtheme'),
                                    'default' => 'http://websightdesigns.com',
                                    'validation' => 'url',
                                ),
                            ),
                        ),
                        array(
                            'type' => 'textarea',
                            'name' => 'ta_1',
                            'label' => __('Textarea', 'customtheme'),
                            'description' => __('Everytime you need long text..', 'customtheme'),
                            'default' => 'lorem ipsum',
                        ),
                        array(
                            'type' => 'section',
                            'name' => 'section_2',
                            'title' => __('Multiple Choices', 'customtheme'),
                            'description' => __('Controls with multiple specified options.', 'customtheme'),
                            'fields' => array(
                                array(
                                    'type' => 'checkbox',
                                    'name' => 'cb_1',
                                    'label' => __('CheckBox with Min and Max Selected Validation', 'customtheme'),
                                    'description' => __('Minimum selected of 2 items and maximum selected of 2 items, in other words need to choose exactly 2 items.', 'customtheme'),
                                    'validation' => 'minselected[2]|maxselected[2]',
                                    'items' => array(
                                        array(
                                            'value' => 'value_1',
                                            'label' => __('Label 1', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_2',
                                            'label' => __('Label 2', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_3',
                                            'label' => __('Label 3', 'customtheme'),
                                        ),
                                    ),
                                    'default' => array(
                                        'value_1',
                                    ),
                                ),
                                array(
                                    'type' => 'checkbox',
                                    'name' => 'cb_2',
                                    'label' => __('CheckBox with Required Validation', 'customtheme'),
                                    'description' => __('Required to choose anything.', 'customtheme'),
                                    'validation' => 'required',
                                    'default' => '',
                                    'items' => array(
                                        array(
                                            'value' => 'value_1',
                                            'label' => __('Label 1', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_2',
                                            'label' => __('Label 2', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_3',
                                            'label' => __('Label 3', 'customtheme'),
                                        ),
                                    ),
                                ),
                                array(
                                    'type' => 'radiobutton',
                                    'name' => 'rb_1',
                                    'label' => __('RadioButton', 'customtheme'),
                                    'items' => array(
                                        array(
                                            'value' => 'value_1',
                                            'label' => __('Label 1', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_2',
                                            'label' => __('Label 2', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_3',
                                            'label' => __('Label 3', 'customtheme'),
                                        ),
                                    ),
                                    'default' => array(
                                        'value_3',
                                    ),
                                ),
                                array(
                                    'type' => 'select',
                                    'name' => 'ss_1',
                                    'label' => __('Single Select Box', 'customtheme'),
                                    'items' => array(
                                        array(
                                            'value' => 'value_1',
                                            'label' => __('Label 1', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_2',
                                            'label' => __('Label 2', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_3',
                                            'label' => __('Label 3', 'customtheme'),
                                        ),
                                    ),
                                    'default' => array(
                                        'value_3',
                                    ),
                                ),
                                array(
                                    'type' => 'select',
                                    'name' => 'ss_2',
                                    'label' => __('Select Box with Get Categories Data Source', 'customtheme'),
                                    'items' => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value' => 'vp_get_categories',
                                            ),
                                        ),
                                    ),
                                    'default' => array(
                                        '{{last}}',
                                    ),
                                ),
                                array(
                                    'type' => 'multiselect',
                                    'name' => 'ms_1',
                                    'label' => __('Multiple Select Box', 'customtheme'),
                                    'description' => __('Minimum selected of 2 items and maximum selected of 3 items.', 'customtheme'),
                                    'validation' => 'minselected[2]|maxselected[3]',
                                    'items' => array(
                                        array(
                                            'value' => 'value_1',
                                            'label' => __('Label 1', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_2',
                                            'label' => __('Label 2', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_3',
                                            'label' => __('Label 3', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'value_4',
                                            'label' => __('Label 4', 'customtheme'),
                                        ),
                                    ),
                                    'default' => array(
                                        '{{first}}',
                                        '{{last}}',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'title' => __('Colors', 'customtheme'),
                    'name' => 'submenu_2',
                    'icon' => 'font-awesome:fa-picture-o',
                    'controls' => array(
                        array(
                            'type' => 'section',
                            'title' => __('Color Set', 'customtheme'),
                            'fields' => array(
                                array(
                                    'type' => 'select',
                                    'name' => 'color_preset',
                                    'label' => __('Color Preset', 'customtheme'),
                                    'default' => 'red',
                                    'items' => array(
                                        array(
                                            'value' => 'red',
                                            'label' => __('Red', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'green',
                                            'label' => __('Green', 'customtheme'),
                                        ),
                                        array(
                                            'value' => 'blue',
                                            'label' => __('Blue', 'customtheme'),
                                        ),
                                    ),
                                ),
                                array(
                                    'type' => 'color',
                                    'name' => 'color_accent',
                                    'label' => __('Color Accent', 'customtheme'),
                                    'binding' => array(
                                        'field' => 'color_preset',
                                        'function' => 'vp_bind_color_accent',
                                    ),
                                ),
                                array(
                                    'type' => 'color',
                                    'name' => 'color_subtle',
                                    'label' => __('Color Subtle', 'customtheme'),
                                    'binding' => array(
                                        'field' => 'color_preset',
                                        'function' => 'vp_bind_color_subtle',
                                    ),
                                ),
                                array(
                                    'type' => 'color',
                                    'name' => 'color_background',
                                    'label' => __('Color Background', 'customtheme'),
                                    'binding' => array(
                                        'field' => 'color_preset',
                                        'function' => 'vp_bind_color_background',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    )
);
