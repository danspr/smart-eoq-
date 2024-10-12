<?php

namespace App\Controllers;

use App\Models\EOQModel;

class EOQ extends BaseController
{

    public function __construct()
    {
        $auth = new Auth();
        $auth->isSessionExist();
        $this->eoqModel = new EOQModel();
    }
    
    public function index(): string
    {
        $pageName = 'EOQ Analysis';
        $pageView = [
            'pageName' => $pageName,
        ];

        $contents = view('pages/eoq/eoq_view', $pageView);
        $data = [
            ... $this->defaultDataView(),
            'pageTitle' => 'EOQ Analysis | ' . getAppName(),
            'contents' => $contents,
            'vueScript' => 'assets/js/vue/smarteoq.eoq.js',
        ];

        return view('templates/main_view', $data);
    }

    public function eoqDetailView($id){
        if(!isset($id)){
            return;
        }

        $eoqDetail = $this->eoqModel->getItemDetail($id);
        if(empty($eoqDetail)){
            return;
        }

        $pageName = $eoqDetail['name'];
        $pageView = [
            'pageName' => $pageName,
            'itemId' => $id,
        ];

        $contents = view('pages/eoq/eoq_detail_view', $pageView);
        $data = [
            ... $this->defaultDataView(),
            'pageTitle' => 'EOQ Detail | ' . getAppName(),
            'profile' => [
                'full_name' => $this->session->get('full_name'),
                'role' => $this->session->get('role'),
            ],
            'contents' => $contents,
            'vueScript' => 'assets/js/vue/smarteoq.eoq.detail.js',
            'customParam' => [ 
                'itemId' => $id
            ]
        ];

        return view('templates/main_view', $data);
    }
}
