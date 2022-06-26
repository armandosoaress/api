# api

# acessar api <br>
http://armandosoares.epizy.com/api/public_html/

<br>
insira os 3 parametro necessarios<br> 
hotel -> seria o valor do hotel uo preço <br>
moeda -> a moeda exemplo real ou dolar <br>
margem -> a margem de lucro em cima da venda <br>

<p>
  exemplo de url: <p>
    http://armandosoares.epizy.com/api/public_html/?hotel=100&moeda=real&margem=10 <p>
   Retorno:<br>
    {<br>
"status": "susseso",<br>
"moeda": "real",<br>
"valor da moeda": "1 $",<br>
"valor do hotel em reais": "100 R$",<br>
"valor do hotel convertido": "100 $",<br>
"margem": "10%",<br>
"total a pagar pelo cliente": 110,<br>
"lucro": "10 R$"<br>
}
      
    # cadastrar moeda  
      http://armandosoares.epizy.com/api/public_html/

<br>
insira os 2 parametro necessarios<br> 
novamoeda -> o nome da moeda exemplo EURO <br>
valor -> o valor da moeda atualmente<br>

<p>
  exemplo de url: <p>
       http://localhost/minhaapirest/public_html/?novamoeda=teste&valor=30 <p>
     Retorno :<br>
{<br>
"status": "moeda cadastrada com sucesso",<br>
"moeda": "teste",<br>
"valor da moeda": "30"<br>
} 
      
   
