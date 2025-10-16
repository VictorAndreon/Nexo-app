# 🚀 Nexo App

> Sua conexão com pessoas e informações relevantes.

## 📌 Visão Geral

Nexo App é uma plataforma de microblogging e rede social projetada para ser mais do que apenas um lugar para se conectar com amigos. O projeto nasce da ideia de criar um "nexo" entre a interação social humana e o acesso inteligente a informações do dia a dia, de forma fluida e integrada à experiência do usuário.

Enquanto os usuários podem criar perfis, postar mensagens e seguir uns aos outros em uma timeline familiar, o grande diferencial do Nexo App são as **Contas de Sistema Inteligentes**. Estas contas especiais fornecem conteúdo dinâmâmico e contextualizado, transformando o feed de notícias em uma ferramenta útil e personalizada.

## ✨ Funcionalidades Principais

### 👥 Interação Social

- **Perfis de Usuário:** Páginas personalizadas com informações e posts de cada membro.
- **Postagens na Timeline:** Publicação de mensagens de texto curtas.
- **Sistema de Seguir:** Usuários podem seguir e deixar de seguir outros para customizar seu feed.
- **Feed Cronológico:** A timeline principal exibe os posts mais recentes das contas que o usuário segue.

### 🤖 Contas de Sistema Inteligentes (O Diferencial)

O coração do Nexo App. Em vez de bots passivos, são fontes de informação viva que publicam conteúdo relevante baseado em dados externos e na localização do usuário. Exemplos incluem:

- **@Clima:** Ao ser visitada, esta conta utiliza a geolocalização do navegador do usuário para fornecer a previsão do tempo exata para sua região, formatada como um post.
- **@Notícias:** Publica as manchetes mais recentes de portais de notícias, mantendo os usuários informados.
- **@Trânsito:** Poderia fornecer atualizações sobre as condições de tráfego na cidade do usuário (via integração com APIs como Google Maps).
- **@Cotações:** Postaria atualizações sobre o mercado financeiro ou criptomoedas.

## 🎯 Objetivo do Projeto

Este é um projeto pessoal com o objetivo de aprofundar os conhecimentos no ecossistema Laravel. Os principais focos de aprendizado são:

- Construir uma aplicação robusta seguindo as melhores práticas de arquitetura de software (Services, Repositories).
- Desenvolver um sistema de banco de dados complexo com relacionamentos (Many-to-Many).
- Integrar a aplicação com múltiplas APIs de terceiros (Clima, Notícias, etc.).
- Criar uma experiência de usuário dinâmica com o auxílio de JavaScript no frontend para requisições assíncronas (AJAX).

## 🛠️ Tecnologias Utilizadas

- **Backend:** `Laravel 12+` (`PHP 8.2+`)
- **Banco de Dados:** `PostgreSQL`
- **Ambiente de Desenvolvimento:** `Laravel Sail` (Docker)
- **Frontend:** `Blade`, `Vite`, `JavaScript`
- **Controle de Versão:** `Git` & `GitHub`

## 🚀 Como Executar o Projeto Localmente

**Pré-requisitos:** Docker Desktop ou Docker Engine/CLI.

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/seu-usuario/nexo-app.git](https://github.com/seu-usuario/nexo-app.git)
    ```

2.  **Navegue até a pasta do projeto:**
    ```bash
    cd nexo-app
    ```

3.  **Copie o arquivo de ambiente:**
    ```bash
    cp .env.example .env
    ```

4.  **Suba os containers do Sail:**
    ```bash
    ./vendor/bin/sail up -d
    ```

5.  **Instale as dependências do Composer:**
    ```bash
    ./vendor/bin/sail composer install
    ```

6.  **Gere a chave da aplicação:**
    ```bash
    ./vendor/bin/sail artisan key:generate
    ```

7.  **Rode as migrations para criar as tabelas do banco:**
    ```bash
    ./vendor/bin/sail artisan migrate
    ```

8.  **Acesse a aplicação** no seu navegador em: `http://localhost`