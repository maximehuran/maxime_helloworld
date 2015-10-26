<?php
namespace Maxime\Helloworld\Controller\Say;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
       echo 'Execute Action Say_Index OK';
       die();
    }
}