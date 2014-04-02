[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  <div class="form-group [?php echo $class ?] [?php $form[$name]->hasError() and print 'has-error' ?]">
      [?php echo $form[$name]->renderLabel($label, array('class' => 'col-sm-2 control-label')) ?]
      
      <div class="[?php echo $form[$name]->getWidget()->getOption('content-handler'); ?] col-sm-4 [?php echo $class ?]">
        [?php if($form[$name]->getWidget()->hasOption('content-handler')): ?]
          <div class="input-group">
            <span class="input-group-addon">
              [?php echo $form[$name]->getWidget()->getOption('content-handler') ?]
              <!-- TODO: get this value depending on the current culture --></span>
            [?php echo $form[$name]->render(array('class' => 'form-control')) ?]
          </div>
        [?php else: ?]
          [?php echo $form[$name]->render(array('class' => 'form-control')) ?]
        [?php endif; ?]
        <!-- <span class="help-inline">[?php echo $form[$name]->renderError() ?]</span> -->
        [?php if ($help): ?]
          <p class="help-block">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</p>
        [?php elseif ($help = $form[$name]->renderHelp()): ?]
          <p class="help-block">[?php echo $help ?]</p>
        [?php endif; ?]
      </div>
  </div>
[?php endif; ?]
