<?php
class ControllerExtensionmoduleHeroSlideshow extends Controller {
	public function index($setting) {
		static $module = 0;
		
		$data = array(
			'width'                       => $setting['width'],
			'height'                      => $setting['height'],
			'min_height'                  => $setting['min_height'],
			'autoplay'                    => $setting['autoplay'] ? '5000' : 'false',
			'speed'                       => $setting['speed'],
			'keyboard_control'            => $setting['keyboard_control'] ? 'true' : 'false',
			'mousewheel_control'          => $setting['mousewheel_control'] ? 'true' : 'false',
			'mousewheel_release_on_edges' => $setting['mousewheel_release_on_edges'] ? 'true' : 'false',
			'next_button'                 => $setting['next_button'],
			'prev_button'                 => $setting['prev_button'],
			'pagination'                  => $setting['pagination'],
			'pagination_clickable'        => $setting['pagination_clickable'] ? 'true' : 'false',
			'pagination_bullet_render'    => $setting['pagination_bullet_render'] ? 'true' : 'false',
			'scrollbar'                   => $setting['scrollbar'],
			'scrollbar_draggable'         => $setting['scrollbar_draggable'] ? 'true' : 'false',
			'loop'                        => $setting['loop'] ? 'true' : 'false'
			);

		switch ($setting['effect']) {
			case '0':
			$data['effect'] = 'slide';
			break;
			case '1':
			$data['effect'] = 'fade';
			break;
			case '2':
			$data['effect'] = 'cube';
			break;
			case '3':
			$data['effect'] = 'coverflow';
			break;
			case '4':
			$data['effect'] = 'flip';
			break;
		}

		$this->load->model('tool/image');

		if (isset($setting['slides'])) {
			$i = 0; $vid = 0; foreach ($setting['slides'] as $slide) {

				if ($slide['slide_type'] && $vid != 1) {
					$vid = 1;
				}

				$data['slides'][$i] = array(
					'slide_type'          => $slide['slide_type'],
					'image'               => $this->model_tool_image->resize($slide['image'], $setting['width'], $setting['height']),
					'video'               => $slide['slide_type'] ? "image/" . preg_replace('/\\.[^.\\s]{3,4}$/', '', $slide['image']) : '0',
					'video_loop'          => $slide['video_loop'] ? 'true' : 'false',
					'video_autoplay'      => $slide['video_autoplay'] ? 'true' : 'false',
					'video_playback_rate' => $slide['video_playback_rate'],
					'video_muted'         => $slide['video_muted'] ? 'true' : 'false',
					'video_volume'        => $slide['video_volume'],
					'link_text'           => $slide['link_text'][$this->config->get('config_language_id')],
					'description'         => html_entity_decode($slide['description'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8'),
					'title_link1'         => $slide['title_link1'][$this->config->get('config_language_id')],
					'link1'               => $slide['link1'][$this->config->get('config_language_id')],
					'title_link2'         => $slide['title_link2'][$this->config->get('config_language_id')],
					'link2'               => $slide['link2']
					);
				$i++;
			}

		}
		
		$data['module'] = $module++;
		
		return $this->load->view('extension/module/HeroSlideshow', $data);
	}
}