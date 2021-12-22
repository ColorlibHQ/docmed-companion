<?php
namespace Docmedelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Docmed elementor about us section widget.
 *
 * @since 1.0
 */
class Docmed_About_Us extends Widget_Base {

	public function get_name() {
		return 'docmed-aboutus';
	}

	public function get_title() {
		return __( 'About Us', 'docmed-companion' );
	}

	public function get_icon() {
		return 'eicon-column';
	}

	public function get_categories() {
		return [ 'docmed-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  About us content ------------------------------
        $this->start_controls_section(
            'about_content',
            [
                'label' => __( 'About Content', 'docmed-companion' ),
            ]
        );
        $this->add_control(
            'about_img1',
            [
                'label' => esc_html__( 'Image 1', 'docmed-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'about_img2',
            [
                'label' => esc_html__( 'Image 2', 'docmed-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'content_section_separator',
            [
                'label' => esc_html__( 'Content Section', 'docmed-companion' ),
                'type' => Controls_Manager::HEADING,
                'seperator' => 'after',
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'docmed-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Welcome to Docmed', 'docmed-companion' ),
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'docmed-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'Best Care For Your <br>Good Health',
            ]
        );
        $this->add_control(
            'sec_text',
            [
                'label' => esc_html__( 'About Text', 'docmed-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => '<p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable projecting expression.</p><ul><li> Apartments frequently or motionless. </li><li> Duis aute irure dolor in reprehenderit in voluptate.</li><li> Voluptatem quia voluptas sit aspernatur. </li></ul>',
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__( 'Button Text', 'docmed-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Learn More', 'docmed-companion' ),
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label' => esc_html__( 'Button URL', 'docmed-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url'   => '#'
                ],
            ]
        );
        
        $this->end_controls_section(); // End about us content

        //------------------------------ Style title ------------------------------
        
        // Top Section Styles
        $this->start_controls_section(
            'about_sec_style', [
                'label' => __( 'About Section Styles', 'docmed-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_title_col', [
                'label' => __( 'Sec Title Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_text_col', [
                'label' => __( 'Sec Text Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info ul li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'list_circle_col', [
                'label' => __( 'Subtitle Border & List Icon Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info ul li::before' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info h2:before' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_styles_seperator',
            [
                'label' => esc_html__( 'Button Styles', 'docmed-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'btn_txt_col', [
                'label' => __( 'Button Text & Border Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info .boxed-btn3-white-2' => 'color: {{VALUE}} !important; border-color: {{VALUE}}',
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info .boxed-btn3-white-2:hover' => 'background: {{VALUE}} !important; border-color: transparent',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_col', [
                'label' => __( 'Button Hover Color', 'docmed-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_docmed_area .welcome_docmed_info .boxed-btn3-white-2:hover' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->end_controls_section();

    }


	protected function render() {
    $settings       = $this->get_settings();    
    $about_img1     = !empty( $settings['about_img1']['id'] ) ? wp_get_attachment_image( $settings['about_img1']['id'], 'docmed_welcome_thumb_362x440', '', array( 'alt' => 'about image 1' ) ) : '';
    $about_img2     = !empty( $settings['about_img2']['id'] ) ? wp_get_attachment_image( $settings['about_img2']['id'], 'docmed_welcome_thumb_362x440', '', array( 'alt' => 'about image 2' ) ) : '';
    $left_img       = !empty( $settings['left_img']['id'] ) ? wp_get_attachment_image( $settings['left_img']['id'], 'docmed_about_img_671x747', '', array( 'alt' => 'about left image' ) ) : '';
    $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sec_text       = !empty( $settings['sec_text'] ) ? $settings['sec_text'] : '';
    $btn_text       = !empty( $settings['btn_text'] ) ? $settings['btn_text'] : '';
    $btn_url        = !empty( $settings['btn_url']['url'] ) ?  $settings['btn_url']['url'] : '';
    $dynamic_class  = is_front_page() ? 'about_area' : 'about_area';
    ?>

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <?php 
                            if ( $about_img1 ) { 
                                echo '<div class="thumb_1">';
                                    echo $about_img1;
                                echo '</div>';
                            }
                            if ( $about_img2 ) { 
                                echo '<div class="thumb_2">';
                                    echo $about_img2;
                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <?php 
                            if ( $sub_title ) { 
                                echo '<h2>'.esc_html($sub_title).'</h2>';
                            }
                            if ( $sec_title ) { 
                                echo '<h3>'.wp_kses_post(nl2br($sec_title)).'</h3>';
                            }
                            if ( $sec_text ) { 
                                echo wp_kses_post(nl2br($sec_text));
                            }
                            if ( $btn_text ) { 
                                echo '<a href="'.esc_url($btn_url).'" class="boxed-btn3-white-2">'.esc_html( $btn_text ).'</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_docmed_area_end -->

    <?php
    }
}