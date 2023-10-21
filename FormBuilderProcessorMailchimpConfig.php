<?php namespace ProcessWire;
class FormBuilderProcessorMailchimpConfig extends ModuleConfig {
  public function getDefaults() {
    return array(
      'api_key' => '',
      'server' => '',
    );
  }
  public function getInputfields() {
    $inputfields = parent::getInputfields();

    $f = $this->modules->get('InputfieldText');
    $f->attr('name', 'api_key');
    $f->label = 'API Key';
    $f->required = true;
    $inputfields->add($f);

    $f = $this->modules->get('InputfieldText');
    $f->attr('name', 'server');
    $f->label = 'Server';
    $f->required = true;
    $inputfields->add($f);

    $f = $this->modules->get('InputfieldCheckbox');
    $f->attr('name', 'mailchimp_log');
    $f->label = 'Log responses?';
    $inputfields->add($f);

    return $inputfields;
  }
}
