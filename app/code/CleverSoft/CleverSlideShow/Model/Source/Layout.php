<?php
namespace CleverSoft\CleverSlideShow\Model\Source;
class Layout implements \Magento\Framework\Data\OptionSourceInterface
{
	protected $slideshow;
	public function __construct(\CleverSoft\CleverSlideShow\Model\Slideshow $slideshow)
    {
        $this->slideshow = $slideshow;
    }
	public function toOptionArray()
	{
		$options[] = ['label' => '', 'value' => ''];
		$availableOptions = $this->slideshow->getAvailableFullWidth();
		foreach ($availableOptions as $key => $value) {
			$options[] = [
				'label' => $value,
				'value' => $key,
			];
		}
		return $options;
	}
}