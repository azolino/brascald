<form  id="form1" name="form1" method="post" action="enviarEmail.php">
  <table  width="500" border="0" align="center" cellpadding="0" cellspacing="2">
    <tr>
      <td  align="right">Nome:</td>
      <td><input  type="text" name="nome" id="nome" /></td>
    </tr>
    <tr>
      <td  align="right">Assunto:</td>
      <td><input  type="text" name="assunto" id="assunto" /></td>
    </tr>
    <tr>
        
            <input align="right" type="text" name="estado">  <select name="estado" size="1" id="Combobox1" autocomplete="off">
               <option selected value="">Escolha seu Estado</option>
               <option value="AC">AC</option>
               <option value="AL">AL</option>
               <option value="AP">AP</option>
               <option value="AM">AM</option>
               <option value="BA">BA</option>
               <option value="CE">CE</option>
               <option value="DF">DF</option>
               <option value="ES">ES</option>
               <option value="GO">GO</option>
               <option value="MA">MA</option>
               <option value="MT">MT</option>
               <option value="MS">MS</option>
               <option value="MG">MG</option>
               <option value="PA">PA</option>
               <option value="PB">PB</option>
               <option value="PR">PR</option>
               <option value="PE">PE</option>
               <option value="PI">PI</option>
               <option value="RJ">RJ</option>
               <option value="RN">RN</option>
               <option value="RS">RS</option>
               <option value="RO">RO</option>
               <option value="RR">RR</option>
               <option value="SC">SC</option>
               <option value="SP">SP</option>
               <option value="SE">SE</option>
               <option value="TO">TO</option>
            </select>
         
          </tr>
    <tr>
      <td  align="right">Mensagem:</td>
      <td><textarea  name="mensagem" id="mensagem" cols="45" rows="5"></textarea></td>
    </tr>

    

    <tr>
      <td  colspan="2" align="center"><input type="submit" value="Enviar" /></td>
    </tr>
  </table>
</form>