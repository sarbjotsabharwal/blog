<?php

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Alyssas_Blog_Customize_Category_Dropdown_Control' )):

    /**
     * Custom Control for category dropdown
     * @package Alyssas Blog
     * @subpackage Alyssas Blog
     * @since 1.0.0
     *
     */
    class Alyssas_Blog_Customize_Category_Dropdown_Control extends WP_Customize_Control {

        /**
         * Declare the control type.
         *
         * @access public
         * @var string
         */
        public $type = 'category_dropdown';

        /**
         * Function to  render the content on the theme customizer page
         *
         * @access public
         * @since 1.0.0
         *
         * @param null
         * @return void
         *
         */
        public function render_content()
        {
            $Alyssas_Blog_customizer_name = 'Alyssas_Blog_customizer_dropdown_categories_' . $this->id;;
            $Alyssas_Blog_dropdown_categories = wp_dropdown_categories(
                array(
                    'name'              => $Alyssas_Blog_customizer_name,
                    'echo'              => 0,
                    'show_option_none'  =>__('Select Category','alyssas-blog'),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );
           $Alyssas_Blog_dropdown_final = str_replace( '<select', '<select ' . $this->get_link(), $Alyssas_Blog_dropdown_categories );
            printf(
                '<label><span class="customize-control-title">%s</span> %s</label>',
                $this->label,
                $Alyssas_Blog_dropdown_final
            );
        }
    }
    endif;