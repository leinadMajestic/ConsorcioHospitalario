<?php
/**
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2014 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_CAN_LOAD_FILES_'))
	exit;

include_once _PS_MODULE_DIR_.'wttestimonial/classes/WtTestimonialClass.php';
include_once _PS_MODULE_DIR_.'wttestimonial/sql/SampleData.php';

class WtTestimonial extends Module
{
	private $temp_url = '{wttestimonial_url}';
	private $html;
	public function __construct()
	{
		$this->name = 'wttestimonial';
		$this->tab = 'front_office_features';
		$this->version = '2.0.0';
		$this->author = 'waterthemes';
		$this->bootstrap = true;
		parent::__construct();
		$this->displayName = $this->l('WT Testimonial');
		$this->description = $this->l('Show Testimonial by the user.');
	}
	
	public function install()
	{
		include(dirname(__FILE__).'/sql/install.php');
		if (!parent::install() || !$this->registerHook('actionShopDataDuplication') || !$this->registerHook('actionObjectLanguageAddAfter') || !$this->registerHook('displayHeader') || !$this->registerHook('displayTopFooter'))
			return false;
		$sampleData = new SampleDataTestimoial();
		if (!$sampleData->initData())
			return false;
		return true;	
	}
	public function uninstall()
	{
		include(dirname(__FILE__).'/sql/uninstall.php');
		return parent::uninstall();
	}
	public function postProcess()
	{		
		if (Tools::isSubmit('saveBanner'))
		{
			$languageDefault = Configuration::get('PS_LANG_DEFAULT');
			if ((!isset($_FILES['image']['tmp_name']) || $_FILES['image']['tmp_name'] == '') && !Tools::getValue('id_wttestimonial'))
				$this->html .= $this->displayError($this->l('Banner empty !'));
			else if (Tools::getValue('title_'.$languageDefault.'') == '')
				$this->html .= $this->displayError($this->l('Title for language default empty !'));
			else 
			{
				$reinsurance = new WtTestimonialClass(Tools::getValue('id_wttestimonial'));
				$reinsurance->copyFromPost();
				
				if ($reinsurance->validateFields(false) && $reinsurance->validateFieldsLang(false))
				{
					$reinsurance->save();
					if (isset($_FILES['image']) && isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name']))
					{
						$id_shop = $this->context->shop->id;
						if ($error = ImageManager::validateUpload($_FILES['image']))
							return false;
						elseif (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['image']['tmp_name'], $tmpName))
							return false;
						elseif (!ImageManager::resize($tmpName, dirname(__FILE__).'/views/img/reinsurance-'.(int)$reinsurance->id.'-'.$id_shop.'.png'))
							return false;
						unlink($tmpName);
						$reinsurance->file_name = 'reinsurance-'.(int)$reinsurance->id.'-'.$id_shop.'.png';
						$reinsurance->save();
					}
					Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
				}
				else
					$this->html .= '<div class="conf error">'.$this->l('An error occurred while attempting to save.').'</div>';
			}
		}
		elseif (Tools::isSubmit('changeStatus') && Tools::getValue('id_wttestimonial'))
		{
			$banner = new WtTestimonialClass(Tools::getValue('id_wttestimonial'));
			if ($banner->active == 0)
				$banner->active = 1;
			else
				$banner->active = 0;
			$res = $banner->update();
			$this->html .= ($res ? $this->displayConfirmation($this->l('Configuration updated')) : $this->displayError($this->l('The configuration could not be updated.')));
			Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
		}
		else if (Tools::isSubmit('deleteBanner'))
		{
			$banner = new WtTestimonialClass(Tools::getValue('id_wttestimonial'));
			$banner->delete();
			if (file_exists(dirname(__FILE__).'/views/img/'.$banner->file_name) && !$banner->bannerExistShop())
				unlink(dirname(__FILE__).'/views/img/'.$banner->file_name);
			Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
		}
		else if (Tools::isSubmit('successConfirmation'))
			$this->_html .= $this->displayConfirmation($this->l('Your settings have been updated.'));
	}
	public function getContent()
	{
		$this->postProcess();
		if (Tools::isSubmit('addBanner') || Tools::isSubmit('editBanner') || Tools::isSubmit('saveBanner'))
			$this->initForm();
		else
			$this->html .= $this->renderList();
		return $this->html;
	}
	
	private function getBanners($active = null)
	{
		$this->context = Context::getContext();
		$id_lang = $this->context->language->id;
		$id_shop = $this->context->shop->id;
		if (!$result = Db::getInstance()->ExecuteS(
			'SELECT bs.*, bl.`title`,bl.`link`
			FROM `'._DB_PREFIX_.'wttestimonial` b
			LEFT JOIN `'._DB_PREFIX_.'wttestimonial_shop` bs ON (bs.`id_wttestimonial` = b.`id_wttestimonial` )
			LEFT JOIN `'._DB_PREFIX_.'wttestimonial_lang` bl ON (b.`id_wttestimonial` = bl.`id_wttestimonial` '.( $id_shop ? 'AND bl.`id_shop` = '.$id_shop : ' ' ).') 
			WHERE bl.id_lang = '.(int)$id_lang.
			($active ? ' AND bs.`active` = 1' : ' ').
			( $id_shop ? 'AND bs.`id_shop` = '.$id_shop : ' ' ).''))
			return false;
		return $result;
	}
	private function renderList()
	{
		if ($this->getBanners(false) && count($this->getBanners(false)) > 0)
		{
			$banners = $this->getBanners(false);
			foreach ($banners as $key => $banner)
				$banners[$key]['status'] = $this->displayStatus($banner['id_wttestimonial'], $banner['active']);
		}
		$this->context->smarty->assign(
			array(
				'link' => $this->context->link,
				'banners' => $banners
			)
		);
		return $this->display(__FILE__, 'views/templates/admin/list.tpl');
	}
	
	public function displayStatus($id_wttestimonial, $active)
	{
		$title = ((int)$active == 0 ? $this->l('Disabled') : $this->l('Enabled'));
		$icon = ((int)$active == 0 ? 'icon-remove' : 'icon-check');
		$class = ((int)$active == 0 ? 'btn-danger' : 'btn-success');
		$html = '<a class="btn '.$class.'" href="'.AdminController::$currentIndex.
			'&configure='.$this->name.'
				&token='.Tools::getAdminTokenLite('AdminModules').'
				&changeStatus&id_wttestimonial='.(int)$id_wttestimonial.'" title="'.$title.'"><i class="'.$icon.'"></i> '.$title.'</a>';

		return $html;
	}
	
	public function initForm()
	{
		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
		$id_wttestimonial = Tools::getValue('id_wttestimonial');
		if ($id_wttestimonial)
			$wttestimonial = new wttestimonialClass((int)$id_wttestimonial);
		else
			$wttestimonial = new wttestimonialClass();
		if ($wttestimonial->file_name != '')
			$banner = __PS_BASE_URI__.'modules/'.$this->name.'/views/img/'.$wttestimonial->file_name;
		else
			$banner = '';
		$this->fields_form[0]['form'] = array(
			'legend' => array(
				'title' => $this->l('New Testimonial.'),
			),
			'input' => array(
				array(
					'type' => 'file',
					'label' => $this->l('Image Author:'),
					'name' => 'image',
					'value' => true,
					'banner' => $banner
				),
				array(
					'type' => 'text',
					'label' => $this->l('Name:'),
					'name' => 'title',
					'lang' => true
				),
				array(
					'type' => 'text',
					'label' => $this->l('Job:'),
					'name' => 'job',
					'lang' => true
				),
				array(
					'type' => 'text',
					'label' => $this->l('Link:'),
					'name' => 'link',
					'lang' => true
					
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('Testimonial:'),
					'lang' => true,
					'autoload_rte' => true,
					'name' => 'text',
					'cols' => 40,
					'rows' => 10
				),
				array(
						'type' => 'switch',
						'label' => $this->l('Displayed'),
						'name' => 'active',
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Enabled')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('Disabled')
									)
						),
				),
			),
			'submit' => array(
				'title' => $this->l('Save')
			)
		);
		
		$helper = new HelperForm();
		$helper->module = $this;
		$helper->name_controller = 'wttestimonial';
		$helper->identifier = $this->identifier;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->show_cancel_button = true;
		$helper->back_url = AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules');
		foreach (Language::getLanguages(false) as $lang)
			$helper->languages[] = array(
				'id_lang' => $lang['id_lang'],
				'iso_code' => $lang['iso_code'],
				'name' => $lang['name'],
				'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
			);
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_form_lang = $default_lang;
		$helper->toolbar_scroll = true;
		$helper->title = $this->displayName;
		$helper->submit_action = 'saveBanner';
		$helper->toolbar_btn = array(
			'save' =>
			array(
				'desc' => $this->l('Save'),
				'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
			),
			'back' =>
			array(
				'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
				'desc' => $this->l('Back to list')
			)
		);
		foreach (Language::getLanguages(false) as $lang)
		{
			$helper->fields_value['title'][(int)$lang['id_lang']] = Tools::getValue('title_'.(int)$lang['id_lang'], $wttestimonial->title[(int)$lang['id_lang']]);
			$helper->fields_value['job'][(int)$lang['id_lang']] = Tools::getValue('job_'.(int)$lang['id_lang'], $wttestimonial->job[(int)$lang['id_lang']]);
			$helper->fields_value['link'][(int)$lang['id_lang']] = Tools::getValue('link_'.(int)$lang['id_lang'], $wttestimonial->link[(int)$lang['id_lang']]);
			$helper->fields_value['text'][(int)$lang['id_lang']] = Tools::getValue('text_'.(int)$lang['id_lang'], $wttestimonial->text[(int)$lang['id_lang']]);
		}
		
		if (Tools::getValue('active', $wttestimonial->active) != '')
			$active = Tools::getValue('active', $wttestimonial->active);
		else
			$active = 1;
		$helper->fields_value['active'] = $active;
		if ($id_wttestimonial)
		{
			$this->fields_form[0]['form']['input'][] = array('type' => 'hidden', 'name' => 'id_wttestimonial');
			$helper->fields_value['id_wttestimonial'] = (int)Tools::getValue('id_wttestimonial', $wttestimonial->id_wttestimonial);	
		}
		$this->html .= $helper->generateForm($this->fields_form);
	}
	
	public function getBannersDisplay($hookname)
	{
		$id_shop = $this->context->shop->id;
		$id_lang = $this->context->language->id;
		$banners = Db::getInstance()->ExecuteS(
		'SELECT bs.*, bl.*,b.`file_name`
			FROM `'._DB_PREFIX_.'wttestimonial` b
			LEFT JOIN `'._DB_PREFIX_.'wttestimonial_shop` bs ON (bs.`id_wttestimonial` = b.`id_wttestimonial` )
			LEFT JOIN `'._DB_PREFIX_.'wttestimonial_lang` bl ON (b.`id_wttestimonial` = bl.`id_wttestimonial` AND bl.`id_shop` = '.$id_shop.') 
			WHERE bl.id_lang = '.(int)$id_lang.' AND bs.id_shop = '.(int)$id_shop.' AND bs.`active` = 1');
		return $banners;
	}
	
	public function getContentForHook($hookname)
	{
		$this->context = Context::getContext();
		$id_shop = $this->context->shop->id;
		$banners = $this->getBannersDisplay($hookname);
		if (!empty($banners))
		{
			$this->context->smarty->assign(array(
				'banners' => $banners
			));
			return $this->display(__FILE__, 'wttestimonial.tpl');
		}
	}
	public function hookDisplayHeader($params)
	{
		if ($this->context->smarty->tpl_vars['page_name']->value == 'index')
			$this->context->controller->addCSS($this->_path.'views/css/wttestimonial.css', 'all');
		
	}
	public function hookdisplayTopFooter()
	{
		return $this->getContentForHook('displayTopFooter');
	}
	public function hookActionShopDataDuplication($params)
	{
		Db::getInstance()->execute('
		INSERT IGNORE INTO '._DB_PREFIX_.'wttestimonial_shop (`id_wttestimonial`, `id_shop`, `active`)
		SELECT id_wttestimonial, '.(int)$params['new_id_shop'].', active
		FROM '._DB_PREFIX_.'wttestimonial_shop
		WHERE id_shop = '.(int)$params['old_id_shop']);
		Db::getInstance()->execute('
		INSERT IGNORE INTO '._DB_PREFIX_.'wttestimonial_lang (`id_wttestimonial`, `id_lang`, `id_shop`, `title`, `link`, `text`)
		SELECT id_wttestimonial, id_lang, '.(int)$params['new_id_shop'].', title, link, text 
		FROM '._DB_PREFIX_.'wttestimonial_lang
		WHERE id_shop = '.(int)$params['old_id_shop']);
	}
	public function hookActionObjectLanguageAddAfter($params)
	{
		Db::getInstance()->execute('
		INSERT IGNORE INTO '._DB_PREFIX_.'wttestimonial_lang (`id_wttestimonial`, `id_lang`, `id_shop`, `title`, `link`, `text`)
		SELECT id_wttestimonial, '.(int)$params['object']->id.', id_shop, title, link, text 
		FROM '._DB_PREFIX_.'wttestimonial_lang
		WHERE id_lang = '.(int)Configuration::get('PS_LANG_DEFAULT'));
	}
}