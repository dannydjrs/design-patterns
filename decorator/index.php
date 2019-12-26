<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$form = new RedBackgroundDecorator(new Form());
$form->add(
  (new Div())
    ->add(
      (new WhiteTextDecorator(new LargeFontDecorator(new Paragraph())))
        ->add(new Text("hello"))
    )
);

echo $form->render();
