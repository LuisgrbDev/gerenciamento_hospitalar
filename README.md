**Projeto de API em PHP para Gerenciamento Hospitalar**

Este projeto tem como objetivo desenvolver uma API completa em PHP para gerenciamento hospitalar. A API será capaz de lidar com diversas funcionalidades essenciais para a administração de um hospital, proporcionando uma interface robusta e segura para manipulação de dados.

### Funcionalidades principais:

1. **Cadastro de Pacientes:**
   - Endpoint para adicionar novos pacientes ao sistema, com informações como nome, data de nascimento, gênero, etc.

2. **Agendamento de Consultas:**
   - Funcionalidade para agendar consultas médicas, associando-as aos pacientes cadastrados.

3. **Registro de Profissionais:**
   - API permite o cadastro de Profissionais, incluindo cargos e informações de contato.

4. **Controle de Prontuarios:**
   - Sistema para gerenciar o prontuario do pacientes.

5. **Histórico de Consultas e Exames:**
   - Registro completo de todas as consultas realizadas e exames realizados, associados aos respectivos pacientes.

### Tecnologias Utilizadas:

- **PHP:** Linguagem de programação principal para desenvolvimento da API.
- **MySQL:** Banco de dados relacional para armazenamento persistente dos dados.
- **RESTful API:** Arquitetura utilizada para a exposição dos endpoints da API.
- **JSON:** Formato de intercâmbio de dados utilizado para as requisições e respostas da API.

### Estrutura do Projeto:

O projeto está estruturado conforme padrões de desenvolvimento em PHP, com a separação de camadas lógicas para garantir a escalabilidade e a manutenibilidade do código. A estrutura inclui:

- **Controllers:** Responsáveis por receber as requisições HTTP e coordenar ações.
- **Models:** Representações dos objetos do domínio do problema, como Pacientes, Médicos, Consultas, etc.
- **DAOs (Data Access Objects):** Responsáveis pela interação com o banco de dados.
- **Configurações:** Arquivos de configuração para conexão com o banco de dados e outras definições globais.

