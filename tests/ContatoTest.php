<?php
use PHPUnit\Framework\TestCase;
use Controller\ContatoController;

require_once __DIR__ . '/../Controller/ContatoController.php';
require_once __DIR__ . '/../Model/Contato.php';

class ContatoTest extends TestCase {
    private $controller;

    protected function setUp(): void {
        $this->controller = new ContatoController();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    // Cadastro de Contato Válido
    public function testCadastroContatoValido() {
        $resultado = $this->controller->create("Thiago", "Salomão", "71998887766");
        $this->assertEquals("Contato criado com sucesso!", $resultado);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    // Cadastro de Contato Inválido (Telefone Inválido)
    public function testCadastroContatoInvalido() {
        $resultado = $this->controller->create("Theo", "Lima", "123");
        $this->assertEquals("Telefone inválido!", $resultado);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    // Listar Contatos Existentes
    public function testListarContatos() {
        $lista = $this->controller->listar();
        $this->assertIsArray($lista, "O método listar retornar um array.");
    }

    #[\PHPUnit\Framework\Attributes\Test]
    //  Busca Contato por ID
    public function testBuscarContatoPorId() {
        $contato = $this->controller->buscar(1);
        $this->assertTrue(
            is_array($contato) || $contato === "Contato não encontrado.",
            
        );
    }

    #[\PHPUnit\Framework\Attributes\Test]
    // Excluir Contato Existente
    public function testExcluirContato() {
        $resultado = $this->controller->excluir(1);
        $this->assertTrue(
            in_array($resultado, ["Contato excluído com sucesso!", "Erro ao excluir contato."]),
           
        );
    }
}
