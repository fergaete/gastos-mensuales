<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * GastoFijoMensual filter form base class.
 *
 * @package    gastos-mensuales
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseGastoFijoMensualFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'     => new sfWidgetFormFilterInput(),
      'notas'      => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'recargo'    => new sfWidgetFormFilterInput(),
      'id_gasto'   => new sfWidgetFormPropelChoice(array('model' => 'Gastos', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'notas'      => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'recargo'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'id_gasto'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Gastos', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('gasto_fijo_mensual_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GastoFijoMensual';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'nombre'     => 'Text',
      'notas'      => 'Text',
      'created_at' => 'Date',
      'recargo'    => 'Number',
      'id_gasto'   => 'ForeignKey',
    );
  }
}
