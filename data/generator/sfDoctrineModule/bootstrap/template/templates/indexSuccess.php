[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

[?php #include_partial('<?php echo $this->getModuleName() ?>/navbar', array('filter' => <?php echo $this->configuration->hasFilterForm() ? true : false ?>)) ?]
  

<div id="sf_admin_container">
  <?php if ($this->configuration->hasFilterForm()): ?>
    <div class="pull-right">
      <a href="#filterPopup" class="btn" data-toggle="modal"><i class="icon-search"></i> Filtrar</a>
    </div>
  <?php endif; ?>
  <h1>Listado</h1>
  
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

  <div id="sf_admin_content">
    <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
    [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
    <ul class="sf_admin_actions">
      [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)) ?]
      [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
  </div>

  <?php if ($this->configuration->hasFilterForm()): ?>
    [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
  <?php endif; ?>
</div>
