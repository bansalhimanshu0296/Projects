<?php
/**
 * [NULLED BY DARKGOTH 2014]
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * 
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox_Component
 * @version 		$Id: index.class.php 6219 2013-07-09 06:43:36Z Raymond_Benc $
 */
class Event_Component_Controller_Admincp_Index extends Phpfox_Component
{
	/**
	 * Class process method wnich is used to execute this component.
	 */
	public function process()
	{
		if ($aOrder = $this->request()->getArray('order'))
		{
			if (Phpfox::getService('event.category.process')->updateOrder($aOrder))
			{
				$this->url()->send('admincp.event', null, Phpfox::getPhrase('event.category_order_successfully_updated'));
			}
		}		
		
		if ($iDelete = $this->request()->getInt('delete'))
		{
			if (Phpfox::getService('event.category.process')->delete($iDelete))
			{
				$this->url()->send('admincp.event', null, Phpfox::getPhrase('event.category_successfully_deleted'));
			}
		}
	
		$this->template()->setTitle('Event Categories')
			->setBreadcrumb('Modules', '#modules')
			->setBreadcrumb('Events', $this->url()->makeUrl('admincp.event'), true)
			->setPhrase(array(
					'event.are_you_sure_this_will_delete_all_events_that_belong_to_this_category_and_cannot_be_undone'
				)
			)
			->setHeader(array(
					'jquery/ui.js' => 'static_script',
					'admin.js' => 'module_event',
					'<script type="text/javascript">$Behavior.loadEventUrl = function() { $Core.event.url(\'' . $this->url()->makeUrl('admincp.event') . '\'); }</script>'
				)
			)
			->assign(array(
					'sCategories' => Phpfox::getService('event.category')->display('admincp')->get()
				)
			);	
	}
	
	/**
	 * Garbage collector. Is executed after this class has completed
	 * its job and the template has also been displayed.
	 */
	public function clean()
	{
		(($sPlugin = Phpfox_Plugin::get('event.component_controller_admincp_index_clean')) ? eval($sPlugin) : false);
	}
}

?>