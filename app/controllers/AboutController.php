<?php

/**
 * Description of AboutController
 *
 * @author Matt_Davis
 */
class AboutController extends BaseController {
    
    public function index()
    {
        return View::make('about/index');
    }
}
