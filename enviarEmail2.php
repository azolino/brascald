<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "comercial@brascald.com.br";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['nome'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
//$assunto
$email = $_POST['email'];

$telefone = $_POST['telefone'];


 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br>  <strong>Mensagem: </strong>"

.$_POST['mensagem'];



//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <sistema@dominio.com.br>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <sistema@dominio.com.br>\n";
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
?>

<select class="Editboxx" name="estado" size="1" id="Combobox1" autocomplete="off">
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
                                                                  <input class="Editboxx" type="text" id="Editbox4" name="cidade" value="" spellcheck="false">
                                                                  <input class="Editboxx" type="text" id="Editbox5" name="bairro" value="" spellcheck="false">
                                                                  <input class="Editboxx" type="text" id="Editbox6" name="empresa" value="" spellcheck="false">

                                                                      <div id="wb_Text3">
                                                                                 <span style="color:#666666;font-family:Verdana;font-size:12px;">Estado:*</span></div>
                                                                                 <div id="wb_Text10">
                                                                                    <span style="color:#666666;font-family:Verdana;font-size:12px;">Cidade:*</span></div>
                                                                                    <div id="wb_Text11">
                                                                                       <span style="color:#666666;font-family:Verdana;font-size:12px;">Bairro:*</span></div>
                                                                                       <div id="wb_Text12">
                                                                                          <span style="color:#666666;font-family:Verdana;font-size:12px;">Empresa:</span></div>