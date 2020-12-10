# Connection PDO

Sistema de conexão **PDO** (PHP Data Objects) em **PHP**

### Configuração:

Para configurar a conexão, adicione os valores no arquivo *connection.php*

```bash
$db_host = "";
$db_user = "";
$db_password = "";
$db_name = "";
$db_driver = "";
```
**Exemplo de valores preenchidos:**
```bash
$db_host = "localhost";
$db_user = "akira";
$db_password = "github";
$db_name = "db_github";
$db_driver = "mysql";
```
---
Após os ajustes, utilize a **class** nas demais páginas como no arquivo **examples.php**.
```bash
require_once('connection.php');
$conn = Database::connectionPDO();
```
Utilize os métodos do PDO para executar comandos na conexão:
```bash
$code = $conn->prepare("SELECT * FROM table");
$code->execute();
$data = $code->fetchAll(PDO::FETCH_ASSOC);
```
----
### Mais informações sobre PDO:
- [Introdução ao PHP PDO](https://www.devmedia.com.br/introducao-ao-php-pdo/24973)
- [Manual PDO](https://www.php.net/manual/pt_BR/book.pdo.php)
- [Trabalhando com PDO no PHP](http://www.diogomatheus.com.br/blog/php/trabalhando-com-pdo-no-php/)
- [Entendendo a classe PDO](https://medium.com/trainingcenter/entendendo-e-utilizando-a-classe-pdo-836b3fcaf75)
- [Usando PDO (PHP Data Objects) para aumentar a produtividade](https://www.devmedia.com.br/usando-pdo-php-data-objects-para-aumentar-a-produtividade/28446)
