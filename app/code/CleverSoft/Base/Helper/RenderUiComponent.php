<?php
/**
 * Created by PhpStorm.
 * User: Thuan
 * Date: 11/2/2016
 * Time: 4:15 PM
 */
namespace CleverSoft\Base\Helper;

use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\BlockFactory;
use Magento\Framework\View\Layout\Generator\Context as GeneratorContext;
use Magento\Framework\View\Element\UiComponent\ContextFactory as UiComponentContextFactory;

/**
 * Class RenderUiComponent
 * @package Magestore\InventorySuccess\Helper
 */
class RenderUiComponent extends \Magento\Framework\View\Layout\Generator\UiComponent
{
    /**
     * @var GeneratorContext
     */
    protected $generatorContext;

    /**
     * RenderUiComponent constructor.
     * @param UiComponentFactory $uiComponentFactory
     * @param BlockFactory $blockFactory
     * @param UiComponentContextFactory $contextFactory
     * @param GeneratorContext $generatorContext
     */
    public function __construct(
        UiComponentFactory $uiComponentFactory,
        BlockFactory $blockFactory,
        UiComponentContextFactory $contextFactory,
        GeneratorContext $generatorContext

    ){
        $this->generatorContext = $generatorContext;
        parent::__construct($uiComponentFactory, $blockFactory,$contextFactory );
    }

    /**
     * @param $name
     * @return string
     */
    public function renderUiComponent($name){
        $structure = $this->generatorContext->getStructure();
        $layout = $this->generatorContext->getLayout();
        $data = [
            'attributes'=>[
                'group' =>'',
                'component' =>''
            ]
        ];
        $uicomponent = $this->generateComponent($structure, $name, $data, $layout);
        return $uicomponent->toHtml();
    }
}