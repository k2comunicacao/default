//MÁSCARA PARA CELULAR COM 9 DIGITOS OU 8
<script src="/js/mask.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function($){
   $("#cnpj").mask("99.999.999/9999-99");
   $("#telefone").mask("(99) 9999-9999");
  $("#celular").mask("(99) 9999-9999?9");
    $("#celular").blur(function(event) {
        if($(this).val().length == 15){
          $('#celular').mask('(99) 99999-999?9');
        } else {
          $('#celular').mask('(99) 9999-9999?9');
        }
    });
});
</script>
