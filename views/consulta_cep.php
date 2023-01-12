<script type="text/javascript">
    var valor;
    function onload() { 
        valor = document.getElementById('cep');
    }
    function print(){
        return valor.value;
    }
</script>

<body onload="onload()">
       <form method="get" action="" >
              <script type="text/javascript" src="js/consulta_cep.js"></script>
               <label>Cep:
               <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"/></label><br />
               <label>Rua:
               <input name="rua" type="text" id="rua" size="60" /></label><br />
               <label>Bairro:
               <input name="bairro" type="text" id="bairro" size="40" /></label><br />
               <label>Cidade:
               <input name="cidade" type="text" id="cidade" size="40" /></label><br />
               <label>Estado:
               <input name="uf" type="text" id="uf" size="2" /></label><br />
               <input type="button" name="botao-pesquisa" value="pesquisar" 
               onclick="pesquisacep(print());">
       </form>
</body>