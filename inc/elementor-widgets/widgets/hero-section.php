<?php
namespace Docmedelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Docmed elementor hero section widget.
 *
 * @since 1.0
 */
class Docmed_Hero extends Widget_Base {

	public function get_name() {
		return 'docmed-hero';
	}

	public function get_title() {
		return __( 'Hero Section', 'docmed-companion' );
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}

	public function get_categories() {
		return [ 'docmed-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Hero content ------------------------------
		$this->start_controls_section(
			'hero_content',
			[
				'label' => __( 'Hero slider content', 'docmed-companion' ),
			]
        );
                
		$this->add_control(
            'sliders', [
                'label' => __( 'Create New', 'docmed-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ sec_title }}}',
                'fields' => [
                    [
                        'name' => 'slider_img',
                        'label' => __( 'Slider Image', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Utils::get_placeholder_image_src()
                        ]
                    ],
                    [
                        'name' => 'sec_title',
                        'label' => __( 'Big Title', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => '<span>Health care</span> <br>For Hole Family',
                    ],
                    [
                        'name' => 'sub_title',
                        'label' => __( 'Sub Title', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => 'In healthcare sector, service excellence is the facility of <br> the hospital as healthcare service provider to consistently.',
                    ],
                    [
                        'name' => 'btn_title',
                        'label' => __( 'Button Title', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Check Our Services', 'docmed-companion' ),
                    ],
                    [
                        'name' => 'btn_url',
                        'label' => __( 'Button URL', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::URL,
                        'default' => [
                            'url' => '#'
                        ]
                    ],
                ],
                'default'   => [
                    [
                        'slider_img'=> [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'sec_title' => '<span>Health care</span> <br>For Hole Family',
                        'sub_title' => 'In healthcare sector, service excellence is the facility of <br> the hospital as healthcare service provider to consistently.',
                        'btn_title' => __( 'Check Our Services', 'docmed-companion' ),
                        'btn_url'   => [
                            'url'   => '#',
                        ],
                    ],
                    [
                        'slider_img'=> [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'sec_title' => '<span>Health care</span> <br>For Hole Family',
                        'sub_title' => 'In healthcare sector, service excellence is the facility of <br> the hospital as healthcare service provider to consistently.',
                        'btn_title' => __( 'Check Our Services', 'docmed-companion' ),
                        'btn_url'   => [
                            'url'   => '#',
                        ],
                    ],
                    [
                        'slider_img'=> [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'sec_title' => '<span>Health care</span> <br>For Hole Family',
                        'sub_title' => 'In healthcare sector, service excellence is the facility of <br> the hospital as healthcare service provider to consistently.',
                        'btn_title' => __( 'Check Our Services', 'docmed-companion' ),
                        'btn_url'   => [
                            'url'   => '#',
                        ],
                    ],
                ]
            ]
        );
        
        $this->end_controls_section(); // End Hero content


    /**
     * Style Tab
     * ------------------------------ Style Title ------------------------------
     *
     */
        $this->start_controls_section(
			'style_title', [
				'label' => __( 'Style Hero Section', 'docmed-companion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'big_title_col', [
				'label' => __( 'Title Color', 'docmed-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text h3' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_col', [
				'label' => __( 'Text Color', 'docmed-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text p' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
            'button_section_separator',
            [
                'label'     => __( 'Button Styles', 'docmed-companion' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
			'button_col', [
				'label' => __( 'Button Color', 'docmed-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text .boxed-btn3' => 'color: {{VALUE}} !important',
				],
			]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg_color',
                'label' => __( 'Button BG Color', 'docmed-companion' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .slider_area .single_slider .slider_text .boxed-btn3',
            ]
        );

        $this->add_control(
            'button_hover_section_separator',
            [
                'label'     => __( 'Button Hover Styles', 'docmed-companion' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
			'button_hover_col', [
				'label' => __( 'Button Hover Color', 'docmed-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text .boxed-btn3:hover' => 'color: {{VALUE}} !important; border-color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
			'button_hover_bg_col', [
				'label' => __( 'Button Hover Bg Color', 'docmed-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text .boxed-btn3:hover' => 'background: {{VALUE}};',
				],
			]
        );

		$this->end_controls_section();
	}
    
	protected function render() {
    // call load widget script
    $this->load_widget_script(); 
    $settings   = $this->get_settings();
    $sliders    = !empty( $settings['sliders'] ) ? $settings['sliders'] : ''; 
    ?>
    
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <?php
            if( is_array( $sliders ) && count( $sliders ) > 0 ){
                foreach ( $sliders as $slider ) {
                    $slider_img = !empty( $slider['slider_img']['url'] ) ? $slider['slider_img']['url'] : ''; 
                    $sec_title  = !empty( $slider['sec_title'] ) ? $slider['sec_title'] : ''; 
                    $sub_title  = !empty( $slider['sub_title'] ) ? $slider['sub_title'] : ''; 
                    $btn_title  = !empty( $slider['btn_title'] ) ? $slider['btn_title'] : ''; 
                    $btn_url    = !empty( $slider['btn_url']['url'] ) ? $slider['btn_url']['url'] : '';
                    ?>
                    <div class="single_slider d-flex align-items-center" <?php echo docmed_inline_bg_img( esc_url( $slider_img ) ); ?>>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="slider_text ">
                                        <?php 
                                            if ( $sec_title ) { 
                                                echo '<h3>'.wp_kses_post(nl2br($sec_title)).'</h3>';
                                            }
                                            if ( $sub_title ) { 
                                                echo '<p>'.wp_kses_post(nl2br($sub_title)).'</p>';
                                            }
                                            if ( $btn_title ) { 
                                                echo '<a href="'.esc_url($btn_url).'" class="boxed-btn3">'.esc_html($btn_title).'</a>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- slider_area_end -->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            // slider-active
            $('.slider_active').owlCarousel({
            loop:true,
            margin:0,
            items:1,
            autoplay:true,
            navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
            nav:true,
            dots:false,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive:{
                0:{
                    items:1,
                    nav:false,
                },
                767:{
                    items:1,
                    nav:false,
                },
                992:{
                    items:1,
                    nav:false
                },
                1200:{
                    items:1,
                    nav:false
                },
                1600:{
                    items:1,
                    nav:true
                }
            }
            });
        })(jQuery);
        </script>
        <?php 
        }
    }	    
}