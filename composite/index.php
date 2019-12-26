<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$form = new Form();

$form->add((new Div())->add((new Paragraph())->add(new Text("hello"))));

echo $form->render();
