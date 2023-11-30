<?php


json_decode(string $json [,bool $assoc [,int $depth= 512 [,int $options = 0]]])
$jsonData = file_get_contents('settings.json');
$settings = json_decode($jsonData, true);
print_r($settings);

$maxItems = $settings['editor.inlineSuggest.maxItems'];
$minChars = $settings['editor.inlineSuggest.minChars'];
$maxChars = $settings['editor.inlineSuggest.maxChars'];
$maxSuggestions = $settings['editor.inlineSuggest.maxSuggestions'];
$maxSuggestions = $settings['editor.inlineSuggest.maxSuggestions'];

$name = $settings['name'];
$email = $settings['email'];
$phone = $settings['phone'];

{

    use PHPForm\Form;

$form = new Form();

$form->addInput('name', 'text', 'Nombre');
$form->addInput('email', 'email', 'Email');
$form->addPasswrds('senha','passwrds','senha')
$form->addInput('message', 'textarea', 'Mensaje');

$form->addSubmit('Enviar');

if ($form->isValid()) {
  // El formulario es válido
} else {
  // El formulario no es válido
}

echo $form->render();
}

{
    " editor.inlineSuggest.passwords.hideOnFocus": true
    "editor.inlineSuggest.passwords.hideOnBlur":true
    "editor.inlineSuggest.passwords.showOnEnter": true
    "editor.inlineSuggest.passwords.showOnTab":true

  }
  $json = '{"name": "John", "age": 30, "city": "New York"}';
$data = json_decode($json);

echo $data->name;  Imprime "John"
echo $data->age; Imprime 30
echo $data->city;  Imprime "New York"

?>
