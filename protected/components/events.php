<?php

class CategoryWidget extends CWidget {

    public function run() {
        $models = Event::model()->findAll();

        $this->render('category', array(
            'models'=>$models   
        ));
    }
}

?>