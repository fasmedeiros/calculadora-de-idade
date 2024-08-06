# Calculadora de Idade em PHP

Este projeto fornece uma classe PHP para calcular e formatar a idade com base na data de nascimento fornecida. A classe pode determinar se a data fornecida está no passado, presente ou futuro e retornar a idade ou o tempo até o nascimento/gravidez.

## Estrutura do Projeto

| Caminho              | Descrição                                               |
|----------------------|---------------------------------------------------------|
| `src/Util/CalculadoraDeIdade.php` | Contém a classe `CalculadoraDeIdade` que realiza o cálculo da idade. |
| `public/index.php`   | Arquivo de entrada para a aplicação.                   |
| `composer.json`      | Gerencia dependências do projeto.                      |

📁 `projeto/`  
├── 📁 `src/`  
│   └── 📁 `Util/`  
│       └── 📄 `CalculadoraDeIdade.php`  
├── 📁 `public/`  
│   └── 📄 `index.php`  
└── 📄 `composer.json`

## Instalação

### Requisitos

- PHP 7.4 ou superior

### Instalação com Composer

1. **Instale o Composer**: Se você ainda não tem o Composer instalado, siga as instruções em [getcomposer.org](https://getcomposer.org/download/).
2. **Instale as dependências**: Navegue até o diretório do projeto e execute o comando abaixo:

    ```bash
    composer install
    ```

## Uso

1. **Crie um novo arquivo PHP**: No diretório `public/`, você pode criar um arquivo PHP para usar a classe `CalculadoraDeIdade`.
2. **Exemplo de uso**:

    ```php
    <?php
    require_once '../vendor/autoload.php';

    use App\Util\CalculadoraDeIdade;

    // Exemplo de uso
    $dataNascimento = '2024-08-05'; // Data de nascimento
    echo CalculadoraDeIdade::calcular($dataNascimento);
    ```

3. **Acesse no Navegador**: Navegue para `http://localhost:8000` para ver o resultado.

## Exemplos de Saída

### 1. Saída com Gravidez

**Exemplo de entrada:**

Data informada: `2024-06-03` (supondo que a data atual seja `2024-08-05`)

**Saída esperada:**

// gravidez de 2 meses e 2 dias.

### 2. Saída com Dia do Nascimento (data igual à data atual)

**Exemplo de entrada:**

Data informada: `2024-08-05` (supondo que a data atual seja `2024-08-05`)

**Saída esperada:**

// Hoje é o dia do nascimento.

### 3. Saída após nascimento

**Exemplo de entrada:**

Data informada: `2023-05-15` (supondo que a data atual seja `2024-08-05`)

**Saída esperada:**

// 1 ano, 2 meses e 21 dias.

## Contribuição

Se você quiser contribuir para este projeto, siga estas etapas:

1. Faça um fork do repositório.
2. Crie uma nova branch para suas alterações (`git checkout -b minha-alteracao`).
3. Faça suas alterações e commit (`git commit -am 'Adiciona nova funcionalidade'`).
4. Envie suas alterações para o repositório remoto (`git push origin minha-alteracao`).
5. Abra um Pull Request para que suas alterações possam ser revisadas.

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## Contato

Para mais informações, entre em contato com [gannba@hotmail.com](mailto:gannba@hotmail.com).
