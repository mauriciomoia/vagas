# Vagas
  
Sistema feito em Laravel(PHP) e Mysql onde faz-se cadastros de vagas e candidaturas a essas vagas.  

## Deploy
1. Baixar o arquivo dbvagas.sql na pasta arquivos  
2. Importar o banco para o mysql  
3. Configurar conexão de banco em config/app.php  

## Implementação do Sistema
-Foram criadas 3 tabelas: users, anuncios e candidatos  
-Foram criados 2 controllers: SiteController e PainelController  
-O SiteController possui 2 páginas: a página inicial que contém lista de anúncios e a página de um anúncio.  
-Ao clicar em anúncio da lista, podemos ver mais informações sobre e se candidatar à vaga.  
-No menu superior, contém um formulário de login ao painel do sistema.  
-O PainelController contém 2 páginas: a página inicial do usuário anunciante e a página de um anúncio cadastrado pelo usuários.  
-Na página inicial do painel há um formulário para criação de um anúncio ou ver todos os meus anúncios cadastrados.  
-Ao abrir em um anúncio posso ver os seus detalhes e as informações de todas as pessoas que se candidataram.  
  
## Implementação do Job de Envio de Emails
-Para enviar email 2 vezes por dia, é necessário criar um controller que podemos chamar de JobController.  
-Neste job, deve conter uma função para envio de email para os anunciantes de todos os seus candidatos.  
-A depender do ambiente, caso Windows, pode-se criar um arquivo .bat para acessar uma URL em determinado tempo.  
-Caso linux, pode ser definido no arquivo de jobs do sistema, usando cronjobs.  
-Na aplicação deve-se cria uma rota para a função de envio de email e ela será acessada no tempo definido 