# JR Espetos

Destinado a criação de uma loja virtual para a venda de espetos

# Documentação dos códigos do projeto
## HTML
É uma linguagem de marcação, que permite que ao navegador web enteder sobre a estrutura do nosso site. ( menu, tabela, imagens, etc.)

### Tags HTML
- Doctype html : informar que o arquivo é do tipo html.
- html : é informar o começo dos códigos em html.
- /html : informar o final dos códigos html.
- head : ele é utilizado para a configuração da página.
- meta : é utilizado para configurações de idioma, responsividade e segurança.
- Title : é utilizado para definir o nome que aparece na aba do navegador.
- Link : é utilizado para conectar nossa página com outros arquivos/ urls externas.
- href : é o local onde colocaremos endereços de arquivos, sites, ícones, imagens, etc.
- /head : sinaliza o fim da área de configuração da página.
- body : informa o inicio do corpo do site, é nesta área que ficaram os códigos de tudo que é mostrado no site.
- div : destinada a dividir/indicar partes da tela. Com ela a gente cria os espaços utilizados pelos elementos.
- section : é também utilizada para criar seções/espaços na nossa tela.
- h1, h2, h3,h4 ,h5, h6 : são utilizadas para criar títulos.
- form : indica que será adicionado um formulário na nossa página.
- label: que é o texto dos formulários (só para leitura), como por exemplo o nosso nome dos campos.
- input : são as caixas de digitação, que permite capturar dados que as pessoas escrevem no formulário.
- button : indica um botão. Ele pode ser de 2 tipos Submit (utilizado para enviar dados) ou button (faz acões normais).
- a : é utilizada para criar elementos clicáveis/links.
- img : utilizada para inserir imagem e ícones na página.
- video : utilizada par inserir videos dentro da nossa página.
- p : é utilizado para criar parágrafo
- class : permite criar classes para as tags. E essas classes utilizamos para configurar o CSS daquele elemento.
- lang : que define a linguagem/idioma
- header : é utilizado para criar cabeçalhos.
- footer: é utilizado para criar rodapé.
-  script: indica códigos do JavaScript/back-end.
-  alt : serve para indicar textos alternativos, que aparecem caso a imagem ou video não esteja disponivel.
-  placeholder: é aquele texto que desaparece ao digitar dentro de um input.
-  nav : é utilizada para criar barras/menus de navegação.
-  main : é utilizada para informar os códigos princípais do site.
-  i : é  destinada a parte de inserção de ícones.
-  li : é utilizada para criar listas.
-  table : criação de tabelas.
-  option: utilizado para o menu de opções.
-  select : utilizada para criar elementos selecionaveis.
-  src : é utilizado para informar o caminho de um arquivo

## CSS
é uma folha de estilização dos elementos da página, aqui são configuradas cores, tamanho, espaços, etc.
### Elementos de estilo 
- .nomedaclasse {} : essa parte é destinada a  informar qual a classe que vai receber as configurações de estilo, que ficam dentro das chaves.
- background-color : utilizado para definir cor de fundo do elemento.
- padding : utilizado para definir o espaço interno de um elemento (geralmente usado em divs, header, footer, button e  outros elementos que possuem na área).
- color : é utilizado para colocar cor no texto.
- aling-items : é utilizado para alinhar os elementos que estão dentro do elemento da classe.
- center: centralizar
- bottom : parte de baixo.
- top : parte superior/ em cima.
- left : esquerda.
- right : direita.
- display : é utilizado para redimencionar o tamanho dos elementos (geralmente utilizamos o flex nele)
- justify-content : define a posição do elemento. (end - fim, start -inicio, center -meio, space-between -coloca os elementos um ao lado do outro com espaços iguais separando).
- font-size : configura o tamanho da fonte do texto.
- font-weight : configura estilo da fonte (bold -negrito, semibold -negrito mais fraco).
- width : define a largura em px (pixels).
- height : define altura em px ( pixels).
- max-width : largura máxima.
- margin 0px 0px 0px: define as margens ao redor do elemento em todos os lados.
- margin-top : define margens para o topo.
- margin-bottom : define margens para baixo.
- margin-left: define margens para a esquerda.
- margin-right : define margens para a  direita.
- border : define se o elemento vai ter borda.
- border-radius : define o arredondamento da borda.
- border-color : define a cor da borda.
- border-width : define a largura da borda em px;
- gap : define espaços entre elementos.
- cursor : define as configurações do cursor do mouse ao clicar/passar sobre o elemento. So vai aparecer ponteiro, seta, etc.
- font-family : define o tipo de fonte;
- transition : define transições/animações para os elementos.
- hidden: esconde/ocuta o elemento.
- box-shadow : aplica sombras sobe o elemento.
- text-align : alinhamento do texto.
- outline : define configurações de linha.
- z-index : controla a ordem de sobreposição de elementos alinhados. Informa se o elemento vai ficar no lugar, se ele é o primeiro, se ele fica atrás, etc.

## Bootstrap
é um frameworkque já vem com várias classes estilizadas de css, prontas para uso. Então ao invés de ficar configurando o arquivo css, você só precisa chamar o nome das classes do bootstrap dentro do html que ele já configura os elementos.

### classes do bootstrap
- container : deixa a div no centro da tela.
- container-fluid : deixa a div se espandir junto com a tela.
- row : faz com que os elementos dentro da div fiquem na mesma linha.
- col-1 até o 12 : define quais colunas o elemento ocupa.
- w-100 : define que o elemento ocupa 100% da altura.
- h-100% : define que o elemento ocupa 100% da altura.
- bg-white : define cor de fundo branca.
- mb-1 até 5: define margem para baixo.
- mt-1 até 5 : define margem para o topo.
