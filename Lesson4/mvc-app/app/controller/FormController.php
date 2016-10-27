<?php

class FormController
{
    /**
     * Registration page with form
     */
    public function index()
    {
        $view = new View();
        $view->render('index');
    }

    /**
     * Form submit
     */
    public function submit()
    {
        //@todo
    }

    /**
     * Thank you page
     */
    public function thankyou()
    {
        $view = new View();
        $view->render('thankyou');
    }
}