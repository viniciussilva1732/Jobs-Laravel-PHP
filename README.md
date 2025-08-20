# Modelo de Repositório GitHub - Sistema de Gestão de Empregos e Pessoas

## Descrição do Projeto

Sistema web desenvolvido em Laravel para gerenciamento de informações sobre empregos e pessoas. A aplicação permite cadastrar pessoas, registrar oportunidades de emprego e associar pessoas a cargos específicos. O sistema oferece uma interface intuitiva para visualizar quais pessoas estão ocupando quais posições, facilitando a gestão de recursos humanos e o acompanhamento de alocações.

## Funcionalidades Principais

- ✅ Cadastro completo de pessoas com informações detalhadas
- ✅ Registro de empregos/posições disponíveis
- ✅ Sistema de associação entre pessoas e empregos
- ✅ Relatórios de alocação de pessoal
- ✅ Interface administrativa responsiva
- ✅ Busca e filtros para localizar informações rapidamente
- ✅ Histórico de empregos por pessoa

## 🛠️ Stack Tecnológico

- **Backend:** Laravel 10.x
- **Frontend:** Blade Templates, Bootstrap 5, JavaScript
- **Banco de Dados:** SQLite (desenvolvimento) / MySQL (produção)
- **Outras tecnologias:** jQuery, Ajax, HTML5, CSS3

## 📦 Instalação

Siga os passos abaixo para configurar o projeto localmente:

### 🔹 Clone o repositório
```bash
git clone https://github.com/seu-usuario/emprego-pessoas-laravel.git
cd emprego-pessoas-laravel
```

### 🔹 Instale as dependências do PHP
```bash
composer install
```

### 🔹 Instale as dependências do JavaScript
```bash
npm install
```

### 🔹 Configure o ambiente
```bash
cp .env.example .env
php artisan key:generate
```

### 🔹 Configure o banco de dados SQLite
Edite o arquivo `.env` e adicione:
```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
```

Crie o arquivo do banco:
```bash
touch database/database.sqlite
```

### 🔹 Execute as migrações e seeders
```bash
php artisan migrate --seed
```

### 🔹 Inicie o servidor
```bash
php artisan serve
```

➡️ Agora acesse: [http://localhost:8000](http://localhost:8000)

**Credenciais padrão do administrador:**  
- Email: `admin@example.com`  
- Senha: `password`  

---


## 🧪 Testes

Para rodar os testes unitários e de funcionalidade:
```bash
php artisan test
```


---


👨‍💻 Desenvolvido por **Vinicius Silva** - 2025