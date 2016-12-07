<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div class="row separador"></div>
<div style="background: #f2f2f2; width: 100%;">
  <div class="container footer">
  <div class="row arealink">
    <div class="col-md-4 col-xs-6 infoAyuda">
      <h4>SERVICIOS</h4>
      <ul>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/servicios/comprobantes/index.jsp">Comprobantes Fiscales</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/servicios/cambios/index.jsp">Solicitud de cambios</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/servicios/une/index.jsp">UNE</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/servicios/cancelacion-polizas/index.jsp">Cancelación de Póliza</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/buro-ef.jsp">Buró de Entidades Financieras</a></li>
      </ul>
    </div>
    <div class="col-md-4 col-xs-6 infoAyuda">
      <h4>INFORMACIÓN RELEVANTE</h4>
      <ul>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/legal.jsp">Legal</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/privacidad.jsp">Aviso de Privacidad</a></li>
        <li><a data-toggle="modal" data-target="#condicionesgrales">Condiciones legales</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/derechos.jsp">Derechos ARCO</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/seguridad.jsp">Seguridad</a></li>
        <li><a target="_BLANK" href="#">Términos y condiciones</a></li>
        <li><a target="_BLANK" href="#">Mapa del sitio</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/basicos-estandarizados.jsp">Básicos Estandarizados</a></li>
      </ul>
    </div>
    <div class="col-md-4 col-xs-6 infoAyuda">
      <h4>INFORMACIÓN CORPORATIVA</h4>
      <ul>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/informacion-corporativa/index.jsp">Información Financiera</a></li>
        <li><a target="_BLANK" href="http://www.bancomer.com/nuestrom/index.jsp?nivel1=">Acerca del Grupo BBVA Bancomer</a></li>
        <li><a target="_BLANK" href="http://www.bancomer.com/index.jsp">BBVA.com</a></li>
        <li><a target="_BLANK" href="http://ec2-52-49-166-51.eu-west-1.compute.amazonaws.com/wp-content/uploads/2016/10/CG-ASD-26OCt-.pdf">Condiciones generales</a></li>
      </ul>
    </div>   
    </div>
    
  
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/script.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<?php wp_footer(); ?>
