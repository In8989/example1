<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['common','alert'];
    protected $models = [];

    protected $validation;

    // 첫번째 모델용 공통 변수
    protected $model;

    // 첫번째 모델의 주키 공통 변수
    protected $primaryKey = "";

    /**
     * Constructor.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param LoggerInterface $logger
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
    }

    public function __construct()
    {
        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.: $this->session = \Config\Services::session();

        // Load Validation
        //$this->validation = \Config\Services::validation();

        //  Load Model
        foreach ($this->models as $key => $model) {
            $this->$model = model("App\Models\\{$model}");
            if ($key == 0) {
                $this->model = $this->$model;   // 0 번째 기번 모듈로 (컨트롤러에서 첫 번째 models 배열에 넣은 데이터
                $this->primaryKey = $this->model->primaryKey;
            }
        }

    }

    public function run($path, $params=array())
    {
        $data['head'] = view('master/layout/head');
        $data['aside'] = view('master/layout/aside');
        $data['content'] = view($path, $params);
        $data['footer'] = view('master/layout/footer');

        return view("master/layout/layout", $data);
    }

}
