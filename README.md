# gif-comment-facebook
Script para carregar gif aleatório em posts do facebook.

## Como foi criada
A aplicação foi criada baseada no OpenGraph para a interação com o facebook.

## Para que serve
Para a aplicação funcionar é necessário hospeda-la online. Ao comentar o link em um post do facebook que esta hospedado a aplicação, o facebook carrega uma preview do site, no caso o conteudo do site são gifs aleatórios.

## Configuração
Para configurar, é necessário:

* criar uma aplicação no __[facebook access-tokens](https://developers.facebook.com/docs/facebook-login/access-tokens)__
* inserir o access_token criada no script
* configurar sua url no script
* carregar todo o conteudo (img, gif) na pasta 'images'

### Redirecionar link
Ao clicar no link é possível configurar o link de redirecionamento no 
```js
location.href = "https://www.seulink.com/";
```

## Teste
Para testar comente a url em um post do facebook.
