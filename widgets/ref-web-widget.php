<?php
if (!defined('ABSPATH')) {
  exit;
}

class DD_Ref_Web_Widget extends \Elementor\Widget_Base {
  public function get_name() {
    return 'refweb';
  }

  public function get_title() {
    return esc_html__('DD Ref. Web. Widget', 'dd-ref-web-widget');
  }

  public function get_icon() {
    return 'eicon-code';
  }

  public function get_categories() {
    return ['general'];
  }

  public function get_keywords() {
    return ['default-digital', 'default', 'digital'];
  }

  protected function register_controls() {
    $this -> start_controls_section(
      'content_section',
      [
        'label' => esc_html__('URL to display', 'dd-ref-web-widget'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
      
      $this -> add_control(
        'url',
        [
          'label' => esc_html__('URL to display', 'dd-ref-web-widget'),
          'type' => \Elementor\Controls_Manager::TEXT,
          'input_type' => 'url',
          'placeholder' => esc_html__('Hier Link zur React Seite einfügen.', 'dd-ref-web-widget'),
        ]
      );
        
        $this -> end_controls_section();
  }

  protected function render() {
    $settings = $this -> get_settings_for_display();

    if (empty($settings['url'])) {
      return;
    }

    $this -> add_render_attribute(
      'inner',
      [
        'src' => [$settings['url']],
      ]
    );

    ?>
      <style>
        iframe {
          height: 100vh;
        }
      </style>
      <iframe <?php echo $this -> get_render_attribute_string('inner'); ?>></iframe>
    <?php
  }
}