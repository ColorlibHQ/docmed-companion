<?php
namespace Docmedelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Docmed elementor service section widget.
 *
 * @since 1.0
 */
class Docmed_Services extends Widget_Base {

	public function get_name() {
		return 'docmed-services';
	}

	public function get_title() {
		return __( 'Services', 'docmed-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'docmed-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Service content ------------------------------
		$this->start_controls_section(
			'service_content',
			[
				'label' => __( 'Services content', 'docmed-companion' ),
			]
        );
		$this->add_control(
            'docmedservices', [
                'label' => __( 'Create New', 'docmed-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ service_title }}}',
                'fields' => [
                    [
                        'name' => 'service_icon',
                        'label' => __( 'Service Icon', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::ICON,
                        'default'     => 'flaticon-electrocardiogram',
                        'options'     => docmed_themify_icon(),
                    ],
                    [
                        'name' => 'service_title',
                        'label' => __( 'Service Title', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Hospitality', 'docmed-companion' ),
                    ],
                    [
                        'name' => 'service_text',
                        'label' => __( 'Service Text', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Clinical excellence must be the priority for any health care service provider.', 'docmed-companion' ),
                    ],
                    [
                        'name' => 'btn_text',
                        'label' => __( 'Button Text', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Apply For a Bed', 'docmed-companion' ),
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
                        'service_icon'  => 'flaticon-electrocardiogram',
                        'service_title' => __( 'Hospitality', 'docmed-companion' ),
                        'service_text'  => __( 'Clinical excellence must be the priority for any health care service provider.', 'docmed-companion' ),
                        'btn_text'     => __( 'Apply For a Bed', 'docmed-companion' ),
                        'btn_url'     => [
                            'url'      => '#'
                        ],
                    ],
                    [      
                        'service_icon'  => 'flaticon-emergency-call',
                        'service_title' => __( 'Emergency Care', 'docmed-companion' ),
                        'service_text'  => __( 'Clinical excellence must be the priority for any health care service provider.', 'docmed-companion' ),
                        'btn_text'     => __( '+10 672 356 3567', 'docmed-companion' ),
                        'btn_url'     => [
                            'url'      => '#'
                        ],
                    ],
                    [      
                        'service_icon'  => 'flaticon-first-aid-kit',
                        'service_title' => __( 'Chamber Service', 'docmed-companion' ),
                        'service_text'  => __( 'Clinical excellence must be the priority for any health care service provider.', 'docmed-companion' ),
                        'btn_text'     => __( 'Make an Appointment', 'docmed-companion' ),
                        'btn_url'     => [
                            'url'      => '#'
                        ],
                    ],
                ]
            ]
		);
		$this->end_controls_section(); // End service content

    /**
     * Style Tab
     * ------------------------------ Style Section Heading ------------------------------
     *
     */

        $this->start_controls_section(
            'style_room_section', [
                'label' => __( 'Style Service Section', 'docmed-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_bg_col', [
                'label' => __( 'Section Bg Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_mid_bg_col', [
                'label' => __( 'Middle Section Bg Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .col-xl-4:nth-child(2) .single_service' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'singl_item_styles_seperator',
            [
                'label' => esc_html__( 'Single Service Item Styles', 'docmed-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'item_icon_col', [
                'label' => __( 'Icon Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .single_service .icon i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sing_ser_title_col', [
                'label' => __( 'Title Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .single_service h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sing_ser_txt_col', [
                'label' => __( 'Text Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .single_service p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'singl_item_btn_styles_seperator',
            [
                'label' => esc_html__( 'Button Styles', 'docmed-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'button_col', [
                'label' => __( 'Button Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .single_service .boxed-btn3-white' => 'color: {{VALUE}} !important; border-color: {{VALUE}};',
                    '{{WRAPPER}} .service_area .single_service .boxed-btn3-white:hover' => 'background: {{VALUE}}; border-color: transparent;',
                ],
            ]
        );
        $this->add_control(
            'singl_item_btn_hover_styles_seperator',
            [
                'label' => esc_html__( 'Button Hover Styles', 'docmed-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'button_hover_col', [
                'label' => __( 'Button Hover Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_area .single_service .boxed-btn3-white:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {
    $settings       = $this->get_settings();
    $docmedservices = !empty( $settings['docmedservices'] ) ? $settings['docmedservices'] : '';
    ?>

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <?php 
                if( is_array( $docmedservices ) && count( $docmedservices ) > 0 ) {
                    foreach( $docmedservices as $service ) {
                        $service_icon  = ( !empty( $service['service_icon'] ) ) ? $service['service_icon'] : '';
                        $service_title = ( !empty( $service['service_title'] ) ) ? $service['service_title'] : '';
                        $service_text  = ( !empty( $service['service_text'] ) ) ? $service['service_text'] : '';
                        $btn_text      = ( !empty( $service['btn_text'] ) ) ? $service['btn_text'] : '';
                        $btn_url      = ( !empty( $service['btn_url']['url'] ) ) ? $service['btn_url']['url'] : '';
                        ?>
                        <div class="col-xl-4 col-md-4">
                            <div class="single_service">
                                <?php 
                                    if ( $service_icon ) { 
                                        echo '<div class="icon">';
                                            echo '<i class="'.esc_attr($service_icon).'"></i>';
                                        echo '</div>';
                                    }
                                    if ( $service_title ) { 
                                        echo '<h3>'.$service_title.'</h3>';
                                    }
                                    if ( $service_text ) { 
                                        echo '<p>'.esc_html( $service_text ).'</p>';
                                    }
                                    if ( $btn_text ) { 
                                        echo '<a href="'.esc_url($btn_url).'" class="boxed-btn3-white">'.esc_html( $btn_text ).'</a>';
                                    }
                                ?>
                            </div>
                        </div>
                        <?php 
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- service_area_end -->
    <?php
    }
}