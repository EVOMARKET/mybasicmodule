<?php 
namespace  Mybasicmodule\Controller;
use Symfony\Component\HttpFoundation\Response;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class CommentController extends FrameworkBundleAdminController
{
    public function indexAction()
    {
        $form = $this ->createFormBuilder()
        ->add('name' , TextType::class)
        ->getForm();
      // return new Response ("Hello world");
      return $this ->render("@Modules/mybasicmodule/views/templates/admin/comment.html.twig",
      [
        "test"=> 123,
        "form"=>$form->createView()
      ]
    );
      
    }
}
