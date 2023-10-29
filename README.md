# Conversor de Anos-luz e Quilômetros

Este é um simples conversor web que permite converter entre anos-luz e quilômetros. Insira um valor em anos-luz para convertê-lo em quilômetros ou insira um valor em quilômetros para convertê-lo em anos-luz.

## Como Usar

1. Abra o arquivo `index.php` em um servidor web com suporte a PHP ou configure um servidor local para rodar o código.

2. Na seção **Anos-luz para Quilômetros**, insira um valor em anos-luz (maior ou igual a 1) no campo de entrada.

3. Clique no botão "Converter" para ver o equivalente em quilômetros.

4. Na seção **Quilômetros para Anos-luz**, insira um valor em quilômetros (maior ou igual a 1) no campo de entrada.

5. Clique no botão "Converter" para ver o equivalente em anos-luz.

## Tecnologias Utilizadas

- **HTML**: Utilizado para estruturação da página web.
- **CSS**: Utilizado para estilização da página, proporcionando uma aparência agradável.
- **PHP**: Utilizado para realizar os cálculos de conversão entre anos-luz e quilômetros.
- **JavaScript**: Utilizado para exibir alertas quando os valores inseridos são inválidos (menores que 1).

## Como Funcionam os Algoritmos

### Anos-luz para Quilômetros

O algoritmo para converter anos-luz para quilômetros é baseado na velocidade da luz. A velocidade da luz no vácuo é aproximadamente \(9.461 \times 10^{12}\) quilômetros por ano. Para converter anos-luz para quilômetros, o algoritmo multiplica o número de anos-luz pelo valor da velocidade da luz. A fórmula é:

quilômetros = anos-luz * 9.461 * 10^12 

### Quilômetros para Anos-luz

Para converter quilômetros para anos-luz, o algoritmo utiliza a mesma velocidade da luz. Ele divide o número de quilômetros pela velocidade da luz para calcular quantos anos-luz correspondem aos quilômetros fornecidos. A fórmula é:

anos-luz = quilômetros / 9.461 * 10^12

Esses cálculos são realizados em tempo real quando você insere um valor e clica no botão "Converter" na página web.

Lembre-se de que os valores inseridos devem ser maiores ou iguais a 1 para que a conversão seja válida. Se um valor menor que 1 for inserido, um alerta será exibido para informar ao usuário que o valor deve ser maior ou igual a 1.


## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir problemas ou enviar solicitações de pull request.
