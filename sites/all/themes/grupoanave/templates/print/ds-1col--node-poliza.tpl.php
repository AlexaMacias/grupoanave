<?php

/**
 * @file
 * Display Suite 1 column template.
 */
 //print_r(array_keys($elements));exit;
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

  <h1>Poliza de Seguro - <?php print $title;?></h1>

  <table class="print">
    <thead>
      <tr>
        <th>Datos del Asegurado</th>
        <th>Datos de la Poliza</th>
      </tr>
    </thead>
    <tbody><tr>
      <td class="table-asegurado">
        <table class="print-child">
          <tr>
            <td colspan="2">
              <?php if(isset($elements['field_asegurado_nombre'])):?>
              <?php print render($elements['field_asegurado_nombre']);?>
              <?php endif;?>
            </td>
          </tr>
          
          <tr>
            <td>
              <?php if(isset($elements['field_asegurado_calle_num'])):?>
              <?php print render($elements['field_asegurado_calle_num']);?>
              <?php endif;?>
            </td>
            <td>
              <?php if(isset($elements['field_asegurado_rfc'])):?>
              <?php print render($elements['field_asegurado_rfc']);?>
              <?php endif;?>
            </td>
          </tr>
          
          <tr>
            <td colspan="2">
              <?php if(isset($elements['field_asegurado_colonia'])):?>
              <?php print render($elements['field_asegurado_colonia']);?>
              <?php endif;?>
            </td>
          </tr>
          
          <tr>
            <td>
              <?php if(isset($elements['field_asegurado_poblado'])):?>
              <?php print render($elements['field_asegurado_poblado']);?>
              <?php endif;?>
            </td>
            <td>
              <?php if(isset($elements['field_asegurado_cp'])):?>
              <?php print render($elements['field_asegurado_cp']);?>
              <?php endif;?>
            </td>
          </tr>
          
          <tr>
            <td>
              <?php if(isset($elements['field_asegurado_estado'])):?>
              <?php print render($elements['field_asegurado_estado']);?>
              <?php endif;?>
            </td>
            <td>
              <?php if(isset($elements['field_asegurado_telefono'])):?>
              <?php print render($elements['field_asegurado_telefono']);?>
              <?php endif;?>
            </td>
          </tr>
          
          <tr class="last">
            <td colspan="2">
              <?php if(isset($elements['field_asegurado_benef_pref'])):?>
              <?php print render($elements['field_asegurado_benef_pref']);?>
              <?php endif;?>
            </td>
          </tr>
          
        </table>
      </td>
      <td class="table-poliza">
        <table class="print-child">
          <tbody>
            <tr>
              <td>
                <?php if(isset($elements['title'])):?>
                <table class="generic"><tr>
                  <td><strong>Numero de Contrato:</strong></td>
                  <td align="right"><?php print render($elements['title']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>
                <?php if(isset($elements['field_poliza_prima_neta'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_prima_neta']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_prima_neta']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <?php if(isset($elements['field_poliza_emision'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_emision']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_emision']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>
                <?php if(isset($elements['field_poliza_emision'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_emision']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_reduccion']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <?php if(isset($elements['field_poliza_vigencia'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_vigencia']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_vigencia']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>
                <?php if(isset($elements['field_poliza_rgo_pago_fracc'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_rgo_pago_fracc']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_rgo_pago_fracc']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <?php if(isset($elements['fin_vigencia'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['fin_vigencia']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['fin_vigencia']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>
                <?php if(isset($elements['field_poliza_derecho_poliza'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_derecho_poliza']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_derecho_poliza']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <?php if(isset($elements['field_poliza_moneda'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_moneda']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_moneda']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>
                <?php if(isset($elements['field_poliza_impuesto_iva'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_impuesto_iva']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_impuesto_iva']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <?php if(isset($elements['field_poliza_forma_pago'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_forma_pago']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_forma_pago']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>
                <?php if(isset($elements['field_poliza_prima_total'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_prima_total']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_prima_total']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <?php if(isset($elements['field_poliza_tipo_movimiento'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_tipo_movimiento']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_tipo_movimiento']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>
                <?php if(isset($elements['field_poliza_prima_1er_recibo'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_prima_1er_recibo']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_prima_1er_recibo']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <?php if(isset($elements['field_poliza_conducto_cobro'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_conducto_cobro']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_conducto_cobro']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>
                <?php if(isset($elements['field_poliza_primas_recibos_subs'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_primas_recibos_subs']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_primas_recibos_subs']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
            </tr>
            
            <tr class="last">
              <td>
                <?php if(isset($elements['field_poliza_intermediario'])):?>
                <table class="generic"><tr>
                  <td><strong><?php print $elements['field_poliza_intermediario']['#title'];?>:</strong></td>
                  <td align="right"><?php print render($elements['field_poliza_intermediario']);?></td>
                </tr></table>
                <?php endif;?>
              </td>
              <td>&nbsp;</td>
            </tr>
            
          </tbody>
        </table>
      </td>
    </tr></tbody>
  </table>
  
  <table class="print table-vehiculo">
    <thead>
      <tr>
        <th>Datos del Vehiculo</th>
      </tr>
    </thead>
    <tbody><tr><td>
      <table class="print-child">
        <tr class="row-1">
          <td>
            <?php if(isset($elements['field_vehiculo_marca'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_marca']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_marca']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_color'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_color']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_color']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_clave_sbg'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_clave_sbg']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_clave_sbg']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_tonelaje'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_tonelaje']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_tonelaje']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
        </tr>
        
        <tr class="row-2">
          <td>
            <?php if(isset($elements['field_vehiculo_submarca'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_submarca']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_submarca']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_cilindros'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_cilindros']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_cilindros']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_uso'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_uso']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_uso']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_tipo_carga'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_tipo_carga']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_tipo_carga']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
        </tr>
        
        <tr class="row-3">
          <td>
            <?php if(isset($elements['field_vehiculo_serie'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_serie']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_serie']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_capacidad'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_capacidad']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_capacidad']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_referencia'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_referencia']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_referencia']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_descripcion_carga'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_descripcion_carga']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_descripcion_carga']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
        </tr>
        
        <tr class="row-4">
          <td>
            <?php if(isset($elements['field_vehiculo_motor'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_motor']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_motor']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_numero_pedimento'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_numero_pedimento']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_numero_pedimento']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_numero_inventario'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_numero_inventario']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_numero_inventario']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_remolque'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_remolque']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_remolque']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
        </tr>
        
         <tr class="row-5 last">
          <td>
            <?php if(isset($elements['field_vehiculo_transmision'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_transmision']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_transmision']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_carroceria'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_carroceria']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_carroceria']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_servicio'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_servicio']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_servicio']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
          <td>
            <?php if(isset($elements['field_vehiculo_tipo_remolque'])):?>
            <table class="generic"><tr>
              <td><strong><?php print $elements['field_vehiculo_tipo_remolque']['#title'];?>:</strong></td>
              <td align="right"><?php print render($elements['field_vehiculo_tipo_remolque']);?></td>
            </tr></table>
            <?php endif;?>
          </td>
        </tr>
        
      </table>
    </td></tr></tbody>
  </table>
  
  <table class="print">
    <thead>
      <tr>
        <th colspan="2">Tipo de Poliza:</th>
      </tr>
    </thead>
    <tbody>
      <tr class="last">
        <td colspan="2">
          <?php if(isset($elements['field_poliza_tipo'])):?>
          <?php print render($elements['field_poliza_tipo']);?>
          <?php endif;?>
        </td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th>
          Riesgos Amparados:
        </th>
        <th>
          Deducibles:
        </th>
      </tr>
    </thead>
    <tbody>
      <tr class="last">
        <td width="50%">
          <?php if(isset($elements['coberturas_de_poliza'])):?>
          <?php print render($elements['coberturas_de_poliza']);?>
          <?php endif;?>
        </td>
        <td width="50%">
          <?php if(isset($elements['field_poliza_deducibles'])):?>
          <?php print render($elements['field_poliza_deducibles']);?>
          <?php endif;?>
        </td>
      </tr>
    </tbody>
  </table>
  
  <?php if(isset($elements['links'])):?>
  <?php print render($elements['links']);?>
  <?php endif;?>
</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
