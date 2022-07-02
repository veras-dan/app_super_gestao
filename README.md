<h1 align="center"> Gestão Clientes </h1>

<p align="center">
  <img src="https://img.shields.io/static/v1?label=django&message=framework&color=blue&style=for-the-badge&logo=DJANGO"/>
  <img src="https://img.shields.io/static/v1?label=Heroku&message=deploy&color=blue&style=for-the-badge&logo=heroku"/>
  <img src="http://img.shields.io/static/v1?label=License&message=MIT&color=green&style=for-the-badge"/>
  <img src="http://img.shields.io/static/v1?label=Python&message=3.10.5&color=blue&style=for-the-badge&logo=Python"/>
  <img src="http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=RED&style=for-the-badge"/>
</p>

---

## :small_blue_diamond: Índice 

* [Sobre](#-sobre-o-projeto)
* [Descrição do Projeto](#descrição-do-Projeto)
* [Funcionalidades](#-funcionalidades)
* [Deploy da Aplicação](#deploy-da-aplicação-dash)
* [Acesso ao Projeto](#acesso-ao-projeto)
* [Tecnologias utilizadas](#tecnologias-utilizadas)
* [Autor](#-autor)
* [Licença](#licença)

## 💻 Descrição do projeto

Projeto desenvolvido durante o curso **Desenvolva uma aplicação com Django 2.0 e deploy no heroku** oferecida pela [Udemi](https://www.udemy.com/course/django-20-heroku/).
Este projeto é uma experiência online com aprendizado aplicado e com desafios a serem alcançados, essa é só uma fase do desenvolvimento.

---
## :heavy_check_mark: Status
<br>

> Status do Projeto: Concluido :heavy_check_mark:

## Deploy da Aplicação :dash:

> https://client-management-project.herokuapp.com/

<br>

---

## ⚙️ Funcionalidades

<br>

- [x] Criação do projeto:
  - [x] RestFul
    - [x] Criar
    - [ ] Editar
    - [x] Deletar
  - [x] Esilização da aplicação
  - [x] Novas funcionalidades:
    - [ ] Produtos 

---

## 🚀 Como executar o projeto

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Python](https://www.python.org/). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

#### 🎲 Rodando a aplicação
```bash

# Clone este repositório
$ git clone git@github.com:verasdan/gestao_clientes.git

# Acesse a pasta do projeto no terminal/cmd
$ cd gestao_clientes

# Instale as dependências
$ pip install -r requirements.txt

# Instale as migrates
$ python manage.py migrate

# Execute a aplicação em modo de desenvolvimento
$ python manage.py runserver

# O servidor inciará na porta:8000 - acesse http://localhost:8000 

```

### Usuários: 

| name  | email | password | token |
| -------- |-------- |-------- |-------- |
| colaborador | - |acesso123456|:heavy_check_mark:|

---

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

#### **Website**  ([Python](https://www.python.org/)  +  [Django](https://www.djangoproject.com/))

<br>

---

## 💪 Como contribuir para o projeto

1. Faça um **fork** do projeto.
2. Crie uma nova branch com as suas alterações: `git checkout -b my-feature`
3. Salve as alterações e crie uma mensagem de commit contando o que você fez: `git commit -m "feature: My new feature"`
4. Envie as suas alterações: `git push origin my-feature`
> Caso tenha alguma dúvida confira este [guia de como contribuir no GitHub](./CONTRIBUTING.md)

---

## 🦸 Autor

<a href="https://github.com/verasdan">
 <img style="border-radius: 50%;" src="https://media.discordapp.net/attachments/891798888594436199/980284436954357780/perfil_dan.jpg?width=406&height=406" width="100px;" alt="foto"/>
 <br />
 <sub><b>Dan Veras</b></sub></a> <a href="https://github.com/verasdan" title="">🚀</a>
 <br />

  [![Twitter Badge](https://img.shields.io/badge/-@veras_dan-1ca0f1?style=flat-square&labelColor=1ca0f1&logo=twitter&logoColor=white&link=https://twitter.com/veras_dan)](https://twitter.com/veras_dan) [![Linkedin Badge](https://img.shields.io/badge/-Danilo_Veras-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/verasdanilo/)](https://www.linkedin.com/in/verasdanilo/) 
  [![Hotmail Badge](https://img.shields.io/badge/-veras_dan@hotmail.com-0078D4?style=flat-square&logo=microsoft-outlook&logoColor=white&link=mailto:veras_dan@hotmail.com)](mailto:veras_dan@hotmail.com)

---

## 📝 Licença

Este projeto esta sobe a licença [MIT](./LICENSE).

---