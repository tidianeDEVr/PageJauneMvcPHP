<?php
namespace ism\controllers;

use ism\lib\Request;
use ism\lib\Response;
use ism\models\AnnuaireModel;
use ism\lib\AbstractModel;
use ism\lib\AbstractController;

class AnnuaireController extends AbstractController {

    private AbstractModel $model;
    public function __construct(){
        parent::__construct();
        $this->model= new AnnuaireModel();
    }

    public function accueil(){
        $data= $this->model->selectAll();
        $this->render("annuaire/index", ["entreprises"=> $data]);
    }

    public function results(){
        $data= $this->model->selectAll();
        $this->render("annuaire/results", ["entreprises"=> $data]);
    }

    public function showCatalogue(){
        $data= $this->model->selectAll();
        $this->render("bien/catalogue.bien", ["biens" => $data]);
    }

    public function showDetail(Request $request){
        if(!isset($request->getParams()[0]) || !is_numeric($request->getParams()[0])){
            Response::redirectUrl("bien/showCatalogue");
        }
     $id_bien=$request->getParams()[0];
     $data = $this->model->selectById($id_bien);
    $this->render("bien/detail.bien",["bien"=> $data]);
    }
}
