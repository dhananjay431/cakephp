<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class UsersController extends Controller
{
    public function view1()
    {
      $resp=array();
      $resp['msg']=true;

    	$articles = $this->Users->find('all');
      $resp['data']=$articles;
      $this->autoRender = false;
      $this->response->type('json');
      $json = json_encode($resp);
      $this->response->body($json);
    }
    public function viewById($id)
    {
     // $arr=$this->request->input('json_decode');
      if($this->request->is('post'))
      {
        $data = $this->request->input();
            $resp=array();
            $resp['msg']=true;
            $article = $this->Users->get(intval($id));
            $resp['data']=$article;
            $this->autoRender = false;
            echo $data;
     
      }
      else
      {
        echo 'method';
      }

     // $data = $this->request->input();
      //echo $data;
          //$data=$this->request->input();
      //$data=$this->request->params('a1');
    
             
    }
 }
