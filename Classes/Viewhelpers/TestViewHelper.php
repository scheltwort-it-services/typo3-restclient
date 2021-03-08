<?php
namespace TS\Restclient\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
#use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;

class TestViewHelper extends AbstractViewHelper
{
   #use CompileWithRenderStatic;
   
   /**
   * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface
   */
#   private $objectManager;
#   
#   public function injectObjectManager(\TYPO3\CMS\Extbase\Object\ObjectManagerInterface $objectManager)
#    {
#        $this->objectManager = $objectManager;
#    }

   public function render(
#       array $arguments,
#       \Closure $renderChildrenClosure,
#       RenderingContextInterface $renderingContext
   ) {
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        try {
#          $responseStr = $objectManager->get('TS\Restclient\Client\HttpClient')->setErrorThrowException(true)->get('https://db1042610-test.einfachmacher.de/api/v1/fahrplan');
          $responseStr = $objectManager->get('TS\Restclient\Client\HttpClient')->get('https://db1042610-test.einfachmacher.de/api/v1/fahrplan');
        }
        catch (HttpClientException $e) {
          $errorCode = $e->getCode();
          $errorMEssage = $e->getMessage();
        }
#        return "Hallo Welt";
        return json_decode($responseStr);
   }
}
