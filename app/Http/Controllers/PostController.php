<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
class PostController extends Controller{
    public function index(){
        return 'testing post';
    }

    public function create(){
        //form to insert data
        return "created";
    }

    public function store(Request $request){
        //form handling
    }

    public function show($id){
        //to display specific resource
    }

    public function edit($id){
        //edit form
    }

    public function update(Request $request){
        //form handling to edit form
    }

    public function destroy($id){
        //delete the record
    }
}
?>