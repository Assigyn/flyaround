<?php
/**
 * Created by PhpStorm.
 * User: anne-sophie
 * Date: 05/11/17
 * Time: 12:13
 */

namespace WCS\CoavBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Review Route
 * @Route("review")
 */
class ReviewController extends Controller
{

    /**
     * Reviews main page
     *
     * @Route("/", name="review_index")
     * @Method("GET")
     */
    public function indexAction(){

        $em = $this->getDoctrine()->getManager();

        $reviews = $em->getRepository('WCSCoavBundle:Review')->findAll();

        return $this->render('review/index.html.twig',array(
            'reviews' => $reviews
        ));
    }

    /**
     * Add new review page
     *
     * @Route("/new", name="review_add")
     * @Method({"GET", "POST"})
     */
    public function addReviewAction(){
        return $this->render('review/add.html.twig',array());
    }

}