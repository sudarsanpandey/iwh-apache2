<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\iwh\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
   /**
    *@Route("/login")
    */
    public function get_login_info(Request $request){
	$params = array();
	$content = $request->getContent();
	if(!empty($content)){
		$params = json_decode($content, true);
	}
	if($this->check_login_status($params['username'],$params['password'])){
		return new Response('OK');
	}
	return new Response('NOK');
    }
   /**
    * @Route("/lucky/number")
    */
    public function numberAction()
    {
	$data = array ( 
		    'lucky_number' => rand(0,100),
		);

	return new JsonResponse($data);
    }
    /**
     * Test for sending post data
     *@Route("/send")
    **/
    public function sendpost(){
	$url = 'http://wcsc02.ad.ydesigngroup.com/login';
	$data = array('username' => 'sudarsan', 'password' => '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');
	// use key 'http' even if you send the request to https://...
	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/json\n",
	        'method'  => 'POST',
	        'content' => json_encode($data),
	    ),
	);
  	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { /* Handle error */ }

	var_dump($result);
	return new JsonResponse (null);
    }
    /**
     *
    */
    public function check_login_status($username, $password){
	//return true;
	$em = $this->getDoctrine()->getManager();
	
	$query = $em->createQuery(
		'SELECT password
		FROM AppBundle:iwh\User u
		WHERE u.user = :username'
		)->setParameter('username',$username);
	echo $query->getResult();
//	$user = $this -> getDoctrine() -> getRepository('AppBundle:iwh/User') -> findOneByUsername($username);
//	if ($user->getPassword() == $password){
//		return true;
//	}
	return false;
    }
}
