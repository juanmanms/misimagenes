<?php
class MisImagenesHorariosModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        // Ruta a tu carpeta de imágenes (ej: /img/mis_imagenes/)
        $rutaImagenes = _PS_IMG_DIR_ . 'horarios/';
        $imagenes = scandir($rutaImagenes);
        $imagenes = array_diff($imagenes, array('.', '..'));

        // Pasar datos a Smarty
        $this->context->smarty->assign(array(
            'imagenes' => $imagenes,
            'ruta_publica' => _PS_IMG_ . 'horarios/',
            'titulo' => $this->l('Horaris'),
            'banner' => _PS_IMG_ . '/banner.jpg', // Ruta al banner
        ));

        // Usar una plantilla personalizada
        $this->setTemplate('module:misimagenes/views/templates/front/mostrar.tpl');
    }
}
