<?php

/**
 * Return the enum drop down list
 * @usage
 *  echo CHtml::activeDropDownList( $model,'status',ZHtml::enumItem($model, 'status') ); 
 * or , more tasty:
 * <?php echo ZHtml::enumDropDownList( $model,'status'); ?>
 */
class ZHtml extends CHtml
{
        public static function enumItem($model,$attribute)
        {
                $attr=$attribute;
                self::resolveName($model,$attr);
                preg_match('/\((.*)\)/',$model->tableSchema->columns[$attr]->dbType,$matches);
                foreach(explode(',', $matches[1]) as $value)
                {
                        $value=str_replace("'",null,$value);
                        $values[$value]=Yii::t('enumItem',$value);
                }
                
                return $values;
        }  

       public static function enumDropDownList($model, $attribute, $htmlOptions)
       {
          return CHtml::activeDropDownList( $model, $attribute,ZHtml::enumItem($model,  $attribute), $htmlOptions);
       
       
       }

}

?>
