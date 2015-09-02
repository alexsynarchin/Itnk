<?php
class DocumentsController extends BaseController {
    public function index(){
        return View::make('documents.index');
    }
}