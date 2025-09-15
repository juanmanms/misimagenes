<?php
class MisImagenesActivitatsModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        // Ruta a la carpeta de imágenes (ej: /img/actividades/)
        $rutaImagenes = _PS_IMG_DIR_ . 'activitats/';
        $imagenes = scandir($rutaImagenes);
        $imagenes = array_diff($imagenes, array('.', '..'));

        // Pasar datos a Smarty
        $this->context->smarty->assign([
            'imagenes' => $imagenes,
            'ruta_publica' => _PS_IMG_ . 'activitats/', // Ruta pública accesible desde la web
            'titulo' => $this->l('Activitats'),
            'banner' => _PS_IMG_ . '/banner.jpg', // Ruta al banner

        ]);

        // Usar plantilla (puedes reutilizar la misma o crear una nueva)
        $this->setTemplate('module:misimagenes/views/templates/front/mostrar.tpl');
    }

    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();
        $breadcrumb['links'][] = [
            'title' => $this->l('Activitats'),
            'url'   => $this->context->link->getModuleLink($this->module->name, 'activitats'),
        ];
        return $breadcrumb;
    }
}
