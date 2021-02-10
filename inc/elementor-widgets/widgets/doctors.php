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
 * Docmed elementor doctors section widget.
 *
 * @since 1.0
 */
class Docmed_Doctors extends Widget_Base {

	public function get_name() {
		return 'docmed-doctors';
	}

	public function get_title() {
		return __( 'Doctors', 'docmed-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'docmed-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  doctors content ------------------------------
		$this->start_controls_section(
			'doctors_content',
			[
				'label' => __( 'Doctors content', 'docmed-companion' ),
			]
        );
        $this->add_control(
            'style_type',
            [
                'label' => esc_html__( 'Select Style', 'docmed-companion' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => true,
                'default' => 'style1',
                'options' => [
                    'style1' => esc_html__( 'Style 1', 'docmed-companion' ),
                    'style2' => esc_html__( 'Style 2', 'docmed-companion' ),
                ]
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'docmed-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Expert Doctors', 'docmed-companion' ),
                'condition' => [
                    'style_type' => 'style1'
                ]
            ]
        );

        $this->add_control(
            'doctors_settings_seperator',
            [
                'label' => esc_html__( 'Doctors', 'docmed-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

		$this->add_control(
            'doctors', [
                'label' => __( 'Create New', 'docmed-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ member_name }}}',
                'fields' => [
                    [
                        'name' => 'member_img',
                        'label' => __( 'Member Image', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default'     => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ]
                    ],
                    [
                        'name' => 'member_name',
                        'label' => __( 'Member Name', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Mirazul Alom', 'docmed-companion' ),
                    ],
                    [
                        'name' => 'member_designation',
                        'label' => __( 'Member Designation', 'docmed-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Neurologist', 'docmed-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'member_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'member_name'     => __( 'Mirazul Alom', 'docmed-companion' ),
                        'member_designation'     => __( 'Neurologist', 'docmed-companion' ),
                    ],
                    [      
                        'member_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'member_name'     => __( 'Nurey Alom', 'docmed-companion' ),
                        'member_designation'     => __( 'Psychiatrist', 'docmed-companion' ),
                    ],
                    [      
                        'member_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'member_name'     => __( 'Fakrul Alom', 'docmed-companion' ),
                        'member_designation'     => __( 'Radiologist', 'docmed-companion' ),
                    ],
                    [      
                        'member_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'member_name'     => __( 'Mirazul Alom', 'docmed-companion' ),
                        'member_designation'     => __( 'Neurologist', 'docmed-companion' ),
                    ],
                    [      
                        'member_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'member_name'     => __( 'Samsul Alom', 'docmed-companion' ),
                        'member_designation'     => __( 'Oncologist', 'docmed-companion' ),
                    ],
                    [      
                        'member_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'member_name'     => __( 'Shah Alom', 'docmed-companion' ),
                        'member_designation'     => __( 'Anesthesiologist', 'docmed-companion' ),
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
            'big_title_col', [
                'label' => __( 'Section Title Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .doctors_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_item_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Styles', 'docmed-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'member_name_col', [
                'label' => __( 'Member Name Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'member_desig_color', [
                'label' => __( 'Member Designation Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_item_bg_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Bg Styles', 'docmed-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'member_bg_color', [
                'label' => __( 'Bg Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'hover_member_bg_color', [
                'label' => __( 'Item Hover Bg Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert:hover .experts_name' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	public function docmed_get_single_item( $member_img, $member_name, $member_designation, $extra_class = null ) {
        ?>
        <div class="single_expert<?=esc_attr($extra_class)?>">
            <div class="expert_thumb">
                <?php
                    if( $member_img ) {
                        echo $member_img;
                    }
                ?>
            </div>
            <div class="experts_name text-center">
                <h3><?php echo esc_html( $member_name )?></h3>
                <span><?php echo esc_html( $member_designation )?></span>
            </div>
        </div>
        <?php
    }


	protected function render() {
    $settings  = $this->get_settings();
    $style_type= !empty( $settings['style_type'] ) ? $settings['style_type'] : '';
    $sec_title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $doctors   = !empty( $settings['doctors'] ) ? $settings['doctors'] : '';

    if ( $style_type == 'style1' ) {
            
    // Load widget script
    $this->load_widget_script();
    ?>
        <!-- expert_doctors_area_start -->
        <div class="expert_doctors_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="doctors_title mb-55">
                            <?php 
                                if ( $sec_title ) { 
                                    echo '<h3>'.esc_html( $sec_title ).'</h3>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="expert_active owl-carousel">
                            <?php 
                            if( is_array( $doctors ) && count( $doctors ) > 0 ) {
                                foreach( $doctors as $member ) {
                                    $member_name        = ( !empty( $member['member_name'] ) ) ? $member['member_name'] : '';
                                    $member_img         = !empty( $member['member_img']['id'] ) ? wp_get_attachment_image( $member['member_img']['id'], 'docmed_doctors_thumb_264x250', '', array( 'alt' => $member_name. ' image' ) ) : '';
                                    $member_designation = ( !empty( $member['member_designation'] ) ) ? $member['member_designation'] : '';

                                    $this->docmed_get_single_item( $member_img, $member_name, $member_designation );
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <!-- expert_doctors_area_start -->
        <div class="expert_doctors_area doctor_page">
            <div class="container">
                <div class="row">
                    <?php 
                        if( is_array( $doctors ) && count( $doctors ) > 0 ) {
                            foreach( $doctors as $member ) {
                                $member_name        = ( !empty( $member['member_name'] ) ) ? $member['member_name'] : '';
                                $member_img         = !empty( $member['member_img']['id'] ) ? wp_get_attachment_image( $member['member_img']['id'], 'docmed_doctors_thumb_264x250', '', array( 'alt' => $member_name. ' image' ) ) : '';
                                $member_designation = ( !empty( $member['member_designation'] ) ) ? $member['member_designation'] : '';

                                echo '<div class="col-md-6 col-lg-3">';
                                    $this->docmed_get_single_item( $member_img, $member_name, $member_designation, ' mb-40' );
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <!-- expert_doctors_area_end -->
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            // expert_active
            $('.expert_active').owlCarousel({
            loop:true,
            margin:30,
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
                    nav:false
                },
                767:{
                    items:2,
                    nav:false
                },
                992:{
                    items:3
                },
                1200:{
                    items:4
                },
                1500:{
                    items:4
                }
            }
            });
        })(jQuery);
        </script>
        <?php 
        }
    }	
}