[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

[?php #include_partial('<?php echo $this->getModuleName() ?>/navbar', array('filter' => <?php echo $this->configuration->hasFilterForm() ? true : false ?>)) ?]

  <div class="pull-right">
    <a href="#filterPopup" class="btn" data-toggle="modal"><i class="icon-search"></i> Filtrar</a>
  </div>
  
  <?php if ($this->configuration->hasFilterForm()): ?>
    [?php $filterValues = $sf_user->getRawValue()->getAttribute($this->getModuleName().'.filters', array(), 'admin_module'); if (!empty($filterValues)): ?]
    <div class="alert alert-info alert-block">
      <a href="#" class="close fade" data-dismiss="alert">&times;</a>
      Estos resultados estan filtrados. <a href="#filterPopup" data-toggle="modal">Modificar Filtro</a>
    </div>
    [?php endif; ?]

  <?php endif; ?>

  [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]


  [?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)) ?]

<?php if ($this->configuration->getValue('list.batch_actions')): ?>
    <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
<?php endif; ?>
    [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
<?php if ($this->configuration->getValue('list.batch_actions')): ?>
    </form>
<?php endif; ?>

  <div id="sf_admin_footer">
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
  </div>

<?php if ($this->configuration->hasFilterForm()): ?>
  [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
<?php endif; ?>
