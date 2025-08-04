<?php
if (!defined('_PS_VERSION_')) exit;

class MisImagenes extends Module
{
    public function __construct()
    {
        $this->name = 'misimagenes';
        $this->tab = 'front_office_features';
        $this->version = '1.0.2';
        $this->author = 'Juanma';
        $this->need_instance = 0;
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Mis Imágenes');
        $this->description = $this->l('Muestra imágenes desde una carpeta.');
    }

    public function install()
    {
        return parent::install() && $this->registerHook('displayHeader');
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/misimagenes.css', 'all');
    }
}
