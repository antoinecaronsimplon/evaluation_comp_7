<?php

if (!defined('_PS_VERSION_')) {

    exit;
 }
 
 class Testimony extends Module
 {
    public function __construct()
    {
        $this->name = 'testimony';
        $this->tab = 'front_office_features';
        $this->version = '2.0.0';
        $this->author = 'Ukoo';
        $this->need_instance = 0;
        $this->context = Context::getContext();
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Testimony');
        $this->description = $this->l('Display a block with customer testimonials');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module ?');
    }

    public function install()
    {
    if (Shop::isFeatureActive()) {
        return Shop::setContext(Shop::CONTEXT_ALL);
    }
    return parent::install() &&
        $this->registerHook('displayLeftColumn') &&
        $this->registerHook('displayRightColumn') &&
        $this->registerHook('header') &&
        Configuration::updateValue('TESTIMONY1', '') &&
        Configuration::updateValue('TESTIMONY2', '') &&
        Configuration::updateValue('TESTIMONY3', '');
    }

    public function uninstall()
    {
    return parent::uninstall() &&
        Configuration::deleteByName('TESTIMONY1') &&
        Configuration::deleteByName('TESTIMONY2') &&
        Configuration::deleteByName('TESTIMONY3');
    }

    public function getContent()
    {
    $output = null;
    if (Tools::isSubmit('submit' . $this->name)) {
        $testimony1 = Tools::getValue('TESTIMONY1');
        $testimony2 = Tools::getValue('TESTIMONY2');
        $testimony3 = Tools::getValue('TESTIMONY3');
        if (!$testimony1 || empty($testimony1) || !Validate::isGenericName($testimony1)) {
            $output .= $this->displayError($this->l('Configuration failed'));
        } else {
            Configuration::updateValue('TESTIMONY1', $testimony1);
            Configuration::updateValue('TESTIMONY2', $testimony2);
            Configuration::updateValue('TESTIMONY3', $testimony3);
            $output .= $this->displayConfirmation($this->l('Update successful'));
        }
    }
    return $output . $this->displayForm();
    }

    public function displayForm()
    {
    $fields_form = array();
    $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
    $fields_form[0]['form'] = array(
        'legend' => array(
            'title' => $this->l('Testimonies settings'),
        ),
        'input' => array(
            array(
                'type' => 'textarea',
                'label' => $this->l('Testimony 1'),
                'name' => 'TESTIMONY1',
                'size' => 20,
                'required' => true
            ),
            array(
                'type' => 'textarea',
                'label' => $this->l('Testimony 2'),
                'name' => 'TESTIMONY2',
                'size' => 20,
                'required' => false
            ),
            array(
                'type' => 'textarea',
                'label' => $this->l('Testimony 3'),
                'name' => 'TESTIMONY3',
                'size' => 20,
                'required' => false
            )
        ),
        'submit' => array(
            'title' => $this->l('Save'),
            'class' => 'btn btn-default'
        )
    );


    $helper = new HelperForm();
    $helper->module = $this;
    $helper->name_controller = $this->name;
    $helper->token = Tools::getAdminTokenLite('AdminModules');
    $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
    $helper->default_form_language = $default_lang;
    $helper->allow_employee_form_lang = $default_lang;
    $helper->title = $this->displayName;
    $helper->show_toolbar = true;
    $helper->toolbar_scroll = true;
    $helper->submit_action = 'submit' . $this->name;
    $helper->toolbar_btn = array(
    'save' =>
        array(
            'desc' => $this->l('Save'),
            'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name .
                '&token=' . Tools::getAdminTokenLite('AdminModules'),
        ),
    'back' => array(
        'href' => AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules'),
        'desc' => $this->l('Back to list')
    )
    );

    $helper->tpl_vars = array(
        'fields_value' => array(
            'TESTIMONY1' => Configuration::get('TESTIMONY1'),
            'TESTIMONY2' => Configuration::get('TESTIMONY2'),
            'TESTIMONY3' => Configuration::get('TESTIMONY3')
        ),
     );
     return $helper->generateForm($fields_form);
    }

    public function hookheader()
    {
    $this->context->controller->addJS($this->_path . '/views/js/testimony.js', 'all');
    $this->context->controller->addCSS($this->_path . '/views/css/testimony.css', 'all');
    }

    public function hookDisplayLeftColumn($params)
    {
    $this->context->smarty->assign(
        array(
            'testimony1' => Configuration::get('TESTIMONY1'),
            'testimony2' => Configuration::get('TESTIMONY2'),
            'testimony3' => Configuration::get('TESTIMONY3'),
        )
    );
    return $this->display(__FILE__, 'views/templates/hook/testimony.tpl');
    }

    public function hookDisplayHeader($params)
  {
      return $this->hookDisplayLeftColumn($params);
  }
 }