<?php
namespace TS\Restclient\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class TestViewHelper extends AbstractViewHelper
{
   use CompileWithRenderStatic;

   public static function renderStatic(
       array $arguments,
       \Closure $renderChildrenClosure,
       RenderingContextInterface $renderingContext
   ) {
       return 'Hallo Welt';
   }
}
